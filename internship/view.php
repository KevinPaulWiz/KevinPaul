<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
   <a href="test.php">Add New</a>
  <?php 
  include 'connection.php';
  // Updating Code
  if (isset($_REQUEST['update'])) {
    // echo "updating successful";
    $PKID=$_REQUEST['update'];
    $sql_fetch="SELECT * FROM test WHERE testid='$PKID'";
    $sql_query=mysqli_query($conn, $sql_fetch);
    $update_row=mysqli_fetch_assoc($sql_query);
    
    // ctrl+/
if(isset($_POST['update-record'])){
  // echo "Working";
  $name=$_POST['fullname'];
  $contact=$_POST['contact'];
  $dob=$_POST['dob'];
  
  $insert_sql="UPDATE `test` SET `name`='$name',`contact`='$contact',`dob`='$dob' WHERE testid='$PKID'";
  $sql_query=mysqli_query($conn, $insert_sql);
  if ($sql_query==TRUE) {
    echo "Successful";
  }else{
    echo mysqli_error($conn);
  }
}

    ?>
    <form method="POST" action="#">

  <table width="350" border="1">
    <tr>
      <td colspan="2"><div align="center">
        <h2><strong>UPDATE RECORD </strong></h2>
      </div></td>
    </tr>
    <tr>
      <td width="129">Name</td>
      <td width="205"><label>
        <input type="text" value="<?php echo $update_row['name']; ?>" name="fullname" />
      </label></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label>
        <input type="text"  value="<?php echo $update_row['contact']; ?>"  name="contact" />
      </label></td>
    </tr>
    <tr>
      <td>Date of Birth </td>
      <td><label>
        <input type="date"  value="<?php echo $update_row['dob']; ?>"  name="dob" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="update-record" value="Save Changes" />
      </label></td>
    </tr>
  </table>
  
</form>
    <?php
  }


  // Deleting code
  if (isset($_REQUEST['delete'])) {
    $PKID=$_REQUEST['delete'];
    $sql_delete="DELETE FROM test WHERE testid='$PKID'";
    $sql_query=mysqli_query($conn, $sql_delete);
    if ($sql_query==TRUE) {
      echo "Deleted successful";
    }else{
      echo mysqli_error($conn);
    }
  }


  // Retrieving code
  $sql_fetch="select *from test";
  $sql_query=mysqli_query($conn, $sql_fetch);
   ?>
<table  border="1">
  <tr>
    <td>Test Id </td>
    <td>Name</td>
    <td>Contact</td>
    <td>Date Of Birth </td>
    <td>Delete </td>
    <td>update </td>
  </tr>
  <?php 
  while($rows=mysqli_fetch_assoc($sql_query)){
  // echo $rows['name']."<br>";
   ?>
  <tr>
    <td><?php echo $rows['testid'] ?></td>
    <td><?php echo $rows['name'] ?> </td>
    <td><?php echo $rows['contact'] ?></td>
    <td><?php echo $rows['dob'] ?></td>
    <td><a href="?delete=<?php echo $rows['testid'] ?>">Delete</a> </td>
    <td><a href="?update=<?php echo $rows['testid'] ?>">Update</a> </td>
  </tr>
  <?php 
  } 
  ?>
</table>
</body>
</html>
