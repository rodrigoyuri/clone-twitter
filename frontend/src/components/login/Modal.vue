<template>
  <div class="modal">
    <div
      :class="[this.store.state.isVisible == '' ? 'hidden' : 'modal-container']"
    >
      <div class="modal-content">
        <div class="close-modal">
          <span id="close-modal" @click="closeModal">&times;</span>
        </div>
        <div class="forms">
          <div class="forms-content">
            <div
              :class="[
                this.store.state.isVisible == 'login'
                  ? 'content-login'
                  : 'hidden',
              ]"
            >
              <div class="form-login-header">
                <img src="../../assets/twitter-logo.svg" alt="" />
                <h3>Login in to Twitter</h3>
              </div>
              <div class="form-login">
                <form id="form-login">
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
                <div class="forget">
                  <a href="#">Esqueceu a senha?</a> .
                  <a href="#" id="sing-up">Sing up for Twitter</a>
                </div>
              </div>
            </div>

            <div
              :class="[
                this.store.state.isVisible == 'register'
                  ? 'content-register'
                  : 'hidden',
              ]"
            >
              <div class="form-register-header">
                <img src="../../assets/twitter-logo.svg" alt="" />
                <h3>Register in to Twitter</h3>
              </div>
              <div class="form-register">
                <form action="">
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
                  <button type="submit" id="btn-register" class="form-button">
                    Register
                  </button>
                </form>
                <div class="link-log-in">
                  <span>Já tem uma conta?</span> .
                  <a href="#" id="log-in">Log in for Twitter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { useStore } from 'vuex';

export default {
  setup() {
    const store = useStore();
    return { store };
  },
  name: 'Modal',
  methods: {
    closeModal() {
      this.store.commit({
        type: 'reset',
        valueState: '',
      });
    },
  },
};
</script>

<style>
.modal-container {
  width: 100vw;
  height: 100vh;
  background-color: #00000057;
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  width: 40rem;
  height: 36rem;
  background-color: #15202b;
}

.close-modal {
  display: flex;
  justify-content: flex-end;
  margin-right: 1rem;
}

.close-modal span {
  color: #FFF;
  font-size: 40px;
  font-weight: bold;
  cursor: pointer;
}

.forms {
  display: flex;
  justify-content: center;
  align-items: center;
  height: calc(100% - 47px);
}

.forms-content {
  width: 100%;
  height: 100%;
}

.content-login, .content-register {
  height: 100%;
}

.hidden {
  display: none;
}

.form-login-header, .form-register-header {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  font-family: var(--font-lato);
  color: #FFF;
  height: 30%;
}

.form-login-header img {
  width: 10%;
  background-position: center;
}

.form-login, .form-register {
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

.form-login form, .form-register form {
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

.forget, .link-log-in {
  display: flex;
  justify-content: space-around;
  font-size: 14px;
  width: 40%;
  margin-bottom: 1rem;
}

.forget a {
  text-decoration: none;
  color: #FFF;
}

.forget a:hover {
  color: var(--main-color-hover);
}

.link-log-in a {
  text-decoration: none;
  color: #FFF;
}

.link-log-in a:hover {
  color: var(--main-color-hover);
}
</style>
