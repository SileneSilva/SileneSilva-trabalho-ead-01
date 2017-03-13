
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
<?php

$bAnda =$_POST['bAnda'];
$imAgem =$_POST['imagem'];
$pintNome =$_POST['pNome'];
$pintNascimento =$_POST['pNascimento'];
$pintInstrumento =$_POST['pInstrumento'];
$sintNome =$_POST['sNome'];
$sintNascimento =$_POST['sNascimento'];
$sintInstrumento =$_POST['sInstrumento'];
$tintNome =$_POST['tNome'];
$tintNascimento =$_POST['tNascimento'];
$tintInstrumento =$_POST['tInstrumento'];
$Biografia =$_POST['Biografia'];
$corFonte =$_POST['corFonte'];
$corFundo =$_POST['corFundo'];

?>
    <title> 
      <?php echo $bAnda;?> - Biografia 
    </title>  
    <link rel='stylesheet'    
          type='text/css'
          href='estiloSaida.css'>
    <style type='text/css'>
      body {
        color            : <?php echo $corFonte; ?>;
        background-color : <?php echo $corFundo; ?>;        
      }
    </style>
  </head>

  <body>
    <h1 align="center"> 
      <?php echo $bAnda; ?>
    </h1>
    
    <p align="center"> 
      <img src   = "<?php echo $imagem; ?>" 
           title = "<?php echo $bAnda;  ?>" 
           alt   = "<?php echo $bAnda;  ?>" > 
    </p>

    <hr>

    <h2> 
      Biografia 
    </h2>

    <p>
      <?php echo $Biografia; ?>
    </p>

    <hr>
	
	</head>
	<body>
	<table border = 1>
    <caption> Integrantes </caption>
      <tr>
        <th> Nome </th>
        <th> Data de nascimento</th>
        <th>Instrumento</th>
      </tr>
      
       <tr>
        <td> <?php echo $pintNome?> </td>
        <td> <?php echo $pintNascimento?>  </td>
        <td> <?php echo $pintInstrumento?>  </td>
      </tr>
      
      <tr>
        <td> <?php echo $sintNome?> </td>
        <td> <?php echo $sintNascimento?> </td>
        <td> <?php echo $sintInstrumento?> </td>
      </tr>
      
      <tr>
        <td> <?php echo $tintNome?> </td>
        <td> <?php echo $tintNascimento?> </td>
        <td> <?php echo $tintInstrumento?>  </td>
      </tr>
	</body>
</html>


 
 
 