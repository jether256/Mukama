<?php

class Products{


	private $con;




	public function __construct($con){

		$this->con=$con;
	}





	public function getBana(){


		$bana="";


		$query=mysqli_query($this->con,"SELECT * FROM bana");
		while ($row=mysqli_fetch_array($query)) {

			$id=$row['ID'];
			$pic=$row['pic'];


			$bana .="

		
             <div class='px-lg-5' style='background-color: #3aafd2;'>
            <div class='d-lg-flex justify-content-between align-items-center ps-lg-4'><img class='d-block order-lg-2 me-lg-n5 flex-shrink-0' 
            src='admin/assets/bana/$pic'  style='width:1000px;height:500px'alt='Summer Collection'>
              <div class='position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1' style='max-width: 42rem; z-index: 10;'>
                <div class='pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap'>
                  <h3 class='h2 text-light fw-light pb-1 from-start'>Has just arrived!</h3>
                  <h2 class='text-light display-5 from-start delay-1'>Huge Summer Collection</h2>
                  <p class='fs-lg text-light pb-3 from-start delay-2'>Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p>
                  <div class='d-table scale-up delay-4 mx-auto mx-lg-0'><a class='btn btn-primary' href='shop-grid-ls.html'>Shop Now<i class='ci-arrow-right ms-2 me-n1'></i></a></div>
                </div>
              </div>
            </div>
          </div>
          


			";
			// code...
		}


		return $bana;
	}




	public function getProduct(){

		$pro="";

		$query=mysqli_query($this->con,"SELECT * FROM product ORDER BY rand() LIMIT 3");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$nem=$row['name'];
			$price=$row['price'];
			$des=$row['descc'];
			$proid=$row['pro_id'];
			$stat=$row['status'];
			$pic=$row['pic'];
			$cat=$row['cat'];


			$pro .="





			 <div class='col-lg-3 col-md-4 col-sm-6 px-2 mb-4'>
            <div class='card product-card'><span class='badge badge-danger badge-shadow'>$stat</span>
              <button class='btn-wishlist btn-sm' type='button' data-bs-toggle='tooltip' data-bs-placement='left' title='Add to wishlist'><i class='ci-heart'></i></button><a class='card-img-top d-block overflow-hidden' href='shop-single-v1.php?proid=$id'>
              <img src='admin/assets/products/$pic'  style='width:300px;height:300px; alt='Product'></a>
              <div class='card-body py-2'>
                <h3 class='product-title fs-sm'><a href='shop-single-v1.php?proid=$id'>$nem</a></h3>
                <div class='d-flex justify-content-between'>
                  <div class='product-price'><span class='text-accent'>Shs $price</span>
                  
                  </div>
                  <div class='star-rating'><i class='star-rating-icon ci-star-filled active'></i><i class='star-rating-icon ci-star-filled active'></i><i class='star-rating-icon ci-star-filled active'></i><i class='star-rating-icon ci-star'></i><i class='star-rating-icon ci-star'></i>
                  </div>
                </div>
              </div>


                  <button class='btn btn-primary btn-sm' type='button'><i class='ci-cart fs-sm me-1'></i>Add to Cart</button>

             
            </div>
            <hr class='d-sm-none'>
          </div>

			";

			// code...
		}

		return $pro;
	}









}





?>