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
    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
        <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0">
            <div class="p-6 sm:p-8 lg:p-16 space-y-8">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Авторизация</h2>
                <form @submit.prevent="submit" class="mt-8 space-y-6">
                    <div>
                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2">
                            Email
                        </label>
                        <div class="mt-2">
                            <InputText v-model="form.email" id="email" name="email" autocomplete="email" :required="true" />
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="text-sm font-medium text-gray-900 block mb-2">
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
                        <BaseButton type="submit">
                            Войти
                        </BaseButton>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>