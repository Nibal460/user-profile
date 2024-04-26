<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
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
    protected $redirectTo = '/home';
    protected $auth;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
      //  $this->middleware('guest');
    //}
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
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
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' => ['required', 'string', 'max:255'],
        'location' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

     protected function create(array $data)
{
    // Generate a unique username based on the user's first name
    $username = strtolower($data['fname'] . '_' . Str::random(4)); // Use Str::random() instead of str_random()

    // Check if the generated username already exists
    while (User::where('username', $username)->exists()) {
        $username = strtolower($data['fname'] . '_' . Str::random(4)); // Regenerate username if it already exists
    }

    // Create the user with the generated username
    $user = User::create([
        'fname' => $data['fname'],
        'lname' => $data['lname'],
        'username' => $username,
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'telephone' => $data['telephone'],
        'location' => $data['location'], // Add the location field
    ]);

    // Create the associated profile
    $user->profile()->create([
    'fname' => $data['fname'],
    'lname' => $data['lname'],
    'email' => $data['email'],
    'telephone' => $data['telephone'],
    'location' => $data['location'],
    ]);

    return $user;
}

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
