<?
require('config.php');
$representante=$_POST['representante'];
$rvt_dos=$_POST['rvt'];
$nombre=$_POST['nombre'];
$nom_clie=$_POST['nom'];
$numero=$_POST['numero'];
$cas=$_POST['cas'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$fecha=$_POST['fecha'];
$fecha_dia=date("d-m-Y");
$corregir=$_POST['corregir'];
$perfil=$_POST['perfil'];
$cas_pendiente=$cas;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Procesa Consulta</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 <script language="JavaScript" type="text/javascript">// buscar en la pagina
var NS4 = (document.layers); 
var IE4 = (document.all);
var win = window;    // Con frames usar top.nombre.window;
var n   = 0;
function findInPage(str) {
  var txt, i, found;
  if (str == "")
    return false;
  // Find next occurance of the given string on the page, wrap around to the
  // start of the page if necessary.
  if (NS4) {
    // Look for match starting at the current point. If not found, rewind
    // back to the first match.
    if (!win.find(str))
      while(win.find(str, false, true))
        n++;
    else
      n++;
    // If not found in either direction, give message.
    if (n == 0)
      alert("No Encontrado.");
  }
  if (IE4) {
    txt = win.document.body.createTextRange();
    // Find the nth match from the top of the page.
    for (i = 0; i <= n && (found = txt.findText(str)) != false; i++) {
      txt.moveStart("character", 1);
      txt.moveEnd("textedit");
    }
    // If found, mark it and scroll it into view.
    if (found) {
      txt.moveStart("character", -1);
      txt.findText(str);
      txt.select();
      txt.scrollIntoView();
      n++;
    }
    // Otherwise, start over at the top of the page and find first match.
    else {
      if (n > 0) {
        n = 0;
        findInPage(str);
      }
      // Not found anywhere, give message.
      else
        alert("No Encontrado.");
    }
  }
  return false;
}</script>
<!-----------mensaje de consulta sin parametros----------->
<script>
mes=new Array();mes[0]=-1;mes[1]=-4;mes[2]=-7;mes[3]=-10;mes[4]=-7;mes[5]=-4;mes[6]=-1;num=0;num2=0;txt="";function jump0(){if(message.length > 6){for(i=0;i != message.length;i++){txt=txt+"<span style='position:relative;' id='n"+i+"'>"+message.charAt(i)+"</span>"};jump.innerHTML=txt;txt="";jump1a()}else{alert("Your message is to short")}};function jump1a(){n0.style.left=-num2;if(num2 != 9){num2=num2+3;setTimeout("jump1a()",50)}else{jump1b()}};function jump1b(){n0.style.left=-num2;if(num2 != 0){num2=num2-3;setTimeout("jump1b()",50)}else{jump2()}}
function jump2(){txt="";for(i=0;i != message.length;i++){if(i+num > -1 && i+num < 7){txt=txt+"<span style='position:relative;top:"+mes[i+num]+"'>"+message.charAt(i)+"</span>"}else{txt=txt+"<span>"+message.charAt(i)+"</span>"}};jump.innerHTML=txt;txt="";if(num != (-message.length)){num--;setTimeout("jump2()",50)}else{num=0;setTimeout("jump0()",50)}}
</script>
</head>
<body text="#000000" style="font-family:Arial">
<?	
//<!-------Representante------------->
if ($representante=="")
   {
    $rvt="1=";
	$rvt_id="1";
	$and="and";
	}
	else
	{
	$rvt="a.id_rvt=";
	$rvt_id="'$representante'";
	$and="and";
	$dia="a.fecha_alta=";
	$dia_rvt="'$fecha_dia'";
	$and_rvt="and";

	}
//<!-------No. de Cas------------->
if ($cas=="")
   {
    $cas_i="1=";
	$cas_id="1";
	$and_uno="and";
	}
	else
	{
	$cas_i="a.id_cas=";
	$cas_id="'$cas'";
	$and_uno="and";
	
	
	$sel_compania="select id_compania from gen_servicio where id_cas='$cas'";
	
	$resultado_c=odbc_exec($conexion, $sel_compania) or die("no realiza consulta"); 
	
	$compania_r=odbc_result($resultado_c,"id_compania");
	
	
	}
//<!-------Tarjeta------------->
if ($numero=="")
   {
    $tarj="1=";
	$tarj_id="1";
	$and_dos="and";
	}
	else
	{
	$tarj="a.id_cuenta=";
	$tarj_id="'$numero'";
	$and_dos="and";
	}	
//<!-------Apellido Paterno------------->
if ($paterno=="")
   {
    $pat="1=";
	$pat_id="1";
	$and_tres="and";
	}
	else
	{
	$pat="a.clie_ap=";
	$pat_id="'$paterno'";
	$and_tres="and";
	}	
//<!-------Apellido Materno------------->
if ($materno=="")
   {
    $mat="1=";
	$mat_id="1";
	$and_cuatro="and";
	}
	else
	{
	$mat="a.clie_am=";
	$mat_id="'$materno'";
	$and_cuatro="and";
	}	
//<!-------Nombre de Usuario------------->
if ($nom_clie=="")
   {
    $nom="1=";
	$nom_id="1";
	$and_cinco="and";
	}
	else
	{
	$nom="a.clie_nom=";
	$nom_id="'$nom_clie'";
	$and_cinco="and";
	}	
//<!-------Fecha------------->
if ($fecha=="")
   {
    $fec="1=";
	$fec_id="1";
	$and_seis="and";
	}
	else
	{
	$fec="a.fecha_alta=";
	$fec_id="'$fecha'";
	$and_seis="and";
	}		


//<!-------Fecha------------->
if ($corregir=="")
   {
    $cor="1=";
	$correg="1";
	$and_siete="and";
	}
	else
	{
	$cor="a.pendiente_corregir=";
	$correg="'$corregir' and a.id_tipo_aclaracion=1";
	$and_siete="and";
	}	

	if ($representante=="" and $cas=="" and  $numero=="" and $paterno=="" and $materno=="" and  $nom_clie=="" and $fecha=="" and $corregir=="")	
	{
	?>
	<center>
     <h1>&nbsp;</h1>
     <h2>
     <div id="jump" style="cursor:hand;color:#91B9CC" >
     </div>
     </h2>
     </center>
	 <div align="center">
     <p>
     <script>
     message="No hacer consulta sin parametros de busqueda"
     jump0()
     </script>
     </p>
     </div>
	<?
	}
	else
	{
	 $consulta_cuenta="select a.id_ot, a.id_rvt, a.id_cas, a.id_cuenta, d.descripcion, c.subs_descripcion, a.fecha_alta,
	a.clie_nom, a.clie_ap, a.clie_am, a.costo_real, p.prov_desc
	from gen_servicio a
	left join cat_subservicios c on c.id_subservicios=a.id_subservicio
	left join cat_compania d on d.id_compania=a.id_compania
	left join gen_proveedores p on p.id_proveedor=a.id_proveedor
	where a.fecha_alta>='01-01-2018' AND  a.id_ot NOT in (8299429,8299414,10261939,10261699)
	$and $rvt $rvt_id $and $dia $dia_rvt 
    $and_rvt $cas_i $cas_id
	$and_uno $tarj $tarj_id
	$and_dos $pat $pat_id
  	$and_tres $mat $mat_id
  	$and_cuatro $nom $nom_id
 	$and_cinco $fec $fec_id
	$and_seis $cor $correg
	and c.subs_descripcion not in ('STAXI SEGURO')
	order by a.id_cas asc ";
	
	$resultado=odbc_exec($conexion, $consulta_cuenta) or die($consulta_cuenta);
	$contador=odbc_num_rows($resultado);
set_time_limit(0);

$w=0;
?>
 <table> 
 <tr>
 <td>
<?	/*04092013*/ if( $perfil <> 11 and $rvt_dos <> 11248 ) { ?>
<form name="search" onSubmit="return findInPage(this.string.value);">
  <input name="string" type="text" size="15" onchange="n = 0;" />
  <input name="submit2" type="submit" value="Buscar en esta lista" />
</form>
</td>

<? if ($corregir==1)
  {
?>
<td>
<form name="enviar_formulario" id="enviar_formulario" method="post" target="_self" action="pendientes_excel.php">
<input type="hidden" name="representante" value="<? echo $representante; ?>">
<input type="hidden" name="rvt" value="<? echo $rvt_dos; ?>">
<input type="hidden" name="nombre" value="<? echo $nombre; ?>">
<input type="hidden" name="nom" value="<? echo $nom_clie; ?>">
<input type="hidden" name="numero" value="<? echo $numero; ?>">
<input type="hidden" name="cas" value="<? echo $cas_pendiente; ?>">
<input type="hidden" name="paterno" value="<? echo $paterno; ?>">
<input type="hidden" name="materno" value="<? echo $materno; ?>">
<input type="hidden" name="fecha" value="<? echo $fecha; ?>">
<input type="hidden" name="corregir" value="<? echo $corregir; ?>">
<input type="hidden" name="perfil" value="<? echo $perfil; ?>">
<input type="image" src="img/excel.jpg"	>	
</form>
</td>
<?
 }
}	#04092013
?>
</tr>
</table>

<?
if ($compania_r<>45 && $compania_r<>178)
{
?>

<form method='post' action='abrir_consulta.php'>

<?
}

else
{
?>

<form method='post' action='ace_cc/abrir_consulta_ace.php'>

<?
}
?>



<input type="hidden" name="perfil" value="<? echo $perfil; ?>">
<input type="hidden" name="rvt_dos" value="<? echo $rvt_dos; ?>">
<input type="hidden" name="corregir" value="<? echo $corregir; ?>">
<font style="font-size:14px"><em><font color="gray">CA-154 - </em><em><strong><font color="black">INFORMACIÓN DE SERVICIO(S)</strong></em></font>
<table border="1" cellpadding="0" cellspacing="2" width="184%" bordercolor="#FFFFFF">
<tr  style='font-size:11px; font-family:Arial;color:#FFFFFF;background-color:#91B9CC' height="18">
<td width="6%"><b><em>No. ID_OT</em></b></td>
<td width="10%"><b><em>No. CAS</em></b></td>
<td width="8%"><b><em>No. CUENTA </em></b></td>
<td width="9%"><b><em>COMPAÑIA</em></b></td>
<td width="17%"><b><em>PROVEEDOR</em></b></td>
<td width="16%"><b><em>CLASIFICACION DEL SERVICIO</em></b></td>
<td width="11%"><b><em>FECHA DE SERVICIO</em></b></td>
<!--<td width="19%"><b><em>NOMBRE(S) DEL CLIENTE</em></b></td>
<td width="14%"><b><em>COSTO REAL</em></b></td>-->
</tr>
<?
$ok=" ";
while (odbc_fetch_row($resultado))
{
    $id_ot[$w]=odbc_result($resultado,"id_ot");
	$id_rvt[$w]=odbc_result($resultado,"id_rvt");
    $cas[$w]=odbc_result($resultado,"id_cas");
	$cuenta[$w]=odbc_result($resultado,"id_cuenta");
	$descripcion[$w]=odbc_result($resultado,"descripcion");
	$subservicio[$w]=odbc_result($resultado,"subs_descripcion");
	$id_alta[$w]=odbc_result($resultado,"fecha_alta");
	$nom_cliente[$w]=odbc_result($resultado,"clie_nom");
	$pat_cliente[$w]=odbc_result($resultado,"clie_ap");
	$mat_cliente[$w]=odbc_result($resultado,"clie_am");
	$saldo_cobrar[$w]=odbc_result($resultado,"costo_real");	
	$prov_desc[$w]=odbc_result($resultado,"prov_desc");	
	$union_nom[$w]=$nom_cliente[$w].$ok.$pat_cliente[$w].$ok.$mat_cliente[$w];
	$extraerfecha=substr($id_alta[$w], 0, 10);  
?>
<tr style='font-size:11px; font-family:Arial'><td>
<!--<input type='hidden' name='cas' value='$cas[$w]'>-->
<input type='submit' name='cas' value='<? echo $id_ot[$w];?>' style='color:#6699FF;background-color:#FFFFFF;border-width:0;font-size:9pt;font-family:Arial;cursor:hand;text-align:left;width:80px;height:18px'></td>
<td><? echo $cas[$w]; ?></td>

<?
  
  if (($rvt_dos<>255) or ($rvt_dos<>1546) or ($rvt_dos<>1573) or ($rvt_dos<>1547) or ($rvt_dos<>178))
  {
  $no_cuenta=substr($cuenta[$w], -4);
  
  $no_cuenta='XXXX-XXXX-XXXX-'.$no_cuenta;
  }
  else
  {
	$no_cuenta=$cuenta[$w];  
  }
  ?>




<td><? echo $no_cuenta; ?></td>
<td><? echo $descripcion[$w]; ?></td>
<td><? echo $prov_desc[$w]; ?></td>
<td><? echo $subservicio[$w]; ?></td>
<td><? echo $extraerfecha; ?></td>
<!--<td><? echo $union_nom[$w]; ?></td>
<td><? echo $saldo_cobrar[$w]; ?></td></tr>-->
<? 
$w++;
}
}
echo 'Servicios encontrados'.$w;
 ?>
</table>
</body>
</html>
