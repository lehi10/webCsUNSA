<template>
    <section id="committee-section" class="committee-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Organización</h3>
			<div class="section-intro text-center single-col-max mx-auto mb-5">Comité Organizador</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 mb-4" v-for="person in comite">
					<div class="card rounded-0">
						<a href="jvascript:void(0)" v-on:click="showModal(person)"><img :src="person.foto" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h6 class="card-title mb-2">{{person.nombre}}</h6>
							<div class="card-text mb-3">
								<div class="meta">Universidad Nacional de San Agustin de Arequipa, Perú</div>
								<div class="meta" v-for="info in person.curr_info">{{info}}</div>
							</div><!--//card-text-->
							<a href="jvascript:void(0)" v-on:click="showModal(person)">Leer más &rarr;</a>
						</div><!--//card-->
						<div class="card-footer text-muted">
							<!-- <ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-orcid fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul> -->
						</div> 
					</div><!--//card-->
				</div><!--//col-->
			</div><!--//row-->
			<div class="sponsors-cta text-center pt-5" v-if="route == ''">
				<a
				class="btn-primary btn btn-lg"
				href="/comite21"
				>Ver más</a
				>
			</div>

		</div><!--//container-->

	</section><!--//commite-section-->
</template>

<script>
import comite from "./comite.json";
export default {
    data: () => ({
        comite: comite,
		route: ''
    }),
	mounted: function(){
		let route = window.location.href.split('/').pop();
		this.route = route
		console.log("Route", route)
		if (route == ''){
			this.comite = this.comite.slice(0, 4)
		}
	},
    methods: {
        showModal(data) {
            this.$root.$emit("showModal", data);
        },
        showInvitedModal(data) {
            data.curr_info = [
                "Universidad Nacional de San Agustín",
                data.grado + " en Ciencia de la Computación"
            ];
            this.$root.$emit("showModal", data);
        }
    },
	computed: {
	}
};
</script>
