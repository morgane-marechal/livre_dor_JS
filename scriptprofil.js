const profilPlace = document.getElementById("profilPlace");
const infoUpdate = document.getElementById("info");
const profilButton = document.getElementById("profil-button");


profilButton.addEventListener("click", () => {
    fetch('profil-form.php')
        .then(response => {
            return response.text();
        })
        .then(form => {
            console.log(form);
            profilPlace.innerHTML = form;
            let submit = document.getElementById("submit-profil");
            let profilForm = document.getElementById("profil_form");
            submit.addEventListener("click", (e) => {
                e.preventDefault();
                fetch("profil-form.php", {
                    method: "POST",
                    body: new FormData(profilForm)
                })
                    .then(response => {

                       // info.innerHTML="Mise à jour";
                        //window.location.replace("profil.php");
                        return response;
                    })
            })
        })
}) 

