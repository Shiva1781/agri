<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<script>
            function validateForm(){
                let x =document.forms["myform"]["title"].value;
                if (x==""){
                    alert("Title must be filled");
                    return false;
                }
                let y =document.forms["myform"]["subtitle"].value;
                if (y==""){
                    alert("Sub-title must be filled");
                    return false;
                }
                let z =document.forms["myform"]["description"].value;
                if (z==""){
                    alert("Description must be filled");
                    return false;
                }
                let m =document.forms["myform"]["link"].value;
                if (m==""){
                    alert("Link must be filled");
                    return false;
                }
            }
            </script>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" name=myform onsubmit="return validateForm()">

        <div class="modal-body">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter the Title">
            </div>
            <div class="form-group">
                <label>Sub Title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter Subtitle">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="text" name="description" class="form-control" placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="link" name="link" class="form-control" placeholder="Enter Link">
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="aboutsave" class="btn btn-warning">Save</button>
        </div>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-warning">About Profile 
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php
      if(isset($_SESSION['sucesss']) && $_SESSION['sucesss']!='')
        {
        echo '<h2>'.$_SESSION['sucesss'].'</h2>';
        unset($_SESSION['sucesss']);
        }

      
      if(isset($_SESSION['status']) && $_SESSION['status']!='')
        {
        echo '<h2 class="bg-info>'.$_SESSION['status'].'<h2>';
        unset($_SESSION['status']);
        }
      ?>
    <div class="table-responsive">
      <?php
      $connection = mysqli_connect("localhost","root","","add");

      $query= "SELECT * from about ";
      $query_run = mysqli_query($connection,$query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th> Title </th>
            <th>Sub Title </th>
            <th> Description </th>
            <th>Link</th>
            <th>EDIT </th>
            <th>DELETE </th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
             ?>
          <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['tittle'];?></td>
          <td><?php echo $row['subtitle'];?></td>
          <td><?php echo $row['description'];?></td>
          <td><?php echo $row['link'];?></td>
          <td>
          <a href="about_edit.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-success">EDIT</button></a>
          </td>
          <td>
          <a href="del1.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-danger">Delete</button></a>
          </td>
          </tr>
          <?php
            }
          }
            else
            {
            echo"record not found";
            }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>