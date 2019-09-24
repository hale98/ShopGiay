@extends('admin.layout.master')
@section('content')

    <form action="admin/danh-muc/sua/{{$item->id}}" method="post">
        <table>
            <tr>
                <td>Category name</td>
                <td><input name="name" value="{!! $item->name!!}"> </td>
            </tr>
            <tr>
                <td>order_display</td>
                <td><input name="order_display" value="{!! $item->order_display!!}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="save">Save</button>
                    <button type="submit" name="cancel">Cancel</button>
                </td>
            </tr>
        </table>
        {{csrf_field()}}
    </form>

@endsection