$(document).ready(function () {


    // Si le parent est connécter
    // $("#showNotification").hide();
    $("#showCahierTexte").hide();
    $("#btnAfficherLesNotifications").hide();

    $("#btnAfficherLesNotifications").click(function (e) {
        $("#showNotification").show();
        $("#btnAfficherCahierTexte").show();
        $("#showCahierTexte").hide();
        $("#btnAfficherLesNotifications").hide();
        $("#showContenuPointage").hide();

    });


    $("#btnAfficherCahierTexte").click(function (e) {
        $("#showNotification").hide();
        $("#btnAfficherCahierTexte").hide();
        $("#showCahierTexte").show();
        $("#btnAfficherLesNotifications").show();
        $("#showContenuPointage").hide();
    });


    // Si l'éléve est connécter
    $("#showAbsences").hide();
    $("#showInscriptions").hide();

    $("#btnShowAbsences").click(function () {
        $("#showAbsences").show();
        $("#showNotes").hide();
        $("#showInscriptions").hide()
        return false;
    });

    $("#btnShowInscriptions").click(function () {
        $("#showInscriptions").show();
        $("#showNotes").hide();
        $("#showAbsences").hide();
    });

    $("#btnShowNotes").click(function () {
        $("#showNotes").show();
        $("#showAbsences").hide();
        $("#showInscriptions").hide();
    });


    // Si le comptable est connécter
    $("#btnShowListeFacture").hide();
    $("#btnShowHistoriqueFacture").show();
    $("#historiqueFacture").hide();

    $("#btnShowHistoriqueFacture").click(function (e) {
        $("#btnShowHistoriqueFacture").hide();
        $("#btnShowListeFacture").show();
        $("#historiqueFacture").show();
        $("#listeFacture").hide();
        $("#listeMensualite").hide();
        $("#listeDroitInscription").hide();
        return false;
    });


    $("#btnShowListeFacture").click(function (e) {
        $("#btnShowHistoriqueFacture").show();
        $("#btnShowListeFacture").hide();
        $("#listeFacture").show();
        $("#historiqueFacture").hide();
        $("#listeMensualite").hide();
        $("#listeDroitInscription").hide();
        return false;
    });


    // Affiche Les Droits d'inscription
    $("#btnShowFraisInscription").show();
    $("#btnShowMensualite").hide();
    $("#listeMensualite").hide();
    $("#listeDroitInscription").hide();

    $("#btnShowFraisInscription").click(function (e) {
        $("#btnShowFraisInscription").hide();
        $("#btnShowMensualite").show();
        $("#listeFacture").hide();
        $("#historiqueFacture").hide();
        $("#listeMensualite").hide();
        $("#listeDroitInscription").show();
        return false;
    });
    $("#btnShowMensualite").click(function (e) {
        $("#btnShowFraisInscription").show();
        $("#btnShowMensualite").hide();
        $("#listeFacture").hide();
        $("#historiqueFacture").hide();
        $("#listeDroitInscription").hide();
        $("#listeMensualite").show();

        return false;
    });


})
