<template>
    <div class="modal fade modal-speaker" id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered rounded-0">
			<div class="modal-content rounded-0">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-1-ModalLabel" class="modal-title sr-only">	💻 CERTIFICACIÓN GRATUITA  💡</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-4">

						<div class="media-body text-center text-md-left mx-auto">
							<h3 class="name mb-2 text-center">💻 CERTIFICACIÓN GRATUITA  💡</h3>
                            <div class="mb-2">
							    <div class="meta"></div>
							    <!-- <div class="meta" >{{ponent.universidad}}</div> -->
                            </div>
						</div><!--//media-body-->
					</div><!--//media-->

					<div class="desc p-4 py-lg-4 px-lg-5">
						<p class="mb-0">

							Para solicitar su certificado puede poner sus datos en el siguiente enlace. Este se encontrará abierto hasta el día Viernes 19 de Noviembre a las 23:59 horas.
							<br><br>
							<div class="text-center">
								<a
									class="btn btn-primary  btn-lg"
									href="https://forms.gle/bR32w9GmbshGtpVP8"
									target="_blank"
									>Solicitar Certificado</a
								>
							</div>
							
						</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
</template>

<script>
export default {
    mounted(){
        this.$root.$on('showCertModal', (ola) => {
            console.log(ola)
		    $('#custom-modal').modal('show')
        })
    }
};
</script>
