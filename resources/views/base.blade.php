<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark" >
    <section class="container-fluid p-4 ">
        @yield('content')
    </section>
</body>
</html>


