<!--Ej. 05- bootstrap tab/pills menus multiples opciones-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Venta Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    /* Remover el margin por defecto del boton en el div jumbotron*/ 
     .jumbotron {
      margin-bottom: 0;
      background-image: url('http://touchechicago.com/wp-content/uploads/2013/10/Grey-Background-BLANK.png');
      color: white;
    }
   
    /* Añadir fondo gris y padding al footer*/ 
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Ventas Laravel</h1>      
    <p>Ejercicio practico ventas con laravel framework</p>
  </div>
</div>
<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>
</div>
<br>
<!-- comienzo contenido primer menu *Inicio*-->
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><br>
    </div>
<!-- fin contenido primer menu *Inicio*-->
<!-- comienzo contenido segunndo menu *menu1*-->|
    <div id="menu1" class="tab-pane fade">
        <div class="container">    
		  <div class="row">
		    <div class="col-sm-4">
		    	<p>menu 1</p>
		      <div class="panel panel-primary">
		        <div class="panel-heading">MENU 1 BLACK FRIDAY DEAL</div>
		        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
		        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
		      </div>
		    </div>
		</div>
    </div>
</div>
<!-- fin contenido segundo menu *menu1*-->

<!-- comienzo contenido sgndo menu *menu2*-->
    <div id="menu2" class="tab-pane fade">
        <div class="container">    
		  <div class="row">
		    <div class="col-sm-4">
		    	<p>menu 2</p>
		      <div class="panel panel-primary">
		        <div class="panel-heading">MENU 2 BLACK FRIDAY DEAL</div>
		        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
		        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
		      </div>
		    </div>
		</div>
    </div>
</div>
<!-- fin contenido sgndo menu *menu2*-->

<!-- comienzo contenido tercer menu *menu3*-->
    <div id="menu3" class="tab-pane fade">
     <div class="container">    
		  <div class="row">
		    <div class="col-sm-4">
		    	<p>menu 3</p>
		      <div class="panel panel-primary">
		        <div class="panel-heading">BLACK FRIDAY DEAL</div>
		        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
		        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
		      </div>
		    </div>
		</div>
    </div>
  </div>
  <!-- fin contenido tercer menu *menu3*-->
</div>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Ventas Larvel</p>  
  <form class="form-inline">Obtener ofertas:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Registrarme</button>
  </form>
</footer>
</body>
</html>
