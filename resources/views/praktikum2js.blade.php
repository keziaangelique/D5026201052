<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
    background: -webkit-repeating-radial-gradient(top left, #ccabd8, #86e3ce);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

form {
    width: 400px;
    padding: 15px 40px 40px;
    border-color: #c1c1c1;
    border-radius: 10px;
    background: white;
    margin: 50px auto;
}

.form {
    width: auto;
}

.form-control {
    background: #86e3cd2a;
}

.btn {
    width: 100%;
    font-size: 110%;
    font-weight: 600;
    background-color: #ccabd8;
    border-color: #ccabd8;
}

h3 {
    text-align: center;
}

p {
    text-align: center;
    color: red;
    font-size: x-small;
}
    </style>
    <title>Validation Form</title>
</head>

<body>
    <div class="container">
        <form name="form" action="success.txt" method="submit" onsubmit="return validateForm()">
            <div class="title">
                <h3>Form Validation</h3>
                <p>*All fields are required*</p>
            </div>
            <div class="form-group">
                <label class="">Full Name:</label>
                <input type="text" name="name" id="name" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label class="">Username(6-8 characters):</label>
                <input type="text" name="username" id="username" class="form-control mb-2" minlength="6" maxlength="8">
            </div>
            <div class="form-group">
                <label class="">Email:</label>
                <input type="email" name="email" id="email" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label class="">State:</label>
                <select name="state" id="state" class="form-control mb-2">
                    <option value="0">Choose State...</option>
                    <option value="1">New York</option>
                    <option value="2">Georgia</option>
                    <option value="4">Washington</option>
                </select>
            </div>
            <div class="form-group">
                <label class="">Address:</label>
                <input type="text" name="address" id="address" class="form-control mb-2">
            </div>
            <div class="form-group">
                <label class="">Zip Code:</label>
                <input type="number" name="zipcode" id="zipcode" class="form-control mb-2" min="100000" max="999999">
            </div>

            <button type="submit" class="btn btn-success mb-2">Check Form</button>

            <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>

        <script>
            function validateForm () {
    if (document.forms["form"]["name"].value == "") {
        alert("Please fill out your full name.");
        document.form.name.focus();
        return false;
    }

    if (!/^[a-zA-Z\s]+$/g.test(document.form.name.value)) {
        alert("Please fill out your full name with alphabet only.");
        document.form.name.focus();
        return false;
    }

    if (document.forms["form"]["username"].value == "") {
        alert ("Please fill out your username.");
        document.form.username.focus();
        return false;
    }

    if (document.forms["form"]["email"].value == "") {
        alert ("Please fill out your email.");
        document.form.email.focus();
        return false;
    }

    if (document.forms["form"]["state"].selectedIndex < 1) {
        alert ("Please choose one of the states.");
        document.form.state.focus();
        return false;
    }

    if (document.forms["form"]["addres"].value == "") {
        alert ("Please fill out your address.");
        document.form.address.focus();
        return false;
    }

    if (document.forms["form"]["zipcode"].value == "") {
        alert ("Please fill out your zipcode.");
        document.form.zipcode.focus();
        return false;
    }
}
        </script>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
