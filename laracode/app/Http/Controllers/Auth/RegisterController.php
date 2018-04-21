<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Helpers\Ip;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Event;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request as Request;
use UxWeb\SweetAlert\SweetAlert as Alert;

class RegisterController extends FrontController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct(); 
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'priority' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'priority' => $data['priority'],
            'ip_addr'=>Ip::get(),
            'activation_token' => md5(uniqid()),
        ]);

        Alert::success('Hi, '.ucwords($user->name).', your account has been activate ', 'Congratulations')->persistent("Ok"); 
    }

//     public function activation()
//     {
//         $token = Request::segment(3);
//         if (trim($token) == '') {
//             abort(404);
//         }
        
//         $user = User::where('activation_token', $token)->first();
        
//         if ($user) {
//             if ($user->active != 1) {
//                 // Activate
//                 $user->active = 1;
//                 $user->last_login_at =  Carbon::now();
//                 $user->ip_addr = Ip::get();
//                 $user->save();
//                 Alert::success('Hi, '.ucwords($user->name).', your account has been activate ', 'Congratulations')->persistent("Ok"); 
//             } else {
//                 Alert::error('Error, please try again.', 'Opps')->persistent("Ok"); 
//             }
//             // Connect the User
//             if (Auth::loginUsingId($user->id)) {
//                 //$this->user = Auth::user();
//                 //View::share('user', $this->user);
//                 return redirect('/account');
//             } else {
//                 return redirect('/login');
//             }
//         } else {
//             $data = ['error' => 1, 'message' => t($this->msg['activation']['error'])];
//         }
        
//         // Meta Tags
//         MetaTag::set('title', $data['message']);
//         MetaTag::set('description', $data['message']);
        
//        return redirect('/login');
// }
}
