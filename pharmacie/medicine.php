
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <title>Medicine</title>
    <link rel="stylesheet" href="./heder.css">
    <link rel="stylesheet" href="./indiv.css">
    <link rel="stylesheet" href="./medicine.css">
</head>
<body>


    <header>
        <div class="container">
            <div id="logo">
                <img src="../pharmacie/images/logo.png">
                <h1>Save life</h1>
            </div>
        <nav >
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Donate <i class="fas fa-caret-down"></i></a>
                    
                        <ul class="dropdown" >
                        <li><a href="indiv.php">Individual</a></li>
                          <li><a href="phar.php">pharmacie</a></li>
                       
                          
                        </ul>
                      
                </li>
                <li><a href="medicine.php">Medicine</a>
                </li>
                <li><a href="login.html">sign in</a> </li>
                <input type="search" id="search" placeholder="search ... " name="x">
    <input type="button" id="butt" onclick="openpage()" value="&#128270;">
              </ul>
             
        </nav>
        
    </div>
    </header>
    <script>
        function openPage() {
            var x = document.getElementById("search").value;

            if (x === "indiv") {
                window.open("indiv.php");
            }

            if (x === "pharmacie") {
                window.open("phar.php");
            }
            if (x === "medicine") {
                window.open("medicine.php");
            }
        }
    </script>


    <section class="container">
    

        <div class="sec2">
       
            <h1> how to recive</h1><br>
    
     <div id="circle1" ><p>1</p></div>
     <div class="bot"></div>
     <div id="circle2"  ><p>2</p></div>
     <div class="bot2"> </div>
     <div id="circle3" ><p>3</p></div>
     <div class="sec21"><img src="./images/small-heart.png"> <p >Register and enter<br> your data to get</p></div>
     <div class="sec22"><img src="./images/id-card.png"> <p >Search your need in <br>pharmacy or indiv</p> </div>
    
     <div class="sec23"><img src="./images/tiny-letter.png"> <p>Contact who add it and take safe</p></div>
        </div>
    
    

<div class="result">
       <div class="result-content">
       <a href="prodphar.php">Ajouter un produit</a>
            <h3>liste des produits</h3>
            <div class="liste-produits">
            
                <?php 
                //Nous allons afficher tous les produits ajouté :
                  //connexion à la base de données
                  $con = mysqli_connect("localhost","root","","pharmacie");
                  $req3 = mysqli_query($con , "SELECT * FROM phar");
                  if(mysqli_num_rows($req3) == 0){
                     //si la base de donnée ne contient aucun produit , alors affichons :
                     echo " Aucun produit trouvé";
                  }else {//si oui
                      while($row = mysqli_fetch_assoc($req3)){
                          //affichons les informations
                          echo ' 
                          <div class="produit">
                               <div class="image-prod">
                                       <img src="images-produits/'.$row['image'].'" alt=""> 
                               </div>
                               <div class="text">
                                   <strong><p class="titre">'.$row['titre'].'</p></strong>
                                   <p class="description">'.$row['descrip'].'</p>
                               </div>
                          </div>
                          ';
                      }
                  }

               ?>
               <!-- produit -->
                   
               
            </div>
       </div>
    </div>


</section>

    <footer> <p id="fot">
        ©Pharmacy
    </p>
</footer> 

</body>
</html>