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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <a class='nav-link' href = 'list.php'>Home</a>
                </li>

                <li class="nav-item">
                    <a class='nav-link' href = 'up.php'>Insert new product</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Customization type</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="list.php?cust=Low">Low</a>
                        <a class="dropdown-item" href="list.php?cust=Basic">Basic</a>
                        <a class="dropdown-item" href="list.php?cust=High">High</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Color temperature</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="list.php?temp=2700">2700</a>
                        <a class="dropdown-item" href="list.php?temp=3000">3000</a>
                        <a class="dropdown-item" href="list.php?temp=4000">4000</a>
                    </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Power</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="list.php?val=<10">&lt;10</a>
                        <a class="dropdown-item" href="list.php?val=10-25">10-25</a>
                        <a class="dropdown-item" href="list.php?val=25-50">25-50</a>
                        <a class="dropdown-item" href="list.php?val=50-70">50-70</a>
                        <a class="dropdown-item" href="list.php?val=>70">>70</a>
                    </div>
                </li>
            
                <form class="form-inline" method="GET" action="list.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Name" name="nameFilter">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
  </body>
</html>