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
    <?php $__env->slot('title', __('Authenticator 2FA')); ?>

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

        <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-6 p-sm-12">
          <div class="w-px-400 mx-auto mt-12 mt-5 position-relative">
			<div class="position-absolute top-0 end-0">
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
			<?php if(session()->has('alert')): ?>
                                <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php $__env->slot('type', session('alert')['type']); ?>
                                    <?php $__env->slot('msg', session('alert')['msg']); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
            <?php endif; ?>
            <h4 class="mb-1"><?php echo e(__('Authenticator 2FA')); ?></h4>
            <p class="text-start mb-6">
              <?php echo e(__('Enter the code shown on the Authenticator app')); ?>

            </p>
            <p class="mb-0"><?php echo e(__('Type your 6 digit security code')); ?></p>
            <form id="twoStepsForm" action="<?php echo e(route('2fa.verify')); ?>" method="POST">
			  <?php echo csrf_field(); ?>
              <div class="mb-6 form-control-validation">
                <div class="auth-input-wrapper d-flex align-items-center justify-content-between numeral-mask-wrapper">
                  <input
                    type="tel"
                    class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2"
                    maxlength="1"
                    autofocus />
                  <input
                    type="tel"
                    class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2"
                    maxlength="1" />
                  <input
                    type="tel"
                    class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2"
                    maxlength="1" />
                  <input
                    type="tel"
                    class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2"
                    maxlength="1" />
                  <input
                    type="tel"
                    class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2"
                    maxlength="1" />
                  <input
                    type="tel"
                    class="form-control auth-input h-px-50 text-center numeral-mask mx-sm-1 my-2"
                    maxlength="1" />
                </div>
                <input type="hidden" name="2fa_code" />
              </div>
              <button class="btn btn-primary d-grid w-100 mb-6"><?php echo e(__('Submit')); ?></button>
              <div class="text-center">
                <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger radius-30 col-12">
				  <?php echo e(__('Logout')); ?>

				</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	<script src="<?php echo e(asset('js/pages-auth-two-steps.js')); ?>"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald15a047437633666527fa2baf930ea39)): ?>
<?php $attributes = $__attributesOriginald15a047437633666527fa2baf930ea39; ?>
<?php unset($__attributesOriginald15a047437633666527fa2baf930ea39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald15a047437633666527fa2baf930ea39)): ?>
<?php $component = $__componentOriginald15a047437633666527fa2baf930ea39; ?>
<?php unset($__componentOriginald15a047437633666527fa2baf930ea39); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/auth/2fa_verify.blade.php ENDPATH**/ ?>