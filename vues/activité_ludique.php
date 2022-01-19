<section>
    <div class="imageal1">
        <img id="imageduhautprofil" src="vues/imagehaut.jpg"></img>
    </div>
    <br>
        <h1 id="aludique">Activite Ludique</h1>
    <br>
    <br>
    <p id="h2al">
    Bienvenue sur l'activité ludique de Fit'Analysor.
    <br>
    <br>
    Principe du jeu: mettre pause au bon moment pour trouver le chiffre écrit en vert sur chaque activité. Chaque chiffre constitue une partie du Code Secret.
    </p>
    <div class="texteal1">
        <p>
        <em>"C'est une triste chose de songer que la nature parle et que le genre humain ne l'écoute pas"</em>  
        <br>
        <h3 id="auteurcitation">Victor Hugo</h3>
        </p>  
    </div>
    <div class="videoal1">
        <video id="vidal1" src="vues/vidact1.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop  muted height="300"></video>  
    </div>
    <div class="texteal2">
        <p>
        <em>"Les espèces qui survivent ne sont pas les espèces les plus fortes, ni les plus intelligentes, mais celles qui s'adaptent le mieux aux changements"</em>  
        <br>
        <h3 id="auteurcitation">Charles Darwin</h3>
    </p>  
    </div>
    <div class="videoal2">
        <video id="vidal1" src="vues/vidact2.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop muted height="300"></video>  
    </div>
    <div class="texteal1">
        <p>
        <em>"A l'échelle cosmique, l'eau est plus rare que l'or."</em>
        <br>
        <h3 id="auteurcitation">Hubert Reeves</h3> 
        </p>  
    </div>
    <div class="videoal1">
        <video id="vidal1" src="vues/vidact3.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop muted height="300"></video>  
    </div>
    <div class="texteal2">
        <p>
        <em>"Ce qui caractérise notre époque, c'est la perfection des moyens et la confusion des fins."</em>
        <br>
        <h3 id="auteurcitation">Albert Einstein</h3>
        </p>  
    </div>
    <div class="videoal2">
        <video id="vidal1" src="vues/vidact4.mp4" controls controlsList="nodownload nofullscreen noremoteplayback" loop muted height="300"></video>  
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p id="Codeal">Code Secret</p>
    <form class="flexboxactivite" id="code" method="post" action="">
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
    <span style = "font-size : 50px;"> <?php echo $messageAL?> </span>
    <br>
    <br>
    <br>
    <br>
    <br>
    </section>