<template>
    <div class="modal fade modal-speaker" id="custom-modal" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered rounded-0">
			<div class="modal-content rounded-0">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-1-ModalLabel" class="modal-title sr-only">	💻 CERTIFICACIÓN GRATUITA  💡</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">

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
							Semana de la Computación <br>
							4ta Edición - 2021 <br>

							La Semana de la Computación en su 4ta edición llega a un total de 33 ponencias. El Certificado de participación al evento lo podrán descargar en esta misma página. Para ser acreedor al certificado debes cumplir con lo siguiente:
							<br><br>
							<b> PÚBLICO EN GENERAL:</b>
							<ul>
								<li>
									Encontrarse registrado en el evento.
								</li>
								<li>
									Registrar tu asistencia en cada ponencia (mínimo 28 ponencias).
								</li>
							</ul>


							<b> ESTUDIANTES DE LA EPCC: </b>
							<ul>
								<li>Encontrarse registrado en el evento.</li>
								<li>Registrar tu asistencia en cada ponencia (mínimo 32 ponencias).</li>
								<li>Ingresar a Zoom con el correo, nombres y apellidos que se registraron.	</li>
							</ul>
							
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
