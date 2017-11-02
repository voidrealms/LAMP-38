<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//interfaces
interface iPerson
{
	public function SayName();
}

interface iEmployee extends iPerson
{
	public function SayID();
}

class Manager implements iEmployee
{
	public function SayName()
	{
		echo "My name is Bryan<br>";
	}
	
	public function SayID()
	{
		
	}
}

$emp = new Manager();
$emp->SayName();

?>

</body>
</html>
