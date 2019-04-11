<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Estadisticas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <link rel="stylesheet" href="bootstrad.css">
  <link rel="stylesheet" href=>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-2 uno" id="uno">

                    <script>
Highcharts.chart('container2', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Temperatura'
    },
    subtitle: {
        text: 'Source: IES.Ciudad.Jardin'
    },
    xAxis: {
        categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    },
    yAxis: {
        title: {
            text: 'Temperatura (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Sensor Temperatura',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, ]
});
</script>
        </div>
        <div class="col-md-2 dos" id="dos">
          hola
        </div>
        <div class="col-md-2 tres" id="tres">
          hola
        </div>

      </div>
    </div>
  </div>




        <div class="row">
            <div class="col-sm-6 bg-success">
               <div id="container" style="min-width: 300px; height:
                    300px;margin: 0 auto">
                    <script>
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Temperatura'
    },
    subtitle: {
        text: 'Source: IES.Ciudad.Jardin'
    },
    xAxis: {
        categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    },
    yAxis: {
        title: {
            text: 'Temperatura (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Sensor Temperatura',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, ]
});
</script>
                </div >
            </div>
            <div class="col-sm-6 bg-warning">
                <div id="container2" style="min-width: 300px; height:
                    300px;margin: 0 auto">
                    <script>
Highcharts.chart('container2', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Temperatura'
    },
    subtitle: {
        text: 'Source: IES.Ciudad.Jardin'
    },
    xAxis: {
        categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    },
    yAxis: {
        title: {
            text: 'Temperatura (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Sensor Temperatura',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, ]
});
</script>
                </div>
            </div>
        </div>

    </body>
</html>