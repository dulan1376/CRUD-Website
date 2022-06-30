<!--
  Displays all athlete
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
          &nbsp;
        </td>
      </tr>
      <tr>
        <td>
          Athlete
        </td>
      </tr>

<?php
$query = "SELECT * FROM tbl_studentdata WHERE student_scholarship = 'Athlete'";

$check = mysqli_query($conn,"SELECT * FROM tbl_studentdata WHERE student_scholarship ='Athlete'");

$checkrows = mysqli_num_rows($check);

echo ' <tr>
<td>
<table border="1" >
      <tr>
          <td> First Name </td> 
          <td> Last Name </td> 
          <td> Student ID </td> 
          <td> Student Scholarship </td> 
          <td> Gender </td> 
          <td> Contact </td> 
          <td> Address </td> 
          <td> Guardian Contact </td> 
      </tr>';
      if($checkrows == 0) {
        echo "<tr><td colspan = '6' style='vertical-align : middle;text-align:center;'><p style='color:red'>Record Not Found</p></td></tr>";
        echo "</table>";
     }
     else {
      if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $student_fname = $row["student_fname"];
            $student_lname = $row["student_lname"];
            $student_id = $row["student_id"];
            $student_scholarship = $row["student_scholarship"];
            $student_gender = $row["student_gender"];
            $student_contact = $row["student_contact"];
            $student_address = $row["student_address"];
            $guardian_contact = $row["guardian_contact"];
            echo '<tr> 
                      <td>'.$student_fname.'</td> 
                      <td>'.$student_lname.'</td> 
                      <td>'.$student_id.'</td> 
                      <td>'.$student_scholarship.'</td> 
                      <td>'.$student_gender.'</td> 
                      <td>'.$student_contact.'</td> 
                      <td>'.$student_address.'</td> 
                      <td>'.$guardian_contact.'</td> 
                  </tr>';
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

</html>