<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Test technique de Valentino">
        <meta name="keywords" content="Laravel, HTML, CSS, VueJs">
        <meta name="author" content="Valentino">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>@yield('title')</title>
        
        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        
        <!-- Custom styles -->
        <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
        
        <style>
            .truncate {
                width: 250px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            .col-msg {
                overflow-y: auto;
                height: calc(100vh - 200px);
            }
        </style>

        <!-- VueJs -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

        <!-- Axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    </head>

    <body>
        @include('partials.navbar')

        <main class="container my-5 pb-5">
            @yield('content')
        </main>
    
        @include('partials.footer')

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        
    </body>
</html>