<!--
  Displays all pending scholar
-->
<html>
  <head>
<script>
</script>
<style>
  body{
    font-family: 'Times New Roman', Times, serif;
  }
  table{
    border-collapse: collapse;

  }
  input{
    border-color: lightgreen;
  }
  td{
	  vertical-align:top;
	  width: auto;
    padding:12px;
    border:1px solid black;
  }
  tr.second{
    background-color: cadetblue;
  }
  tr.last{
    border: none;
  }
</style>
  </head>
  <body>
<?php
include "database_connect.php";
?>
<form action="pending_scholar.php" method="post">
    <table>
      <tr>
        <td rowspan = "5" style="vertical-align : middle;text-align:center;">
          <table>
            <tr>
              <td>               
                Profile
              </td>
            </tr>
            <tr>
              <td>
                Dashboard
              </td>
            </tr>
            <td>
                Summary
              </td>
            </tr>
          </table>
        </td>
        <td>
        <input type = submit value = "Logout" formaction = "logout.php" >
        </td>
      </tr>
      <tr>
        <td>
          Pending Signups
        </td>
      </tr>

<?php
$query = "SELECT * FROM signup_verify";

$check = mysqli_query($conn,"SELECT * FROM signup_verify");

$checkrows = mysqli_num_rows($check);

$data = mysqli_fetch_array($check);

if(isset($_POST['Confirm']))
{
  $id = $data['id'];
  $confirm = mysqli_query($conn, "INSERT INTO tbl_studentdata (student_lname,student_fname,student_id,student_scholarship,student_gender,student_contact,student_address,guardian_contact)SELECT student_lname,student_fname,student_id,student_scholarship,student_gender,student_contact,student_address,guardian_contact
  FROM signup_verify WHERE id = '$id'");
	$lampscholar = mysqli_query($conn,"INSERT INTO user_lamp_scholar(user_name,student_id, user_email,hashed_password)
  SELECT user_name, student_id,student_email, hashed_password FROM signup_verify WHERE id='$id'");
    if($confirm && $lampscholar)
    {
        $drop = mysqli_query($conn, "DELETE FROM signup_verify WHERE id = '$id'");
        if($drop){
        mysqli_close($conn); // Close connection
        header("location:pending_scholar.php");
        exit;
        }
    }
}
if(isset($_POST['delete'])){
  $id = $data['id'];
  $decline = mysqli_query($conn,"DELETE FROM signup_verify WHERE id='$id'");
  if($decline){
    mysqli_close($conn); // Close connection
    header("location:pending_scholar.php");
    exit;
  }
}
?>
<?php
echo ' <tr>
<td>
<table border="1" >
      <tr> 
          <td> ID </td>
          <td> Last Name </td>
          <td> First Name </td>  
          <td> Student ID </td> 
          <td> Student Scholarship </td> 
          <td> Gender </td> 
          <td> Contact </td> 
          <td> Address </td> 
          <td> Guardian Contact </td>
          <td> Username </td>
          <td> Student Email </td>  
      </tr>';
      if($checkrows == 0) {
        echo "<tr><td colspan = '12' style='vertical-align : middle;text-align:center;'><p style='color:red'>Record Not Found</p></td></tr>";
        echo "</table>";
     }
     else {
      if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $student_lname = $row["student_lname"];
            $student_fname = $row["student_fname"];
            $student_id = $row["student_id"];
            $student_scholarship = $row["student_scholarship"];
            $student_gender = $row["student_gender"];
            $student_contact = $row["student_contact"];
            $student_address = $row["student_address"];
            $guardian_contact = $row["guardian_contact"];
            $username = $row["user_name"];
            $student_email = $row["student_email"];
            echo '<tr>
                      <td>'.$id.'</td> 
                      <td>'.$student_lname.'</td> 
                      <td>'.$student_fname.'</td> 
                      <td>'.$student_id.'</td> 
                      <td>'.$student_scholarship.'</td> 
                      <td>'.$student_gender.'</td> 
                      <td>'.$student_contact.'</td> 
                      <td>'.$student_address.'</td> 
                      <td>'.$guardian_contact.'</td>
                      <td>'.$username.'</td>
                      <td>'.$student_email.'</td>'?>
                      <td>
                        <button type="submit" name="Confirm" value="Confirm">
                          Confirm
                        </button>
                      </td>
                      <td>
                        <button type="submit" name="delete" value="delete">
                          Decline
                        </button>
                      </td>
                  <?php echo '</tr>';
        }
      
        echo "</table>";
        echo "</td>";
        echo "</tr>";
        $result->free();
      }
    }
?>
</table>
  </body>
  </form>
</html>