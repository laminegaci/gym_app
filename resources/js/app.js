
require('./bootstrap');


import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'

Vue.use(plugin)

const el = document.getElementById('app')

if (el)
{
    new Vue({
        render: h => h(App, {
          props: {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: name => require(`./Pages/${name}`).default,
          },
        }),
      }).$mount(el)

}

