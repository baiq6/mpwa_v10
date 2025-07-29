<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Authenticator 2FA')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Authenticator 2FA')).'']); ?>
   <div class="app-content">
      <div class="content-wrapper">
         <div class="container">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
               <div class="breadcrumb-title pe-3"><?php echo e(__('User')); ?></div>
               <div class="ps-3">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Authenticator 2FA')); ?></li>
                     </ol>
                  </nav>
               </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
               <div class="card">
                  <div class="card-body">
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
                     <div class="row col-md-6 mx-auto">
                        <div class="col-md-12 text-center">
                           <h2><?php echo e(__('Enable Authenticator 2FA')); ?></h2>
                           <p><?php echo e(__('Scan the following QR code using the Google Authenticator app')); ?></p>
						   <div class="row border p-1">
                           <div class="col-md-6"><?php echo $qrCodeImage; ?></div>
                           <div class="col-md-6 d-flex flex-column justify-content-center">
						   <form method="POST" action="<?php echo e(route('user.2fa.verify')); ?>">
                              <?php echo csrf_field(); ?>
                              <div class="col-md-6 mx-auto d-block">
                                 <label for="2fa_code" class="form-label"><?php echo e(__('Enter the code')); ?></label>
                                 <input type="number" name="2fa_code" class="form-control">
                              </div>
                              <button type="submit" class="btn btn-info text-white m-t-sm mt-3"><?php echo e(__('Confirm')); ?></button>
                              <button type="button" class="btn btn-danger text-white m-t-sm mt-3" onclick="window.location.href='<?php echo e(url('/user/settings')); ?>'"><?php echo e(__('Cencel')); ?></button>
                           </form>
						   </div>
						   </div>
                        </div>
                     </div>
					 <div class="row col-md-6 mx-auto mt-2 border text-center p-1">
					 <h4><?php echo e(__('Recovery Codes')); ?></h4>
					 <p><?php echo e(__('You can use Recovery Codes if you accidentally delete the Google Authenticator app or lose your phone. Use these codes when logging in instead of the app')); ?></p>
					 <div class="col-12">
					    <div class="row">
           		        <?php $__currentLoopData = $recoveryCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              		        <div class="col-3"><?php echo e($code); ?></div>
           		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					 </div>
					 </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald819fa024fa6d382567c72bcf8897f25)): ?>
<?php $attributes = $__attributesOriginald819fa024fa6d382567c72bcf8897f25; ?>
<?php unset($__attributesOriginald819fa024fa6d382567c72bcf8897f25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald819fa024fa6d382567c72bcf8897f25)): ?>
<?php $component = $__componentOriginald819fa024fa6d382567c72bcf8897f25; ?>
<?php unset($__componentOriginald819fa024fa6d382567c72bcf8897f25); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/user/2fa_setup.blade.php ENDPATH**/ ?>