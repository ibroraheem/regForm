<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Registration Form</title>
  <style>
  input[type=text], input[type=email],
  select,
  textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  .form{
    align-items: center;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
  }

  .php {
    padding-left: 20px;
    margin-top: 30px;
  }
  </style>
</head>

<body>
  <div class="form">
    <form method="post" action="">
      <label for="email">Email address:</label> 
      <input type="email" name="email" id=""> <br>
      <label for="name">Name:</label>
      <input type="text" name="name" id=""><br>
      <label for="gender">Gender:</label>
      <select name="gender" id="">
        <option value=""></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br>  
      <input type="submit" name="submit">
    </form>
  </div>
  <div class="php">
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
  </div>
</body>

</html>