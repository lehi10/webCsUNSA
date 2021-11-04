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
          v-for="(sponsor, idx) in sponsors"
          :class="`logo-item text-center col-12 col-lg-${idx == 2 ? '4':'2'}`"
        >
          <img :src="sponsor.img" width="100%" alt="" />
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
