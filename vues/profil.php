<div class="contenant">
<div class="imageal1">
    <img id="imageduhaut" src="vues/Capturegraffiti.PNG"></img>
    </div>
<h1 id="bienvenueprofil">&nbsp; Bienvenue <?= $_SESSION['Prenom'], ' ', $_SESSION['Nom'] ?> !</h1>
<br>
<div id="perf">
      <div class="profilh1">
        <p>Vos performances</p></div>
        <div class="bodyprofile">
      <div class="containerprofile">
      <h1>Vos dernières pulsations cardiques/min</h1>
      <canvas id="chart" style="width: 100%; height: 60vh; background: #222; border: 1px solid #555652; margin-top: 5px;"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script>
          var ctx = document.getElementById("chart").getContext('2d');
          var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],
            datasets: 
            [{
              label: 'Données',
              data: [<?php echo $data1; ?>],
              backgroundColor: 'transparent',
              borderColor:'rgba(0, 255, 255)',
              borderWidth: 3
            }]
          },

          options: {
          scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
          tooltips:{mode: 'index'},
          legend:{display: false, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
          }
          });
        </script> 
        <br>
      </div>
      </div>
      </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="profilh1">
        <p>Estimation de votre age en fonction de vos BPM maximums lors de l'effort</p></div>
    <div class="bodyprofile">
    <table id="tableauprofile1" style="width: 100%; height: 50vh; background: #222; border: 1px solid #555652; margin-top: 5px;">
          <tr>
            <th>15-20 ans</th>
            <th>20-30 ans</th>
            <th>30-40 ans</th>
            <th>40-50 ans</th>
            <th>50-60 ans</th>
            <th>60-70 ans</th>
            <th>70-80 ans</th>
            <th>80-90 ans</th>
            <th>90-100 ans</th>
          </tr>
          <tr>
            <td>195,1 bpm</td>
            <td>189,5 bpm</td>
            <td>182,5 bpm</td>
            <td>175,5 bpm</td>
            <td>168,5 bpm</td>
            <td>161,5 bpm</td>
            <td>154,5 bpm</td>
            <td>147,5 bpm</td>
            <td>140,5 bpm</td>
          </tr>
          </table>
          </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="profilh1">
        <p>Estimation de votre age en fonction de vos BPM au repos</p></div>
    <div class="bodyprofile">
    <table id="tableauprofile1" style="width: 100%; height: 50vh; background: #222; border: 1px solid #555652; margin-top: 5px;">
          <tr>
            <th>15-20 ans</th>
            <th>20-30 ans</th>
            <th>30-40 ans</th>
            <th>40-50 ans</th>
            <th>50-60 ans</th>
            <th>60-70 ans</th>
            <th>70-80 ans</th>
            <th>80-90 ans</th>
            <th>90-100 ans</th>
          </tr>
          <tr>
            <td>110 bpm</td>
            <td>100 bpm</td>
            <td>80 bpm</td>
            <td>75 bpm</td>
            <td>70 bpm</td>
            <td>65 bpm</td>
            <td>60 bpm</td>
            <td>55 bpm</td>
            <td>50 bpm</td>
          </tr>
          </table>
          </div>
          <br>
          <br>
          <br>
          <br>
      <div id="donnees-env">
      <div class="profilh1">
        <p>Données sonores</p></div>
      <div class="bodyprofile">
      <div class="containerprofile">
      <h1>Moyenne des dB dans la salle au cours de la journée</h1>
      <canvas id="chart3" style="width: 100%; height: 60vh; background: #222; border: 1px solid #555652; margin-top: 5px;"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script>
          var ctx3 = document.getElementById("chart3").getContext('2d');
          var myChart3 = new Chart(ctx3, {
          type: 'polarArea',
          data: {
              labels: ['10-11h','11-12h','12-13h','13-14h','14-16h','16-18h','18-20h'],
              datasets: 
              [{
                  label: 'Données',
                  data: [<?php echo $data3; ?>],
                  backgroundColor: 'transparent',
                  borderColor:'rgba(0, 255, 255)',
                  borderWidth: 3
              }]
          },

          options: {
          scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
          tooltips:{mode: 'index'},
          legend:{display: false, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
          }
          });
          </script>
      </div>
      </div>
    