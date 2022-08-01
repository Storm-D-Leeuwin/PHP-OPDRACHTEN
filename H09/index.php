<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    <title>Bakkerij</title>
</head>

<body>

    <div class="container">

        <header>Brood toevoegen</header>

        <div class="info">

            <?php

            include_once('model.php');
            $model = new Model();
            $insert = $model->insert();

            ?>

            <form action="" method="POST">
                Meel:
                <select name="meel" id="">
                    <option value="volkoren">Volkoren</option>
                    <option value="spelt">Spelt</option>
                    <option value="rogge">Rogge</option>
                </select>
                <br>
                Vorm:
                <select name="vorm" id="">
                    <option value="bolvorm">Bolvorm</option>
                    <option value="vierkant">Vierkant</option>
                    <option value="rond">Rond</option>
                    <option value="rechthoekig">Rechthoekig</option>
                </select>
                <br>
                Gewicht:
                <input type="text" name="gewicht" id="">
                g
                <br>
                <button type="submit" name="submit">Verzenden</button>
            </form>
        </div>
        <a href="brood.php">broodbakkerij</a>
    </div>

</body>

</html>