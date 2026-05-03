<section id="inicio" class="section container">
    <h2 class="title is-3 has-text-dark mb-5" style="border-bottom: 2px solid #363636; padding-bottom: 10px;">Últimas Noticias</h2>
    <div class="columns is-multiline">
        <?php if (!empty($articulos)): ?>
            // Recorremos cada artículo y lo mostramos en una tarjeta
            <?php foreach ($articulos as $articulo): ?>
                <div class="column is-4">
                    <div class="card" style="border-radius: 8px; height: 100%; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <div class="card-content">
                            <span class="tag is-info is-light mb-3">Noticia</span>
                            
                            <p class="title is-5"><a href="#" class="has-text-black"><?= htmlspecialchars($articulo['titulo']) ?></a></p>
                            
                            <div class="content has-text-grey-dark mt-2 is-size-6">
                                <?= htmlspecialchars($articulo['descripcion']) ?>
                            </div>
                            
                            <p class="is-size-7 has-text-grey mt-3">
                                📅 Publicado el: <?= date('d/m/Y', strtotime($articulo['fecha_publicacion'])) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="column is-12">
                <div class="notification is-warning has-text-centered">
                    Aún no hay noticias publicadas. ¡Sé el primero en escribir una!
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="columns mt-5 is-vcentered">
        <div class="column is-half">
            <div class="box has-background-white-ter" style="border-radius: 8px;">
                <h3 class="title is-5 mb-4 has-text-grey-dark">🎥 Reportaje Especial</h3>
                <figure class="image is-16by9">
                    <video controls class="has-ratio" style="border-radius: 6px;">
                        <source src="assets/video/video_web.mp4" type="video/mp4">
                    </video>
                </figure>
            </div>
        </div>
        <div class="column is-half">
            <div class="box has-background-white-ter" style="border-radius: 8px; height: 100%;">
                <h3 class="title is-5 mb-4 has-text-grey-dark">🎙️ Podcast El Faro</h3>
                <audio controls style="width: 100%; margin-top: 10px;">
                    <source src="assets/audio/El_Faro_audio.mp3" type="audio/mp3">
                </audio>
                <p class="mt-4 is-size-6 has-text-grey">Escucha nuestro resumen semanal. Actualidad, debates y entrevistas con los protagonistas de la semana.</p>
            </div>
        </div>
    </div>
</section>

<section id="deportes" class="section container mt-4">
    <h2 class="title is-3 has-text-dark mb-5" style="border-bottom: 2px solid #363636; padding-bottom: 10px;">Deportes</h2>

    <div class="columns is-variable is-4">
        <div class="column is-4">
            <div class="card" style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%; display: flex; flex-direction: column;">
                <div class="card-image">
                    <figure class="image is-2by1">
                        <img src="https://media.biobiochile.cl/wp-content/uploads/2026/03/vidal-abajo-de-conce-750x400.jpg" alt="Vidal" style="object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    </figure>
                </div>
                <div class="card-content" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <p class="title is-5 mb-2">Arturo Vidal descartado</p>
                        <p class="content is-small has-text-grey mb-4">Se perderá el duelo por lesión confirmada por el cuerpo médico del club.</p>
                    </div>
                    <a href="https://www.biobiochile.cl/noticias/deportes/futbol/colo-colo/2026/03/23/arturo-vidal-quedo-descartado-para-enfrentar-a-deportes-concepcion-y-ya-piensa-en-su-nuevo-objetivo.shtml" target="_blank" class="button is-dark is-outlined is-small is-fullwidth mt-2">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="column is-4">
            <div class="card" style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%; display: flex; flex-direction: column;">
                <div class="card-image">
                    <figure class="image is-2by1">
                        <img src="https://media.biobiochile.cl/wp-content/uploads/2026/03/colo-colo-empato-ante-coquimbo-en-la-copa-de-la-liga-750x400.jpg" alt="Colo Colo" style="object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    </figure>
                </div>
                <div class="card-content" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <p class="title is-5 mb-2">Colo Colo empató</p>
                        <p class="content is-small has-text-grey mb-4">Empate 1-1 en su esperado debut frente a Coquimbo en la Copa de la Liga.</p>
                    </div>
                    <a href="https://www.biobiochile.cl/noticias/deportes/futbol/colo-colo/2026/03/21/colo-colo-empato-con-coquimbo-unido-en-su-debut-en-la-copa-de-la-liga.shtml" target="_blank" class="button is-dark is-outlined is-small is-fullwidth mt-2">Leer artículo</a>
                </div>
            </div>
        </div>

        <div class="column is-4">
            <div class="card" style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%; display: flex; flex-direction: column;">
                <div class="card-image">
                    <figure class="image is-2by1">
                        <img src="https://media.biobiochile.cl/wp-content/uploads/2026/03/adidas-camiseta-chile-desierto-florido-alternativa-750x400.jpg" alt="La Roja" style="object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                    </figure>
                </div>
                <div class="card-content" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <p class="title is-5 mb-2">Nueva camiseta de Chile</p>
                        <p class="content is-small has-text-grey mb-4">Diseño alternativo inspirado en los colores característicos del desierto florido.</p>
                    </div>
                    <a href="https://www.biobiochile.cl/noticias/deportes/futbol/la-roja/2026/03/20/ya-es-oficial-adidas-lanza-nueva-camiseta-alternativa-de-chile-inspirada-en-desierto-florido.shtml" target="_blank" class="button is-dark is-outlined is-small is-fullwidth mt-2">Leer artículo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="negocios" class="section container mt-4 mb-6">
    <h2 class="title is-3 has-text-dark mb-5" style="border-bottom: 2px solid #363636; padding-bottom: 10px;">Negocios</h2>

    <div class="columns is-variable is-4">
        <div class="column is-4">
            <div class="box" style="border-radius: 8px; border-top: 4px solid #48c774; box-shadow: 0 4px 6px rgba(0,0,0,0.05); height: 100%;">
                <p class="title is-5 mb-3">Emprendimientos crecen</p>
                <p class="has-text-grey is-size-6">Las startups chilenas siguen expandiéndose, captando nuevas rondas de inversión en el extranjero.</p>
            </div>
        </div>

        <div class="column is-4">
            <div class="box" style="border-radius: 8px; border-top: 4px solid #ffdd57; box-shadow: 0 4px 6px rgba(0,0,0,0.05); height: 100%;">
                <p class="title is-5 mb-3">Sube el dólar</p>
                <p class="has-text-grey is-size-6">Fuerte impacto en productos importados debido a las variaciones del mercado internacional y la caída del cobre.</p>
            </div>
        </div>

        <div class="column is-4">
            <div class="box" style="border-radius: 8px; border-top: 4px solid #3273dc; box-shadow: 0 4px 6px rgba(0,0,0,0.05); height: 100%;">
                <p class="title is-5 mb-3">Inversiones en retail</p>
                <p class="has-text-grey is-size-6">Continúa la expansión comercial con la apertura de nuevos centros en regiones clave del país.</p>
            </div>
        </div>
    </div>
</section>