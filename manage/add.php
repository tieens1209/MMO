<div class="main-body">
			
	<title>Thêm mã giảm giá - Tạp hóa MMO</title>
	<div class="card">
		 <div class="card-header">
            <h5>Thêm mã giảm giá</h5>
        </div>
		<div class="card-body">
		 	
            <form id="profileForm" action="/promotion/add.html" method="post"><input type="hidden" name="_csrf" value="5aa97a19-8d3d-467c-a4c2-3af09f24e664">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Mã giảm giá</label>
                            <input type="text" maxlength="50" class="form-control text-uppercase" id="code" name="code" value="" fdprocessedid="mypqc">
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Gian hàng</label>
                            <select class="form-control custom-select" id="kiosk.id" name="kiosk.id" fdprocessedid="7gy14">
                                <option value="">Tất cả</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" class="form-control" id="description" name="description" value="" fdprocessedid="2mhr85">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Ngày bắt đầu</label>
                                <input type="hidden" class="form-control datepicker flatpickr-input" id="startDateHtml" name="startDateHtml" value=""><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" fdprocessedid="kol97f">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Ngày kết thúc</label>
                            <input type="hidden" class="form-control datepicker flatpickr-input" id="endDateHtml" name="endDateHtml" value=""><input class="form-control datepicker form-control input" placeholder="" tabindex="0" type="text" fdprocessedid="ym97g8">
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Loại giảm giá</label>
                            <select onchange="changeOption(this);" class="form-control custom-select" required="" id="type" name="type" fdprocessedid="65ing">
                                <option value="PERCENT">Giảm theo phần trăm</option>
                                <option value="AMOUNT">Giảm theo số tiền</option>
                                <option value="ORDER">Giảm theo tổng đơn hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3" id="percent">
                        <div class="form-group">
                            <label>Tỷ lệ giảm</label>
                            <input type="number" class="form-control" id="percent" name="percent" value="0" fdprocessedid="g0hby">
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3" id="amount">
                        <div class="form-group">
                            <label class="text-danger">Số tiền tối đa</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="0" fdprocessedid="qseeej">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-6" id="order" style="display: none;">
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="form-group">
                                <label>Giá trị đơn hàng</label>
                                <input type="number" class="form-control" id="order_amount">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="form-group">
                                <label>Tỷ lệ giảm</label>
                                <input type="number" class="form-control" id="order_percent">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="form-group">
                                <label> </label>
                                <button onclick="addConfigure();" type="button" class="btn btn-primary" style="margin-top: 27px; background-color: #21bf73;">+</button>
                            </div>
                        </div>
                        <input type="hidden" id="configures" class="form-control" name="configures" value="">

                        <div style="position: inherit; margin-top: 90px;" id="configure-label">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-6" id="totalForUsing">
                        <div class="form-group">
                            <label>Số lần sử dụng</label>
                            <input type="number" class="form-control" id="totalForUsing" name="totalForUsing" value="0" fdprocessedid="i5wwhi">
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <a href="/promotion.html" class="btn btn-secondary">Quay lại</a>
                        <button type="submit" class="btn btn-primary" style="background-color: #21bf73;" fdprocessedid="q7zkb9">Tạo mới</button>
                    </div>
                </div>
            </form>
		</div>
	</div>
    
    <script type="text/javascript">
        function changeOption(elm){
            let value = $(elm).val();
            if (value == 'PERCENT') {
                $('#percent').show();
                $('#amount').show();
                $('#order').hide();
            }
            
            if (value == 'AMOUNT') {
                $('#percent').hide();
                $('#order').hide();
                $('#amount').show();
            }

            if (value == 'ORDER') {
                $('#percent').hide();
                $('#amount').hide();
                $('#order').show();
            }
        }

        function addConfigure(){
            let order_amount = $('#order_amount').val();
            let order_percent = $('#order_percent').val();
            if (order_amount && order_percent) {
                $('#configure-label').append(
                    '<div class="col-12 col-lg-12 col-xl-12">'+
                        '<div class="form-group">' +
                            '<label style="min-width: 150px;">' + order_amount.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' - ' + order_percent +'%</label>'+
                            '<button data="'+ order_amount + '-' + order_percent +'" onclick="deleteConfigure(this);" type="button" class="btn btn-primary" style="background-color: #21bf73;">-</button>' +
                        '</div>' +
                    '</div>'
                );
                $('#configures').val($('#configures').val() + "|" + order_amount+"-"+order_percent);
            }
        }
        
        function deleteConfigure(elm){
            var data = $(elm).attr('data');
            $(elm).parent().remove();
            var confObject = $('#configures');
            var configures = confObject.val();
            configures = configures.replace("|"+data, "");
            confObject.val(configures);
        }
        
        $(document).ready(function (){
			document.getElementById("promotion").className += " active";
		
	 		flatpickr('.datepicker', {
			    altInput: true,
			    altFormat: "d/m/Y",
			    allowInput: true
	      	});
        })
    </script>

		</div>