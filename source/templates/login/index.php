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

<div class="modal-container">
    <div class="modal-content">
        <div class="close-modal">
            <span id="close-modal">&times;</span>
        </div>
        <div class="forms">
            <div class="forms-content">
                <div class="content-login">
                    <div class="form-login-header">
                        <img src="<?= urlAssets("img/twitter-logo.svg")?>" alt=""> 
                        <h3>Login in to Twitter</h3>
                    </div>

                    <div class="form-login">                    
                        <input type="email" class="form-input" name="email-login" id="email-login" placeholder="E-mail">

                        <input type="password" class="form-input" name="password-login" id="password-login" placeholder="Password">

                        <button id="btn-login" class="form-button">Log in</button>

                        <div class="forget">
                            <a href="#">Esqueceu a senha?</a>  .  <a href="#" id="sing-up">Sing up for Twitter</a>
                        </div>
                    </div>
                </div>

                <div class="content-register">
                    <div class="form-register-header">
                        <img src="<?= urlAssets("img/twitter-logo.svg")?>" alt=""> 
                        <h3>Register in to Twitter</h3>
                    </div>
                    <div class="form-register">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Username">

                        <input type="email" class="form-input" name="email-register" id="email-register" placeholder="E-mail">

                        <input type="password" class="form-input" name="password-register" id="password-register" placeholder="Password">

                        <input type="password" class="form-input" name="confirm-password" id="confirm-password" placeholder="Confirm Password">

                        <button type="submit" id="btn-register" class="form-button">Register</button>

                        <div class="forget">
                            <span>Já tem uma conta?</span>  .  <a href="#" id="log-in">Log in for Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->start('scripts') ?>

<script src="<?= urlAssets("js/login.js") ?>"></script>

<?php $this->stop() ?>