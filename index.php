<?php
    $link = "http://localhost/corditanques/resource/icons/Sin título-1.png";
    include("web/navs/nav.php");
?>
<div class="bodygreen">
    <div>
        <img src="resource/img/imagen 1.png" alt="" style="width: 100%;">
        <img src="resource/icons/solicita tu viaje.png" alt="" class="boton-flotante">
        <img src="resource/icons/consulta tu viaje.png" alt="" class="boton-flotante2" onclick="viajes()">
        <p class="textabsolute">Damos Solución a tus <br> necesidades logísticas <br> para la distribución de <br> productos y mercancías.</p>
    </div>
    <div class="row col-md-12 positionr" style="position: relative; top:-1.1rem; margin: 0px;" id="servicios">
        <div class="col-md-6">
            <h1 class="text-white sectittle">Nuestros servicios</h1>
        </div>
        <div class="col-md-6" style="padding: 0px;">
            <img src="resource/icons/logo 2.png" alt="" class="logo-2">
        </div>
    </div>
    <div class="row backgroundwhite positionr"  style="position: relative; top:-1.1rem; margin: 0px;">
        <div class="row boxindex">
            <div class="col-md-4 wid30">
                <a href="http://localhost/corditanques/web/servicios/servicios1.php">
                    <img class="imgcarrusel" src="resource/icons/carga.png" alt="">
                </a> 
            </div>
            <div class="col-md-4 wid30 mleft5rem">
                <a href="http://localhost/corditanques/web/servicios/servicios2.php">
                    <img class="imgcarrusel" src="resource/icons/flotas delicadas.png" alt="">
                </a> 
            </div>
            <div class="col-md-4 wid30 wid30ad" style="padding: 0px;">
                <a href="http://localhost/corditanques/web/servicios/servicios3.php">
                    <img class="imgcarrusel" src="resource/icons/administracios.png" alt="">
                </a>    
            </div>
        </div>
    </div>
    <div class="row positionr" style="position: relative; top:-1.1rem; margin: 0px;" id="nosotros">
        <div class="col-md-6 pd0">
            <img src="http://localhost/corditanques/resource/img/imagen 2.png" alt="" class="imgindex">
            <img src="http://localhost/corditanques/resource/img/imagen 3.png" alt=""class="imgindex">
        </div>
        <div class="col-md-6 pd0" style="background-color: #f92634;">
            <div class="contenttext">
                <h1 class="h1backwhite">¿Cómo lo hacemos?</h1>
                <p class="textindex">
                    Con un equipo humano apasionado, <br> 
                    comprometido y calificado para servir <br> 
                    brindando soluciones logísticas seguras y <br> 
                    sostenibles. Contamos con un sistema de <br> 
                    transporte propio y de afiliados, confiables <br>
                    y responsables que hace posible que <br>
                    nuestro servicio sea entregado con los <br>
                    demás altos niveles de calidad.
                </p>
            </div>
        </div>
        <div class="col-md-6 pd0">
            <div class="contenttext">
                <h1 class="h1backgren">¿Por qué lo hacemos?</h1>
                <p class="textindex2">
                    Es nuestra vocación servir y <br> 
                    trascender fronteras, por eso <br> 
                    conectamos y generamos una <br> 
                    cadena de valor social y económico <br> 
                    a largo del territorio nacional e <br>
                    internacional. El transporte es la <br>
                    vena de la economía.
                </p>
            </div>
        </div>
        <div class="col-md-6 pd0" style="background-color: #f92634;">
            <img src="http://localhost/corditanques/resource/img/imagen 4.png" alt="" class="imgindex">
            <img src="http://localhost/corditanques/resource/img/imagen 5.png" alt=""class="imgindex">
        </div>
    </div>
</div>

<div class="bodygreen">
    <div class="row backgroundwhite map"  style="position: relative; top:-1.1rem; margin: 0px;">
        <div class="row boxindex2">
            <center>
                <h1 class="titulogrande">Conoce nuestras sedes</h1>
                <ul class="nav nav-pills nav-justified wid8100" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-medellin-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Medellín</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bogota-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bogotá</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-cali-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cali</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-cartagena-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cartagena</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-barranquilla-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Barranquilla</button>
                    </li>
                </ul>
            </center>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-medellin-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1716.3124898212668!2d-75.57572070598694!3d6.277854668942115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44292778f98503%3A0xf8bf669a011d022e!2sCoordinadora%20de%20Tanques%20SAS!5e0!3m2!1ses-419!2sco!4v1660854872363!5m2!1ses-419!2sco" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6 pdc" style="text-align: left;">
                            <img src="http://localhost/corditanques/resource/icons/logo 1.png" alt="" class="logomapa">
                            <p class="textmap">
                                604 444-76-28 <br>
                                Dirección: Calle 80 #65-145 <br>
                                e-mail: liquidos@corditanques.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-bogota-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1716.3124898212668!2d-75.57572070598694!3d6.277854668942115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44292778f98503%3A0xf8bf669a011d022e!2sCoordinadora%20de%20Tanques%20SAS!5e0!3m2!1ses-419!2sco!4v1660854872363!5m2!1ses-419!2sco" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6 pdc" style="text-align: left;">
                            <img src="http://localhost/corditanques/resource/icons/logo 1.png" alt="" class="logomapa">
                            <p class="textmap">
                                604 444-76-28 <br>
                                Dirección: Calle 80 #65-145 <br>
                                e-mail: liquidos@corditanques.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-cali-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1716.3124898212668!2d-75.57572070598694!3d6.277854668942115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44292778f98503%3A0xf8bf669a011d022e!2sCoordinadora%20de%20Tanques%20SAS!5e0!3m2!1ses-419!2sco!4v1660854872363!5m2!1ses-419!2sco" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6 pdc" style="text-align: left;">
                            <img src="http://localhost/corditanques/resource/icons/logo 1.png" alt="" class="logomapa">
                            <p class="textmap">
                                604 444-76-28 <br>
                                Dirección: Calle 80 #65-145 <br>
                                e-mail: liquidos@corditanques.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-cartagena-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1716.3124898212668!2d-75.57572070598694!3d6.277854668942115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44292778f98503%3A0xf8bf669a011d022e!2sCoordinadora%20de%20Tanques%20SAS!5e0!3m2!1ses-419!2sco!4v1660854872363!5m2!1ses-419!2sco" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6 pdc" style="text-align: left;">
                            <img src="http://localhost/corditanques/resource/icons/logo 1.png" alt="" class="logomapa">
                            <p class="textmap">
                                604 444-76-28 <br>
                                Dirección: Calle 80 #65-145 <br>
                                e-mail: liquidos@corditanques.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-barranquilla-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1716.3124898212668!2d-75.57572070598694!3d6.277854668942115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44292778f98503%3A0xf8bf669a011d022e!2sCoordinadora%20de%20Tanques%20SAS!5e0!3m2!1ses-419!2sco!4v1660854872363!5m2!1ses-419!2sco" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6 pdc" style="text-align: left;">
                            <img src="http://localhost/corditanques/resource/icons/logo 1.png" alt="" class="logomapa">
                            <p class="textmap">
                                604 444-76-28 <br>
                                Dirección: Calle 80 #65-145 <br>
                                e-mail: liquidos@corditanques.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("web/navs/footer.php");
?>