<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Employees - View (<?php echo e($employee->first_name); ?>)</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>First name</label>
                                    <input class="form-control" disabled value="<?php echo e($employee->first_name); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Last name</label>
                                    <input class="form-control" disabled value="<?php echo e($employee->last_name); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Email</label>
                                    <input class="form-control" disabled value="<?php echo e($employee->email); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-group-default">
                                    <label>Phone</label>
                                    <input class="form-control" disabled value="<?php echo e($employee->phone); ?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group form-group-default">
                                    <label>Company</label>
                                    <input class="form-control" disabled value="<?php echo e($employee->company->name); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/employees/show.blade.php ENDPATH**/ ?>