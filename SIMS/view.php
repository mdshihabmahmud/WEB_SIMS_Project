<?php
include("conn.php");
$query = "SELECT * FROM `tblstudent` ";
$data = mysqli_query($conn,$query);
?>
<table border="1" width="1000px;">
<tr>
		<th>Name</th>
		<th>ID</th>
		<th>Department</th>
        <th>Batch</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Picture</th>
</tr>
<?php
while($row = mysqli_fetch_array($data))
{
	echo "
	<tr>
		<td>$row[sname]</td>
		<td>$row[id]</td>
		<td>$row[dept]</td>
        <td>$row[batch]</td>
		<td>$row[email]</td>
		<td>$row[contact]</td>
		<td>$row[picture]</td>
	</tr>
	";
	
}
?>


