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
    <section class="contentGallery">
        <div class="container">
            <h3>Gallery</h3>
            <div class="contentGalleryPosition">
                <div id="isotop_filters" class="button-group">
                    @foreach($picTypeLists as $picTypeList)
                        <span data-filter="{{$picTypeList}}">{{$picTypeList}}</span>
                    @endforeach()
                    <span data-filter="*" class="is-checked">вся галлерея</span>
                </div>
                <div class="row isotop" style="position: relative; height: 264px;">
                    <div class="grid isotop_item category01" style="position: absolute; left: 0px; top: 0px;">
                        <div data-fancybox-group="1" class="thumb">
                            <img src="images/resources/logBackground.jpg" alt="">
                            <span class="thumb_overlay">
                                <span>
                                    <span>
                                        <p>monaliza</p>
                                        Цена։3540руб
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="grid isotop_item category01" style="position: absolute; left: 400px; top: 0px;">
                        <div data-fancybox-group="1" class="thumb">
                            <img src="images/resources/slider_03.jpg" alt="">
                            <span class="thumb_overlay">
                                <span>
                                    <span>
                                        <p>monaliza</p>
                                        Цена։3540руб
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="grid isotop_item category02" style="position: absolute; left: 800px; top: 0px;">
                        <div data-fancybox-group="1" class="thumb">
                            <img src="images/resources/slider_02.jpg" alt="">
                            <span class="thumb_overlay">
                                <span>
                                    <span>
                                        <p>monaliza</p>
                                        Цена։3540руб
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section("script")
    <script src="js/ResponsiveSlides/responsiveslides.min.js"></script>
    <script src="js/pageScript.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
@stop