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
    <section id="header">
        <div class="headerContent">
            <nav class="pageMenu">
                <li><a href="#">дом</a></li>
                <li><a href="#">голерея</a></li>
                <li><a href="#">акциея на сегодня</a></li>
                <li><a href="#">контакты</a></li>
            </nav>
            <div class="pageLang">
                <a href="#"><img src="/images/resources/langRus.jpg"></a>
                <a href="#"><img src="/images/resources/langArm.gif"></a>
            </div>
        </div>
        <section class="pageFace">
            @yield('pageFace')
        </section>
    </section>





    {{--page pageCotegory && Content--}}
    <section class="pageCotegoryContent">
        {{--page Cotegory--}}
        <section class="pageCotegory">
            <h3>Категории</h3>
            <ul>

                <li><a href="#" data-type="Scape">Пейзаж</a></li>
                <li><a href="#" data-type="urbanScape">Городской пейзаж</a></li>
                <li><a href="#" data-type="seaScape">Морской пейзаж</a></li>
                <li><a href="#" data-type="conversatioPiece">Жанровая картина</a></li>
                <li><a href="#" data-type="portrait">Портрет</a></li>
                <li><a href="#" data-type="nudity">Ню, обнаженная натура</a></li>
                <li><a href="#" data-type="animal">Анималистика</a></li>
                <li><a href="#" data-type="architecture">Архитектура</a></li>
                <li><a href="#" data-type="religion">Религия</a></li>
                <li><a href="#" data-type="historicalPainting">Историческая живопись</a></li>
                <li><a href="#" data-type="fantasy">Фантазия</a></li>
            </ul>
        </section>
        {{--page Content--}}
        <section class="pageContent">
            @yield('content')
        </section>

    </section>

    {{--SCRIPT--}}
    <script src="/js/jquery/test/data/jquery-1.9.1.js" ></script>
    <script src="/bootstrap/docs/dist/js/bootstrap.min.js" ></script>
    <script src="/js/adminScript.js" ></script>
    @yield("script")
</body>
</html>