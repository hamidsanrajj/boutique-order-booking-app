

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Dress Collecton</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <?php if(isset($rs)): ?>
                <?php $__currentLoopData = $rs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-3">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <div class="row">
                                        <div class="col-md-2">
                                             <form action="<?php echo e(url('/')); ?>/detail" method="get">
                                                <input type="text" name="id" value="<?php echo e($rse->id); ?>" hidden>
                                            <li><button type="submit" name="submit" style="border: none;"><i class="fa fa-eye"></i></button></li>
                                            </form>       
                                        </div>
                                        <div class="col-md-2">
                                            <form action="<?php echo e(url('/')); ?>/buy" method="get">
                                                <input type="text" name="id" value="<?php echo e($rse->id); ?>" placeholder="<?php echo e($rse->id); ?>" hidden>
                                            <li><button type="submit" name="submit" style="border: none;" style=""><i class="fa fa-shopping-cart"></i></button></li>
                                            </form>        
                                        </div>
                                    </div>
                                    
                                    
                                </ul>
                            </div> 
                            <img src="assets/img/collection/<?php echo e($rse->img); ?>.webp" alt="">
                        </div>
                        <div class="down-content">
                            <h6><?php echo e($rse->name); ?></h6>
                            <span>£<?php echo e($rse->price); ?>.00</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->


<?php /**PATH C:\xampp\htdocs\boutique\resources\views/include/main.blade.php ENDPATH**/ ?>