<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
        include("../dbconnection/mysqlconfig_connection.php");
        
        if(isset($_POST['submit'])){
            $code= $_POST['code'];
            $author= $_POST['author'];
            $subject= $_POST['subject'];

            if(empty($code) || empty($author)){
                if(empty($code)){
                    echo "<font color='red'>Syllabus Code field is empty</font><br/>";
                }
                if(empty($author)){
                    echo "<font color='red'> "
                }
            }
        }
    </body>
</html>