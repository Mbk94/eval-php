document.addEventListener('DOMContentLoaded', function () {
    const image = document.getElementById('banniere');
    image.style.position = "absolute";
    image.style.top = "150px";

    let pos = -200; // départ hors écran
    const vitesse = 3; // pixels par frame

    function defile() {
        pos += vitesse;

        // largeur de la fenêtre
        const largeurEcran = window.innerWidth;

        // si l'image est sortie de l'écran → repartir à gauche
        if (pos > largeurEcran) {
            pos = -image.width;
        }

        image.style.left = pos + "px";
        requestAnimationFrame(defile);
    }

    defile();

});