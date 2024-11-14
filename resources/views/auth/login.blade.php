<x-layouts.app>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <x-form-header value="{{ __('auth.title.login') }}" />
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('auth.login.store') }}" class="space-y-6">
                @csrf
                <div>
                    <x-input-label for="email" value="{{ __('auth.input.email') }}" />
                    <div class="mt-2">
                        <x-input-text  id="email" name="email" autocomplete="email" :required="true" :autosave="true" />
                    </div>
                    <x-input-error name="email" class="mt-2" />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-input-label for="password" value="{{ __('auth.input.password') }}" />
                        <div class="text-sm">
                            <a href="{{ route('auth.password.reset.store') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">{{ __('auth.link.forgot_password') }}</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <x-input-text  id="password" name="password" type="password" autocomplete="password" :required="true" />
                    </div>
                    <x-input-error name="password" class="mt-2" />
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('auth.checkbox.remember_me') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3" value="{{ __('auth.button.sign_in') }}" />
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
