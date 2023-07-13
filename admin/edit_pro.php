<?php

include("includes/header.php");


if(isset($_GET['proid'])){

  $id=$_GET['proid'];


  $query=mysqli_query($con,"SELECT * FROM product WHERE id='$id'");
  $pro=mysqli_fetch_array($query);
}


if(isset($_POST['edit_pro'])){

    

   $profile= new All($con);
   $profile->editPro($_POST['name'],$_POST['select'],$_POST['offer'],$_POST['area'],$_POST['price'],$_GET['proid']);
  
   
}else{

   // $warning_msg[]='Something went wrong!';
}


?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="view_pro.php">View Products</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  
                      <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $pro['name'];?>">
                  </div> 




                            <div class="form-group">
                                            
                                                 <label for="exampleInputPassword1">Category</label>
                                                <select id="select" name="select" required="true">
                                            <option value="<?php echo $pro['cat'];?>"><?php echo $pro['cat'];?></option>
              <?php $query1=mysqli_query($con,"select * from category");
              while($row1=mysqli_fetch_array($query1))
              {
              ?>      
                  <option value="<?php echo $row1['name'];?>"><?php echo $row1['name'];?></option>
                  <?php } ?>
                                        </select>
                                           
                                        </div>   



                    <div class="form-group">
                    <label for="exampleInputPassword1">Availability</label>
                     <select name="offer" class="input" required>
                       <option value="Available">Available</option>
                       <option value="Out of Stock">Out of Stock</option>
                    </select>
                  </div>



                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                     <textarea class="form-control" rows="3" name="area" placeholder="Enter description..."><?php echo $pro['descc'];?></textarea>
                  </div>






                   <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price" value="<?php echo $pro['price'];?>">
                  </div> 




                  </div>          

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="edit_pro" class="btn btn-primary">Edit Product</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php
include("footer.php");

  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script><script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>
</html>
