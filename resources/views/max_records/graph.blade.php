<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <h1>グラフ</h1>
        
            <canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
    <script>
    var labels = [
	"2020年6月",
	"2020年7月",
	"2020年8月",
	"2020年9月",
	"2020年10月",
	"2020年11月",
    ];
	var ctx = document.getElementById("myChart");
	var date = @json($date_list);
    var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: date,
			datasets: [
				{
					label: "重量",
					data: {{$log_list}},
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,155)"
				}
				]
				},
				options: {
					title: {
						display: true,
						text: 'MAX記録'
					}
				}
   });
   </script>
        </body>
    </x-app-layout>
</html>