@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
		
        <title>Thống kê</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<h1>Thống kê</h1>
	<div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row" style="height: 123px">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-server"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>BÁC SĨ</</p>
                                                <h3>{{ $doctor }}</h3>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-success text-center">
	                                            <i class="ti-wallet"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>CHUYÊN KHOA</p>
	                                            <h3>{{ $specialist }}</h3>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-danger text-center">
	                                            <i class="ti-pulse"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>BỆNH NHÂN</p>
	                                            <h3>{{ $customer }}</h3>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-5">
	                                        <div class="icon-big icon-info text-center">
	                                            <i class="ti-twitter-alt"></i>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <div class="numbers">
	                                            <p>TIN TỨC</p>
	                                            <h3>{{ $news }}</h3>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					<br>
					<form action="" method="GET">							
								Từ ngày <input type="date" name="date_from">							
								Đến ngày <input type="date" name="date_to">							
							<button>Đi</button>
						</form>
					<br>		
			<canvas id="myChart" width="100" height="50"></canvas>
<body>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var data = <?php echo ($data) ?>;
		var labels = [];
		var result = [];
		for(var i in data){
			labels.push(data[i].full_name);
			result.push(data[i].times);
		}
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: labels, 
				datasets: [{
					label: 'số giờ làm việc',
					data: result, //lấy số giờ làm của từng bác sĩ vào đây
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 99, 132, 0.2)'
									],
            		borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(255, 99, 132, 1)'
								],
            		borderWidth: 1
        			}]
    			},
    	options: {
        	scales: {
            	y: {
                	beginAtZero: true
            	}
        		}
    	}
	});
</script>
</html>
@endsection