<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cp/menu.css">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class='list active'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class='list'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                    <span class="title">Profile</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class='list'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <span class="title">Messages</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class='list'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title">Settings</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class='list'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                    <span class="title">Help</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class='list'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <span class="title">Password</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class='list'>
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                    <span class="title">Sing out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="toggle">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
    </div>
    <footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script>
            let menuToggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation')
            menuToggle.onclick = function(){
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');

            }

            //añadir active class al item seleccionado
            let list = document.querySelectorAll('.list');
            for (let i=0; i<list.length; i++) {
                list[i].onclick=function()
                {
                    let j =0;
                    while (j<list.length) 
                    {
                        list[j++].className='list';
                    }
                    list[i].className = 'list active';
                };
            }
        </script>
    </footer>
</body>
</html>