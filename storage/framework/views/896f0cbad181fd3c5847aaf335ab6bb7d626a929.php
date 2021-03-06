
<?php $__env->startSection('content'); ?>

<head>
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/-->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
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

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>
                Orders
            </h2>
            <a href="orders/create" class="btn">Add new Order</a>
        </div>
        <table id="l">
            <thead>
                <tr>
                    <td>Order ID</td>
                    <td>Order Number</td>
                    <td width="200">Order Contents</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" Defer></script>

<script type="text/javascript">
    let users = document.querySelectorAll('.navigation li:nth-child(3)')[0];
users.classList.add('hovered');
  $(function () {
    
    var table = $('#l').DataTable({
      
        ajax: {
          url: "<?php echo e(url('orders-list')); ?>",
		  
		},
        columns: [
           
            {data:'order_id'},
			{data:'order_number'},
			{data:'order_contents'},
		
			{data:'action'},
        ]
    });
    
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\orders\resources\views/orders/index.blade.php ENDPATH**/ ?>