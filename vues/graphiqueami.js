const graph3 = document.getElementById("graphami").getContext("2d");

Chart.defaults.global.defaultFontSize = 18;

let massPopChart3 = new Chart(graph3, {
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
        data: [85, 73, 53, 84, 76, 60, 88, 80, 72, 60],
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
      text: "Moyenne des battements cardiques/min lors de la semaine X de Damien V",
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