<p class="image-FAQ"><img src="vues/FAQ.png"></p>

<header>
	<h1 class="titre-FAQ">FAQ</h1>
</header>

<section>
	<article>

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