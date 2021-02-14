<!DOCTYPE html>
<html>

<body>
    <?php
    $arr2dim = array(
        "India" => array(
            "ibu kota" => "New Delhi",
            "kode telepon" => 91,
            "mata uang" => "INR"
        ),
        "Indonesia" => array(
            "ibu kota" => "Jakarta",
            "kode telepon" => 62,
            "mata uang" => "IDR"
        ),
        "Japan" => array(
            "ibu kota" => "Tokyo",
            "kode telepon" => 81,
            "mata uang" => "JPY"
        )
    );

    $negara = array_keys($arr2dim);
    $jumlah = count($arr2dim);

    for($i = 0; $i < $jumlah; $i++){
        echo "<strong>" . $arr2dim[$negara[$i]]['ibu kota'] . "</strong>" . ' is capital city of ' . "<strong>" . $negara[$i] . "</strong>. ";
        echo "<u>" . $negara[$i] . '\'s calling code is ' . $arr2dim[$negara[$i]]['kode telepon'] . ' and has "' .
            $arr2dim[$negara[$i]]['mata uang'] . '" as currency code' . "</u>";
        echo "<br>";
    }
    ?>
</body>

</html>