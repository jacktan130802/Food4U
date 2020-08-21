<?php
echo
    '<link rel="icon" href="images/sp logo.jpg">
        <!-- Bootstrap -->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:black">
        <!-- Website Logo -->
        <header style="background-color:#1f1f1f;display:block;text-align:center;"><img src="images/CSAD LOGO.png" style="width:230px;height:100px;margin-top:20px"></header>
        <!-- Navbar -->
        <nav class="navbar navbar-dark" style="background-color:#1f1f1f;color:white">
            <a class="navbar-brand" href="index.php">CSAD</a>
            
        <!-- Navbar button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainPage" aria-controls="mainPage" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- Navbar List -->
        <div class="collapse navbar-collapse"id="mainPage">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Homepage</a>
                    <a class="nav-link" href="forum.php">Forum</a>
                    
                    ';
                    if (isset($_SESSION['User'])) {
                       echo '<a class="nav-link" href="logout.php">Log Out</a>';
                    } else {
                       echo '<a class="nav-link" href="loginPage.php">Login/Register</a>';
                    }
                
                    echo
                    '
                </li>
            </ul>
        </div>
        </nav>';
?>