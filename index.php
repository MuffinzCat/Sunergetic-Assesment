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

            $url = 'https://assignment.sunergetic.nl/api/v1/customers';
            $headers = array(
                    'Accept: application/json',
                    'Content-Type: application/x-www-form-urlencoded',
                    'token: 6vTr2lFu1P8i6mf3NJuqK8CPg3PG5y'
            );

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL,$url);
            curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);

            $data = curl_exec($curl);
            $data_obj=json_decode($data);

            curl_close($curl);

//            print_r($data);


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
<!--                    <td>$users->created_at</td>
                    <td>$users->updated_at</td> -->
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