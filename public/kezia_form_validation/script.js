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