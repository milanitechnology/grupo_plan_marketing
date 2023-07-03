<template>
  <div class="list row">
    <div class="col-lg-6 col-md-6 col-12">
      <h4>Lista de Eletrodomésticos</h4>
      <ul class="list-group">
        <li class="list-group-item"
          style="cursor: pointer;"
          :class="{ active: index == currentIndex }"
          v-for="(eletro, index) in eletrodomesticos"
          :key="index"
          @click="setActiveEletro(eletro, index)"
        >
          {{ eletro.name }}
        </li>
      </ul>

    </div>

    <!--QUANDO CLICA PARA TER MAIS DETALHES DO PRODUTO-->
    <div class="col-lg-6 col-md-6 col-12">
      <div v-if="currentEletro">
        <h4>Eletrodoméstico</h4>
        <div>
          <label><strong>Nome:</strong></label> {{ currentEletro.name }}
        </div>
        <div>
          <label><strong>Descrição:</strong></label> {{ currentEletro.description }}
        </div>
        <div>
          <label><strong>Tensão:</strong></label> {{ currentEletro.tension }}
        </div>
        <div>
          <label><strong>Marca:</strong></label> {{ currentEletro.maker }}
        </div>
    
        <router-link :to="'/eletrodomesticos/' + currentEletro.id" class="badge badge-warning">Editar</router-link>
      </div>
      <div v-else>
        <br />
      </div>
    </div>
  </div>
</template>

<script>
import EletroDataService from "../services/EletroDataService";

export default {
  name: "eletrodomesticos-list",
  data() {
    return {
      eletrodomesticos: [],
      currentEletro: null,
      currentIndex: -1,
      name: ""
    };
  },
  methods: {
    retrieveEletros() {
      EletroDataService.getAll()
        .then(response => {
          this.eletrodomesticos = response.data;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    },

    refreshList() {
      this.retrieveEletros();
      this.currentEletro = null;
      this.currentIndex = -1;
    },

    setActiveEletro(eletro, index) {
      this.currentEletro = eletro;
      this.currentIndex = eletro ? index : -1;
    },
  },
  mounted() {
    this.retrieveEletros();
  }
};
</script>

<style>
.list {
  text-align: left;
  max-width: 750px;
  margin: auto;
}
</style>
