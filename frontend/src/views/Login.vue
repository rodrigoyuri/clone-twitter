<template>
  <div class="login">
    <div class="image-background"></div>
    <div class="actions">
      <div class="actions-content">
        <div class="icon-twitter-action">
          <img src="../assets/twitter-logo.svg" alt="" />
        </div>
        <div class="description-action">
          <h2>See what’s happening in the world right now</h2>
        </div>
        <div class="buttons-actions">
          <div class="text-action">
            <h3>Join Twitter today.</h3>
          </div>
          <Button className="sing-up" textButton="Sing Up" @click="showModal('register')" />
          <Button className="log-in" textButton="Log In" @click="showModal('login')" />
        </div>
      </div>
    </div>
    <Modal />
  </div>
</template>

<script>
import Button from '@/components/Button.vue';
import Modal from '@/components/login/Modal.vue';
import { useStore } from 'vuex';

export default {
  setup() {
    const store = useStore();
    return {
      store,
    };
  },
  name: 'Login',
  components: {
    Button,
    Modal,
  },
  methods: {
    showModal(modal) {
      this.store.commit({
        type: 'reset',
        valueState: modal,
      });
    },
  },
};
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

.login {
    display: flex;
    height: 100vh;
    background-color: #15202b;
}

.image-background {
    width: 50%;
    height: 100%;
    background-image: url("../assets/twitter-logo.svg");
    background-color: var(--main-color);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
}

.actions {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 50%;
}

.actions-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.icon-twitter-action {
   display: flex;
   justify-content: start;
   width: 80%;
   padding-bottom: 2rem;
}

.description-action {
    display: flex;
    justify-content: start;
    width: 80%;
    font-family: var(--font-lato);
    color: #FFF;
    padding-bottom: 4rem;
}

.text-action {
    display: flex;
    justify-content: start;
    width: 90%;
    font-family: var(--font-lato);
    color: #FFF;
}

.buttons-actions {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    width: 90%;
    height: 10rem;
}

@media screen and (max-width: 800px) {
    .login {
        justify-content: center;
        align-items: center;
        flex-direction: column-reverse;
        overflow-y: scroll;
    }

    .image-background {
        width: 100%;
        background-position: center;
    }

    .actions {
        width: 100%;
        padding: 1rem 0;
    }
}
</style>
