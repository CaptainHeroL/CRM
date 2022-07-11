<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Employees - Create</div>

                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger mb-4">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('employees.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>First name</label>
                                        <input class="form-control" name="first_name" value="<?php echo e(old('first_name')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Last name</label>
                                        <input class="form-control" name="last_name" value="<?php echo e(old('last_name')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Phone</label>
                                        <input class="form-control" name="phone" value="<?php echo e(old('phone')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group form-group-default">
                                        <label>Company</label>
                                        <select class="form-control" name="company_id" value="<?php echo e(old('company_id')); ?>">
                                            <option value="0">Select...</option>
                                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($company->id); ?>" <?php echo e((old("company_id") == $company->id ? "selected": "")); ?>><?php echo e($company->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/employees/create.blade.php ENDPATH**/ ?>