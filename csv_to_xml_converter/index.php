<?php
require "conexao/config.php";
require"cadastro_de_hosts/receber_planilha.php";
?>

<!DOCTYPE html>  
<html>  
 <head>  
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>Sistema</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>  
 <body>  
 	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>CADASTRO DE HOSTS & CRIÃÇÃO DE MAPA</h3>
            </div>
        </div>
    </div>
 	<div class="container-fluid hosts">
 		<div class="row">
 			<div class="col-md-3 xml">
 				<h3 align="center">1° Passo</h3>
 				<h3 align="center">Envie a planilha CSV com dados dos hosts</h3><br />
  				<form method="post" enctype="multipart/form-data">
				   <div align="center">
				    	<label>Selecione o arquivo CSV:</label>
				    	<input type="file" name="file" />
				    	<br />
				    	<input type="submit" name="submit" value="Import" class="btn btn-info" />
				   </div>
				</form>
 			</div>
 			<div class="col-md-1">
 			<img class="seta" src="assets/images/seta.png">
 			</div>
 			<div class="col-md-3 xml">
 				<h3 align="center">2° Passo</h3>
 				<h3 align="center">Gerar XML dos HOSTS</h3><br />
  				<form method="post" enctype="multipart/form-data">
				   <div align="center"><br/><br/>
				    	<label><h4>Clique abaixo!</h4></label><br/>
				    	<span class="button"><a class="links" href="hosts.xml" download="hosts.xml">Download</a></span>
				   </div>
				</form>
 			</div> 
  			<div class="col-md-1">
 				<img class="seta" src="assets/images/seta.png">
 			</div>	
 			<div class="col-md-3 xml">
 				<h3 align="center">3° Passo</h3>
 				<h3 align="center">Gerar XML do MAPA</h3><br />
  				<form method="post" enctype="multipart/form-data">
				   <div align="center"><br/><br/>  
				    	<label><h4>Clique abaixo!</h4></label><br/>
				    	<span class="button"><a class="links" href="hosts_mapa.xml" download="hosts_mapa.xml">Download</a></span>
				   </div>
				</form>
 			</div>
 			<div class="col-md-3" style="margin-top: 25PX;">
 				<span class="button-csv"><a class="links-csv" href="exemplo.csv" download="exemplo.csv"><img src="assets/images/excel.png" style="width: 50" height="50"> Baixe aqui o modelo CSV</a></span>
 			</div>  			
 		</div>
 	</div>
 </body>  
</html>




