//On va chercher la valeur des champs du formulaire
const bouton = document.getElementById('bouton'),
    prenom = document.getElementById('prenom'),
    nom = document.getElementById('nom'),
    mas = document.getElementById('mas'),
    fem = document.getElementById('fem'),
    adresse = document.getElementById('adresse'),
    email = document.getElementById('email'),
    demande = document.getElementById('demande'),
    //Les regex afin de veiller au bon remplissage du formulaire 
    regexNomEtPrenom = /^[a-zA-ZáàâäçéèêëîïñôöõùûüœÀÂÄÇÉÈÊËÎÑÔÙÛŒ\s-]+$/,
    //5 caractere numérique
    regexCp = /\d{5}|^$/,
    //1 à 5 caractere numérique puis 3 à x caractere en alphabetique
    regexAdresse = /^[\d{1,5}]+[a-zA-Z\s-]{3,}|^$/,
    //vérifier la présence d'une arobase, et de caractères qui la suivent et la précede. 
    regexEmail = /^[a-z\d._-]+@[a-z\d._-]+\.[a-z]{2,4}$/;
//La fonction qui vérifie tout le formulaire
function verification(event) {
    //On teste la valeur de la variable par rapport à la Regex, cela se déclenche si la fonction trouve une erreur

    //Même chose avec le prénom 
    //__________________PRENOM_________________________________________________________________________________________
    if (!regexNomEtPrenom.test(prenom.value)) {
        //SI le champ est vide
        if (prenom.validity.valueMissing) {
            //Permet de ne pas traité l'événement si erreur
            event.preventDefault();
            //Envoie le code html dans la balise span avec l'id missPrenom
            let erreurPrenom = document.getElementById('missPrenom');
            erreurPrenom.textContent = "Tu dois entrer un prénom";
            erreurPrenom.style.color = "red";
        } else {
            //SINON, la Regex n'est pas respectée//
            event.preventDefault();
            let erreurPrenom = document.getElementById('missPrenom');
            erreurPrenom.textContent = "Caractère alphabétique uniquement.";
            erreurPrenom.style.color = "red";
        }
    } else {
        let erreurPrenom = document.getElementById('missPrenom');
        //Vide la zone où il a le message d'erreur en cas de correction
        erreurPrenom.textContent = "";
    }
    //__________________NOM____________________________________________________________________________________________
    if (!regexNomEtPrenom.test(nom.value)) {
        if (nom.validity.valueMissing) {
            event.preventDefault();
            let erreurNom = document.getElementById('missNom');
            erreurNom.textContent = "Tu dois entrer un nom";
            erreurNom.style.color = "red";
        } else {
            event.preventDefault();
            let erreurNom = document.getElementById('missNom');
            erreurNom.textContent = "Caractère alphabétique uniquement.";
            erreurNom.style.color = "red";
        }
    } else {
        let erreurNom = document.getElementById('missNom');
        erreurNom.textContent = "";
    }
    //__________________DATE_DE_NAISSANCE______________________________________________________________________________
    if (birth.validity.valueMissing) {
        event.preventDefault();
        let missBirth = document.getElementById('missBirth');
        missBirth.textContent = "Date de naissance requise.";
        missBirth.style.color = "red";
    } else {
        let missBirth = document.getElementById('missBirth');
        missBirth.textContent = "";
    }
    //__________________SEXE___________________________________________________________________________________________
    if (mas.validity.valueMissing && fem.validity.valueMissing && other.validity.valueMissing) {
        event.preventDefault();
        let missSexe = document.getElementById('sexe');
        missSexe.textContent = "Merci de saisir votre sexe.";
        missSexe.style.color = "red";
    } else {
        let missSexe = document.getElementById('sexe');
        missSexe.textContent = "";
    }
    //__________________CODE_POSTAL____________________________________________________________________________________
    if (!regexCp.test(postal.value) || parseInt(postal.value) < 1000 || parseInt(postal.value) > 98890) {
        event.preventDefault();
        let erreurCp = document.getElementById('missCp');
        erreurCp.textContent = "Code Postal invalide.";
        erreurCp.style.color = "red";
    } else {
        let erreurCp = document.getElementById('missCp');
        erreurCp.textContent = "";
    }
    //__________________VILLE__________________________________________________________________________________________
    if (!regexCp.test(postal.value)) {
        event.preventDefault();
        let erreurVille = document.getElementById('missVille');
        erreurVille.textContent = "Nom de ville invalide.";
        erreurVille.style.color = "red";
    } else {
        let erreurVille = document.getElementById('missVille');
        erreurVille.textContent = "";
    }
    //__________________EMAIL__________________________________________________________________________________________
    if (!regexEmail.test(email.value)) {
        if (email.validity.valueMissing) {
            event.preventDefault();
            let erreurEmail = document.getElementById('missEmail');
            erreurEmail.textContent = "Tu dois entrer un e-mail.";
            erreurEmail.style.color = "red";
        } else {
            event.preventDefault();
            let erreurEmail = document.getElementById('missEmail');
            erreurEmail.textContent = "email invalide, format : \"xxxxx@xxxxx.xx\".";
            erreurEmail.style.color = "red";
        }
    } else {
        let erreurEmail = document.getElementById('missEmail');
        erreurEmail.textContent = "";
    }
    //__________________DEMANDE________________________________________________________________________________________
    if (demande.validity.valueMissing) {
        event.preventDefault();
        let erreurDemande = document.getElementById('missDemande');
        erreurDemande.textContent = "Tu dois indiquer ta demande.";
        erreurDemande.style.color = "red";
    } else {
        let erreurDemande = document.getElementById('missDemande');
        erreurDemande.textContent = "";
        //Si aucun choix n'a été fait au bouton radio, renvoie une erreur 
    }
    //__________________ADRESSE________________________________________________________________________________________
    if (!regexAdresse.test(adresse.value))
    //Le regex du code postal lui demande de saisir un numéro de voie puis du texte pour le type de voie et le nom de la voie. Autrement c'est une erreur 
    {
        event.preventDefault();
        let erreurAdresse = document.getElementById('missAdresse');
        erreurAdresse.textContent = "Adresse invalide.";
        erreurAdresse.style.color = "red";
    } else {
        let erreurAdresse = document.getElementById('missAdresse');
        erreurAdresse.textContent = "";
    }
}
//le bouton déclenche la fonction au clic
bouton.addEventListener('click', verification);