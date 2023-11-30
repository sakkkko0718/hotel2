@extends('layouts.hotelapp')
@section('title','部屋種類管理')

@section('content')
<table>
    @csrf
    {{-- 検索ここから --}}
    {{-- getメソッドを検索クエリにチェーンする --}}
    <form action="/masters" method="get">
        <input type="search" name="input" style="width: 150px">
        <input type="submit" value="検索">
    </form>
    {{-- 検索ここまで --}}

    <tr class="table-head"><th>部屋管理番号</th><th>部屋の種類</th><th>制限人数</th><th>部屋の名前</th></tr>
        @foreach ($masters as $master)
        <tr>
            <td>{{$master->master_id}}</td>
            <td>{{$master->room_name}}</td>
            <td>{{$master->imitation}} 名まで</td>
            <td>
                @if ($master->rooms != null)
                @foreach ($master->rooms as $room)
                    {{$room->room_num}}
                @endforeach
                @endif
            </td>
        </tr>
        @endforeach
</table>
@endsection