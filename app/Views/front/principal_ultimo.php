<div class="content">
    <section>
        <p class="parrafo">Somos una empresa que se dedica a la importación y venta de cosméticos de lujo de las marcas más reconocidas en el mundo.</p>
        <p>En el sitio encontrarás información sobre nuestra empresa para recibir nuestras novedades.</p>
    </section>
    <!-- inicio del carrusel-->
    <div class="container-fluid"> <!--contenedor que ocupa todo el ancho de la pantalla-->

        <!-- Esto crea un div con un identificador único "carouselExampleIndicators" y la clase "carousel slide". Este div será utilizado para el carrusel de imágenes.-->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators"><!--para mostrar los indicadores del carrosel, los botones-->
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner"><!-- Esto crea un div que contendrá las imágenes del carrusel.-->
                <div class="carousel-item active">
                    <img src="assets/img/rare-blush-1.jpg" class="d-block mx-auto img-fluid" style="max-height: 600px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/rare-labial.jpg" class="d-block mx-auto img-fluid" style="max-height: 600px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/rare-barra-1.jpg" class="d-block mx-auto img-fluid" style="max-height: 600px;" alt="...">
                </div>
            </div>
            <!--hay dos botones: uno para retroceder(prev) y otro para avanzar (next)-->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--fin de carrusel-->
</div>
