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
		.stu{
			padding-top : 20px;
		}
		table {
		  border-collapse: collapse;
		  width: 50%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr{
			background-color:black;
			}
		h2{
				color:black;
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
            <a href="">View Student</a>
        </div>
    </div>

    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);


$sql="select * from student_details";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
	
    echo "<table border='1' align='center'>";
	echo"<br><h2 align ='center'> Student details</h2>";
    while($row=$res->fetch_assoc())
    {  
		echo"<br>";
		echo "<tr>";
		echo '<td>'.$row['SID'].'</td>';
		echo '<td>'.$row['SNAME'].'</td>';
		echo '<td>'.$row['SPHONE'].'</td>';
		echo '<td>'.$row['SADDRESS'].'</td>';
		echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo '<h2 align="center">Record is empty...</h2>';
}

$conn->close();
?>
</body>
</html>