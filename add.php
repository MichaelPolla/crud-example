<html>
    <head>
        <meta charset="UTF-8">  
        <title> Add new data </title>
    </head>

    <body>
        <?php
            include_once("config.php");

            if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $birthdate = $_POST['birthdate'];

                $sql = "INSERT INTO users(name, email, birthdate) VALUES (:name, :email, :birthdate)";
                
                $query = $db->prepare($sql);

                $query->bindparam(':name', $name);
                $query->bindparam(':email', $email);
                $query->bindparam(':birthdate', $birthdate);

                $query->execute();

                // this test is not really needed, as PDO will throw an exception if something fails
                if($query) { 
                    echo "User added !";
                } else {
                    echo "Error while adding user...";
                }

            }

        ?>
    </body>
</html>