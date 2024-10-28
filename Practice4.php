<!DOCTYPE html>
<html>

<head></head>
    <h1>EECS Practice Four</h1>

<body>
    <form action="Practice4.php" method="post">
        Size of the multiplication table(Enter a Single Number): <input type="text" name="input_var"><br>
        <input type="submit">
    </form>
</body>

<?php
$input_num = $_GET["input_var"];

echo "<table>";
for($row = 0; $row <= $input_num; $row++) {
    echo "<tr>";
    for ($col = 0; $col <= $input_num; $col++){
        if($row == 0){
            echo "<th style=\"background-color: #FFC0CB\">" , $col, "</th>";
            continue;
        } else if ($col == 0) {
            echo "<th style=\"background-color: #FFC0CB\">" , $row, "</th>";
            continue;
        }
        echo "<th>", $row*$col, "</th>";
    }
    echo "</tr>";
}
echo <"</table>";
?>

</html>