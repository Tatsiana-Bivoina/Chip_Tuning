<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $api_key = config('apiKeys.oxilor_api_key');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$api_key,
        ])->get('https://data-api.oxilor.com/rest/countries');

        $response->successful() ? $countries = json_decode($response) : $countries = [];

        return view('auth.register', compact('countries'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'surname' => ['required', 'string', 'max:100'],
            'phone' => ['nullable', 'string', 'max:20'],
            'private_person' => ['string'],
            'company' => ['exclude_if:private_person,on'],
            'company' => ['required_if:private_person,off'],
            'company_reg_number' => ['exclude_if:private_person,on'],
            'company_reg_number' => ['required_if:private_person,off'],
            'vat_number' => ['exclude_if:private_person,on'],
            'country' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'zip' => ['required', 'numeric'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'agreement' => ['required', 'accepted'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => Hash::make($request->phone),
            'private_person' => $request->private_person,
            'company' => $request->company,
            'company_reg_number' => $request->company_reg_number,
            'vat_number' => $request->vat_number,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'zip' => $request->zip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'agreement' => $request->agreement,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
