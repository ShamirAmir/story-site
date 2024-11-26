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

    <!--stylesheet-->
<link rel="stylesheet" href="style.css"> 

<!--font-->                                                                                               <!--48 munite ,, swap line 15 & 18-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body>
<?php include './partials/connect.php';?>
<?php include './partials/header.php';?>

<!--php code-->
<?php
$id=$_GET['story_id']; // parameter pass
$sql="Select * from `topic` where topic_id=$id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $topic_name=$row['topic_name'];
    $topic_desc=$row['topic_desc'];
    $topic_image=$row['topic_image'];

}


?>

<!--jumbotron bostrap--->
<div class="container-fluid">
<div class="jumbotron bg-warning rounded">
    <div class="container">
  <h1 class="display-4"><?php echo $topic_name ;?></h1>
  <p class="lead"><?php echo $topic_desc ;?></p>
  <button class="btn btn-dark"><a class="text-light" href="#reading" role="button">Read</a>
  </button>
</div></div>
</div>

<div class="conatiner-fluid slider"> <!-- vul hote pare    [ check out the star]--->
        
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
                <img src="images/front.png" class="d-block w-100" alt="Third slide">
              </div>
            </div>
            
          </div>
    </div>


    <!-- reading-->
    <div class="container" id="reading">
    <div class="jumbotron jumbotron-fluid bg-warning p-0">
    <div class="container">
  <h1 class="display-4 text-center"> Read it</h1>
  <img src=<?php echo $topic_image ;?> class="img-fluid"alt="">
  <p class="lead pb-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, adipisci sit? Ut similique doloremque consequatur molestiae ab itaque libero cum ea laudantium a quaerat architecto eveniet assumenda hic fuga nostrum aliquam adipisci, praesentium rerum? Quisquam id iste aliquam qui provident autem minima dolor, repellendus vero, quam incidunt, odio excepturi laborum voluptatibus ullam. Tenetur odio ut facilis consequatur error provident sunt ipsum in exercitationem. Magnam, nisi laudantium accusamus adipisci harum aut? Expedita omnis exercitationem cum nobis ratione enim eum facilis amet iure, dolorum laboriosam natus laborum repellendus id ipsum quod nam molestias deleniti doloribus tenetur ut! Necessitatibus doloremque voluptatem in qui assumenda sed accusantium eum ex. Et optio nostrum voluptatibus distinctio fugit modi illum quas, adipisci quia harum iusto nemo fugiat omnis, eos doloremque dignissimos obcaecati voluptate eaque sequi aspernatur est amet facere. Mollitia magni harum pariatur iure quasi ad placeat quidem vel hic voluptatum, dicta quos minus fuga amet ullam, expedita, a laudantium sunt eaque atque nisi. Amet, sed cumque veritatis velit voluptatem pariatur hic fugit esse, fuga eveniet, eum autem vitae nesciunt nihil. Expedita veritatis debitis dolor earum itaque vitae ipsum rerum quia architecto odio, voluptatem eveniet neque aut magni a consequuntur perspiciatis! Ipsam dolores doloribus nulla iste dignissimos. </p>
 
</div></div>
    </div>

    <!-- tnx u text-->
    <div class="container-fluid mb-4">
    <h2 class="text-center display-4"> thank you for wasting your time </h2>
</div>
<?php include './partials/footer.php';?>
</body>

</html>