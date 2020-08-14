<!-- 
    Name: Bruno Surdi Oliveira
    Date: June 2020
    Purpose: Week 7 lab - This lab will re-inforce the HTML form submission process as well as apply past knowledge to the new Control Structures Concepts you have learned today.
-->

<!-- the pre tag is used to preformat the text - it will display exactly as written in the HTML code -->
<pre>
  <!-- A quick way to view the content of POST is to use PHP function var_dumb() -->
<?php
    var_dump($_POST); 
    // assign those arrays variables to local variables 
    $name = $_POST['name'];
    $username = $_POST['username'];
    $genderSelected = $_POST['gender'];
    $dessertSelected = $_POST['dessert'];

    // Sanitizing the incoming data with htmlentities()
    $name_clear = htmlentities($name);
    $username_clear = htmlentities($username);
    $gender_clear = htmlentities($genderSelected);
    $dessert_clear = htmlentities($dessertSelected);
    echo '<hr>';
?>
</pre>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CandyGram</title>

    <!-- using google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Questrial&display=swap" rel="stylesheet">

    <!-- Adding some styles -->
    <style>
        body{
            width: 100%;
            text-align: center;
            background-image: url("resources/backgroundcandy.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        #logo{
            text-align: center;
            font-family: 'Indie Flower', cursive;
            margin: 50px;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px #ff0000;
            letter-spacing: 3px;
        }

        #heart {
          color: #ab180e;
        }

        h5{
          background: rgb(255, 255, 255, 0.5);
          color: black;
        }

        #check {
          color: green;
        }

        img {
          height: 100vh;
        }
        
        pre {
          color: white;
        }
    </style>
  </head>

  <body>
    <h1 id="logo">Thank you for submitting your answers to CandyGram <svg id="heart" class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd"/></svg></h1>
    <div class="container"> <!-- container div -->
      <div class="row"> <!-- row div -->

        <div class="col"> <!-- first column div -->
        <!-- Empty! just to allign the content to the center of the page (grid) -->
        </div> <!-- End first column -->

        <div class="col-6"> <!-- second column div -->
          <!-- First div "Well Done" -->
          <div class="alert alert-dark" role="alert">
            <h4 class="alert-heading">Well done, <strong> <?php echo $name_clear?> </strong>! <svg id="check" class="bi bi-check-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/></svg></h4> 
            <!-- We will get the name and username by php using the variables assigned by post method -->
            <p>You successfully submitted your answers! Your username is <strong><?php echo $username_clear; ?></strong>. We'll never share your name, username or others personal informations with anyone else. Thank you for your trust. 

            <!-- Retrieve the information of gender accessing by the local variables -->
            <?php     
              if($gender_clear == 'male') {
                $gender = 'he';
              }
              elseif($gender_clear == 'female') {
                $gender = 'she';
              }
              elseif($gender_clear == 'unknown') {
                $gender = 'they';
              }?> 

            <!-- Retrieve the dessert chosen (by the local variable) and assign some informations about it on new variables to display more informations such as favorite dessert, restaurant indication and some images -->
            <?php 
              switch ($dessert_clear) {
                case 'Cookie':
                  $dessert = 'cookie';
                  $restaurant = 'Kindness Cookies';
                  $imageURL1 = 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-ms-fields-cookies-024-1544735513.jpg';
                  $imageURL2 = 'https://images-gmi-pmc.edge-generalmills.com/087d17eb-500e-4b26-abd1-4f9ffa96a2c6.jpg';
                break;
                case 'Cake':
                  $dessert = 'cake';
                  $restaurant = 'The Boombox Bakeshop';
                  $imageURL1 = 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fmedium_2x%2Fpublic%2F1542062283%2Fchocolate-and-cream-layer-cake-1812-cover.jpg%3Fitok%3DrEWL7AIN';
                  $imageURL2 = 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2007/2/16/0/ry0401_carrotcake.jpg.rend.hgtvcom.826.620.suffix/1552488933139.jpeg';
                break;
                case 'Ice Cream':
                  $dessert = 'Ice Cream';
                  $restaurant = 'Roli Poli Ice Cream';
                  $imageURL2 = 'https://myhubsdotorg.files.wordpress.com/2016/05/013.jpg';
                  $imageURL1 = 'https://feelgoodfoodie.net/wp-content/uploads/2018/06/Avocado-Ice-Cream-4-1-500x375.jpg';
                break;
              }
            ?>
            </p>
            <hr>
            <!-- showing the informations according with the options selected by the user and indicating a restaurant -->
            <p>Based on <?php echo $name_clear?>'s response, <?php echo $gender?> would love a <?php echo $dessert ?>; <?php echo $gender?> should visit "<?php echo $restaurant ?>" in London-ON. Look some pictures below!!!</p>
          </div> <!-- End first div -->

        </div> <!-- End div second collumn -->

        <div class="col"> <!-- third column div -->
        <!-- Empty! just to allign the content to the center of the page (grid) -->
        </div> <!-- End third column div -->

      </div><br> <!-- End row div -->

      <!-- Bootstrap Carousel to display some images of the favorite dessert selected and some additional informations -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
        <!-- In the first "slide" we have a picture of the dessert selected and in the caption we have a message with the user's name, gender and dessert -->
        <div class="carousel-item active">
          <img class="d-block w-100" src=<?php echo $imageURL1 ?> alt="First slide">
          <div class="carousel-caption d-none d-md-block">
          <h5>Based on <?php echo $name_clear?>'s response, <?php echo $gender?> would love a <?php echo $dessert ?></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=<?php echo $imageURL2 ?> alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $gender?> should visit "<?php echo $restaurant ?>"</h5>
          <p>It is a great place to have <?php echo $dessert ?>!! A M A Z I N G</p>
          </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div> <!-- End container div -->
    <br><br>

    <!-- Third div "Answers" -->
          <!-- We will return all the answers entered by the user using the variables (assigned with the method $_POST[''] (inside of [''] is the name given in the input on the HTML file)) -->
          <div id="answers" class="alert alert-primary" role="alert">
            Your name is: <?php echo $name_clear. '<br>' ?>
            Your username is: <?php echo $username_clear . '<br>' ?>
            Your gender is: <?php echo $gender_clear . '<br>' ?>
            Your favorite dessert is: <?php echo $dessert_clear . '<br>' ?>
          </div> <!-- End third div -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>