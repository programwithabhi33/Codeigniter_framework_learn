<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td><pre><h3>Sno    </h3></pre></td>
            <td><pre><h3>Name    </h3></pre></td>
            <td><pre><h3>Id    </h3></pre></td>
        </tr>
        <?php
        // Accessing the $users key to $data array
        // Loop over them
        foreach ($users as $user) {

            echo ' <tr>
            // <td>' . $user['sno'] . '</td>
            <td>' . $user['name'] . '</td>
            // <td>' . $user['id'] . '</td>
         </tr>';
        }
        print_r($users);
        ?>

    </table>
</body>

</html>