<?php
	
	class Fruit {
	  public $count = 3;
	  public $type;

	    public function __construct($type,$count) {
		  $this->type = $type;
		  $this->count=$count;
		}
	}

	/*$apple = new Fruit();
	$apple->type = "apple";*/
	$mango= new Fruit("mango");
	echo $mango->type;
	echo $mango->count;
	/*print $apple->count; // 3
	print $apple->type;  // apple*/
?>