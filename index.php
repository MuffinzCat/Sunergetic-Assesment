<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sunergetic Customer Information</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-12">
        <h1>Sunergetic Customer Info</h1>
    </div>
    <div class='col-12'>
        <table class="table table-striped border">
            <thead>
            <tr>
                <th>
                    Customer Table:
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($x = 0; $x < 10; $x++) {
                echo "<tr>
<th scope='row'>id</th>
<td>email@email.exmp</td>
<td>Firstname</td>
<td>Lastname</td>
<td>Adress 3\n1234xa Mpllen</td>
<td>1234ZP</td>
<td>(TEL) 1234567890</td>
<td>CREATED AT</td>
<td>UPDATED AT</td>
</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>