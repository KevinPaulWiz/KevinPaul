
<?php 
  include 'controller.php'; 
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <a href="view.php">View Records</a>
<form method="POST" action="#">

  <table width="350" border="1">
    <tr>
      <td colspan="2"><div align="center">
        <h2><strong>TEST FORM </strong></h2>
      </div></td>
    </tr>
    <tr>
      <td width="129">Name</td>
      <td width="205"><label>
        <input type="text" name="fullname" />
      </label></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label>
        <input type="text" name="contact" />
      </label></td>
    </tr>
    <tr>
      <td>Date of Birth </td>
      <td><label>
        <input type="date" name="dob" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>
  
</form>
</body>fdhgd
</html>
