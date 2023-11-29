<?php
    include_once("dbconnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SAMPLE CRUD</title>
</head>
<body>
    <h1>My Subject</h1>
    <a href="forms/addforms.php">Add Subject</a>
    <table width='100%' border= 1>
        <tr bgcolor='#CCCCCC'>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
            <td>Syllabus ID</td>
            <td>Syllabus Code</td>
            <td>Syllabus Author</td>
        </tr>
        <?php
            while($res = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$res['subject_id']."</td>";
                echo "<td>".$res['subject_code']."</td>";
                echo "<td>".$res['subject_name']."</td>";
                echo "<td>".$res['Syllabus_ID']."</td>";
                echo "<td>".$res['Syllabus_Code']."</td>";
                echo "<td>".$res['Syllabus_Author']."</td>";
                echo "<td></td><a href=\"forms/editform.php?id=$res[subject_id]\">Edit</a> |
                        <a href=\"functions/delete.php?id=$res[subject_id]\"
                        onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";
            }
        ?>
    </table>
</body>
</html>