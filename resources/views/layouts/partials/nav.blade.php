<header>
    <div class="top-nav container">
        <div class="logo"><a href="/"> Laços da Cris</a></div>
        @if(!request()->is('checkout'))
        <ul>
            <li><a href="">Loja</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Carrinho <span class="cart-count"><span>3</span></span> </a></li>
        </ul>
        @endif
    </div>
</header>
