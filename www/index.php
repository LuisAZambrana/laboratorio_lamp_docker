<html>
    <head>
        <title>Laboratorio Lamp</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>¡Laboratorio con Lamp!</h1>";
		echo "<h2>...a continuación consulta a la base para que veas la conexion </h2>";

                $conn = mysqli_connect('db', 'root', 'test');   
                $database = mysqli_select_db($conn, 'dbname');  
            
                $query = 'SELECT * From Personas';
                $result = mysqli_query($conn, $query);

                echo '<table class="table table-striped">';
                echo '<thead><tr><th></th><th>id</th><th>nombre</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                    echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
                    foreach($value as $element){
                        echo '<td>' . $element . '</td>';
                    }

                    echo '</tr>';
                }
                echo '</table>';

                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>
