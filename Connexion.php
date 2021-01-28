 <?php

/**
 * 
 */
 
$cle = "Sdzzdzd";
$id = "zdzdqzd";
$message = "ffznd";

if( isset($_POST['cle']) && isset($_POST['id']) && isset($_POST['message']) ){

    if($_POST['cle'] == $cle && $_POST['id'] == $id && $_POST['message'] == $message }
        $_SESSION['user'] = $cle;
        echo "Success";    
    }
    else{ // Sinon
        echo "Failed";
    }
}
?>
 
