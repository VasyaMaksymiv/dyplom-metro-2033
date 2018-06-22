<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $title; ?>
    </title>
    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/main.css" rel="stylesheet">
    <link href="/public/styles/style.css">
    <link rel="shortcut icon" href="/public/images/favicon.png" type="image/x-icon">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">Metro 2033</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/news">Новини</a>
                    </li>
                    <li class="about-metro nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Про Metro<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item"><a class="nav-link" href="/citys">Міста</a></li>
                            <li class="nav-item"><a class="nav-link" href="/weapons">Зброя</a></li>
                            <li class="nav-item"><a class="nav-link" href="/mutants">Мутанти</a></li>
                        </ul>
                    </li>
                    <li class="about-metro nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ігри<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item"><a class="nav-link" href="/game/1">Metro 2033</a></li>
                            <li class="nav-item"><a class="nav-link" href="/game/2">Metro 2033 last light</a></li>
                            <li class="nav-item"><a class="nav-link" href="/game/3">Metro 2033 Exodus</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="/books">книги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Зворотній зв'язок</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $content; ?>
    <hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/user/metrovideogame" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://github.com/VasyaMaksymiv/dyplom_metro_2033" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">&copy; 2018, Вселенна Metro 2033</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
