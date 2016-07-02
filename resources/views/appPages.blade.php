<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>picSale</title>
    <link href="/bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/pageStyle.css" rel="stylesheet">
</head>
<body>

    <section class="headerMenu">
        <nav class="">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 static-header-logo">
                    <div class="site-branding">
                        <h1 class="site-title image-logo">
                            <a class="" href="/">
                                <img src="/images/resources/logo.png" alt="FINE ART">
                            </a>
                        </h1>
                        <div class="site-description">gallery</div>
                    </div>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Домашняя</a></li>
                    <li><a href="#">О наc</a></li>
                    <li><a href="#">голлерея</a></li>
                    <li><a href="#">блог</a></li>
                    <li><a href="#">контакт</a></li>
                </ul>
            </div>
        </nav>
    </section>
    @yield("slider")

    {{--SCRIPT--}}
    <script src="/js/jquery/test/data/jquery-1.9.1.js" ></script>
    <script src="/bootstrap/docs/dist/js/bootstrap.min.js" ></script>
    <script src="/js/adminScript.js" ></script>
    @yield("script")
</body>
</html>