<?php 
session_start();
if ( $_SESSION['auth'] != true ) {
    header('location:authentification.php');
    


}

 ?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleof.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
   
    <!--js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar-default .navbar-brand { /*changer la couleur du text accueil*/
      color: white;
    }

    .navbar-default .navbar-nav>li>a,
    .navbar-brand {/* changer la couleur des lien de la barre de navigation*/
      color: white;
    }

    .navbar-default {
      background-color: rgba(7, 56, 116, 0.7);/* changer la couleur de la barre de navigation*/
    }

</style>
</head>



<style>
* {
  box-sizing: border-box;
}


@media (max-width: 768px) {
  
  #regForm {
    
    background: rgba(255, 255, 255, 0.5);
    margin-right: auto;
    margin-left: 15%;
    font-family: Raleway;
    padding: 20px;
    width: 420px;
    display: block;
    height: 135vh; 
    background-size:cover;
  
  background-position:center;
  
  border-top-left-radius : 100px 70px;
    border-top-right-radius : 100px 70px;
    border-bottom-left-radius : 100px 70px;
    border-bottom-right-radius : 100px 70px;
  }
  body {
  background-color: #f1f1f1;
  background-image:url("LOGO-Kmobile.png");
  background-size:cover;
  
  background-position:center;
  
  height: 168vh; 
   
  
}
input {
  padding: 5px;
  width: 10px;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

  
  .bout {
  margin-top: 20px;
}
  
  .navbar-default{
      
    padding: 0px;
    min-width: 500px;
        
  }
  input.invalid {
  background-color: #ffdddd;
}
  
  
  }
  
@media (min-width: 768px) {
  
  #regForm {
    
    background: rgba(255, 255, 255, 0.5);
    
    margin-right: 100px;
    margin-left: 100px;
    font-family: Raleway;
    padding: 40px;
    min-width: 500px;


    height: 80vh; 
   
  
    border-top-left-radius : 100px 70px;
    border-top-right-radius : 100px 70px;
    border-bottom-left-radius : 100px 70px;
    border-bottom-right-radius : 100px 70px;
  
  
  
   
  }
  input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
  input.invalid {
  background-color: #ffdddd;
}
  body {
  background-color: #f1f1f1;
  background-image:url("LOGO-K.png");
  background-size:cover;
  
  background-position:center;
  
  
   
  
}
  .bout {
  margin-top: 340px;
}
  
 
  }


h1 {
  text-align: center;  
}



/* Mark input boxes that gets an error on validation: */


/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 5px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}




</style>
<body >

<nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
           
            <a class="navbar-brand" href="accueil.php"><span class="glyphicon glyphicon-home"></span> Accueil</a>
            
        
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <a style="float:right;" class="navbar-brand" href="LogOut.php"><span  class="glyphicon glyphicon-log-in "></span> Déconnexion</a>
            </div>
                        
                        
        
    </nav>
<form id="regForm" action="control.php" method="post"   enctype="multipart/form-data" >

  <h1>Control</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <legend class="text-center col-md-12"> Ticket de pesé</legend>
    
    <input type="file" name="file">
        
    <br><button >Enregistrer</button>


    <div class="form-group col-md-4 " style="float:right;">
<?php 

$bdd = new PDO('mysql:host=127.0.0.1;dbname=klubb;charset=utf8','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$files = $bdd->query('SELECT * FROM file');



if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $files = $bdd->query('SELECT * FROM file LIKE "%'.$q.'%"');
  
}
    $req = $bdd->query('SELECT nom FROM file ORDER BY id DESC LIMIT 1 ');
    while($data = $req->fetch()){
        echo "<img src='./upload/".$data['nom']."' width='320px,'height='230px' ><br>";
    }
?>
</div>

</div>
         

  
     

      

                      


  

  

          
  
</form>     





<script>



    
 

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Valider";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  /*for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

    </body>
</html>