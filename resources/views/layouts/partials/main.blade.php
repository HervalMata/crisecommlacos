<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Ecommerce Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>
<header class="with-background">
    <div class="top-nav container">
        <div class="logo">Laravel Ecommerce</div>
        <ul>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart <span class="cart-count"><span>3</span></span></a></li>
        </ul>
    </div> <!-- end top-nav -->
    <div class="hero container">
        <div class="hero-copy">
            <h1>Laravel Ecommerce Demo</h1>
            <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration.</p>
            <div class="hero-buttons">
                <a href="#" class="button button-white">Blog Post</a>
                <a href="#" class="button button-white">GitHub</a>
            </div>
        </div> <!-- end hero-copy -->

        <div class="hero-image">
            <img src="img/macbook-pro-laravel.png" alt="hero image">
        </div> <!-- end hero-image -->
    </div> <!-- end hero -->
</header>

<div class="featured-section">

    <div class="container">
        <h1 class="text-center">Laços da Cris</h1>

        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

        <div class="text-center button-container">
            <a href="#" class="button">Principais</a>
            <a href="#" class="button">À Venda</a>
        </div>

        {{-- <div class="tabs">
            <div class="tab">
                Featured
            </div>
            <div class="tab">
                On Sale
            </div>
        </div> --}}

        <div class="products text-center">
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="produto"></a>
                <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                <div class="product-price">R$49.99</div>
            </div>
        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="#" class="button">Visualiar mais produtos</a>
        </div>

    </div> <!-- end container -->

</div> <!-- end featured-section -->

@include('partials.footer')


</body>
</html>
