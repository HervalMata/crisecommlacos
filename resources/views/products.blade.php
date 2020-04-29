@extends('layouts.app')
@section('title', 'Produtos')
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colorbox.css') }}">
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="Home"></a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Loja</span>
        </div>
    </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>Por Categoria</h3>
            <ul>
                <li><a href="#">Laços</a></li>
                <li><a href="#">Tiaras</a></li>
                <li><a href="#">Viseras</a></li>
            </ul>

            <h3>Por Preço</h3>
            <ul>
                <li><a href="#">R$0 - R$25</a></li>
                <li><a href="#">R$25 - R$50</a></li>
                <li><a href="#">+R$50</a></li>
            </ul>
        </div>
        <div>
            <h1 class="stylish-heading">Laços</h1>
            <div class="products text-center">
            <div class="products">
                <div class="product">
                    <a href="#"><img src="/img/macbook-pro.png" alt="Produto"></a>
                    <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                    <div class="product-price">R$35,00</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/macbook-pro.png" alt="Produto"></a>
                    <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                    <div class="product-price">R$35,00</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/macbook-pro.png" alt="Produto"></a>
                    <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                    <div class="product-price">R$35,00</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/macbook-pro.png" alt="Produto"></a>
                    <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                    <div class="product-price">R$35,00</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/macbook-pro.png" alt="Produto"></a>
                    <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                    <div class="product-price">R$35,00</div>
                </div>
                <div class="product">
                    <a href="#"><img src="/img/macbook-pro.png" alt="Produto"></a>
                    <a href="#"><div class="product-name">Laço Maravilhoso</div></a>
                    <div class="product-price">R$35,00</div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
