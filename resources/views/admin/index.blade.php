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
                <th>изминить</th>
                <th>удалить</th>
            </tr>
            @foreach($aAllDatas as $aAllData)
                <tr>
                    <td>{{$aAllData->name}}</td>
                    <td>{{$aAllData->type}}</td>
                    <td>{{$aAllData->price}}</td>
                    @if($aAllData->image)
                        <td class="imgSource"><img src="/images/uploads/{{$aAllData->image}}"></td>
                    @else
                        <td class="imgSource">нет картины</td>
                    @endif
                    <td>{{$aAllData->about}}</td>
                    <td>{{$aAllData->other}}</td>
                    <td><img src="/images/resources/edit.png"></td>
                    <td><img src="/images/resources/delete.png"></td>
                </tr>
            @endforeach
        </table>
    @endif

@stop
