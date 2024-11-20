<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top:5%;">
      <div class="d-flex align-items-center">
        <div class="col-md6" style="padding:10px; border:1px solid black; border-radius: 5px;">
          <h2>Test Upload</h2>
          <form action="upload_img.php" method="post" enctype="multipart/form-data">  
            <div class="form-group">
            <label for="image">Input Image : </label>
            <input type="file" name="imageFile" id="imageFile">
            </div>
            <br>
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
