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
    <div class="bodyprofile">
    <table id="tableauprofile1" style="width: 100%; height: 60vh; background: #222; border: 1px solid #555652; margin-top: 5px;">
          <tr>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>d</th>
            <th>e</th>
            <th>f</th>
            <th>g</th>
            <th>h</th>
            <th>i</th>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
            <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          </table>
          </div>
          <br>
          <br>
          <br>
          <br>
      <div id="donnees-env">
      <div class="profilh1">
        <p>Données environnementales</p></div>
      <div class="bodyprofile">
      <div class="containerprofile">
      <h1>dB dans la salle</h1>
      <canvas id="chart3" style="width: 100%; height: 60vh; background: #222; border: 1px solid #555652; margin-top: 5px;"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script>
          var ctx3 = document.getElementById("chart3").getContext('2d');
          var myChart3 = new Chart(ctx3, {
          type: 'polarArea',
          data: {
              labels: [1,2,3,4,5,6,7,8,9,10],
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
    <div class="bodyprofile">
    <table id="tableauprofile1" style="width: 100%; height: 60vh; background: #222; border: 1px solid #555652; margin-top: 10px;">
          <tr>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>d</th>
            <th>e</th>
            <th>f</th>
            <th>g</th>
            <th>h</th>
            <th>i</th>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
            <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
          </table>
          </div>




    yAxes: [{ticks: {min: 0,max: 100,stepSize: 20}}]

