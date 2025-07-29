<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Setting')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Setting')).'']); ?>
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
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Settings')); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="row">
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
                    <div class="card">
                        <div class="card-body">
                            <h5 class=""><?php echo e(__('Settings')); ?></h5>
                            <div class="row mx-auto border p-4 rounded">
                                    <form action="<?php echo e(route('generateNewApiKey')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><?php echo e(__('API Key')); ?></span>

                                            <input type="text" class="form-control"
                                                value="<?php echo e(Auth::user()->api_key); ?>" aria-label="Username"
                                                aria-describedby="basic-addon1" readonly>
                                            <button type="submit" name="api_key" class="btn btn-primary"><?php echo e(__('Generate New')); ?></button>
                                        </div>
                                    </form>
                            </div>
                            <div class="row mt-4">
								<div class="col-md-6 mb-4"> 
									<div class="border rounded p-3"> 
										<form action="<?php echo e(route('changePassword')); ?>" method="POST">
											<?php echo csrf_field(); ?>

											<div class="form-group mb-3"> 
												<label for="settingsCurrentPassword" class="form-label"><?php echo e(__('Current Password')); ?></label>
												<input type="password" name="current"
													class="form-control <?php echo e($errors->has('current') ? 'is-invalid' : ''); ?> "
													aria-describedby="settingsCurrentPassword"
													placeholder="●●●●●●●●">
												<?php if($errors->has('current')): ?>
													<div class="invalid-feedback">
														<?php echo e($errors->first('current')); ?>

													</div>
												<?php endif; ?>
											</div>

											<div class="form-group mb-3"> 
												<label for="password" class="form-label"><?php echo e(__('New Password')); ?></label>
												<input type="password" name="password"
													class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>"
													aria-describedby="password"
													placeholder="●●●●●●●●">
												<?php if($errors->has('password')): ?>
													<div class="invalid-feedback">
														<?php echo e($errors->first('password')); ?>

													</div>
												<?php endif; ?>
											</div>

											<div class="form-group mb-3"> 
												<label for="settingsConfirmPassword" class="form-label"><?php echo e(__('Confirm Password')); ?></label>
												<input type="password" name="password_confirmation" class="form-control"
													aria-describedby="settingsConfirmPassword"
													placeholder="●●●●●●●●">
											</div>

											<div class="row m-t-lg mt-3">
												<div class="col">
													<button type="submit" class="btn btn-info text-white m-t-sm"><?php echo e(__('Change Password')); ?></button>
												</div>
											</div>
										</form>
									</div> 
								</div>

								<div class="col-md-6"> 
									<div class="border rounded p-3"> 
										<form method="POST" action="<?php echo e(route('user.settings.2fa')); ?>">
											<?php echo csrf_field(); ?>
											<div class="row m-t-lg mt-3">
												<div class="col">
													<?php if(auth()->user()->two_factor_enabled): ?>
														<button type="submit" name="action" class="btn btn-danger text-white m-t-sm col-12" value="disable"><?php echo e(__('Disable Authenticator 2FA?')); ?></button>
													<?php else: ?>
														<button type="submit" name="action" class="btn btn-info text-white m-t-sm col-12" value="enable"><?php echo e(__('Enable Authenticator 2FA?')); ?></button>
													<?php endif; ?>
												</div>
											</div>
										</form>

										<?php if(auth()->user()->two_factor_enabled): ?>
											<div class="row col-md-12 mx-auto mt-3 border text-center p-2"> 
												<h4><?php echo e(__('Recovery Codes')); ?></h4>
												<p><?php echo e(__('You can use Recovery Codes if you accidentally delete the Google Authenticator app or lose your phone. Use these codes when logging in instead of the app')); ?></p>
												<div class="col-12">
													<div class="row">
														<?php $__currentLoopData = json_decode(auth()->user()->recovery_codes); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<div class="col-3"><?php echo e($code); ?></div>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div> 
									<div class="border rounded p-3 mt-3"> 
										<form method="POST" action="<?php echo e(route('deleteHistory')); ?>">
											<?php echo csrf_field(); ?>
											<label for="delete_history" class="form-label"><?php echo e(__('Automatically delete message history:')); ?></label>
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex align-items-center flex-grow-1">
													<select name="delete_history" class="form-control">
														<option value="0" 
														<?php if(auth()->user()->delete_history == 0): ?>
														selected
														<?php endif; ?>
														><?php echo e(__("Don't Delete")); ?></option>
														
														<?php $__currentLoopData = range(1, 30); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<?php if($number == auth()->user()->delete_history): ?>
																<option value="<?php echo e($number); ?>" selected><?php echo e($number); ?></option>
															<?php else: ?>
																<option value="<?php echo e($number); ?>"><?php echo e($number); ?></option>
															<?php endif; ?>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</select>
													<span class="text-nowrap ms-2 me-2"><?php echo e(__('In Days')); ?></span>
												</div>
												<div>
													<button type="submit" class="btn btn-info text-white m-t-sm"><?php echo e(__('Save')); ?></button>
												</div>
											</div>
										</form>
									</div>
									<div class="border rounded p-3 mt-3"> 
										<form method="POST" action="<?php echo e(route('user.settings.timezone')); ?>">
											<?php echo csrf_field(); ?>
											<label for="timezone" class="form-label"><?php echo e(__('Select Timezone:')); ?></label>
											<select name="timezone" class="form-control">
												<?php $__currentLoopData = timezone_identifiers_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($timezone); ?>" 
														<?php if(auth()->user()->timezone == $timezone): ?> selected <?php endif; ?>>
														<?php echo e($timezone); ?>

													</option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
											<div class="mt-3">
												<button type="submit" class="btn btn-info text-white"><?php echo e(__('Save Timezone')); ?></button>
											</div>
										</form>
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
<?php endif; ?>
<?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/user/settings.blade.php ENDPATH**/ ?>