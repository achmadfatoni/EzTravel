<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/datepicker.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/css/datepicker-bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="/css/chocolat.css" type="text/css">

    <!--//theme-style-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="og:title" content="Vide"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!---->
    <script src="/js/bootstrap.min.js"></script>
    <!---->
    <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,680italic,680,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <script src="/js/jquery.chocolat.js"></script>
    <!--lightboxfiles-->
    <script type="text/javascript">
        $(function () {
            $('.gallery a').Chocolat();
        });
    </script>
    <!--script-->
    <!--startsmothscrolling-->
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>

    <script src="/js/modernizr.custom.97074.js"></script>
</head>
<body>

@yield('content')

<div class="copy-section">
    <div class="container">
        <div class="footer-top">
            <p>Copyright &copy; 2017 Ez Travel. All rights served. | Design by <a href="http://rabbit-media.net">Fq's
                    Rabbit Media</a></p>
        </div>
    </div>
</div>
</body>
</html>