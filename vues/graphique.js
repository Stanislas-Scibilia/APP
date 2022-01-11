const graph = document.getElementById("graph").getContext("2d");

let myChart = new Chart(graph, {
    type:"bar",
    data:{
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
              label: "Battements cardiaques/minute",
              data:[87,81,83,76,73,71,61,59,63,60],
            },
        ],
    },    
});
