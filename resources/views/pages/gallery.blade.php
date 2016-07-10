@extends('appPages')

@section('otherPageStyle')
    <link href="/css/otherPageStyle.css" rel="stylesheet">
    <style>

    </style>
@stop
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
@section('content')
    <section class="contentGallery">
        <div class="container">
            <h3>Gallery</h3>
            <div class="contentGalleryPosition">
                <div id="isotop_filters" class="button-group" data-token="{{ csrf_token() }}">
                    @foreach($picTypeLists as $picTypeListkey=>$picTypeList)
                        <span data-filter="{{$picTypeListkey}}">{{$picTypeList}}</span>
                    @endforeach()
                    <span data-filter="" class="is-checked">вся галлерея</span>
                </div>
                <div class="row isotop">
                    @foreach($picsDatas as $picsData)
                        <div class="grid isotop_item category01">
                            <div data-fancybox-group="1" class="thumb">
                                @if($picsData->image)
                                    <img src="images/uploads/{{$picsData->image}}" alt="">
                                @else
                                    <img src="images/resources/unknown.jpg" alt="">
                                @endif
                                <span class="thumb_overlay">
                                    <span>
                                        <span>
                                            <p>{{$picsData->name}}</p>
                                            Цена։{{$picsData->price}}
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    @endforeach
                        <div id="pagination">{!! $picsDatas->links() !!}</div>
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