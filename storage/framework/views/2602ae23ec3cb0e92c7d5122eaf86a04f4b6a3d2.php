
<?php $__env->startSection('content'); ?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>

</head>
<style>
    .navigation{
        margin-left:-120px;
    }
    .main{
        width:93%;
        left:120px;
    }
</style>
<?php if($message = Session::get('success')): ?>
        <div id="not" class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
		<script>
		setTimeout(function() {
    $('#not').fadeOut('fast');
}, 3000); //
		</script>
    <?php endif; ?>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    
<form action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data" style="">
                        <?php echo e(csrf_field()); ?>

        <div class="details" style="">
            <div class="recentOrders">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cardHeader" style="padding-left:0;">
                                    <center> <h2>   <?php echo e($user->username); ?> information </h2> </center>
                        </div>
                        <table class="table table-striped">
                                            <thead>
                                                <th style="font-weight:400px;font-size:25px; border-top:none;">
                                                    Credencials
                                                </th>
                                            </thead>
                                                <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Username:</strong>
                                                </td>
                                                <td>
                                                    <strong><?php echo e($user->username); ?></strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Email:</strong>
                                                </td>
                                                <td>
                                                    <strong><?php echo e($user->email); ?></strong>
                                                </td>
                                            </tr>
                                            
                                            </tbody>
                                            <thead>
                                                <th style="font-weight:400px;font-size:25px; border-top:none;">
                                                   Rules 
                                                </th>
                                            </thead>
                                                <tbody>

                                            <tr>
                                                <td>
                                                    <strong>See Financial:</strong>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <?php if($user->finance): ?>
                                                            Yes
                                                        <?php else: ?>
                                                            No
                                                        <?php endif; ?>
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Control Users:</strong>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <?php if($user->users): ?>
                                                            Yes
                                                        <?php else: ?>
                                                            No
                                                        <?php endif; ?>
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Can Edit:</strong>
                                                </td>  
                                                <td>  
                                                    <strong>
                                                        <?php if($user->edit): ?>
                                                            Yes
                                                        <?php else: ?>
                                                            No
                                                        <?php endif; ?>
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Active:</strong>
                                                </td>  
                                                <td>  
                                                    <strong>
                                                        <?php if($user->active): ?>
                                                            Yes
                                                        <?php else: ?>
                                                            No
                                                        <?php endif; ?>
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr></tr>

                                            </tbody>
                        </table>
                    </div>  
                    <div class="col-md-4">
                        <div class="" style="margin-top:12%;">
                            <table class="table table-striped">
                                <thead>
                                    <th style="font-weight:400px;font-size:25px; border-top:none; ">
                                        Companies
                                    </th>
                                </thead>
                                <tbody>
                                    </br>
                                    <?php if(count($scoms)==0): ?>
                                        <tr>
                                            <td style="text-align:left;">
                                                <strong>No Companies</strong>
                                            </td>
                                        </tr>
                                    <?php else: ?>
                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if(in_array($company->company_id, $scoms)): ?>
                                            <td style="text-align:left;">
                                                <strong><?php echo e($company->company_name); ?></strong>
                                            </td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
             
</form>
<script>
    let users = document.querySelectorAll('.navigation li:nth-child(5)')[0];
users.classList.add('hovered');
</script>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lara\alawael-orders\orders\resources\views/users/view.blade.php ENDPATH**/ ?>