<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Protafolio Web</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/dfe85d73e7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?
        family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        
        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{padding-top: 0%;}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        
            body {
                font-family: 'Nunito', sans-serif;
            }
            *{
                margin: 0;
                padding: 0;
                font-family: 'Roboto', sans-serif;
            }

            .container
            {
                width: 100%;
                height: 100%;
                background-image: url(img/header.jpg);
                background-position: center;
                background-size: cover;
                padding-left: 8%;
                padding-top: 3%;
                padding-bottom: 3%;
                padding-right: 8%;
                box-sizing: border-box;
            }

            .navbar
            {
                height: 50px;
                display: flex;
                align-items: center;
            }

            .logo
            {
                width: 130px;
                cursor: pointer;
            }

            nav
            {
                flex: 1;
                text-align: right;
            }

            nav ul li
            {
                list-style: none;
                display: inline-block;
                margin-left: 60px;
            }

            nav ul li a
            {
                text-decoration: none;
                color: #fff;
                font-size: 15px;
            }

            .con
            {
            padding-top: 0%;
            }

            ul, li {
                padding: 0;
                margin: 0;
                list-style: none;
                display: center;
            }

            .menu{
                text-align: center;
                margin: 10px;
            }

            .menu li{
                display: inline-block;
                text-align: center;
            }

            .menu li a{
                display: inline-block;
                background-color: red;
                padding: 10px;
                width: 20px;
                height: 20px;
                margin: 10px;
            }

            .cont{
                margin: auto;
                background-color: white;
                width: 900px;
                padding: 30px;
            }

            ul.slider{
                position: relative;
                width: 840px;
                height: 500px;
            }

            ul.slider li {
                position: absolute;
                opacity: 0;
                width: inherit;
                height: inherit;
                transition: opacity .5s;
            }

            ul.slider li img{
                width: 100%;
                height: 500px;
                object-fit: cover;
            }

            ul.slider li:first-child {
                opacity: 1; /*Mostramos el primer <li>*/
            }

            ul.slider li:target {
                opacity: 1; /*Mostramos el <li> del enlace que pulsemos*/
            }

            .footer
            {
                padding-left: 8%;
                padding-top: 2%;
                padding-bottom: 3%;
                padding-right: 8%;
                flex: 1;
                text-align: center;
                background-image: url(img/header.jpg);
            }

            .footer ul li
            {
                color: white;
                font-size: 20px;
            }
        </style>
    </head>

    <div class="container text-white">
        <div class="navbar">
            <img src="img/logo.png" class="logo"><span style= "color: white; font-size: 50px">Christopher Gomez Garcia</span>
            <nav>
                <ul>
                    <li><a href="#Inicio">INICIO</a></li>
                    <li><a href="#Trabajos">TRABAJOS</a></li>
                    <li><a href="#Imagenes">IMAGENES</a></li>
                    <li><a href="#Datos">DATOS</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <body class="antialiased">
        <div class="con">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-8 sm:pt-0">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                    <br>

                    <span style="color:white; font-size:40px" id="Inicio">Acerca de mi</span>
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a class="text-gray-900 dark:text-white">??Qui??n soy?</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Soy Christopher G??mez Garc??a, un estudiante de la carrera de Ingenier??a en Sistemas Computacionales en el Tecnol??gico Mario Molina Lagos de Moreno, Jalisco; en el cual estoy cursando octavo semestre. Actualmente tengo 26 a??os y he trabajado en variedad de proyectos dentro de la escuela desde programaci??n web hasta administraci??n de redes, as?? mismo cuento con experiencia en el ??rea de atenci??n al cliente dentro de la empresa Xcaret.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a class="text-gray-900 dark:text-white">Gustos y Hobbies</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Me gustan los juegos de mesa, principalmente los de destreza mental y estrategia, tambi??n los videojuegos en un rango variado de g??neros desde aventura hasta shooters; adem??s me gustan los deportes, principalmente voleibol y Taekwondo, este ??ltimo siendo que m??s practico.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a class="text-gray-900 dark:text-white">??En qu?? me enfoco?</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Me enfoco principalmente al maquetado de p??ginas, programaci??n en C++, Creaci??n y administraci??n de bases de datos, arquitectura de computadoras y administraci??n de redes.
                            </div>
                        </div>
                    </div>

                    <span style="color:white; font-size:40px" id="Trabajos">Proyectos recientes</span>
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="text-gray-900 dark:text-white">Proyecto "Autolavado"</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        Durante sexto semestre de la carrera, junto a dos compa??eros, hicimos una autolavado automatico, el cual funcionaba mediante sensores (de agua y precensia) para llevar un control de la catidad de agua y la estaci??n donde se encontraba el vehiculo, as?? mismo contaba con una banda transportadora la cual llevaba el vehiculo por las estaciones. Ademas se contaba con un software donde se puede llevar un control del tiempo y la estaci??n en la que se encuentra para mayor comodidad el usuario.
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="text-gray-900 dark:text-white">Proyecto "Punto de venta"</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        Junto a cuatro compa??eros realizamos un proyecto de un punto de venta para un restaurante de tacos, el cual incluia desde la visualizacion del menu hasta el control de inventario, permitiendo de esta manera poder tener un control total del negocio, pues incluia el control de horario de los trabajadores.
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="text-gray-900 dark:text-white">Proyecto "Control vehicular"</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        Dentro de una celula de desarrollo creamos un sofware que permitiera llevar un control de los prestamos de vehiculos escolares dentro de la universidad, con el fin de aplicarlo y poder agilizar los procesos realizados, asi como mejorar el control.
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <div class="flex items-center">
                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="text-gray-900 dark:text-white">Proyecto "Pastillero"</a></div>
                                </div>

                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        Durante un proyecto realize la creci??n de un pastillero automatico con el cual se podia controlar el horario de las pastillas, asi como la organizacion, ya sea diaria o semanal; este contaba con un reloj junto a una alarma, y una caja que servia de docificador, la cual tenia un motor que hacia girar el interior para soltar las pastillas en una compuerta.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>

                    <span style="color:white; font-size:40px" id="Imagenes">Fotos de proyectos</span>
                    <div class="cont">
                        <ul class="slider">
                            <li id="slide1"><img src="img/1.jpg"/></li>
                            <li id="slide2"><img src="img/2.png"/></li>
                            <li id="slide3"><img src="img/3.png"/></li>
                            <li id="slide4"><img src="img/4.png"/></li>
                            <li id="slide5"><img src="img/5.png"/></li>
                            <li id="slide6"><img src="img/6.png"/></li>
                            <li id="slide7"><img src="img/7.png"/></li>
                            <li id="slide8"><img src="img/8.png"/></li>
                            <li id="slide9"><img src="img/9.png"/></li>
                            <li id="slide10"><img src="img/10.png"/></li>
                        </ul>
                        
                        <ul class="menu">
                            <li><a href="#slide1"></a></li>
                            <li><a href="#slide2"></a></li>
                            <li><a href="#slide3"></a></li>
                            <li><a href="#slide4"></a></li>
                            <li><a href="#slide5"></a></li>
                            <li><a href="#slide6"></a></li>
                            <li><a href="#slide7"></a></li>
                            <li><a href="#slide8"></a></li>
                            <li><a href="#slide9"></a></li>
                            <li><a href="#slide10"></a></li>
                        </ul>
                    </div>

                    <br><br>

                </div>
            </div>
        </div>

        <div class="footer" id="Datos">
            <ul>
                <li><i class="fa-solid fa-envelope"><i> cgg_chan@outlook.com </i></i></a></li><br>
                <li><i class="fa-brands fa-facebook"> <i class="fa-solid"> Christopher Gomez </i></i></a></li><br>
                <li><i class="fa-solid fa-phone"> 984-240-1928 </i></a></li>
            </ul>
        </div>

    </body>
</html>
