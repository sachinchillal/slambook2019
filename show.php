<!DOCTYPE>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
  <style>
    .botton {
      position: relative;
      background-color: #4CAF50;
      border: none;
      border: 1px solid #000; /* Red */
      font-size: 20px;
      color: #FFFFFF;
      padding: 10px;
      height:30px;
      width: 250px;
      text-align: center;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      text-decoration: none;
      overflow: hidden;
      cursor: pointer;
      background:url(download-to-storage-drive.png) no-repeat 5px center;
      background-color: #4CAF50;
    }
    .bottun {
    	background:url(visibility.png) no-repeat 5px center;
    	position: relative;
  	  padding: 10px;
      background-color: #C4C4C4; /* Blue */
      border: 1px solid #f44336; /* Red */
      font-size: 20px;
      height:30px;
      width: 200px;
      text-align: center;
    }
    .botton:hover {
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      background-color: #FFA500; /* Green */
      color: black;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    .bottun:hover {
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      background-color: #D65075; /* Green */
      color: white;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }
    .botton:after {
      content: "";
      background: #90EE90;
      display: block;
      position: absolute;
      padding-top: 1%;
      padding-left: 1%;
      margin-left: -20px!;//important;
      margin-top: -120%;
      opacity: 0;
      transition: all 0.8s;
    }
    .botton:active:after {
      padding: 0;
      margin: 0;
      opacity: 1;
      transition: 0s;
    }
  </style>
</head>
<body>
  <div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; width: 500px; padding-left: 25px; padding-top: 10px;">
    <strong style=color:red><b>SLAM BOOK</b></strong><hr/>
    <?php
      if(!empty($_POST['view'])) {
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

    		echo "<span style=color:brown>FROM : </span>","<b>",$f,"</b>","&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;","<span style=color:brown>TO : </span>","<b>",$t,"</b>","<br>";
    		echo "<span style=color:black>__________________________________________________________</span><br><br>";
    		echo "> Which Colour Dress Suites Me? ","<b style=color:orange>",$d,"</b><br>";
    		echo "> What I am to You? ","<b style=color:orange>",$i,"</b><br>";
    		echo "> What You are Expecting from Me? ","<b style=color:orange>",$e,"</b><br>";

    		echo "> What is your Opinion on Me? ","<b style=color:navy>",$o,"</b><br>";
    		echo "> What you like in me? ","<b style=color:navy>",$l,"</b><br>";
    		echo "> What You Don't Like in Me? ","<b style=color:navy>",$dl,"</b><br>";

    		echo "> What's My Name in Your Mobile? ","<b style=color:purple>",$n,"</b><br>";
    		echo "> If I'm in Jail.. What Crime I would have Done you Think? ","<b style=color:purple>",$c,"</b><br>";
    		echo "> I LOVE YOU..! what is your answer? ","<b style=color:purple>",$lo,"</b><br>";

    		echo "> What's Your Gift on My Marrige? ","<b style=color:maroon>",$g,"</b><br>";
    		echo "> Today is the Last day of My Life What will be Your Last words for Me? ","<b style=color:maroon>",$w,"</b><br>";
    		echo "> How many boys/girls Proposed You? ","<b style=color:maroon>",$p,"</b><br>";

    		echo "> Your Top 3 Friends?<br>";
    		echo "> BOYS : <br>";
    		echo "1.Friend : ","<b style=color:red>",$b1,"</b><br>";
    		echo "2.Friend : ","<b style=color:red>",$b2,"</b><br>";
    		echo "3.Friend : ","<b style=color:red>",$b3,"</b><br>";

    		echo "> GIRLS : <br>";
    		echo "1.Friend : ","<b style=color:blue>",$g1,"</b><br>";
    		echo "2.Friend : ","<b style=color:blue>",$g2,"</b><br>";
    		echo "3.Friend : ","<b style=color:blue>",$g3,"</b><br>";
    		echo "<br>";
    		echo "<span style=color:black>**********************************************************</span><br>";
      }
       //include("slamb.php");
    ?>
  </div>
  <br><br>
  <input id="btn-Preview-Image" type="button" value="Preview" class="bottun" />
  <a id="btn-Convert-Html2Image" href="#" class="botton"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Download &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php" class="refr" style="background-color:#C6F1FF;"> + Create New</a> <br>
  <p style="background-color:#FFA500;width:530px;">&nbsp;&nbsp; Before Downloading the Image click on Preview button.</p>
  <br/>
  <h3>Preview :</h3>
  <div id="previewImage"></div>

  <script>
    $(document).ready(function() {
      var element = $("#html-content-holder"); // global variable
      var getCanvas; // global variable
      $("#btn-Preview-Image").on('click', function () {
        html2canvas(element, {
          onrendered: function (canvas) {
            $("#previewImage").append(canvas);
            getCanvas = canvas;
          }
        });
      });
      $("#btn-Convert-Html2Image").on('click', function () {
        var imgageData = getCanvas.toDataURL("image/png");
        // Now browser starts downloading it instead of just showing it
        var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
        $("#btn-Convert-Html2Image").attr("download", "your_slam_page.png").attr("href", newData);
      });
    });
  </script>
  </body>
</html>
