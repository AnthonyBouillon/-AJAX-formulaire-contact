$("#submitC").click(function(e) {

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "process.php",
        // SERIALIZE permet de récupérer toutes les informations saisies dans le formulaire
        data: $("#formC").serialize(),
        // success et error permet de savoir si ajax fonctionne ou non
        success: function() {
            swal("Parfait !", "Ton message m'as été envoyé", "success");
        },
        error: function() {
            swal("Zut !", "Une erreur est survenu, veuillez rééssayez plus tard", "error");
        }
    });
});