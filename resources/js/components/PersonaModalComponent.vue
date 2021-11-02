<template>
    <div class="modal fade modal-speaker modal-luciano-romero" id="persona-modal" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-1-ModalLabel" class="modal-title sr-only">‪{{ponent.nombre}}</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" :src="ponent.foto || '/images/default-speaker.png'" alt="" />

						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">{{ponent.nombre}}</h2>
                            <div class="mb-2">
							    <div class="meta" v-if="ponent.grados" v-for="grado in ponent.grados">{{grado}}</div>
                            </div>

							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list-->
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 p-lg-5">
						<p class="mb-0">
							{{ponent.descripcion}}
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
</template>

<script>
export default {
    data: ()=>({
        ponent: {}
    }),
    mounted(){
        this.$root.$on('showModal', data =>{
            this.ponent = data
		    $('#persona-modal').modal('show')
            console.log("Modal:", data)
        })
    }
}
</script>