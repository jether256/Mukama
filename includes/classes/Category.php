<?php


class Category{


private $con;



public function __construct($con){
	$this->con=$con;
}





	public function getCategory(){



		$cat="";



		$query=mysqli_query($this->con,"SELECT * FROM category");
		while ($row=mysqli_fetch_array($query)) {

			$id=$row['id'];
			$nem=$row['name'];
			
			$cat .= "


              	<div class='col-sm-4 px-2 mb-grid-gutter'><a class='d-block text-center text-decoration-none me-1' href='shop-grid-ls.html'><img class='d-block rounded mb-3' src='img/home/categories/cat-sm01.jpg' alt='$nem'>
                      <h3 class='fs-base pt-1 mb-0'>$nem</h3></a></div>
             

			";
			// code...
		}


		return $cat;

	}





}

?>