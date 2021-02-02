import { createApp } from 'vue';
import { createStore } from 'vuex';
import App from './App.vue';
import router from './router';

const store = createStore({
  state() {
    return {
      isVisible: '',
    };
  },
  mutations: {
    reset(state, payload) {
      state.isVisible = payload.valueState;
    },
  },
});

const app = createApp(App);
app.use(router);
app.use(store);
app.mount('#app');
