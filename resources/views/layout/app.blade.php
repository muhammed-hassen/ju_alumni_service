<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrp 5 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    -->

    <link rel="stylesheet" href="asset/css/bootstrap.css">
	  <link rel="stylesheet" href="asset/css/style.css">
	  <script src="asset/js/jquery-3.6.0.js"></script>
    <script src="asset/js/bootstrap.js"></script>
    <!-- bootstrp 4-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    h6{
      font-family: 'Poiret One', cursive, arial;
      font-weight:bolds; 
      background-color: DarkCyan;
    }
    body,{
      background-color: rgb(200,200,200);
    }

    </style>

    
    <title>Document</title>
</head>
<body>
    <!-- navigtion -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
              </a>
        </div>
          <!-- Links -->
        <div class="container-fluid">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" href="#">Link 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Link 2</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active" href="#">Link 3</a>
              </li>

          </ul>

           <!-- Left links -->

      <div class="d-flex align-items-center">
        <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
          Login
        </button>
        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
          Sign up for free
        </button>
        <a
          data-mdb-ripple-init
          class="btn btn-dark px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </div>
    </div>
</div>
      
      </nav>

      @yield('content')

      <footer class="footer text bg-dark">
        <p class="text-muted">&copy; MyPhoto Inc.</p>
        <p class="text-muted">Terms &amp;Conditions</p>
        <p class="text-muted">About Us</p>
      </footer>
      
  </body>
  
  </html>