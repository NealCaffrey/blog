<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Blog') - Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts._header')

<div class="container" id="content">
    <div class="row">
        <div class="col-md-9">
            @yield('content')
        </div>
        <div class="col-md-3">
            @include('layouts._sidebar')
        </div>
    </div>
</div>

@include('layouts._footer')

</body>
</html>