
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#353D48;">
        <div class="container">
            <a href="index.php" class="navbar-brand mb-0 h1">
            <img src="logo.jpeg" alt="r2logo" width="140" height="90" />
            </a>
            <button 
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            class="navbar-toggler"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end gap-4 "
            id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                     Sobre    
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        Serviços
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="artigos.php" class="nav-link">
                        Publicações    
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="contato.php" class="nav-link">
                       Contato    
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="login.php" class="nav-link">
                           
                    </a>
                </li>
            </ul>

            <?php
                if(isset($_SESSION['login'])){
            ?>
                 <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="addArtigos.php" class="nav-link">
                           Add Publicações
                    </a>
                </li>
            </ul>

            <?php
                 }
            ?>

        </div>
    </div>
    </nav>    
</body>
</html>