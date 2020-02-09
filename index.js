const btnLogin = document.getElementById('btnLogin');



btnLogin.addEventListener("click", () => {

    let user = document.getElementById('user').value;
    let pass = document.getElementById('pass').value;

    if (user === "ADMIN" & pass === "ROOT") {

        alert("Succesful")
        window.location = "selectDB.html"

    } else {

        alert("Error");
        let user = document.getElementById('user').value ="";
        let pass = document.getElementById('pass').value= "";

    }


})