<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Tema opcional -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">

		.form-inline{

			margin-top: 8px;
			margin-bottom: 8px;


		}
		#styleTitle{

			background-color: #849FF5;
			font-size: 32px;

		}
		#stylePadding{
			border-style: solid;
			border-width: 15px;
			border-color: white;
			margin:  120px;
			margin-top: 50px; 
			background-color: #9EDCFD;
			padding: 80px;
			padding-bottom: 5px;
		}
		#stylePaddinPassword{
			padding: 10px;

			padding-left: 50px;
			background-color: #9EDCFD;
		}

		body{

			background-image: url("../images/backgroundLoginTranslucid.jpg");
		}

		#styeOi{
			margin-bottom: 40px;

		}
		#styleOi2{
margin-top: 20px;

		}
	</style>


</head>
<body>

	<div class="row" id="styleTitle">
		<div class="col-md-4 col-sm-4 col-xs-4" > </div>
		<div class="col-md-4 col-sm-4 col-xs-4 text-center"><div class="tituloDoLogin"> Register on system</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4" > </div>		
	</div>



	<div id="stylePadding">
	<p id="styeOi"> Put your user information here, pease:</p>

<form method="post" action="../../controller/registerUserDataBase.php">
		<div class="form-inline row">

			<div class="col-md-1 text-right"><label for="username">Name:</label></div>
			<div class="col-md-3 text-left"><input type="text" class="form-control" id="name" name="name" ></div>
		</div>
		<div class="col-md-8"></div>

		<div class="row">
			<div class="form-inline">
				<div class="col-md-1 text-right"><label for="username">Username:</label></div>
				<div class="col-md-3 text-left"><input type="text" class="form-control" id="username" name="username"></div>
				<div class="col-md-8"> </div>
			</div>
		</div>


		<div class="form-inline row">
			<div class="col-md-2 text-left">
				<label >Your ocupation: </label></div>
				<div class="col-md-2 text-left ">
					<select name="yourOcupation">
						<option value="student" >student</option>
						<option value="teacher" >teacher</option>
						<option value="freelancer">freelancer</option>
						<option value="outher">outher</option>
					</select> </div>
					<div class="col-md-8"></div>
				</div>

				<div class="form-inline" >

					<label>Your graduation: </label>
					<select name="yourGraduation">
						<option value="Graduationinformation">Graduation in formation</option>
						<option value="bachelor">bachelor</option>
						<option value="graduation">graduation</option>
						<option value="Master">Master </option>
						<option value="Postdoctorate">Post doctorate</option>
						<option value="none">none</option>
						<option value="outher">outher</option>
					</select>
				</div>
				<div class="form-inline row" >
					<div class="col-md-1 text-right"><label>Email</label></div>	
					<div class="col-md-3"><input type="text" class="form-control" id="email" name="email"></div>
					<div class="col-md-8"></div>
				</div>


				<div id="stylePaddinPassword">

					<div class="row">
						<div class=" form-inline" action="cadastraBancoUsuarios.php">
							<div class="col-md-1"><label for="exampleInputName2">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword3" placeholder="" name="password"></div>
								<div class="col-md-11"></div>
							</div>
						</div>

						<div class="row">
							<div class=" form-inline" action="cadastraBancoUsuarios.php">
								<div class="col-md-2"><label for="exampleInputName2">Repeat your password</label>
									<input type="password" class="form-control" id="exampleInputPassword3" placeholder="" name="rPassword"></div>
									<div class="col-md-10"></div>
								</div>
							</div>

						<div id=" styleOi2"><input type="submit" class="btn btn-info" value="Submit"></div>

						</div>

						

					</form>
					</div>
				</body>
				</html>