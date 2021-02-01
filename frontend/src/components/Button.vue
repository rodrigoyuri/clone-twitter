<template>
  <button :class="className">{{ textButton }}</button>
</template>

<script>
export default {
  name: 'Button',
  props: {
    className: String,
    textButton: String,
  },
};
</script>

<style>
button {
    width: min(400px, 100%);
    height: 50px;
    border: 1px solid var(--main-color);
    border-radius: 10rem;
    outline: none;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
}

.sing-up {
 background-color: var(--main-color);
 color: #FFF;
}

.log-in {
    background-color: var(--dark-color);
    color: var(--main-color);
}

.sing-up:hover {
   background-color: var(--main-color-hover);
}

.log-in:hover {
    background-color: var(--dark-color-hover);
}
</style>
