<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Fall Calculator</title>
    <style>
        body {
            background-color: white;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .container {
            box-shadow: 0 15px 15px #c1c1c1;
            border-radius: 10px;
            background: -webkit-repeating-radial-gradient(top left, #ccabd8, #86e3ce);
            width: 450px;
            padding: 15px 40px 40px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            text-align: center;
        }

        .title {
            font-size: 50px;
            color: white;
        }

        .input_box {
            width: 50%;
            margin-left: 95px;
            margin-bottom: 42px;
        }

        label {
            font-size: 30px;
            font-weight: 600;
            color: white;
        }

        input {
            width: 100%;
            height: 50px;
            border-radius: 9px;
            border: 2px solid #d2d2d2;
            outline: none;
            margin-top: 8px;
            padding: 0 10px;
        }

        input:focus {
            border: 2px dashed #ffffff;
            background-color: #ffffff;
        }

        button{
            border: none;
            width: 100px;
            height: 50px;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;
        }

        button:hover{
            background-color: #d2d2d2;
        }

        .button{
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
                <p><center>Free Fall Calculator</center></p>
        </div>
        <form action="glbb.php" method="$_POST">
        <div class="input_box">
            <label for="gravitasi">Gravitasi</label>
            <input type="number" id="gravitasi"  name="gravitasi" placeholder="">
        </div>
        <div class="input_box">
            <label for="kecepatanAwal">Kecepatan Awal</label>
            <input type="number" id="kecepatanAwal"  name="kecepatanAwal" placeholder="">
        </div>
        <div class="input_box">
            <label for="waktu">Waktu</label>
            <input type="number" id="waktu"  name="waktu" placeholder="">
        </div>

        <div class="button">
            <button type="submit">Calculate</button>
        </div>
        </form> 
    </div>

</body>

</html>