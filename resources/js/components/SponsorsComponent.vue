<template>
  <section id="sponsors-section" class="sponsors-section section">
    <div class="container">
      <h3 class="section-heading text-center mb-3">Sponsors</h3>
      <div class="section-intro text-center single-col-max mx-auto mb-5">
        ¿Gustarías formar parte de la familia de Computer Science UNSA? Haz
        click en el botón para más información.
      </div>
      <div class="row logos justify-content-center align-items-center">
        <div
          class="logo-item col-6 col-md-4 col-lg-2"
          v-for="sponsor in sponsors"
        >
          <img :src="sponsor.img" alt="" />
        </div>
      </div>
      <!--//row-->
      <div class="sponsors-cta text-center pt-5">
        <a
          class="btn-primary btn btn-lg"
          href="https://forms.gle/Z9fzY2kGaUP7JKERA"
          target="_blank"
          >Convertirse en Sponsor</a
        >
      </div>
    </div>
    <!--//container-->
  </section>
  <!--//sponsors-section-->
</template>

<script>
import sponsors from "./sponsors.json";
export default {
  data: () => ({
    sponsors: sponsors,
  }),
};
</script>
