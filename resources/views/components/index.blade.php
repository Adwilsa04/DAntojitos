<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">


      <title></title>
   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="" class="nav__logo">
                  <link rel="icon" href="imagenes/Logo.ico">
                  <i class="ri-planet-line">D'antojitos Gourmet Decora</i>
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="{{route('inicio')}}" style="text-decoration:none; color:white;" class="nav__link">Home</a></li>
                 

                 

                  <li><a href="{{route('nosotros')}}" class="nav__link">Sobre Nosotros</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Servicios <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{ route('buffet') }}" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Buffet
                           </a>                          
                        </li>

                        <li>
                           <a href="{{ route('picadera') }}" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Picaderas
                           </a>
                        </li>

                        <!--=============== DROPDOWN SUBMENU ===============-->
                        <li>
                           <a href="{{ route('decoracion') }}" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Decoracion
                           </a>
                        </li>
                     </ul>
                  


               
                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Usuario <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-user-line"></i> Perfil
                           </a>                          
                        </li>

                        <li>
                           <a href="{{route('sesion')}}" class="dropdown__link">
                              <i  class="ri-lock-line"></i> Inicio sesion
                           </a>

                        </li>

                        <li>
                           <a href="{{route('registrate')}}" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Registro Cliente
                           </a>
                      </li>
                        
                     </ul>
                  </li>

                  <li><a href="{{route('contacto')}}" class="nav__link">Contacto</a></li>
               </ul>
            </div>
         </nav>
      </header>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');

/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3.5rem;

  /*========== Colors ==========*/
  /*Color mode HSL(hue, saturation, lightness)*/
  --black-color: hsl(220, 24%, 12%);
  --black-color-light: hsl(220, 24%, 15%);
  --black-color-lighten: hsl(220, 20%, 18%);
  --white-color: #fff;

  /*========== Font and typography ==========*/
  /*.5rem = 8px | 1rem = 16px ...*/
  font-family: 'Cinzel';
  --normal-font-size: .938rem;

  /*========== Font weight ==========*/
  --font-regular: 400;
  --font-semi-bold: 600;

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

/*========== Responsive typography ==========*/
@media screen and (min-width: 1024px) {
  :root {
    --normal-font-size: 1rem;
  }
}

/*=============== BASE ===============*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: 'Cinzel';

}

body {
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  font-family: 'Cinzel';
}

ul {
  list-style: none;
  /* Color highlighting when pressed on mobile devices */
  /*-webkit-tap-highlight-color: transparent;*/
  font-family: 'Cinzel';

}

i {
  font-family: 'Cinzel';

}


a  {
  text-decoration: none;
  font-family: 'Cinzel';


}

/*=============== REUSABLE CSS CLASSES ===============*/
.container {
  max-width: 1120px;
  margin-inline: 1.5rem;
}

/*=============== HEADER ===============*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--black-color);
  box-shadow: 0 2px 16px hsla(220, 32%, 8%, .3);
  z-index: var(--z-fixed);
  font-family: 'Cinzel';

}

/*=============== NAV ===============*/
.nav {
  height: var(--header-height);
}

.nav__logo, 
.nav__burger, 
.nav__close {
  color: var(--white-color);
}

.nav__data {
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__logo {
  display: inline-flex;
  align-items: center;
  column-gap: .25rem;
  font-weight: var(--font-semi-bold);
  /* Color highlighting when pressed on mobile devices */
  /*-webkit-tap-highlight-color: transparent;*/
}

.nav__logo i {
  font-weight: initial;
  font-size: 1.25rem;
}

.nav__toggle {
  position: relative;
  width: 32px;
  height: 32px;
}

.nav__burger, 
.nav__close {
  position: absolute;
  width: max-content;
  height: max-content;
  inset: 0;
  margin: auto;
  font-size: 1.25rem;
  cursor: pointer;
  transition: opacity .1s, transform .4s;
}

.nav__close {
  opacity: 0;
}

/* Navigation for mobile devices */
@media screen and (max-width: 1118px) {
  .nav__menu {
    position: absolute;
    left: 0;
    top: 2.5rem;
    width: 100%;
    height: calc(100vh - 3.5rem);
    overflow: auto;
    pointer-events: none;
    opacity: 0;
    transition: top .4s, opacity .3s;
  }
  .nav__menu::-webkit-scrollbar {
    width: 0;
  }
  .nav__list {
    background-color: var(--black-color);
    padding-top: 1rem;
  }
}

.nav__link {
  color: var(--white-color);
  background-color: var(--black-color);
  font-weight: var(--font-semi-bold);
  padding: 1.25rem 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: background-color .3s;
}

.nav__link:hover {
  background-color: var(--black-color-light);
}

/* Show menu */
.show-menu {
  opacity: 1;
  top: 3.5rem;
  pointer-events: initial;
}

/* Show icon */
.show-icon .nav__burger {
  opacity: 0;
  transform: rotate(90deg);
}
.show-icon .nav__close {
  opacity: 1;
  transform: rotate(90deg);
}

/*=============== DROPDOWN ===============*/
.dropdown__item {
  cursor: pointer;
}

.dropdown__arrow {
  font-size: 1.25rem;
  font-weight: initial;
  transition: transform .4s;
}

.dropdown__link, 
.dropdown__sublink {
  padding: 1.25rem 1.25rem 1.25rem 2.5rem;
  color: var(--white-color);
  background-color: var(--black-color-light);
  display: flex;
  align-items: center;
  column-gap: .5rem;
  font-weight: var(--font-semi-bold);
  transition: background-color .3s;
}

.dropdown__link i, 
.dropdown__sublink i {
  font-size: 1.25rem;
  font-weight: initial;
}

.dropdown__link:hover, 
.dropdown__sublink:hover {
  background-color: var(--black-color);
}

.dropdown__menu, 
.dropdown__submenu {
  max-height: 0;
  overflow: hidden;
  transition: max-height .4s ease-out;
}

/* Show dropdown menu & submenu */
.dropdown__item:hover .dropdown__menu, 
.dropdown__subitem:hover > .dropdown__submenu {
  max-height: 1000px;
  transition: max-height .4s ease-in;
}

/* Rotate dropdown icon */
.dropdown__item:hover .dropdown__arrow {
  transform: rotate(180deg);
}

/*=============== DROPDOWN SUBMENU ===============*/
.dropdown__add {
  margin-left: auto;
}

.dropdown__sublink {
  background-color: var(--black-color-lighten);
}

/*=============== BREAKPOINTS ===============*/
/* For small devices */
@media screen and (max-width: 340px) {
  .container {
    margin-inline: 1rem;
  }

  .nav__link {
    padding-inline: 1rem;
  }
}

/* For large devices */
@media screen and (min-width: 1118px) {
  .container {
    margin-inline: auto;
  }

  .nav {
    height: calc(var(--header-height) + 2rem);
    display: flex;
    justify-content: space-between;
  }
  .nav__toggle {
    display: none;
  }
  .nav__list {
    height: 100%;
    display: flex;
    column-gap: 3rem;
  }
  .nav__link {
    height: 100%;
    padding: 0;
    justify-content: initial;
    column-gap: .25rem;
  }
  .nav__link:hover {
    background-color: transparent;
  }

  .dropdown__item, 
  .dropdown__subitem {
    position: relative;
  }

  .dropdown__menu, 
  .dropdown__submenu {
    max-height: initial;
    overflow: initial;
    position: absolute;
    left: 0;
    top: 6rem;
    opacity: 0;
    pointer-events: none;
    transition: opacity .3s, top .3s;
  }

  .dropdown__link, 
  .dropdown__sublink {
    padding-inline: 1rem 3.5rem;
  }

  .dropdown__subitem .dropdown__link {
    padding-inline: 1rem;
  }

  .dropdown__submenu {
    position: absolute;
    left: 100%;
    top: .5rem;
  }

  /* Show dropdown menu */
  .dropdown__item:hover .dropdown__menu {
    opacity: 1;
    top: 5.5rem;
    pointer-events: initial;
    transition: top .3s;
  }

  /* Show dropdown submenu */
  .dropdown__subitem:hover > .dropdown__submenu {
    opacity: 1;
    top: 0;
    pointer-events: initial;
    transition: top .3s;
  }
}
   </style>
</html>