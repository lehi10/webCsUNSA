<template>
  <section id="speakers-section" class="speakers-section section">
    <div class="container">
      <h3 class="section-heading text-center mb-3">Ponentes</h3>
      <div class="section-intro text-center single-col-max mx-auto mb-5">
        Los ponentes que estarán presentes para esta Semana de la Computación
        son:
      </div>
      <div class="row">
        <div
          class="col-12 col-md-6 col-lg-3 mb-4"
          v-for="(ponent, idx) in ponentes"
          v-bind:key="idx"
        >
          <div class="card rounded-0">
            <a href="javascript:void(0)" v-on:click="showModal(ponent)"
              ><img
                :src="ponent.foto || '/images/default-speaker.png'"
                class="card-img-top rounded-0"
                alt=""
            /></a>
            <div class="card-body">
              <h5 class="card-title mb-2">{{ ponent.nombre }}</h5>
              <div class="card-text mb-3">
                <div
                  class="meta"
                  v-if="ponent.curr_info"
                  v-for="grado in ponent.curr_info"
                >
                  {{ grado }}
                </div>
                <!-- <div class="meta">{{ ponent.universidad }}</div> -->
              </div>
              <!--//card-text-->
              <a href="javascript:void(0)" v-on:click="showModal(ponent)"
                >Leer más &rarr;</a
              >
            </div>
            <!--//card-->
            <div class="card-footer text-muted">
              <ul class="social-list list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#"><i class="fab fa-orcid fa-fw"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><i class="fab fa-github fa-fw"></i></a>
                </li>
              </ul>
              <!--//social-list-->
            </div>
          </div>
          <!--//card-->
        </div>
        <!--//col-->
      </div>
      <!--//row-->
      <!-- <hr />
      <h3 class="section-heading text-center mb-3">Ponentes Invitados</h3>
      <div class="row mt-5">
        <div
          class="col-12 col-md-6 col-lg-3 mb-4"
          v-for="(ponent, idx) in ponentesB"
          v-bind:key="idx"
        >
          <div class="card rounded-0">
            <a href="javascript:void(0)" v-on:click="showInvitedModal(ponent)"
              ><img
                :src="ponent.foto || `/images/default-speaker${ponent.genero || ''}.png`"
                class="card-img-top rounded-0"
                alt=""
            /></a>
            <div class="card-body">
              <h5 class="card-title mb-2">{{ ponent.nombre }}</h5>
              <div class="card-text mb-3">
                <div class="meta">{{ ponent.grado }}</div>
              </div>
              <a href="javascript:void(0)" v-on:click="showInvitedModal(ponent)"
                >Leer más &rarr;</a
              >
            </div>
            <div class="card-footer text-muted">
              <ul class="social-list list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#"><i class="fab fa-orcid fa-fw"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#"><i class="fab fa-github fa-fw"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </section>
</template>

<script>
import ponentes from "./ponents.json";
// import ponentesB from "./ponentsB.json";

export default {
  data: () => ({
    ponentes: ponentes,
	// ponentesB: ponentesB
  }),
  mounted: function () {
    console.log("Ponents component mounted.");
  },
  methods: {
    showModal(data) {
      this.$root.$emit("showModal", data);
    },
    showInvitedModal(data) {
      data.curr_info = ["Universidad Nacional de San Agustín", data.grado + " en Ciencia de la Computación"]
      this.$root.$emit("showModal", data);
    },
  },
};
</script>
