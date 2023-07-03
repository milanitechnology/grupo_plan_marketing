<template>
  <div class="submit-form">
    <div v-if="!submitted">
      <div class="form-group">
        <label for="name">Nome</label>
        <input
          type="text"
          class="form-control"
          id="name"
          required
          v-model="eletrodomestico.name"
          name="name"
        />
      </div>

      <div class="form-group">
        <label for="description">Descrição</label>
        <textarea
          class="form-control"
          id="description"
          required
          v-model="eletrodomestico.description"
          name="description"
        ></textarea>
      </div>

      <div class="form-group">
        <label for="tension">Tensão</label>
        <select
          class="form-control"
          id="tension"
          required
          v-model="eletrodomestico.tension"
          name="tension">
            <option value="" disabled>Selecione...</option>
            <option :value="110">127v (110v)</option>
            <option :value="220">220v</option>
        </select>
      </div>

      <div class="form-group">
        <label for="maker">Marca</label>
        <select
          class="form-control"
          id="maker"
          required
          v-model="eletrodomestico.maker"
          name="maker">
            <option value="" disabled>Selecione...</option>
            <option value="electrolux">Electrolux</option>
            <option value="brastemp">Brastemp</option>
            <option value="fischer">Fischer</option>
            <option value="samsung">Samsung</option>
            <option value="lg">LG</option>
        </select>
      </div>

      <button @click="saveEletro" class="btn btn-success">Cadastrar</button>
    </div>

    <div v-else>
      <h5>Dados Cadastrados Com Sucesso!</h5><br>
      <button class="btn btn-success w-100" @click="newEletro">Continuar Cadastrando</button><br>
      <router-link :to="'/eletrodomesticos/'" class="btn btn-light w-100">Voltar ao Início</router-link>
    </div>
  </div>
</template>

<script>
import EletroDataService from "../services/EletroDataService";

export default {
  name: "add-eletrodomestico",
  data() {
    return {
      eletrodomestico: {
        id: null,
        name: "",
        description: "",
        tension: "",
        maker: "",
        published: false
      },
      submitted: false
    };
  },
  methods: {
    saveEletro() {
      var data = {
        name: this.eletrodomestico.name,
        description: this.eletrodomestico.description,
        tension: this.eletrodomestico.tension,
        maker: this.eletrodomestico.maker
      };

      EletroDataService.store(data)
        .then(response => {
          this.eletrodomestico.id = response.data.id;
          console.log(response.data);
          this.submitted = true;
        })
        .catch(e => {
          console.log(e);
        });
    },
    
    newEletro() {
      this.submitted = false;
      this.eletrodomestico = {};
    }
  }
};
</script>

<style>
.submit-form {
  max-width: 300px;
  margin: auto;
}
</style>
