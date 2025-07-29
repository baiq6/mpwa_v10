<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Ticket Details')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Ticket Details')).'']); ?>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
	
    <div class="card mb-4">
        <div class="card-body p-4">
            <div class="row g-4">
                <div class="col-md-4">
    <div class="d-flex align-items-center gap-3">
        <div class="avatar bg-label-primary rounded-circle d-flex align-items-center justify-content-center">
            <i class="icon-base ti tabler-ticket icon-26px"></i>
        </div>
        <div>
            <h6 class="mb-1">#<?php echo e($ticket->id); ?></h6>
            <p class="text-muted mb-0"><?php echo e($ticket->title); ?></p>
        </div>
    </div>
</div>


                <div class="col-md-2 text-center">
                    <small class="text-muted"><?php echo e(__('Status')); ?></small>
                    <div class="mt-1">
                        <span class="badge rounded-pill bg-<?php echo e($ticket->status === 'open' ? 'success' : 'secondary'); ?>-subtle text-<?php echo e($ticket->status === 'open' ? 'success' : 'secondary'); ?>">
                            <?php echo e(__(ucfirst($ticket->status))); ?>

                        </span>
                    </div>
                </div>

                <div class="col-md-2 text-center">
                    <small class="text-muted"><?php echo e(__('Priority')); ?></small>
                    <div class="mt-1">
                        <span class="badge rounded-pill bg-<?php echo e($ticket->priority === 'high' ? 'danger' : ($ticket->priority === 'medium' ? 'warning' : 'info')); ?>-subtle text-<?php echo e($ticket->priority === 'high' ? 'danger' : ($ticket->priority === 'medium' ? 'warning' : 'info')); ?>">
                            <?php echo e(__(ucfirst($ticket->priority))); ?>

                        </span>
                    </div>
                </div>

                <div class="col-md-2 text-center">
                    <small class="text-muted"><?php echo e(__('Created By')); ?></small>
                    <div class="mt-1"><?php echo e($ticket->user->username ?? __('Deleted')); ?></div>
                </div>

                <div class="col-md-2 text-center">
                    <small class="text-muted"><?php echo e(__('Created At')); ?></small>
                    <div class="mt-1"><?php echo e($ticket->created_at->format('Y-m-d H:i')); ?></div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent d-flex justify-content-end gap-2">
            <?php if($ticket->status === 'open'): ?>
                <form action="<?php echo e(route('admin.tickets.close', $ticket)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-warning btn-sm">
                        <i class="ti tabler-lock"></i> <?php echo e(__('Close Ticket')); ?>

                    </button>
                </form>
            <?php else: ?>
                <form action="<?php echo e(route('admin.tickets.reopen', $ticket)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-success btn-sm">
                        <i class="ti tabler-unlock"></i> <?php echo e(__('Reopen Ticket')); ?>

                    </button>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0"><?php echo e(__('Messages')); ?></h5>
        </div>
        <div class="card-body">
            <?php $__empty_1 = true; $__currentLoopData = $ticket->messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card mb-4 shadow-sm border">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div>
                                <strong><?php echo e($message->user->username ?? __('Deleted')); ?></strong>
                                <span class="text-muted ms-2">
                                    <?php echo e(\App\Traits\ConvertsDates::convertToUserTimezone($message->updated_at)); ?>

                                </span>
                            </div>
                                <?php echo $message->user_id === $ticket->user_id
								? '<span class="badge bg-label-secondary">'.__('User').'</span>'
								: '<span class="badge bg-label-danger">'.__('Admin').'</span>'; ?>

                        </div>
                        <div class="text-body" style="line-height: 10px">
                            <?php echo $message->message; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert alert-info"><?php echo e(__('No messages yet.')); ?></div>
            <?php endif; ?>
        </div>
    </div>

    <?php if($ticket->status === 'open'): ?>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('admin.tickets.reply', $ticket)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="message" class="form-label"><?php echo e(__('Reply')); ?></label>
						<div id="editor-container" style="height: 200px; background: white;"><?php echo e(old('message')); ?></div>
                        <input type="hidden" id="message" name="message">
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="ti tabler-send me-1"></i><?php echo e(__('Send Reply')); ?>

                    </button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-info">
            <?php echo e(__('This ticket is closed')); ?>

        </div>
    <?php endif; ?>

    <div class="text-start mt-3">
        <a href="<?php echo e(route('admin.tickets.index')); ?>" class="btn btn-sm btn-outline-secondary">
            <i class="ti tabler-arrow-left me-1"></i><?php echo e(__('Back to Tickets')); ?>

        </a>
    </div>
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

            document.querySelector('form[action="<?php echo e(route('admin.tickets.reply', $ticket)); ?>"]').addEventListener('submit', function () {
                document.getElementById('message').value = quill.root.innerHTML;
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
<?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/admin/tickets/show.blade.php ENDPATH**/ ?>