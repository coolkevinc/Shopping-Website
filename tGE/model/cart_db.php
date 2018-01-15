<?php 

	//function to list the contents of the cart
	function get_cart(){
	global $db;

		//set up query to get all items from the cart
		$query = 'SELECT * FROM  cart
							ORDER BY itemID';

		//execute the query, return the resulting array
		$result = $db->query($query);
		$cart = $result->fetchAll();
		return $cart;
	}

	//function to  add item to cart
	function cart_add($prod_id, $quantity, $name, $price){
		global $db;
		
		//set up the query to add new item to the cart
		$query = $db->prepare("INSERT INTO cart (itemID, name, quantity, price)
							VALUES	(:prod_id, :name, :quantity, :price)");
		$query->bindParam(':prod_id',$prod_id);
		$query->bindParam(':name',$name);
		$query->bindParam(':quantity',$quantity);
		$query->bindParam(':price',$price);

		//send query to database
		$query->execute();
		
		//confirm item added to cart
		echo "<h3>".$name." added to cart</h3>";
	}
	
	//function to add one of item $id to cart
	function plus_1($id){
		global $db;

		//set up the query to add 1 item		
		$query = "UPDATE cart
							SET quantity = quantity + 1
							WHERE itemID = $id";
							
		//execute teh query
		$result = $db->exec($query);
		
		return $result;
	}
		
	//function to subtract one of item $id from the cart
	function minus_1($id){
		global $db;
		
		//check if the item is in the cart
		$query = "SELECT * FROM cart
								WHERE itemID = $id";
		
		//get the row with the item
		$result = $db->query($query);
		$item = $result->fetch();
		
		//see if there are at least 2 items in the cart
		if($item['quantity']>=2)
		{
		$query1 = "UPDATE cart
							SET quantity = quantity - 1
							WHERE itemID = $id";

		//execute teh query
		$result1 = $db->exec($query1);
		return $result1;
		} else	{
		cart_remove($id);
		return $result; }
	}
	
	//function to remove item from cart
	function cart_remove($id){
		global $db;
		
		//set up query
		$query = "DELETE FROM cart
							WHERE itemID = $id";

		//execute teh query
		$result = $db->exec($query);

		return $result;
	}
	
	//function to empty the cart
	function cart_empty(){
		global $db;
		
		//set up delete function
		$query = "DELETE FROM cart
							WHERE itemID<1000";
	
		//execute teh action
		$result = $db->exec($query);
		
		return $result;
	}
?>


