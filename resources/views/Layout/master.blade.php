<!DOCTYPE html>
<html lang="en">
<head>
@include('Layout.header')
</head>
<body>
    @include('Layout.navbar')
<div class="row">
        <div class="col-2 ">
           @include('Layout.sidebar')
        </div>
        <div class="col-10 container">
          @yield('content')
        </div>
</div>
    @include('Layout.scripts')
</body>
</html>
