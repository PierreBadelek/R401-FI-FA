var active = false;
function toggleNotifications() {
    const burgerMenu = document.getElementById('burgerMenu');
    if (active === false){
        burgerMenu.style.transform = "translateX(0)";
        active = true;
    } else {
        burgerMenu.style.transform = "translateX(-100%)";
        active = false;

    }

    /*
    if (burgerMenu.style.display === 'none') {
        fetchNotifications();
        burgerMenu.style.display = 'block';
    } else {
        burgerMenu.style.display = 'none';
    }*/
}



function nb() {
    fetch('../../Controller/Notification/ControlleurNotif.php')
        .then(response => response.json())
        .then(data => {
            const notificationBadge = document.getElementById('notificationBadge');

        })
}

document.addEventListener('DOMContentLoaded', function() {
    fetchNotifications();
    nb();
});

function fetchNotifications() {
    fetch('../../Controller/Notification/ControlleurNotif.php')
        .then(response => response.json())
        .then(data => {
            const unreadNotificationList = document.getElementById('unreadNotificationList');
            unreadNotificationList.innerHTML = '';
            const readNotificationList = document.getElementById('readNotificationList');
            readNotificationList.innerHTML = '';
            const notificationBadge = document.getElementById('notificationBadge');
            notificationBadge.textContent = data.nb;
            const valider = document.getElementById('validationButton')
            if (parseInt(data.nb) >= 1) {
                notificationBadge.classList.add('red-badge');
            } else {
                notificationBadge.classList.remove('red-badge');
            }



            data.notif.forEach(notification => {

                const listItem = document.createElement('li');
                const checkbox = document.createElement('input');

                if (notification.nom === null) {
                    const noResponseDetails = document.createElement('div');

                    // Crée un élément de paragraphe pour chaque détail et les ajoute au conteneur
                    ["Pas d'entreprise",'Nom: ' + notification.em, 'Prénom: ' + notification.ep, 'Offre: ' + notification.om, 'Entreprise: ' + notification.nom]
                        .forEach(detail => {
                            const detailElement = document.createElement('p');
                            detailElement.textContent = detail;
                            noResponseDetails.appendChild(detailElement);
                        });

                    listItem.appendChild(noResponseDetails);
                } else {
                    const noResponseDetails = document.createElement('div');

                    // Crée un élément de paragraphe pour chaque détail et les ajoute au conteneur
                    ["Pas de réponse" ,'Nom: ' + notification.em, 'Prénom: ' + notification.ep, 'Offre: ' + notification.om, 'Entreprise: ' + notification.nom]
                        .forEach(detail => {
                            const detailElement = document.createElement('p');
                            detailElement.textContent = detail;
                            noResponseDetails.appendChild(detailElement);
                        });

                    listItem.appendChild(noResponseDetails);                }

                const dateInput = document.createElement('input');
                dateInput.type = 'date';
                dateInput.id = 'notificationDate';
                dateInput.value = notification.rappel

                listItem.appendChild(dateInput);


                checkbox.type = 'checkbox';
                checkbox.checked = notification.lu;
                checkbox.setAttribute('data-notification-id', notification.idnotif);
                listItem.appendChild(checkbox);


                checkbox.addEventListener('change', function() {
                    const isChecked = this.checked;
                    const params = new URLSearchParams();
                    var dateSaisie = document.getElementById("notificationDate").value;
                    params.append('idnotif', notification.idnotif);
                    params.append('idetudiant', notification.idetudiant);
                    params.append('dateSaisie', dateSaisie);


                    if (isChecked && dateSaisie === ''  ) {
                        params.delete('dateSaisie');
                        params.append('lu', true);
                        updateNotification(params, listItem, checkbox, dateSaisie, 'notification-read');
                        fetchNotifications()
                    } else if (isChecked && dateSaisie !== '') {
                        params.append('lu', true);
                        updateNotification(params, listItem, checkbox, dateSaisie, 'notification-read');
                        fetchNotifications()
                    } else {
                        params.delete('dateSaisie');
                        params.append('lu', false);
                        updateNotification(params, listItem, checkbox, dateSaisie, 'notification-read');
                        fetchNotifications();
                    }
                    console.log(notification.idnotif)
                });

                valider.addEventListener('click', function() {
                    fermerMenuBurger(data)

                });

                if (notification.lu === true) {

                    listItem.classList.add('notification-read');
                    readNotificationList.appendChild(listItem);
                } else {
                    listItem.classList.add('notification-unread');
                    unreadNotificationList.appendChild(listItem);
                }

            });

            showUnreadButton.addEventListener('click', function() {
                unreadNotificationList.style.display = 'block';
                readNotificationList.style.display = 'none';
                document.getElementById('hnonlu').style.display = 'block';
                document.getElementById('hlu').style.display = 'none';
            });

            showReadButton.addEventListener('click', function() {
                unreadNotificationList.style.display = 'none';
                readNotificationList.style.display = 'block';
                document.getElementById('hlu').style.display = 'block';
                document.getElementById('hnonlu').style.display = 'none';
            });

        })
        .catch(error => console.error(error));

}



function updateNotification(params, listItem, checkbox, rappel,className) {

    fetch('../Controller/Notification/ControllerUpdateNotification.php', {
        method: 'POST',
        body: params
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('La mise à jour de la notification a échoué');
            }
            listItem.classList = className;
            console.log(listItem)
        })
        .catch(error => {
            console.error(error);
        });
}

function fermerMenuBurger(data) {
    // Cacher le menu burger
    var menuBurger = document.getElementById('burgerMenu');
    menuBurger.style.display = 'none';
    fetch('../../Controller/Notification/ControlleurNotif.php')
        .then(response => response.json())
        .then(data => {
            const notificationBadge = document.getElementById('notificationBadge');
            notificationBadge.textContent = data.nb;
        })
}