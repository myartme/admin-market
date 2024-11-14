<x-layouts.app>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <x-form-header value="{{ __('auth.title.forgot_password') }}" />
            <p>{{ __('auth.description.forgot_password') }}</p>
            <form method="POST" action="{{ route('auth.password.reset.store') }}">
                @csrf

                <div>
                    <x-input-label for="email" />
                    <x-input-text id="email" name="email" class="block mt-1 w-full" type="email" :required="true" :autosave="true" />
                    <x-input-error name="email" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3" value="{{ __('auth.button.reset_password') }}" />
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
