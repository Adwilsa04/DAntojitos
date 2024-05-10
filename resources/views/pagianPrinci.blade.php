<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>D'antojitos Gourmet Decora</title>
</head>
<head>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>D' antojitos Gourmet Decora</title>
        <link rel="icon" type="image/x-icon" href="{{asset('img/Logo.ico')}}">
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.40),rgba(0,0,0,0.40));
    background-position: center;
    background-size: center;
}
.navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
}
.navbar a:hover{
    color: black;
}
.content{
    width: 100%;
    position: absolute;
    color: white;
    top: 45%;
    transform: translateY(-50%);
    text-align: center;
}
.content h1{
    font-family: 'Cinzel';
    margin-top: 80px;
    font-size: 90px;
    font-weight: 100;
    color: white;
}
button{
    font-family: 'Cinzel';
    width: 200px;
    padding: 15px;
    margin: 20px 5px;
    text-align: center;
    border-radius: 0;
    color:#ffffff;
    border: 2px;
    font-size: 20px;
    cursor: pointer;
    font-weight: 600;
    position: left;
	background-color: transparent ;
	display: inline-block;
	padding: 1rem 3rem;
	border: 1px solid #ffffff;
}


button:hover{
    background: #000000;
    transition: 0.5s;
}
button:hover{
    color: rgb(255, 255, 255);
}
.banner video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
@media(min-aspect-ratio: 16/9){
    .banner video{
        width: 100%;
        height: auto;
    }
}


.footer {
    background-color: black;
    color: white;
    width: 100%;
    left: 150px; 
    height: auto; /
    
}

.footer .social-icons a {
    color: white;
}


    </style>
    <x-index></x-index>
    <body>
        
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="{{asset('video/Video.mp4')}}" type="video/mp4">
            </video>

        
            <div class="content">
                <h1>D' antojitos Gourmet Decora</h1>
                <div>
                    <button type="button"> <a href="{{route('pagservi')}}" style="text-decoration:none; color:white;"> Ver más</a></button> 
                <a class="nav-link scroll to" href="{{route('pagservi')}}">      
                </a>
                </div>
            </div>
        </div><br><br>

<center>
<footer class="footer" style="background-color: black; color: white;">
    <div class="social-icons">
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>

    <p class="copyright">© 2035 Creado por D'antojitosGourmet decora.com</p>
    <p class="chat-link"><a href="#">Chat en línea</a></p>
</footer></center>

<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    </body>
</html>
