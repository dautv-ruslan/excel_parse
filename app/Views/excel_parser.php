<!doctype html>
<html>
	<head>
		<title>Excel parser</title>
	</head>
	<body>
		<h1>Парсим excel файл в json</h1>
		<p>
			<form method="post" enctype="multipart/form-data">
				<label for="input_file">
					Введите название файла
				</label>
				<input name="userfile" id="input_file" type="file" />
            <button type="submit" name="submit" value="Submit">Отправить файл</button>
			</form>
		</p>
		<p>
			<?php 
				if ($json_object) 
					echo $json_object;
			?>
		</p>
	</body>
</html>
