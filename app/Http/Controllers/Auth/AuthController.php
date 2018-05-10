<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Socialite;
use Auth;
use App\User;
use App\Customer;
use Log;

class AuthController extends Controller
{
    //

    protected $redirectTo = 'welcome';

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback(Request $request, $provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        $request->session()->flush();
        if($provider=='twitter')
        {
            $request->session()->push('customer_id',$authUser->id);
        }
        else
        {
            $request->session()->push('customer_id',$authUser->email);
        }


        $request->session()->push('customer_name',$authUser->first_name);
        Log::info(json_encode($authUser->first_name));
        //return redirect($this->redirectTo)->with('customer_name',$authUser->first_name);

        //return redirect()->back();

       return redirect('welcome');
    }



    public function findOrCreateUser($user, $provider)
    {
        $authUser = Customer::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return Customer::create([
            'first_name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }





}
