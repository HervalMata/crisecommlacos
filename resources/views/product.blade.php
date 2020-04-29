@extends('layouts.app')
@section('title', 'Produto')
@section('extra-css')
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="Home"></a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Loja</span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Laço Maravilhoso</span>
        </div>
    </div>
    <div class="products-section container">
        <div class="product-section-image">
            <img src="{{ asset('/img/macbook-pro.png') }}" alt="Produto">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">Laço</h1>
            <div class="product-section-subtitle">Laço Maravilhoso</div>
            <div class="product-section-price">R$49,99</div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat?
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas magni accusantium, sapiente dicta iusto ut dignissimos atque placeat tempora iste.</p>

            <p>&nbsp;</p>
            <a href="#" class="button">Adicionar para o carrinho</a>
        </div>
    </div>
    @include('layouts.partials.might-like')
@endsection
