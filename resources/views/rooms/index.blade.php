@extends('layouts.hotelapp')
@section('title','部屋種類')

@section('content')
<table>
    <tr class="table-head"><th>部屋の名前</th><th>部屋の種類</th><th>写真</th></tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{$room->room_num}}</td>
            <td>{{$room->master->room_name}}</td>
            {{-- <td><img src="{{$room->image}}" alt=""></td> --}}
            {{-- publicに画像を保存、DBには画像の名前を登録 --}}
            <td><img src="{{asset('image/'.$room->image.'.png')}}" alt=""></td>
        </tr>
        @endforeach
</table>
@endsection