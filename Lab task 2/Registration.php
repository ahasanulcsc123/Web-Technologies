<!DocType html>
<html>
<head>
<title>My example </title>
</head>
<body>
<?php include "control/LabTask2.php" ; ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">

<form>
REGISTRATION::

  <table>
<tr>
<td>Name:</td>
<td><input type="text" id="l" name="lname"></td>
</tr>

<tr>
<td>email:</td>
<td><input type="text" id="e" name="EMAIL"></td>
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
<p>Gender:</p>

  <input type="radio" id="male" name="gender" value="male">
  Male<br>
  <input type="radio" id="female" name="gender" value="female">
  Female<br>
  <input type="radio" id="other" name="gender" value="other">
  Other<br><br>
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