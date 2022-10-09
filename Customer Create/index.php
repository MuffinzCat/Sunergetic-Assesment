<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Customer</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container" style="padding-top: 12px">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1>Add Customer</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form>
                <div class="row">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName">
                    </div>
                    <div class="col-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="adress" class="form-label">Adress</label>
                        <input type="text" class="form-control" id="adress">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="zipcode" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zipcode">
                    </div>
                    <div class="col-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                </div>
                <div style="padding-top: 12px" class="row">
                    <div class="col-6">
                        <a href="../index.php" class="btn btn-outline-danger">Cancel</a>
                    </div>
                    <div class="col-6">
                        <button onclick="addCustomer()" class="btn btn-outline-primary">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>

<script>
    function addCustomer() {
        //list of variables to be sent to the database
        var email = document.getElementById('email').value;
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var adress = document.getElementById('adress').value;
        var zipcode = document.getElementById('zipcode').value;
        var city = document.getElementById('city').value;
        var phone = document.getElementById('phone').value;

        //setup for sending the html request
        const http = new XMLHttpRequest()
        //adding variables to the request
        const url = 'https://assignment.sunergetic.nl/api/v1/customers?email=' + email + '&firstname=' + firstName + '&lastname=' + lastName + '&adress=' + adress + '&zipcode=' + zipcode + '&city=' + city + '&phone=' + phone;

        http.open("POST", url)

        //adding headers for the request
        http.setRequestHeader('Accept','application/json')
        http.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
        http.setRequestHeader('token','6vTr2lFu1P8i6mf3NJuqK8CPg3PG5y')

        http.send();

    }
</script>

<script src="../js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>