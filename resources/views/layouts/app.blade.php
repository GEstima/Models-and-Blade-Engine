<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Factory</title>
</head>
<body>

    <!-- header partial -->
    @include('partials.header')

    <!-- Content langs -->
    <div class="container">
        @yield('content')
    </div>

    <!-- footer partial -->
    @include('partials.footer')

</body>
</html>
</div>
