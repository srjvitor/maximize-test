<template>
  <main>
    <h1>Blog</h1>

    <div id="listagem-container">
      <ResumoComponent
        v-for="item in materias"
        :key="item.id"
        :id="item.id"
        :titulo="item.titulo"
        :descricao="item.descricao"
        :imagem="item.imagem"
      />
    </div>

    <span id="empty-alert" v-if="isEndOfList"
      >Não existem mais matérias a serem exibidas</span
    >
  </main>
</template>

<script lang="js" setup>
import ResumoComponent from './ResumoComponent.vue';
import { ref, onMounted, onUnmounted, watch } from 'vue';
import axios from 'axios';

const materias = ref([]);
const currentPage = ref();
const isEndOfList = ref(false);
const isAtBottom = ref(false);

watch(isAtBottom, (value) => {
  if(value) getMoreMaterias()
})

const getLastMaterias = async () =>{
  const { data } = await axios.get('http://localhost:8000/materias');
  materias.value = data.data;
  currentPage.value = data.current_page;
}

const getMoreMaterias = async () =>{
  currentPage.value++;

  const { data } = await axios.get(`http://localhost:8000/materias?page=${currentPage.value}`);
  if(!data.data.length) isEndOfList.value = true;

  materias.value.push(...data.data);
}

const checkScrollPosition = () => {
 const scrollTop = window.scrollY || document.documentElement.scrollTop;
 const windowHeight = window.innerHeight;
 const docHeight = document.documentElement.offsetHeight;

 isAtBottom.value = scrollTop + windowHeight >= docHeight;
};

onMounted(() => {
  getLastMaterias()
  window.addEventListener('scroll', checkScrollPosition);
});

onUnmounted(() => {
 window.removeEventListener('scroll', checkScrollPosition);
});
</script>

<style lang="scss" scoped>
main {
  padding: 30px;
}

#listagem-container {
  display: grid;
  column-gap: 20px;
  grid-template-columns: repeat(1, 2fr);
}

h1 {
  position: relative;
  color: #666666;
}

h1::after {
  content: "";
  width: 29px;
  height: 5px;
  background-color: #fbb03f;
  position: absolute;
  bottom: -10px;
  left: 0;
}

#empty-alert {
  margin-top: 30px;
  color: #666666;
  padding: 20px;
  text-align: center;
  display: block;
}
</style>
