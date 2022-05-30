<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName">
                        </div>
                        <div class="form-group">
                            <label for="email">Gender</label>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
                                <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female">Female</label>
                                <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others">Others</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="eamil" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="number" class="form-control" name="number" id="number">
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>