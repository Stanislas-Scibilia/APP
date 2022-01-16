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
        borderColor:'rgba(255,99,132)',
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