<?php

namespace Module\Frontend\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Module\Common\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class AuthController extends FrontendBaseController
{



    // protected $redirectTo = '/';
    public $view_path = 'auth';
    public $title = 'Auth';

    public function __construct()
    {

        $this->middleware('guest', ['except' => [
            'logout'
        ]]);
    }

    public function showLoginFrom()
    {
        return view(parent::__loadView('login'));
    }

    public function showRegisterFrom()
    {
        return view(parent::__loadView('register'));
    }

    public function showForgetPasswordFrom()
    {
        return view(parent::__loadView('forget-password'));
    }

    public function registerUser(Request $request)
    {


       $this->register($request);
       $email_data = array(
        'name' => $request->firstname,
        'lname' => $request->lastname,
        'email' => $request->email,
        );

       Mail::send(parent::__loadView('Register_email'), $email_data, function ($message) use ($email_data) {
        $message->to($email_data['email'], $email_data['name'])
            ->subject('Thankyou For Your Registration')
            ->from('info@mynotepaper.com', 'JalPipeline');
    });

       return redirect()->route('frontend.home.index')->with('success','Registered successfully.');

    }

    protected function validator(array $data)
    {


        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'user_type' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }



    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user);



    }



    protected function create(array $data)
    {

        return User::create([
            'first_name' => $data['firstname'],
            'last_name' => $data['lastname'],
            'address' => $data['address'],

            'email' => $data['email'],
            'phone' => $data['phone-no'],
           'user_type' => $data['user_type'],
            'password' => Hash::make($data['password']),
        ]);


    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('frontend.home.index');
    }


    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }

}
