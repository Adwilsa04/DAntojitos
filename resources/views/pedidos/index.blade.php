<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="product.json">
    
</head>
<x-index></x-index>
<br>
<body>

    <header>
        <h1>Buffet</h1>
    </header>

    <div class="container">
        <header>        
            <h1>Lista de buffet</h1>
            <div class="iconCart">
            <img src="{{ asset('icon.png') }}" alt="cARRITo">

                
            </div>
        </header>


            <div class="listProduct">

            <div class="item">
            <img src="{{ asset('images/2.png') }}" alt="Descripción de la imagen">
            <center>
                <h2>Menu 1</h2>
                <div class="price">$10,000.00</div></center>
                <button href="checkout.html">Añadir</button>
            </div>

        </div>
    </div>

    <div class="cart">
        <h2>
            Cart
        </h2>

        <div class="listCart">


            <div class="item">
            <img src="{{ asset('images/1.jpg') }}" alt="Descripción de la imagen">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">$550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button href="checkout.html">Add To Cart</button>

                </div>
            </div>


        </div>

        <div class="buttons">
            <div class="close">
                CLOSE
            </div>
            <div class="checkout">
                <a href="checkout.html">CHECKOUT</a>
            </div>
        </div>
    </div>


    <script src="app.js"></script>
    <style>
        body{
    font-family: monospace;
    overflow-x: hidden;
    font-synthesis: 15px;
}
a{
    text-decoration: none;
}
.container{
    width: 1200px;
    margin: auto;
    max-width: 90%;
    transition: transform 1s;
}
header img{
    width: 60px;
}
header{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
header .iconCart{
    position: relative;
    z-index: 1;
}
header .totalQuantity{
    position: absolute;
    top: 0;
    right: 0;
    font-size: x-large;
    background-color: #b31010;
    width: 40px;
    height: 40px;
    color: #fff;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    transform: translateX(20px);
}
.listProduct{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.listProduct .item img{
    width: 100%;
        height: 430px;
    object-fit: cover;
}
.listProduct .item{
    position: relative;
}
.listProduct .item h2{
    font-weight: 700;
    font-size: x-large;
}
.listProduct .item .price{
    font-size: x-large;
}

.listProduct .item button{
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: #b31010;
    color: #fff;
    width: 50%;
    border: none;
    padding: 20px 30px;
    box-shadow: 0 10px 50px #000;
    cursor: pointer;
    transform: translateX(-50%) translateY(100px);
    opacity: 0;
}
.listProduct .item:hover button{
    transition:  0.5s;
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}
.cart{
    color: #fff;
    position: fixed;
    width: 400px;
    max-width: 80vw;
    height: 100vh;
    background-color: #181818eb;
    top: 0px;
    right: -100%;
    display: grid;
    grid-template-rows: 50px 1fr 50px;
    gap: 20px;
    transition: right 1s;
}

.cart .buttons .checkout{
    background-color: #b31010;
    color: #000000;
}
.cart h2{
    color: #fff;
    padding: 20px;
    height: 30px;
    margin: 0;
}


.cart .listCart .item{
    display: grid;
    grid-template-columns: 50px 1fr 70px;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
    
}
.cart .listCart img{
    width: 100%;
    height: 70px;
    object-fit: cover;
    border-radius: 10px;
}
.cart .listCart .item .name{
    font-weight: bold;
}
.cart .listCart .item .quantity{
    display: flex;
    justify-content: end;
    align-items: center;
}
.cart .listCart .item .quantity span{
    display: block;
    width: 50px;
    text-align: center;
}

.cart .listCart{
    padding: 20px;
    overflow: auto;
}
.cart .listCart::-webkit-scrollbar{
    width: 0;
}

.cart .buttons{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    text-align: center;
}
.cart .buttons div{
    background-color: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    cursor: pointer;
}
.cart .buttons a{
    color: #fff;
    text-decoration: none;
}
.checkoutLayout{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 50px;
    padding: 20px;
}
.checkoutLayout .right{
    background-color: #000;
    border-radius: 20px;
    padding: 40px;
    color: #fff;
}
.checkoutLayout .right .form{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    border-bottom: 1px solid #ababab;
    padding-bottom: 20px;
}
.checkoutLayout .form h1,
.checkoutLayout .form .group:nth-child(-n+3){
    grid-column-start: 1;
    grid-column-end: 3;
}
.checkoutLayout .form input, 
.checkoutLayout .form select
{
    width: 100%;
    padding: 10px 20px;
    box-sizing: border-box;
    border-radius: 20px;
    margin-top: 10px;
    border:none;
    background-color: #ffffff;
    color: #000;
}
.checkoutLayout .right .return .row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
.checkoutLayout .right .return .row div:nth-child(2){
    font-weight: bold;
    font-size: x-large;
}
.buttonCheckout{
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 20px;
    background-color: #b31010;
    margin-top: 20px;
    font-weight: bold;
    color: #fff;


}
.returnCart h1{
    border-top: 1px solid #eee;  
    padding: 20px 0;
}
.returnCart .list .item img{
    height: 80px;
}
.returnCart .list .item{
    display: grid;
    grid-template-columns: 80px 1fr  50px 80px;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
    padding: 0 10px;
    box-shadow: 0 10px 20px #5555;
    border-radius: 20px;
}
.returnCart .list .item .name,
.returnCart .list .item .returnPrice{
    font-size: large;
    font-weight: bold;
}

    </style>
</body>
</html>