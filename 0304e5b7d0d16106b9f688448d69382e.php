
  
<?php $__env->startSection('title', 'Home'); ?>
  
<?php $__env->startSection('contents'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Residence</h1>
        <a href="<?php echo e(route('baranggay.create')); ?>" class="btn btn-primary">Add Residence</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Purok</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            <?php if($baranggay->count() > 0): ?>
                <?php $__currentLoopData = $baranggay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                        <td class="align-middle"><?php echo e($rs->name); ?></td>
                        <td class="align-middle"><?php echo e($rs->birthday); ?></td>
                        <td class="align-middle"><?php echo e($rs->purok); ?></td>
                        <td class="align-middle"><?php echo e($rs->age); ?></td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="<?php echo e(route('baranggay.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                <a href="<?php echo e(route('baranggay.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('baranggay.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td class="text-center" colspan="5">Person not found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kaiserr\Desktop\baranggay1\resources\views/baranggay/index.blade.php ENDPATH**/ ?>