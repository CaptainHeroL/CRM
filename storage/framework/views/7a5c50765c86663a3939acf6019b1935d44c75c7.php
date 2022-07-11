<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies</div>

                <div class="card-body">
                    <div class="text-right mb-4">
                        <a class="btn btn-success" href="<?php echo e(route('companies.create')); ?>">Create new company</a>
                    </div>

                    <?php if(session('success')): ?>
                        <div class="alert alert-success mb-4" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="card">
                        <div class="card-header">Companies list</div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($company->id); ?></td>
                                            <td><?php echo e($company->name); ?></td>
                                            <td><?php echo e($company->email); ?></td>
                                            <td><?php echo e($company->website); ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-info btn-sm" href="<?php echo e(route('companies.show', $company->id)); ?>">View</a>
                                                <a class="btn btn-secondary btn-sm" href="<?php echo e(route('companies.edit', $company->id)); ?>">Edit</a>
                                                <form method="POST" action="<?php echo e(route('companies.destroy', $company->id)); ?>" class="d-inline-block">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type='submit' class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="5" class="text-center">Oops! Nothing to show.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <div class="float-right">
                                <?php if($companies->total() <= 10): ?>
                                    <?php echo $__env->make('components.no-pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php else: ?>
                                    <?php echo e($companies->links()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-mini-crm-master\resources\views/companies/index.blade.php ENDPATH**/ ?>