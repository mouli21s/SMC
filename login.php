<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylel.css">
    <link rel="icon" href="im/icon.jpg">
</head>
<body class="body-home">
    <div class="black-fill"><br /><br />
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-light"
        id="homenav">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="im/icon.jpg" height="40px" width="40px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link " >About</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" >Contact</a>
        </li>
    </ul>
    <ul class="navbar-nav me-right mb-2 mb-lg-0">
        <li class="nav-items">
            <a  class="nav-link" href="#">Login</a>
        </li>
    </ul>
    </div>
  </div>
</nav>
        
    <div class="body-login">
      <div class="blackfile2">
        <div class="d-flex justify-content-center align-items-center
        flex-column">
        <form class="login"
        mathod="post"
        action="req/login.php">
          <div class="text-center">
            <img src="im/icon.jpg" width="40px"alt="">
            <h3>LOGIN</h3>
            <?php if (isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
             <?=$_GET['error']?>
            </div>
            <?php } ?>
          </div>
          <div class="mb-3">
            <label class="form-label">User Name</label>
               <input type="text" 
                      class="form-control" 
                      name="uname">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
               <input type="password" 
                      class="form-control" 
                      name="pass">
          </div>
          <div class="mb-3">
            <label class="form-label">Login As</label>
               <select class="form-control" 
                        name="role">
               <option value="1">Admin</option>
               <option value="3">Student</option>
               <option value="2">Teacher</option>
               </select>
            </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <br></br>
        <div class="text-center text-light">
          Copyright &copy; 2023 ABCD School.All right reserved
        </div>

        </div>

      </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
"></script>
    
</body>
</html>