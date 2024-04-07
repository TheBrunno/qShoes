@extends('templates.nav')
@section('content')
<div class="photo" style=" background-image: url('{{asset('images/home.webp')}}');"></div>
<main>

    <div class="ofertas">
        <p><span class="material-symbols-outlined">timer</span>Ofertas Relâmpago</p>
    </div>

    <div class="cards-container">
        <div class="card">
            <img src="images/card1.webp">
            <p class="name-product">Tênis Rainha Soho Feminino</p>
            <div class="prices">
                <p class="old-price">R$ 199,99</p>
                <p class="price">R$ 109,99</p>
                <p class="installments">ou 1x de R$ 109,99</p>
            </div>
        </div>
        <div class="card">
            <img src="images/card2.webp">
            <p class="name-product">Tênis Under Armour Charged Skyline 4</p>
            <div class="prices">
                <p class="old-price">R$ 499,99</p>
                <p class="price">R$ 259,99</p>
                <p class="installments">ou 3x de R$ 86,66</p>
            </div>
        </div>
        <div class="card">
            <img src="images/card3.webp">
            <p class="name-product">Tênis Infantil Olympikus Maneiro Masculino</p>
            <div class="prices">
                <p class="old-price">R$ 259,99</p>
                <p class="price">R$ 199,99</p>
                <p class="installments">ou 2x de R$ 100,00</p>
            </div>
        </div>
        <div class="card">
            <img src="images/card4.webp">
            <p class="name-product">Tênis Nike Downshifter 12 Masculino</p>
            <div class="prices">
                <p class="old-price">R$ 449,99</p>
                <p class="price">R$ 218,49 <span class="text-price">no Pix</span></p>
                <p class="installments">ou 3x de R$ 76,66</p>
            </div>
        </div>
    </div>
    <h2 class="topic-title">Navegue por marcas</h2>
    <section>
        <div class="marcas">
            <div class="marca">
                <img src="images/logo1.webp">
            </div>
            <div class="marca">
                <img src="images/logo2.webp">
            </div>
            <div class="marca">
                <img src="images/logo3.webp">
            </div>
            <div class="marca">
                <img src="images/logo4.webp">
            </div>
            <div class="marca">
                <img src="images/logo5.webp">
            </div>
            <div class="marca">
                <img src="images/logo6.webp">
            </div>
        </div>
    </section>
    <h2 class="topic-title">Os mais vistos</h2>
    <section class="cards-container">
        <div class="card">
            <img src="images/vendas1.webp">
            <p class="name-product">Tênis Adidas Ultra Energy Feminino</p>
            <div class="prices">
                <p class="old-price">R$ 308,99</p>
                <p class="price">R$ 208,99 <span class="text-price">no Pix</span></p>
                <p class="installments">ou 3x de R$ 73,33</p>
            </div>
        </div>
        <div class="card">
            <img src="images/vendas2.webp">
            <p class="name-product">Tênis Adidas Response Runner</p>
            <div class="prices">
                <p class="old-price">R$ 299,99</p>
                <p class="price">R$ 227,99 <span class="text-price">no Pix</span></p>
                <p class="installments">ou 3x de R$ 80,00</p>
            </div>
        </div>
        <div class="card">
            <img src="images/vendas3.webp">
            <p class="name-product">Tênis Adidas Breaknet Masculino</p>
            <div class="prices">
                <p class="old-price">R$ 349,99</p>
                <p class="price">R$ 199,99</p>
                <p class="installments">ou 2x de R$ 100,00</p>
            </div>
        </div>
        <div class="card">
            <img src="images/vendas4.webp">
            <p class="name-product">Tênis Oakley Stratus Unissex</p>
            <div class="prices">
                <p class="old-price">R$ 649,99</p>
                <p class="price">R$ 299,99</p>
                <p class="installments">ou 4x de R$ 75,00</p>
            </div>
        </div>
    </section>
</main>
@endsection
