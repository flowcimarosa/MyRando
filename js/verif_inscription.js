var pseudoRegex = new RegExp(/^[a-zA-Z0-9\-\_ éèàêâùîïüë]{3,30}$/);
var emailRegex = new RegExp(/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/);

function writedivm(text, checkid) {
    document.getElementById(checkid).innerHTML = text;
}

function check_mail() {
    var mail = document.getElementById("mail");
    var mail2 = document.getElementById("mail2");
    if (mail.value == mail2.value) {
        mail2.innerHTML = alert('Les mails correspondent !');
        mail2.innerHTML = "<div class='info_green'></div>";
        document.getElementById("mail2").style.border = "1px solid #1A7917";
        document.getElementById("mail2").style.boxShadow = "1px 2px 2px #1A7917 inset";
    } else {
        mail2.innerHTML = alert('Les mails ne correspondent pas !');
        mail2.innerHTML = "<div class='info_red'></div>";
        document.getElementById("mail2").style.border = "1px solid red";
        document.getElementById("mail2").style.boxShadow = "1px 2px 2px red inset";
         
    }
}

function check_pwd() {
    var pwd = document.getElementById("pwd");
    var pwd2 = document.getElementById("pwd2");
    if (pwd.value == pwd2.value) {
        pwd2.innerHTML = alert('Les mots de passes correspondent !');
        pwd2.innerHTML = "<div class='info_green'></div>";
        document.getElementById("pwd2").style.border = "1px solid #1A7917";
        document.getElementById("pwd2").style.boxShadow = "1px 2px 2px #1A7917 inset";
    } else {
        pwd2.innerHTML = alert('Les mots de passes ne correspondent pas !');
        pwd2.innerHTML = "<div class='info_green'></div>";
        document.getElementById("pwd2").style.border = "1px solid red";
        document.getElementById("pwd2").style.boxShadow = "1px 2px 2px red inset";
    }
}

function verifPseudo(pseudo) {
    var pfverif = document.getElementById("pseudo");
    var checkid = "pseudo";

    if (!pseudo || 0 === pseudo.length) {
        pfverif.innerHTML = alert("Ce champ est obligatoire !");
        pfverif.innerHTML = "<div class='info_red'></div>";
        document.getElementById("pseudo").style.border = "1px solid red";
        document.getElementById("pseudo").style.boxShadow = "1px 2px 2px red inset";
        return false;
    }
    else if (pseudoRegex.test(pseudo)) {

        if (text = file('php/verifpseudo.php?pseudo=' + escape(pseudo)))
        {
            if (text == 1) {
                alert("Ce pseudo est deja pris !");
                writedivm("<div class='info_red'></div>", checkid);
                document.getElementById("pseudo").style.border = "1px solid red";
                document.getElementById("pseudo").style.boxShadow = "1px 2px 2px red inset";
            }
            else if (text == 2) {
                writedivm("<div class='info_green'></div>", checkid);
                document.getElementById("pseudo").style.border = "1px solid #1A7917";
                document.getElementById("pseudo").style.boxShadow = "1px 2px 2px #1A7917 inset";
            }
            else
                writedivm(text, checkid);
        }
        return true;
    }

    else {
        pfverif.innerHTML = alert("Ce pseudo n'est pas valide !");
        document.getElementById("pseudo").style.border = "1px solid red";
        document.getElementById("pseudo").style.boxShadow = "1px 2px 2px red inset";
        return false;
    }

}

function verifMail(email) {
    var pfverif = document.getElementById("emailcheck");
    var checkid = "emailcheck";

    if (!email || 0 === email.length) {
        pfverif.innerHTML = alert("Ce champ est obligatoire !");
        pfverif.innerHTML = "<div class='info_red'></div>";
        document.getElementById("mail").style.border = "1px solid red";
        document.getElementById("mail").style.boxShadow = "1px 2px 2px red inset";
        return false;
    }
    else if (emailRegex.test(email)) {

        if (text = file('php/verifmail.php?email=' + escape(email)))
        {
            if (text == 1) {
                pfverif.innerHTML = alert("Cette adresse e-mail est déjà utilisée !");
                writedivm("<div class='info_red'></div>", checkid);
                document.getElementById("mail").style.border = "1px solid red";
                document.getElementById("mail").style.boxShadow = "1px 2px 2px red inset";
            }
            else if (text == 2) {
                writedivm("<div class='info_green'></div>", checkid);
                document.getElementById("mail").style.border = "1px solid #1A7917";
                document.getElementById("mail").style.boxShadow = "1px 2px 2px #1A7917 inset";
            }
            else
                writedivm(text, checkid);
        }
        return true;
    }

    else {
        pfverif.innerHTML = alert("Cette adresse e-mail n'est pas valide !\n Exemple d'adresse : exemple@exemple.fr");
        pfverif.innerHTML = "<div class='info_red'></div>";
        document.getElementById("mail").style.border = "1px solid red";
        document.getElementById("mail").style.boxShadow = "1px 2px 2px red inset";
        return false;
    }

}

//open a file
function file(fichier)
{
    if (window.XMLHttpRequest) // FIREFOX
        xhr_object = new XMLHttpRequest();
    else if (window.ActiveXObject) // IE
        xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
    else
        return(false);
    xhr_object.open("GET", fichier, false);
    xhr_object.send(null);
    if (xhr_object.readyState == 4)
        return(xhr_object.responseText);
    else
        return(false);
}