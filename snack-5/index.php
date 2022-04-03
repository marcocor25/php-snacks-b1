<!-- # Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragrafo_intero = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero perferendis consequuntur quam esse quo aperiam dolor officia. Incidunt possimus ducimus laudantium ipsa commodi! Labore esse deleniti atque accusamus voluptatibus qui consequuntur quam aliquid, ipsa officia dolorum magnam non voluptate exercitationem pariatur temporibus eos repellendus alias natus dolorem nostrum. Et, non.";

$paragrafo_diviso = explode(".", $paragrafo_intero);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

<body>

    <?php

    for ($i = 0; $i < count($paragrafo_diviso); $i++) {

    ?>
        <p>
            <?php

            echo $paragrafo_diviso[$i] . ".";

            ?>
        </p>

    <?php

    };

    ?>

</body>

</html>