<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Gestor de Administrador</title>
</head>

<style>

    :after,*:before{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}
body{
	font-family: 'Cinzel';
	font-size: 16px;
	margin:0;
	background: #fcfdfe;
	display: flex;
	align-items: center;
	justify-content: space-between;
	min-height: 100vh;
}
img{
	max-width: 100%;
}

.ui-card{
	width: 100px;
    width: calc((100% - 40px) / 3);
    height: 400px;
    margin-bottom: 20px;
    max-width: 600px;
	position: relative;
	overflow: hidden;
	transition: all 0.3s ease-out;
	background:radial-gradient(#111 50%, #000 100%);
}

@media (max-width: 600px){
    .ui-card{
        width: calc(100% -20px);
        margin: 0 auto 20px auto;
    }
}
.ui-card img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
	transform: scale(1.3);
	transition: all 0.3s ease-out;
}


.ui-card .description{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	padding: 15px;
	width: 100%;
	text-align: center;
	color: #fff;
	font-size: 18px;
}
.ui-card .description h3,
.ui-card .description p,
.ui-card .description a {
    margin: 0;
}
.ui-card .description a{
	font-family: 'Cinzel';
    width: 50px;
    padding: 15px;
    margin: 10px 5px;
    text-align: center;
    border-radius: 0;
    color:#ffffff;
    border: 2px;
    font-size: 15px;
    cursor: pointer;
    font-weight: 400;
    position: left;
	background-color: transparent ;
	
	padding: 1rem 3rem;
	border: 1px solid #ffffff;
}

.ui-card .description a:hover{
	background:#0d0f0f;
}
</style>


<body>
<x-index></x-index>

<div class="ui-card">
	<img src="{{asset('imagenes/img3.jpg')}}" type="images/jpg">

	<div class="description">
		<h3>Buffet</h3><br>
		
		<a href="#">VER</a>
	</div>
</div>

<div class="ui-card">
<img src="{{asset('imagenes/img2.jpg')}}" type="images/jpg">
	<div class="description">
		<h3>Picadera</h3><br>
		
		<a href="#">VER</a>
	</div>
</div>

<div class="ui-card">
<img src="{{asset('imagenes/img1.jpg')}}" type="images/jpg">
	<div class="description">
		<h3>Decoracion</h3><br>
		
		<a href="#">VER</a>
	</div>
</div>
<br>

<div class="ui-card">
<img src="{{asset('imagenes/img1.jpg')}}" type="images/jpg">
	<div class="description">
		<h3>Decoracion</h3><br>
		
		<a href="#">VER</a>
	</div>
</div>


</body>
<x-footer></x-footer>
</html>