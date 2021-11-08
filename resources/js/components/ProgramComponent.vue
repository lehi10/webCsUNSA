<template>
  <section id="schedule-section" class="schedule-section section">
    <div class="container">
      <h3 class="section-heading text-center mb-5">Programa</h3>
      <!-- Nav tabs -->
      <ul class="schedule-nav nav nav-pills nav-fill" id="myTab" role="tablist">
        <li
          class="nav-item mr-2"
          v-for="(eventoObj, diakey, idx) in Programa"
          v-bind:key="diakey"
        >
          <a
            :class="`nav-link ${idx == 0 ? 'active' : ''}`"
            :id="`tab-${idx + 1}`"
            data-toggle="tab"
            :href="`#tab-${idx + 1}-content`"
            role="tab"
            :aria-selected="`${idx == 0 ? 'true' : 'false'}`"
            :aria-controls="`tab-${idx + 1}-content`"
          >
            <span class="heading"> Dia {{ idx + 1 }}</span>
            <span class="meta">{{ eventoObj.Fecha }}</span>
          </a>
        </li>
      </ul>
      <!-- Tab Panes -->
      <div class="schedule-tab-content tab-content">
        <div
          v-for="(eventlistObjt, diakey, idx) in Programa"
          v-bind:key="diakey"
          :class="`tab-pane ${idx == 0 ? 'active' : 'fade'}`"
          :id="`tab-${idx + 1}-content`"
          role="tabpanel"
          :aria-labelledby="`tab-${idx + 1}`"
        >
          <div
            v-for="(eventObj, eventkey) in eventlistObjt.eventos"
            v-bind:key="eventkey"
            :class="`item item-${
              eventObj.Tipo == 'Ponencia' ? 'talk' : 'other'
            }`"
          >
            <div class="meta">
              <h4 class="time mb-3">{{ eventObj.Intervalo }}</h4>
              <div class="profile" v-if="eventObj.Ponente">
                <a
                  href="javascript:void()"
                  v-on:click="showModal(eventObj.Ponente)"
                  ><img
                    class="profile-image rounded-circle mb-2"
                    :src="`${
                      eventObj.Ponente.foto || '/images/default-speaker.png'
                    }`"
                    alt=""
                /></a>
                <div class="name">
                  <a
                    href="javascript:void()"
                    class="theme-link"
                    v-on:click="showModal(eventObj.Ponente)"
                    >{{ eventObj.Ponente.nombre }}</a
                  >
                </div>
              </div>
              <!--//profile-->
            </div>
            <div class="content">
              <h3 class="title mb-3">{{ eventObj.Titulo || "&nbsp;" }}</h3>
              <div class="location mb-3" v-if="eventObj.Tipo == 'Ponencia'">
                <div v-for="(link, type_link) in eventObj.links">
                <i
                  :class="`fab fa-${type_link} mr-2`"
                ></i>
                <a
                  :href="link"
                  target="_blank"
                  style="text-transform: capitalize"
                  >{{ type_link }}</a
                >
                </div>
                <!-- <i class="fab fa-facebook mr-2"></i> <a href="#">Facebook</a> -->
              </div>
              <div :class="`desc ${!eventObj.Ponente ? 'minibr' : 'br'}`">
                {{ eventObj.Abstract }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>



<script>
import program from "./program.json";
export default {
  data: () => ({
    Programa: program,
  }),
  methods: {
    showModal(data) {
      this.$root.$emit("showModal", data);
    },
    string_to_slug: function (str) {
      str = str.replace(/^\s+|\s+$/g, ""); // trim
      str = str.toLowerCase();

      // remove accents, swap ñ for n, etc
      var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
      var to = "aaaaeeeeiiiioooouuuunc------";
      for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
      }

      str = str
        .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
        .replace(/\s+/g, "-") // collapse whitespace and replace by -
        .replace(/-+/g, "-"); // collapse dashes

      return str;
    },
  },
  mounted: function () {
    Object.keys(this.Programa).forEach((dia) => {
      this.Programa[dia].eventos.forEach((evento) => {
        if (dia == 'Lunes'){
          evento.links = {
            youtube:
              "https://www.youtube.com/watch?v=vMUD2bLEZgU&ab_channel=ESCUELAPROFESIONALDECIENCIADELACOMPUTACION",
            facebook: null,
          };
        }
        else{
          evento.links = {
            youtube: null,
            facebook: null
          }
        }
      });
    });
  },
};
</script>
