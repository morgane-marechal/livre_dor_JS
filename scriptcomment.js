const commentPlace = document.getElementById("commentaire-place");
const commentButton = document.getElementById("commentaire-button");


commentButton.addEventListener("click", () => {
    fetch('commentaire.php')
        .then(response => {
            return response.text();
        })
        .then(form => {
            //console.log(form);
            commentPlace.innerHTML = form;
            let submit = document.getElementById("submit");
            let commentForm = document.getElementById("comment_form");
            submit.addEventListener("click", (e) => {
                e.preventDefault();
                fetch("commentaire.php", {
                    method: "POST",
                    body: new FormData(commentForm)
                })
                    .then(response => {
                        console.log(response)
                       // info.innerHTML="Mise à jour";
                        //window.location.replace("profil.php");
                        return response.text();
                    })
                    .then((content) => {
                        commentPlace.innerHTML=content
                        
                    })

            })
        })
}) 
commentButton.addEventListener("click", () =>{
    window.location.replace("livre-or.php");

});