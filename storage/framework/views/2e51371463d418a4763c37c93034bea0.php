

<?php $__env->startSection('title','- Detail'); ?>

<?php $__env->startSection('content'); ?>


    <section>
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <!-- Add Dress -->
                <form action="<?php echo e(url('/')); ?>/add-dress-collection" method="post">
                <?php echo csrf_field(); ?>
                <div class="form m-4">
                    <h2 class="mb-4">Add Dress Collection</h2>
                    <div class="form-group">
                        <label>Dress Image</label>
                        <input type="text" name="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <input type="text" name="rating" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('../../include/layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\boutique\resources\views//include/views/addDressCollection/addDressCollection.blade.php ENDPATH**/ ?>