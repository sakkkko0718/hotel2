@extends('layouts.hotelapp')
@section('title','ゲスト管理')

@section('content')
    <table>
        <tr class="table-head"><th>ID</th><th>氏名</th><th>住所</th><th>電話番号</th><th>予約履歴ID</th></tr>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{$guest->guest_id}}</td>
                    <td>{{$guest->name}}</td>
                    <td>{{$guest->address}}</td>
                    <td>{{$guest->tel}}</td>
                        <td>
                            @if ($guest->reservations != null)
                            @foreach ($guest->reservations as $reservation)
                                {{$reservation->reservation_id}}
                            @endforeach
                            @endif
                        </td>
                </tr>
            @endforeach
    </table>
@endsection