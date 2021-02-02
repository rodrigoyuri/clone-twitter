<template>
  <div class="form-container">
    <div :class="[this.store.state.isVisible ? 'form-content' : 'hidden']">
      <template v-if="this.store.state.isVisible == 'login'">
        <Header title="Log in to Twitter" />
        <div id="form">
          <form class="form">
            <input
              type="email"
              class="form-input"
              name="email-login"
              id="email-login"
              placeholder="E-mail"
            />
            <input
              type="password"
              class="form-input"
              name="password-login"
              id="password-login"
              placeholder="Password"
            />
            <button type="submit" id="btn-login" class="form-button">
              Log in
            </button>
          </form>
          <footer class="footer">
            <div class="footer-content">
              <a href="#">Esqueceu a senha?</a> .
              <a href="#" id="sing-up">Sing up for Twitter</a>
            </div>
          </footer>
        </div>
      </template>

      <template v-if="this.store.state.isVisible == 'register'">
        <Header title="Register in to Twitter" />
        <div id="form">
          <form class="form">
            <input
              type="text"
              class="form-input"
              name="name"
              id="name"
              placeholder="Username"
            />
            <input
              type="email"
              class="form-input"
              name="email-register"
              id="email-register"
              placeholder="E-mail"
            />
            <input
              type="password"
              class="form-input"
              name="password-register"
              id="password-register"
              placeholder="Password"
            />
            <input
              type="password"
              class="form-input"
              name="confirm-password"
              id="confirm-password"
              placeholder="Confirm Password"
            />
            <button type="submit" class="form-button">Register</button>
          </form>
          <footer class="footer">
            <div class="footer-content">
              <span>Já tem uma conta?</span> .
              <a href="#" id="log-in">Log in for Twitter</a>
            </div>
          </footer>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
import { useStore } from 'vuex';
import Header from './Header.vue';

export default {
  setup() {
    const store = useStore();
    return { store };
  },
  name: 'Form',
  components: {
    Header,
  },
};
</script>

<style>
.form-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: calc(100% - 47px);
}

.form-content {
  width: 100%;
  height: 100%;
}

#form {
  height: 90%;
}

.form {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  color: #FFF;
  font-weight: bold;
  font-size: 1rem;
  font-family: var(--font-lato);
  height: 70%;
}

.form form {
  height: 90%;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
}

.form-input {
  width: 70%;
  height: 50px;
  border: 1px solid #767676;
  border-radius: .2rem;
  background-color: #15202b;
  padding: 1rem;
  font-size: 1rem;
  font-weight: var(--font-lato);
  font-weight: bold;
  color: #FFF;
  outline: none;
}

.form-input:focus {
  border: 1px solid var(--main-color);
}

.form-button {
  width: 70%;
  height: 50px;
  border: none;
  border-radius: 2rem;
  background-color: var(--main-color);
  color: #FFF;
  font-size: 1rem;
  font-weight: bold;
  font-family: var(--font-lato);
  outline: none;
}

.form-button:hover {
  cursor: pointer;
  background-color: var(--main-color-hover);
}

.footer {
  display: flex;
  justify-content: center;
  align-items: center;
}

.fotter-content {
  display: flex;
  justify-content: space-around;
  align-items: center;
  font-size: 14px;
  width: 40%;
}

.footer-content a {
  text-decoration: none;
  color: #FFF;
}

.footer-content a:hover {
  color: var(--main-color-hover);
}

.footer-content span {
  color: #FFF;
}

.hidden {
  display: none;
}
</style>
