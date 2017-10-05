<?php
session_start();
echo"Nilai n = ";
echo $_SESSION['nim'];
echo " </br>";
if($_SESSION['nim'] == 2){
	$x1            = $_POST['x1'];
	$y1            = $_POST['y1'];
	$x2            = $_POST['x2'];
	$y2            = $_POST['y2'];
	$kuadratx1 = $x1*$x1;
	$kuadraty1 = $y1*$y1;
	$kali1	   = $x1*$y1;
	$kuadratx2 = $x2*$x2;
	$kuadraty2 = $y2*$y2;
	$kali2     = $x2*$y2;
	$sigmax    = $x1+$x2;
	$sigmay    = $y1+$y2;
	$sigmax2   = $kuadratx1+$kuadratx2;
	$sigmay2   = $kuadraty1+$kuadraty2;   
	$sigmaxy   = $kali1+$kali2;
	$hasilsigmax2 = $sigmax*$sigmax;
	$m		   = (($_SESSION['nim']*$sigmaxy-$sigmax*$sigmay)/($_SESSION['nim']*$sigmax2 - $hasilsigmax2));
	$c         = (($sigmay*$sigmax2-$sigmax*$sigmaxy)/($_SESSION['nim']*$sigmax2-$hasilsigmax2));
	$y1ak      = $m*$x1+$c;
	$y2ak      = $m*$x2+$c;
	$eror1    = $x1-$y1ak;
	$eror2    = $x2-$y2ak;
	$sigmaeror	= $eror1+ $eror2;
	echo "Nilai m = $m";
	echo"</br>";
	echo "Nilai c = $c</br>";
	echo "f(x) = $m * x + $c</br>";
	
?>	
	<html>
	<body>
	<form method="post" action="input.php">
		<table border ="8">
		<tr>
			<td width="113">No</td>
			<td width="113">X</td>
			<td width="113">Y</td>
			<td width="113">Y'</td>
			<td width="113">X2</td>
			<td width="113">Y2</td>
			<td width="113">X.Y</td>
			<td width="113">ERROR</td>
		</tr>
		<tr>
			<td width="113">1</td>
			<td width="113"><?php echo $x1 ?></td>
			<td width="113"><?php echo $y1 ?></td>
			<td width="113"><?php echo $y1ak ?></td>
			<td width="113"><?php echo $kuadratx1?></td>
			<td width="113"><?php echo $kuadraty1?></td>
			<td width="113"><?php echo $kali1?></td>
			<td width="113"><?php echo abs($eror1)?></td>
		</tr>
		<tr>
			<td width="113">2</td>
			<td width="113"><?php echo $x2 ?></td>
			<td width="113"><?php echo $y2 ?></td>
			<td width="113"><?php echo $y2ak ?></td>
			<td width="113"><?php echo $kuadratx2?></td>
			<td width="113"><?php echo $kuadraty2?></td>
			<td width="113"><?php echo $kali2?></td>
			<td width="113"><?php echo abs($eror2)?></td>
		</tr>
		<tr>
			<td width="113">Sigma(Σ)</td>
			<td width="113"><?php echo $sigmax ?></td>
			<td width="113"><?php echo $sigmay ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo $sigmax2?></td>
			<td width="113"><?php echo $sigmay2?></td>
			<td width="113"><?php echo $sigmaxy?></td>
			<td width="113"><?php echo $sigmaeror?></td>
		</tr>
		<td width="113"></td>
			<td width="113"><?php echo "(X kuadrat) $hasilsigmax2" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="HOME"></td>
        </tr>
		</table>
	</form>
	</body>
</html>
<?php
}else if($_SESSION['nim'] == 3){
	$x1            = $_POST['x1'];
	$y1            = $_POST['y1'];
	$x2            = $_POST['x2'];
	$y2            = $_POST['y2'];
	$x3            = $_POST['x3'];
	$y3            = $_POST['y3'];
	$kuadratx1 = $x1*$x1;
	$kuadraty1 = $y1*$y1;
	$kali1	   = $x1*$y1;
	$kuadratx2 = $x2*$x2;
	$kuadraty2 = $y2*$y2;
	$kali2     = $x2*$y2;
	$kuadratx3 = $x3*$x3;
	$kuadraty3 = $y3*$y3;
	$kali3     = $x3*$y3;
	$sigmax    = $x1+$x2+$x3;
	$sigmay    = $y1+$y2+$y3;
	$sigmax2   = $kuadratx1+$kuadratx2+$kuadratx3;
	$sigmay2   = $kuadraty1+$kuadraty2+$kuadraty3;   
	$sigmaxy   = $kali1+$kali2+$kali3;
	$hasilsigmax2 = $sigmax*$sigmax;
	$m		   = (($_SESSION['nim']*$sigmaxy-$sigmax*$sigmay)/($_SESSION['nim']*$sigmax2 - $hasilsigmax2));
	$c         = (($sigmay*$sigmax2-$sigmax*$sigmaxy)/($_SESSION['nim']*$sigmax2-$hasilsigmax2));
	$y1ak      = $m*$x1+$c;
	$y2ak      = $m*$x2+$c;
	$y3ak      = $m*$x3+$c;
	$eror1    = $x1-$y1ak;
	$eror2    = $x2-$y2ak;
	$eror3    = $x3-$y3ak;
	$sigmaeror	= $eror1+ $eror2+ $eror3;
	echo "Nilai m = $m";
	echo"</br>";
	echo "Nilai c = $c</br>";
	echo "f(x) = $m * x + $c</br>";
	
?>	
	<html>
	<body>
	<form method="post" action="input.php">
		<table border ="8">
		<tr>
			<td width="113">No</td>
			<td width="113">X</td>
			<td width="113">Y</td>
			<td width="113">Y'</td>
			<td width="113">X2</td>
			<td width="113">Y2</td>
			<td width="113">X.Y</td>
			<td width="113">ERROR</td>
		</tr>
		<tr>
			<td width="113">1</td>
			<td width="113"><?php echo $x1 ?></td>
			<td width="113"><?php echo $y1 ?></td>
			<td width="113"><?php echo $y1ak ?></td>
			<td width="113"><?php echo $kuadratx1?></td>
			<td width="113"><?php echo $kuadraty1?></td>
			<td width="113"><?php echo $kali1?></td>
			<td width="113"><?php echo abs($eror1)?></td>
		</tr>
		<tr>
			<td width="113">2</td>
			<td width="113"><?php echo $x2 ?></td>
			<td width="113"><?php echo $y2 ?></td>
			<td width="113"><?php echo $y2ak ?></td>
			<td width="113"><?php echo $kuadratx2?></td>
			<td width="113"><?php echo $kuadraty2?></td>
			<td width="113"><?php echo $kali2?></td>
			<td width="113"><?php echo abs($eror2)?></td>
		</tr>
		<tr>
			<td width="113">3</td>
			<td width="113"><?php echo $x3 ?></td>
			<td width="113"><?php echo $y3 ?></td>
			<td width="113"><?php echo $y3ak ?></td>
			<td width="113"><?php echo $kuadratx3?></td>
			<td width="113"><?php echo $kuadraty3?></td>
			<td width="113"><?php echo $kali3?></td>
			<td width="113"><?php echo abs($eror3)?></td>
		</tr>
		<tr>
			<td width="113">Sigma(Σ)</td>
			<td width="113"><?php echo $sigmax ?></td>
			<td width="113"><?php echo $sigmay ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo $sigmax2?></td>
			<td width="113"><?php echo $sigmay2?></td>
			<td width="113"><?php echo $sigmaxy?></td>
			<td width="113"><?php echo $sigmaeror?></td>
		</tr>
		<td width="113"></td>
			<td width="113"><?php echo "(X kuadrat) $hasilsigmax2" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="HOME"></td>
        </tr>
		</table>
	</form>
	</body>
</html>
<?php
}else if($_SESSION['nim'] == 4){
	$x1            = $_POST['x1'];
	$y1            = $_POST['y1'];
	$x2            = $_POST['x2'];
	$y2            = $_POST['y2'];
	$x3            = $_POST['x3'];
	$y3            = $_POST['y3'];
	$x4            = $_POST['x4'];
	$y4            = $_POST['y4'];
	$kuadratx1 = $x1*$x1;
	$kuadraty1 = $y1*$y1;
	$kali1	   = $x1*$y1;
	$kuadratx2 = $x2*$x2;
	$kuadraty2 = $y2*$y2;
	$kali2     = $x2*$y2;
	$kuadratx3 = $x3*$x3;
	$kuadraty3 = $y3*$y3;
	$kali3     = $x3*$y3;
	$kuadratx4 = $x4*$x4;
	$kuadraty4 = $y4*$y4;
	$kali4     = $x4*$y4;
	$sigmax    = $x1+$x2+$x3+$x4;
	$sigmay    = $y1+$y2+$y3+$y4;
	$sigmax2   = $kuadratx1+$kuadratx2+$kuadratx3+$kuadratx4;
	$sigmay2   = $kuadraty1+$kuadraty2+$kuadraty3+$kuadraty4;   
	$sigmaxy   = $kali1+$kali2+$kali3+$kali4;
	$hasilsigmax2 = $sigmax*$sigmax;
	$m		   = (($_SESSION['nim']*$sigmaxy-$sigmax*$sigmay)/($_SESSION['nim']*$sigmax2 - $hasilsigmax2));
	$c         = (($sigmay*$sigmax2-$sigmax*$sigmaxy)/($_SESSION['nim']*$sigmax2-$hasilsigmax2));
	$y1ak      = $m*$x1+$c;
	$y2ak      = $m*$x2+$c;
	$y3ak      = $m*$x3+$c;
	$y4ak      = $m*$x4+$c;
	$eror1    = $x1-$y1ak;
	$eror2    = $x2-$y2ak;
	$eror3    = $x3-$y3ak;
	$eror4    = $x4-$y4ak;
	$sigmaeror	= $eror1+ $eror2+ $eror3 + $eror4;
	echo "Nilai m = $m";
	echo"</br>";
	echo "Nilai c = $c</br>";
	echo "f(x) = $m * x + $c</br>";
	
?>	
	<html>
	<body>
	<form method="post" action="input.php">
		<table border ="8">
		<tr>
			<td width="113">No</td>
			<td width="113">X</td>
			<td width="113">Y</td>
			<td width="113">Y'</td>
			<td width="113">X2</td>
			<td width="113">Y2</td>
			<td width="113">X.Y</td>
			<td width="113">ERROR</td>
		</tr>
		<tr>
			<td width="113">1</td>
			<td width="113"><?php echo $x1 ?></td>
			<td width="113"><?php echo $y1 ?></td>
			<td width="113"><?php echo $y1ak ?></td>
			<td width="113"><?php echo $kuadratx1?></td>
			<td width="113"><?php echo $kuadraty1?></td>
			<td width="113"><?php echo $kali1?></td>
			<td width="113"><?php echo abs($eror1)?></td>
		</tr>
		<tr>
			<td width="113">2</td>
			<td width="113"><?php echo $x2 ?></td>
			<td width="113"><?php echo $y2 ?></td>
			<td width="113"><?php echo $y2ak ?></td>
			<td width="113"><?php echo $kuadratx2?></td>
			<td width="113"><?php echo $kuadraty2?></td>
			<td width="113"><?php echo $kali2?></td>
			<td width="113"><?php echo abs($eror2)?></td>
		</tr>
		<tr>
			<td width="113">3</td>
			<td width="113"><?php echo $x3 ?></td>
			<td width="113"><?php echo $y3 ?></td>
			<td width="113"><?php echo $y3ak ?></td>
			<td width="113"><?php echo $kuadratx3?></td>
			<td width="113"><?php echo $kuadraty3?></td>
			<td width="113"><?php echo $kali3?></td>
			<td width="113"><?php echo abs($eror3)?></td>
		</tr>
		<tr>
			<td width="113">4</td>
			<td width="113"><?php echo $x4 ?></td>
			<td width="113"><?php echo $y4 ?></td>
			<td width="113"><?php echo $y4ak ?></td>
			<td width="113"><?php echo $kuadratx4?></td>
			<td width="113"><?php echo $kuadraty4?></td>
			<td width="113"><?php echo $kali4?></td>
			<td width="113"><?php echo abs($eror4)?></td>
		</tr>
		<tr>
			<td width="113">Sigma(Σ)</td>
			<td width="113"><?php echo $sigmax ?></td>
			<td width="113"><?php echo $sigmay ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo $sigmax2?></td>
			<td width="113"><?php echo $sigmay2?></td>
			<td width="113"><?php echo $sigmaxy?></td>
			<td width="113"><?php echo $sigmaeror?></td>
		</tr>
		<td width="113"></td>
			<td width="113"><?php echo "(X kuadrat) $hasilsigmax2" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="HOME"></td>
        </tr>
		</table>
	</form>
	</body>
</html>
<?php
}else if($_SESSION['nim'] == 5){
	$x1            = $_POST['x1'];
	$y1            = $_POST['y1'];
	$x2            = $_POST['x2'];
	$y2            = $_POST['y2'];
	$x3            = $_POST['x3'];
	$y3            = $_POST['y3'];
	$x4            = $_POST['x4'];
	$y4            = $_POST['y4'];
	$x5            = $_POST['x5'];
	$y5            = $_POST['y5'];
	$kuadratx1 = $x1*$x1;
	$kuadraty1 = $y1*$y1;
	$kali1	   = $x1*$y1;
	$kuadratx2 = $x2*$x2;
	$kuadraty2 = $y2*$y2;
	$kali2     = $x2*$y2;
	$kuadratx3 = $x3*$x3;
	$kuadraty3 = $y3*$y3;
	$kali3     = $x3*$y3;
	$kuadratx4 = $x4*$x4;
	$kuadraty4 = $y4*$y4;
	$kali4     = $x4*$y4;
	$kuadratx5 = $x5*$x5;
	$kuadraty5 = $y5*$y5;
	$kali5     = $x5*$y5;
	$sigmax    = $x1+$x2+$x3+$x4+$x5;
	$sigmay    = $y1+$y2+$y3+$y4+$y5;
	$sigmax2   = $kuadratx1+$kuadratx2+$kuadratx3+$kuadratx4+$kuadratx5;
	$sigmay2   = $kuadraty1+$kuadraty2+$kuadraty3+$kuadraty4+$kuadraty5;   
	$sigmaxy   = $kali1+$kali2+$kali3+$kali4+$kali5;
	$hasilsigmax2 = $sigmax*$sigmax;
	$m		   = (($_SESSION['nim']*$sigmaxy-$sigmax*$sigmay)/($_SESSION['nim']*$sigmax2 - $hasilsigmax2));
	$c         = (($sigmay*$sigmax2-$sigmax*$sigmaxy)/($_SESSION['nim']*$sigmax2-$hasilsigmax2));
	$y1ak      = $m*$x1+$c;
	$y2ak      = $m*$x2+$c;
	$y3ak      = $m*$x3+$c;
	$y4ak      = $m*$x4+$c;
	$y5ak      = $m*$x5+$c;
	$eror1    = $x1-$y1ak;
	$eror2    = $x2-$y2ak;
	$eror3    = $x3-$y3ak;
	$eror4    = $x4-$y4ak;
	$eror5    = $x5-$y5ak;
	$sigmaeror	= $eror1+ $eror2+ $eror3 + $eror4+ $eror5;
	echo "Nilai m = $m";
	echo"</br>";
	echo "Nilai c = $c</br>";
	echo "f(x) = $m * x + $c</br>";
	
?>	
	<html>
	<body>
	<form method="post" action="input.php">
		<table border ="8">
		<tr>
			<td width="113">No</td>
			<td width="113">X</td>
			<td width="113">Y</td>
			<td width="113">Y'</td>
			<td width="113">X2</td>
			<td width="113">Y2</td>
			<td width="113">X.Y</td>
			<td width="113">ERROR</td>
		</tr>
		<tr>
			<td width="113">1</td>
			<td width="113"><?php echo $x1 ?></td>
			<td width="113"><?php echo $y1 ?></td>
			<td width="113"><?php echo $y1ak ?></td>
			<td width="113"><?php echo $kuadratx1?></td>
			<td width="113"><?php echo $kuadraty1?></td>
			<td width="113"><?php echo $kali1?></td>
			<td width="113"><?php echo abs($eror1)?></td>
		</tr>
		<tr>
			<td width="113">2</td>
			<td width="113"><?php echo $x2 ?></td>
			<td width="113"><?php echo $y2 ?></td>
			<td width="113"><?php echo $y2ak ?></td>
			<td width="113"><?php echo $kuadratx2?></td>
			<td width="113"><?php echo $kuadraty2?></td>
			<td width="113"><?php echo $kali2?></td>
			<td width="113"><?php echo abs($eror2)?></td>
		</tr>
		<tr>
			<td width="113">3</td>
			<td width="113"><?php echo $x3 ?></td>
			<td width="113"><?php echo $y3 ?></td>
			<td width="113"><?php echo $y3ak ?></td>
			<td width="113"><?php echo $kuadratx3?></td>
			<td width="113"><?php echo $kuadraty3?></td>
			<td width="113"><?php echo $kali3?></td>
			<td width="113"><?php echo abs($eror3)?></td>
		</tr>
		<tr>
			<td width="113">4</td>
			<td width="113"><?php echo $x4 ?></td>
			<td width="113"><?php echo $y4 ?></td>
			<td width="113"><?php echo $y4ak ?></td>
			<td width="113"><?php echo $kuadratx4?></td>
			<td width="113"><?php echo $kuadraty4?></td>
			<td width="113"><?php echo $kali4?></td>
			<td width="113"><?php echo abs($eror4)?></td>
		</tr>
		<tr>
			<td width="113">5</td>
			<td width="113"><?php echo $x5 ?></td>
			<td width="113"><?php echo $y5 ?></td>
			<td width="113"><?php echo $y5ak ?></td>
			<td width="113"><?php echo $kuadratx5?></td>
			<td width="113"><?php echo $kuadraty5?></td>
			<td width="113"><?php echo $kali5?></td>
			<td width="113"><?php echo abs($eror5)?></td>
		</tr>
		<tr>
			<td width="113">Sigma(Σ)</td>
			<td width="113"><?php echo $sigmax ?></td>
			<td width="113"><?php echo $sigmay ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo $sigmax2?></td>
			<td width="113"><?php echo $sigmay2?></td>
			<td width="113"><?php echo $sigmaxy?></td>
			<td width="113"><?php echo $sigmaeror?></td>
		</tr>
		<td width="113"></td>
			<td width="113"><?php echo "(X kuadrat) $hasilsigmax2" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="HOME"></td>
        </tr>
		</table>
	</form>
	</body>
</html>
<?php
}else if($_SESSION['nim'] == 6){
	$x1            = $_POST['x1'];
	$y1            = $_POST['y1'];
	$x2            = $_POST['x2'];
	$y2            = $_POST['y2'];
	$x3            = $_POST['x3'];
	$y3            = $_POST['y3'];
	$x4            = $_POST['x4'];
	$y4            = $_POST['y4'];
	$x5            = $_POST['x5'];
	$y5            = $_POST['y5'];
	$x6            = $_POST['x6'];
	$y6            = $_POST['y6'];
	$kuadratx1 = $x1*$x1;
	$kuadraty1 = $y1*$y1;
	$kali1	   = $x1*$y1;
	$kuadratx2 = $x2*$x2;
	$kuadraty2 = $y2*$y2;
	$kali2     = $x2*$y2;
	$kuadratx3 = $x3*$x3;
	$kuadraty3 = $y3*$y3;
	$kali3     = $x3*$y3;
	$kuadratx4 = $x4*$x4;
	$kuadraty4 = $y4*$y4;
	$kali4     = $x4*$y4;
	$kuadratx5 = $x5*$x5;
	$kuadraty5 = $y5*$y5;
	$kali5     = $x5*$y5;
	$kuadratx6 = $x6*$x6;
	$kuadraty6 = $y6*$y6;
	$kali6     = $x6*$y6;
	$sigmax    = $x1+$x2+$x3+$x4+$x5+$x6;
	$sigmay    = $y1+$y2+$y3+$y4+$y5+$y6;
	$sigmax2   = $kuadratx1+$kuadratx2+$kuadratx3+$kuadratx4+$kuadratx5+$kuadratx6;
	$sigmay2   = $kuadraty1+$kuadraty2+$kuadraty3+$kuadraty4+$kuadraty5+$kuadraty6;   
	$sigmaxy   = $kali1+$kali2+$kali3+$kali4+$kali5+$kali6;
	$hasilsigmax2 = $sigmax*$sigmax;
	$m		   = (($_SESSION['nim']*$sigmaxy-$sigmax*$sigmay)/($_SESSION['nim']*$sigmax2 - $hasilsigmax2));
	$c         = (($sigmay*$sigmax2-$sigmax*$sigmaxy)/($_SESSION['nim']*$sigmax2-$hasilsigmax2));
	$y1ak      = $m*$x1+$c;
	$y2ak      = $m*$x2+$c;
	$y3ak      = $m*$x3+$c;
	$y4ak      = $m*$x4+$c;
	$y5ak      = $m*$x5+$c;
	$y6ak      = $m*$x6+$c;
	$eror1    = $x1-$y1ak;
	$eror2    = $x2-$y2ak;
	$eror3    = $x3-$y3ak;
	$eror4    = $x4-$y4ak;
	$eror5    = $x5-$y5ak;
	$eror6    = $x6-$y6ak;
	$sigmaeror	= $eror1+ $eror2+ $eror3 + $eror4+ $eror5+ $eror6;
	echo "Nilai m = $m";
	echo"</br>";
	echo "Nilai c = $c</br>";
	echo "f(x) = $m * x + $c</br>";
	
?>	
	<html>
	<body>
	<form method="post" action="input.php">
		<table border ="8">
		<tr>
			<td width="113">No</td>
			<td width="113">X</td>
			<td width="113">Y</td>
			<td width="113">Y'</td>
			<td width="113">X2</td>
			<td width="113">Y2</td>
			<td width="113">X.Y</td>
			<td width="113">ERROR</td>
		</tr>
		<tr>
			<td width="113">1</td>
			<td width="113"><?php echo $x1 ?></td>
			<td width="113"><?php echo $y1 ?></td>
			<td width="113"><?php echo $y1ak ?></td>
			<td width="113"><?php echo $kuadratx1?></td>
			<td width="113"><?php echo $kuadraty1?></td>
			<td width="113"><?php echo $kali1?></td>
			<td width="113"><?php echo abs($eror1)?></td>
		</tr>
		<tr>
			<td width="113">2</td>
			<td width="113"><?php echo $x2 ?></td>
			<td width="113"><?php echo $y2 ?></td>
			<td width="113"><?php echo $y2ak ?></td>
			<td width="113"><?php echo $kuadratx2?></td>
			<td width="113"><?php echo $kuadraty2?></td>
			<td width="113"><?php echo $kali2?></td>
			<td width="113"><?php echo abs($eror2)?></td>
		</tr>
		<tr>
			<td width="113">3</td>
			<td width="113"><?php echo $x3 ?></td>
			<td width="113"><?php echo $y3 ?></td>
			<td width="113"><?php echo $y3ak ?></td>
			<td width="113"><?php echo $kuadratx3?></td>
			<td width="113"><?php echo $kuadraty3?></td>
			<td width="113"><?php echo $kali3?></td>
			<td width="113"><?php echo abs($eror3)?></td>
		</tr>
		<tr>
			<td width="113">4</td>
			<td width="113"><?php echo $x4 ?></td>
			<td width="113"><?php echo $y4 ?></td>
			<td width="113"><?php echo $y4ak ?></td>
			<td width="113"><?php echo $kuadratx4?></td>
			<td width="113"><?php echo $kuadraty4?></td>
			<td width="113"><?php echo $kali4?></td>
			<td width="113"><?php echo abs($eror4)?></td>
		</tr>
		<tr>
			<td width="113">5</td>
			<td width="113"><?php echo $x5 ?></td>
			<td width="113"><?php echo $y5 ?></td>
			<td width="113"><?php echo $y5ak ?></td>
			<td width="113"><?php echo $kuadratx5?></td>
			<td width="113"><?php echo $kuadraty5?></td>
			<td width="113"><?php echo $kali5?></td>
			<td width="113"><?php echo abs($eror5)?></td>
		</tr>
		<tr>
			<td width="113">6</td>
			<td width="113"><?php echo $x6 ?></td>
			<td width="113"><?php echo $y6 ?></td>
			<td width="113"><?php echo $y6ak ?></td>
			<td width="113"><?php echo $kuadratx6?></td>
			<td width="113"><?php echo $kuadraty6?></td>
			<td width="113"><?php echo $kali6?></td>
			<td width="113"><?php echo abs($eror6)?></td>
		</tr>
		<tr>
			<td width="113">Sigma(Σ)</td>
			<td width="113"><?php echo $sigmax ?></td>
			<td width="113"><?php echo $sigmay ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo $sigmax2?></td>
			<td width="113"><?php echo $sigmay2?></td>
			<td width="113"><?php echo $sigmaxy?></td>
			<td width="113"><?php echo $sigmaeror?></td>
		</tr>
		<td width="113"></td>
			<td width="113"><?php echo "(X kuadrat) $hasilsigmax2" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo "" ?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
			<td width="113"><?php echo ""?></td>
		<tr>
              <td colspan="1" align="center"><input name="fok" type="submit" id="fok" value="HOME"></td>
        </tr>
		</table>
	</form>
	</body>
</html>
<?php
}
?>