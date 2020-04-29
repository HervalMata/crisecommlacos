@extends('layouts.app')
@section('title', 'Produto')
@section('extra-css')
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="Home"></a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Carrinho de Compra</span>
        </div>
    </div>
    <div class="cart-section container">
        <div>
            <h2>3 itens no carrinho de compras</h2>
            <div class="cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/mackbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Laço</a></div>
                            <div class="cart-table-description"><a href="#">Laço Maravilhoso</a></div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a>
                            <a href="#">Salvar</a>
                        </div>
                        <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>R$249,00</div>
                    </div>
                </div>
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/mackbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Laço</a></div>
                            <div class="cart-table-description"><a href="#">Laço Maravilhoso</a></div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a>
                            <a href="#">Salvar</a>
                        </div>
                        <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div>R$249,00</div>
                    </div>
                </div>
            </div>
            <a href="#" class="have-code">Tem um código</a>
            <div class="have-code-container">
                <form action="#">
                    <input type="text">
                    <button type="submit" class="button button-plain">Aplicar</button>
                </form>
            </div>
            <div class="cart-totals">
                <div class="cart-totals-left">
                    A entrefa é grátis por que estamos felizes em ter você conosco.
                </div>
                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Taxa <br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        R$1000,00 <br>
                        R$300,00 <br>
                        <span class="cart-totals-total">R$1300,00</span>
                    </div>
                </div>
            </div>
            <div class="cart-buttons">
                <a href="#" class="button">Continue comprando</a>
                <a href="#" class="button">Ir para o pagamento</a>
            </div>
            <h2>2 itens salvos para o retorno</h2>
            <div class="saved-for-later cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/mackbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Laço</a></div>
                            <div class="cart-table-description"><a href="#">Laço Maravilhoso</a></div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a>
                            <a href="#">Salvar</a>
                        </div>
                        {{--<div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>--}}
                        <div>R$249,00</div>
                    </div>
                </div>
                <div class="cart-table-row">
                    <div class="cart-table-row-right">
                        <a href="#"><img src="/img/mackbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Laço</a></div>
                            <div class="cart-table-description"><a href="#">Laço Maravilhoso</a></div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remove</a>
                            <a href="#">Salvar</a>
                        </div>
                        {{--<div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>--}}
                        <div>R$249,00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials.might-like')
@endsection
