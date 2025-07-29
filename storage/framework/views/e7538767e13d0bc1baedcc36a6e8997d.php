<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Phone book')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Phone book')).'']); ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);"><?php echo e(__('Phonebook')); ?></a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active"><?php echo e(__('Contact')); ?></li>
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
<div class="card shadow-sm border-0">
    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h5 class="card-title mb-0 d-flex align-items-center gap-2">
            <?php echo e(__('Phonebook')); ?>

        </h5>
        <div class="d-flex flex-wrap gap-2">
            <form action="<?php echo e(route('fetch.groups')); ?>" method="post" class="m-0">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="device"
                    value="<?php echo e(Session::get('selectedDevice.device_id')); ?>">
                <button type="submit" class="btn btn-info btn-sm text-white">
                    <i class="ti tabler-device-mobile-message"></i> <?php echo e(__('Fetch From Selected Device')); ?>

                </button>
            </form>
            <button onclick="clearPhonebook()" class="btn btn-outline-danger btn-sm">
                <i class="ti tabler-trash"></i> <?php echo e(__('Clear Phonebook')); ?>

            </button>
        </div>
    </div>

    <div class="card-body px-4 pb-4">
        <div class="row g-4">
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 text-primary"><i class="ti tabler-folder"></i> <?php echo e(__('Tags')); ?></h6>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addTag">
                            <i class="ti tabler-plus"></i>
                        </button>
                    </div>
                    <div class="card-body px-3 py-2">
                        <input type="text" class="form-control mb-3 search-phonebook" placeholder="<?php echo e(__('Search phonebook')); ?>">
                        <div class="list-group list-group-flush phone-book-list" style="max-height: 400px; overflow-y: auto;">
                            <div class="text-center load-phonebook text-danger py-3">
                                <i class="ti tabler-loader"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-outline-secondary btn-sm load-more" data-page="1">
                            <i class="ti tabler-refresh"></i> <?php echo e(__('Load More')); ?>

                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
                            <button onclick="deleteAllContact()" class="btn btn-sm btn-danger">
                                <i class="ti tabler-trash-x"></i> <?php echo e(__('Delete All')); ?>

                            </button>
                            <div class="input-group w-50">
                                <span class="input-group-text bg-white"><i class="ti tabler-search"></i></span>
                                <input type="text" class="form-control search-contact" placeholder="<?php echo e(__('Search contacts')); ?>">
                            </div>
                            <div class="d-flex gap-2">
                                <button class="badge btn-sm bg-primary-subtle text-primary" onclick="addContact()">
                                    <i class="ti tabler-user-plus"></i> <?php echo e(__('Add')); ?>

                                </button>
                                <button class="badge btn-sm bg-success-subtle text-success" onclick="importContact()">
                                    <i class="ti tabler-upload"></i> <?php echo e(__('Import')); ?>

                                </button>
                                <button class="badge btn-sm bg-warning-subtle text-warning" onclick="exportContact()">
                                    <i class="ti tabler-download"></i> <?php echo e(__('Export')); ?>

                                </button>
                            </div>
                        </div>

                        <div class="contacts-list"></div>

                        <div class="text-center text-muted mt-4 process-get-contact">
                            <i class="ti tabler-info-circle me-1"></i> <?php echo e(__('Please select phonebook to show contact')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>


    
    <div class="modal fade" id="addTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Add Tag')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('tag.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                        <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><?php echo e(__('Add')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal add contact -->
    <div class="modal fade" id="addContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Add Contact')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-contact-form" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>
                        <input type="text" name="name" class="form-control contact-name" id="name"
                            required>
                        <label for="number" class="form-label"><?php echo e(__('Number')); ?></label>
                        <input type="number" name="number" class="form-control contact-number" id="number"
                            required>
                        <input type="hidden" class="input_phonebookid" name="tag_id" value=" ">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary add-contact"><?php echo e(__('Add')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal add contact -->
    <!-- modal import contact -->
    <div class="modal fade" id="importContacts" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Import Contacts')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="import-contact-form" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label for="fileContacts" class="form-label"><?php echo e(__('File (xlsx )')); ?></label>
                        <input accept=".xlsx" type="file" name="fileContacts"
                            class="form-control file-import" id="fileContacts" required>

                        <input type="hidden" name="tag_id" value="" class="import_phonebookid">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><?php echo e(__('Import')); ?></button>
                    </form>
                </div>
            </div>
        </div>
        


    </div>
    <!-- end modal import contact -->

    </div>
    <script src="<?php echo e(asset('js/phonebook.js')); ?>"></script>
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
<?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/phonebook/index.blade.php ENDPATH**/ ?>