$.ajax({
    'url':'/getDataLine',
    'type':'GET',
    'dataType':'json',
    'success':function (log) {
        console.log(log);
        var speedCanvas = document.getElementById("speedChart");

        var dataFirst = {
          data: [log[0].Jumlah, log[1].Jumlah, log[2].Jumlah],
          fill: false,
          borderColor: '#fbc658',
          backgroundColor: 'transparent',
          pointBorderColor: '#fbc658',
          pointRadius: 4,
          pointHoverRadius: 4,
          pointBorderWidth: 8,
        };

        // var dataSecond = {
        //   data: [0, 5, 10, 12, 20, 27, 30, 34, 42, 45, 55, 63],
        //   fill: false,
        //   borderColor: '#51CACF',
        //   backgroundColor: 'transparent',
        //   pointBorderColor: '#51CACF',
        //   pointRadius: 4,
        //   pointHoverRadius: 4,
        //   pointBorderWidth: 8
        // };

        var speedData = {

          labels: [(log[0].end_date).split('-')[0],(log[1].end_date).split('-')[0],(log[2].end_date).split('-')[0]],
        //   labels: [
        //     log.forEach(val => {
        //         (val.end_date).split('-')[0]
        //     }),
        //   ],
          datasets: [dataFirst]
        };

        var chartOptions = {
          legend: {
            display: false,
            position: 'top'
          },
          scales: {
            yAxes: [{
                display: true,
                ticks: {
                    suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                    // OR //
                    beginAtZero: true,   // minimum value will be 0.
                    max:3000
                }
            }]
        }
        };

        var lineChart = new Chart(speedCanvas, {
          type: 'line',
          hover: true,
          data: speedData,
          options: chartOptions
        });
    }
})
