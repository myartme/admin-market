<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

import InputText from '../../Shared/InputText.vue';
import BaseButton from '../../Shared/BaseButton.vue';
import InputCheckbox from '../../Shared/InputCheckbox.vue';

const form = reactive({
  email: '',
  password: '',
});

function submit() {
  router.post('/login', form);
}
</script>

<template>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Авторизация</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form @submit.prevent="submit" class="space-y-6">
                <div>
                    <label for="email" class="block font-medium text-sm text-gray-700">
                        Email
                    </label>
                    <div class="mt-2">
                        <InputText v-model="form.email" id="email" name="email" autocomplete="email" :required="true" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block font-medium text-sm text-gray-700">
                            Пароль
                        </label>
                        <div class="text-sm">
                            <a href="{{ route('auth.password.reset.store') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Забыл(а) пароль</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <InputText v-model="form.password" id="password" name="password" type="password" autocomplete="password" :required="true" />
                    </div>
                </div>
                <div class="block mt-4">
                    <InputCheckbox id="remember_me" name="remember">Запомнить</InputCheckbox>
                </div>
                <div class="flex items-center mt-4">
                    <BaseButton type="submit" class="block">
                        Войти
                    </BaseButton>
                </div>
            </form>
        </div>
    </div>
</template>