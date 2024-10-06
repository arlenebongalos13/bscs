
  
<?php $__env->startSection('title', 'Add'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Add Residence</h1>
    <hr />
    <form action="<?php echo e(route('baranggay.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="birthday" class="form-control" placeholder="Birthday">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="purok" class="form-control" placeholder="Purok">
            </div>
            <div class="col">
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kaiserr\Desktop\baranggay1\resources\views/baranggay/create.blade.php ENDPATH**/ ?>