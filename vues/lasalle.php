<div id="salle">
      <div class="profilh1">
        <p>Evolution du CO2 dans la Salle en direct</p>
    </div>
    <div class="bodyprofile">
      <div class="containerprofile">
      <h1>CO2 en ppm</h1>
      <canvas id="chart4" style="width: 100%; height: 60vh; background: #222; border: 1px solid #555652; margin-top: 5px;"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script>
          var ctx4 = document.getElementById("chart4").getContext('2d');
          var myChart4 = new Chart(ctx4, {
          type: 'line',
          data: {
              labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],
              datasets: 
              [{
                  label: 'Données',
                  data: [<?php echo $data4; ?>],
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
        <br>
        <br>
        <div class="messagelasalle">
          <p id="messageco2"></p>
          <script>
            var co2live = [<?php echo $data5; ?>];
              let greeting;
              if (co2live > 1200) {
                greeting = 'IL FAUT AERER LA SALLE';
              } else {
                greeting = 'LA SALLE N A PAS BESOIN D ETRE AEREE';
              }

            document.getElementById("messageco2").innerHTML = greeting;
            window.alert(greeting)     
          </script>
        </div>
        <br>