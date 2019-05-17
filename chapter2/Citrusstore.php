<?php
include_once('IProduct.php');
class CitrusStore implements IProduct
{
	public function apples()
	{
	  return "FruitStore sez-- We have no apples <br />";
	}
	public function oranges()
	{
	  return "FruitStore sez-- We have citrus fruit<br />";
	}
	
	
}

?>