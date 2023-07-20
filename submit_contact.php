

<?php
    // Verification des champs du formulaire
    $postData = $_POST;

    if (!isset($postData['email']) || !isset($postData['message']))
    {
        echo('Il faut un email et un message pour soumettre le formulaire.');
        return;
    }	

    $email = $postData['email'];
    $message = $postData['message'];
    
?>

<!--- Securisation des champs avec Strip_tags --->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  rel="stylesheet">
    <title>Site de Recettes - Contact reçu</title>
</head>
<body>
    <div class="container">
        <?php include_once('header.php'); ?>
            <h1>Message bien reçu !</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos informations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                </div>
            </div>
        </div>
</body>
</html>



<!--<img src="// echo 'uploads/' . basename($_FILES['screenshot']['name']); ?>"  />--->
<!-- <?php 
if(
    (!isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0 )
    )
    {

        if($_FILES['screenshot']['size'] <= 1000000) 
        {
            //recuperation de l'extension du fichier dans une variable
            $fileInfo = pathinfo($_FILES['screenshot']['name']);
            $extension = $fileInfo['extension'];
            $isAllowedExtensions = ['jpeg','jpg','gif','png'];

            if(in_array($extension, $isAllowedExtensions)) 
            {
                //on peut valider le fichier et le stocker definitivement
                move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));

                echo "L'envoie a bien été effectué !";
                
            }
        }
    }
?> -->