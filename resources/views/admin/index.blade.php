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
                    <td><a href="/admin/{{$aAllData->id}}/edit"><img src="/images/resources/edit.png"></a></td>
                    <td><a data-toggle="modal" href="#myModal" data-token="{{ csrf_token() }}" data-id = {{$aAllData->id}} class='deleteRow'><img src="/images/resources/delete.png"></a></td>
                </tr>
            @endforeach
        </table>
        <div id="pagination">{!! $aAllDatas->links() !!}</div>
    @endif

    <!-- Modal Dialog -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel-danger">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Удаоение строки</h4>
                </div>
                <div class="modal-body">
                    Вы действительно хотите удолить это строку ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" data-confirm="delete-ok">Удалить</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop
