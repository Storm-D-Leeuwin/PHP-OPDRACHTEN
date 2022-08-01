<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <header>Al het brood</header>

        <div class="">
            <table>
                <thead>
                    <tr class="thead">
                        <th class="text">ID</th>
                        <th class="text">Meel</th>
                        <th class="text">Vorm</th>
                        <th class="text">Gewicht</th>
                        <th class="text">Aanpassen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include_once('model.php');
                    $model = new Model();
                    $rows = $model->fetch();

                    $i = 1;

                    if (!empty($rows)) {
                        foreach ($rows as $row) {

                    ?>

                            <tr class="tbody">
                                <td> <?php echo $i++; ?> </td>
                                <td> <?php echo $row['meel']; ?> </td>
                                <td> <?php echo $row['vorm']; ?> </td>
                                <td> <?php echo $row['gewicht'] . 'g'; ?> </td>
                                <td>
                                    <a href="read.php?id<?php echo $row['id']; ?>">Read</a>
                                    <a href="delete.php?id<?php echo $row['id']; ?>">Delete</a>
                                    <a href="edit.php?id<?php echo $row['id']; ?>">Edit</a>
                                </td>
                            </tr>

                    <?php

                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>