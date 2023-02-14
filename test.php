<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Polaroid</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <div class="header__title">Polaroid -> Gallery</div>
        </div>
        <div class="main">
            <div class="card" id="mc1" data-about="Только ты его не пугай" data-title="Красивый попугай">
                <img src="logo.png" alt="" class="card_image">
            </div>
            <div class="card" id="mc2" data-about="Мишутка - огонь!" data-title="Чисто русский пейзаж">
                <img src="belza.jpg" alt="" class="card_image">
            </div>
            <div class="card" id="mc3" data-about="Жаль, что деву не нашёл" data-title="Веришь в астрологию?">
                <img src="./img/photo3.jpg" alt="" class="card_image">
            </div>
            <div class="card" id="mc4" data-about="Что-то рядом губки не видно" data-title="Если звезда, то только такая">
                <img src="./img/photo4.jpg" alt="" class="card_image" >
            </div>
            <div class="card" id="mc5" data-about="Если это не цветокоррекция, то это Рай" data-title="Чуточку залипательности">
                <img src="./img/photo5.jpg" alt="" class="card_image" >
            </div>
            <div class="card" id="mc6" data-about="А в общагах нельзя :(" data-title="Ну какой фотосет без котейки?">
                <img src="./img/photo6.jpg" alt="" class="card_image" >
            </div>
            <div class="card" id="mc7" data-about="Страшный кусь" data-title="Ещё кисы, только чуть покрупнее">
                <img src="./img/photo7.jpg" alt="" class="card_image" >
            </div>
            <div class="card" id="mc8" data-about="А на дне реки кольцо..." data-title="Чем-то деревню Хоббитов напоминает">
                <img src="./img/photo8.jpg" alt="" class="card_image">
            </div>
            <div class="card" id="mc9" data-about="Нормальто так блестят" data-title="Кубики взял, а нарды забыл">
                <img src="./img/photo9.jpg" alt="" class="card_image">
            </div>   
        </div>
    </body>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap');
body {
    background-color: white;
    margin: 0;
    padding: 0;
    background-image: url(./img/back3.jpg);
    background-size: cover;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}

.header{
    background-color: grey;    
    height: 7vh;
    margin-bottom: 2%;
}

.header__title {
    font-family: "Old Standard TT";
    font-size: 22pt;
    text-align: center;
    color: white;
}

.main {
    display: flex;
    align-items: flex-start;
    justify-content: space-around;
    flex-wrap: wrap;
    padding-right: 200px;
    padding-left: 200px;
}

.card {
    display: flex;
    position: relative;
    flex-direction: column;
    background-color: #FFFAE7;
    font-family: 'Balsamiq Sans';
    width: 20vw;
    padding: 2vh 1vw 5vh 1vw;
    margin-bottom: 5%;
    box-shadow: 1vh 1vh 10px rgba(0,0,0,0.5);
    
    overflow: hidden;
    transition: all .6s ease;
}

.card::after {
    content: attr(data-title);
    font-weight: 700;
    font-size: 2vw;
    color: #363d42a4       
}


.card_image {
    width: 100%;
}


.card:nth-child(odd) {
    transform: rotate(2deg) translateY(1vh);
}


.card:nth-child(even) {
    transform: rotate(-3deg) translateX(-1vh);
}

.card:hover {
    transform: scale(1.25);
    box-shadow: 1.5vh 1.5vh 10px rgba(0,0,0,0.7);
}

.card::before {
    content: attr(data-about);
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    transform: translateY(16pt);
    text-align: center;
    z-index: 0;
    background-color:#6408baa4;
    font-size: 16pt;
    color: white;
    opacity: 0;
    transition: all .6s ease;
    
}

.card:hover::before {
    z-index: 1;
    opacity: 1;
    transform: translateY(0);
}
    </style>
    </html>