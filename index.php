<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type="submit"] {
			margin-top: 20px;
		}
	</style>
</head>
<body>
    <?php 
        include __DIR__ . "/data.php";
        include __DIR__ . "/functions.php";
        if (isset($_GET['password_length'])) {
            $data['password_length'] =  $_GET['password_length'];
            $data['all_chars'] =  gen_char();
            $data['password'] =  gen_password($data['password_length']);
        }
    ?>
    
    <main class="vh-100">
        <?php if (isset($_GET['password_length'])) { ?>
            <h1>La password è: <?php echo $data['password']?> </h1>
        <?php } else{ ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                        <label for="password_length">Inserisci la lunghezza della password :</label>
                        <input type="number" name="password_length" id="password_length">
                        <input type="submit" value="submit">
                    </form>
                <?php } ?>
        

    </main>
   




</body>
</html>