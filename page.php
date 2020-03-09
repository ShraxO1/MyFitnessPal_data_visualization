<?php
include("csv.php");
$csv = new csv();
if ( isset($_POST['sub'])) {
	var_dump($_FILES['file']);
	$csv->import($_FILES['file']['tmp_name']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CSV</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="sub" value="Import">
</form>
<button onclick="window.location.href = 'localhost:3000/dashboard/new?tab=visualization&orgId=1&from=14520a07054789&to=1480856011650&fullscreen&edit&panelId=2';">Visualise</button>
</body>
</html>