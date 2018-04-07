<?php
 /**
   * #---------------------------------------------------------------------------------------------------
   * #Autor    : Carlos Cantos H. 
   * #Fecha    : 26-Junio-2017.
   * #Proyecto : [1002] Global-Suite
   * #Objetivo : Reporte Mensual Global-Suite
   * #---------------------------------------------------------------------------------------------------
   **/
  sleep(1);
  //include("../conexion/conexion_db.php");
 // $conexion=conexion_DB();
//  include("llenar_combo_empresa_reportes.php");
  //require_once("../login/sesion.class.php");
//	$sesion = new sesion();
//	$entorno = $sesion->get("login");
//	if( $entorno == true )
//	{
//		header("Location: ../index.php");
//	}else{
    session_start();
	require_once "include/main.php";
	require_once "include/encabezado.php";
    include "Reportes/fnc/fechas.php";
	   $id_empresa=1;//$_SESSION['id_empresa'];
       $rol_usuario_ses=1;//$_SESSION['rol_usuario'];
       $id_persona_ses=1;//$_SESSION['id_persona'];
     
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script type="text/javascript" src="Reportes/js/funciones.js"></script>
    </head>
<style type="text/css">
   #framereporte{height:900px;width:1290px;max-width: 100%; max-height: 100%;}
</style>
 <script>
 function ver_ejecucion_reporte()
 {
     var periodo= document.reporte_mensual.periodo.value;
     var mes= document.reporte_mensual.mes.value;
     window.open("Reportes/Reportes/rpt_mensual/Rpt_mensual.php?periodo="+periodo+
                                                                "&mes="+mes
                                                                 ,target="framereporte");
     
                   
  } 
 </script>
 <body>
               <div class="col-lg-12" >
                   <div class="panel panel-default">
                       <div class="box box-primary">
                            <div >
                              <h3 class="box-title" style="color: black; font-weight: bold;" ><?php echo"".$lang["adminlista_mensual"] ?></h3>
                            </div>
                         </div> 
                       <div class="panel-body" >
                            <div class="row">
                                <div class="col-lg-7">
                                    <form name="reporte_mensual" action=""  class="form-search" onreset="inicio()" onsubmit="">
                                   <div class="form-group">
                                     <label class="col-md-1">Periodo:</label>
                                     <div class="col-md-2">
                                          <?php $fcmblistae=fcmblistafechaPeriodo("periodo",2010);echo "".$fcmblistae.""; ?>  
                                     </div>
                                  </div>
                                   <div class="form-group">
                                     <label class="col-md-1" >Mes:</label>
                                     <div class="col-sm-2">
                                           <?php $fcmblistae=fcmblistafechaMeses("mes");echo "".$fcmblistae.""; ?> 
                                     </div>
                                  </div>
                                     <button type="button" class="btn btn-success" title="Rpt. de Filial por Vigencia" onclick="ver_ejecucion_reporte();showWait()">
                                      <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-file-pdf-o"></i><?php echo"".$lang['aplicar'] ?></div></button>
                             	</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col-lg-12" id="resultado">
                 <iframe id="framereporte" name="framereporte" frameborder="0"> </iframe>
              </div>
   
 </body>
</html>
<?php
//}
?>