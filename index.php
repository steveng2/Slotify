<?php
include("includes/config.php");

// session_destory(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Slotify</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 
  <div id="nowPlayingBarContainer">
      <div id="nowPlayingBar">
          
          <div id="nowPlayingLeft">
              
          </div>
      
          <div id="nowPlayingCenter">
              
              <div class="content playerControls">
                 
                      <div class="buttons">
                      
                          <button class="controlButton shuffle" title="Shuffle button">
                              <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                          </button>
                          
                          <button class="controlButton shuffle" title="Shuffle button">
                              <img src="assets/images/icons/previous.png" alt="Previous">
                          </button>
                          
                          <button class="controlButton shuffle" title="Play button">
                              <img src="assets/images/icons/play.png" alt="Play button">
                          </button>
                          
                           <button class="controlButton shuffle" title="Pause button" style="display: none;">
                              <img src="assets/images/icons/pause.png" alt="Pause button">
                          </button>
                          
                          <button class="controlButton shuffle" title="repeat button">
                              <img src="assets/images/icons/repeat.png" alt="Repeat">
                          </button>
                           
                          <button class="controlButton shuffle" title="Next button">
                              <img src="assets/images/icons/next.png" alt="next">
                          </button>
                  
                      </div>
              
              </div>
              
          </div>
          
          <div id="nowPlayingRight">
              
          </div>
          
      </div>
      
  </div>
    
    
</body>
</html>