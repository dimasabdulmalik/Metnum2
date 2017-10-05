<script language="javascript">
    function hanyaAngka(e, decimal) { 
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
    
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else 
    if ((("023456789").indexOf(keychar) > -1)) {
        return true; 
    } else 
    if (decimal && (keychar == ".")) {
        return true; 
    } else return false; 
    }
</script>
<?php
session_start();
$nim            = $_POST['nim'];
if ($nim == 1)
{
	$_SESSION['nim'] = 1;
	?>
	<html>
	<body>
	<form method="post" action="hitung.php">
	<table>
		<tr>
              <td>X1 : </td><td><input name="x1" type="text"></td>
			  <td>Y1 : </td><td><input name="y1" type="text"></td>
		</tr>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="OK"></td>
        </tr>
	</table>
	</form>
	</body>
	</html>
   <?php
} else if($nim == 2){
	$_SESSION['nim'] = 2;
	?>
	<html>
	<body>
	<form method="post" action="hitung.php">
	<table>
		<tr>
              <td>X1 : </td><td><input name="x1" type="text"></td>
			  <td>Y1 : </td><td><input name="y1" type="text"></td>
		</tr>
		<tr>
              <td>X2 : </td><td><input name="x2" type="text"></td>
			  <td>Y2 : </td><td><input name="y2" type="text"></td>
		</tr>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="OK"></td>
        </tr>
	</table>
	</form>
	</body>
	</html>
   <?php
}else if($nim == 3){
	$_SESSION['nim'] = 3;
	?>
	<html>
	<body>
	<form method="post" action="hitung.php">
	<table>
		<tr>
              <td>X1 : </td><td><input name="x1" type="text"></td>
			  <td>Y1 : </td><td><input name="y1" type="text"></td>
		</tr>
		<tr>
              <td>X2 : </td><td><input name="x2" type="text"></td>
			  <td>Y2 : </td><td><input name="y2" type="text"></td>
		</tr>
		<tr>
              <td>X3 : </td><td><input name="x3" type="text"></td>
			  <td>Y3 : </td><td><input name="y3" type="text"></td>
		</tr>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="OK"></td>
        </tr>
	</table>
	</form>
	</body>
	</html>
   <?php
} else if($nim == 4){
	$_SESSION['nim'] = 4;
	?>
	<html>
	<body>
	<form method="post" action="hitung.php">
	<table>
		<tr>
              <td>X1 : </td><td><input name="x1" type="text"></td>
			  <td>Y1 : </td><td><input name="y1" type="text"></td>
		</tr>
		<tr>
              <td>X2 : </td><td><input name="x2" type="text"></td>
			  <td>Y2 : </td><td><input name="y2" type="text"></td>
		</tr>
		<tr>
              <td>X3 : </td><td><input name="x3" type="text"></td>
			  <td>Y3 : </td><td><input name="y3" type="text"></td>
		</tr>
		<tr>
              <td>X4 : </td><td><input name="x4" type="text"></td>
			  <td>Y4 : </td><td><input name="y4" type="text"></td>
		</tr>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="OK"></td>
        </tr>
	</table>
	</form>
	</body>
	</html>
   <?php
} else if($nim == 5){
	$_SESSION['nim'] = 5;
	?>
	<html>
	<body>
	<form method="post" action="hitung.php">
	<table>
		<tr>
              <td>X1 : </td><td><input name="x1" type="text"></td>
			  <td>Y1 : </td><td><input name="y1" type="text"></td>
		</tr>
		<tr>
              <td>X2 : </td><td><input name="x2" type="text"></td>
			  <td>Y2 : </td><td><input name="y2" type="text"></td>
		</tr>
		<tr>
              <td>X3 : </td><td><input name="x3" type="text"></td>
			  <td>Y3 : </td><td><input name="y3" type="text"></td>
		</tr>
		<tr>
              <td>X4 : </td><td><input name="x4" type="text"></td>
			  <td>Y4 : </td><td><input name="y4" type="text"></td>
		</tr>
		<tr>
              <td>X5 : </td><td><input name="x5" type="text"></td>
			  <td>Y5 : </td><td><input name="y5" type="text"></td>
		</tr>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="OK"></td>
        </tr>
	</table>
	</form>
	</body>
	</html>
   <?php
} else if($nim == 6){
	$_SESSION['nim'] = 6;
	?>
	
	<html>
	<body>
	<form method="post" action="hitung.php">
	<table>
		<tr>
              <td>X1 : </td><td><input name="x1" type="text"></td>
			  <td>Y1 : </td><td><input name="y1" type="text"></td>
		</tr>
		<tr>
              <td>X2 : </td><td><input name="x2" type="text"></td>
			  <td>Y2 : </td><td><input name="y2" type="text"></td>
		</tr>
		<tr>
              <td>X3 : </td><td><input name="x3" type="text"></td>
			  <td>Y3 : </td><td><input name="y3" type="text"></td>
		</tr>
		<tr>
              <td>X4 : </td><td><input name="x4" type="text"></td>
			  <td>Y4 : </td><td><input name="y4" type="text"></td>
		</tr>
		<tr>
              <td>X5 : </td><td><input name="x5" type="text"></td>
			  <td>Y5 : </td><td><input name="y5" type="text"></td>
		</tr>
		<tr>
              <td>X6 : </td><td><input name="x6" type="text"></td>
			  <td>Y6 : </td><td><input name="y6" type="text"></td>
		</tr>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="OK"></td>
        </tr>
	</table>
	</form>
	</body>
	</html>
   <?php
}
?>