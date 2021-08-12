<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
     <link rel="stylesheet"  type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
       <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2 > Login here </h2>
                <form action="user.php" method="POST">
                    <div class="form-group">
                        <label> USERNAME</label>
                        <input type="text" name="user " class="form-control">
                    </div>
                    <div class="form-group">
                        <label> PASSWORD</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
           
            </div>
            <div class="col-md-6 login-right">
                <h2 > Register Here </h2>
                <form action="registration.php" method="POST">
                    <div class="form-group">
                        <label> USERNAME</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> PASSWORD</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Register here </button>
                </form>
            </div>
      
      
        </div>
   
   
    </div>
    </div>
</body>
</html>