var ctx = document.getElementById("attendanceChart").getContext('2d');

var mychart = new Chart(ctx,{
    type: 'bar',
    data:{
        labels:["Creche","Nursery 1","Nursery 2","K.G 1","K.G 2","P.1",
            "P.2","P.3","P.4","P.5","P.6","J.H.S 1","J.H.S 2","J.H.S 3"],
        datasets:[{
            label:'Pupils',
            backgroundColor:"#45c490",
            data:[12,13,14,15,16,17,18,19,20,21,22,23,24,25]
        }]
    },
    options: {
        tooltips: {
            displayColors: true,
            callbacks:{
                mode: 'x',
            },
        },
        scales: {
            xAxes: [{
                stacked: true,
                gridLines: {
                    display: false,
                }
            }],
            yAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero: true,
                },
                type: 'linear',
            }]
        },
        responsive: true,
        maintainAspectRatio: false,
        legend: { position: 'bottom' },
    }

});