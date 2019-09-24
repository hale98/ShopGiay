@extends('admin.layout.master')
@section('content')

    <table border="1">
        <thead>
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>order_display</td>
        </tr>

        </thead>
        <tbody>
        <?php $stt = 1;?>
        @foreach($cates as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->order_display}}</td>

                <td class="center"><i class="fa fa-trash-o fa-fw "></i><a href="admin/danh-muc/xoa/{{$cate->id}}" class='btn-del'> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/danh-muc/sua/{{$cate->id}}">Edit</a></td>
            </tr>
            <?php $stt++;?>
        @endforeach

        </tbody>



    </table>
@endsection