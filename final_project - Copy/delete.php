<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: white;

        }
		#nav{
			background-color: black;
			display: flex;
			justify-content: space-evenly;
			height : 30px;	
			margin-left:20px;
			margin-right:20px;
			padding-top:10px;
			padding-right:10px;
		}
		body {
		  background-image: url('https://img.freepik.com/free-photo/pieces-blue-stationery_23-2148169528.jpg');
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-size: cover;
		  color: #FFFFFF;
		}
        #hd {
            background-color: ;
            color: black;
        }
    </style>
</head>

<body>
    <div id="hd">
        <h1 align = "center" > Student Database
            <hr>
        </h1>

        <div id="nav">
            <a href="home.html">Home</a>
            <a href="newstudent.html">New Student</a>
            <a href="modify.html">Modify Student</a>
            <a href="delete.html">Remove Student</a>
            <a href="read.php">View Student</a>
        </div>
    </div>

<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db='student';

	$conn=new mysqli($host,$user,$pass,$db);


	$sid=$_POST['sid'];

	$sql="delete from student_details where sid='$sid'";
	$res=$conn->query($sql);
	if($res==TRUE)
	{
		 echo'<h3 align="center">
	Student details deleted successfully!!!!
	</h3>';
	}
	else
	{
		echo 'Error...';
	}

	$conn->close();

?>
</body>

</html>