<!--including db.php to establish connection-->
<?php   include "Config/database.php"  ?>

<?php  include "Components/header.php";  ?>

<?php
$sql = 'SELECT * FROM feedbacks';
$result = mysqli_query($connec,$sql); //performs squl query on db in connec
$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC); // this fetches data in form of associative array

//hence $feedbacks is an array of associative array fetched from db
?>


<!---------------------Displaying feedbacks------------->
<?php if(empty($feedback)): ?>
<h1 class="lead">There is no feedback</h1>

<?php endif; ?>  <!--this ends the if statement -->

<div class="feedback">
<h1 class="title">Past FeedBacks</h1>
<?php foreach($feedback as $key => $item ): ?>
   <div class="fb_card">
   <div class="date">
        <li>Date: <?php echo $item['Date']; ?></li>
     </div>
    <div class="card_body">
      <p> <?php echo $item['body']; ?> </p>
    </div>
    <div class="card_name">
      <h4> <?php echo $item['name']; ?> </h4>
      <br>
      <p class="email"><?php echo $item['email']; ?></p>
    </div>
    <style>
      .email{
        display: none;
      }
      .card_name:hover p{

        display: block;
        box-sizing: border-box;
        content: "Email:  <?php echo $item['email']; ?>";
        position: absolute;
        margin-top: 1.5em;
        background-color: rgb(46, 44, 44);;
        padding: 0.3em;
        border-radius: 0.2em;
        color: white;
        font-weight: bold;
      }
    </style>
    </div>
<?php endforeach; ?>
</div>
<?php  include "Components/footer.php";  ?>
