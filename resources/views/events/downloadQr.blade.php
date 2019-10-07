
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body> 



<div class="container">
<div class="row">
<h3><strong> II Jornada de Ciencia de la Computación 2019</strong></h3>
<h4><strong>Escuela Profesinoal de Ciencia de la Computación</strong></h4>
<hr>

  <div class="col-xs-4">
    <img style="width:100%;" src="data:image/png;base64, {{ base64_encode(QrCode::encoding('UTF-8')->format('png')->margin(1)->size(220)->generate( $cui )) }}">
  </div>

  <div class="col-xs-8">
    <h4><strong>Apellidos:</strong> {{$apellidos}} </h4>
    <h4><strong>Nombres:</strong> {{$nombres}} </h4>
    <h4><strong>CUI:</strong> {{$cui}}</h4>
  </div>


</div>





</div>



</body>
</html>
