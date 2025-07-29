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
    <?php $__env->slot('title', __('Reset Password')); ?>
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0 justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-12 col-xl-5 d-flex align-items-center justify-content-center">
                <div class="w-100" style="max-width: 420px;">
                    <div class="alert alert-danger text-center mb-4">
                        <i class="icon-base ti tabler-alert-triangle mb-2" style="font-size:2rem;"></i><br>
                        <?php echo e($msg); ?>

                    </div>
                    <div class="text-center">
                        <a href="<?php echo e(route('password.request')); ?>" class="btn btn-primary mt-2"><?php echo e(__('Request Password Reset Again')); ?></a>
                        <br>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-link mt-2"><?php echo e(__('Back to login')); ?></a>
                    </div>
                </div>
            </div>
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
<?php endif; ?><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/auth/passwords/reset-error.blade.php ENDPATH**/ ?>