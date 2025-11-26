<?php

namespace App\Http\Controllers\Registers;

use App\Dto\Registers\CustomerDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Registers\CustomerRequest;
use App\Services\Registers\CustomerService;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Inertia\Response;

class CustomerController extends Controller
{
    private CustomerService $service;

    public function __construct()
    {
        $this->setPathView(self::PATH_AUTH_VIEW);
    }

    public function create(): Response
    {
        return $this->pageView('Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(CustomerRequest $req): RedirectResponse
    {
        try {
            $user = $this->service->register(CustomerDto::Schema($req));

            event(new Registered($user));

            Auth::login($user);

            return redirect()->intended(route('dashboard', absolute: false));
        } catch (Exception $err) {
            return redirect()->intended(route('dashboard', absolute: false));
        }
    }
}
