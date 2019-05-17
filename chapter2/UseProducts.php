<?php
include('Fruitstore.php');
include('Citrusstore.php');

class UseProducts 
{
	public function __construct()
	{
		$appleSauce = new FruitStore();
		$orangeJuice = new CitrusStore();
		
		$this->doInterface($appleSauce);
		$this->doInterface($orangeJuice);
		
	}
	function doInterface(IProduct $product)
	{
		echo $product->apples();
		echo $product->oranges();
	}
}
$worker = new UseProducts();
?>