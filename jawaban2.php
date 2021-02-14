<!DOCTYPE html>
<html>

<head>
    <meta charset="8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#listProducts').DataTable();
        });
    </script>

    <?php
    $dataProduct = array(
        "Chai" => array(
            "qty" => "10 boxes x 20 bags",
            "price" => 18,
            "stock" => 39
        ),
        "Chang" => array(
            "qty" => "24 - 12 oz bottles",
            "price" => 19,
            "stock" => 17
        ),
        "Aniseed Syrup" => array(
            "qty" => "12 - 550 ml bottles",
            "price" => 10,
            "stock" => 13
        ),
        "Chef Anton's Cajun Seasoning" => array(
            "qty" => "48 - 6 oz jars",
            "price" => 22,
            "stock" => 53
        ),
        "Chef Anton's Gumbo Mix" => array(
            "qty" => "36 boxes",
            "price" => 21.35,
            "stock" => 0
        ),
        "Grandma's Boysenberry Spread" => array(
            "qty" => "12 - 8 oz jars",
            "price" => 25,
            "stock" => 120
        ),
        "Uncle Bob's Organic Dried Pears" => array(
            "qty" => "12 - 1 lb pkgs",
            "price" => 30,
            "stock" => 15
        ),
        "Northwoods Cranberry Sauce" => array(
            "qty" => "12 - 12 oz jars",
            "price" => 40,
            "stock" => 67
        ),
        "Mishi Kobe Niku" => array(
            "qty" => "18 - 500 g pkgs",
            "price" => 97,
            "stock" => 29
        ),
        "Ikura" => array(
            "qty" => "12 - 200 ml jars",
            "price" => 31,
            "stock" => 31
        ),
        "Queso Cabrales" => array(
            "qty" => "1 kg pkg",
            "price" => 21,
            "stock" => 22
        ),
        "Queso Manchego La Pastora" => array(
            "qty" => "10 - 500 g pkgs",
            "price" => 38,
            "stock" => 86
        )
    );
    ?>
</head>

<body>
    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">[IF635] Web Programming</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Products</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <table id="listProducts" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity per Unit</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nama = array_keys($dataProduct);
                for ($i = 0; $i < count($dataProduct); $i++) {
                    $a = $i+1;
                    echo "<tr>";
                    echo "<td>$a</td>";
                    echo "<td>$nama[$i]</td>";
                    echo "<td>" . $dataProduct[$nama[$i]]['qty'] . "</td>";
                    echo "<td>" . $dataProduct[$nama[$i]]['price'] . "</td>";
                    echo "<td>" . $dataProduct[$nama[$i]]['stock'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Quantity per Unit</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>