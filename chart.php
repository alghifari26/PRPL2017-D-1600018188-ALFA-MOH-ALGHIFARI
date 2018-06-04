<html>
    <head>
        <title>LAPORAN</title>
        <script src="Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 40%;
                margin: 10px auto;
            }
			body{
				background-color:white;
				background-position:center;
				background-size:cover;
			}
			ul{
			}
			li{
				list-style-type:none;
				float:left;
			}
			li a{
				color:white;
				font-family:arial;
				display:block;
				color:white;
				text-align:center;
				padding:14px 16px;
				text-decoration:none;
			}
			li a:hover{
				background:rgba(0,204,204, 0.8);
				color:white;
			}
        </style>
    </head>
    <body>
	<ul>
    <li><a href="chart.php ?>"> CHART INFO COSTUMER</a></li>
	</ul>
        <div class="container">
            <canvas id="myChart" width="100" height="90"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["REGULER", "VIP"],
                    datasets: [{
                            label: '#of Votes',
                            data: [1, 1, 1,1  ],
                            backgroundColor: [
                                'rgba(0, 400, 101, 1)',
                                'rgba(75, 192, 192, 1)',
                            ],
                            borderColor: [
                                'rgba(0, 400, 101, 1)',
                                'rgba(75, 192, 192, 1)',
                            ],
                            borderWidth: 0
                        }]
                },
                options: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    
                }
            });
        </script>
    </body>
</html>