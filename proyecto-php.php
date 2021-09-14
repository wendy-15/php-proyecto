<DOCTYPE! html>
<html>
	<head>
    <title>
      Wendy Homecenter
    </title>
	</head>
	<body bgcolor=#ffffff
	</body>
</html>
<!DOCTYPE html>

<center>
    <div id= "header" class="section">
    <img alt="" class= "img-circle" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Homecenter_Sodimac.png"
    </center>

<!DOCTYPE HTML>  
<html>
<head>
<a 
<img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Homecenter_Sodimac.png">
    </a>
<style>
.error {color: #C7142F;}
</style>
</head>
<body>  

<?php
// definir variables y establecer valores vacíos
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["NOMBRE Y APELLIDO"])) {
    $nameErr = "SE REQUIERE EL NOMBRE";
  } else {
    $name = test_input($_POST["name"]);
    // comprobar si el nombre solo contiene letras y espacios en blanco
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "SOLO SE PERMITEN LETRAS Y ESPACIOS EN BLANCO";
    }
  }
  
  if (empty($_POST["CORREO"])) {
    $emailErr = "SE REQUIERE EL CORREO";
  } else {
    $email = test_input($_POST["email"]);
    // compruebe si la dirección de correo electrónico está bien escrita
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["DIRECCIÓN"])) {
    $DIRECCIÓN = "";
  } else {
    $DIRECCIÓN = test_input($_POST["DIRECIÓN"]);
  }

  if (empty($_POST["CANTIDAD"])) {
    $genderErr = "SE REQUIERE LA CANTIDAD";
  } else {
    $gender = test_input($_POST["CANTIDAD"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div align='center'>
<h2>FORMULARIO ENVIOS HOMECENTER</h2>
<p><span class="error">* COMPLETE LA INFORMACIÓN</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NOMBRE Y APELLIDO: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  PRODUCTO: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  CORREO: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  NUMERO CELULAR: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  DIRECCIÓN: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  CANTIDAD:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="UNO") echo "checked";?> value="UNO">UNO
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="DOS") echo "checked";?> value="DOS">DOS
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="MÁS") echo "checked";?> value="other">MÁS  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="ENVIAR" value="ENVIAR">  
</form>

<?php
echo "<h2>MUCHAS GRACIAS:</h2>";

?>

</body>
</html>