<template>
  <section id="schedule-section" class="schedule-section section">
    <div class="container">
      <h3 class="section-heading text-center mb-5">Programa</h3>
      <!-- Nav tabs -->
	  <ul class="schedule-nav nav nav-pills nav-fill" id="myTab" role="tablist">
        <li
          class="nav-item mr-2"
          v-for="(eventoObj, diakey, idx) in Programa2"
          v-bind:key="diakey"
        >
          <a
            :class="`nav-link ${idx==0 ? 'active': ''}`"
			:id = "`tab-${idx+1}`"
            data-toggle="tab"
            :href ="`#tab-${idx+1}-content`"
			role="tab"
      :aria-selected="`${idx==0 ? 'true': 'false'}`"
            
			:aria-controls="`tab-${idx+1}-content`"
          >
            <span class="heading"> Dia {{ idx + 1 }}</span>
            <span class="meta">{{ eventoObj.Fecha }}</span>
          </a>
        </li>
      </ul>
	  <!-- Tab Panes -->
	  <div class="schedule-tab-content tab-content">
			  <div v-for="(eventlistObjt, diakey, idx) in Programa2" v-bind:key = "diakey"  :class="`tab-pane ${idx==0 ? 'active' : '' }`" :id="`tab-${idx+1}-content`" role="tabpanel" :aria-labelledby="`tab-${idx+1}`">
				  <div v-for="(eventObj,eventkey) in eventlistObjt.eventos" v-bind:key="eventkey" :class="`item item-${eventObj.Tipo=='Ponencia' ? 'talk': 'other'}`">
					  <div class="meta">
						  <h4 class="time mb-3"> {{eventObj.Intervalo}} </h4>
              <div class="profile">
								<a :href="`#modal-${eventObj.Ponente.slug}`" data-toggle="modal" :data-target="`#modal-${eventObj.Ponente.slug}`"><img class="profile-image rounded-circle  mb-2" :src="`${eventObj.Ponente.imgURL}`" alt=""></a>
								<div class="name"><a class="theme-link" :href="`#modal-${eventObj.Ponente.slug}`" data-toggle="modal" :data-target="`#modal-${eventObj.Ponente.slug}`">Wilber Ramos</a></div>
							</div><!--//profile-->
					  </div>
            <div class="content">
							<h3 class="title mb-3">asdas</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div class="desc">
								<br><br><br><br>
							</div>
						</div><!--//content-->
				  </div>
			  </div>
	  </div>
      <!-- <ul>
        <li v-for="(evento,dia) in Programa2" v-bind:key="dia">
          {{evento}} - {{dia}}
        </li>
      </ul> -->
    </div>
    <!--//container-->
  </section>
  <!--//schedule-section-->
</template>

<script>
export default {
  data: () => ({
    Programa: {
      Lunes: {
        "08:00 - 09:00": {
          Tipo: "Ponencia", //(Ponencia | Social | Break),
          Título: "titulo de prueba", //(str),
          Abstract: "abstract de prueba", //(HTMLStr),
          links: [], //(List<URL>),
          Keywords: "keywords prueba", //(str),
          Ponente: 123, //(Uid),
          Presentación: [], //(URL)
        },
        Fecha: "(Lunes 8, Nov)", //(str)
      },
      Martes: {
        "09:00 - 10:00": {
          Tipo: "Ponencia", //(Ponencia | Social | Break),
          Título: "titulo de prueba", //(str),
          Abstract: "abstract de prueba", //(HTMLStr),
          links: [], //(List<URL>),
          Keywords: "keywords prueba", //(str),
          Ponente: 123, //(Uid),
          Presentación: [], //(URL)
        },
        Fecha: "(Martes 9, Nov)", //(str)
      },
    },
    Programa2: {
      Lunes: {
        eventos: [
          {
            Intervalo: "08:00-09:00",
            Tipo: "Ponencia",
            Título: "titulo de prueba", //(str),
            Abstract: "abstract de prueba", //(HTMLStr),
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
	         		imgURL: "/images/speakers/wilber-ramos.jpg",//(str)
			      	nombre: "Wilber Ramos",
              slug: ""
			}, //(Uid),
            Presentación: [], //(URL)
          },
		  {
            Intervalo: "09:00-10:00",
            Tipo: "break",
            Título: "titulo de prueba", //(str),
            Abstract: "abstract de prueba", //(HTMLStr),
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
				      imgURL: "/images/speakers/wilber-ramos.jpg",//(str)
			      	nombre: "Wilber Ramos",
              slug: ""
			}, //(Uid),
            Presentación: [], //(URL)
          }
        ],
        Fecha: "Lunes 28 de oct",
      },
      Martes: {
        eventos: [
          {
            Intervalo: "08:00-09:00",
            Tipo: "Ponencia",
            Título: "titulo de prueba", //(str),
            Abstract: "abstract de prueba", //(HTMLStr),
            links: [], //(List<URL>),
            Keywords: "keywords prueba", //(str),
            Ponente: {
			      	imgURL: "/images/speakers/wilber-ramos.jpg",//(str)
		      		nombre: "Wilber Ramos",
              slug: ""
			}, //(Uid),
            Presentación: [], //(URL)
          },
        ],
        Fecha: "Lunes 28 de oct",
      },
    },
  }),
  methods: {
    string_to_slug: function(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();
  
    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str;
    }
  },
  mounted :function() {
    Object.keys(this.Programa2).forEach((dia)=>{
      this.Programa2[dia].eventos.forEach((eventos)=>{
        let x  = eventos.Ponente.nombre;
        console.log(eventos.Ponente)
        eventos.Ponente.slug = this.string_to_slug(x);
      }) 
    })
  }
};
</script>