<template>
    <div>
        <header id="header" class="header fixed-top">
            <div class="branding">
                <div class="container-fluid">
                    <nav class="main-nav navbar navbar-expand-lg">
                        <div class="site-logo">
                            <a target="_blank" href="https://fips.unsa.edu.pe/cienciadelacomputacion/"
                                ><img
                                    class="logo-icon"
                                    src="/images/cslogos/logo-only.png"
                                    alt="logo"
                            /></a>
                        </div>
                        <div class="site-logo">
                            <a target="_blank" href="https://fips.unsa.edu.pe/cienciadelacomputacion/"
                                ><img
                                    class="logo-icon"
                                    src="/images/cslogos/logo-white.svg"
                                    alt="logo"
                            /></a>
                        </div>

                        <!-- Register -->
                        <div class="navbar-btn order-lg-2 ">
                            <a
                                class="btn text-white"
                                id="registerBtn"
                                href="https://forms.gle/9iSUb9FBpigLQMyo6"
                                target="_blank"
                                >Registrarse</a
                            >
                        </div>

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navigation"
                            aria-controls="navigation"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div
                            id="navigation"
                            class="navbar-collapse collapse justify-content-lg-end mr-lg-3"
                        >
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <li class="nav-item"><a :class="`nav-link ${route == '' ? 'scrollto' : ''}`" :href="`${route == '' ? '': '/'}#about-section`">Sobre</a></li>
                                    <li class="nav-item"><a :class="`nav-link ${route == '' ? 'scrollto' : ''}`" :href="`${route == '' ? '': '/'}#speakers-section`">Ponentes</a></li>
                                    <li class="nav-item"><a :class="`nav-link ${route == '' ? 'scrollto' : ''}`" :href="`${route == '' ? '': '/'}#schedule-section`">Programa</a></li>
                                    <li class="nav-item"><a :class="`nav-link ${route == '' ? 'scrollto' : ''}`" :href="`${route == '' ? '': '/'}#committee-section`">Organización</a></li>
                                    <li class="nav-item"><a :class="`nav-link ${route == '' ? 'scrollto' : ''}`" :href="`${route == '' ? '': '/'}#sponsors-section`">Sponsors</a></li>
                                    <li class="nav-item"><a class="nav-link scrollto" href="javascript:void(0)" v-on:click="showCustomModal()">Certificado</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link scrollto" href="#venue-section">Participación</a></li> -->
                                    <!-- <li class="nav-item"><a class="nav-link scrollto" href="#committee-section">Organización</a></li> -->
                                    
                                </li>
                            </ul>
                            <!--//nav-->
                        </div>
                        <!--//navabr-collapse-->
                    </nav>
                    <!--//main-nav-->
                </div>
                <!--//container-->
            </div>
            <!--//branding-->
        </header>
        <!--//header-->

        <div
            id="hero-block"
            class="hero-block"
        >
            <div
                id="hero-carousel"
                class="hero-carousel carousel slide carousel-fade"
                data-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item-4 carousel-item active"></div>
                    <div class="carousel-item-1 carousel-item"></div>
                    <div class="carousel-item-2 carousel-item"></div>
                    <div class="carousel-item-3 carousel-item"></div>
                </div>
            </div>
            <div class="hero-block-mask"></div>
            <div class="container">
                <div class="hero-text-block">
                    <h1 class="hero-heading mb-2">
                        Semana de la Computación 2021
                    </h1>
                    <div class="hero-meta mb-3">
                        4ta Edición<br /><i class="far fa-calendar-alt mr-2"></i
                        >8 - 12 Nov
                        <i class="fas fa-map-marker-alt mx-2"></i>Arequipa, Perú
                    </div>
                    <div class="hero-intro mb-4"></div>
                    <!-- Register -->
                    
                    <div class="hero-cta">
                        <a
                            class="btn btn-secondary bg-cs_secondary  btn-lg"
                            href="https://forms.gle/9iSUb9FBpigLQMyo6"
                            target="_blank"
                            >Registrarse</a
                        >
                    </div>
                </div>
                <!--//hero-text-block-->
            </div>
            <!--//container-->
        </div>
        <!--//hero-block-->
        <div class="stats-block theme-bg-primary text-white py-4 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="event-countdown text-white text-center">
                            <div class="countdown-box" v-if="left.days != null && !counter_stopped">
                                <span class="days"
                                    ><span class="number text-white">{{
                                        left.days
                                    }}</span
                                    ><span class="unit">Días</span></span
                                ><span class="hours"
                                    ><span class="number text-white">{{
                                        left.hours
                                    }}</span
                                    ><span class="unit">Horas</span></span
                                ><span class="minutes"
                                    ><span class="number text-white">{{
                                        left.mins
                                    }}</span
                                    ><span class="unit">Minutos</span></span
                                ><span class="secs"
                                    ><span class="number text-white">{{
                                        left.secs
                                    }}</span
                                    ><span class="unit">Segs</span></span
                                >
                            </div>
                            <div v-else-if="counter_stopped" class="countdown-box">
                                <span class="days">
                                    <span class="number text-white">
                                        El evento ya comenzó
                                    </span>
                                    <span class="unit"> Sigue al evento por 
                                        <a target="_blank" href="https://www.youtube.com/channel/UCIREVPQo9SrJvhgWOTfVgDA" class="text-white">Youtube</a> o
                                        <a class="text-white" href="https://www.facebook.com/epcc.unsa" target="_blank">Facebook</a> </span>
                                </span>
                            </div>
                            <div v-else style="height:5em;">
                                
                            </div>
                        </div>
                        <!--//event-countdown-->
                    </div>
                </div>
            </div>
            <!--//container-->
        </div>
        <!--//stats-block-->
    </div>
</template>

<style scoped>
.carousel-item-4 {
    background: linear-gradient(rgba(0, 0, 0.2, 0.4), rgba(0, 0, 0.2, 0.4)),
        url("/images/building/school2.jpeg") no-repeat center center;
    background-size: cover;
}
.carousel-item-1 {
    background: linear-gradient(rgba(0, 0, 0.2, 0.4), rgba(0, 0, 0.2, 0.4)),
        url("/images/building/school1.jpeg") no-repeat center center;
    background-size: cover;
}

/* .carousel-item-2{
    background-image: url('/images/building/');
}
.carousel-item-3{
    background-image: url('/images/building/');
} */
</style>

<script>
export default {
    data: () => ({
        left: {
            days: null,
            hours: 12,
            mins: 40,
            secs: 10
        },
        counter_stopped: false,
        route: ''
    }),
    mounted() {
        let route = window.location.href.split('/').pop();
        if (route[0] != '#'){
            this.route = route
        }
        else{
            // history.pushState("", document.title, window.location.pathname);
        }

        this.slideHeight = window.innerHeight;
        console.log("Component mounted.", this.slideHeight);
        let target_date = new Date("Nov 8, 2021 09:30:00").getTime();
        let days, hours, minutes, seconds;
        const time_left_interval = setInterval(() => {
            // find the amount of "seconds" between now and target
            let current_date = new Date().getTime();
            let seconds_left = (target_date - current_date);

            if (seconds_left < 0){
                this.counter_stopped = true;
                clearInterval(time_left_interval)
            }

            // do some time calculations
            days = parseInt(seconds_left / (1000 * 60 * 60 * 24));
            seconds_left = seconds_left % (1000 * 60 * 60 * 24);

            hours = parseInt(seconds_left / (1000 * 60 * 60));
            seconds_left = seconds_left % (1000 * 60 * 60);

            minutes = parseInt(seconds_left / (1000*60));
            seconds = parseInt(seconds_left % (1000*60)/1000);

            this.left.days = days;
            this.left.hours = hours;
            this.left.mins = minutes;
            this.left.secs = seconds;


        }, 1000);
    },
    methods: {
        showCustomModal() {
            this.$root.$emit("showCertModal", true);
        }
    }
};
</script>
