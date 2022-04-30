<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="contact-form">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg">
                    <form method ="post" action="insert.php">
                        <label for="firstname">First Name :</label>
                        <input type="text" name="First_Name" id ="firstname" class="w-50"><br>
        
                        <label for="Lastname">Last Name :</label>
                        <input type="text" name="Last_Name" id ="Lastname"  class="w-50"><br>
        
                        <label for="email">Email :</label>
                        <input type="email" name="Email" id ="email"  class="w-50"><br>
        
                        <label for="password">Password :</label>
                        <input type="password" name="password" id ="password"  class="w-50"><br>

                        <label for="date-of-birth">Date of Birth :</label>
                        <select name="Date_of_birth" id="date-of-birth">
                            <?php
                            for($year = 1950; $year <= 2050; $year++){
                            ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                            <?php
                            }
                            ?>
                        </select><br>

                        <br><input type="submit" name="submit" value ="Sign Up" class="submit-btn">
                        <input type="reset" name="reset" value ="Reset" class="reset-btn">
                    </form>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
  </body>
</html>