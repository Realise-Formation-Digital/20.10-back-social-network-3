<!-- La SPA Vue dans laquelle on navigue grâce à <router-view> qui modifie l'élément Contenu (p. ex. ; pour afficher les tutoriels ou les favoris) tout en gardant la structure globale de la page grâce aux appels de Header, Sidebar et Footer (situés dans components > layout) --->
<template>
	<div>
		<Header />

		<div id="wrapper">
			<Sidebar />

			<div id="content-wrapper">
				<!-- Appel du Contenu voué à changer lors de la navigation grâce au menu
				Les différents éléments du Contenu se trouvent dans js > views -->
				<router-view></router-view> <!-- container-fluid div Replaced by router-view -->
				
				<Footer />
			</div>
		</div>
	</div>
</template>

<script>
import Header from "./components/layout/Header.vue";
import Sidebar from "./components/layout/Sidebar.vue";
import Footer from "./components/layout/Footer.vue";

export default {
	components: {
		Header,
		Sidebar,
		Footer
	},
	created() {
		document.querySelector("body").style.backgroundColor = "#fff";
	}
};
</script>