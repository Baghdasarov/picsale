<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>picSale</title>
    <link href="/bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/adminStyle.css" rel="stylesheet">
    @yield('headCss')
    {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">--}}
</head>
<body>
    <section class="adminMenu">
            <ul>
                <li><a href="/admin"><i class="fa fa-home" aria-hidden="true"></i>Дом</a></li>
                <li><a href="/admin/create"><i class="fa fa-plus" aria-hidden="true"></i>Создать</a></li>
                {{--<li><a href=""><i class="fa fa-home" aria-hidden="true"></i>v</a></li>--}}
                {{--<li><a href=""><i class="fa fa-home" aria-hidden="true"></i>c</a></li>--}}
                <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
            </ul>
    </section>
    <section class="adminContent">
        @yield('content')
    </section>

    {{--SCRIPT--}}
    <script src="/js/jquery/test/data/jquery-1.9.1.js" ></script>
    <script src="/bootstrap/docs/dist/js/bootstrap.min.js" ></script>
    <script src="/js/adminScript.js" ></script>
    @yield("script")
</body>
</html>