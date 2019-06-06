<?php
function getMountainById($id){
include 'connect.php';

$sql = "select * from $usertable where id = ".$id ;
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)) {
			$mountaintxt = "<h4>".$row[1]."</h4><img src='".$row[2]."'></p><p>".$row[4]."</p><p><b>Region: </b>".$row[5].".</p><p><b>Height:</b> ".$row[6]." Metres.</p>";
			
}


return json_encode($mountaintxt);

}
?>