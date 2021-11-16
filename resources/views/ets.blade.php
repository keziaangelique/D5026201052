<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ETS Kezia</title>

    <style>
        body {
            background: -webkit-repeating-radial-gradient(top left, #ccabd8, #86e3ce);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            justify-content: center;
            align-items: center;
            display: flex;
            min-height: 100vh;
        }

        form {
            padding: 15px 40px 40px;
        }

        .main {
            display: inline-flex;
            border-color: #c1c1c1;
            border-radius: 10px;
            background: white;
            margin: 50px auto;
        }

        .jurusan {
            width: 190px;
            height: 30px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        p {
            font-size: small;
            color: red;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="signin">
            <h3 class="mt-3">
                <center>Form Pendaftaran Kuota Internet</center>
            </h3>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="success.txt" onsubmit="return validation()">

                            <div class="form-group mt-3 mb-3">
                                <label for="name">Nama Mahasiswa:</label>
                                <input type="text" id="name" name="name" required minlength="2">
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <label for="nrp">NRP Mahasiswa:</label>
                                <input type="number" id="nrp" name="nrp" minlength="10"  required maxlength="10">
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <label for="jurusan">Jurusan:</label>
                                <select id="pilihjurusan" class="jurusan">
                                    <option value="0"></option>
                                    <option value="1">Sistem Informasi</option>
                                    <option value="2">Elektro</option>
                                    <option value="3">Informatiks</option>
                                </select>
                            </div>

                            <div class="form-group mt-3 mb-3">
                                <label for="phonenumber">Nomor Handphone:</label>
                                <input type="number" id="phonenumber" name="phonenumber" required minlength="10">
                            </div>

                            <div>
                                <center>
                                    <button type="submit" class="btn btn-primary" id="submit">Kirim</button> &nbsp;
                                    &nbsp;
                                    <button type="reset" class="btn btn-success">Reset</button>
                                </center>
                            </div>
                        </form>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js%22%3E"></script>

    <script>
        function validation() {
            var name = document.getElementById("name").value;
            var nrp_mhs = document.getElementById("nrp").value;
            var jrs = document.getElementById("pilihjurusan").value;
            var tlp = document.getElementById("phonenumber").value;


            var huruf = /^[A-Za-z\s]+$/;
            var angka = /^[0-9]*$/;

            if (name == '') {
                alert('Please enter your name');
            } else if (!huruf.test(name)) {
                alert('Name must be alphabet characters');
                document.getElementById("name").focus();
                return false;
            } else if (document.getElementById("name").value.length < 1) {
                alert('Name must be more than 1 alphabets');
                document.getElementById("name").focus();
                return false;
            } else if (nrp_mhs == '') {
                alert('Please input your nrp');
                document.getElementById("nrp").focus();
                return false;
            } else if (!angka.test(nrp_mhs)) {
                alert('NRP field must be numbers characters');
                document.getElementById("nrp").focus();
                return false;
            } else if (document.getElementById("nrp").value.length < 10) {
                alert('NRP must be 10 digits');
                document.getElementById("nrp").focus();
                return false;
            } else if (jrs == '') {
                alert('Please select an option!');
                document.getElementById("pilihjurusan").focus();
                return false;
            } else if (tlp == '') {
                alert('Please enter your phone number');
                document.getElementById("phonenumber").focus();
                return false;
            } else if (!angka.test(tlp)) {
                alert('Phone only numbers characters');
                document.getElementById("phonenumber").focus();
                return false;
            } else if (document.getElementById("tlp").value.length < 9) {
                alert('Phone number minimum length is 10 digits');
                document.getElementById("phonenumber").focus();
                return false;
            } else {
                alert('Thank You for the Registration');
                // Redirecting to other page.
                window.location = "https://www.google.com/";
                document.getElementById("name").focus();
                return true;
            }
        }
    </script>
</body>

</html>
