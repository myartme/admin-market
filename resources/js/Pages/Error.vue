<script setup>
import { computed } from 'vue'

const props = defineProps({ status: Number })

const title = computed(() => {
  return {
    503: '503: Сервис недоступен',
    500: '500: Ошибка сервера',
    404: '404: Страница не найдена',
    403: '403: Запрещено',
  }[props.status]
})

const description = computed(() => {
  return {
    503: 'Извините, мы проводим техническое обслуживание. Пожалуйста, попробуйте позже.',
    500: 'Упс, что-то пошло не так на наших серверах.',
    404: 'К сожалению, не удалось найти страницу, которую Вы ищете.',
    403: 'К сожалению, доступ к этой странице запрещен.',
  }[props.status]
})
</script>

<template>
  <div>
    <H1>{{ title }}</H1>
    <div>{{ description }}</div>
  </div>
</template>