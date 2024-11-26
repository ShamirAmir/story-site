<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>
        Stories Website
    </title>
<!--bostrap css cdn -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">




<!--font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--stylesheet-->
<link rel="stylesheet" href="style.css">

</head>

<body>
<?php include './partials/connect.php';?>
    <!-- <h1 class="text-center">hello</h1>  -->

    <div class="conatiner-fluid slider">                     <!-- vul hote pare    [ check out the star]--->
        <?php include './partials/header.php';?>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/front.png" class="d-block w-100" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="images/front.png" class="d-block w-100" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="images/front.png" class="d-block w-100" alt=" Third slide">
              </div>
            </div>
            
          </div>
    </div>
    
    <!--cards-->
    <div class="container">
      <h1 class="text-center featureTitle mb-5">OPTION </h1>
      <div class="row">
      <?php
     $sql="Select * from `topic`";
     $result=mysqli_query($con,$sql);
     if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['topic_id']; 
        $topic_image=$row['topic_image'];
        $topic_name=$row['topic_name'];
        $topic_desc=$row['topic_desc'];
        echo '<div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
             <img src='.$topic_image.'  alt="...">
        <div class="card-body">
           <h5 class="card-title">'.$topic_name.'</h5>
           <p class="card-text">'. substr($topic_desc,0,50).'.........</p>
           <a href="stories.php?story_id='.$id.'" class="btn btn-primary">.Go & Read it</a> 
   </div>
 </div>
 </div>';
      }
     }
     ?>
       <div class="col-md-4 col-sm-6 mb-5">
       <div class="card" style="width: 18rem;">
            <img src="./images/picture4.png" class="card-img-top" alt="...">
       <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go & Read it</a>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-6 mb-5">
      <div class="card" style="width: 18rem;">
  <img src="./images/food.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go & Read it</a>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-6 mb-5">
      <div class="card" style="width: 18rem;">
  <img src="./images/world.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go & Read it</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-6 mb-5">
      <div class="card" style="width: 18rem;">
  <img src="./images/japan.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go & Read it</a>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-6 mb-5">
      <div class="card" style="width: 18rem;">
  <img src="./images/travel.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go & Read it</a>
  </div>
</div>
</div>
      </div>
    </div>
    <?php include './partials/footer.php';?> <!-- footer-->
</body>
</html>