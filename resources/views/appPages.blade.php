<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>picSale</title>
    <link href="/bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/pageStyle.css" rel="stylesheet">
    @yield('otherPageStyle')
    {{--<meta property="og:url"           content="http://picsale.am/picSale.html" />--}}
    {{--<meta property="og:type"          content="website" />--}}
    {{--<meta property="og:title"         content="Your Website Title" />--}}
    {{--<meta property="og:description"   content="Your description" />--}}
    {{--<meta property="og:image"         content="/images/resources/soc_icon_1.png" />--}}
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
                    <li data-name='home' class="active"><a href="/">Домашняя</a></li>
                    <li data-name='about'><a href="#">О наc</a></li>
                    <li data-name='gallery'><a href="gallery">голлерея</a></li>
                    <li data-name='blog'><a href="#">блог</a></li>
                    <li data-name='contact'><a href="#">контакт</a></li>
                </ul>
            </div>
        </nav>
    </section>
    @yield("slider")
    @yield("content")
    <footer class="footer" style="top: 848px;">
        <div class="footer_text">
            <div class="footer_left_section">PEACE  ©  2016 |
                <a href="#" class="footer_left_a">PRIVACY POLICY</a>
            </div>
            <div class="footer_right_section">
                <a href="#" class="footer_bottom_a"><img src="/images/resources/soc_icon_1.png" class="footer_right_imgs" style="margin-top: 0px;"></a>
                <a href="#" class="footer_bottom_a"><img src="/images/resources/soc_icon_2.png" class="footer_right_imgs" style="margin-top: 0px;"></a>
                <a href="#" class="footer_bottom_a"><img src="/images/resources/soc_icon_3.png" class="footer_right_imgs" style="margin-top: 0px;"></a>
                <a href="#" class="footer_bottom_a"><img src="/images/resources/soc_icon_4.png" class="footer_right_imgs" style="margin-top: 0px;"></a>
            </div>
        </div>
    </footer>
    {{--<iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2FBaghdasarov&width=0&height=80&layout=standard&size=small&show_faces=true&appId" width="0" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>--}}

    <script src="/js/jquery/test/data/jquery-1.9.1.js" ></script>
    <script src="/bootstrap/docs/dist/js/bootstrap.min.js" ></script>
    <script src="/js/adminScript.js" ></script>
    @yield("script")
</body>
</html>