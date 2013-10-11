<!doctype html>

<html lang="en">

	<head>

		<?php 

			# Configurações iniciais
			require('config.php');

		?>

		<meta charset="UTF-8">

		<title><?php echo $site_name; ?></title>

		<link rel="stylesheet" href="css/bootstrap.min.css">

		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>

		<div class="row">

			<div class="col-md-12">

		  		<div class="panel panel-default main">

		  			<div class="panel-heading main-heading"><h1><?php echo $site_name; ?></h1></div>

		  			<div class="panel-body">

		  				<form role="form" action="avatar-generator.php" method="GET">
							
							<!-- Avatar Name -->
							<div class="form-group">
								<label for="avatar-name"><?php echo $avatar_name; ?></label>
								<input type="text" class="form-control" name="avatar-name" value="Avatar" placeholder="<?php echo $avatar_name; ?>" required="required">
							</div>

							<!-- Body Color -->
							<div class="form-group">
								<label for="body-color"><?php echo $body_color; ?></label>
								<select name="body-color" class="form-control">

								    <option value="1"><?php echo $body_color_one; ?></option>

								    <option value="2"><?php echo $body_color_two; ?></option>

								</select>
							</div>

							<!-- Hair Type  -->
							<div class="form-group">

								<label for="hair-type"><?php echo $hair_type; ?></label>

								<div class="radio">
								  <label>
								    <input type="radio" name="hair-type" value="1" checked>
								    <span><?php echo $hair_type_one; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="hair-type" value="2">
								    <span><?php echo $hair_type_two; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="hair-type" value="3">
								    <span><?php echo $hair_type_three; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="hair-type" value="4">
								    <span><?php echo $hair_type_four; ?></span>
								  </label>
								</div>

							</div>

							<!-- Hair Color -->
					        <div class="form-group">

						        <label for="hair-color"><?php echo $hair_color; ?></label>

						        <div class="row">
									<div class="col-lg-2">
										<input class="form-color" type="color" id="hair-color" name="hair-color" value="#242424">
									</div>
									<div class="col-lg-10">
										<div class="form-control" id="hexcolor-hair"></div> 
									</div>
								</div>

					        </div>

					        <!-- Eyebrow Type  -->
							<div class="form-group">

								<label for="eyebrow-type"><?php echo $eyebrow_type; ?></label>

								<div class="radio">
								  <label>
								    <input type="radio" name="eyebrow-type" value="1" checked>
								    <span><?php echo $eyebrow_type_one; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="eyebrow-type" value="2">
								    <span><?php echo $eyebrow_type_two; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="eyebrow-type" value="3">
								    <span><?php echo $eyebrow_type_three; ?></span>
								  </label>
								</div>

							</div>

							<!-- Eye Type  -->
							<div class="form-group">

								<label for="eye-type"><?php echo $eye_type; ?></label>

								<div class="radio">
								  <label>
								    <input type="radio" name="eye-type" value="1" checked>
								    <span><?php echo $eye_type_one; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="eye-type" value="2">
								    <span><?php echo $eye_type_two; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="eye-type" value="3">
								    <span><?php echo $eye_type_three; ?></span>
								  </label>
								</div>

								<div class="radio">
								  <label>
								    <input type="radio" name="eye-type" value="4">
								    <span><?php echo $eye_type_four; ?></span>
								  </label>
								</div>

							</div>

							<!-- Eye Color -->
					        <div class="form-group">

					        	<label for="hair-color"><?php echo $eye_color; ?></label>

						        <div class="row">
									<div class="col-lg-2">
										<input class="form-color" type="color" id="eye-color" name="eye-color" value="#242424">
									</div>
									<div class="col-lg-10">
										<div class="form-control" id="hexcolor-eye"></div> 
									</div>
								</div>

					        </div> 

					        <!-- Mouth Type -->
							<div class="form-group">

								<label for="mouth-color"><?php echo $mouth_type; ?></label>

								<select name="mouth-type" class="form-control" >

								    <option value="1"><?php echo $mouth_type_one; ?></option>

								    <option value="2"><?php echo $mouth_type_two; ?></option>

								    <option value="3"><?php echo $mouth_type_three; ?></option>

								    <option value="4"><?php echo $mouth_type_four; ?></option>

								</select>

							</div>

							<!-- T-Shirt Type -->
							<div class="form-group">

								<label for="tshirt-type"><?php echo $tshirt_type; ?></label>

								<select name="tshirt-type" class="form-control">

								    <option value="g-black"><?php echo $tshirt_type_one; ?></option>

								    <option value="g-brown-red "><?php echo $tshirt_type_two; ?></option>

								    <option value="g-green"><?php echo $tshirt_type_three; ?></option>

								    <option value="g-gray"><?php echo $tshirt_type_four; ?></option>

								</select>

							</div>

							<!-- Nose Type -->
					        <div class="form-group">

								<label for="nose-size"><?php echo $nose_size; ?></label>

								<div class="row">
									<div class="col-lg-11">
										<input class="form-range" type="range" id="nose-size" name="nose-size" min="1" max="4" value="1"> 
									</div>
									<div class="col-lg-1">
										<div class="form-control" id="output-nose-size"></div>
									</div>
								</div>

								

								<div id="output-nose-size"></div>

					        </div>

							<button type="submit" class="btn btn-default generate">Gerar Avatar</button>

						</form>

					</div> <!-- /.panel-body -->

				</div> <!-- /.main -->		  	

			</div> <!-- /.col-md-12 -->

		</div> <!-- /.row -->

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	
</html>