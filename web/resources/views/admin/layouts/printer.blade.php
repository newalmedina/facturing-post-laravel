<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            {{ env("APP_NAME") }} ::
        @show
    </title>

    <!-- Theme style -->
    <link href="{{ base_path() . "/public/assets/css/container.css" }}" rel="stylesheet" type="text/css" />

    @yield('head_page')

</head>

<body>
    @yield('content')
    @yield('foot_page')

</body>
</html>
