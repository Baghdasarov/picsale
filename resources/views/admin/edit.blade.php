@extends('appAdmin')

@section('content')
        @include('admin.createUpdateForm',['action'=>['adminController@update',$dateFromId->id],'method'=>'PATCH','buttonName'=>'Сохронить изминения'])
@stop