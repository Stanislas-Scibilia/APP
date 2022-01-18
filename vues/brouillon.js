var ctx2 = document.getElementById("chart2").getContext('2d');

var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [1,2,3,4,5,6,7,8,9,10],
        datasets: [
            {
                label: 'Données',
                data: [85, 83, 83, 74, 76, 70, 74, 72,72,68],
                backgroundColor: 'transparent',
                borderColor:'rgba(0, 255, 255)',
                borderWidth: 3
            },
        ]
    },
    options: {
        scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
        tooltips:{mode: 'index'},
        legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}},
    },
});