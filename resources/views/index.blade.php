<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bamiam</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css_template/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css_template/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#features" class="page-scroll">Plats du jour</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
                    <li><a href="#team" class="page-scroll">Chef</a></li>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>Bamiam</h1>
                            <p>Reservations: 0033 ...</p>
                            @if (session('success'))
                            <h5 class="text-success display-5">{{ session('success')}}</h5> 
                                @php
                                    header('refresh:5'); 
                                @endphp
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features Section -->
    <div id="features" class="text-center">
        <div class="container">
            <div class="section-title">
                <h2>Plats du jour</h2>
            </div>
            @foreach ($specials as $special)
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="features-item">
                    <h3>{{ $special->name }}</h3>
                    <img src="{{ $special->image }}" class="img-responsive" alt="{{ $special->name }}"/>
                    <p>{{ $special->description }}</p>
                    <p>{{ $special->price }} €</p>
                    <p>{{ $special->genre }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 about-img"> </div>
                <div class="col-xs-12 col-md-3 col-md-offset-1">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>Our Story</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Menu Section -->

    <div id="restaurant-menu">
        <div class="container">
            <div class="section-title text-center">
                <h2>Menu</h2>
            </div>
            
            @foreach ($categories as $category)
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="menu-section">
                            <h2 class="menu-section-title">{{ $category->name }}</h2>
                            @foreach ($category->dishes as $dish)
                            <div class="menu-item">
                                <div class="menu-item-name">{{ $dish->name }}</div>
                                <div class="menu-item-price"> {{ $dish->price }} €</div>
                                <div class="menu-item-description"> {{ $dish->description }} </div> 
                                <hr>   
                            </div>
                            @endforeach
                        </div>
                    </div>
            @endforeach
                </div>          
        </div>                
    </div>
    
    <!-- Gallery Section -->
    <div id="gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/01.jpg" class="img-responsive" alt=""></div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/02.jpg" class="img-responsive" alt=""></div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/03.jpg" class="img-responsive" alt=""></div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="gallery-item"> <img src="img/gallery/04.jpg" class="img-responsive" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section -->
    <div id="team">
        <div class="container">
            <div id="row">
                <div class="col-md-6">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="section-title">
                            <h2>Meet Our Chef</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="team-img"><img src="img/chef.jpg" alt="..."></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container text-center">
            <div class="col-md-4">
                <h3>Reservations</h3>
                <div class="contact-item">
                    <p>Please call</p>
                    <p>(887) 654-3210</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Address</h3>
                <div class="contact-item">
                    <p>4321 California St,</p>
                    <p>San Francisco, CA 12345</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Opening Hours</h3>
                <div class="contact-item">
                    <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                    <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <h3>Envoyez-nous un message</h3>
            </div>
            <div class="col-md-8 col-md-offset-2">
                
                <form method="post" action="{{ Route('contact_store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nom" id="name" class="form-control" placeholder="nom" value={{old('name')}} >
                                {!! $errors->first('nom', ":message") !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="email" value={{old('email')}} >
                                {!! $errors->first('email', ":message") !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" name="message" id="message" class="form-control" rows="4" placeholder="message">{{old('message')}}</textarea>
                        {!! $errors->first('message', ":message") !!}
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container text-center">
            <div class="col-md-6">
                <p>www.bamiam.com</p>
                {{--
                    ne détecte pas le user identifié comme un objet
                    @if (Auth::user()->roles->pluck('name')->contains('admin'))
                    <a href="{{Route('admin_index')}}">Login partenaires</a>
                @elseif(Auth::user()->roles->pluck('name')->contains('manager'))
                    <a href="{{Route('manager_index')}}">Login partenaires</a>
                @endif --}}
                <a href="{{Route('login')}}">Login partenaires</a>
            </div>
            <div class="col-md-6">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js_template/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js_template/bootstrap.js"></script>
    <script type="text/javascript" src="js_template/SmoothScroll.js"></script>
    {{--<script type="text/javascript" src="js_template/jqBootstrapValidation.js"></script>--}}
    {{--<script type="text/javascript" src="js_template/contact_me.js"></script>--}}
    <script type="text/javascript" src="js_template/main.js"></script>

    <script>
        
        
    </script>
</body>

</html>