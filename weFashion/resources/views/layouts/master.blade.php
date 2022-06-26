<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>WE FASHION | Liste de produits</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            @include('partials.clientMenu')
        </div>
        <div class="row py-5">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
        <div class="col-lg-12">
            @include('partials.footer')
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d09560a292.js" crossorigin="anonymous"></script>
</body>
</html>