<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td{
        border: 1px solid black;
    }
    table{
        border-collapse: collapse;
    }
    </style>
</head>
    <body>
        <?php
        include('db.php');
        $panel=array('id','username','parol','born','name','jins','mail');
        $result=mysqli_query($connect,"select * from login_panel");
        echo '<table>'; 
        echo '<tr>';
          foreach($panel as $bosh){
                echo '<td>'.$bosh.'</td>';
            }
        echo '</tr>';
        while($massiv = mysqli_fetch_array($result)){
            echo '<tr>';
            for(let i=0; i<count())
            echo '</tr>';
        }

        ?> 
    </body>
</html>




