<template>
	<div>
		<Header />

		<div id="wrapper">
			<Sidebar />

			<div id="content-wrapper">
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
