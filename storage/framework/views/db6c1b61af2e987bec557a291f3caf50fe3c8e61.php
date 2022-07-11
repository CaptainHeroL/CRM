<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies - Create</div>

                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger mb-4">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('companies.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="text-center mb-4">
                                <div style="width: 30%; margin: 0 auto;">
                                    <img id="file-preview" width="100" height="100" src="<?php echo e(asset('images/no-image-available.png')); ?>">
                                    <input id="file" type="file" name="logo" class="form-control mt-4" accept="image/*">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Website</label>
                                        <input class="form-control" name="website" value="<?php echo e(old('website')); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function readImage(input) {
            const noImageUrl = "<?php echo e(asset('images/no-image-available.png')); ?>";

            if(!input.files) {
                return $('#file-preview').attr('src', noImageUrl);
            }

            if (input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    $('#file-preview').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            } else {
                return $('#file-preview').attr('src', noImageUrl);
            }
        }

        $(function() {
            $('#file').change(function() {
                readImage(this);
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/companies/create.blade.php ENDPATH**/ ?>