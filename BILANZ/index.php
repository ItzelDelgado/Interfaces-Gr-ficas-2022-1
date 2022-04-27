
<?php include_once 'Template/header_healty_app.php';?>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <a href="/Views/recetas/filete-de-pescado.php"><img src="/Assets/img/recetas/filete-pescado-epazote.png" style="width:100%"></a>
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <a href="/Views/recetas/pechuga-de-pollo-soja.php"><img src="/Assets/img/recetas/pechuga-miel-limon.jpg" style="width:100%"></a>
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <a href="/Views/recetas/galletas-de-avena.php"><img src="/Assets/img/recetas/galletas-de-avena.jpg" style="width:100%"></a>
      <div class="text"></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <div class="text-center" style="font-size: larger; text-decoration: overline;">
    <h2>Recetas recomendadas</h2>
  </div>

  <div class="recommendations-container">
    <div class="recomendations-item">
      <a href="/Views/recetas/sandwich-de-atun.php"> <img src="/Assets/img/recetas/sandwich-de-atun.jpg" alt=""></a>
      <h3>Sandwich de atún</h3>
    </div>
    <div class="recomendations-item">
      <a href="/Views/recetas/muffins-de-avena.php"><img src="/Assets/img/recetas/muffin.jpg" alt=""></a>
      <h3>Muffins de avena</h3>
    </div>
    <div class="recomendations-item">
      <a href="/Views/recetas/picadillo-de-res.php"><img src="/Assets/img/recetas/picadillo-res-receta-mixta.png" alt=""></a>
      <h3>Picadilo de res</h3>
    </div>
    <div class="recomendations-item">
      <a href="/Views/recetas/sopecitos-de-nopal-con-atun.php"><img src="/Assets/img/recetas/sopecitos-de-nopal-con-atun.jpg" alt=""></a>
      <h3>Sopecitos de nopal</h3>
    </div>
  </div>


  <?php include_once 'Template/footer_healty_app.php';?>