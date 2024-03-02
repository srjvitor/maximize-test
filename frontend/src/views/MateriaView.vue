<template>
  <NavbarComponent />
  <MateriaComponent
    v-if="materia.titulo"
    :titulo="materia.titulo"
    :texto-completo="materia.textoCompleto"
    :imagem="materia.imagem"
  />
  <FooterComponent />
</template>

<script lang="js" setup>
import axios from 'axios';
import { defineProps, onMounted, reactive } from 'vue';
import NavbarComponent from "../components/NavbarComponent";
import MateriaComponent from "../components/MateriaComponent";
import FooterComponent from "../components/FooterComponent";

const props = defineProps(['id']);
let materia = reactive({
  titulo: undefined,
  textoCompleto: undefined,
  imagem: undefined
});

const getMateria = async () => {
  const id = props.id;

  const { data } = await axios.get(`http://localhost:8000/materia/${id}`);

  materia.titulo = data.titulo;
  materia.textoCompleto = data.texto_completo;
  materia.imagem = data.imagem;
}

onMounted(() => {
  getMateria()
});
</script>
