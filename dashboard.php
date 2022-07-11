<!--
  Displays dashboard
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
</style>
  </head>
  <body>
  <form>
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
          &nbsp;
        </td>
      </tr>
      <tr>
        <td>
          Dashboard
        </td>
      </tr>
<tr>
  <td>
<table>
<tr>
  <td>
    <a href="academic_scholar.php">
    Academic Scholar
    </a>
  </td>
  <td>
    <a href="clerical_assistant.php">
    Clerical Assistant
    </a>
  </td>
  <td>
    <a href="febres.php">
    FEBRES
    </a>
  </td>
  <td>
    <a href="maintenance_assistant.php">
    Maintenance Assistant
    </a>
  </td>
  <td>
  <a href="athlete.php">
    Athletes
  </a>
  </td>
</tr>
<tr>
  <td>
  <a href="alumni.php">
    ALUMNI
  </a>
  </td>
</tr>
<tr>
  <td>
  <a href="pending_scholar.php">
    PENDING
  </a>
  </td>
</tr>
</table>
</td>
</tr>
</table>
</form>
  </body>

</html>