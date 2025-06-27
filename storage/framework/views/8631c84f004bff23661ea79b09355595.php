

<?php $__env->startSection('title','- Detail'); ?>

<?php $__env->startSection('content'); ?>


    <section>
        <div class="container">
            <div class="row" style="margin-top: 200px;">

                <?php if(isset($rs)): ?>
                <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-6">
                    <!-- <h1 class="mb-4"><?php echo e($rse->name); ?></h1> -->
                    <!-- <h2>£<?php echo e($rse->price); ?></h2> -->
                    <img src="assets/img/collection/<?php echo e($rse->img); ?>.webp" alt="" width="600" height="800">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h3><?php echo e($rse->name); ?></h3>
                    <h3>£<?php echo e($rse->price); ?>.00</h3>
                    <h3 class="dropdown-content">
                        <ul class="stars">
                            <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                        </ul>
                    </h3> 
                    <!-- <button class="btn btn-success mt-4">Add To Cart</button> -->
                    <form action="<?php echo e(url('/')); ?>/buy" method="get">
                        <input type="text" name="id" value="<?php echo e($rse->id); ?>" placeholder="<?php echo e($rse->id); ?>" hidden>
                    <button class="btn btn-warning mt-4">Buy Now</button>
                    </form>      
                    
                    <!-- <button class="btn btn-success mt-4" disabled>Buy through Whatsapp</button>                       -->
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('../../include/layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boutique\resources\views/include/views/detail.blade.php ENDPATH**/ ?>