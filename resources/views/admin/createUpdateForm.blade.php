
{{--<div class="col-md-10">--}}
    {{--<div>--}}
        {{--<div class="how-to-create" >--}}
            {{--<br />--}}

            {{--{!! Form::open(['enctype'=>"multipart/form-data",'method'=>'POST','action'=>$action, 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}--}}

            {{--<div class="dz-message">--}}

            {{--</div>--}}

            {{--<div class="fallback">--}}
                {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                {{--{!! Form::file('file', ['type'=>'file','multiple']) !!}--}}
            {{--</div>--}}
            {{--<div class="dropzone-previews" id="dropzonePreview"></div>--}}

            {{--<h4 style="text-align: center;color:#428bca;">Нажмите на это поле для загруски картины  <span class="glyphicon glyphicon-hand-down"></span></h4>--}}


        {{--</div>--}}
        {{--<br>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="col-md-10">
    {!! Form::open(['enctype'=>"multipart/form-data",'method'=>'POST','action'=>$action,'files'=>true]) !!}
    {!! Form::label('type','выбрать жанр:') !!}
    {!! Form::select(
                'type',[
                    'Scape'=>'Пейзаж',
                    'urbanScape'=>'Городской пейзаж',
                    'seaScape'=>'Морской пейзаж',
                    'conversatioPiece'=>'Жанровая картина',
                    'portrait'=>'Портрет',
                    'nudity'=>'Ню, обнаженная натура',
                    'animal'=>'Анималистика',
                    'architecture'=>'Архитектура',
                    'religion'=>'Религия',
                    'historicalPainting'=>'Историческая живопись',
                    'fantasy'=>'Фантазия',
                 ]) !!}
    {!! Form::text('name','',['class'=>'form-control','placeholder'=>'имя картины:']) !!}
    {!! Form::text('about','',['class'=>'form-control','placeholder'=>'о картины:']) !!}
    {!! Form::text('other','',['class'=>'form-control','placeholder'=>'дополнительно:']) !!}
    {!! Form::number('price','',['class'=>'form-control','placeholder'=>'Цена:']) !!}
    <br/>
    {!! Form::file('file', ['type'=>'file','multiple']) !!}
    <br/>
    {!! Form::submit("Создать",['class'=>'btn btn-primary form-control','id'=>'act-on-upload']) !!}
    {!! Form::close()!!}
</div>
