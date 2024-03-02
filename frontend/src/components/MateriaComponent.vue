<template>
  <main>
    <ul class="breadcrumb">
      <li><a href="#">Início</a></li>
      <li><a href="/">Blog</a></li>
    </ul>

    <h1>{{ props.titulo }}</h1>
    <img :style="{ 'background-image': 'url(' + props.imagem + ')' }" />
    <p>{{ props.textoCompleto }}</p>
  </main>
</template>

<script lang="js" setup>
import { defineProps } from 'vue';
const props = defineProps(['titulo', 'textoCompleto', 'imagem']);
</script>

<style lang="scss" scoped>
main {
  padding: 0 40px;

  > h1 {
    color: #666666;
    font-size: 32px;
  }

  > img {
    width: 100%;
    background-position: 50% 50%;
    background-size: 100%;
    background-repeat: no-repeat;
    margin-top: 50px;

    @media (min-width: 480px) {
      background-size: 150%;
      height: 200px;
    }

    @media (min-width: 1200px) {
      height: 400px;
    }
  }

  > p {
    font-size: 18px;
    color: #666666;
    margin-top: 50px;
    font-weight: 500;
  }

  &:after {
    content: "";
    display: block;
    width: 100%;
    height: 1px;
    background-color: #e0e0e0;
    margin: 100px 0;
  }
}

ul.breadcrumb {
  padding: 16px 0;
  list-style: none;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li + li:before {
  padding: 8px;
  color: #c4c4c4;
  content: ">";
}
ul.breadcrumb li a {
  font-weight: 400;
  color: #0dadae;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #0dadae;
  text-decoration: underline;
}
</style>
