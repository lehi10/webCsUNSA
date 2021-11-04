<template>
    <div>
        <header id="header" class="header fixed-top">
            <div class="branding">
                <div class="container-fluid">
                    <nav class="main-nav navbar navbar-expand-lg">
                        <div class="site-logo">
                            <a class="scrollto" href="#hero-block"
                                ><img
                                    class="logo-icon"
                                    src="/images/cslogos/logo-only.png"
                                    alt="logo"
                            /></a>
                        </div>
                        <div class="site-logo">
                            <a class="scrollto" href="#hero-block"
                                ><img
                                    class="logo-icon"
                                    src="/images/cslogos/logo-white.svg"
                                    alt="logo"
                            /></a>
                        </div>

                        <!-- Register -->
                        <div class="navbar-btn order-lg-2">
                            <a
                                class="btn btn-secondary"
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
                            class="navbar-collapse collapse  justify-content-lg-end mr-lg-3"
                        >
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <li class="nav-item"><a class="nav-link scrollto" href="#about-section">Sobre</a></li>
                                    <li class="nav-item"><a class="nav-link scrollto" href="#speakers-section">Ponencias</a></li>
                                    <li class="nav-item"><a class="nav-link scrollto" href="#schedule-section">Programa</a></li>
                                    <li class="nav-item"><a class="nav-link scrollto" href="#venue-section">Participación</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link scrollto" href="#committee-section">Organización</a></li> -->
                                    <li class="nav-item"><a class="nav-link scrollto" href="#sponsors-section">Sponsors</a></li>
                                    <a class="nav-link" href="/semcomp2020"
                                        >Evento 2020</a
                                    >
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
                            class="btn btn-primary btn-lg"
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
                            <div class="countdown-box" v-if="left.days != null">
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
.carousel-item-4{
    background: linear-gradient(rgba(0, 0, 0.2, 0.4),rgba(0, 0, 0.2, 0.4)),url('/images/building/school2.jpeg') no-repeat center center ;
    background-size: cover;
}
.carousel-item-1{
    background: linear-gradient(rgba(0, 0, 0.2, 0.4),rgba(0, 0, 0.2, 0.4)),url('/images/building/school1.jpeg') no-repeat center center ;
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
        }
    }),
    mounted() {
        this.slideHeight = window.innerHeight;
        console.log("Component mounted.", this.slideHeight);
        let target_date = new Date("Nov 8, 2021").getTime();
        let days, hours, minutes, seconds;
        setInterval(() => {
            // find the amount of "seconds" between now and target
            let current_date = new Date().getTime();
            let seconds_left = (target_date - current_date) / 1000 + 28800;

            // do some time calculations
            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;

            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;

            minutes = parseInt(seconds_left / 60);
            seconds = parseInt(seconds_left % 60);

            this.left.days = days;
            this.left.hours = hours;
            this.left.mins = minutes;
            this.left.secs = seconds;
        }, 1000);
    }
};
</script>
