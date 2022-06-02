<!--
  Displays all academic scholars
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
include "dashboard_connect.php";
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
          Academic Scholar
        </td>
      </tr>

<?php
$query = "SELECT * FROM tblsample WHERE fldscholar = 'Academic Scholar'";

$check = mysqli_query($mysqli,"SELECT * FROM tblsample WHERE fldscholar ='Academic Scholar'");

$checkrows = mysqli_num_rows($check);

echo ' <tr>
<td>
<table border="1" >
      <tr>
          <td> # </td> 
          <td> Student No. </td> 
          <td> Name </td> 
          <td> Scholarship </td> 
      </tr>';
      if($checkrows == 0) {
        echo "<tr><td colspan = '6' style='vertical-align : middle;text-align:center;'><p style='color:red'>Record Not Found</p></td></tr>";
        echo "</table>";
     }
     else {
      if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $fldindex = $row["fldindex"];
            $fldstudentno = $row["fldstudentno"];
            $fldname = $row["fldname"];
            $fldscholar = $row["fldscholar"];
            echo '<tr> 
                      <td>'.$fldindex.'</td> 
                      <td>'.$fldstudentno.'</td> 
                      <td>'.$fldname.'</td> 
                      <td>'.$fldscholar.'</td> 
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