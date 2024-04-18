<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
    <script src="./view/assets/js/jquery.min.js"></script>
    <script src="./view/assets/js/feather.min.js"></script>
    <script src="./view/assets/js/script.min.js"></script>
    <script>
        function copyMemo(id_copy) {
            var el = document.getElementById(id_copy);
            var range = document.createRange();
            range.selectNodeContents(el);
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
            document.execCommand('copy');
        }

        function redeemCode() {
            var code = $('#gift_code').val();
            document.getElementById('gift_code').value = '';
            if (code == "") {
                $('#redeem_error').text("Chưa nhập code!");
            } else {
                $.ajax({
                    url: "/api/giftCode",
                    type: "post",
                    dataType: "text",
                    data: {
                        code: code
                    },
                    success: function (result) {
                        $('#redeem_error').text(result);
                    }, error: function () {
                        $('#redeem_error').text("Có lỗi xảy ra, vui lòng đăng nhập lại!");
                    }
                });
            }
        }
    </script>
    <div>&nbsp;</div>
    <div class="container">
        <div id="redeem" style="text-align: center;">
            <h3 class="register-heading">Redeem gift-code</h3>
            <div class="row register-form" style="padding-bottom: 0%;padding-left: 10%;">
                <div style="width:100%">
                    <label id="redeem_error" style="color:red;"></label>
                </div>
                <input required="" name="gift_code" id="gift_code" style="width: 80%;" type="text" class="form-control" placeholder="Nhập vào mã gift *" fdprocessedid="kwk3kg">
                <a name="code_submit" onclick="redeemCode()" type="button" class="btn btn-success">Redeem</a>
            </div>
        </div>
        <div class="row justify-content-md-center" style="padding:15px">
            

<!--            <div class="col-md-6" th:if="${bankAccountDependent != null && bankAccountDependent.status}">-->
<!--                <div class="card">-->
<!--                    <div style="text-align: center;">-->
<!--                        <img style="width: 10rem;" th:src="${bankAccountDependent.logo}">-->
<!--                    </div>-->
<!--                    <div class="card-body" style="font-size:15px">-->
<!--                        <li>STK: <b th:text="${bankAccountDependent.bankAccountNum}"></b></li>-->
<!--                        <li>Người nhận: <b style="font-size: 14px;" th:text="${bankAccountDependent.bankAccountName}"></b></li>-->
<!--                        <li>-->
<!--                            Nội dung chuyển khoản:-->
<!--                            <a id="memo_bank_dependent" style="font-weight:bold;font-size:25px;color:green" th:text="'TS '+${user.publicId}"></a>-->
<!--                            <button style="margin-bottom: 5px;" name="code_submit" type="button" onclick="copyMemo('memo_bank_dependent')" class="btn btn-danger btn-xs">Copy</button>-->
<!--                        </li>-->
<!--                        <br>-->
<!--                        <p class="text-center text-danger">Quét mã QR Code để nội dung chuyển khoản chính xác</p>-->
<!--                        <p class="text-center">-->
<!--                            <img th:src="${qrCodeBankAccountDependent}"/>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="col-md-12">
                <div class="card">

                    <div class="card-body" style="font-size:15px">
                        <div class="row">
                            <div class="col-lg-6">
                                <img style="width: 10rem;" src="/images/addfunds/acb.png">
                                <li>STK: <b>36806937</b></li>
                                <li>Người nhận: <b style="font-size: 14px;">Đào Quang Huy</b></li>
                                <li>
                                    Nội dung chuyển khoản:
                                    <a id="memo_bank_main" style="font-weight:bold;font-size:20px;color:green">TS 223616</a>
                                    <button style="margin-bottom: 5px;" name="code_submit" type="button" onclick="copyMemo('memo_bank_main')" class="btn btn-danger btn-xs" fdprocessedid="d68qwb6">Copy</button>
                                </li>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-center text-danger">Quét mã QR Code để nội dung chuyển khoản chính xác</p>
                                <p class="text-center">
                                    <img src="/generateQRCode?memo=TS 223616&amp;tag00=A000000727&amp;tag01=0108368069370006970416&amp;tag02=QRIBFTTA">
                                </p>
                            </div>
                            <div class="col-lg-12" style="padding-left:15px;">
                                <p style="color:red; padding-top:15px;"><b>Lưu ý:</b></p>
                                <li class="text-danger">Vui lòng điền chính xác nội dung chuyển khoản để thực hiện nạp tiền tự động.</li>
                                <li>Tiền sẽ vào tài khoảng trong vòng 1-10 phút kể từ khi giao dịch thành công. Tuy nhiên đôi lúc do một vài lỗi khách quan, tiền có thể sẽ vào chậm hơn một chút.</li>
                                <li><span style="color:red;">Vietcombank trong khoảng 23-3h không thể kiểm tra lịch sử giao dịch</span>, các giao dịch trong khung giờ này có thể mất từ 15 phút đến 2 giờ tiền mới vào tài khoản. Bạn có thể tránh nạp tiền trong khung giờ này để đỡ mất thời gian chờ đợi nhé.</li>
                                <li style="padding-bottom: 10px;">Nếu quá lâu không thấy cập nhật số dư, Vui lòng liên hệ hỗ trợ viên:
                                    <a target="_blank" href="/chat-box.html?chat_to=taphoammo">Tại đây</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

		</div>