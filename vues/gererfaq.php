<p class="image-FAQ"><img src="vues/FAQ.png"></p>

<header>
	<h1 class="titre-FAQ">Gestion FAQ</h1>
</header>

<section>
	<article>
	
	<div class="bouton_connexion">
		<a id="ajouterQuestion">Ajouter une question</a>
	</div>
	
	<div id="form" style="display: none;">
		<form method="post">
			<label for="question">Question</label> <br>
			<textarea name="question" id="question" cols="30" rows="10"></textarea> <br> <br>

			<label for="reponse">Réponse</label> <br>
			<textarea name="reponse" id="reponse" cols="30" rows="10"></textarea> <br> <br>

			<input type="submit" value="Enregistrer"> <br> <br>
		</form>
	</div>

		<?php while ($question = $result->fetch_assoc()): ?>
			
			<button id="Question<?=$question['id_question']?>" style="font-size: 28px;color: white;background-color: #32244c;">> <?=$question['question']?></button><br />
			
			<div id="Reponse<?=$question['id_question']?>" style="font-size: 28px;color: white;background-color: #32244c;display: none;">
				<p><?=$question['reponse']?></p>
			</div>

			<script>
				let Question<?=$question['id_question']?> = document.getElementById("Question<?=$question['id_question']?>");

				let Reponse<?=$question['id_question']?> = document.getElementById("Reponse<?=$question['id_question']?>");

				Question<?=$question['id_question']?>.addEventListener("click", () => {
				if(getComputedStyle(Reponse<?=$question['id_question']?>).display != "none"){
					Reponse<?=$question['id_question']?>.style.display = "none";
				} else {
					Reponse<?=$question['id_question']?>.style.display = "block";
				}
				})
			</script>

		<?php endwhile ?>

	</article>
</section>

<script>
	ajouterQuestion = document.getElementById('ajouterQuestion')
	form = document.getElementById('form')

	ajouterQuestion.addEventListener('click', () => {
		if(getComputedStyle(form).display != "none"){
			form.style.display = "none";
		} else {
			form.style.display = "block";
		}
	})
</script>