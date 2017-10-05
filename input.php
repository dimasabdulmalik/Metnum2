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
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true; 
    } else 
    if (decimal && (keychar == ".")) {
        return true; 
    } else return false; 
    }
</script>
<html>
<head>
<title>REGRESI LINIER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
  <form action="simpan.php" method="post" enctype="multipart/form-data" name="FMHS">
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#009999"><strong><font color="#FFFFFF">FORM INPUT DATA </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="113">JUMLAH DATA</td>
              <td width="11">:</td>
              <td width="237"><input name="nim" onkeypress="return hanyaAngka(event, false)" type="text"></td>
			  <td><input name="fok" type="submit" id="fok" value="GO"></td>
            </tr>
			<tr>
              <td width="500">*masukan angka dari 2-6</td>
            </tr>
        </table></td>
      </tr>
    </table>
  </form>
</body>
</html>