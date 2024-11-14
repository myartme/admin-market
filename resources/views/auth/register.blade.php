<x-layouts.app>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <x-form-header value="{{ __('auth.title.register') }}" />
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('auth.register.store') }}" class="space-y-6">
                @csrf

                <div>
                    <x-input-label for="name" value="{{ __('auth.input.name') }}" />
                    <div class="mt-2">
                        <x-input-text  id="name" name="name" autocomplete="name" :required="true" :autosave="true" />
                    </div>
                    <x-input-error name="name" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" value="{{ __('auth.input.email') }}" />
                    <div class="mt-2">
                        <x-input-text  id="email" name="email" type="email" autocomplete="email" :required="true" :autosave="true" />
                    </div>
                    <x-input-error name="email" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" value="{{ __('auth.input.password') }}" />
                    <div class="mt-2">
                        <x-input-text  id="password" name="password" type="password" autocomplete="new-password" :required="true" />
                    </div>
                    <x-input-error name="password" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" value="{{ __('auth.input.password_confirm') }}"></x-input-label>
                    <div class="mt-2">
                        <x-input-text  id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" :required="true" />
                    </div>
                    <x-input-error name="password_confirmation" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('auth.login.create') }}">
                        {{ __('auth.link.is_registered') }}
                    </a>

                    <x-primary-button class="ms-4" value="{{ __('auth.button.register') }}" />
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
