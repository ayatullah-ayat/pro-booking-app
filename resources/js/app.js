
require('./bootstrap');

import moment from 'moment';
import { createApp } from 'vue';
import Index from './Index.vue';
import router from './router/router';

const app = createApp(Index);


app.filter("fromNow", value => moment(value).fromNow());

// app.component('hello-world', HelloWorld);
app.use(router);
app.mount('#app');
