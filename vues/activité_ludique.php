<section>
    <div class="imageal1">
        <img id="imageduhaut" src="vues/imagehaut.jpg"></img>
    </div>
    <br>
        <h1 id="aludique">Activite Ludique</h1>
    <br>
    <br>
    <p id="h2al">
    Bienvenue sur l'activite ludique de Fit'Analysor

    </p>
    <p id="h3al">Tentez votre chance en jouant au jeu ludique. Le principe est simple, Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta omnis distinctio laboriosam assumenda, reprehenderit cumque debitis iusto laudantium fugit deserunt alias quasi dolor, a, nesciunt voluptates inventore dolores. Inventore quasi, non totam recusandae sit illo ex odio! Dolore, quasi quo?  
    </p>
    <div class="texteal1">
        <p>
        <em>"C'est une triste chose de songer que la nature parle et que le genre humain ne l'écoute pas"</em>  
        <br>
        <h3 id="auteurcitation">Victor Hugo</h3>
        </p>  
    </div>
    <div class="texteal2">
        <p>
        <em>"Les espèces qui survivent ne sont pas les espèces les plus fortes, ni les plus intelligentes, mais celles qui s'adaptent le mieux aux changements"</em>  
        <br>
        <h3 id="auteurcitation">Charles Darwin</h3>
    </p>  
    </div>
    <div class="texteal1">
        <p>
        <em>"A l'échelle cosmique, l'eau est plus rare que l'or."</em>
        <br>
        <h3 id="auteurcitation">Hubert Reeves</h3> 
        </p>  
    </div>
    <div class="texteal2">
        <p>
        <em>"Ce qui caractérise notre époque, c'est la perfection des moyens et la confusion des fins."</em>
        <br>
        <h3 id="auteurcitation">Albert Einstein</h3>
        </p>  
    </div>
    <div class="videoal1">
        <video id="vidal1" src="vues/vidactivlud1.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop  muted height="300"></video>  
    </div>
    <div class="videoal2">
        <video id="vidal2" src="vues/vidact2.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop muted height="300"></video>  
    </div>
    <div class="videoal3">
        <video id="vidal3" src="vues/vidact3.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop muted height="300"></video>  
    </div>
    <div class="videoal4">
        <video id="vidal4" src="vues/vid01.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop muted height="300"></video>  
    </div>
    <br>
    <br>
    <p id="Codeal">Code Secret</p>
    <form class="flexboxactivite" method="post">
        <div class=boxal>
               <input id="boxcode" name='1' type="number" min="0" max="9">
        </div>
        <div class=boxal>
                <input id="boxcode" name='2' type="number" min="0" max="9">
        </div>
        <div class=boxal>
                <input id="boxcode" name='3' type="number" min="0" max="9">
        </div>
        <div class=boxal>
                <input id="boxcode" name='4' type="number" min="0" max="9">
        </div>
        <div class="boxal">
            <input type="submit" value="Valider">
        </div>
    </form>
    <?php if (isset($message)) {echo $message;}?>
    <br>
    <br>
    <br>
    <br>
    <br>
    </section>