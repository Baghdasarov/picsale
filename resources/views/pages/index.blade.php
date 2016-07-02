@extends('appPages')

@section('slider')
    <section class="slider">
        <ul class="rslides">
            <li>
                <img src="images/resources/logBackground.jpg" alt="">
            </li>
            <li>
                <img src="images/resources/slider_03.jpg" alt="">
            </li>
            <li>
                <img src="images/resources/slider_02.jpg" alt="">
            </li>
        </ul>
    </section>
@stop
@section("script")
    <script src="js/ResponsiveSlides/responsiveslides.min.js"></script>
    <script src="js/pageScript.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
@stop