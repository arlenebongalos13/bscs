
  
<?php $__env->startSection('title', 'Edit Product'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="<?php echo e(route('baranggay.update', $baranggay->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e($baranggay->name); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Birthday</label>
                <input type="text" name="birthday" class="form-control" placeholder="Birthday" value="<?php echo e($baranggay->birthday); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Purok</label>
                <input type="text" name="purok" class="form-control" placeholder="Purok" value="<?php echo e($baranggay->purok); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo e($baranggay->age); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kaiserr\Desktop\baranggay1\resources\views/baranggay/edit.blade.php ENDPATH**/ ?>