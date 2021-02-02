<template>
  <header class="header">
    <img src="../../../assets/twitter-logo.svg" alt="logo twitter" />
    <h3>{{ title }}</h3>
  </header>
</template>

<script>
export default {
  name: 'Header',
  props: {
    title: {
      type: String,
    },
  },
};
</script>

<style>
.header {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  font-family: var(--font-lato);
  color: #FFF;
  height: 30%;
}

.header img {
  width: 10%;
  background-position: center;
}
</style>
