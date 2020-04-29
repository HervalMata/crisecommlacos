@extends('layouts.app')
@section('title', 'Obrigado')
@section('extra-css')
@endsection
@section('body-class', 'sticky-footer')
@section('content')
    <div class="thank-you-section">
        <h1>Obrigado por <br> sua compra!</h1>
        <p>Um confirmação foi enviado para voçê</p>
        <div class="apacer"></div>
        <div>
            <a href="{{ url('/') }}" class="button">Página Inicial</a>
        </div>
    </div>
@endsection
