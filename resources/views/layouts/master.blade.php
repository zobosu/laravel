<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/A040E1F4-3AA6-9E4E-83C6-1C67827FB702/main.js" charset="UTF-8"></script></head> -->

<body>

@include('layouts.head')
<div class='container'>

    <div class="row">
    @yield('content')
    <!-- <div class="col-md-8 blog-main">  -->
    </div>
    @include('layouts.sidebar')
</div>
@include('layouts.footer')
</body>
</html>
