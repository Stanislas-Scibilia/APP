<?php
    /* Database connection settings */
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db';
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

    $data1 = '';
    $data2 = '';

    //query to get data from the table
    $sql = "SELECT * FROM datasets ";
    $result = mysqli_query($mysqli, $sql);

    //loop through the returned data
    while ($row = mysqli_fetch_array($result)) {

        $data1 = $data1 . '"'. $row['data1'].'",';
        $data2 = $data2 . '"'. $row['data2'] .'",';
    }

    $data1 = trim($data1,",");
    $data2 = trim($data2,",");
?>

<div class="contenant">
<div class="imageal1">
        <img id="imageduhaut" src="vues/Capturegraffiti.PNG"></img>
    </div>
<h1 id="bienvenueprofil">&nbsp; Bienvenue Stanislas Scibilia !</h1>
<br>
<div id="perf">
      <div class="profilefh1">
        <p>Vos performances</p></div>
        <div class="flexboxprofile">
          <div class="fondprofile">
          <div class="tableprofile1">
          <table>
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
          </div>
          <div class="fondprofile">
          <div class="tableprofile2">
            <canvas id="graphprophile"></canvas>

              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
              <script src="vues/graphiqueprofile.js"></script>
          </div>
          </div> 
        </div>
        <br>
        <div class="texteprofile">
        <p>performance Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dicta nemo cum vitae harum deleniti quo est, perspiciatis ad sapiente voluptate in vero dolores. Nobis quas itaque facere ullam officiis? </p>
        </div>
      </div>
    <br>
    <div id="donnees-env">
      <div class="profilefh1">
        <p>Données Environnementales</p></div>
        <div class="flexboxprofile">
          <div class="fondprofile">
          <div class="tableprofile1">  
          <table>
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
          </div>
          <div class="fondprofile">
          <div class="tableprofile2">
          <canvas id="graphenv"></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
          <script src="vues/graphiqueenv.js"></script>
          </div>
          </div> 
        </div>
        <br>
        <br>
        <div class="flexboxprofile">
          <div class="fondprofile">
          <div class="tableprofile1">  
          <table>
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
          </div>
          <div class="fondprofile">
          <div class="tableprofile2">
          <canvas id="graphenv2"></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
          <script src="vues/graphiqueenv2.js"></script>
          </div>
          </div> 
        </div>
        <br>
        <div class="texteprofile">
        <p>performance Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dicta nemo cum vitae harum deleniti quo est, perspiciatis ad sapiente voluptate in vero dolores. Nobis quas itaque facere ullam officiis? </p>
        </div>
      </div>
    <br>
      <div id="perf-ami">
      <div class="profilefh1">
        <p>Performances de vos amis</p></div>
        <div class="flexboxprofile">
          <div class="fondprofile">
          <div class="tableprofile1">
          <table>
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
          </div>
          <div class="fondprofile">
          <div class="tableprofile2">
          <canvas id="graphami"></canvas>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
          <script src="vues/graphiqueami.js"></script>
          </div>
          </div>
        </div>
        <br>
        <div class="texteprofile">
        <p>performance Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, dicta nemo cum vitae harum deleniti quo est, perspiciatis ad sapiente voluptate in vero dolores. Nobis quas itaque facere ullam officiis? </p>
        </div>
      </div>
      </div>
      <br>
      <br>
      <br>
      <div class="bodyprofile">
      <div class="containerprofile">
      <h1>Ouais le graphique stp</h1>
        <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script>
          var ctx = document.getElementById("chart").getContext('2d');
          var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: [1,2,3,4,5,6,7,8,9],
              datasets: 
              [{
                  label: 'Data 1',
                  data: [<?php echo $data1; ?>],
                  backgroundColor: 'transparent',
                  borderColor:'#e91e63',
                  borderWidth: 3
              },

              {
                  label: 'Data 2',
                  data: [<?php echo $data2; ?>],
                  backgroundColor: 'transparent',
                  borderColor:'rgba(0,255,255)',
                  borderWidth: 3
              }]
          },

          options: {
          scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
          tooltips:{mode: 'index'},
          legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
          }
          });
          </script>
      </div>
      </div>
