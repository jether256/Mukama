<?php

class All{

	private $con;


	public function __construct($con){

		$this->con=$con;
	}




	public function getAdmins(){



		$adds="";



		$admins=mysqli_query($this->con,"SELECT * FROM admin");
		while ($row=mysqli_fetch_array($admins)) {

			$id=$row['id'];
			$nem=$row['name'];
			$mail=$row['email'];
			$num=$row['phone'];
			$pic=$row['pic'];
			$ad=$row['addd'];
			$de=$row['descr'];

			$adds .= "

	<div class='card card-solid'>
        <div class='card-body pb-0'>
          <div class='row'>
            <div class='col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column'>
              <div class='card bg-light d-flex flex-fill'>
                <div class='card-header text-muted border-bottom-0'>
                  Admin
                </div>
                <div class='card-body pt-0'>
                  <div class='row'>
                    <div class='col-7'>
                      <h2 class='lead'><b>$nem</b></h2>
                      <p class='text-muted text-sm'><b>About:$de</p>
                      <ul class='ml-4 mb-0 fa-ul text-muted'>
                        <li class='small'><span class='fa-li'><i class='fas fa-lg fa-building'></i></span> Address: $ad UG</li>
                        <li class='small'><span class='fa-li'><i class='fas fa-lg fa-phone'></i></span> Phone: $num</li>
                      </ul>
                    </div>
                    <div class='col-5 text-center'>
                      <img src='assets/profile/$pic' alt='user-avatar' class='img-circle img-fluid'>
                    </div>
                  </div>
                </div>
                <div class='card-footer'>
                  <div class='text-right'>
                    <!--<a href='# class='btn btn-sm bg-teal'>
                      <i class='fas fa-comments'></i>
                     </a>-->
                    <a href='#' class='btn btn-sm btn-primary'>
                      <i class='fas fa-user'></i> View Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
     
      </div>


			";
			// code...
		}


		return $adds;

	}


	
	
	public function addCart($nem){


		$nem = mysqli_real_escape_string($this->con,$_POST['name']);

		$cat=mysqli_query($this->con,"INSERT INTO category VALUES('','$nem')");

		if($cat){

			echo "category added";
			 header("Location:addCat.php");

		}
	}



	public function getCat(){


		$ko="";

		$edit=mysqli_query($this->con,"SELECT * FROM category");

		$i = 0;
		while ($row=mysqli_fetch_array($edit)) {

			$id=$row['id'];
			$nem=$row['name'];
			$i++;

			$ko .="

				
			<tr>
                    
                <td>$i</td>    
              <td>$nem</td>
             
              <td><a href='edit_cat.php?catid=$id' class='btn btn-outline-success'>Edit</a></td>

              <td><a href='del_cat.php?catid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>

			";


		}



		return $ko;


	}



	public function editCart($nem,$cat){

		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$cat=$_GET['catid'];

		$edit=mysqli_query($this->con,"UPDATE category SET name='$nem' WHERE id='$cat'");

		if($edit){


			echo "category edited";
			 header("Location:view_cat.php");
		}

	}


	public function delCat($id){

		$id=$_GET['catid'];



		$del=mysqli_query($this->con,"DELETE  FROM category WHERE id='$id'");

		if($del){


			echo "category deleted";
			 header("Location:view_cat.php");
		}
	}



	public function addPro($nem,$sel,$desc,$price,$pic){


		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$sel = mysqli_real_escape_string($this->con,$_POST['select']);
		$desc = mysqli_real_escape_string($this->con,$_POST['area']);
		$price = mysqli_real_escape_string($this->con,$_POST['price']);


		$tmp_name1 = $_FILES['pic']['tmp_name'];
		$path1 =rand(10000,10000000000);
		$final_path1=$path1.$pic;


		$cat=mysqli_query($this->con,"INSERT INTO product VALUES('','$nem','$price','$desc','$path1','Out of Stock','$final_path1','$sel')");

		if($cat){


		move_uploaded_file($tmp_name1,"assets/products/$final_path1");
			echo "category added";
			 header("Location:addPro.php");

		}
	}






	public function getProduct(){


		$ko="";

		$edit=mysqli_query($this->con,"SELECT * FROM product");

		$i = 0;
		while ($row=mysqli_fetch_array($edit)) {

			$id=$row['id'];
			$nem=$row['name'];
			$pr=$row['price'];
			$de=$row['descc'];
			$proi=$row['pro_id'];
			$stat=$row['status'];
			$pic=$row['pic'];
			$cat=$row['cat'];
			$i++;

			$ko .="

				
			<tr>
                    
                <td>$i</td>
                <td><img src='assets/products/$pic' alt='' style='width:40px;height:40px'></td>    
              <td>$nem</td>
              <td>Shs $pr</td>
              <td><a href='edit_pro.php?proid=$id' class='btn btn-outline-success'>Edit</a></td>
              <td><a href='detail_pro.php?proid=$id' class='btn btn-outline-success'>View More</a></td>
              <td><a href='del_pro.php?proid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>

			";


		}



		return $ko;


	}





	public function editPro($nem,$sel,$of,$area,$pr,$id){

		$nem = mysqli_real_escape_string($this->con,$_POST['name']);
		$sel = mysqli_real_escape_string($this->con,$_POST['select']);
			$of = mysqli_real_escape_string($this->con,$_POST['offer']);
		$area = mysqli_real_escape_string($this->con,$_POST['area']);
		$pr = mysqli_real_escape_string($this->con,$_POST['price']);

		$id=$_GET['proid'];

		$edit=mysqli_query($this->con,"UPDATE product SET name='$nem',price='$pr',descc='$area',cat='$sel', status='$of' WHERE id='$id'");

		if($edit){


			echo "product edited";
			 header("Location:view_pro.php");
		}

	}





public function delproda($id){

		$id=$_GET['proid'];


		$select="SELECT * FROM product where id='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['pic']){
			  unlink('assets/products/'.$data['pic']);
		}



		$del=mysqli_query($this->con,"DELETE  FROM product WHERE id='$id'");

		if($del){


			echo "product deleted";
			 header("Location:view_pro.php");
		}
	}



	public function getProDetails($id){


		$id=$_GET['proid'];
		$ko="";


		$sel=mysqli_query($this->con,"SELECT * FROM product WHERE id='$id'");
		while ($row=mysqli_fetch_array($sel)) {


			$id=$row['id'];
			$nem=$row['name'];
			$pr=$row['price'];
			$de=$row['descc'];
			$proi=$row['pro_id'];
			$stat=$row['status'];
			$pic=$row['pic'];
			$cat=$row['cat'];

				$ko .="



				<div class='card-body'>
          <div class='row'>
            <div class='col-12 col-sm-6'>
              <h3 class='d-inline-block d-sm-none'>LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class='col-12'>
               <img src='assets/products/$pic' alt='' style='width:600px;height:570px'>
              </div>
              <div class='col-12 product-image-thumbs'>
                <div class='product-image-thumb active'><img src='assets/products/$pic' alt=''></div>
                
              </div>
            </div>
            <div class='col-12 col-sm-6'>
              <h3 class='my-3'>$nem</h3>
             
              <hr>
              <h4>Description</h4>
              <div class='btn-group btn-group-toggle' data-toggle='buttons'>
               <p>$de</p>
              </div>

              <hr>

              <h4 class='mt-3'>Price</h4>
              
              <div class='bg-gray py-2 px-3 mt-4'>
                <h2 class='mb-0'>
                  Shs: $pr
                </h2>
               
              </div>

               <hr>

               <h4>Availability</h4>
              <div class='btn-group btn-group-toggle' data-toggle='buttons'>
               
           			<p>$stat</p>
              </div>

               <hr>

              <div class='mt-4'>
                <div class='btn btn-primary btn-lg btn-flat'>
                  <i class='fas fa-cart-plus fa-lg mr-2'></i>
                  Add to Cart
                </div>

                <div class='btn btn-default btn-lg btn-flat'>
                  <i class='fas fa-heart fa-lg mr-2'></i>
                  Add to Wishlist
                </div>
              </div>

              

            </div>
          </div>
          <div class='row mt-4'>
            <nav class='w-100'>
              <div class='nav nav-tabs' id='product-tab' role='tablist'>
                <a class='nav-item nav-link active' id='product-desc-tab' data-toggle='tab' href='#product-desc' role='tab' aria-controls='product-desc' aria-selected='true'>Description</a>
                <a class='nav-item nav-link' id='product-comments-tab' data-toggle='tab' href='#product-comments' role='tab' aria-controls='product-comments' aria-selected='false'>Comments</a>
                <a class='nav-item nav-link' id='product-rating-tab' data-toggle='tab' href='#product-rating' role='tab' aria-controls='product-rating' aria-selected='false'>Rating</a>
              </div>
            </nav>
            <div class='tab-content p-3' id='nav-tabContent'>
              <div class='tab-pane fade show active' id='product-desc' role='tabpanel' aria-labelledby='product-desc-tab'> $de </div>
              <div class='tab-pane fade' id='product-comments' role='tabpanel' aria-labelledby='product-comments-tab'> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class='tab-pane fade' id='product-rating' role='tabpanel' aria-labelledby='product-rating-tab'> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
          </div>
        </div>



				";


			// code...
		}


		return $ko;

	}





public function addBana($pic){


		$tmp_name1 = $_FILES['pic']['tmp_name'];
		$path1 =rand(10000,10000000000);
		$final_path1=$path1.$pic;


		$qu=mysqli_query($this->con,"INSERT INTO bana VALUES('','$final_path1')");
		if($qu){


		move_uploaded_file($tmp_name1,"assets/bana/$final_path1");
			echo "category added";
			 header("Location:view_banner.php");

		}


}






public function getBanner(){


		$ko="";

		$edit=mysqli_query($this->con,"SELECT * FROM bana");

		$i = 0;
		while ($row=mysqli_fetch_array($edit)) {

			$id=$row['ID'];
			$pic=$row['pic'];
			$i++;

			$ko .="

				
			<tr>
                    
                <td>$i</td>
                <td><img src='assets/bana/$pic' alt='' style='width:40px;height:40px'></td>    
              <td><a href='detail_bana.php?banaid=$id' class='btn btn-outline-success'>View More</a></td>
              <td><a href='del_bana.php?banaid=$id' class='btn btn-outline-danger'>Delete</a></td>
             
              
                
            </tr>

			";


		}



		return $ko;


}




public function getBanaDetails($id){


		$id=$_GET['banaid'];
		$ko="";


		$sel=mysqli_query($this->con,"SELECT * FROM bana WHERE id='$id'");
		while ($row=mysqli_fetch_array($sel)) {


			$id=$row['ID'];
			$pic=$row['pic'];
		
				$ko .="



				<div class='card-body'>
          <div class='row'>
            <div class='col-12 col-sm-6'>
              <h3 class='d-inline-block d-sm-none'>Banner</h3>
              <div class='col-12'>
               <img src='assets/bana/$pic' alt='' style='width:1200px;height:400px'>
              </div>
              <div class='col-12 product-image-thumbs'>
                <div class='product-image-thumb active'><img src='assets/bana/$pic' alt='' ></div>
                
              </div>
            </div>
            
          </div>
          
        </div>



				";


			// code...
		}


		return $ko;

}






public function delBana($id){

		$id=$_GET['banaid'];


		$select="SELECT * FROM bana where ID='$id' ";
		$query=mysqli_query($this->con,$select);
		$data=mysqli_fetch_array($query);

		if($data['pic']){
			  unlink('assets/bana/'.$data['pic']);
		}



		$del=mysqli_query($this->con,"DELETE  FROM bana WHERE ID ='$id'");

		if($del){


			echo "banner deleted";
			 header("Location:view_banner.php");
		}
	}





}

?>