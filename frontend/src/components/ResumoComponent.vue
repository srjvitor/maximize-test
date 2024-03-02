<template>
  <div class="resumo-noticia">
    <div class="imagem-noticia-container">
      <img :src="props.imagem" />
    </div>
    <div class="resumo-noticia-container">
      <span>{{ props.titulo }}</span>
      <p>{{ props.descricao }}...</p>
      <router-link :to="`/materia/${props.id}`">LER MAIS</router-link>
    </div>
  </div>
</template>

<script lang="js" setup>
import { defineProps } from 'vue';

const props = defineProps(['id', 'titulo', 'descricao', 'imagem'])
</script>

<style lang="scss" scoped>
.resumo-noticia {
  height: 120px;
  display: flex;
  margin-top: 50px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 5px 5px 50px #e8e8e8;
}

.imagem-noticia-container {
  height: 100%;

  > img {
    height: 100%;
  }
}

.resumo-noticia-container {
  width: 80%;
  display: grid;
  gap: 13px;
  position: relative;
  padding: 20px 20px 10px 20px;

  > span {
    font-size: 13px;
    color: #0dadae;
  }

  > p {
    font-size: 11px;
    color: #666666;
    font-weight: 500;
  }

  > a {
    font-size: 10px;
    color: #0dadae;
    text-decoration: none;
    display: block;
    text-align: end;
  }
}

.resumo-noticia-container::after {
  content: "";
  width: 33px;
  height: 3px;
  background-color: #fbb03f;
  position: absolute;
  bottom: 15px;
  left: -15px;
}
</style>
