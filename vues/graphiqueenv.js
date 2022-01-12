const graph2 = document.getElementById("graphenv").getContext("2d");

Chart.defaults.global.defaultFontSize = 18;

let massPopChart2 = new Chart(graph2, {
  type: "line", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
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
        data: [15,16,12,12,13,15,14],
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
      text: "Grammes de Co2 dans l'air cette semaine",
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