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
        </style>
    </head>
    <body>
@include('common.header', ['page' => '文章页面'])
<div class="body">我是文章中间部分</div>
@include('common.footer')
    </body>
</html>
