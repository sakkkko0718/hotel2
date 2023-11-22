@extends('layouts.hotelapp')
@section('title','部屋種類管理')

@section('content')
<table>
    <tr class="table-head"><th>部屋の名前</th><th>部屋の種類</th><th>部屋の写真</th></tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{$room->room_num}}</td>
            <td>{{$room->master->room_name}}</td>
            <td>いい部屋の写真？</td>
        </tr>
        @endforeach
</table>
@endsection