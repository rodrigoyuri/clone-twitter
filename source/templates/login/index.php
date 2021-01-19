<?php $this->layout('base') ?>

<?php $this->start('styles') ?>

<link rel="stylesheet" href="<?= urlAssets("css/login.css") ?>">

<?php $this->stop() ?>

<div class="login">
    <div class="image-background"></div>
    <div class="actions">
        <div class="actions-content">
            <div class="icon-twitter-action">
                <img src="<?= urlAssets("img/twitter-logo.svg")?>" alt=""> 
            </div>
            <div class="description-action">
                <h2>See what’s happening in the world right now</h2>
            </div>
            
            <div class="buttons-actions">
                <div class="text-action">
                    <h3>Join Twitter today.</h3>
                </div>
                <button class="sing-up">Sing up</button>
                <button class="log-in">Log in</button>
            </div>
        </div>
    </div>
</div>
<!-- <div class="form">
        <form action="" class="form-login">
            <div class="inputs-login">
                <label for="">E-mail</label>
                <input type="email" name="email" id="email">

                <label for="">Senha</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="button-login">
                <button type="submit">Logar</button> 
            </div>
        </form>
    </div> -->