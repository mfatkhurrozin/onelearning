<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
    <div style="background:#00abd4;">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center" style="height:100vh">
                <div class="col-5 p-5 bg-white rounded" style=" box-shadow: 0 3px 10px rgb(0 0 0 / 0.5);" >
                    <div class="text-center">    
                        <h1 class="display-5 "><?=lang('Auth.loginTitle')?></h1>
                        <p class=" fw-light">Masukkan akun yang telah terdaftar</p>
                    </div>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form class="" action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?> 
                    
                <?php if ($config->validFields === ['email']): ?>
                        <div class="form-group">
                            <input type="email" class="form-control rounded-pill py-2 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" name="login" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
                        </div>
                    
                    <?php else: ?>        
                        <div class="form-group">
                            <input type="text" class="form-control rounded-pill py-2 <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" name="login" aria-describedby="emailHelp" placeholder="<?=lang('Auth.emailOrUsername')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    
                    <?php endif; ?>   

                        <div class="form-group my-2">
                            <input type="password" name="password" class="form-control rounded-pill py-2 <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" style="background:#00abd412;" id="exampleInputPassword1" placeholder="<?=lang('Auth.password')?>">
                            <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                        </div>
                    <?php if ($config->allowRemembering): ?>
                        <div class="form-check mb-3">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" <?php if(old('remember')) : ?> checked <?php endif ?>>
                            <label class="form-check-label" for="exampleCheck1"><?=lang('Auth.rememberMe')?></label>
                        </div>
                    <?php endif; ?>
                        <div class="d-grid gap-2">
                            <button type="submit" class="tombol login py-2 text-white rounded-pill" style="background:#00abd4; border:none;">
                                <?=lang('Auth.loginAction')?>   <i class="fas fa-sign-in-alt"></i>
                            </button>
                        </div>
                    </form>
                    <hr>
                    <?php if ($config->allowRegistration) : ?>
					    <p class="text-center"><a class="text-muted text-decoration-none" href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                    <?php endif; ?>

                    <?php if ($config->activeResetter): ?>
                        <p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
        