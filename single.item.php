<?php




echo "Article n° :" ;

if(isset($_GET['id']) && !empty($_GET['firstname']) ){
    echo $_GET["id"];
    echo '<br>';
    echo $_GET["firstname"];
}else{

    
    header("Location: test.php ");  

}

