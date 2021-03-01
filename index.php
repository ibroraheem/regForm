

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Registration Form</title>
  
  </style>
</head>
<body>
<div class="form">
<form method="post" action="">
<label for="email">Email address:</label>
<input type="email" name="email" id="" >
<label for="email">Name:</label>
<input type="text" name="name" id="">
<label for="gender">Gender:</label>
<select name="gender" id="">
<option value=""></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
        <input type="submit" name="submit">
     </form>
     </div>
     <?php 
    if(isset($_POST['submit'])){ 
      $name = $_POST["name"];
      $email = $_POST["email"];
      $gender = $_POST["gender"];
        echo $name . "<br>";
        echo $email . "<br>";
        echo $gender;  
    }
?>
</body>
</html>
