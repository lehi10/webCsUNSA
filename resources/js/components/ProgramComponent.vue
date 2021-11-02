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
			  <div v-for="(eventlistObjt, diakey, idx) in Programa" v-bind:key = "diakey"  :class="`tab-pane ${idx==0 ? 'active' : '' }`" :id="`tab-${idx+1}-content`" role="tabpanel" :aria-labelledby="`tab-${idx+1}`">
				  <div v-for="(eventObj,eventkey) in eventlistObjt.eventos" v-bind:key="eventkey" :class="`item item-${eventObj.Tipo=='Ponencia' ? 'talk': 'other'}`">
					  <div class="meta">
						  <h4 class="time mb-3"> {{eventObj.Intervalo}} </h4>
              <div class="profile">
								<a :href="`#modal-${eventObj.Ponente.slug}`" data-toggle="modal" :data-target="`#modal-${eventObj.Ponente.slug}`"><img class="profile-image rounded-circle  mb-2" :src="`${eventObj.Ponente.imgURL}`" alt=""></a>
								<div class="name"><a class="theme-link" :href="`#modal-${eventObj.Ponente.slug}`" data-toggle="modal" :data-target="`#modal-${eventObj.Ponente.slug}`">Wilber Ramos</a></div>
							</div><!--//profile-->
					  </div>
            <div class="content">
							<h3 class="title mb-3">{{eventObj.Titulo}}</h3>
							<div class="location mb-3"><i class="fas fa-video mr-2"></i>Google Meet</div>
							<div :class="`desc ${eventObj.Abstract ? '' : 'br'}`">
                
                {{eventObj.Abstract}}
							</div>
						</div><!--//content-->
				  </div>
			  </div>
	  </div>
      <!-- <ul>
        <li v-for="(evento,dia) in Programa" v-bind:key="dia">
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
        eventos: [
          {
            Intervalo: "08:00-09:00",
            Tipo: "Ponencia",
            Titulo: "titulo de prueba", //(str),
            Abstract: "Charts and graphs are commonly used to present quantitative information. They are pervasive in scientific papers, textbooks, economic reports, news articles and webpages. In many cases these visualizations are the only publicly available representation of the underlying data. When well-designed, visualizations leverage human visual processing to convey information efficiently and effectively. Yet, while people can easily interpret data from charts and graphs, machines cannot directly access it. Today, a vast trove of information is locked inside data-driven diagrams. First, I will show computational models for interpreting data-driven diagrams to extract the underlying data, graphical marks, and mappings that relate the data to mark attributes. We aim to build generalized computational models that can accurately extract data from diagrams and also mimic the way people decode information from charts. Then, I will show some applications were we applied our automated diagram interpretation techniques: i) automatic recoloring to improve perceptual effectiveness, ii) interactive overlays to enable improved reading of static visualizations, and iii) use voices instead of text to generate overlays on a chart in real-time.", //(HTMLStr),
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
            Titulo: "titulo de prueba", //(str),
            Abstract: "",
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
            Titulo: "titulo de prueba", //(str),
            Abstract:"",
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
    Object.keys(this.Programa).forEach((dia)=>{
      this.Programa[dia].eventos.forEach((eventos)=>{
        let x  = eventos.Ponente.nombre;
        console.log(eventos.Ponente)
        eventos.Ponente.slug = this.string_to_slug(x);
      }) 
    })
  }
};
</script>