<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Update Version')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Update Version')).'']); ?>
	<!--breadcrumb-->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);"><?php echo e(__('Admin')); ?></a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active"><?php echo e(__('Update Version')); ?></li>
		</ol>
	</nav>
	<!--end breadcrumb-->
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
    <?php if($errors->any()): ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			<h4 class="alert-heading d-flex align-items-center">
				<span class="alert-icon rounded">
					<i class="icon-base ti tabler-face-id-error icon-md"></i>
				</span>
				<?php echo e(__('Oh Error :(')); ?>

			</h4>
			<hr>
			<p class="mb-0">
				<p><?php echo e(__('The given data was invalid.')); ?></p>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
			</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
    <?php endif; ?>
			<div class="card">
				<div class="card-header d-flex justify-content-between">
					<h5 class="card-title"><?php echo e(__('Update')); ?></h5>
				</div>
				<div class="container">
				 <?php if(session('status')): ?>
					<div class="alert alert-success">
						<?php echo e(session('status')); ?>

					</div>
				<?php endif; ?>
					<?php if($updateAvailable): ?>
					<div class="alert alert-info">
						<?php echo e(__('A new version is available:')); ?> <span class="text-danger">v<?php echo e($newVersion); ?></span><br />
						<?php echo __('<span class="text-danger">Note: Turn off <span class="text-primary">Nodejs</span> before continuing with the update, after the update is complete you can turn it back on</span>'); ?>

						<?php if($whatsNew): ?>
							<br /><?php echo $whatsNew; ?>

						<?php endif; ?>
					</div>
					<form method="POST" action="<?php echo e(route('update.install')); ?>">
						<?php echo csrf_field(); ?>
						<?php if($serverProtocol == 'https'): ?>
						<div class="alert alert-danger">
							<?php echo __('<span class="text-danger">You are using SSL in the <span class="text-primary">server.js</span> file, but don\'t worry, <span class="text-primary">Smart Update</span> will update and run your site with SSL, just click update</span>'); ?><br />
							<?php if($updateSSL): ?>
							<input type="hidden" name="ssl" value="ssl" />
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if($before): ?>
							<input type="hidden" name="before" value="1" />
						<?php endif; ?>
						<?php if($after): ?>
							<input type="hidden" name="after" value="1" />
						<?php endif; ?>
						<input type="hidden" name="version" value="<?php echo e($newVersion); ?>" />
						<button type="submit" class="btn btn-primary mb-3"><?php echo e(__('Update')); ?></button>
					</form>
					<?php else: ?>
					<div class="alert alert-success">
						<?php echo e(__('You are using the latest version.')); ?>

					</div>
					<?php endif; ?>
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
<?php endif; ?><?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/admin/update.blade.php ENDPATH**/ ?>