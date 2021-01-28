 <?php

/**
 * Nous créons deux variables : $username et $password qui valent respectivement "Sdz" et "salut"
 */
 
$cle = "Sdzzdzd";
$id = "zdzdqzd";

if( isset($_POST['cle']) && isset($_POST['id']) ){

    if($_POST['cle'] == $username && $_POST['id'] == $password){ // Si les infos correspondent...
        session_start();
        $_SESSION['user'] = $username;
        echo "Success";    
    }
    else{ // Sinon
        echo "Failed";
    }
}
?>
 
