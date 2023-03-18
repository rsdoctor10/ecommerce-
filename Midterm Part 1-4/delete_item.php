<?php
include_once "db_conn.php";

if(isset($_GET['item_id'])){
    
//    if(query($conn, "DELETE FROM users WHERE user_id = ?", $params) ){
//        header("location: index.php?user_delete=done");
//        exit();
//    }
//    else{
//        header("location: index.php?user_delete=failed");
//        exit();
//    } 

	/**
   $table = "products";
   $d_item_id = $_GET['item_id'];
   $fields = array( 'item_status' => 'I' );
   $filter = array( 'item_id' => $d_item_id );
    
  if( update($conn, $table, $fields, $filter )){
     header("location: index.php?update_status=deleted");
      exit();
  }
   else{
       header("location: index.php?update_status=failed");
       exit();
  }**/
	
	/** PERMANENT DELETE **/
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$item_id = $_GET['item_id'];
	$sql ="DELETE FROM products WHERE item_id = $item_id";
	
	if (mysqli_query($conn, $sql)){
		header ("location: index.php?error deleting record");
	}
	
	mysqli_close($conn);
}
?>