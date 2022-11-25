<?php
include('header.php');
?>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Message bot</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../admin/upload/giphy (1).gif" alt="Error" height="400rem" width="460rem" >
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
  <div>
    
</div>

</div>

<div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Upload</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <div class="form-group">
       <input type="file"  accept="image/*" name="file" id="file" value="" onchange="loadFile(event)" style="display: none;">
      <label for="file" style="cursor: pointer;">Upload Image</label>
     <img id="output" width="200" />
     <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
       </div>
    </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Close</button>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">save</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>


<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Speak</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="giphy.gif" alt="Error" height="400rem" width="460rem" >
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Save</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>




        <section class="page-section" id="feat">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Features</h2>
                    <h3 class="section-subheading text-muted">Our unique Solution</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="fas fa-message fa-stack-2x fa-inverse " ></i></a>
                        </span>
                        <h4 class="my-3">Messagebot</h4>
                        <p class="text-muted">Product get the information in your own Language at anytime.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle1" role="button"> <i class="fas fa-upload fa-stack-2x fa-inverse"></i></a>
            
                        </span>
                        <h4 class="my-3">Upload</h4>
                        <p class="text-muted">Upload your file and get details about your product in any Language..</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle2" role="button"><i class="fas fa-comments fa-stack-2x fa-inverse"></i></a>
                        </span>
                        <h4 class="my-3">Speak</h4>
                        <p class="text-muted">Speak your product name and get information instantly with the help of AI.</p>
                    </div>
                </div>
            </div>
        </section>
       


<?php
include('footer.php');
?>