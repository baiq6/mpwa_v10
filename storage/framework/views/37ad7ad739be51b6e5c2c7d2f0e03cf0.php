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
    <a href="<?php echo e(url('/')); ?>" class="app-brand auth-cover-brand mb-4 mt-4 d-block text-center">
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
    <div class="authentication-inner row m-0 justify-content-center align-items-center" style="min-height: 100vh;">
      <!-- Left Illustration (hidden on mobile) -->
      <div class="d-none d-xl-flex col-xl-7 p-0 align-items-center justify-content-center">
        <div class="auth-cover-bg d-flex flex-column justify-content-center align-items-center w-100 h-100">
          <img src="<?php echo e(asset('img/illustrations/auth-reset-password-illustration-light.png')); ?>" alt="auth-reset-password-cover" class="my-5 auth-illustration" style="max-width: 400px; width: 100%; height: auto;" data-app-light-img="illustrations/auth-reset-password-illustration-light.png" data-app-dark-img="illustrations/auth-reset-password-illustration-dark.png" />
          <img src="<?php echo e(asset('img/illustrations/bg-shape-image-light.png')); ?>" alt="auth-reset-password-bg" class="platform-bg" style="max-width: 300px; width: 100%; height: auto;" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
        </div>
      </div>
      <!-- /Left Illustration -->

      <!-- Reset Password Form -->
      <div class="col-12 col-xl-5 d-flex align-items-center justify-content-center">
        <div class="w-100" style="max-width: 420px; position: relative;">
          <!-- Language Switcher -->
          <div class="mb-4 text-end">
            <div class="dropdown">
              <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-base ti tabler-language"></i>
                <?php echo e(LaravelLocalization::getSupportedLocales()[app()->getLocale()]['native'] ?? __('Language')); ?>

              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                    <span class="flag-icon flag-icon-<?php echo e(strtolower($localeCode)); ?>"></span> <?php echo e($properties['native']); ?>

                  </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
          <!-- /Language Switcher -->


          <?php
          $alertData = session('alert') ?? old('alert') ?? (isset($alert) ? $alert : null);
          $resetSuccess = session('reset_success') ?? old('reset_success');
          ?>
          <?php if($alertData): ?>
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
            <?php $__env->slot('type', $alertData['type']); ?>
            <?php $__env->slot('msg', $alertData['msg']); ?>
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

          <?php if($resetSuccess): ?>
          <div class="alert alert-success text-center mb-4">
            <i class="icon-base ti tabler-check mb-2" style="font-size:2rem;"></i><br>
            <?php echo e(__('Your password has been reset successfully.')); ?><br>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary mt-3"><?php echo e(__('Back to login')); ?></a>
          </div>
          <?php else: ?>
          <form id="formAuthentication" class="mb-4" action="<?php echo e(route('password.update')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="token" value="<?php echo e($token); ?>">
            <div class="mb-4">
              <label class="form-label" for="email"><?php echo e(__('Email')); ?></label>
              <input type="email" id="email" name="email" value="<?php echo e(request('email', old('email'))); ?>" placeholder="<?php echo e(__('email')); ?>" aria-describedby="email" readonly class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
              <label class="form-label" for="password"><?php echo e(__('Enter new password')); ?></label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" name="password" placeholder="<?php echo e(__('Enter new password')); ?>" aria-describedby="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
              </div>
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
              <label class="form-label" for="confirm-password"><?php echo e(__('Confirm new password')); ?></label>
              <div class="input-group input-group-merge">
                <input type="password" id="confirm-password" name="password_confirmation" placeholder="<?php echo e(__('Confirm new password')); ?>" aria-describedby="password" class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
              </div>
              <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button class="btn btn-primary d-grid w-100 mb-3"><?php echo e(__('Reset')); ?></button>
            <div class="text-center">
              <a href="<?php echo e(route('login')); ?>" class="d-flex justify-content-center align-items-center">
                <i class="icon-base ti tabler-chevron-left scaleX-n1-rtl me-1_5"></i> <?php echo e(__('Back to login')); ?>

              </a>
            </div>
          </form>
          <?php endif; ?>
        </div>
      </div>
      <!-- /Reset Password Form -->
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
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  // Debug: Output session data to browser console
  console.log('reset_debug', {
    reset_success: <?php echo json_encode(session('reset_success'), 15, 512) ?>,
    alert: <?php echo json_encode(session('alert'), 15, 512) ?>
  });
  $(document).on('click', '.input-group-text.cursor-pointer', function() {
    var input = $(this).closest('.input-group').find('input');
    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      $(this).html('<i class="icon-base ti tabler-eye"></i>');
    } else {
      input.attr('type', 'password');
      $(this).html('<i class="icon-base ti tabler-eye-off"></i>');
    }
  });
</script><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/auth/passwords/reset.blade.php ENDPATH**/ ?>