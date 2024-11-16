<?php
$matrix =
[
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "Shape 1:<br>";
for ($i = 0; $i < count($matrix); $i++)
{
    for ($j = 0; $j < count($matrix[$i]); $j++)
    {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>Shape 2:<br>";
for ($i = 0; $i < 3; $i++)
{
    for ($j = 0; $j <= $i; $j++)
    {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>Shape 3:<br>";
for ($i = 0; $i < count($matrix); $i++)
{
    for ($j = $i; $j < count($matrix[$i]); $j++)
    {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>Shape 4:<br>";
for ($i = 0; $i < count($matrix); $i++)
{
    for ($j = $i; $j < count($matrix[$i]); $j++)
    {
        if (is_string($matrix[$i][$j]))
        {
            echo $matrix[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>