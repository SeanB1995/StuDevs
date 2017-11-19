<?php


$a = "CCC1111";


include_once 'lib/header.php';

$statement = $conn->prepare("SELECT * FROM company WHERE acc_ref=?");
$statement->bind_param("s", $accountRefPrep);//this must be "s" !

$accountRefPrep = $a;
//end of prepared statement
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();

$image = $row['profile_pic'];


?>

<html>
<head><title>Test</title></head>
<body>
<?php

echo '<img src="data:image/jpeg;base64,'.base64_encode($image->load()) .'" />';

?>
</body>
</html>