<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style-index.css">
</head>
<body>
    <div class="container-fluid" id="container-fluid">
    <?php
    session_start();

    if(isset($_GET["action"]))
    {

        if($_GET["action"]=='connexion')
        {

            require_once './traitements/connexion1.php';
            
        }
        else if($_GET["action"]=='inscription')
        {

            require_once './pages/inscription.php';
        }
    }
    else
    {
        require_once './pages/connexion.php';
    }

            /*if (isset($_GET['lien'])){
                switch($_GET['lien']){
                    case "admin":
                        require_once("pages/admin.php");
                    break;
                    case "joueur":
                        require_once("pages/jeu.php");
                    break;
                    case "inscription":
                        require_once("pages/inscription.php");
                    break;
                    default;
                }
            }else {
                require_once('pages/connexion.php');
            }*/

    ?>
    </div>
    <!-- Optional JavaScript -->
    <script src="./public/js/roote.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/validation.js"></script>
    <script src="../public/js/upload.js"></script>
</body>
</html>
