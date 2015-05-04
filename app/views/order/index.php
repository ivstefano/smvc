
<h1>Orders List</h1>
<p>This page shows a list of orders</p>


<table class="table table-striped table-hover">
    <thead>
		<tr>
			<th>Edit</th>
			<th>Name</th>
			<th>Add</th>
			<th>Total</th>
			<th>Date/Time</th>
			<th>Status</th>
			<th>Delete</th>
        </tr>
    </thead>
	<tbody>
	<?php if($data['orders']){
			foreach ($data['orders'] as $order) {
				?>
		<tr>
			<td data-th="Edit " scope="row"><?php echo "<a href='".DIR."orders/view/$order->order_id' class='btn btn-info'>View</a>";?></td>
			<td data-th="Name " ><?php // if(isset($order->firstname) || isset($order->lastname)){ echo $order->firstname;?> <?php // echo $order->lastname;}else{echo '&nbsp;';}?></td>
			<td data-th="Add " ><?php //if(isset($order->account_name)){echo $order->account_name;}else{echo '&nbsp;';}?></td>
			<td data-th="Total " ><?php //if(isset($order->phone) || isset($order->mobile)){ echo $order->phone;?> / <?php //echo $order->mobile;}else{echo '&nbsp;';}?></td>
			<td data-th="Date/Time " ><?php if(isset($order->date_added)){ echo $order->date_added;}else{echo '&nbsp;';}?></td>
			<td data-th="Status " ><?php if(isset($order->status)){ echo $order->status; }else{echo '&nbsp;';}?></td>
			<td data-th="Delete "><?php //echo //"<a href='javascript:deleteorder(\"$order->order_id\",\"$order->firstname\",\"$order->lastname\")' class='btn btn-danger'>Delete</a>";?></td>
		</tr>

				<?php
			}
		}
		?>
	</tbody>
</table>
<?php echo $data['page_links']; ?>