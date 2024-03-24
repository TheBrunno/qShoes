@extends('templates.nav')
@section('content')
<main>
    <section class="left">
        <img src="images/login-tenis2.png">
        <div class="shape1"></div>
        <div class="shape2"></div>
        <div class="shape3"></div>
    </section>
    <section class="right">
        <div class="form-container container-register">
            <h2>Seja bem-vindo</h2>
            <h1>Crie a sua conta</h1>

            <form method="POST" action="/register" id="form-register">
                @csrf
                <div class="form-register">
                    <div class="name-field">
                        <label for="name">Nome</label>
                        <input type="text" name="name" placeholder="João" id="name">
                    </div>
                    <div class="email-field">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="exemplo@gmail.com" id="email">
                    </div>
                    <div class="password-field">
                        <label for="senha">Senha</label>
                        <input type="password" name="password" placeholder="0123456789" id="senha">
                    </div>
                    <div class="password-field">
                        <label for="repetir">Repetir senha</label>
                        <input type="password" name="repetir" placeholder="0123456789" id="repetir">
                    </div>
                </div>
                <div class="buttons-register">
                    <input type="submit" value="Criar a conta" class="entrar" id="submit">
                    <img src="images/google-icon.png" class="icon">
                    <input type="button" value="Ou se cadastre com o Google" class="entrar-google">
                </div>
            </form>

            <p>Já tem uma conta? <a href="/login">Entre</a></p>
        </div>
    </section>
</main>
<script src="js/fieldsVerify.js"></script>
@endsection
