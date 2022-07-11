<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Companies - View (<?php echo e($company->name); ?>)</div>

                    <div class="card-body">
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
                                    <input class="form-control" disabled value="<?php echo e($company->name); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Email</label>
                                    <input class="form-control" disabled value="<?php echo e($company->email); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Website</label>
                                    <input class="form-control" disabled value="<?php echo e($company->website); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/companies/show.blade.php ENDPATH**/ ?>