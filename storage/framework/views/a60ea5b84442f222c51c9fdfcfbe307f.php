<?php $__currentLoopData = $phonebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-between align-items-center mb-2 px-1">
        <a href="javascript:;"
           onclick="clickPhoneBook(<?php echo e($phonebook->id); ?>, this)"
           data-phonebook-id="<?php echo e($phonebook->id); ?>"
           class="list-group-item list-group-item-action d-flex align-items-center single-phonebook gap-2 flex-grow-1 me-2">
            <i class="ti tabler-bookmark text-primary"></i>
            <span class="text-truncate" style="max-width: 160px;"><?php echo e($phonebook->name); ?></span>
        </a>

        <div class="d-flex align-items-center gap-1">
            <button class="btn btn-sm text-muted px-1" onclick="navigator.clipboard.writeText('<?php echo e($phonebook->name); ?>'); notyf.success('Copied!')"
                    title="Copy Group Name">
                <i class="ti tabler-copy"></i>
            </button>

            <form action="<?php echo e(route('tag.delete')); ?>" method="POST"
                  onsubmit="return confirm('<?php echo e(__('do you sure want to delete this tag? ( All contacts in this tag also will delete! )')); ?>')"
                  class="m-0">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <input type="hidden" name="id" value="<?php echo e($phonebook->id); ?>">
                <button type="submit" class="btn btn-sm text-danger px-1" title="Delete">
                    <i class="ti tabler-trash"></i>
                </button>
            </form>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\laragon\www\mpwa_v10\resources\themes/vuexy/views/pages/phonebook/dataphonebook.blade.php ENDPATH**/ ?>