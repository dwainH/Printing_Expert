<?php
$sql = "SELECT price FROM service WHERE serviceName='Poster Printing'";
$result = mysqli_query($conn,$sql);
$rowPricePoster=mysqli_fetch_row($result);



?>