<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <?php include_once("./styles/css.php") ?>
</head>
<body>
<div class="container">
<form action="upload.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
  <label  class="form-label">name </label>
  <input type="text" name="name" class="form-control"  placeholder="name">
</div>
<div class="mb-3">
  <label f class="form-label">Email address</label>
  <input type="email" name="email" class="form-control"  placeholder="name@example.com">
</div>
<div class="mb-3">
  <label class="form-label">Email address</label>
  <input type="password" name="password" class="form-control"  placeholder="*******">
</div>

<div class="mb-3">
  <label  class="form-label">Example textarea</label>
  <input type="text" name="city" class="form-control"  placeholder="city">
</div>

<div class="">
  <input type="file" name="file"  multiple  >
</div>
  <input type="submit" name="multi" value="multi">

</form>
</div>
                    <?php include_once("./styles/js.php") ?>

</body>
</html>