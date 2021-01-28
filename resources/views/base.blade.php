<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS + editeur de texte -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Hello, world!</title>
</head>
<body>
@include('incs.navbar')

<div class="container justify-content-center mt-3">
    @include('incs.flash')
</div>

@yield('content')

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- FONT AWESOME LAST VERSION -->
<script src="https://kit.fontawesome.com/4a0becc8fb.js" crossorigin="anonymous"></script>
</body>
</html>
