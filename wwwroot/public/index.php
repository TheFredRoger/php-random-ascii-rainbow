<?php
/**
 * Created by PhpStorm.
 * User: frederickroger
 * Date: 12-04-2016
 * Time: 00:33
 */

// Number of characters that will be generated
$length = 25000;
$j = 0;

function randLetter()
{
    // The range for ASCII characters start from 33 to avoid system characters,
    // ends at 254 to eliminate the last empty character
    // and escape character number 127; the space character
    $i = 0;
    $int = 0;
    while ($int != 127 && $i < 1) {
        $int = rand(33, 254);
        $i++;
    }
    $rand_letter = chr($int);
    // Converting to utf-8 from ASCII to avoid the "lozange-question-mark" issue.
    return mb_convert_encoding($rand_letter, "UTF-8", "ASCII");
}

function randColorRGB()
{
    // We get a random int for each of the 3 params of the rgb color style.
    $intR = rand(0, 255);
    $intG = rand(0, 255);
    $intB = rand(0, 255);
    $rand_color = 'color:rgba(' . $intR . ',' . $intG . ',' . $intB . ',1)';
    return $rand_color;
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- En-tête de la page -->
    <meta charset="utf-8"/>
    <title>Titre</title>
    <style>
        .main {
            font-size: 9px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="main">

            <?php for ($j = 0; $j < $length; $j++): ?>
                <span style="<?php echo randColorRGB(); ?>">
                <?php echo randLetter(); ?>
                </span>
            <?php endfor; ?>

</div>
</body>
</html>