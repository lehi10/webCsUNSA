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
							La Semana de la Computación en su 4ta edición llega a un total de 33 ponencias. El Certificado de participación al evento lo podrán descargar en esta misma página. Para ser acreedor al certificado debes cumplir con lo siguiente:
							<br><br>
							<b> PÚBLICO EN GENERAL:</b>
							<ul>
								<li>
									Encontrarse registrado en el evento.
								</li>
								<li>
									Registrar tu asistencia en cada ponencia.
									<ul>
										<li><b> Min: </b> 70% de Asistencia (23 Ponencias)</li>
										<li><b> Max: </b> 100% de Asistencia (33 Ponencias)</li>
									</ul>
								</li>
							</ul>


							<b> ESTUDIANTES DE LA EPCC: </b>
							<ul>
								<li>Encontrarse registrado en el evento.</li>
								<li>Ingresar a Zoom con el correo, nombres y apellidos que se registraron.	</li>
								<li>Registrar tu asistencia en cada ponencia. Las ponencias de la mañana valen 2 puntos y las ponencias de la tarde 1 punto.
									<ul>
										<li><b> Min: </b> 70% de Asistencia (39 Puntos)</li>
										<li><b> Max: </b> 100% de Asistencia (52 Puntos)</li>
									</ul>
								</li>
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
