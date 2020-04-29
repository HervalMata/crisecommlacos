@extends('layouts.app')
@section('title', 'Produto')
@section('extra-css')
@endsection
@section('content')
    <div class="container">
        <h1 class="checkout-heading stylish-heading"></h1>
        <div class="checkout-section">
            <div>
                <form action="#">
                    <h2>Detalhes da Compra</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>
                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                        <div class="form-group">
                            <label for="province">Bairro</label>
                            <input type="text" class="form-control" id="province" name="province" value="">
                        </div>
                    </div>
                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">CEP</label>
                            <input type='text' class="form-control" id="postalcode" name="postcode" value="">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="">
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <h2>Detalhes do Pagamento</h2>
                    <div class="form-group">
                        <label for="name_on_card">Nome no Cartão</label>
                        <input type="text" class="form-control" id="nome_on_card" name="nome_on_card" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>
                    <div class="form-group">
                        <label for="cc-number">Número do Cartão de Crédito</label>
                        <input type="text" class="form-control" id="cc-number" name="cc-number" value="">
                    </div>
                    <div class="half-form">
                        <div class="form-group">
                            <label for="expiry">Data de Expiração</label>
                            <input type='text' class="form-control" id="expiry" name="expiry" value="">
                        </div>
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" value="">
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <button type="submit" class="button-primary full-width">Completar Compra</button>
                </form>
            </div>
            <div class="checkout-table-container">
                <h2>Sua Compra</h2>
                <div class="checkout-table">
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/mackbook-pro.png" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">Laço</div>
                                <div class="checkout-table-description">Laço Maravilhoso</div>
                                <div class="checkout-table-price">R$49,00</div>
                            </div>
                        </div>
                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div>
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/mackbook-pro.png" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">Laço</div>
                                <div class="checkout-table-description">Laço Maravilhoso</div>
                                <div class="checkout-table-price">R$49,00</div>
                            </div>
                        </div>
                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div>
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/mackbook-pro.png" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">Laço</div>
                                <div class="checkout-table-description">Laço Maravilhoso</div>
                                <div class="checkout-table-price">R$49,00</div>
                            </div>
                        </div>
                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div>
                </div>
                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        Desconto (10OFF - 10%) <br>
                        Taxa <br>
                        <span class="checkout-totals-total">Total</span>
                    </div>
                    <div class="checkout-totals-total">
                        R$150,00 <br>
                        R$15,00 <br>
                        R$135,00 <br>
                        <span class="checkout-totals-total">R$275,00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
