var active = false;
function toggleNotifications() {
    const burgerMenu = document.getElementById('burgerMenu');
    if (active === false){
        burgerMenu.style.transform = "translateX(0)";
        fetchNotifications();
        try{
            document.getElementsByClassName("body-container")[0].style.filter = "blur(3px)"
            document.querySelector("header").style.filter = "blur(3px)"
        } catch (e){}



        active = true;
    } else {
        burgerMenu.style.transform = "translateX(-100%)";
        window.location.reload()
        try{
            document.getElementsByClassName("body-container")[0].style.filter = "blur(0)"
            document.querySelector("header").style.filter = "blur(0)"
        } catch (e){}


        active = false;

    }

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
console.log(data)
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

            const listItem = document.createElement('li');
            const checkbox = document.createElement('input');


            data.notif.forEach(notification => {

                const listItem = document.createElement('li');
                const checkbox = document.createElement('input');
                const Details = document.createElement('div');


                ['Nom: ' + notification.em, 'Prénom: ' + notification.ep, 'Offre: ' + notification.om, 'Entreprise: '+ notification.nom , 'Description :  '+ notification.texte,'Date: '+notification.jour + '\\'+ notification.mois+'\\'+ notification.annee+ ' ' +notification.heure+":"+notification.minutes]
                        .forEach(detail => {
                            const detailElement = document.createElement('p');
                            detailElement.textContent = detail;
                            Details.appendChild(detailElement);


                        })
                listItem.appendChild(Details)

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

    fetch('../../../Controller/Notification/ControllerUpdateNotification.php', {
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
    fetch('../../../Controller/Notification/ControlleurNotif.php')
        .then(response => response.json())
        .then(data => {
            const notificationBadge = document.getElementById('notificationBadge');
            notificationBadge.textContent = data.nb;
        })
}