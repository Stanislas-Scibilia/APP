const graph22 = document.getElementById("graphenv2").getContext("2d");

Chart.defaults.global.defaultFontSize = 18;

let massPopChart22 = new Chart(graph22, {
  type: "polarArea", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
  data: {
    labels: [
      "Lundi",
      "Mardi",
      "Mercredi",
      "Jeudi",
      "Vendredi",
      "Samedi",
      "Dimanche",
    ],
    datasets: [
      {
        label: "G",
        data: [55,66,52,42,73,55,64],
        // backgroundColor: "blue",
        backgroundColor: [
          "red",
          "orange",
          "salmon",
          "blue",
          "yellow",
          "purple",
          "green",
        ],
        hoverBorderWidth: 3,
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "Volume sonore en dB",
      fontSize: 20,
    },
    legend: {
      display: false,
    },
    // start at 0
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
    layout: {  
      padding: {
        left: 0,
        right: 20,
        top: 0,
      },
    },
  },
});