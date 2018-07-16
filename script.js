$(function() {
    $("#contact").submit(function() {
        var nom = $("#nom").val();
        var sujet = $("#sujet").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var dataString = nom + sujet + email + message;
        var msg_all = "Merci de remplir tous les champs";
        var msg_alert = "Merci de remplir ce champs";

        if (dataString == "") {
            $("#msg_all").html(msg_all);
        } else if (nom == "") {
            $("#msg_nom").html(msg_alert);
        } else if (sujet == "") {
            $("#msg_sujet").html(msg_alert);
        } else if (email == "") {
            $("#msg_email").html(msg_alert);
        } else if (message == "") {
            $("#msg_message").html(msg_alert);
        } else {
            $.ajax({
                type: "POST",
                url: 'process.php',
                data: $('#contact').serialize(),
                success: function() {
                    swal("Parfait !", "Ton message m'as été envoyé", "success");
                },
                error: function() {
                    swal("Zut !", "Une erreur est survenu, veuillez rééssayez plus tard", "error");
                }
            });
        }
        return false;
    });
});