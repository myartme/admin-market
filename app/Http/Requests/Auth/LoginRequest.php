<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate(): void
    {
        if ($this->isLimitReached() || !Auth::attempt(
            $this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->getLimiterLoginKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.errors.incorrect_email_or_password')
            ]);
        }

        RateLimiter::clear($this->getLimiterLoginKey());
    }

    public function isLimitReached(): bool
    {
        if (!RateLimiter::tooManyAttempts($this->getLimiterLoginKey(), 5)) {
            return false;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->getLimiterLoginKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.errors.too_many_attempts', [
                'seconds' => $seconds,
            ]),
        ]);
    }

    public function getLimiterLoginKey(): string
    {
        return Str::lower($this->string('email')).'|'.$this->ip();
    }
}
