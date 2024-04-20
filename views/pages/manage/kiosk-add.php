<div class="main-body">

    <title>Thêm gian hàng - Tạp hóa MMO</title>

    <style type="text/css">
        .box-2 {
            padding: 0.5em;
            width: calc(100%/2 - 1em);
        }

        img {
            max-width: 100%;
        }
    </style>

    <div class="card">
        <div class="card-header">
            <h5>Thêm gian hàng</h5>
        </div>

        <div class="card-body">
            <form id="formAddKiosk" action="/kiosk-add.html" enctype="multipart/form-data" method="post"><input type="hidden" name="_csrf" value="09e81db3-51f8-465d-be17-e9bd042f3b2b">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Tên gian hàng</label>
                            <input minlength="10" maxlength="100" type="text" class="form-control" required="" id="name" name="name" value="" fdprocessedid="qd21xa">
                            <label id="err_name" class="text-danger"></label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Loại hình kinh doanh</label>
                            <select onchange="changeLoaiHinh(this)" id="categoryType" class="form-control custom-select" required="" fdprocessedid="ximm4">
                                <option value="PRODUCT">Bán sản phẩm</option>
                                <option value="SERVICE">Dịch vụ</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Loại gian hàng</label>
                            <select id="categorySelect" onchange="onChangeCategory(this)" class="form-control custom-select" required="" fdprocessedid="zllmv">
                                <option value="">Chọn ...</option>
                                <option value="cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3">Email</option>
                                <option value="2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3">Phần mềm</option>
                                <option value="d8150a22-ca37-4740-8c15-af07124d0dc3">Tài khoản</option>
                                <option value="1bb467da-87e5-406b-b2b2-a28628379a47">Khác</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label>Loại sản phẩm - Chiết khấu cho sàn</label>
                            <select id="subCategories" onchange="onChangeSubCategory(this)" required="" class="form-control custom-select" name="subCategory.id" fdprocessedid="4eade">
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label>Đánh giá hoàn tiền(%) - "0":tắt | <span class="text-danger" style="font-size:13px"> Khuyến khích khách hàng đánh giá bằng cách hoàn lại một khoản tiền (từ 0.1% - tối đa 5%)</span></label>
                            <input type="number" step="0.1" max="5" min="0" class="form-control" required="" id="ratingPercent" name="ratingPercent" value="0.0" fdprocessedid="5kn1hk">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="isForSale" checked="checked" name="isForSale" value="true"><input type="hidden" name="_isForSale" value="on">
                            <label class="form-check-label" for="isForSale">
                                Bạn có muốn cho reseller bán hàng không?
                            </label>
                        </div>
                    </div>

                    <div id="checkSoft" class="col-12 col-lg-12 col-xl-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked="checked" name="isDuplicateCheckbox" value="true"><input type="hidden" name="_isDuplicateCheckbox" value="on">
                            <label class="form-check-label" for="flexCheckDefault">
                                Sản phẩm không trùng lặp
                                <i>(Cam kết sản phẩm chỉ được bán ra 1 lần và duy nhất trên hệ thống)</i>
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="isPrivate" name="isPrivate" value="true"><input type="hidden" name="_isPrivate" value="on">
                            <label class="form-check-label" for="isPrivate">
                                Sử dụng kho hàng riêng
                                <i>(Hàng sẽ không tải trực tiếp lên TaphoamMMO mà sử dụng API lấy hàng từ kho của bạn)</i>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label>Mô tả ngắn*</label>
                            <input maxlength="150" type="text" class="form-control" required="" id="shortDescription" name="shortDescription" value="" fdprocessedid="k7ya29">
                            <label id="err_shortDescription" class="text-danger"></label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label>Mô tả chi tiết*</label>
                            <textarea name="area2" style="width: 100%;">
	                            
                            </textarea>
                        </div>
                    </div>

                    <!--- Doan nay posst back forrm -->
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label>Ảnh gian hàng <i>(Kích thước lớn hơn 320px.) </i></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" accept="image/*">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <label id="err_customFile" class="text-danger"></label>
                            </div>
                            <div class="box-2">
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger" id="msgRespone"></p>
                    <div class="form-group col-12">
                        <a href="/shop.html" type="submit" class="btn btn-secondary">Quay lại</a>
                        <button type="button" onclick="doValidator()" class="btn btn-primary" style="background-color: #21bf73;" fdprocessedid="75gudj">Tạo mới</button>
                    </div>

                    <div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
                        <div class="products-view__list products-list" data-layout="list" data-with-features="false" data-mobile-grid-columns="2">
                            <div class="products-list__body">
                                <div class="products-list__item">
                                    <div class="product-card product-card--hidden-actions">
                                        <div style="padding:15px;">
                                            <span class="text-success"><span class="text-danger">Vui lòng đọc kỹ trước khi tạo mới:</span>
                                                <ul>
                                                    <li>Vì bên mình là sàn thương mại điện tử, nên nếu sản phẩm của bạn không bán trực tiếp trên site được thì sẽ không được duyệt.
                                                        Ví dụ các sản phẩm không thể số hóa thành text file, phần mềm không có API để get hay active key (hãy liên hệ để coder 2 bên có thể map với nhau nhé)....
                                                    </li>
                                                    <li>Không đăng thông tin liên hệ nào khác lên gian hàng (kể cả hình ảnh), không nhắn tin cách thức liên hệ ngoài site. Mong các bạn hiểu, bên mình là sàn,
                                                        chi phí rất nhiều cho đội ngũ kỹ thuật, hỗ trợ, marketing, server, nên hi vọng chúng ta có thể hợp tác đôi bên cùng có lợi, về lâu về dài bên mình cũng cần có chi phí duy trì,
                                                        phát triển nền tảng... nên rất cần đối tác hiểu, và có thể gắn bó lâu dài với site
                                                    </li>
                                                    <li>Nếu có yêu cầu gì thêm cho phần bán hàng, các bạn cứ nhắn tin cho support, bên mình sẵn sàng hỗ trợ sao cho các bạn bán được thuận tiện nhất.
                                                    </li>
                                                    <li>Gian hàng mới có thể sẽ bán chậm hơn 1 chút, mong các bạn thông cảm, đừng nóng vội, chăm chút cho sản phẩm và khách hàng hơn, từ kết quả bán hàng sẽ quyết định thứ hạn hiển thị trên site.
                                                    </li>
                                                    <li>Các quy định khác về gian hàng các bạn đọc thêm ở đây: <a target="_blank" href="https:taphoammo.net/quy-dinh.html"><u>Quy định về gian hàng và các mặt hàng bị cấm</u></a>.
                                                    </li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal inmodal" id="subKioskProducts" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Quản lý mặt hàng/kho</h5><br>

                </div>
                <div class="modal-body">
                    <h6>Gian hàng: <span id="kioskNameTitle"></span> </h6>
                    <div id="isPrivateDiv" class="form-group form-check">
                        <input class="form-check-input" type="checkbox" id="isPrivateKiosk" onchange="changePrivateKiosk();">
                        <label class="form-check-label" for="isPrivate">
                            Sử dụng kho hàng riêng
                            <span style="font-size: 12px;" class="text-danger">(Thiết lập này yêu cầu bạn có server kho hàng riêng và có API lấy hàng cung cấp cho sàn)</span>
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
                                <input id="newSubName" type="text" placeholder="Tên mặt hàng" class="form-control">
                            </div>
                            <div class="col-6">
                                <input id="newSubPrice" type="number" min="0" placeholder="Giá tiền" class="form-control">
                            </div>
                            <div id="softDiv" style="display: none;">
                                <div class="col-12">
                                    <div class="form-group">
                                        <br><label>Đơn vị tính hạn sử dụng (<i>Thiết lập này sẽ hiển thị đơn vị tính
                                                thời gian sử dụng trên gian hàng của bạn</i>)</label>
                                        <select id="this_drop_down" onchange="onChangeMe()" class="form-control custom-select" required="">
                                            <option value="day">Theo Ngày</option>
                                            <option value="month">Theo Tháng</option>
                                            <option value="year">Theo Năm</option>
                                            <option value="life_time">Chỉ bán vĩnh viễn</option>
                                            <option value="day_life_time">Theo Ngày và có tùy chọn vĩnh viễn</option>
                                            <option value="month_life_time">Theo Tháng và có tùy chọn vĩnh viễn</option>
                                            <option value="year_life_time">Theo Năm và có tùy chọn bán vĩnh viễn</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="life_time_price" style="display:none; z-index:1;" class="col-12 col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        <label>Giá bản vĩnh viễn (lifetime)</label>
                                        <input id="newLifeTimePrice" type="number" min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>
                                            Đường dẫn tải phần mềm (<i>Chỉ trả về cho khách hàng sau khi đơn hàng thành công</i>)
                                        </label>
                                        <input id="newSoftUrl" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: left;" class="col-12">
                                <br><button onclick="actionSubKiosk('NEW')" type="button" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </div>
                    <div style="display:none;" id="editSubKioskForm">
                        <h5>Chỉnh sửa mặt hàng</h5>
                        <div class="row">


                            <div class="col-5">
                                <input id="editSubName" type="text" placeholder="Tên mặt hàng" class="form-control">
                            </div>
                            <div class="col-4">
                                <input id="editSubPrice" type="number" min="0" placeholder="Giá tiền" class="form-control">
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
                                        <br><label>Đơn vị tính hạn sử dụng (<i>Thiết lập này sẽ hiển thị đơn vị tính
                                                thời gian sử dụng trên gian hàng của bạn</i>)</label>
                                        <select id="this_drop_down_edit" onchange="onChangeMe2()" class="form-control custom-select" required="">
                                            <option value="day">Theo Ngày</option>
                                            <option value="month">Theo Tháng</option>
                                            <option value="year">Theo Năm</option>
                                            <option value="life_time">Chỉ bán vĩnh viễn</option>
                                            <option value="day_life_time">Theo Ngày và có tùy chọn vĩnh viễn</option>
                                            <option value="month_life_time">Theo Tháng và có tùy chọn vĩnh viễn</option>
                                            <option value="year_life_time">Theo Năm và có tùy chọn bán vĩnh viễn</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="life_time_price_edit" style="display:none; z-index:1;" class="col-12 col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        <label>Giá bản vĩnh viễn (lifetime)</label>
                                        <input id="newLifeTimePrice_edit" type="number" min="0" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>
                                            Đường dẫn tải phần mềm (<i>Chỉ trả về cho khách hàng sau khi đơn hàng thành công</i>)
                                        </label>
                                        <input id="newSoftUrl_edit" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: left;" class="col-12">
                                <br><input type="hidden" id="editId">
                                <button id="subKioskActionBtn" onclick="actionSubKiosk('EDIT')" type="button" class="btn btn-primary">Submit</button>
                                <button onclick="cancelEdit();" type="button" class="btn btn-secondary">Hủy</button>

                            </div>

                        </div>
                    </div>
                    <div id="serviceNote" class="row">
                        <div class="col-12">
                            <br>*Lưu ý:
                            <li><span class="text-success">Với những dịch vụ có giá cố định (như giá/ lượt like, share, comment...) bạn phải để giá công khai.</span></li>
                            <li><span class="text-success">Nhập vào giá bằng <b style="color:black;">0</b> đối với dịch vụ có giá thỏa thuận (như code tool, đồ họa...), khi khách đặt hàng sẽ phải nhập vào giá 2 bên đã thỏa thuận.</span></li>
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
                        data: {
                            id: kiosk_id,
                            subKioskId: subKioskId,
                            subName: subName,
                            subPrice: subPrice,
                            subStatus: subStatus,
                            softUnit: softUnit,
                            softUrl: softUrl,
                            softLifeTimePrice: softLifeTimePrice,
                            action: action
                        },
                        async: false,
                        success: function(response) {
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
                    data: {
                        id: kiosk_id
                    },
                    async: false,
                    success: function(response) {
                        if (response.success) {
                            $("#myActionRs").text("");
                            $("#kioskNameTitle").html(response.title);
                            cancelEdit();
                            var subKiosks = response.subKiosks;
                            allSubTmp = subKiosks;
                            var html = "";

                            for (var i = 0; i < subKiosks.length; i++) {

                                var myAction = "";
                                formAction.replaceAll("{id}", subKiosks[i].id);
                                if (response.isService) {
                                    myAction = formActionService.replaceAll("{id}", subKiosks[i].id);
                                    $("#serviceNote").show();
                                    $("#isPrivateDiv").hide();

                                } else {
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
                                if (subKiosks[i].status == "A") {
                                    myHtml = myHtml.replace("{status_class}", "badge badge-success");
                                } else {
                                    myHtml = myHtml.replaceAll("{status_class}", "badge badge-danger");
                                }
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
                    data: {
                        isPrivate: checked,
                        kiosk_id: kiosk_id
                    },
                    async: false,
                    success: function(response) {

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
                    function(isConfirm) {
                        if (isConfirm) {
                            $.ajax({
                                url: "/api/product/delete/" + id,
                                type: "POST",
                                data: {
                                    id: id
                                },
                                success: function(response) {
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


    <script src="assets/js/bbcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js"></script>

    <script type="text/javascript">
        $(() => {
            document.getElementById("kiosk").className += " active";
        })

        function doValidator() {
            $("#msgRespone").html("");

            $('#err_name').html('');
            $('#err_shortDescription').html('');
            showLoading();
            $('#editor').val(instance.val());
            $.ajax({
                url: "/kiosk-add/error.json",
                type: "POST",
                data: $("#formAddKiosk").serialize(),
                async: false,
                success: function(response) {
                    if (response.hasError) {
                        hideLoading();
                        var len = $.map(response.lstErr, function(n, i) {
                            return i;
                        }).length;
                        for (var i = 0; i < len; i++) {
                            $('#err_' + response.lstErr[i].propertyName).html(
                                response.lstErr[i].message);
                        }
                        $('#err_customFile').html('');
                        if ($('#customFile').val() == '') {
                            $('#err_customFile').html('Vui lòng chọn ảnh gian hàng');
                        }
                    } else {
                        $('#err_customFile').html('');
                        if ($('#customFile').val() == '') {
                            hideLoading();
                            $('#err_customFile').html('Vui lòng chọn ảnh gian hàng');
                        }
                        cropper.getCroppedCanvas().toBlob((blob) => {
                            const form = $('#formAddKiosk')[0]; // You need to use standard javascript object here
                            let formData = new FormData(form);
                            formData.append('file', new File([blob], `${$('#name').val()}.png`));
                            $.ajax({
                                type: "POST",
                                enctype: 'multipart/form-data',
                                url: "/kiosk-add.html",
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache: false,
                                async: false,
                                timeout: 600000,
                                success: function(data) {
                                    hideLoading();
                                    resetForm();
                                    var newKioskId = data.message;
                                    $('#msgRespone').html("Tạo mới thành công!");
                                    openSubModal(newKioskId);

                                },
                            });
                        });
                    }
                }
            })
        }

        function openSubModal(kioskId) {
            swal({
                    title: "Tạo mới thành công",
                    text: "Vui lòng tạo thêm sản phẩm để bắt đầu kinh doanh!",
                    type: "success",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Đồng ý",
                    closeOnConfirm: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        validateSubKioskProducts(kioskId);
                        $('#subKioskProducts').modal('show');
                    }
                });
        }

        function resetForm() {
            $('#name').val('');
            $('#shortDescription').val('');
            $('#description').val('');
            $('#customFile').val('');
            $('.box-2').hide();
            $('#categorySelect').val('');
            onChangeCategory()
            cropper = '';
        }

        var textarea = document.getElementById('editor');
        sceditor.create(textarea, {
            format: 'bbcode',
            height: "100%",
            width: "100%",
            toolbar: 'bold,italic,underline|left,center,right|size,color|image|link,unlink|removeformat|source',
        });

        var instance = sceditor.instance(textarea);

        const filters = [{
            "id": "1c9f0f31-3642-4174-81eb-67d131bf2a22",
            "category": {
                "id": "13829aa7-d19c-4073-9a43-e1235301ccd7",
                "name": "Blockchain",
                "image": "\/images\/categories\/block2.png",
                "description": "D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o, NFT, coinlist... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 blockchain kh\u00E1c",
                "alias": "dich-vu-blockchain",
                "type": "BLOCKCHAIN",
                "status": "A",
                "createdDate": "2022-03-20T15:15:50.000+07:00",
                "level": 7,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a616c6e7-6014-4fac-9ada-a2164dfa352b",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 1
        }, {
            "id": "3dd4c490-8fd5-4a9c-8030-6587a8368323",
            "category": {
                "id": "518e256c-0b0f-4974-be2d-3df558625c3f",
                "name": "D\u1ECBch v\u1EE5 ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft-service.png",
                "description": "D\u1ECBch v\u1EE5 code tool MMO, \u0111\u1ED3 h\u1ECDa, video... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 li\u00EAn quan",
                "alias": "dich-vu-phan-mem",
                "type": "SOFTWARE SERVICE",
                "status": "A",
                "createdDate": "2022-03-20T15:12:16.000+07:00",
                "level": 6,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": null,
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 code tool",
            "adminPercent": 6,
            "image": null,
            "description": null,
            "content": null,
            "level": 1
        }, {
            "id": "46e67305-ed25-4edf-938c-cf0924a3b089",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i kho\u1EA3n FB",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/facebook3.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n facebook \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 1
        }, {
            "id": "89bb7573-0285-4083-8484-3eab3495f2b5",
            "category": {
                "id": "1bb467da-87e5-406b-b2b2-a28628379a47",
                "name": "Kh\u00E1c",
                "image": "\/images\/categories\/more.png",
                "description": "C\u00E1c s\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c",
                "alias": "danh-muc-khac",
                "type": "OTHER",
                "status": "A",
                "createdDate": "2021-03-23T15:42:28.000+07:00",
                "level": 4,
                "content": "<b>S\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nNgo\u00E0i c\u00E1c s\u1EA3n ph\u1EA9m \u0111\u00E3 c\u00F3 danh m\u1EE5c ri\u00EAng, c\u00E1c b\u1EA1n c\u00F3 nhu c\u1EA7u mua b\u00E1n s\u1EA3n ph\u1EA9m c\u00F3 th\u1EC3 s\u1ED1 h\u00F3a \u0111\u01B0\u1EE3c, th\u00EC h\u00E3y \u0111\u0103ng b\u00E1n n\u00F3 trong m\u1EE5c s\u1EA3n ph\u1EA9m kh\u00E1c nh\u00E9. Vi\u1EC7c mua b\u00E1n an to\u00E0n, thu\u1EADn ti\u1EC7n v\u00E0 ho\u00E0n to\u00E0n t\u1EF1 \u0111\u1ED9ng 24\/7\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n s\u1EA3n ph\u1EA9m s\u1ED1 ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "fcb6d96b-fc58-43a5-bf34-7b58d4762c60",
                "product": true,
                "service": false
            },
            "name": "The\u0309 Na\u0323p",
            "adminPercent": 1,
            "image": null,
            "description": null,
            "content": null,
            "level": 1
        }, {
            "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "Gmail",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/gmail2.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng gmail \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": "Gmail l\u00E0 m\u1ED9t nguy\u00EAn li\u1EC7u th\u00F4 r\u1EA5t quan tr\u1ECDng trong MMO, g\u1EA7n nh\u01B0 t\u1EA5t c\u1EA3 c\u00E1c d\u1ECBch v\u1EE5 c\u1EE7a Google \u0111\u1EC1u s\u1EED d\u1EE5ng \u0111\u1EBFn Gmail. \nR\u1EA5t nhi\u1EC1u ph\u01B0\u01A1ng ph\u00E1p ki\u1EBFm ti\u1EC1n t\u1EEB Google nh\u01B0 youtube, adsense, offer android... v\u00E0 g\u1EA7n nh\u01B0 t\u1EA5t c\u1EA3 ch\u00FAng \u0111\u1EC1u c\u1EA7n \u0111\u1EBFn t\u00E0i kho\u1EA3n google.\nB\u1EA1n c\u00F3 th\u1EC3 d\u1EC5 d\u00E0ng \u0111\u0103ng k\u00FD 1 - 5 t\u00E0i kho\u1EA3n m\u00E0 kh\u00F4ng g\u1EB7p kh\u00F3 kh\u0103n g\u00EC c\u1EA3, nh\u01B0ng n\u00F3 qu\u00E1 \u00EDt so v\u1EDBi quy m\u00F4 th\u1EF1c t\u1EBF trong ki\u1EBFm ti\u1EC1n online, c\u00F3 th\u1EC3 l\u00EAn \u0111\u1EBFn v\u00E0i ngh\u00ECn gmail 1 ng\u00E0y.\nT\u0103ng view youtube, t\u0103ng t\u01B0\u01A1ng t\u00E1c k\u00EAnh, \u0111\u0103ng k\u00FD t\u00E0i kho\u1EA3n \u1EDF c\u00E1c trang.. t\u1EA5t c\u1EA3 \u0111\u1EC1u c\u1EA7n \u0111\u1EBFn 1 l\u01B0\u1EE3ng r\u1EA5t l\u1EDBn gmail.\n<br\/> Taphoammo.net: Ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n g\u1EA7n nh\u01B0 t\u1EA5t c\u1EA3 c\u00E1c lo\u1EA1i gmail ph\u1EE5c v\u1EE5 cho nhu c\u1EA7u ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n. N\u1EBFu b\u1EA1n c\u00F3 ngu\u1ED3n h\u00E0ng, \u0111\u1EEBng ng\u1EA1i \u0111\u0103ng b\u00E1n tr\u00EAn trang ch\u00FAng t\u00F4i, gi\u00E1 c\u1EA3 c\u1EA1nh tranh ch\u1EC9 l\u00E0\nm\u1ED9t ph\u1EA7n trong chi\u1EBFn l\u01B0\u1EE3c kinh doanh, kh\u00E1ch h\u00E0ng h\u1ECD c\u1EA7n r\u1EA5t nhi\u1EC1u lo\u1EA1i gmail, t\u00F9y theo c\u00E1ch reg m\u00E0 m\u1ED7i lo\u1EA1i gmail s\u1EBD ch\u1EA1y dc cho c\u00E1c tut kh\u00E1c nhau, ngo\u00E0i ra ch\u0103m s\u00F3c kh\u00E1ch h\u00E0ng t\u1ED1t c\u0169ng l\u00E0 1 y\u1EBFu t\u1ED1 gi\u00FAp doanh s\u1ED1 b\u00E1n h\u00E0ng c\u1EE7a b\u1EA1n cao h\u01A1n.\n<br\/> N\u1EBFu b\u1EA1n ng\u01B0\u1EDDi mua, s\u1EF1 c\u1EA1nh tranh tr\u1EF1c ti\u1EBFp c\u1EE7a c\u00E1c shop s\u1EBD mang l\u1EA1i r\u1EA5t nhi\u1EC1u l\u1EE3i th\u1EBF cho c\u00E1c b\u1EA1n, c\u1ED9ng v\u1EDBi s\u1EF1 an to\u00E0n khi mua tr\u00EAn trang, h\u00E3y l\u00E0 m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng th\u00F4ng th\u00E1i nh\u00E9.<br\/>\n<b>Mua b\u00E1n Gmail ( MMO - Ki\u1EBFm ti\u1EC1n online ) - T\u1EA1p H\u00F3a MMO<\/b><br\/> \n<b>Chuy\u00EAn kinh doanh : Mua b\u00E1n gmail new, Mua b\u00E1n gmail c\u1ED5, Mua b\u00E1n gmail nu\u00F4i 6 th\u00E1ng, Mua b\u00E1n gmail nu\u00F4i 3 th\u00E1ng, Mua b\u00E1n gmail tr\u00E2u, Mua b\u00E1n gmail, Mua b\u00E1n gmail 2014, Mua b\u00E1n gmail 2015, Mua b\u00E1n gmail 2016, Mua b\u00E1n gmail US.. V\u00E0 c\u00E1c lo\u1EA1i gmail kh\u00E1c <\/b><br\/> ",
            "level": 1
        }, {
            "id": "d6812855-a2b1-44dd-844d-35f7f027a61d",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m FB",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m FB \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 1
        }, {
            "id": "035de332-8e9f-434d-b2e6-767fe10c7136",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m Google",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/google.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m google \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 2
        }, {
            "id": "286bbc36-6217-4520-b933-f282e35dc2be",
            "category": {
                "id": "13829aa7-d19c-4073-9a43-e1235301ccd7",
                "name": "Blockchain",
                "image": "\/images\/categories\/block2.png",
                "description": "D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o, NFT, coinlist... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 blockchain kh\u00E1c",
                "alias": "dich-vu-blockchain",
                "type": "BLOCKCHAIN",
                "status": "A",
                "createdDate": "2022-03-20T15:15:50.000+07:00",
                "level": 7,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a616c6e7-6014-4fac-9ada-a2164dfa352b",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 NFT",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 2
        }, {
            "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "HotMail",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/hotmail.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng hotmail \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 2
        }, {
            "id": "6d31b966-fdd8-43b6-a400-763a42897d77",
            "category": {
                "id": "1bb467da-87e5-406b-b2b2-a28628379a47",
                "name": "Kh\u00E1c",
                "image": "\/images\/categories\/more.png",
                "description": "C\u00E1c s\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c",
                "alias": "danh-muc-khac",
                "type": "OTHER",
                "status": "A",
                "createdDate": "2021-03-23T15:42:28.000+07:00",
                "level": 4,
                "content": "<b>S\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nNgo\u00E0i c\u00E1c s\u1EA3n ph\u1EA9m \u0111\u00E3 c\u00F3 danh m\u1EE5c ri\u00EAng, c\u00E1c b\u1EA1n c\u00F3 nhu c\u1EA7u mua b\u00E1n s\u1EA3n ph\u1EA9m c\u00F3 th\u1EC3 s\u1ED1 h\u00F3a \u0111\u01B0\u1EE3c, th\u00EC h\u00E3y \u0111\u0103ng b\u00E1n n\u00F3 trong m\u1EE5c s\u1EA3n ph\u1EA9m kh\u00E1c nh\u00E9. Vi\u1EC7c mua b\u00E1n an to\u00E0n, thu\u1EADn ti\u1EC7n v\u00E0 ho\u00E0n to\u00E0n t\u1EF1 \u0111\u1ED9ng 24\/7\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n s\u1EA3n ph\u1EA9m s\u1ED1 ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "fcb6d96b-fc58-43a5-bf34-7b58d4762c60",
                "product": true,
                "service": false
            },
            "name": "VPS",
            "adminPercent": 10,
            "image": "\/img\/subcategory\/vps.png",
            "description": "R\u1EA5t nhi\u1EC1u VPS ch\u00EDnh h\u00E3ng, gi\u00E1 r\u1EBB \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 2
        }, {
            "id": "8e0e7c78-c4ae-4997-b08a-b9b91c0e0b4c",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n BM",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n BM \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 2
        }, {
            "id": "92acdd02-7a2e-4d7f-b58c-4ef3f23b7ba0",
            "category": {
                "id": "518e256c-0b0f-4974-be2d-3df558625c3f",
                "name": "D\u1ECBch v\u1EE5 ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft-service.png",
                "description": "D\u1ECBch v\u1EE5 code tool MMO, \u0111\u1ED3 h\u1ECDa, video... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 li\u00EAn quan",
                "alias": "dich-vu-phan-mem",
                "type": "SOFTWARE SERVICE",
                "status": "A",
                "createdDate": "2022-03-20T15:12:16.000+07:00",
                "level": 6,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": null,
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 \u0111\u1ED3 h\u1ECDa",
            "adminPercent": 4,
            "image": null,
            "description": null,
            "content": null,
            "level": 2
        }, {
            "id": "0b9040e3-4378-40d3-bfdf-6b37cb29b0d0",
            "category": {
                "id": "518e256c-0b0f-4974-be2d-3df558625c3f",
                "name": "D\u1ECBch v\u1EE5 ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft-service.png",
                "description": "D\u1ECBch v\u1EE5 code tool MMO, \u0111\u1ED3 h\u1ECDa, video... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 li\u00EAn quan",
                "alias": "dich-vu-phan-mem",
                "type": "SOFTWARE SERVICE",
                "status": "A",
                "createdDate": "2022-03-20T15:12:16.000+07:00",
                "level": 6,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": null,
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 video",
            "adminPercent": 4,
            "image": null,
            "description": null,
            "content": null,
            "level": 3
        }, {
            "id": "4346ad13-1cc4-4859-899c-74d894c19254",
            "category": {
                "id": "13829aa7-d19c-4073-9a43-e1235301ccd7",
                "name": "Blockchain",
                "image": "\/images\/categories\/block2.png",
                "description": "D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o, NFT, coinlist... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 blockchain kh\u00E1c",
                "alias": "dich-vu-blockchain",
                "type": "BLOCKCHAIN",
                "status": "A",
                "createdDate": "2022-03-20T15:15:50.000+07:00",
                "level": 7,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a616c6e7-6014-4fac-9ada-a2164dfa352b",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Coinlist",
            "adminPercent": 4,
            "image": null,
            "description": null,
            "content": null,
            "level": 3
        }, {
            "id": "4a14cc2f-e4f6-4e32-81cc-2bc89a449f0c",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m Youtube",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/youtube.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m youtube \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 3
        }, {
            "id": "9ce819df-761b-4af0-a02e-c24896df011d",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "OutlookMail",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/outlookmail.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng outlook mail \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 3
        }, {
            "id": "a7708c42-788c-49f4-afab-2ba1a038df3f",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Zalo",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/zalo.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng  kho\u1EA3n zalo  \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 3
        }, {
            "id": "66491c52-ffc6-4683-8c74-d3dc40e9daa4",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "RuMail",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/rumail.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng rumail \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 4
        }, {
            "id": "a7708c42-788c-49f4-afab-2ba1a038df3r",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Twitter",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/twitter3.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n twitter \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 4
        }, {
            "id": "ab195111-65d0-4244-9318-98b89c81c976",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m Ti\u1EC1n \u1EA2o",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m ti\u1EC1n \u1EA3o \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 4
        }, {
            "id": "140c9788-2944-43c2-8ff5-fafc13601f9d",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m PTC",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m PTC \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 5
        }, {
            "id": "86545aac-d52d-46b9-b706-632b8a0dcf89",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "DomainMail",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/domain-mail.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng domain mail \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 5
        }, {
            "id": "b7708c42-788c-49f4-afab-2ba1a038df3r",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Telegram",
            "adminPercent": 4,
            "image": "\/img\/subcategory\/telegram.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n telegram \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 5
        }, {
            "id": "4accce6a-60e4-4dbc-900c-79fb8e16df22",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m Capcha",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m Capcha \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 6
        }, {
            "id": "5bcfd44d-6728-4c18-bcf9-1dbed436d975",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "YahooMail",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/yahoo-mail.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng yahoo mail \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 6
        }, {
            "id": "f7708c42-788c-49f4-afab-2ba1a038df3r",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Instagram",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/instagram.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n instagram \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 6
        }, {
            "id": "5c6816f4-afd3-470e-a32f-95364143276a",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "ProtonMail",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 7
        }, {
            "id": "8c42h770-788c-49f4-afab-2b038df3ra1a",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Shopee",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/shopee.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n Shopee \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 7
        }, {
            "id": "cc938237-d4b0-4592-853f-fd27d2aea7c2",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Discord",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 7
        }, {
            "id": "f9a88905-c90c-4cdf-90ec-5762f4c1014d",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m Offer",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m Offer \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 7
        }, {
            "id": "59ee6915-9e6d-4a8c-96d8-c9fb076e1919",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "Ta\u0300i khoa\u0309n TikTok",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 8
        }, {
            "id": "c39d37d7-412f-4444-99b7-f054bd3ac8da",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m PTU",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m PTU \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 8
        }, {
            "id": "617c653a-c8de-4908-b581-e72e445b68fd",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "Key Di\u1EC7t Virus",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/key-vi-rut.jpg",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng di\u1EC7t virus \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 9
        }, {
            "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e7",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Facebook",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 9
        }, {
            "id": "15133e00-96d8-467a-a74f-5dc68a9ec1b2",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Tiktok",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 10
        }, {
            "id": "94506c68-777d-4f8b-b619-b2636c2b1e11",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Google",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 10
        }, {
            "id": "ea560f5e-4a8b-45c1-a5d1-994c114a9d6f",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Telegram",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 11
        }, {
            "id": "6d668673-2197-4756-ae16-864cb32f018f",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Shopee",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 12
        }, {
            "id": "68e10286-6afd-4c7e-8225-ec740c4bb47e",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Discord",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 13
        }, {
            "id": "86004292-8308-4863-a88e-0a2b437d07a4",
            "category": {
                "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
                "name": "Email",
                "image": "\/images\/categories\/mail.png",
                "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
                "alias": "email",
                "type": "EMAIL",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 1,
                "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
                "product": true,
                "service": false
            },
            "name": "Lo\u1EA1i Mail Kh\u00E1c",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/mail-khac.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng email \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 20
        }, {
            "id": "a8c3c6a9-1891-4625-9002-aabc0a8e6f1c",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Twitter",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 20
        }, {
            "id": "dc1784c9-0e9e-4781-bd71-e13a3809daec",
            "category": {
                "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
                "name": "Ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft2.png",
                "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
                "alias": "phan-mem",
                "type": "SOFT",
                "status": "A",
                "createdDate": "2021-03-26T12:19:31.000+07:00",
                "level": 2,
                "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
                "product": true,
                "service": false
            },
            "name": "Ph\u1EA7n M\u1EC1m Kh\u00E1c",
            "adminPercent": 6,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng ph\u1EA7n m\u1EC1m \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 20
        }, {
            "id": "d70e7471-cd5b-4b3c-bb30-85a93b4c4021",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Youtube",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 21
        }, {
            "id": "c1d589f2-a6fb-4b95-a553-5c97564abc37",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Zalo",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 22
        }, {
            "id": "c437f229-1818-4280-9320-6fabad255e51",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 Instagram",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 23
        }, {
            "id": "505487e7-d4a7-44a4-a3d3-5467bf0f21ab",
            "category": {
                "id": "13829aa7-d19c-4073-9a43-e1235301ccd7",
                "name": "Blockchain",
                "image": "\/images\/categories\/block2.png",
                "description": "D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o, NFT, coinlist... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 blockchain kh\u00E1c",
                "alias": "dich-vu-blockchain",
                "type": "BLOCKCHAIN",
                "status": "A",
                "createdDate": "2022-03-20T15:15:50.000+07:00",
                "level": 7,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a616c6e7-6014-4fac-9ada-a2164dfa352b",
                "product": false,
                "service": true
            },
            "name": "Blockchain kh\u00E1c",
            "adminPercent": 4,
            "image": null,
            "description": null,
            "content": null,
            "level": 999
        }, {
            "id": "58a557fb-944c-4ed8-be73-4c7748655b0e",
            "category": {
                "id": "d3bd0d76-3a00-4a8f-b7e9-4edf7e2f0baa",
                "name": "D\u1ECBch v\u1EE5 kh\u00E1c",
                "image": "\/images\/categories\/more-service.png",
                "description": "C\u00E1c d\u1ECBch v\u1EE5 MMO ph\u1ED5 bi\u1EBFn kh\u00E1c hi\u1EC7n nay",
                "alias": "dich-vu-khac",
                "type": "OTHER SERVICES",
                "status": "A",
                "createdDate": "2022-03-20T15:16:07.000+07:00",
                "level": 8,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "eb1fe018-4f4c-470f-b2d9-82024fa7873a",
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 kh\u00E1c",
            "adminPercent": 4,
            "image": null,
            "description": null,
            "content": null,
            "level": 999
        }, {
            "id": "6d31b928-fdd8-43b6-a400-783a42897d13",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "Key Window",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/windows.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng key windows \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 999
        }, {
            "id": "6d31b966-fdd8-43b6-a400-763a42897d79",
            "category": {
                "id": "1bb467da-87e5-406b-b2b2-a28628379a47",
                "name": "Kh\u00E1c",
                "image": "\/images\/categories\/more.png",
                "description": "C\u00E1c s\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c",
                "alias": "danh-muc-khac",
                "type": "OTHER",
                "status": "A",
                "createdDate": "2021-03-23T15:42:28.000+07:00",
                "level": 4,
                "content": "<b>S\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nNgo\u00E0i c\u00E1c s\u1EA3n ph\u1EA9m \u0111\u00E3 c\u00F3 danh m\u1EE5c ri\u00EAng, c\u00E1c b\u1EA1n c\u00F3 nhu c\u1EA7u mua b\u00E1n s\u1EA3n ph\u1EA9m c\u00F3 th\u1EC3 s\u1ED1 h\u00F3a \u0111\u01B0\u1EE3c, th\u00EC h\u00E3y \u0111\u0103ng b\u00E1n n\u00F3 trong m\u1EE5c s\u1EA3n ph\u1EA9m kh\u00E1c nh\u00E9. Vi\u1EC7c mua b\u00E1n an to\u00E0n, thu\u1EADn ti\u1EC7n v\u00E0 ho\u00E0n to\u00E0n t\u1EF1 \u0111\u1ED9ng 24\/7\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n s\u1EA3n ph\u1EA9m s\u1ED1 ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "fcb6d96b-fc58-43a5-bf34-7b58d4762c60",
                "product": true,
                "service": false
            },
            "name": "Kh\u00E1c",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng s\u1EA3n ph\u1EA9m s\u1ED1 \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 999
        }, {
            "id": "88221bad-4d4a-4dab-9d33-2597d5ce0230",
            "category": {
                "id": "518e256c-0b0f-4974-be2d-3df558625c3f",
                "name": "D\u1ECBch v\u1EE5 ph\u1EA7n m\u1EC1m",
                "image": "\/images\/categories\/soft-service.png",
                "description": "D\u1ECBch v\u1EE5 code tool MMO, \u0111\u1ED3 h\u1ECDa, video... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 li\u00EAn quan",
                "alias": "dich-vu-phan-mem",
                "type": "SOFTWARE SERVICE",
                "status": "A",
                "createdDate": "2022-03-20T15:12:16.000+07:00",
                "level": 6,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": null,
                "product": false,
                "service": true
            },
            "name": "D\u1ECBch v\u1EE5 tool kh\u00E1c",
            "adminPercent": 6,
            "image": null,
            "description": null,
            "content": null,
            "level": 999
        }, {
            "id": "f6ac2535-d293-4eed-a44d-bc95cad10629",
            "category": {
                "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
                "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
                "image": "\/images\/categories\/boost2.png",
                "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
                "alias": "dich-vu-tuong-tac",
                "type": "BOOST",
                "status": "A",
                "createdDate": "2021-07-03T16:48:01.000+07:00",
                "level": 5,
                "content": "",
                "parentType": "SERVICE",
                "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
                "product": false,
                "service": true
            },
            "name": "T\u01B0\u01A1ng t\u00E1c kh\u00E1c",
            "adminPercent": 3,
            "image": null,
            "description": null,
            "content": null,
            "level": 999
        }, {
            "id": "h7708c42-788c-49f4-afab-2ba1a038df3r",
            "category": {
                "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
                "name": "T\u00E0i kho\u1EA3n",
                "image": "\/images\/categories\/account.png",
                "description": "Fb, BM, key window, kaspersky....",
                "alias": "tai-khoan",
                "type": "ACCOUNT",
                "status": "A",
                "createdDate": "2021-03-23T15:43:42.000+07:00",
                "level": 3,
                "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
                "parentType": "PRODUCT",
                "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
                "product": true,
                "service": false
            },
            "name": "T\u00E0i Kho\u1EA3n Kh\u00E1c",
            "adminPercent": 3,
            "image": "\/img\/subcategory\/tai-khoan-khac.png",
            "description": "R\u1EA5t nhi\u1EC1u gian h\u00E0ng t\u00E0i kho\u1EA3n \u0111\u1EC3 b\u1EA1n l\u1EF1a ch\u1ECDn t\u1EEB trang T\u1EA1p h\u00F3a MMO",
            "content": null,
            "level": 1000
        }];
        const categories = [{
            "id": "cfb23f2f-0440-4523-9b8c-1ac7c1ca41e3",
            "name": "Email",
            "image": "\/images\/categories\/mail.png",
            "description": "Gmail, yahoo mail, hot mail... v\u00E0 nhi\u1EC1u h\u01A1n th\u1EBF n\u1EEFa",
            "alias": "email",
            "type": "EMAIL",
            "status": "A",
            "createdDate": "2021-07-03T16:48:01.000+07:00",
            "level": 1,
            "content": "<b>Mua b\u00E1n Email - T\u1EA1p h\u00F3a MMO<\/b><br\/>\nT\u1EA7m quan tr\u1ECDng c\u1EE7a email \u0111\u1ED1i v\u1EDBi MMO (ki\u1EBFm ti\u1EC1n online) \u0111\u00E3 \u0111\u01B0\u1EE3c c\u00F4ng nh\u1EADn trong bao nhi\u00EAu n\u0103m, l\u00E0 kh\u1EDFi ngu\u1ED3n c\u1EE7a m\u1ED9t ng\u01B0\u1EDDi d\u00F9ng, g\u1EA7n nh\u01B0 l\u00E0 s\u1EA3n ph\u1EA9m th\u00F4 kh\u00F4ng th\u1EC3 thi\u1EBFu \u0111\u1EC3 \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng \u1EA3o. <br\/>\nT\u1EA1i sao ph\u1EA3i mua email: C\u00E1c d\u1ECBch v\u1EE5 cung c\u1EA5p email \u0111\u1EC1u gi\u1EDBi h\u1EA1n cho b\u1EA1n 1 l\u01B0\u1EE3ng t\u00E0i kho\u1EA3n nh\u1EA5t \u0111\u1ECBnh, nh\u01B0ng \u0111\u1ED1i v\u1EDBi MMO, m\u1ED9t v\u00E0i \u0111\u00F3 r\u1EA5t kh\u00F3 \u0111\u1EC3 ki\u1EBFm ra nhi\u1EC1u ti\u1EC1n trong th\u1EDDi \u0111\u1EA1i marketing s\u1ED1, ch\u00FAng ta c\u1EA7n r\u1EA5t nhi\u1EC1u ng\u01B0\u1EDDi d\u00F9ng.<br\/>\nT\u1EA1p h\u00F3a MMO chuy\u00EAn kinh doanh mua, b\u00E1n email ch\u1EA5t l\u01B0\u1EE3ng, t\u1EEB c\u00E1c ch\u1EE7 shop uy t\u00EDn, c\u00F3 th\u1EC3 cung c\u1EA5p cho b\u1EA1n m\u1ED9t l\u01B0\u1EE3ng l\u1EDBn email \u0111\u00E3 \u0111\u01B0\u1EE3c \u0111\u1ECBnh danh <br\/>\nMua b\u00E1n email t\u1EF1 \u0111\u1ED9ng, an to\u00E0n, thu\u1EADn ti\u1EC7n nh\u1EA5t, \u0111\u1EC3 kh\u00F4ng b\u1ECF l\u1EE1 m\u1ED9t chi\u1EBFn d\u1ECBch n\u00E0o.<br\/>\n<b>L\u00E0m sao c\u00F3 th\u1EC3 ki\u1EBFm ti\u1EC1n t\u1EEB danh s\u00E1ch email:<\/b> <br\/>\n-B\u1EA1n c\u00F3 th\u1EC3 \u0111\u0103ng b\u00E1n n\u00F3 ngay tr\u00EAn trang taphoammo.net v\u00E0 thu v\u1EC1 1 kho\u1EA3n ti\u1EC1n t\u1EEB nh\u1EEFng ng\u01B0\u1EDDi d\u00F9ng kh\u00E1c tr\u00EAn trang.<br\/>\n-Ki\u1EBFn ti\u1EC1n b\u1EB1ng email b\u1EB1ng c\u00E1ch th\u1EF1c hi\u1EC7n c\u00E1c chi\u1EBFn d\u1ECBch qu\u1EA3ng c\u00E1o khuy\u1EBFn m\u00E3i, \u0111\u00FAng v\u1EADy v\u1EDBi th\u00EAm 1 email b\u1EA1n c\u00F3 th\u1EC3 nh\u1EADn \u0111\u01B0\u1EE3c 1 khuy\u1EBFn m\u00E3i, nh\u01B0 v\u1EADy l\u00E0 \u01B0u th\u1EBF r\u1ED3i \u0111\u00FAng kh\u00F4ng.<br\/>\n-D\u00F9ng email \u0111\u1EC3 \u0111\u0103ng k\u00FD c\u00E1c t\u00E0i kho\u1EA3n kh\u00E1c c\u00F3 gi\u00E1 tr\u1ECB cao h\u01A1n, b\u1EA1n c\u00F3 th\u1EC3 tham kh\u1EA3o m\u1EE9c gi\u00E1 s\u00E0n tr\u00EAn taphoammo, v\u00E0 \u0111\u01B0a ra quy\u1EBFt \u0111\u1ECBnh h\u1EE3p l\u00FD.<br>\n-Ph\u1EA7n l\u1EDBn gi\u1EDBi MMO \u0111\u1EC1u ki\u1EBFm ti\u1EC1n b\u1EB1ng tut, ngay khi b\u1EA1n t\u00ECm ra 1 tut n\u00E0o \u0111\u00F3 c\u1EA7n \u0111\u1ECBnh danh 1 ng\u01B0\u1EDDi d\u00F9ng, b\u1EA1n c\u00F3 th\u1EC3 ngh\u0129 ngay \u0111\u1EBFn l\u00E0m sao \u0111\u1EC3 c\u00F3 \u0111\u01B0\u1EE3c nhi\u1EC1u email \u0111\u1EC3 \u0111\u1ECBnh danh, ch\u00FAng t\u00F4i s\u1EBD gi\u00FAp b\u1EA1n sau \u0111\u00F3.<br\/>\n-V\u00E0 c\u00F2n h\u00E0ng ngh\u00ECn c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB t\u00E0i kho\u1EA3n email m\u00E0 c\u00E1c cao th\u1EE7 MMO \u0111ang th\u1EF1c hi\u1EC7n h\u00E0ng ng\u00E0y, v\u1EDBi doanh s\u1ED1 c\u1EF1c k\u1EF3 kh\u1EE7ng, h\u00E3y ch\u1ECBu kh\u00F3 tham kh\u1EA3o, h\u1ECDc h\u1ECFi nh\u00E9.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n email ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
            "parentType": "PRODUCT",
            "topUserId": "97244b3a-00db-4d25-b099-4c0770f192c9",
            "product": true,
            "service": false
        }, {
            "id": "2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3",
            "name": "Ph\u1EA7n m\u1EC1m",
            "image": "\/images\/categories\/soft2.png",
            "description": "C\u00E1c ph\u1EA7n m\u1EC1m chuy\u00EAn d\u1EE5ng cho ki\u1EBFm ti\u1EC1n online t\u1EEB nh\u1EEFng coder uy t\u00EDn",
            "alias": "phan-mem",
            "type": "SOFT",
            "status": "A",
            "createdDate": "2021-03-26T12:19:31.000+07:00",
            "level": 2,
            "content": "<b>Ph\u1EA7n m\u1EC1m MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nPh\u1EA7n m\u1EC1m MMO l\u00E0 g\u00EC:<br\/>\nNh\u01B0 ch\u00FAng ta \u0111\u00E3 bi\u1EBFt, MMO (make money online) \u0111a ph\u1EA7n s\u1EBD s\u1EED d\u1EE5ng m\u00E1y t\u00EDnh hay \u0111i\u1EC7n tho\u1EA1i \u0111\u1EC3 b\u1EAFt \u0111\u1EA7u ki\u1EBFm ti\u1EC1n. V\u1EDBi m\u1EE9c doanh thu v\u00E0i tr\u0103m $ \u0111\u1EBFn h\u00E0ng ngh\u00ECn $ m\u1ED7i th\u00E1ng.<br\/>\nTuy nhi\u00EAn, ch\u00FAng ta r\u1EA5t kh\u00F3 \u0111\u1EA1t \u0111\u01B0\u1EE3c con s\u1ED1 \u0111\u00F3 n\u1EBFu kh\u00F4ng c\u00F3 nh\u1EEFng ph\u1EA7n m\u1EC1m h\u1ED7 tr\u1EE3. Ph\u1EA7n m\u1EC1m gi\u00FAp ta qu\u1EA3n l\u00FD, th\u1EF1c hi\u1EC7n r\u1EA5t nhi\u1EC1u thao t\u00E1c ph\u1EE9c t\u1EA1p, t\u1EF1 \u0111\u1ED9ng h\u00F3a thao th\u00E1c...\ng\u1EA7n nh\u01B0 ch\u00FAng ta s\u1EBD ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt ti\u1EC1n n\u1EBFu thi\u1EBFu \u0111i ph\u1EA7n m\u1EC1m \u0111\u00F3. N\u00F3 c\u00F3 th\u1EC3 gi\u00FAp ta r\u00FAt ng\u1EAFn 1 v\u00E0i thao t\u00E1c, ho\u1EB7c t\u1ED1i \u01B0u h\u01A1n l\u00E0 to\u00E0n b\u1ED9 thao t\u00E1c \u0111\u01B0\u1EE3c th\u1EF1c hi\u1EC7n m\u1ED9t c\u00E1ch t\u1EF1 \u0111\u1ED9ng, \u0111\u01B0a n\u0103ng su\u1EA5t l\u00EAn r\u1EA5t cao.\nDo v\u1EADy, n\u1EBFu c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a b\u1EA1n c\u00F3 th\u1EC3 ki\u1EBFm \u0111\u01B0\u1EE3c r\u1EA5t \u00EDt trong 1 ng\u00E0y, h\u00E3y ngh\u0129 \u0111\u1EBFn ph\u1EA7n m\u1EC1m, n\u00F3 c\u00F3 th\u1EC3 nh\u00E2n con s\u1ED1 \u0111\u00F3 l\u00EAn h\u00E0ng ngh\u00ECn l\u1EA7n, v\u00E0 \u0111\u00F3 c\u0169ng l\u00E0 c\u00E1ch ki\u1EBFm ti\u1EC1n c\u1EE7a c\u00E1c \u00F4ng l\u1EDBn MMO, t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i.\n<br\/>-\u1EDE \u0111\u00E2y ch\u00FAng t\u00F4i kinh doanh, mua b\u00E1n r\u1EA5t nhi\u1EC1u lo\u1EA1i ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 nhu c\u1EA7u MMO, ph\u1EA7n m\u1EC1m youtube, ph\u1EA7n m\u1EC1m facebook, ph\u1EA7n m\u1EC1m google, ph\u1EA7n m\u1EC1m gmail, ph\u1EA7n m\u1EC1m PTU, PTC....\n<br\/>Hi v\u1ECDng c\u00E1c b\u1EA1n c\u00F3 th\u1EC3 t\u00ECm th\u1EA5y \u0111\u01B0\u1EE3c m\u1ED9t ph\u1EA7n m\u1EC1m ph\u00F9 h\u1EE3p v\u1EDBi nhu c\u1EA7u ki\u1EBFm ti\u1EC1n online c\u1EE7a b\u1EA1n.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n ph\u1EA7n m\u1EC1m ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
            "parentType": "PRODUCT",
            "topUserId": "809aaa08-8d61-4e11-91f8-6b52a5644b00",
            "product": true,
            "service": false
        }, {
            "id": "d8150a22-ca37-4740-8c15-af07124d0dc3",
            "name": "T\u00E0i kho\u1EA3n",
            "image": "\/images\/categories\/account.png",
            "description": "Fb, BM, key window, kaspersky....",
            "alias": "tai-khoan",
            "type": "ACCOUNT",
            "status": "A",
            "createdDate": "2021-03-23T15:43:42.000+07:00",
            "level": 3,
            "content": "<b>T\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nT\u00E0i kho\u1EA3n l\u00E0 g\u00EC:<br\/>\nT\u00E0i kho\u1EA3n l\u00E0 m\u1ED9t c\u00E1ch \u0111\u1EC3 m\u1ED9t website hay \u1EE9ng d\u1EE5ng \u0111\u1ECBnh danh ng\u01B0\u1EDDi d\u00F9ng c\u1EE7a h\u1ECD, theo c\u00E1ch th\u00F4ng th\u01B0\u1EDDng ch\u00FAng ta s\u1EBD \u0111\u0103ng k\u00FD 1 t\u00E0i kho\u1EA3n v\u00E0 s\u1EED d\u1EE5ng. Tuy nhi\u00EAn \u0111\u1ED1i v\u1EDBi MMO, ch\u00FAng ta th\u01B0\u1EDDng c\u1EA7n r\u1EA5t nhi\u1EC1u t\u00E0i kho\u1EA3n v\u1EDBi m\u1EE5c ti\u00EAu l\u00E0 \n t\u0103ng t\u1ED1i \u0111a l\u1EE3i nhu\u1EADn. V\u1EABn l\u00E0 t\u00EDch ti\u1EC3u th\u00E0nh \u0111\u1EA1i, v\u1EDBi m\u1ED9t t\u00E0i kho\u1EA3n c\u00F3 khi ch\u00FAng ta ch\u1EC9 ki\u1EBFm \u0111\u01B0\u1EE3c v\u00E0i ngh\u00ECn \u0111\u1ED3ng, nh\u01B0ng h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n th\u00EC m\u1ECDi chuy\u1EC7n s\u1EBD kh\u00E1c, con s\u1ED1 kh\u00E1c. V\u1EDBi s\u1EF1 b\u1ED5 tr\u1EE3 c\u1EE7a ph\u1EA7n m\u1EC1m, MMO hi\u1EC7n t\u1EA1i \u0111\u00E3\n  r\u1EA5t d\u1EC5 d\u00E0ng trong vi\u1EC7c s\u1EED d\u1EE5ng t\u00E0i kho\u1EA3n h\u00E0ng lo\u1EA1t, c\u00E1c b\u1EA1n c\u00F3 c\u00E1ch ki\u1EBFm ti\u1EC1n t\u1EEB 1 t\u00E0i kho\u1EA3n, th\u00EC \u0111\u1EEBng b\u1ECF qua taphoammo nh\u00E9, nh\u00E2n r\u1ED9ng l\u00EAn h\u00E0ng ngh\u00ECn t\u00E0i kho\u1EA3n nh\u01B0 v\u1EADy, v\u00E0 s\u1EED d\u1EE5ng ph\u1EA7n m\u1EC1m, b\u1EA1n s\u1EBD c\u1EA3i thi\u1EC7n \u0111\u01B0\u1EE3c doanh s\u1ED1 c\u1EE7a m\u00ECnh \u0111\u1EA5y.\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n t\u00E0i kho\u1EA3n ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
            "parentType": "PRODUCT",
            "topUserId": "24235ae7-95e6-4fb8-aef9-61c897fe3a75",
            "product": true,
            "service": false
        }, {
            "id": "1bb467da-87e5-406b-b2b2-a28628379a47",
            "name": "Kh\u00E1c",
            "image": "\/images\/categories\/more.png",
            "description": "C\u00E1c s\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c",
            "alias": "danh-muc-khac",
            "type": "OTHER",
            "status": "A",
            "createdDate": "2021-03-23T15:42:28.000+07:00",
            "level": 4,
            "content": "<b>S\u1EA3n ph\u1EA9m s\u1ED1 kh\u00E1c ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online) - T\u1EA1p H\u00F3a MMO<\/b><br\/>\nNgo\u00E0i c\u00E1c s\u1EA3n ph\u1EA9m \u0111\u00E3 c\u00F3 danh m\u1EE5c ri\u00EAng, c\u00E1c b\u1EA1n c\u00F3 nhu c\u1EA7u mua b\u00E1n s\u1EA3n ph\u1EA9m c\u00F3 th\u1EC3 s\u1ED1 h\u00F3a \u0111\u01B0\u1EE3c, th\u00EC h\u00E3y \u0111\u0103ng b\u00E1n n\u00F3 trong m\u1EE5c s\u1EA3n ph\u1EA9m kh\u00E1c nh\u00E9. Vi\u1EC7c mua b\u00E1n an to\u00E0n, thu\u1EADn ti\u1EC7n v\u00E0 ho\u00E0n to\u00E0n t\u1EF1 \u0111\u1ED9ng 24\/7\n<br\/> T\u1EA1p h\u00F3a MMO - s\u00E0n th\u01B0\u01A1ng m\u1EA1i \u0111i\u1EC7n t\u1EED, kinh doanh, mua b\u00E1n s\u1EA3n ph\u1EA9m s\u1ED1 ph\u1EE5c v\u1EE5 MMO (Ki\u1EBFm ti\u1EC1n online).",
            "parentType": "PRODUCT",
            "topUserId": "fcb6d96b-fc58-43a5-bf34-7b58d4762c60",
            "product": true,
            "service": false
        }, {
            "id": "3f2fcfb2-0440-4523-9b8c-1ac7c1ca41e7",
            "name": "T\u0103ng t\u01B0\u01A1ng t\u00E1c",
            "image": "\/images\/categories\/boost2.png",
            "description": "T\u0103ng like, view.share, comment... cho s\u1EA3n ph\u1EA9m c\u1EE7a b\u1EA1n",
            "alias": "dich-vu-tuong-tac",
            "type": "BOOST",
            "status": "A",
            "createdDate": "2021-07-03T16:48:01.000+07:00",
            "level": 5,
            "content": "",
            "parentType": "SERVICE",
            "topUserId": "a693a502-8da0-49c8-81d1-7d01740480d5",
            "product": false,
            "service": true
        }, {
            "id": "518e256c-0b0f-4974-be2d-3df558625c3f",
            "name": "D\u1ECBch v\u1EE5 ph\u1EA7n m\u1EC1m",
            "image": "\/images\/categories\/soft-service.png",
            "description": "D\u1ECBch v\u1EE5 code tool MMO, \u0111\u1ED3 h\u1ECDa, video... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 li\u00EAn quan",
            "alias": "dich-vu-phan-mem",
            "type": "SOFTWARE SERVICE",
            "status": "A",
            "createdDate": "2022-03-20T15:12:16.000+07:00",
            "level": 6,
            "content": "",
            "parentType": "SERVICE",
            "topUserId": null,
            "product": false,
            "service": true
        }, {
            "id": "13829aa7-d19c-4073-9a43-e1235301ccd7",
            "name": "Blockchain",
            "image": "\/images\/categories\/block2.png",
            "description": "D\u1ECBch v\u1EE5 ti\u1EC1n \u1EA3o, NFT, coinlist... v\u00E0 c\u00E1c d\u1ECBch v\u1EE5 blockchain kh\u00E1c",
            "alias": "dich-vu-blockchain",
            "type": "BLOCKCHAIN",
            "status": "A",
            "createdDate": "2022-03-20T15:15:50.000+07:00",
            "level": 7,
            "content": "",
            "parentType": "SERVICE",
            "topUserId": "a616c6e7-6014-4fac-9ada-a2164dfa352b",
            "product": false,
            "service": true
        }, {
            "id": "d3bd0d76-3a00-4a8f-b7e9-4edf7e2f0baa",
            "name": "D\u1ECBch v\u1EE5 kh\u00E1c",
            "image": "\/images\/categories\/more-service.png",
            "description": "C\u00E1c d\u1ECBch v\u1EE5 MMO ph\u1ED5 bi\u1EBFn kh\u00E1c hi\u1EC7n nay",
            "alias": "dich-vu-khac",
            "type": "OTHER SERVICES",
            "status": "A",
            "createdDate": "2022-03-20T15:16:07.000+07:00",
            "level": 8,
            "content": "",
            "parentType": "SERVICE",
            "topUserId": "eb1fe018-4f4c-470f-b2d9-82024fa7873a",
            "product": false,
            "service": true
        }];
        changeLoaiHinh($("#categoryType"));

        function changeLoaiHinh(e) {
            const val = $(e).val();
            let result = '<option value="">Chọn ...</option>';
            categories.map(item => {
                if (item.parentType == val) {
                    result += `<option value="${item.id}">${item.name}</option>`;
                }
            });
            $('#categorySelect').html(result);
        }

        function onChangeSubCategory(e) {
            const val = $(e).val();
            if (val == '6d31b966-fdd8-43b6-a400-763a42897d77' || $('#categorySelect').val() == '2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3') {
                $('#postbackForm').show();
                $('#checkSoft').hide();
            } else {
                $('#postbackForm').hide();
                $('#checkSoft').show();
            }
        }

        function onChangeCategory(e) {
            const val = $(e).val();
            let result = '';
            filters.map(item => {
                if (item.category.id == val) {
                    result += `<option value="${item.id}">${item.name} (${item.adminPercent}%)</option>`;
                }

            });
            $('#subCategories').html(result);
            if (val == '2fa15e18-1667-4f1e-bc1e-dd6d73b34ce3' || $('#subCategories').val() == '6d31b966-fdd8-43b6-a400-763a42897d77') {
                $('#postbackForm').show();
                $('#checkSoft').hide();
            } else {
                $('#postbackForm').hide();
                $('#checkSoft').show();
            }

        }

        let result = document.querySelector('.result'),
            upload = document.querySelector('#customFile'),
            cropper = '';

        upload.addEventListener('change', (e) => {
            if (e.target.files.length) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    if (e.target.result) {
                        let img = document.createElement('img');
                        img.id = 'image';
                        img.src = e.target.result;
                        result.innerHTML = '';
                        result.appendChild(img);
                        cropper = new Cropper(img, {
                            aspectRatio: 1,
                            zoomable: false,
                            minCropBoxWidth: 320,
                            minCropBoxHeight: 320
                        });
                    }
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>

</div>