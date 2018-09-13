/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

window.Vue = require('vue');

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

Vue.component(
  'todo',
  require('./components/todo.vue')
);
Vue.component(
  'news',
  require('./components/news.vue')
);
Vue.component(
  'items',
  require('./components/items.vue')
);
Vue.component(
  'form-component',
  require('./components/form-component.vue'),
);
Vue.component(
  'home-component',
  require('./components/home-component.vue'),
);
Vue.component(
  'login-component',
  require('./components/login-component.vue'),
);
Vue.component(
  'log-out-component',
  require('./components/log-out-component.vue'),
);

const app = new Vue({
  el: '#app',
  data: {
    posts: [{
      id: 1,
      title: 'My journey with Vue'
    },
    {
      id: 2,
      title: 'Blogging with Vue'
    },
    {
      id: 3,
      title: 'Why Vue is so fun'
    }
  ],
  items: [{
    id: 1,
    title: 'First item'
  },
  {
    id: 2,
    title: 'Second item'
  },
  {
    id: 3,
    title: 'Third item'
  }
],
username:''
}

});
