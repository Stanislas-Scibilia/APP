const graph1 = document.getElementById("graphprophile").getContext("2d");

Chart.defaults.global.defaultFontSize = 18;

let massPopChart = new Chart(graph1, {
  type: "bar", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
  data: {
    labels: [
      "Semaine1",
      "Semaine2",
      "Semaine3",
      "Semaine4",
      "Semaine5",
      "Semaine6",
      "Semaine7",
      "Semaine8",
      "Semaine9",
      "Semaine10",
    ],
    datasets: [
      {
        label: "Battements cardiaques/min ",
        data: [85, 83, 83, 74, 76, 70, 74, 72,72,68],
        // backgroundColor: "blue",
        backgroundColor: [
          "red",
          "orange",
          "salmon",
          "blue",
          "yellow",
          "purple",
          "green",
          "tomato",
          "brown",
          "pink"
        ],
        hoverBorderWidth: 3,
      },
    ],
  },
  options: {
    title: {
      display: true,
      text: "Moyenne de vos battements cardiques/min lors de la semaine X",
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