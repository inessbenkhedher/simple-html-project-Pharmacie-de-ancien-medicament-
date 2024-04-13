<?php
//1:connexion a la base de données
$serveurname="localhost";
$username="root";
$password="";
$Dbname="pharmacie";
///creation de la connexion
$conn=new mysqli($serveurname,$username,$password,$Dbname);
//test de connexion
if ($conn->connect_error){
    die("connect failed".$conn->connect_error);

}//else{
  //  echo"you are connected";
//}
//déclaration et récupération les valeurs entrées par l'utilisateur
$lastname=$firstname=$password=$email="";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordRepeat = $_POST["repeat_password"];

//lancer la requete
if(isset($_POST['submit'])){
    $req="INSERT INTO signup values('','$firstname','$lastname','$email','$password') ";
    //test sur la requete
    if($conn->query($req)===true){
    
        echo "ok";
    }else{
        echo"echec !!!";
    }

}
?>