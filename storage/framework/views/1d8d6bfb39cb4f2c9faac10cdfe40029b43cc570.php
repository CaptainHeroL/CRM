<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies - Edit (<?php echo e($company->name); ?>)</div>

                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger mb-4">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('companies.update', $company->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>

                            <div class="text-center mb-4">
                                <?php if($company->logo): ?>
                                    <img width="100" height="100" src="<?php echo e(asset('storage/'. $company->logo)); ?>">
                                <?php else: ?>
                                    <img width="100" height="100" src="<?php echo e(asset('images/no-image-available.png')); ?>">
                                <?php endif; ?>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input class="form-control" name="name" value="<?php echo e(old('name', $company->name)); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="<?php echo e(old('email', $company->email)); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Website</label>
                                        <input class="form-control" name="website" value="<?php echo e(old('website', $company->website)); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right mt-4">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/companies/edit.blade.php ENDPATH**/ ?>