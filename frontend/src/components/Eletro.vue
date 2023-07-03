<template>
  <div v-if="currentEletro" class="edit-form">
    <h4 class="mb-3">Eletrodoméstico</h4>

    <div class="alert alert-primary" role="alert" v-if="message">
      {{ message }}
    </div>

    <form>
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name"
          v-model="currentEletro.name"
        />
      </div>
      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea type="text" class="form-control" id="description"
          v-model="currentEletro.description"
        ></textarea>
      </div>
      <div class="form-group">
        <label for="tension">Tensão</label>
        <select
          class="form-control"
          id="tension"
          required
          v-model="currentEletro.tension"
          name="tension">
            <option value="110">127v (110v)</option>
            <option value="220">220v</option>
        </select>
      </div>
      <div class="form-group">
        <label for="maker">Marca</label>
        <select
          class="form-control"
          id="maker"
          required
          v-model="currentEletro.maker"
          name="maker">
            <option value="electrolux">Electrolux</option>
            <option value="brastemp">Brastemp</option>
            <option value="fischer">Fischer</option>
            <option value="samsung">Samsung</option>
            <option value="lg">LG</option>
        </select>
      </div>
    </form>

    <button type="submit" class="btn btn-success"
      @click="updateEletro"
    >
      Atualizar
    </button>

    <button class="btn btn-danger mr-2 ml-5"
      @click="deleteEletro"
    >
      Excluir
    </button>

  </div>

  <div v-else>
    <br />
    <div class="spinner-border text-warning" role="status">
      <span class="sr-only">Carregando...</span>
    </div>
  </div>
</template>

<script>
import EletroDataService from "../services/EletroDataService";

export default {
  name: "eletrodomestico",
  data() {
    return {
      currentEletro: null,
      message: ''
    };
  },
  methods: {
    getEletro(id) {
      EletroDataService.get(id)
        .then(response => {
          this.currentEletro = response.data;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    },

    updateEletro() {
      EletroDataService.update(this.currentEletro.id, this.currentEletro)
        .then(response => {
          console.log(response.data);
          this.message = 'Eletrodoméstico atualizado com sucesso!';
        })
        .catch(e => {
          console.log(e);
        });
    },

    deleteEletro() {
      if(confirm("Você deseja realmente deletar este produto?")){

        EletroDataService.delete(this.currentEletro.id)
          .then(response => {
            console.log(response.data);
            this.message = 'Eletrodoméstico deletado com sucesso!';
            this.$router.push({ name: "eletrodomestico" });
          })
          .catch(e => {
            console.log(e);
          });
      }
    }
  },
  mounted() {
    this.message = '';
    this.getEletro(this.$route.params.id);
  }
};
</script>

<style>
.edit-form {
  max-width: 300px;
  margin: auto;
}
</style>
