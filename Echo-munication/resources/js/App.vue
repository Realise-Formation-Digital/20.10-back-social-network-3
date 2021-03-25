<template>
  <div id="app">
	  <font-awesome-icon icon="user-secret" />
	  <Header />
   <router-view></router-view>
	  <Footer />

  </div>
</template>

<script>
import Header from "./components/layout/Header.vue";
import Footer from "./components/layout/Footer.vue";

export default {
	name: 'App',
	components: {
		Header,
		Footer
	},
	created() {
		document.querySelector("body").style.backgroundColor = "#fff";
	},

};
</script>