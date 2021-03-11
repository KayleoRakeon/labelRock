<!-- Barre musique -->

    <footer class="musique">
        <article class="morceau">
            <div class="pochette"></div>
            <div>
                <p><strong>Artiste</strong></p>
                <p>Titre du morceau</p>
            </div>
        </article>

        <article class="controls">
            <?php include "img/picto/boucle.svg"?>
            <?php include "img/picto/back.svg"?>
            <div class="play">
                <?php include "img/picto/play.svg"?>
            </div>
            <div class="pause hide">
                <?php include "img/picto/pause.svg"?>
            </div>
            <?php include "img/picto/next.svg"?>
            <?php include "img/picto/like-actif.svg"?>
        </article>

        <article class="temps">
            <p>0:34</p>
        </article>

        <article class="volume">
            <?php include "img/picto/volume.svg"?>
            <input type="range">
        </article>
    </footer>
