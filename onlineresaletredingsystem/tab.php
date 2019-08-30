<?php
include 'connection.php';
$query="select * from product2 limit 0,3";
$query1=mysql_query($query);
while($row=mysql_fetch_array($query1))
{
?>
<table>
    <tr>
        <td><a class="img1" href="demo3.php?code=<?php echo $row['id'];?>"><img src="image1/<?php echo $row['image1'];?>" height="300" width="200"></a>
	</td>
    </tr>
	
</table>
<table>
    <tr>
        <td><a class="img1" href="demo3.php?code=<?php echo $row['id'];?>"><img src="image1/<?php echo $row['image1'];?>" height="300" width="200"></a>
	</td>
    </tr>
	
</table>
<?php
}
?>