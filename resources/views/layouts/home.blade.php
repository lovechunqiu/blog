<!DOCTYPE html>
<html>
    <head>
        <style>
            .header {
background:red
            }

            .body {
background:green
            }

            .footer {
background:blue
            }
.middle{
background:yellow
}
        </style>
    </head>
    <body>
<div class="header">我是公共头部</div>
<!-- @yield('content') -->
@section('content')
我是主模板内容
@show
<div class="footer">我是公共尾部</div>
    </body>
</html>
