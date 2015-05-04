<?php
use \helpers\form,
	\core\error; ?>

<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<?php echo Error::display($error); 
if(isset($error)){$customer_name = $_POST['customer_name'];}else{$customer_name='';}
?>


<?php echo Form::open(array('method' => 'post'));?>

<p>Name: <?php echo Form::input(array('name' => 'customer_name', 'value' => $customer_name ));?></p>

<p><?php echo Form::input(array('type' => 'submit', 'name' => 'submit', 'value' => 'Submit'));?></p>

<?php echo Form::close();?>

