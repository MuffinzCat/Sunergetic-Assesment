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
<div class="container" style="padding-top: 12px">
    <div class="row">
        <div class="col-10">
            <h1>Sunergetic Customer Info</h1>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-primary" href="Customer Create/index.php">Add Customer</a>
        </div>
    </div>
    <div class="row">
        <div class='col-12'>
            <table class="table table-striped border">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <td>Email</td>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Adress</td>
                    <td>Zip Code</td>
                    <td>City</td>
                    <td>Tel.</td>
                    <!--                <td>Created At</td>-->
                    <!--                <td>Updated At</td>-->
                </tr>
                </thead>
                <tbody>
                <?php

                //setting the url for the http get request
                $url = 'https://assignment.sunergetic.nl/api/v1/customers';
                //adding the headers for the http get request
                $headers = array(
                    'Accept: application/json',
                    'Content-Type: application/x-www-form-urlencoded',
                    'token: 6vTr2lFu1P8i6mf3NJuqK8CPg3PG5y'
                );

                //opening the get request
                $curl = curl_init();

                //adding the correct data to the request
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

                //executing request
                $data = curl_exec($curl);
                //converting received information to object
                $data_obj = json_decode($data);

                curl_close($curl);

                foreach ($data_obj->data as $users) {
                    echo "
                <tr>
                    <th scope='row'>$users->id</th>
                    <td>$users->email</td>
                    <td>$users->firstname</td>
                    <td>$users->lastname</td>
                    <td>$users->address</td>
                    <td>$users->zipcode</td>
                    <td>$users->city</td>
                    <td>$users->phone</td>
               <!-- <td>$users->created_at</td>
                    <td>$users->updated_at</td> -->
                </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>

</script>

<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>