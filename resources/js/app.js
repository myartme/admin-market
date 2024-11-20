import './bootstrap';

import { createSSRApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3';

import DefaultLayout from './Layouts/Default.vue';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    let page = pages[`./Pages/${name}.vue`];
    page.default.layout = name.startsWith('Public/') ? undefined : DefaultLayout;
    return page;
  },
  setup({ el, App, props, plugin }) {
    createSSRApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
});