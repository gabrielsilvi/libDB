<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- style -->
    <link rel="stylesheet" href="{{url('assets/style/style.css')}}">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/8048731412.js" crossorigin="anonymous"></script>
    <!-- owl -->
    <link rel="stylesheet" href="{{url('assets/style/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/style/owl/owl.theme.default.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="container-fluid">
            <h1>Controle de livros</h1>
            <nav>
                <a class="links" href="{{route('index')}}">
                    <i class="fas fa-home"></i>
                    HOME
                </a>

                <a class="links" href="{{route('list.index')}}">
                    <i class="fas fa-list-ul"></i>
                    LIST
                </a>
            </nav>
        </div>
    </header>

    @yield('content')
    {{-- <section>
        <div class="content">
            <div class="carrosel-livros">
                <div class="owl-carousel owl-theme">
                    <class class="item">
                        <img class="box-livro" src="./img/book1.jpg" alt="">
                    </class>
                    <class class="item">
                        <img class="box-livro" src="./img/book2.jpg" alt="">
                    </class>
                    <class class="item">
                        <img class="box-livro" src="./img/book3.jpg" alt="">
                    </class>
                    <class class="item">
                        <img class="box-livro" src="./img/book3.jpg" alt="">
                    </class>
                    <class class="item">
                        <img class="box-livro" src="./img/book3.jpg" alt="">
                    </class>
                    <class class="item">
                        <img class="box-livro" src="./img/book3.jpg" alt="">
                    </class>
                    <class class="item">
                        <img class="box-livro" src="./img/book3.jpg" alt="">
                    </class>
                </div>
            </div>
        </div>
    </section>
    <article>
        <div class="livros">
            <h1>Livros</h1>
            Proxima atualizacao...
        </div>
    </article> --}}

    <script src="{{url('assets/js/owl/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/owl/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/owl/setup.js')}}"></script>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>