<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Payment Gateways')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Gateways')).'']); ?>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom-icon">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);"><?php echo e(__('Admin')); ?></a>
                <i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
            </li>
            <li class="breadcrumb-item active"><?php echo e(__('Payment Gateways')); ?></li>
        </ol>
    </nav>
	
    <form action="<?php echo e(route('admin.payments.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="card my-4">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0"><?php echo e(__('Payment Gateways')); ?></h5>
                <button type="submit" class="btn btn-primary btn-sm ms-auto">
                    <i class="ti tabler-device-floppy me-1"></i> <?php echo e(__('Save Changes')); ?>

                </button>
            </div>
        </div>

        <div class="accordion" id="accordionPayments">
            <div class="row">
                <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 mb-4">
                        <div class="accordion-item card border shadow-sm p-2">
                            <h2 class="accordion-header" id="heading<?php echo e($gateway['name']); ?>">
								<button
									class="accordion-button collapsed"
									type="button"
									data-bs-toggle="collapse"
									data-bs-target="#collapse<?php echo e($gateway['name']); ?>"
									aria-expanded="false"
									aria-controls="collapse<?php echo e($gateway['name']); ?>">
									<?php if(file_exists(public_path('themes/'.env('THEME_INDEX').'/payments/' . $gateway['name'] . '.png'))): ?>
										<img src="<?php echo e(asset('payments/'.$gateway['name'].'.png')); ?>" width="40" class="me-2" />
									<?php else: ?>
										<img src="https://placehold.co/116x68/f6f6f7/7367f0?text=<?php echo e(ucfirst($gateway['name'])); ?>" width="40" class="me-2" />
									<?php endif; ?>
									<?php echo e(ucfirst($gateway['name'])); ?>

									<?php if(data_get($gateway['config'], 'status') === 'enable'): ?>
										<i class="ti tabler-circle-check text-success order-last me-2"></i>
									<?php else: ?>
										<i class="ti tabler-circle-x text-danger order-last me-2"></i>
									<?php endif; ?>
								</button>
							</h2>
                            <div
                                id="collapse<?php echo e($gateway['name']); ?>"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading<?php echo e($gateway['name']); ?>"
                                data-bs-parent="#accordionPayments">
                                <div class="accordion-body p-3">
                                    <div class="row g-3">
                                        <?php $__currentLoopData = $gateway['config']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key !== 'html'): ?>
                                                <div class="col-md-6">
                                                    <label for="<?php echo e($gateway['name']); ?>_<?php echo e($key); ?>" class="form-label fw-semibold">
                                                        <?php echo e(str_replace('_', ' ', ucfirst($key))); ?>

                                                    </label>
                                                    <?php if($key === 'status'): ?>
                                                        <select
                                                            name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]"
                                                            id="<?php echo e($gateway['name']); ?>_<?php echo e($key); ?>"
                                                            class="form-select">
                                                            <option value="disable">Disable</option>
                                                            <option value="enable" <?php if($option === 'enable'): ?> selected <?php endif; ?>>Enable</option>
                                                        </select>
                                                    <?php elseif($key === 'is_production'): ?>
                                                        <select
                                                            name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]"
                                                            id="<?php echo e($gateway['name']); ?>_<?php echo e($key); ?>"
                                                            class="form-select">
                                                            <option value="false">No</option>
                                                            <option value="true" <?php if($option === 'true'): ?> selected <?php endif; ?>>Yes</option>
                                                        </select>
                                                    <?php else: ?>
                                                        <input
                                                            name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]"
                                                            id="<?php echo e($gateway['name']); ?>_<?php echo e($key); ?>"
                                                            class="form-control"
                                                            value="<?php echo e($option); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-md-12">
                                                    <label for="editor-container" class="form-label fw-semibold">
                                                        <?php echo e(str_replace('_', ' ', ucfirst($key))); ?>

                                                    </label>
                                                    <div id="editor-container" style="height: 200px; background: white;">
                                                        <?php echo base64_decode($option); ?>

                                                    </div>
                                                    <input
                                                        type="hidden"
                                                        name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]"
                                                        id="htmlcrypt">
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'indent': '-1'}, { 'indent': '+1' }],
                        [{ 'direction': 'rtl' }],
                        [{ 'size': ['small', false, 'large', 'huge'] }],
                        [{ 'color': [] }, { 'background': [] }],
                        [{ 'align': [] }],
                        ['link'],
                        ['clean']
                    ]
                }
            });

            document.querySelector('form[action="<?php echo e(route('admin.payments.update')); ?>"]')
                .addEventListener('submit', function () {
                    document.getElementById('htmlcrypt')
                        .value = quill.root.innerHTML;
                });
        });
    </script>
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
<?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/admin/payments/index.blade.php ENDPATH**/ ?>