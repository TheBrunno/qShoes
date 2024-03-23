@extends('templates.nav')
@section('content')
<main>
    <section class="left">
        <img src="images/login-tenis.png">
        <div class="shape1"></div>
        <div class="shape2"></div>
        <div class="shape3"></div>
    </section>
    <section class="right">
        <div class="form-container">
            <h2>Bem-vindo de volta</h2>
            <h1>Faça login na sua conta</h1>

            <form action="POST">
                <div class="form-login">
                    <div class="email-field">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="exemplo@gmail.com" id="email">
                    </div>
                    <div class="password-field">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="0123456789" id="senha">
                    </div>
                    <div class="addicional">
                        <div class="checkbox-lembrar">
                            <input type="checkbox" name="lembrar" id="lembrar">
                            <label for="lembrar">Lembre de mim</label>
                        </div>
                        <div class="forgot">
                            <a href="#">Esqueceu sua senha?</a>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <input type="button" value="Entrar na conta" class="entrar">
                    <img src="images/google-icon.png" class="icon">
                    <input type="button" value="Ou faça login com o Google" class="entrar-google">
                </div>
            </form>

            <p>Não tem uma conta? <a href="/register">Cadastre-se</a></p>
        </div>
    </section>
</main>
@endsection
