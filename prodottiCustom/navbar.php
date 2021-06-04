<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://www.reggiani.net/it/"><img src="img/icon.jpg" width="150px" height="auto"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <a class='nav-link' href = 'list.php'>Home</a>
                </li>

                <?php
                    $sql = "SELECT admin FROM users WHERE ID=".$_SESSION['userId'];
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if($row["admin"] == 1){
                        echo "<li class='nav-item'><a class='nav-link' href = 'up.php'>Insert new product</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href = 'inserisciCSV.php'>Insert new product by CSV</a></li>";
                    }
                ?>
            </ul>
            <?php
                if($_SESSION["pag"]==1){
                    $search = '<form class="form-inline" method="GET" action="list.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Name" name="nameFilter">
                    <button class="btn btn-success" type="submit">Search</button>
                    </form>';
                    echo $search;
                }
            ?>
        </div>
    </nav>
  </body>
</html>