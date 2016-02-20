<html lang="en" data-ng-app="Enes">
<head>
    <title>Laravel Quickstart - Basic</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- CSS And JavaScript -->
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <!-- Navbar Contents -->
    </nav>
</div>
@{{ 4+4 }}
@yield('content')
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/angular/angular.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/controllers/taskcontroller.js') }}"></script>
<script src="{{ asset('js/services/taskFactory.js') }}"></script>


</body>
</html>