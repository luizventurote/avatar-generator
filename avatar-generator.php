<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">

	<title>Avatar Generator</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/faces.css">

	<?php 

		# Aatar name
		$avatar_name = $_GET['avatar-name'];

		# Bady color
		$bady_color = $_GET['body-color'];

		# Hair type
		$hair_type = $_GET['hair-type'];

		# Hair color
		$hair_color = $_GET['hair-color'];

		# Eye type
		$eyebrow_type = $_GET['eyebrow-type'];

		# Eye type
		$eye_type = $_GET['eye-type'];

		# Eye color
		$eye_color = $_GET['eye-color'];

		# Nose type
		$nose_type = $_GET['nose-size'];

		# Mouth Type
		$mouth_type = $_GET['mouth-type'];

		# T-Shirt type 
		$tshirt_type = $_GET['tshirt-type'];


		# Change boy color
		function BodyColor($type, $body_type) {

			// Color type 0
			if($type == 0) {

				if($body_type == 1) {
					return 'color-bisque';
				}

				else if($body_type == 2) {
					return 'color-saddlebrown';
				}

			}

			// Color type 1
			else if($type == 1) {

				if($body_type == 1) {
					return 'g-bisque-burlywood-t';
				}

				else if($body_type == 2) {
					return 'g-saddlebrown-t';
				}

			}

			// Color type 2
			else if($type == 2) {

				if($body_type == 1) {
					return 'g-bisque-burlywood-r';
				}

				else if($body_type == 2) {
					return 'g-saddlebrown-r';
				}

			}

			// Color type 3
			else if($type == 3) {

				if($body_type == 1) {
					return 'g-bisque-burlywood-b';
				}

				else if($body_type == 2) {
					return 'g-saddlebrown-b';
				}

			}

			// Color type 4
			else if($type == 4) {

				if($body_type == 1) {
					return 'g-bisque-burlywood-l';
				}

				else if($body_type == 2) {
					return 'g-saddlebrown-l';
				}

			}

		}

	?>

</head>
<body>

	<style>

		/* Change hair color */
		.hair-main > div > div,
		.eyebrow-top {
			background: <?php echo $hair_color; ?>;
		}

		/* Change eye color */
		.eye {
			background: <?php echo $eye_color; ?>;
		}

	</style>

	<div class="main">

		<div class="box-face">

			<div class="face">

				<div class="face-head-1 <?php echo BodyColor(0, $bady_color); ?>">

					<div class="hair">
						
						<div class="hair-main hair-<?php echo $hair_type;?>">

							<div class="hair-top">
							
								<div class="part-1"></div>
								<div class="part-2"></div>
								<div class="part-3"></div>
								<div class="part-4"></div>
								<div class="part-5"></div>
								<div class="part-6"></div>
								<div class="part-7"></div>
								<div class="part-8"></div>
								<div class="part-9"></div>

							</div>

							<div class="hair-bottom">
								
								<div class="part-10"></div>
								<div class="part-11"></div>

							</div>

						</div>

					</div>

					<div class="ears">
						
						<div class="ear-left <?php echo BodyColor(2, $bady_color); ?>"></div>

						<div class="ear-right <?php echo BodyColor(4, $bady_color); ?>"></div>

					</div>
					
					<div class="face-eyes">

						<div class="face-eyebrows">
							
							<div class="face-eyebrow-<?php echo $eyebrow_type;?> eyebrow-left">
								
								<div class="eyebrow-top"></div>

								<div class="eyebrow-bottom <?php echo BodyColor(0, $bady_color); ?>"></div>

							</div>

							<div class="face-eyebrow-<?php echo $eyebrow_type;?> eyebrow-right">
								
								<div class="eyebrow-top"></div>

								<div class="eyebrow-bottom <?php echo BodyColor(0, $bady_color); ?>"></div>

							</div>

						</div>
						
						<div class="face-eye face-eye-<?php echo $eye_type;?> face-eye-left">
							
							<div class="eye"></div>

						</div>

						<div class="face-eye face-eye-<?php echo $eye_type;?> face-eye-right">
							
							<div class="eye"></div>

						</div>

					</div> <!-- /.face-eyes -->

					<div class="nose">
						
						<div class="nose-<?php echo $nose_type;?> <?php echo BodyColor(1, $bady_color); ?>">
						</div>

					</div>

					<div class="mouth">
						
						<div class="mouth-<?php echo $mouth_type;?>">
							
							<div class="mouth-top color-black">
								
								<div class="tooth"></div>

								<div class="lingua g-red-darkred-t"></div>

							</div>

							<div class="mouth-bottom <?php echo BodyColor(0, $bady_color); ?>"></div>

						</div>

					</div>

				</div>

			</div> <!-- /.face -->

			<div class="neck">
					
				<div class="neck-1 <?php echo BodyColor(3, $bady_color); ?>"></div>

			</div> <!-- /.neck -->

			<div class="shirt shirt-1 <?php echo $tshirt_type;?>"></div>

		</div> <!-- /.box-face -->

	</div> <!-- /.main -->

	<a href="index.php" class="btn btn-default">Voltar ao gerador</a>

</body>
</html>