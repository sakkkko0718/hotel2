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
            width: 100%;
        }
        .page-title{
            margin: 5px 0 20px 0;
        }
        table{
            margin: 0 auto;
        }
        th{
            border: #9FA0A0 solid 1px;
            padding: 10px;
            width: 300px;
        }
        td{
            border: #9FA0A0 solid 1px;
            padding: 5px 10px;
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
            @yield('content')
        </div>
    </div>
</body>