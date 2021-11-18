<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School of Computer Science - UNSA">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/images/cslogos/logomini.png" type="image/gif" sizes="16x16">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800|Roboto:300,400,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/css/devConf/theme.css">
    <link id="theme-style" rel="stylesheet" href="/css/devConf/customstyle.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126304326-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126304326-1');
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #e4e4e446;
            border-radius: 100px;   
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 100px;
            background: #003b84ad;
            border: 6px solid rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>
    @yield('body')

    <script src="{{mix('/js/app.js')}}" ></script>
	<script src="/plugins/back-to-top.js"></script>
	<script src="/plugins/jquery.scrollTo.min.js"></script>
	<script src="/js/devConf/main.js"></script>
</body>
</html>
