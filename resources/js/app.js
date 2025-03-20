import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
  resolve: async name => {
    const page = await resolvePageComponent(`../views/pages/${name}.vue`, import.meta.glob("../views/pages/**/*.vue"));
    //page.default.layout ??= Admin;
    return page;
},
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
