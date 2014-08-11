Course Name:
<select multiple>
<?php
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('ftfl',$connect);
$query = "select title from courses";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<option value=".$row['title'].">".$row['title']."</option>";
}
?>
</select>