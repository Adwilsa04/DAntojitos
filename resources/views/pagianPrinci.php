<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<head>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

.container{
    width: 100%;
    height: 100vh;
    background-color: rgba(0,0,0,0.4);
    display: flex;
    align-items: center;
    justify-content: center;
}

.content{
    text-align: center;
}

.content h1{
    font-size: 95px;
    color: #fff;
    margin-bottom: 50px;
}

.content a{
    font-size: 23px;
    color: #fff;
    text-decoration: none;
    border: 2px solid #fff;
    padding: 15px 25px;
    border-radius: 50px;
    transition: 0.3s;
}

.content a:hover{
    background-color: #fff;
    color: #000;
}

.background-clip{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}

@media (min-aspect-ratio:16/9) {
    .background-clip{
        width: 100%;
        height: auto;
    }
}

@media (max-aspect-ratio:16/9) {
    .background-clip{
        width: auto;
        height: 100%;
    }
}

    </style>
</head>
<body>
    
    <div class="container">

        <video autoplay loop muted plays-inline class="background-clip">
            <source src="images/video.mp4" type="video/mp4">
        </video>

        <div class="content">
            <h1>Explore More</h1>
            <a href="#">Start Learning</a>
        </div>
    </div><br><br>

    <center> <footer>
			<div class="social-icons">
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
			
			<p class="copyright">© 2035 Creado por D'antojitosGourmet decora.com</p>
			<p class="chat-link"><a href="#">Chat en línea</a></p>
		</footer></center>
		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
</body>
</html>