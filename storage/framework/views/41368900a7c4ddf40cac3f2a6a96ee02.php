<?php if (isset($component)) { $__componentOriginald15a047437633666527fa2baf930ea39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald15a047437633666527fa2baf930ea39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->slot('title', __("Reset Password")); ?>

	<div class="authentication-wrapper authentication-cover">
      <!-- Logo -->
      <a href="<?php echo e(url('/')); ?>" class="app-brand auth-cover-brand">
        <span class="app-brand-logo demo">
          <span class="text-primary">
            <?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
          </span>
        </span>
      </a>
      <!-- /Logo -->
      <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        <div class="d-none d-xl-flex col-xl-8 p-0">
          <div class="auth-cover-bg d-flex justify-content-center align-items-center">
            <img
              src="<?php echo e(asset('img/illustrations/auth-reset-password-illustration-light.png')); ?>"
              alt="auth-reset-password-cover"
              class="my-5 auth-illustration"
              data-app-light-img="illustrations/auth-reset-password-illustration-light.png"
              data-app-dark-img="illustrations/auth-reset-password-illustration-dark.png" />
            <img
              src="<?php echo e(asset('img/illustrations/bg-shape-image-light.png')); ?>"
              alt="auth-reset-password-cover"
              class="platform-bg"
              data-app-light-img="illustrations/bg-shape-image-light.png"
              data-app-dark-img="illustrations/bg-shape-image-dark.png" />
          </div>
        </div>
        <!-- /Left Text -->

        <!-- Reset Password -->
        <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-6 p-sm-12">
          <div class="w-px-400 mx-auto mt-12 pt-5 position-relative">
			<div class="position-absolute top-0 end-0 mt-6">
				<ul class="navbar-nav">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 15px;">
										<i class="icon-base ti tabler-language"></i>
										<?php echo e(__('Language')); ?>

									</a>
									<ul class="dropdown-menu" aria-labelledby="languageDropdown">
										<?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li>
												<a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
													<span class="flag-icon flag-icon-<?php echo e(strtolower($localeCode)); ?>"></span>
													<?php echo e($properties['native']); ?>

												</a>
											</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</li>
				</ul>
			</div>
            <h4 class="mb-1"><?php echo e(__('Reset Password')); ?></h4>
            <p class="mb-6">
              <span class="fw-medium"><?php echo e(__('Enter your email address to send a reset link')); ?></span>
            </p>
            <form id="formAuthentication" class="mb-6" action="<?php echo e(route('password.email')); ?>" method="POST">
			  <?php echo csrf_field(); ?>
			  <div class="mb-6 form-password-toggle form-control-validation">
                <label class="form-label" for="password"><?php echo e(__('Email')); ?></label>
                <div class="input-group input-group-merge">
                  <input
                    type="email"
                    id="email"
                    class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                    name="email"
                    placeholder="<?php echo e(__('email')); ?>"
                    aria-describedby="email" />
				  <p class="text-danger">
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </p>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100 mb-6"><?php echo e(__('Reset')); ?></button>
              <div class="text-center">
                <a href="<?php echo e(route('login')); ?>" class="d-flex justify-content-center">
                  <i class="icon-base ti tabler-chevron-left scaleX-n1-rtl me-1_5"></i>
                  <?php echo e(__("Did you remember your password?")); ?>

                </a>
              </div>
            </form>
          </div>
        </div>
        <!-- /Reset Password -->
      </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald15a047437633666527fa2baf930ea39)): ?>
<?php $attributes = $__attributesOriginald15a047437633666527fa2baf930ea39; ?>
<?php unset($__attributesOriginald15a047437633666527fa2baf930ea39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald15a047437633666527fa2baf930ea39)): ?>
<?php $component = $__componentOriginald15a047437633666527fa2baf930ea39; ?>
<?php unset($__componentOriginald15a047437633666527fa2baf930ea39); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/auth/passwords/email.blade.php ENDPATH**/ ?>