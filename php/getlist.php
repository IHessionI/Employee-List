<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "employees";
$dbhandle = mysqli_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
$selected = mysqli_select_db($dbhandle, "employees")
or die("Could not select examples");
$result = mysqli_query($dbhandle,"select * from employees;");
$json_response = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $row_array['firstname'] = $row['firstname'];
  $row_array['lastname'] = $row['lastname'];
  $row_array['address'] = $row['address'];
  array_push($json_response,$row_array);
}
print_r ($json_response)
?>
