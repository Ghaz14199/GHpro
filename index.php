<?php
include './inc/db.php';
include './inc/form.php';
include './inc/db_close.php';
include './inc/select.php';
$sq = 'SELECT * FROM users ORDER BY RAND()LIMIT 3 ';
$reul = mysqli_query($con, $sq);
$users= mysqli_fetch_all($reul, MYSQLI_ASSOC);

mysqli_free_result($reul);
mysqli_close($con);
?>
 <?php include_once './parts/header.php';?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

<img src="images/g-icon.jpg" alt="">
      <h1 class="display-4 fst-italic">Win with Ghazal</h1>
      <p class="lead my-3">Registration is available</p>
      <h3 id="countdown"></h3>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      <div class="container">
  <ul class="list-group">
  <li class="list-group-item active" aria-current="true">An active item</li>
  <li class="list-group-item"> to answer your questions</li>
  <li class="list-group-item">Live stream every 3 weeks.</li>
  <li class="list-group-item">The free version is for registrants only</li>
</ul>
 
<div class="p-4 p-md-5 mb-4 text-white rounded bg-light">
    <div class="col-md-6 px-0">
<form class="mt-5"  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3> Please enter your info</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">First name</label>
    <input type="text"   name ="firstName" class= "form-control"  id="firstname"  value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error" ><?php echo $error['firstNameError']?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">Last name</label>
    <input type="text" name ="lastName" class="form-control"  id="lastname" value="<?php echo $lastName?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $error['lastNameError']?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name ="lastName" class="form-control"  id="email" value="<?php echo $email?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $error['emailError']?></div>
  </div>
  
  <button type="submit"  name=" submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
<div class="loder-con">
<div id= "loader"></div></div>
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<!-- Button trigger modal -->
<div class="d-grid gab2 col-5 mx=auto" my-5>
<button type="button"  id = "winner" class="btn btn-primary" >
choes the winner
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="#modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="#modal">the winner is </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class=" display-4 text-center modal-title" id="#modal"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName'])?> </h1>
        <?php endforeach?>
      </div>
      </div>
    </div>
  </div>

  </div>
<script src="./js/bootstrap.min.js" ></script>
    <script src="./js/script.js"> </script>
    <script src="./js/loder.js"> </script>
</body>
</html>
<?php include_once './parts/footer.php';?>