
        </main>
        <?php if(!empty($w)){?>
            <a href="#"><img class="iconowhatsap" src="http://localhost/corditanques/resource/icons/icono.png" alt=""></a>
        <?php } ?>
        <footer  id="contactanos">
            <img src="http://localhost/corditanques/resource/img/imagen 6.png" alt="" class="imgindex2">
            <div class="contactanos" style=" margin: 0px;">
                <form action="" class="row backred" style=" margin: 0px;">
                    <h5 style="color: white; margin-bottom: 1rem;">Envianos un mensaje</h5>
                    <div class="col-6">
                        <label for="">Nombre y apellido:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Celular:</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Servicio:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="">Ciudad:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label for="">Mensaje:</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" style="height: 80px;"></textarea>
                    </div>
                    <br>
                    <div>
                        <button class="button-black">Enviar</button>
                    </div>
                </form> 
            </div>
            <div class="bodygreen2">
                <img src="http://localhost/corditanques/resource/icons/icono 3.png" alt="" class="iconfooter" style="margin-left: 1rem;">
                <img src="http://localhost/corditanques/resource/icons/icono.png" alt="" class="iconfooter">
                <img src="http://localhost/corditanques/resource/icons/icono 2.png" alt="" class="iconfooter">
            </div>
        </footer>
        <script src="http://localhost/corditanques/css/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.bajar').click(function(){
                    $('body, html').animate({
                        scrollTop: '1000000px'
                    })
                });
            });
            function viajes(){
                location.replace('http://localhost/corditanques/web/viajes/viajes.php');
            }
        </script>
    </body>
</html>