@extends('appAdmin')
@section('content')
    @if($aAllDatas)
        <h1>Admin index</h1>
        <table class="table table-responsive">
            <tr>
                <th>имя</th>
                <th>тип</th>
                <th>цена</th>
                <th>картина</th>
                <th>о картине</th>
                <th>другое</th>
            </tr>
            @foreach($aAllDatas as $aAllData)
                <tr>
                    <td>{{$aAllData->name}}</td>
                    <td>{{$aAllData->type}}</td>
                    <td>{{$aAllData->price}}</td>
                    <td><img src="{{$aAllData->images}}"></td>
                    <td>{{$aAllData->about}}</td>
                    <td>{{$aAllData->other}}</td>
                </tr>
            @endforeach
        </table>
    @endif

@stop
