<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$addErr = "";
$address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["address"])) {
    $addErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
      $addErr = "Only letters and white space allowed";
    }
  }
  

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Address Input Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  address: <input type="text" name="address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addErr;?></span>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $address;
echo "<br>";

?>


</body>
</html>
