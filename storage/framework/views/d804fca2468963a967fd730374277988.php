

<?php $__env->startSection('title','- Buy'); ?>

<?php $__env->startSection('content'); ?>


    <section>
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <!-- Add Dress -->
                <?php if(isset($rs)): ?>
                <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <form action="<?php echo e(url('/')); ?>/buy" method="post">
                <?php echo csrf_field(); ?>
                <div class="form m-4">
                    <h2 class="mb-4">Order Booking Needs To Fill</h2>
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                
                

                    <div class="form-group">
                        <input type="text" name="img" value="<?php echo e($rse->img); ?>" class="form-control" hidden>
                    </div>
                    <div class="form-group">
                        <label>Dress</label>
                        <input type="text" name="dress_name" value="<?php echo e($rse->name); ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" value="<?php echo e($rse->price); ?>" class="form-control" readonly>
                    </div>

                
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary">
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                </div>
                </form>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('../../include/layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boutique\resources\views/include/views/buy/buy.blade.php ENDPATH**/ ?>