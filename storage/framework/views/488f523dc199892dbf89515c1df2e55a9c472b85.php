<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Customer listing</h2>

<table>
  <tr>
    <th>Customer_name</th>
    <th>Appoinment-no</th>
    <th>Slot</th>
    <th>start_date</th>
    <th>end_date</th>
    <th>bill</th>
  </tr>
<?php if(isset($data)): ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($list->customer_name); ?></td>
    <td><?php echo e($list->slots."-".$list->id); ?></td>
    <td><?php echo e($list->slots); ?></td>
    <td><?php echo e($list->start_date); ?></td>
    <td><?php echo e($list->end_date); ?></td>
    <td></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
</table>

</body>
</html><?php /**PATH D:\laravel\projects\slotappoinment\resources\views/customerlist.blade.php ENDPATH**/ ?>