<?php
include ('links.php'); 
include('connection.php');
$sql = "SELECT * FROM app";
$result = mysqli_query($con,$sql);
echo "<table class='table'>
	    <tr>
	        <th>id</th>
	        <th>name</th>
	        <th>number</th>
	        <th>city</th>
            <th>service</th>
            <th>address</th>
            <th>datetime</th>
            <th>sucess</th>
            <th>pending</th>
            <th>cancel</th>
	    </tr>
";
if($result->num_rows>0)
{
	while ($row=mysqli_fetch_array($result)) 
	{
		echo "<tr align=''>
			      <td> $row[id] </td>
			      <td> $row[name] </td>
			      <td> $row[number] </td>
			      <td> $row[city] </td>
                  <td> $row[service] </td>
                  <td> $row[address] </td>
                  <td> $row[datetime] </td>
    <td><a href='pending.php?idth=<?php echo $row[id]; ?>'>Success</a></td>
    <td><a href='delete.php?idth=<?php echo $row[id]; ?>'>Pending</a></td>
    <td> <button class='delete-btn' data-id='$row[id]'>Delete</button></td>
    </tr>
		";
	}
}
else
{
	echo "No Result Found";
}
echo "</table>";
?>