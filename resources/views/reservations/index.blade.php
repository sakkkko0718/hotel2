@extends('layouts.hotelapp')
@section('title','予約詳細管理')

@section('content')
<table>
    @csrf
    <tr class="table-head"><th>予約者番号</th><th>利用者ID</th><th>利用者名</th><th>住所</th><th>電話番号</th><th>人数</th><th>チェックイン</th><th>チェックアウト</th><th>部屋のタイプ</th><th>宿泊日数</th><th>料金</th></tr>
    <form action="" method="POST">
        <select name="05">
            <option value="01">今月</option>
            <option value="02">先月</option>
        </select>
        <input type="submit" value="検索">
    </form>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{$reservation->reservation_id}}</td>
            <td>{{$reservation->guest_id}}</td>
            <td>{{$reservation->guest->name}}</td>
            <td>{{$reservation->guest->address}}</td>
            <td>{{$reservation->guest->tel}}</td>
            <td>{{$reservation->people}} 名</td>
            <td>{{$reservation->checkin}}</td>
            <td>{{$reservation->checkout}}</td>
            
            @foreach($reservation->room as $room)
                <td>{{$room->room_num}}</td>
                <td>{{$room->pivot->day}}日</td>
                <td>￥{{$room->pivot->price}}</td>
            @endforeach
        </tr>
        @endforeach
</table>
@endsection