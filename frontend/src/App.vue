<template>
  <main>
    <router-view />
  </main>
</template>

<style>
:root {
  --main-color: #039ff5;
  --url-image: "../img/twitter.png";
  --font-lato: 'Lato', sans-serif;
  --dark-color: #15202b;
  --main-color-hover:#0286ce;
  --dark-color-hover: #222e3bb4;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html, body {
  height: 100vh;
  width: 100vw;
}
</style>
