<?php 
    $validatename="";
    $validateemail="";
    $validatepassword="";
    $validateradio="";
    $validategender="";
    $v1=$v2=$v3="";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=$_REQUEST["fname"];
        $email=$_REQUEST["email"];

        if(empty($name) || strlen($name) < 3) {
            $validatename="you must enter valid name";
        } else {
            $validatename="your name is ".$name;
        }

        if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
            $validateemail="your must enter valid email";
        } else {
            $validateemail="your email is ".$email;
        }
        if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
            $validatepassword="your must enter valid password";
        } else {
            $validatepassword="your password is ".$password;
        }


        if(!isset($_REQUEST["gender"])) {
            $validategender="Please select your gender";
        }

        $target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
if (move_uploaded_files($_FILES["filetupload"]["tmp_name"], $target_file)){

echo "file uploaded";

}

else{
echo "sorry";

}
    }
?>




<!DOCTYPE html>

<head>
  
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <h>REGISTRATION:</h>
    <br><br>
    <table>
    <tr>
       <td> Enter your first name:</td>
         <td><input type="text" name="fname"><?php echo $validatename; ?></td>
       </tr>
       <tr>
        <td>Enter your email:</td>
         <td><input type="text" name="email"> <?php echo $validateemail; ?></td>
         </tr>
         <tr>
        <td>Enter your password:</td>
         <td><input type="text" name="password"> <?php echo $validatepassword; ?></td>
         </tr>
        <tr>
        <td>User Name:</td>
<td><input type="text" id="d" name="dname"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" id="p" name="password"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="text" id="p" name="Confirm password"></td>
</tr>
</table>
        <p>Please select your gender: </p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="male">Female</label><br>
        <input type="radio" id="other" name="gender" value="female">
        <label for="male">Other</label><br>
        <?php echo $validategender ?>
        <table>
  <tr>
 <td>Birthday:</td>
  <td><input type="date" id="birthday" name="birthday"></td>
</tr>
<tr>
<td><input type="submit" Value="SUBMIT"></td>
</tr>
<tr>
<td><input type="reset" Value="RESET"></td>
</tr>
</table>
    </form>
</body>
</html>