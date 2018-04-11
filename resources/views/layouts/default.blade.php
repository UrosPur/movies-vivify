
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">
</head>

<body>

@include('partials.navbarHeader')



<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Movie list</h1>
        <p class="lead text-muted">This is a lsit of current available movies. You can always add one yoursef by clickin on the add link</p>
        <p>
            <a href="#" class="btn btn-primary">add movie</a>
            {{--<a href="#" class="btn btn-secondary">Secondary action</a>--}}
        </p>
    </div>
</section>



@yield('content')

@include('partials.footer')
</body>
</html>
