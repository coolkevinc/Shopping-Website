<?php 
	//connect to database
	require('../model/database.php');

	//include the cart functions
	require('../model/cart_db.php');

	//get action var, or set default
	$action = $_GET['action'];
	if ($action == NULL){$action= "view";}

	//get arguments from http
	$prod = $_GET['product_id'];
	$qty = $_GET['quantity'];
	$name = $_GET['prod_name'];
	$price = $_GET['price'];
	$id = $_GET['id'];

	//include the header html
	include '../view/header.php';
; ?>

<main>
    <h1>Shopping Cart:</h1>
    
	<?php 
		//debugging
		#echo "the action is ".$action."<br/>";
	
		//action to take depending on the $action variable
		if($action == add){
			cart_add($prod, $qty, $name, $price);
			}
		
		if($action == remove){
			cart_remove($id);
			}
		
		if($action == empty_cart){
			cart_empty();
			}
		
		if($action == minus_1){
			minus_1($id);
			}		
			
		if($action == plus_1){
			plus_1($id);
			}
		
		$cart = get_cart();
		?>
		
		<table id="cart-tab">
			<tr><th>Name</th><th>Price</th><th>Amount</th><th>Cost</th><th></th></tr>
		<?php
		$total = 0;
		$num_items = 0;
		foreach($cart as $item){
			$total += ($item['price']*$item['quantity']);
			$num_items += $item['quantity'];
			echo "<tr><td>".$item['name'] ."</td><td>$". $item['price']. "</td><td><div class='btn-ctr'><a href='?action=minus_1&id=".$item['itemID']."'><button class='i-btn' id='minus_1'>-</button></a> " .$item['quantity']." <a href='?action=plus_1&id=".$item['itemID']."'><button class='i-btn' id='plus_1'>+</button></a></div></td><td>$".$item['price']*$item['quantity']."</td><td><a href='?action=remove&id=".$item['itemID']."'><button type='button' name='remove'>Remove</button></a></td></tr>";
		}?>
		<tr><th>Total:</th><th></th><th><?php echo $num_items;?></th><th>$<?php echo $total;?></th><th><a href="?action=empty_cart"><button type='button' name='empty'>Empty</button></a></th></tr>
		</table>

		<!--//number input boxes to change quantities
		<div class='btn-ctr'>
			<a href='?action=minus_1&id=".$item['itemID']."'><button class='i-btn' id='minus_1'>-</button></a> 15 
			<a href='?action=plus_1&id=".$item['itemID']."'><button class='i-btn' id='plus_1'>+</button></a>
		</div>-->	
</main>

<?php include '../view/footer.php'; ?>
