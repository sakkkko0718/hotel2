<head>
    <title>@yield('title')</title>
</head>
<style>
        *{
            color: #9FA0A0;
            margin: 5px;
            max-width: 1200vh;
        }
        .page-innner{
            width: 90%;
        }
        .page-title{
            margin: 30px 0 20px 0;
        }
        .page-content{
            margin: 0 auto;
        }
        table{
            margin: 0 auto;
        }
        th{
            background-color: #BBCCE9;
            color: #0068B7;
            letter-spacing: 0.5ch;
            border: #9FA0A0 solid 1px;
            padding: 10px;
            width: 300px;
        }
        td{
            border: #9FA0A0 solid 1px;
            padding: 5px 10px;
            max-height: 50px;
        }
        .send{
            text-align: center;
        }
</style>
<body>
    <div class="page-inner">
        <div class="page-title">
            <h1>@yield('title')</h1>
            <p>管理者用ページ</p>
        </div>
        <div class="menu"><a href="/masters">部屋管理</a><a href="/guests">利用者</a><a href="/rooms">部屋</a><a href="/reservations">予約詳細</a></div>
        <div class="page-content">
            @yield('content')
        </div>
    </div>
</body>