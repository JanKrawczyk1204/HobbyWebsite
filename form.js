function suggestingTeam() {
    var para = document.createElement("DIV");
    var d = document.forms["contact"]["data_ur"].value;
    d = d.slice(0, 4);
    var age = 2021 - d;
    var message = "";
    if (age < 6) {
        message = "Niestety jestes jeszcze za mlody";
    }
    else if (age < 11) {
        message = "Polecam gromade zuchowa (GZ)";
    }
    else if (age < 17) {
        message = "Polecam druzyne harcerska (DH)";
    }
    else if (age < 22) {
        message = "Polecam druzyne wedrownicza (DW)";
    }
    else {
        message = "Niestety jestes juz za stary";
    }
    para.innerText = message;
    document.getElementById("wrapper").appendChild(para);
}
function submmitingName() {
    if (window.sessionStorage) {
        sessionStorage.name = document.forms["contact"]["fname"].value;
        document.getElementById("zmiana").innerHTML = ("Witaj " + sessionStorage.name + "!");
    }
}

function startingWithName() {
    if (window.sessionStorage) {
        if (sessionStorage.name) {
            document.getElementById("zmiana").innerHTML = ("Witaj " + sessionStorage.name + "!");
        }
    }
}

function savingForm() {
    if (window.localStorage) {
        localStorage.name = document.forms["contact"]["fname"].value;
        localStorage.surname = document.forms["contact"]["lname"].value;
        localStorage.neighborhood = document.forms["contact"]["neighborhood"].value;
        localStorage.pesel = document.forms["contact"]["pesel"].value;
        localStorage.data_ur = document.forms["contact"]["data_ur"].value;
        localStorage.email = document.forms["contact"]["email"].value;
    }
}

function fillingForm() {
    if (window.localStorage) {
        if (localStorage.name) {
            document.forms["contact"]["fname"].value = localStorage.name;
        }
        if (localStorage.surname) {
            document.forms["contact"]["lname"].value = localStorage.surname;
        }
        if (localStorage.neighborhood) {
            document.forms["contact"]["neighborhood"].value = localStorage.neighborhood;
        }
        if (localStorage.pesel) {
            document.forms["contact"]["pesel"].value = localStorage.pesel;
        }
        if (localStorage.data_ur) {
            document.forms["contact"]["data_ur"].value = localStorage.data_ur;
        }
        if (localStorage.email) {
            document.forms["contact"]["email"].value = localStorage.email;
        }
    }
}

function onPressingButton() {
    submmitingName();
    suggestingTeam();
}