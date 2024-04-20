<div class="main-body">

			<script src="./assets/js/jquery.min(1).js"></script>

			<title>Quản lý gian hàng - Tạp hóa MMO</title>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<h5 class="col-5 col-lg-5 col-xl-5">Gian hàng</h5>
						<div class="col-7 col-lg-7 col-xl-7 text-right" style="text-align: right;">
							<a href="?act=kiosk-add" class="btn rounded-pill btn-primary">Thêm
								mới</a>
						</div>
						<div class="col-12">
							<span>Bạn được tạo tối đa 5 gian hàng.</span>
						</div>
					</div>

					<table class="table table-hover table-responsive">
						<thead class="thead-light">
							<tr>
								<th class="text-center" scope="col">Thao tác</th>
								<th scope="col">Tên gian hàng</th>
								<th scope="col">Loại</th>
								<th class="text-center" scope="col">Trùng</th>
								<th class="text-center" scope="col">Reseller</th>
								<th scope="col" class="text-right">Đơn giá</th>
								<th scope="col" class="text-right">Sàn</th>
								<th scope="col" class="text-right">
									<a data-toggle="tooltip" title=""
										data-original-title="Bấm vào để xem chi tiết tồn kho của từng mặt hàng">
										Kho<i style="font-size:10px; display: inline;"
											class="fa fa-question-circle"></i>
									</a>
								</th>
								<th scope="col">Ngày tạo</th>
								<th scope="col" class="text-right">Trạng thái</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>

					<!-- Paging-->
					<nav aria-label="Page navigation" class="paging">

					</nav>
				</div>
			</div>

			<div class="modal inmodal" id="subKioskProducts" tabindex="-1" role="dialog" aria-hidden="true"
				data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Quản lý mặt hàng/kho</h5><br>

						</div>
						<div class="modal-body">
							<h6>Gian hàng: <span id="kioskNameTitle"></span> </h6>
							<div id="isPrivateDiv" class="form-group form-check">
								<input class="form-check-input" type="checkbox" id="isPrivateKiosk"
									onchange="changePrivateKiosk();">
								<label class="form-check-label" for="isPrivate">
									Sử dụng kho hàng riêng
									<span style="font-size: 12px;" class="text-danger">(Thiết lập này yêu cầu bạn có
										server kho hàng riêng và có API lấy hàng cung cấp cho sàn)</span>
								</label>
							</div>
							<hr>
							<div id="tableSubKiosks">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead class="thead-light">
											<tr>
												<th>Tên mặt hàng</th>
												<th>Giá</th>
												<th>Trạng thái</th>
												<th>Tồn kho</th>
												<th class="text-center text-nowrap">Thao tác</th>
											</tr>
										</thead>
										<tbody id="subKioskModalBody">

										</tbody>
									</table>
								</div>
								<div><input type="hidden" id="actionKioskId"></div>
								<div id="newSubKioskForm" class="row">
									<hr>
									<div class="col-6">
										<input id="newSubName" type="text" placeholder="Tên mặt hàng"
											class="form-control">
									</div>
									<div class="col-6">
										<input id="newSubPrice" type="number" min="0" placeholder="Giá tiền"
											class="form-control">
									</div>
									<div id="softDiv" style="display: none;">
										<div class="col-12">
											<div class="form-group">
												<br><label>Đơn vị tính hạn sử dụng (<i>Thiết lập này sẽ hiển thị đơn vị
														tính
														thời gian sử dụng trên gian hàng của bạn</i>)</label>
												<select id="this_drop_down" onchange="onChangeMe()"
													class="form-control custom-select" required="">
													<option value="day">Theo Ngày</option>
													<option value="month">Theo Tháng</option>
													<option value="year">Theo Năm</option>
													<option value="life_time">Chỉ bán vĩnh viễn</option>
													<option value="day_life_time">Theo Ngày và có tùy chọn vĩnh viễn
													</option>
													<option value="month_life_time">Theo Tháng và có tùy chọn vĩnh viễn
													</option>
													<option value="year_life_time">Theo Năm và có tùy chọn bán vĩnh viễn
													</option>
												</select>
											</div>
										</div>
										<div id="life_time_price" style="display:none; z-index:1;"
											class="col-12 col-lg-6 col-xl-6">
											<div class="form-group">
												<label>Giá bản vĩnh viễn (lifetime)</label>
												<input id="newLifeTimePrice" type="number" min="0" class="form-control">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>
													Đường dẫn tải phần mềm (<i>Chỉ trả về cho khách hàng sau khi đơn
														hàng thành công</i>)
												</label>
												<input id="newSoftUrl" type="text" class="form-control">
											</div>
										</div>
									</div>
									<div style="text-align: left;" class="col-12">
										<br><button onclick="actionSubKiosk(&#39;NEW&#39;)" type="button"
											class="btn btn-primary">Thêm</button>
									</div>
								</div>
							</div>
							<div style="display:none;" id="editSubKioskForm">
								<h5>Chỉnh sửa mặt hàng</h5>
								<div class="row">


									<div class="col-5">
										<input id="editSubName" type="text" placeholder="Tên mặt hàng"
											class="form-control">
									</div>
									<div class="col-4">
										<input id="editSubPrice" type="number" min="0" placeholder="Giá tiền"
											class="form-control">
									</div>
									<div class="col-3">
										<select id="editStatus" class="form-control">
											<option value="A">Bật</option>
											<option value="B">Tắt</option>
										</select>
									</div>
									<div id="softDivEdit" style="display: none;">
										<div class="col-12">
											<div class="form-group">
												<br><label>Đơn vị tính hạn sử dụng (<i>Thiết lập này sẽ hiển thị đơn vị
														tính
														thời gian sử dụng trên gian hàng của bạn</i>)</label>
												<select id="this_drop_down_edit" onchange="onChangeMe2()"
													class="form-control custom-select" required="">
													<option value="day">Theo Ngày</option>
													<option value="month">Theo Tháng</option>
													<option value="year">Theo Năm</option>
													<option value="life_time">Chỉ bán vĩnh viễn</option>
													<option value="day_life_time">Theo Ngày và có tùy chọn vĩnh viễn
													</option>
													<option value="month_life_time">Theo Tháng và có tùy chọn vĩnh viễn
													</option>
													<option value="year_life_time">Theo Năm và có tùy chọn bán vĩnh viễn
													</option>
												</select>
											</div>
										</div>
										<div id="life_time_price_edit" style="display:none; z-index:1;"
											class="col-12 col-lg-6 col-xl-6">
											<div class="form-group">
												<label>Giá bản vĩnh viễn (lifetime)</label>
												<input id="newLifeTimePrice_edit" type="number" min="0"
													class="form-control">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>
													Đường dẫn tải phần mềm (<i>Chỉ trả về cho khách hàng sau khi đơn
														hàng thành công</i>)
												</label>
												<input id="newSoftUrl_edit" type="text" class="form-control">
											</div>
										</div>
									</div>

									<div style="text-align: left;" class="col-12">
										<br><input type="hidden" id="editId">
										<button id="subKioskActionBtn" onclick="actionSubKiosk(&#39;EDIT&#39;)"
											type="button" class="btn btn-primary">Submit</button>
										<button onclick="cancelEdit();" type="button"
											class="btn btn-secondary">Hủy</button>

									</div>

								</div>
							</div>
							<div id="serviceNote" class="row">
								<div class="col-12">
									<br>*Lưu ý:
									<li><span class="text-success">Với những dịch vụ có giá cố định (như giá/ lượt like,
											share, comment...) bạn phải để giá công khai.</span></li>
									<li><span class="text-success">Nhập vào giá bằng <b style="color:black;">0</b> đối
											với dịch vụ có giá thỏa thuận (như code tool, đồ họa...), khi khách đặt hàng
											sẽ phải nhập vào giá 2 bên đã thỏa thuận.</span></li>
								</div>
							</div>

							<p style="padding-top: 10px;" class="text-danger" id="myActionRs"></p>
						</div>

						<div class="modal-footer">

							<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						</div>
					</div>
				</div>
				<script>
					var formAction = '<a data-id="{id}" onclick="editSubKiosk(this);" href="#" data-toggle="tooltip" title="Chỉnh sửa">' +
						'	<i class="fa fa-edit fa-2x"></i>' +
						'</a>' + '<a href="/product.html/{id}" data-toggle="tooltip"' +
						'	title="Thêm sản phẩm">' +
						'	<i class="fas fa-plus-circle fa-2x"></i>' +
						'</a>' +

						'<a onclick="deleteProduct(this)" data-id="{id}" href="#" data-toggle="tooltip" title="Xóa sản phẩm chưa bán">' +
						'	<i class="fas fa-trash-alt fa-2x"></i>' +
						'</a>';
					var formActionService = '<a data-id="{id}" onclick="editSubKiosk(this);" href="#" data-toggle="tooltip" title="Chỉnh sửa">' +
						'	<i class="fa fa-edit fa-2x"></i>';
					function addCommas(nStr) {
						nStr += '';
						x = nStr.split('.');
						x1 = x[0];
						x2 = x.length > 1 ? '.' + x[1] : '';
						var rgx = /(\d+)(\d{3})/;
						while (rgx.test(x1)) {
							x1 = x1.replace(rgx, '$1' + '.' + '$2');
						}
						return x1 + x2;
					}
					function actionSubKiosk(action) {
						$("#myActionRs").text("");
						var kiosk_id = $("#actionKioskId").val();
						var subKioskId = "";
						var subName = "";
						var subPrice = "";
						var subStatus = "";
						var softUnit = "";
						var softUrl = "";
						var softLifeTimePrice = 0;
						if (action == "EDIT") {
							subKioskId = $("#editId").val();
							subName = $("#editSubName").val();
							subPrice = $("#editSubPrice").val();
							subStatus = $("#editStatus").val();
							softUnit = $("#this_drop_down_edit").val();
							softUrl = $("#newSoftUrl_edit").val();
							softLifeTimePrice = $("#newLifeTimePrice_edit").val();
						} else {
							subName = $("#newSubName").val();
							subPrice = $("#newSubPrice").val();
							subStatus = "A";
							softUnit = $("#this_drop_down").val();
							softUrl = $("#newSoftUrl").val();
							softLifeTimePrice = $("#newLifeTimePrice").val();
						}
						if (subName == "" || subPrice < 0) {
							$("#myActionRs").text("Giá trị nhập vào không đúng!");
						} else {
							$.ajax({
								url: "/sub-kiosk-action.html",
								type: "POST",
								data: { id: kiosk_id, subKioskId: subKioskId, subName: subName, subPrice: subPrice, subStatus: subStatus, softUnit: softUnit, softUrl: softUrl, softLifeTimePrice: softLifeTimePrice, action: action },
								async: false,
								success: function (response) {
									if (response.success) {
										cancelEdit();
										validateSubKioskProducts(kiosk_id);
										$("#myActionRs").text(response.message);
									} else {
										$("#myActionRs").text(response.message);
									}
								}
							});
						}



					}
					var allSubTmp = null;
					var isSoftKiosk = false;
					function validateSubKioskProducts(kiosk_id) {
						$.ajax({
							url: "/get-sub-kiosks.html",
							type: "POST",
							data: { id: kiosk_id },
							async: false,
							success: function (response) {
								if (response.success) {
									$("#myActionRs").text("");
									$("#kioskNameTitle").html(response.title);
									cancelEdit();
									var subKiosks = response.subKiosks;
									allSubTmp = subKiosks;
									var html = "";

									for (var i = 0; i < subKiosks.length; i++) {

										var myAction = ""; formAction.replaceAll("{id}", subKiosks[i].id);
										if (response.isService) {
											myAction = formActionService.replaceAll("{id}", subKiosks[i].id);
											$("#serviceNote").show();
											$("#isPrivateDiv").hide();

										}
										else {
											myAction = formAction.replaceAll("{id}", subKiosks[i].id);
											$("#serviceNote").hide();
											$("#isPrivateDiv").show();
										}
										var myHtml = '<tr data-id="' + subKiosks[i].id + '">' +
											'<td>' + subKiosks[i].name + '</td>' +
											'<td>' + addCommas(subKiosks[i].price) + '</td>' +
											'<td><a class="{status_class}">' + subKiosks[i].status + '</a></td>' +
											'<td>' + subKiosks[i].totalProduct + '</td>' +
											'<td class="text-center text-nowrap">' + myAction + '</td>' +
											'</tr>';
										if (subKiosks[i].status == "A") { myHtml = myHtml.replace("{status_class}", "badge badge-success"); }
										else { myHtml = myHtml.replaceAll("{status_class}", "badge badge-danger"); }
										html = html + myHtml;
									}
									$("#subKioskModalBody").html(html);
									$("#actionKioskId").val(kiosk_id);
									$("#myActionRs").text(response.message);
									$("#isPrivateKiosk").prop("checked", response.isPrivate);
									if (response.isSoft) {
										isSoftKiosk = true;
										$("#softDiv").show();
										$("#softDivEdit").show();

									} else {
										isSoftKiosk = false;
										$("#softDiv").hide();
										$("#softDivEdit").hide();
									}


								}
							}
						});


					}
					function onChangeMe() {
						var value = $('#this_drop_down').val();
						if (value == "day_life_time" || value == "month_life_time" || value == "year_life_time") {
							$('#life_time_price').show();
						} else {
							$('#life_time_price').hide();
						}
					}
					function onChangeMe2() {
						var value = $('#this_drop_down_edit').val();
						if (value == "day_life_time" || value == "month_life_time" || value == "year_life_time") {
							$('#life_time_price_edit').show();
						} else {
							$('#life_time_price_edit').hide();
						}
					}
					function changePrivateKiosk() {
						var checked = $("#isPrivateKiosk").is(":checked");
						var kiosk_id = $("#actionKioskId").val();
						$.ajax({
							url: "/api/kiosk/change-private",
							type: "POST",
							data: { isPrivate: checked, kiosk_id: kiosk_id },
							async: false,
							success: function (response) {

							}
						});
					}
					function editSubKiosk(elm) {
						$("#myActionRs").text("");
						$("#tableSubKiosks").hide();
						$("#editSubKioskForm").show();
						var myTr = $("tr[data-id=" + elm.getAttribute("data-id") + "]");
						var count = 0;
						var editId = elm.getAttribute("data-id");
						$("#editId").val(editId);


						for (var i = 0; i < allSubTmp.length; i++) {
							if (allSubTmp[i].id == editId) {
								$("#editSubName").val(allSubTmp[i].name);
								$("#editSubPrice").val(allSubTmp[i].price);
								var subStatus = allSubTmp[i].status;
								$("#editStatus").val(subStatus).change();
								if (isSoftKiosk) {
									$("#softDivEdit").show();
									$("#this_drop_down_edit").val(allSubTmp[i].softUnit).change();
									$("#newSoftUrl_edit").val(allSubTmp[i].softUrl);
									$("#newLifeTimePrice_edit").val(allSubTmp[i].softLifeTimePrice);

								} else {
									$("#softDivEdit").hide();
								}

								break;
							}
						}



					}
					function cancelEdit() {
						$("#tableSubKiosks").show();
						$("#editSubKioskForm").hide();
						$("#newSubName").val("");
						$("#newSubPrice").val("");
						$("#myActionRs").text("");
					}
					function deleteProduct(elm) {
						let id = $(elm).attr('data-id');
						var kiosk_id = $("#actionKioskId").val();
						var title = 'Xóa các sản phẩm chưa bán của mặt hàng này?';
						swal({
							title: title,
							type: "warning",
							showCancelButton: true,
							confirmButtonColor: "#DD6B55",
							confirmButtonText: "Đồng ý",
							cancelButtonText: "Hủy",
							closeOnConfirm: true,
							closeOnCancel: false
						},
							function (isConfirm) {
								if (isConfirm) {
									$.ajax({
										url: "/api/product/delete/" + id,
										type: "POST",
										data: { id: id },
										success: function (response) {
											if (response.hasError) {
												$("#myActionRs").text("Xóa thất bại!");
											} else {
												cancelEdit();
												validateSubKioskProducts(kiosk_id);
												$("#myActionRs").text("Xóa thành công!");

											}
										}
									})
								} else {
									swal("Hủy", "", "error");
								}
							});
					}
				</script>
			</div>


			<script type="text/javascript">
				$(() => {
					document.getElementById("kiosk").className += " active";
				})
			</script>


		</div>