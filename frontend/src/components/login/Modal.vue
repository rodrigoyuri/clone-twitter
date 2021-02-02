<template>
    <div
      :class="[this.store.state.isVisible == '' ? 'hidden' : 'modal']"
    >
      <div class="modal-content">
        <div class="close-modal">
          <span id="close-modal" @click="closeModal">&times;</span>
        </div>
        <Form />
      </div>
    </div>
</template>

<script>
import { useStore } from 'vuex';
import Form from './modal/Form.vue';

export default {
  setup() {
    const store = useStore();
    return { store };
  },
  name: 'Modal',
  components: {
    Form,
  },
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
.modal {
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

.hidden {
  display: none;
}
</style>
