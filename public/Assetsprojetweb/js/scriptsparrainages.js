

    // Simulation de récupération des points de fidélité de l'utilisateur
    const pointsFidelite = 150; // Exemple de points stockés côté serveur

    document.querySelector('.btn-block:nth-child(2)').addEventListener('click', function () {
        alert("Vous avez " + pointsFidelite + " points de fidélité.");
    });
    document.addEventListener('DOMContentLoaded', function() {
        // Générer un code de parrainage unique
        const parrainageCode = generateParrainageCode();
        
        // Afficher le code de parrainage dans la page
        document.getElementById('parrainageCode').textContent = ("http://zeduc-space/register?=")+parrainageCode;
        
        // Générer le QR code avec le code de parrainage
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text:("http://zeduc-space/register?=")+ parrainageCode,  // Texte pour générer le QR Code
            width: 128,            // Largeur du QR code
            height: 128            // Hauteur du QR code
        });
    
        // Fonction pour copier le code dans le presse-papier
        document.getElementById('copyButton').onclick = function() {
            copyToClipboard(parrainageCode);
        };
    });
    
    // Fonction pour générer un code de parrainage unique
    function generateParrainageCode() {
        const length = 10;
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let code = '';
        for (let i = 0; i < length; i++) {
            code += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return code;
    }
    
    // Fonction pour copier le texte dans le presse-papier
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text)
        .then(() => {
            alert('Code parrainage copié : ' + text);
        })
        .catch(err => {
            console.error('Erreur lors de la copie du texte : ', err);
        });
    }
    

