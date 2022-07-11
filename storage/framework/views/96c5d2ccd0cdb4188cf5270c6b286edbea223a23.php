<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                    <div class="text-right mb-4">
                        <a class="btn btn-success" href="<?php echo e(route('employees.create')); ?>">Create new employee</a>
                    </div>

                    <?php if(session('success')): ?>
                        <div class="alert alert-success mb-4" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="card">
                        <div class="card-header">Employees list</div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($employee->id); ?></td>
                                            <td><?php echo e($employee->first_name); ?></td>
                                            <td><?php echo e($employee->last_name); ?></td>
                                            <td><?php echo e($employee->company->name); ?></td>
                                            <td><?php echo e($employee->email); ?></td>
                                            <td><?php echo e($employee->phone); ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-info btn-sm" href="<?php echo e(route('employees.show', $employee->id)); ?>">View</a>
                                                <a class="btn btn-secondary btn-sm" href="<?php echo e(route('employees.edit', $employee->id)); ?>">Edit</a>
                                                <form method="POST" action="<?php echo e(route('employees.destroy', $employee->id)); ?>" class="d-inline-block">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type='submit' class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="7" class="text-center">Oops! Nothing to show.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <div class="float-right">
                                <?php if($employees->total() <= 10): ?>
                                    <?php echo $__env->make('components.no-pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php else: ?>
                                    <?php echo e($employees->links()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/employees/index.blade.php ENDPATH**/ ?>