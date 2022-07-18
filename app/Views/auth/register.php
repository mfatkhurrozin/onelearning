<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
    <div style="background:#00abd4;">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center" style="height:100vh">
                <div class="col-5 p-5 bg-white rounded" style=" box-shadow: 0 3px 10px rgb(0 0 0 / 0.5);" >
                    <div class="text-center">    
                        <h1 class="display-5 ">Register</h1>
                        <p class=" fw-light">Buat akun sekarang dan masuk ke E-learning</p>
                    </div>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group"> 
                            <input type="text" class="form-control rounded-pill py-2 <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" aria-describedby="usernameHelp" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group my-2">
                            <input type="email" class="form-control rounded-pill py-2 <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" aria-describedby="emailHelp" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-group my-2">
                                    <input type="password" name="password" class="form-control rounded-pill py-2 <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group my-2">
                                    <input type="password" name="pass_confirm" class="form-control rounded-pill py-2 <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="tombol login py-2 text-white fw-bolder rounded-pill" style="background:#00abd4; border:none;">
                            <?=lang('Auth.register')?>
                            </button>
                        </div>
                        <hr>
                        <p class="text-center"><?=lang('Auth.alreadyRegistered')?> <a class="text-muted text-decoration-none" href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
        