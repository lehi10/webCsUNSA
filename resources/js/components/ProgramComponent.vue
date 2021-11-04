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
          :class="`tab-pane ${idx == 0 ? 'active' : ''}`"
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
                  :href="`#modal-${eventObj.Ponente.slug}`"
                  data-toggle="modal"
                  :data-target="`#modal-${eventObj.Ponente.slug}`"
                  ><img
                    class="profile-image rounded-circle mb-2"
                    :src="`${eventObj.Ponente.imgURL || '/images/default-speaker.png'}`"
                    alt=""
                /></a>
                <div class="name">
                  <a
                    class="theme-link"
                    :href="`#modal-${eventObj.Ponente.slug}`"
                    data-toggle="modal"
                    :data-target="`#modal-${eventObj.Ponente.slug}`"
                    >{{eventObj.Ponente.nombre}}</a
                  >
                </div>
              </div>
              <!--//profile-->
            </div>
            <div class="content">
              <h3 class="title mb-3">{{ eventObj.Titulo }}</h3>
              <div class="location mb-3" v-if="eventObj.Tipo == 'Ponencia'">
                <i class="fas fa-video mr-2"></i>Google Meet
              </div>
              <div :class="`desc ${!eventObj.Ponente ? 'minibr' : 'br'}`">
                {{ eventObj.Abstract }}
              </div>
            </div>
            <!--//content-->
          </div>
        </div>
      </div>
    </div>
    <!--//container-->
  </section>
  <!--//schedule-section-->
</template>



<script>

import program from './program.json'
export default {
  data: () => ({
    Programa2: {
      Lunes: {
        eventos: [
          {
            Intervalo: "09:00 - 09:45",
            Tipo: "Ponencia",
            Titulo: "Inauguración A Cargo Del Director Wilber Ramos Lovón", //(str),
            Abstract: null,
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Wilber Ramos",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          // {
          //   Intervalo: "09:45-10:30",
          //   Tipo: "break",
          //   Titulo: "titulo de prueba", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "Wilber Ramos",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
          {
            Intervalo: "10:30 - 11:15",
            Tipo: "Ponencia",
            Titulo: "Cross-modality personalization for retrieval", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Nils_Murrugarra.jpg", //(str)
              nombre: "Nils Murrugarra Llerena",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "11:15 - 12:00",
            Tipo: "Ponencia",
            Titulo: "Aplicaciones de la computación visual en la industria", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Jan_Hurtado.jpg", //(str)
              nombre: "Jan Hurtado Jauregui",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "12:00 - 13:00",
            Tipo: "break",
            Titulo: "Break de Almuerzo", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:00 - 13:30",
            Tipo: "Ponencia",
            Titulo: "Reconocimiento de emociones en audio", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Luis Antonio Bernal Chahuayo ",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:30 - 14:00",
            Tipo: "Ponencia",
            Titulo: "Detección de estrés en tiempo real a partir de señales de voz y datos fisiológicos", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Yonel Yvan Mamani Mamani",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "14:00 - 14:30",
            Tipo: "Ponencia",
            Titulo: "Un sistema de recomendación dinamico utilizando sistemas de recomendación", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Luis Chirinos",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "14:30 - 15:00",
            Tipo: "Ponencia",
            Titulo: "Experiencia sobre publicación de un paper y trabajo en una empresa de EE. UU.", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Lorena Xiomara Castillo Galdos, Grimaldo Jose Davila Guillen",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          //  {
          //   Intervalo: "15:00 - 15:30",
          //   Tipo: "Ponencia",
          //   Titulo: "", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "Alexandra Delgado",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
          {
            Intervalo: "16:00 - 16:30",
            Tipo: "Ponencia",
            Titulo: "Empresa: Puma Development", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Elías Josué Puma Chávez",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "16:30 - 17:00",
            Tipo: "Ponencia",
            Titulo: "Empresa: Paulonia", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Juan Jose León Camilo",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },

          // {
          //   Intervalo: "",
          //   Tipo: "break",
          //   Titulo: "", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
        ],
        Fecha: "Lunes 8 de nov",
      },
      Martes: {
        eventos: [
          {
            Intervalo: "09:00 - 09:45",
            Tipo: "Ponencia",
            Titulo: "KUSISQA: Ayudando a Regular Nuestras Emociones en los Procesos de Enseñanza y Aprendizaje", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Alvaro Cuno Parari",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "09:45 - 10:30",
            Tipo: "Ponencia",
            Titulo: "Introducción al mundo XOps", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Alfonso_Poccho.jpg", //(str)
              nombre: "V. Alfonso Phocco Diaz",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "10:30 - 11:15",
            Tipo: "Ponencia",
            Titulo: "Visualization in particle-based fluids", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Filomen_Incahunaco.jpg", //(str)
              nombre: "J. Filomen Incahuanaco Quispe",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "11:15 - 12:00",
            Tipo: "Ponencia",
            Titulo: "Data Science in Crime Data Analysis", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Jorge_Poco.jpg", //(str)
              nombre: "Jorge Poco Medina",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "12:00 - 13:00",
            Tipo: "break",
            Titulo: "Break de Almuerzo", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:00 - 13:30",
            Tipo: "Ponencia",
            Titulo: "Servicios basados en localización utilizando blockchain para centros hospitalarios en Perú.", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Carlos Atencio Torres",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:30 - 14:00",
            Tipo: "Ponencia",
            Titulo: "Reconocimiento  de acciones  cotidianas en un aula virtual ", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Kelly Vizconde La Motta",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "14:00 - 14:30",
            Tipo: "Ponencia",
            Titulo: "Image Encryption using an Image Pattern based on Advanced Encryption Standard", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Alejandro Antonio Villa Herrera",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "14:30 - 15:00",
            Tipo: "Ponencia",
            Titulo: "Comparative Analysis of the main Graph Coloring Algorithms", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Juan Postigo",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "15:00 - 15:30",
            Tipo: "Ponencia",
            Titulo: "ArgosMol - A Web tool for visualization and prediction of protein structures", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Jean Carlos",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "15:30 - 16:00",
            Tipo: "Ponencia",
            Titulo: "Gun detection in Real-Time, using YOLOv5 on Jetson AGX Xavier", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Oscar Rosas",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          }
        ],
        Fecha: "Martes 9 de nov",
      },
      Miercoles: {
        eventos: [
          {
            Intervalo: "09:00 - 09:45",
            Tipo: "Ponencia",
            Titulo: "Forensic Analysis of Digital Data", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Rossy Soriano.png", //(str)
              nombre: "Aurea Rossy Soriano Vargas",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "09:45 - 10:30",
            Tipo: "Ponencia",
            Titulo: "Semi Automatic Headline Selector for Online Newspaper Based on Natural Language Processing Applied to Tweets", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Roxana_Quintanilla.jpg", //(str)
              nombre: "Roxana Quintanilla Portugal",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "10:30 - 11:15",
            Tipo: "Ponencia",
            Titulo: "A Robust Feature-aware sparse mesh representation", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/lizethFuentes.jpg", //(str)
              nombre: "Lizeth Fuentes Perez",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "11:15 - 12:00",
            Tipo: "Ponencia",
            Titulo: "Inteligencia artificial para el análisis de imágenes satelitales", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/cesar_beltran.jpg", //(str)
              nombre: "César A. Beltrán Castañón",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "12:00 - 13:00",
            Tipo: "break",
            Titulo: "Break de Almuerzo", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:00 - 15:00",
            Tipo: "Ponencia",
            Titulo: "Concurso 1: Herramientas de Software", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "15:00 - 17:00",
            Tipo: "Ponencia",
            Titulo: "Concurso 2: Programacion Competitiva", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            
            Presentación: [], //(URL)
          },
         
        ],
        Fecha: "Miércoles 10 de nov",
      },
      Jueves: {
        eventos: [
          {
            Intervalo: "09:00 - 09:45",
            Tipo: "Ponencia",
            Titulo: "Monitoreo de aplicaciones de consumo masivo", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/pazTrillo.jpg", //(str)
              nombre: "Christian Danniel Paz Trillo",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          // {
          //   Intervalo: "09:45 - 10:30",
          //   Tipo: "Ponencia",
          //   Titulo: "", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "Edward Pacheco Condori",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
          {
            Intervalo: "10:30 - 11:15",
            Tipo: "Ponencia",
            Titulo: "Desafíos y oportunidades en el mercado de tecnología: Data Science / AIoT", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Wilfredo Puma.jpeg", //(str)
              nombre: "Wilfredo J. Puma Villanueva",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          // {
          //   Intervalo: "11:15 - 12:00",
          //   Tipo: "Ponencia",
          //   Titulo: "Inteligencia artificial para el análisis de imágenes satelitales", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "Elizabeth Suescun Monsalve",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
          {
            Intervalo: "12:00 - 13:00",
            Tipo: "break",
            Titulo: "Break de Almuerzo", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:00 - 15:00",
            Tipo: "Ponencia",
            Titulo: "Concurso 3: Poster Cientifico Alumnos", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "15:00 - 17:00",
            Tipo: "Ponencia",
            Titulo: "Concurso 4: Logo de la EPCC", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            
            Presentación: [], //(URL)
          },
         
        ],
        Fecha: "Jueves 11 de nov",
      },
      Viernes: {
        eventos: [
          {
            Intervalo: "09:00 - 09:45",
            Tipo: "Ponencia",
            Titulo: "Sensores inerciales para navegación y sus aplicaciones en la robótica", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/JuanCarlos_Cutipa.webp", //(str)
              nombre: "Juan Carlos Cutipa Luque",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          // {
          //   Intervalo: "09:45 - 10:30",
          //   Tipo: "Ponencia",
          //   Titulo: "", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "Edward Pacheco Condori",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
          // {
          //   Intervalo: "10:30 - 11:15",
          //   Tipo: "Ponencia",
          //   Titulo: "Desafíos y oportunidades en el mercado de tecnología: Data Science / AIoT", //(str),
          //   Abstract: "",
          //   links: [], //(List<URL>),
          //   Keywords: "keywords prueba", //(str),
          //   Ponente: {
          //     imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
          //     nombre: "Wilfredo J. Puma Villanueva",
          //     slug: "",
          //   }, //(Uid),
          //   Presentación: [], //(URL)
          // },
          {
            Intervalo: "11:15 - 12:00",
            Tipo: "Ponencia",
            Titulo: "Desenvolvendo aplicações inteligentes para a Indústria 4.0", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              imgURL: "/images/speakers21/Claudio_Miceli_de_Farias.jpg", //(str)
              nombre: "Cláudio Miceli de Farias",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "12:30 - 13:00",
            Tipo: "break",
            Titulo: "Premiación, Sorteo", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
              // imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Comite Organizador y Sponsors",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
          {
            Intervalo: "13:00 - 15:00",
            Tipo: "Ponencia",
            Titulo: "Cierre A Cargo Del Director", //(str),
            Abstract: "",
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
             Ponente: {
              imgURL: "/images/speakers/wilber-ramos.jpg", //(str)
              nombre: "Wilber Ramos Lovón ",
              slug: "",
            }, //(Uid),
            Presentación: [], //(URL)
          },
        
         
        ],
        Fecha: "Viernes 12 de nov",
      },
    },
    Programa: program
  }),
  methods: {
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
      this.Programa[dia].eventos.forEach((eventos) => {
        let x = eventos.Ponente.nombre;
        console.log(eventos.Ponente);
        // eventos.Ponente.slug = this.string_to_slug(x);
        eventos.Ponente.slug = '';
        
      });
    });
  },
};
</script>
