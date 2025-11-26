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
    public function __construct(protected CustomerService $service)
    {
        parent::__construct('Pages/Auth');
    }

    public function create(): Response
    {
        return $this->view('Register');
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
