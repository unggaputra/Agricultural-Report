$.ajax({
    'url': '/getDataPie',
    'type': 'GET',
    'dataType': 'json',
    'success': function (log) {
        // Total Capacity
        let total = 0;
        log.forEach(val => {
            // console.log(val.Jumlah_Pupuk+" ");
            total += parseInt(val.Jumlah_Pupuk);
        });
        // console.log(total);
        // console.log(object);
        $(".capacity").html(total + " Pupuk");
        // End Of Total Capacity

        // Pie Chart

        ctx = document.getElementById('chartEmail').getContext("2d");

        myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [log[0].Pupuk,
                log[1].Pupuk,
                log[2].Pupuk,
                log[3].Pupuk],
                datasets: [{
                    label: "Emails",
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    backgroundColor: [
                        '#e3e3e3',
                        '#4acccd',
                        '#fcc468',
                        '#46b352'
                    ],
                    borderWidth: 0,
                    data: [342, 480, 530, 120]
                }]
            },

            options: {
                legend: {
                    display: true,
                    position:'bottom'
                },

                pieceLabel: {
                    render: 'percentage',
                    fontColor: ['white'],
                    precision: 2
                },

                tooltips: {
                    enabled: true
                },

                scales: {
                    yAxes: [{

                        ticks: {
                            display: false
                        },
                        gridLines: {
                            drawBorder: false,
                            zeroLineColor: "transparent",
                            color: 'rgba(255,255,255,0.05)'
                        }

                    }],

                    xAxes: [{
                        barPercentage: 1.6,
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(255,255,255,0.1)',
                            zeroLineColor: "transparent"
                        },
                        ticks: {
                            display: false,
                        }
                    }]
                },
            }
        });
    }
})
