<?php
	require_once('funciones/funciones.php');
  require_once('funciones/conexion.php');
	if(isset($_POST['enviar'])){
		$efectivos=limpiar($con,$_POST['efectivos']);
		$presentes=limpiar($con,$_POST['presentes']);
		$ausentes=limpiar($con,$_POST['ausentes']);
		$fecha=date("Y-m-d");

		$a=limpiar($con,$_POST['a']);
		$la=limpiar($con,$_POST['la']);
		$at=limpiar($con,$_POST['at']);
		$matr=limpiar($con,$_POST['matr']);
		$est=limpiar($con,$_POST['est']);
		$nac=limpiar($con,$_POST['nac']);
		$lea=limpiar($con,$_POST['lea']);
		$lef=limpiar($con,$_POST['lef']);
		$exam=limpiar($con,$_POST['exam']);
		$lact=limpiar($con,$_POST['lact']);
		$lf=limpiar($con,$_POST['lf']);
		$hc=limpiar($con,$_POST['hc']);
		$matern=limpiar($con,$_POST['matern']);
		$rp=limpiar($con,$_POST['rp']);
		$dons=limpiar($con,$_POST['dons']);
		$jt=limpiar($con,$_POST['jt']);
		$li=limpiar($con,$_POST['li']);
		$mo=limpiar($con,$_POST['mo']);
		$susp=limpiar($con,$_POST['susp']);
		$lee6m=limpiar($con,$_POST['lee6m']);
		$lee1a=limpiar($con,$_POST['lee1a']);
		$adsc=limpiar($con,$_POST['adsc']);
		$lpol=limpiar($con,$_POST['lpol']);

		if($efectivos!=''){
			$sql="insert into asistencias (efectivos,presentes,ausentes,fecha,a,la,at,matr,est,nac,lea,lef,exam,lact,lf,hc,matern,rp,dons,jt,li,mo,susp,lee6m,lee1a,adsc,lpol) values ('$efectivos','$presentes','$ausentes','$fecha','$a','$la','$at','$matr','$est','$nac','$lea','$lef','$exam','$lact','$lf','$hc','$matern','$rp','$dons','$jt','$li','$mo','$susp','$lee6m','$lee1a','$adsc','$lpol')";
			$error="<div class='error borde-5 letraNegrita'>Error al registrar el mensaje</div>";
			$registrar=consulta($con,$sql,$error);
			if($registrar==true){
				echo"<div class='correcto borde-5 letraNegrita'>Mensaje enviado</div>";
			}else{
				echo"<div class='error borde-5 letraNegrita'>Error al registrar el mensaje</div>";
			}
		}else{
			echo"<div class='mensajeAviso borde-5 letraNegrita'>Sin mensaje</div>";
		}
  }//isset($_POST[envar])
  header("Location: inicio.php");
  
?>