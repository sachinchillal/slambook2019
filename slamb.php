<?php
	//include("slam.html");
	//include("conn.php");
	$servername="";
	$username="";
	$password="";
	$dbname="";
	//creat connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	//check connection
	if(!$conn->connect_error) {
		echo ".";
	} else {
		echo "error";
		die("Try again! ".mysqli_connect_error());
	}
	if(!empty($_POST['view'])) {
		//isset($_POST['view']);
		$f=$_POST['f'];
		$t=$_POST['t'];
		$d=$_POST['dress'];
		$i=$_POST['i'];
		$e=$_POST['expect'];

		$o=$_POST['opinion'];
		$l=$_POST['like'];
		$dl=$_POST['dlike'];

		$n=$_POST['name'];
		$c=$_POST['crime'];
		$lo=$_POST['love'];

		$g=$_POST['gift'];
		$w=$_POST['word'];
		$p=$_POST['propo'];

		$b1=$_POST['b1'];
		$b2=$_POST['b2'];
		$b3=$_POST['b3'];

		$g1=$_POST['g1'];
		$g2=$_POST['g2'];
		$g3=$_POST['g3'];
		//include("conn.php");
		$sql="INSERT INTO slam2k19(f,t,dress,i,expect,opinion,llike,dlike,name,crime,love,gift,word,propo,b1,b2,b3,g1,g2,g3) values('$f','$t','$d','$i','$e','$o','$l','$dl','$n','$c','$lo','$g','$w','$p','$b1','$b2','$b3','$g1','$g2','$g3')";
		$result=$conn->query($sql);
		if ($result) {
			echo " , ";
    	include("show.php");
		} else {
			echo " Please Fill again !";
		}
	}
?>
