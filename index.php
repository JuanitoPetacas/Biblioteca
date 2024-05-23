





<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" >

	
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
</head>
<body>

    <div class="containerHeader">

<div class="row">




</div>

    </div>


<div class="container">

	<div class="d-flex justify-content-center h-100">
       
		<div class="card">
            

			<div class="card-header d-flex">
                <img src="./assets/img/logoSena.png" alt="" srcset="" class="logoSena">
                <h3 class="mt-2">Ingreso</h3>
       
			
               
				<div class="d-flex justify-content-end social_icon">
					<a href="https://web.facebook.com/sistemabibliosena/?locale=es_LA&_rdc=1&_rdr"><span><i class="fab fa-facebook-square"></i></span></a>
					<a href="https://biblioteca.sena.edu.co/"><span><i class="fab fa-google-plus-square"></i></span></a>
					
				</div>
			</div>
			<div class="card-body mt-5">
				<form action="./model/login.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Cedula" name="cedulaUsuario">
						
					</div>
					<div class="input-group form-group mt-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Contraseña" name="passUsuario">
					</div>
				
					<div class="form-group d-flex justify-content-center mt-5">
					<button type="submit" class="links btn float-right login_btn">Ingresar</button>	
					
				
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>