<template>
  <div id="app">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <router-link to="/" class="navbar-brand"><img src="https://www.planmkt.com.br/public/images/logo-plan.png" :style="{'width': '5rem'}"></router-link>
      <div class="navbar-nav mr-auto">
        <li class="nav-item">
          <router-link to="/eletrodomesticos" class="nav-link">Início</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/add" class="nav-link">Cadastrar</router-link>
        </li>
      </div>
    </nav>

    <div class="container mt-3">
      <router-view />
    </div>
  </div>
</template>

<script>
export default {
  name: "app"
};
</script>
