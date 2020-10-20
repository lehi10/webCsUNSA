<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Tech Conference Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="icon" href="/images/cslogos/logomini.png" type="image/gif" sizes="16x16">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800|Roboto:300,400,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/devConf/theme.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126304326-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126304326-1');
    </script>
</head>

<div class="body">
    @yield('body')
</div>
    <footer class="footer py-5 theme-bg-primary">
        <div class="container text-center">

            <ul class="social-list list-inline mb-4">
                <li class="list-inline-item mr-3"><a href="#"><i class="fas fa-envelope"></i></a></li>
                <li class="list-inline-item mr-3"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                <li class="list-inline-item mr-3"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
                <li class="list-inline-item mr-0"><a href="#"><i class="fab fa-youtube fa-fw"></i></a></li>
            </ul><!--//social-list-->


            <ul class="footer-links list-inline mx-auto mb-4">
                <li class="list-inline-item"><a href="#">Políticas de Conducta</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a href="#">Términos y Condiciones</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item mr-0"><a href="#">Privacidad</a></li>
            </ul><!--//footer-link-->

            <small>School of Computer Science - UNSA 2020</small><br>
             <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #EC645E;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

        </div><!--//container-->
        @yield('footer')
    </footer>
</body>
</html>
