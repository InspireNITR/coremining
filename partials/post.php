<?php

echo '
<div class="container my-4">

<h2 class="text-center "> Post an Article Here</h2>

<form  action="index.php" method="post" enctype="multipart/form-data">
  <div class="form-group ">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter the Title">
  </div>

  
 
 
 
 

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
  </div>


 
  <div class="form-group">
    <label for="exampleFormControlFile1">Choose a Image to Upload</label>
    <input type="file" class="form-control-file"  name="image" id="image">
  </div>


<button type="submit"  name="upload" class="btn btn-primary">Submit</button>

</form>

</div>';