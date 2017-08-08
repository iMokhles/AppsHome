<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use RegistersUsers, AuthenticatesUsers, SendsPasswordResetEmails, ResetsPasswords;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*
     * GET Methods
     */
    public function login_view() {
        $data = [];
        $data['banner_title'] = "Log In";
        $data['banner_title_icon'] = "arrow-right";
        $data['banner_subtitle'] = "Connect to your dashboard!";

        return view('frontend.site.auth.login', $data);
    }
    public function register_view() {
        $data = [];
        $data['banner_title'] = "Sign Up";
        $data['banner_title_icon'] = "plus";
        $data['banner_subtitle'] = "Get your favorites apps in a few seconds";

        return view('frontend.site.auth.register', $data);
    }
    public function forgotPassword_view() {

        $data = [];
        $data['banner_title'] = "Forgot Password ?";
        $data['banner_title_icon'] = "lock";
        $data['banner_subtitle'] = "Request new one in a few seconds";

        return view('frontend.site.auth.email_password', $data);
    }
    public function newPassword_view($token) {

        $data = [];
        $data['banner_title'] = "You requested new password?";
        $data['banner_title_icon'] = "unlock";
        $data['banner_subtitle'] = "Submit your new password here!";
        $data['token'] = $token;

        return view('frontend.site.auth.forgot_password', $data);
    }
    public function activate_view($token) {
        $data = [];
        $data['banner_title'] = "Account Activated";
        $data['banner_title_icon'] = "check";
        $data['banner_subtitle'] = "Thanks for verifying your e-mail";

        return view('frontend.site.auth.activated_user', $data);
    }
    /*
     * POST Methods
     */

    /*
     * Login
     */
    public function post_login(Request $request) {

        return $this->login($request);
    }

    /*
     * Register
     */
    public function post_register(Request $request) {

        return $this->register($request);
    }

    /*
     * Send Reset Email
     */
    public function post_forgotPassword(Request $request) {

        return $this->sendResetLinkEmail($request);
    }

    /*
     * Submit New Password
     */
    public function post_newPassword(Request $request, $token) {

        return $this->reset($request);
    }

    protected function guard()
    {
        return Auth::guard("web");
    }
    public function redirectPath() {

        return redirect($this->redirectTo);
    }
    protected function credentials(Request $request)
    {
        if ($request->isMethod("POST")) {
            if ($request->is('auth/login')) {
                return $request->only('email', 'password');
            } else if ($request->is('auth/new-password')) {
                return $request->only(
                    'email', 'password', 'password_confirmation', 'token'
                );
            }
        } else {
            return redirect('/');
        }
    }
    public function broker()
    {
        return Password::broker();
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}
