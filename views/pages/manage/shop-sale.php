<div class="main-body">
			
	<title>Bạn có tin nhắn mới - Tạp Hóa MMO</title>
	<div class="row row-cols-2 row-cols-lg-4 gutters-sm">
		<!-- Unique Visitors -->
		<div class="col mb-3">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title text-secondary font-size-sm">Tổng số đơn hàng</h6>
					<div class="d-flex align-items-center mb-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart mr-2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
						<h3 class="mb-0 mr-2">0</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- /Unique Visitors -->

		<!-- New Orders -->
		<div class="col mb-3">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title text-secondary font-size-sm">Tổng doanh số</h6>
					<div class="d-flex align-items-center mb-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag mr-2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
						<h3 class="mb-0 mr-2">0</h3>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row gutters-sm">
		<!-- Monthly Sales -->
		<div class="col-xl-12 mb-3">
			<div class="card h-100">
				<div class="card-header py-1">
					<i class="material-icons mr-2">show_chart</i>
					<h6>30 ngày gần nhất</h6>
				</div>
				<div class="card-body" style="height: 350px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
					<canvas id="line-chart-basic" style="display: block; height: 318px; width: 892px;" width="1338" height="477" class="chartjs-render-monitor"></canvas>
				</div>
			</div>
		</div>
		<!-- /Monthly Sales -->
	</div>

	<div id="result">


<div style="color: #1a202c; font-size: 15px;" class="divider-text">KINH DOANH THÁNG 04/2024</div>

<div class="row text-center">
	<div class="col-sm-5 mb-1"></div>
	<div class="col-sm-2 mb-1">
		<input onchange="loadSaleMonth()" id="month" type="text" value="04/2024" class="form-control monthpicker flatpickr-input" placeholder="Chọn tháng" readonly="readonly" fdprocessedid="43kwu">
	</div>
</div>
<div class="row row-cols-2 row-cols-lg-4 gutters-sm">
	<!-- Unique Visitors -->
	<div class="col mb-3">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title text-secondary font-size-sm">Số đơn hàng</h6>
				<div class="d-flex align-items-center mb-1">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart mr-2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
					<h3 class="mb-0 mr-2">0</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- /Unique Visitors -->
		
		<!-- New Orders -->
		<div class="col mb-3">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title text-secondary font-size-sm">Doanh số</h6>
					<div class="d-flex align-items-center mb-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag mr-2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
						<h3 class="mb-0 mr-2">0</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- New Orders -->
		<div class="col mb-3">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title text-secondary font-size-sm">Sàn tạm giữ</h6>
					<div class="d-flex align-items-center mb-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag mr-2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
						<h3 class="mb-0 mr-2">0</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- /New Orders -->
	</div>
	<script type="text/javascript">
		$(() => {
		// Month Picker
	      flatpickr('.monthpicker', {
	        plugins: [
	          new monthSelectPlugin({
	            shorthand: true,
	            dateFormat: 'm/Y',
	            altFormat: 'm/Y',
	          })
	        ]
	      })
      })
	</script>
</div>
	
	<script src="./assets/js/Chart.min.js"></script>
	<script type="text/javascript">
		$(() => {
			document.getElementById("dashboard").className += " active";

			loadSaleMonth();
			
			// Data chart
			var chart = []; 
			monthNames = []
			data = []
			for (let i = 0; i < chart.length; i++) {
				let day = chart[i].day;
				let mm = day.substring(5,7);
				let dd = day.substring(8,10);;
				
				monthNames.push(dd + '/' + mm);
				data.push(chart[i].amount);
			}
			// Chart options
			const options = {
				maintainAspectRatio: false,
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				elements: {
					line: {
						borderWidth: 1,
						fill: false
					}
				}
			}

			/***************** BASIC *****************/
			new Chart('line-chart-basic', {
				type: 'line',
				data: {
					labels: monthNames,
					datasets: [{
						label: 'Sale',
						backgroundColor: Chart.helpers.color(blue).alpha(0.5).rgbString(),
						borderColor: blue,
						data: data
					}]
				},
				options: options
			})
		})

		function loadSaleMonth(){
			let month = $('#month').val();
			$.ajax({
				url: "shop-sale-month.html",
				type: "GET",
				data : { month: month },
				success: function (response) {
					$("#result").html(response);
				}
			})
		}

	</script>

		</div>