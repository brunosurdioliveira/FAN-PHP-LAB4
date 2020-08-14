<!-- 
    Name: Bruno Surdi Oliveira
    Date: June 2020
    Purpose: Week 7 lab - This lab will re-inforce the HTML form submission process as well as apply past knowledge to the new Control Structures Concepts you have learned today.  
-->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- using google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Questrial&display=swap" rel="stylesheet">

  <title>CandyGram</title>

  <!-- Adding some style to the form -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <br>
  <!-- with the logo I added an heart icon (svg tag) -->
  <h1 id="logo">Welcome to CandyGram <svg class="bi bi-heart" width="1em" height="1em" viewBox="0 0 16 16"
      fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd"
        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 01.176-.17C12.72-3.042 23.333 4.867 8 15z"
        clip-rule="evenodd" /></svg></h1>
  <hr><br>

  <!-- Startig the div (container) where the form is inside -->
  <div class="container">
    <!-- Using grid of the bootstrap I will let the form centered -->
    <div class="row">
      <div class="col">
        <!--First column is empty -->
      </div>

      <div class="col-6"> <!--Second column will contain the form -->
        <!-- Form with the action to send the information to php file and method seted to "POST" -->
        <form action="week7_bruno_surdi_output.php" method="post">
          <!-- Fist content is about user information (name and username) - this kind of form is from bootstrap -->
          <h3 class="tips">User information:</h3><br>
          <div class="form-row align-items-center">
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInput">Name</label>
              <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Enter your full name"
                name="name">
              <!--name = "name" to obtain the value on php -->
            </div>
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">@</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username"
                  name="username">
                <!--name = "username" to obtain the value on php -->
              </div>
            </div>
          </div>
          <br>

          <!-- Gender Section -->
          <h3 class="tips">Select your gender:</h3><br>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="male">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
            <!-- name = "gender" to obtain the value 'male' if selected on php -->
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="female">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
            <!-- name = "gender" to obtain the value 'female' if selected on php -->
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline3" name="gender" class="custom-control-input" value="unknown">
            <label class="custom-control-label" for="customRadioInline3">Prefer not to say</label>
            <!-- name = "gender" to obtain the value 'unknown' if selected on php -->
          </div>

          <br><hr>

          <!-- Other section that will obtain the answers of the following questions (form is from the bootstrap) -->
          <h3 class="tips">Choose your favorite dessert:</h3> <br>
          <select class="custom-select custom-select-lg mb-3" name="dessert">
            <!-- name = "dessert" to obtain the value of the option selected on php -->
            <option value="-1" selected disabled>Favorite dessert...</option> <!-- value -1 invalid -->
            <option value="Cookie">Cookie</option> <!-- value Cookie -->
            <option value="Cake">Cake</option> <!-- value Cake -->
            <option value="Ice Cream">Ice Cream</option> <!-- value Ice Cream -->
          </select>
          <br><br>
          <!-- Submit button -->
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </div>
        </form>
      </div> 
      <div class="col"> <!-- thrid column empty -->
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>