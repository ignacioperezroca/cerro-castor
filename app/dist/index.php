<?php include 'header.php'; ?>
  
  <section class='fullpage'>
    <div class='dropdown-hover'></div>
    <div class="container-fluid">
      <div class="row">
        <div id="fullpage">
          <div class="section section-00" data-anchor='section-krundi'>
            <div class="krundi-anm--container">
              <img src="images/krundi-part-02.png" alt="" class="img-center krundi hidden-sm-down">
              <img src="images/krundi-part-01.png" alt="" class="img-center krundi hidden-sm-down">
              <img src="images/krundi-part-04.png" alt="" class="img-center krundi hidden-md-up">
              <img src="images/krundi-part-03.png" alt="" class="img-center krundi hidden-md-up">
            </div>
            <img src="images/border-blue.png" alt="" class="border-texture">
            <div class="border-circle">
              <div class="arrow-container moveSectionDown"></div>
            </div>
          </div>
          <div class="section section-01" data-anchor='section-historia--krund'>
            <div class="container-centered">
              <h1 class="section-title">Historia</h1>
              <div class="row margintop40">
                <div class="col-xs-12 col-md-6">
                  <div class="margintop100 hidden-md-down"></div>
                  <div class="margintop20 hidden-sm-up"></div>
                  <p class="white">
                    <span class="yellow weight-black">¿Lo sabían? <br>El nombre geográfico de Cerro Castor es Cerro Krund. </span>
                    <br><br>
                    Fue denominado así en memoria de <span class="weight-black">Ernesto “El Colorado” Krund,</span>, un baqueano que participó de las primeras entregas de correo entre Ushuaia y el lago Kami, a fines de la década del 30.
                    <br><br>
                    Por su conocimiento de la zona guió a los agentes que prestaban ese servicio, enseñándoles a armar sus propios esquíes cuando en invierno era imposible atravesar el área a caballo.  
                  </p>
                  <div class="margintop60"></div>
                  <img src="images/miscelanea.png" alt="" class="img-center hidden-sm-down">
                </div>
                <div class="col-xs-12 col-md-6">
                  <img src="images/ernesto-krund.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="section section-01" data-anchor='section-historia--krundi'>
            <div class="container-centered">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="margintop60 hidden-md-up"></div>
                  <img src="images/krundi-ski.png" alt="">
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="margintop100 hidden-md-down"></div>
                  <div class="margintop20 hidden-sm-up"></div>
                  <p class="white">
                    Inspirado en "El Colorado" y su historia, un castor de por aquí tomó prestado su nombre y se transformó en el anfitrión del Cerro. <span class="weight-black yellow">Krundi </span>conoce este escenario como nadie, ama los deportes y no hay nada que disfrute más que un día de nieve.  
                    <br><br>
                    <span class="weight-black yellow">Krundi </span>es inquieto y divertido. Le encanta hacer nuevos amigos y posar en todas las fotos. Está orgulloso de vivir en el bosque más austral del mundo y su sueño es lograr que todos conozcan este increíble punto del planeta. 
                    <br><br>
                    <span class="weight-black yellow">Si te lo cruzás, ¡invitale un chocolate caliente!</span>
                  </p>
                  <div class="margintop20 hidden-md-down"></div>
                  <div class="margintop60 hidden-sm-up"></div>
                </div>
              </div>
            </div>
            <img src="images/border-yellow.png" alt="" class="border-texture">
          </div>
          <div class="section section-02" data-anchor='section-perfil'>
            <div class="container-centered">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <img src="images/krundi-front.png" alt="" class="hidden-sm-down">
                  <img src="images/krundi-front-mobile.gif" alt="" class="hidden-md-up">
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="box-krundi">
                    <p class="text-left">
                      <span class="weight-black">Nombre: </span> Krundi Castor <br><br>
                      <span class="weight-black">Hogar: </span> El bosque más austral del mundo <br><br>
                      <span class="weight-black">Personalidad: </span> Pura energía (¡Quedate quieto Krundi) <br><br>
                      <span class="weight-black">Hobbies: </span> Ski, Snowboard, Patinaje <br><br>
                      <span class="weight-black">Sueño: </span> Reunir a todo el mundo en el Cerro  <br><br>
                      <span class="weight-black">Bebida favorita: </span> Chocolate caliente <br><br>
                      <span class="weight-black">Color favorito: </span> Rojo fuego <br><br>
                      <span class="weight-black">Cumpleaños: </span> 8 de Julio <br><br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <img src="images/border-red.png" alt="" class="border-texture">
          </div>
          <div class="section section-03" data-anchor='section-instagram'>
            <div class="container-centered">
              <h1 class="section-title font20 weight-medium">Compartí tu foto con</h1>
              <h1 class="section-title mt-4 weight-regular">#Krundi</h1>
              <div class="row margintop40 marginbottom100">


                <?php
                $bd = new SQLite3('krundi.db');

                $results = $bd->query('SELECT * FROM instagram ORDER BY ID DESC');

                while ($row = $results->fetchArray()) {
                    
                ?>

                <div class="col-xs-12 col-md-4">
                  <div class="margintop30 visible-md-up"></div>
                  <div class="white-card">
                    <a href="https://www.instagram.com/p/<?=$row['URL']?>" target="_blank"><img src="<?=$row['IMG']?>" alt="" class="img-center full-width"></a>
                    <div class="txt-container">
                      <p><?=$row['TEXT']?></p>
                      <img src="images/border-white.png" alt="" class="border-texture blog">
                    </div>
                  </div>
                </div>

                <?php
                }
                ?>

              </div>
            </div>
            <img src="images/border-black.png" alt="" class="border-texture last">
            <footer>
              <div class="container-fluid">
                <div class="row">
                  <div class="social-block margintop20 marginbottom10 hidden-sm-up">
                    <a href="https://www.facebook.com/KrundiCastor/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/krundicastor" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/krundicastor" target="_blank"><i class="fa fa-instagram"></i></a>
                  </div>
                  <div class="crj-terms">
                    <p>KRUNDI El Castor - Mascota oficial de Cerro Castor</p>
                  </div>
                  <div class="developed-thet">
                    <a href="http://thet.com.ar/" target="_blank">
                      <p>Desarrollado por</p>
                      <img src="http://carajoweb.com/landingapp/img/thet-logo.png" alt="img-carajo">
                    </a>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </div>        
      </div>
    </div>    
  </section>

<?php include 'footer.php'; ?>

