<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturally Plus</title>

    <link rel="stylesheet" href="{{ asset('./css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/custome.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar py-4 navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('./images/logo.png')}}" width="187" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#">Customers</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link" href="#">Resource</a>
                    </li>
                    <a href="" class="btn  px-4 btn-secondary ml-5" role="button">Sign In</a>

                    <a href="" class="btn  px-4 btn-primary ml-2" role="button">Sign Up</a>

                    
                </ul>
               
            </div>
        </div>
    </nav>

    <section class="head mt-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="mb-4">
                        The Design Thinking Superpowers
                    </h1>
                    <p class="mb-4 ">
                        Tools, tutorials, design and innovation experts, all in one place! The most intuitive way to
                        imagine your next user
                    </p>
                    <a href="" class="btn btn-primary" role="button">Get Started</a>
                </div>
                <div class="col d-none d-sm-block d-sm-none d-md-block">
                    <img width="600" src="{{asset('./images/hero-icon.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('./js/bootstrap.js')}}"></script>
</body>

</html>
    