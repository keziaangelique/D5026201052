<!doctype html>
<html lang="id">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        html {
    scroll-behavior: smooth;
}

footer {
    background-color: black;
    color: #ffffff;
    font-family: 'Montserrat', sans-serif;
}

.lead {
    font-size: 25px;
}


.title {
    background-color:#006967;
    font-family: 'Montserrat', sans-serif;
    color: white;
}

body {
    background-color: #05b3af;
}

.form-group {
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
    color: white;
}

#form span {
    font-size: 16px;
}
    </style>
    <title>WhatsApp Link Generator</title>
</head>

<body>

    <div class="title">
        <div class="container">
            <br>
            <h1 class="display-4 font-weight-bolder text-center">
                <b>WhatsApp Link Generator</b>
            </h1>
            <br>
        </div>
    </div>

    <section id="form" class="my-5">
        <div class="container col-lg-6">
            <form action="" class="my-5">
                <div class="form-group text-center">
                    <label for="nomor">Write the recipient's WhatsApp number here :</label>
                    <input type="text" class="form-control" name="nomor" id="nomor" placeholder="+6281234567890">
                </div>
                <div class="form-group text-center">
                    <label for="content">Message :</label>
                    <textarea class="form-control" name="content" id="content" placeholder="Write your message here..."
                        rows="5"></textarea>
                </div>
                <div class="form-group text-center">
                    <button onclick="validasi()" type="button" class="btn btn-success my-1 font-weight-bold"> Create
                        Link </button>
                    <span> or </span>
                    <button onclick="hapus()" type="button" class="btn btn-danger my-1 font-weight-bold"> Reset
                    </button>
                </div>
            </form>
            <div id="link">
                <div class="card alert alert-default">
                    The link will appear here.
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container py-5 text-center">
            <b>WhatsApp Link Generator</b>
        </div>
    </footer>

    <script>
        function buatLink() {
    let data = $("form").serializeArray();
    let nomorWhatsApp = data[0]["value"];
    let isiPesan = data[1]["value"];
    let link = "https://api.whatsapp.com/send?phone="
    link += nomorWhatsApp;
    isiPesan = isiPesan.split(" ");
    isiPesan = isiPesan.join("%20");
    isiPesan = isiPesan.split("\n")
    isiPesan = isiPesan.join("%0A")
    link += ("&text=" + isiPesan);
    document.getElementById("link").innerHTML = "<a class='card alert alert-success' href='" +
        link + "' target='_blank'>" + link + "</a>";
}

function validasi() {
    let nomorWhatsApp = document.getElementById("nomor").value;
    if (nomorWhatsApp === "") {
        document.getElementById("link").innerHTML = "<div class='card alert alert-danger'>" +
            "Please insert the recipient number.</div>";
    } else if (!(nomorWhatsApp.includes("+628"))) {
        document.getElementById("link").innerHTML = "<div class='card alert alert-danger'>" +
            "Sorry, the number is invalid! (must include +628).</div>";
    } else if (nomorWhatsApp.length < 12) {
        document.getElementById("link").innerHTML = "<div class='card alert alert-danger'>" +
            "Sorry, the number is invalid! (less than 10 digits).</div>";
    } else if (nomorWhatsApp.length > 15) {
        document.getElementById("link").innerHTML = "<div class='card alert alert-danger'>" +
            "Sorry, the number is invalid! (more than 13 digits).</div>";
    } else {
        buatLink();
    }
}

function hapus() {
    document.getElementById("nomor").value = "";
    document.getElementById("content").value = "";
}
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>


</body>

</html>