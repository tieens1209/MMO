<div class="site__body">
    <div class="holder" style="display: none;">
        <div class="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <title>Đơn hàng đã mua - Tạp hóa MMO</title>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script>
        $(function() {
            $(document).on({
                mouseover: function(event) {
                    $(this).find('.far').addClass('star-over');
                    $(this).prevAll().find('.far').addClass('star-over');
                },
                mouseleave: function(event) {
                    $(this).find('.far').removeClass('star-over');
                    $(this).prevAll().find('.far').removeClass('star-over');
                }
            }, '.rate');

            $(document).on('click', '.rate', function() {
                if (!$(this).find('.star').hasClass('rate-active')) {
                    $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
                    $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
                    $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
                } else {
                    console.log('has');
                }
            });
        });
    </script>
    <style>
        .wrap {
            width: 250px;
            height: 50px;
            background: #fff;
            top: 50%;
            left: 50%;
            border-radius: 10px;
        }

        .stars {
            margin: 0 auto;
            cursor: pointer;
        }

        .star {
            color: #91a6ff !important;
        }

        .rate {
            height: 50px;
            margin-left: -5px;
            padding: 5px;
            font-size: 25px;
            position: relative;
            cursor: pointer;
        }

        .rate input[type="radio"] {
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 0%);
            pointer-events: none;
        }

        .star-over::after {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            font-size: 16px;
            content: "\f005";
            display: inline-block;
            color: #d3dcff;
            z-index: 1;
            position: absolute;
            top: 17px;
            left: 10px;
        }

        .rate:nth-child(1) .face::after {
            content: "\f119";
            /* ☹ */
        }

        .rate:nth-child(2) .face::after {
            content: "\f11a";
            /* 😐 */
        }

        .rate:nth-child(3) .face::after {
            content: "\f118";
            /* 🙂 */
        }

        .rate:nth-child(4) .face::after {
            content: "\f580";
            /* 😊 */
        }

        .rate:nth-child(5) .face::after {
            content: "\f59a";
            /* 😄 */
        }

        .face {
            opacity: 0;
            position: absolute;
            width: 35px;
            height: 35px;
            background: #91a6ff;
            border-radius: 5px;
            top: -50px;
            left: 2px;
            transition: 0.2s;
            pointer-events: none;
        }

        .face::before {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            content: "\f0dd";
            display: inline-block;
            color: #91a6ff;
            z-index: 1;
            position: absolute;
            left: 9px;
            bottom: -15px;
        }

        .face::after {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            display: inline-block;
            color: #fff;
            z-index: 1;
            position: absolute;
            left: 5px;
            top: -1px;
        }

        .rate:hover .face {
            opacity: 1;
        }
    </style>
    <div>&nbsp;</div>
    <div class="block">
        <div class="container_fix">
            <div class="row">
                <div class="col-12 col-lg-12 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <div class="card-header">
                                    <h5>Đơn hàng đã mua</h5>
                                </div>
                            </div>
                            <div class="col-8" style="text-align: right;">
                                <div class="card-header">
                                    <form method="GET" action="/orders-buy.html">
                                        <div class="row">
                                            <div class="col-4">
                                                <input placeholder="Nhập mã đơn hàng" value="" class="form-control" id="orderId" name="search_value" type="text" fdprocessedid="f3hwhq">
                                            </div>
                                            <div class="col-8" style="text-align: left;">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <select name="search_option" id="order_search_option" onchange="changeOption()" class="form-control" fdprocessedid="pm7qsa">
                                                            <option value="orderId">Mã đơn hàng</option>
                                                            <option value="username">Người bán</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-success btn-sm" type="submit" fdprocessedid="jjwnam">Tìm đơn hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>


                        <div class="card-divider"></div>
                        <div class="card-body">
                            <div style="font-size: 14px;">
                                <p class="text-danger">Xin lưu ý:</p>
                                <li class="text-danger"> Bấm vào MÃ ĐƠN HÀNG để xem chi tiết sản phẩm đã mua!</li>
                                <li class="text-success"> Tạp Hóa MMO là sàn thương mại điện tử, vì vậy tính năng và chất lượng sản phẩm không thể nào rõ bằng người bán hàng, nếu có bất cứ thắc mắc gì về mặt hàng, xin liên hệ chủ shop để được giải quyết hoặc bảo hành.</li>
                                <li class="text-success"> Trong trường hợp chủ shop không giải quyết hoặc giải quyết không thỏa đáng, hãy bấm vào "Khiếu nại đơn hàng" , để bên mình có thể giữ tiền đơn hàng đó (lâu hơn 3 ngày) trong lúc bạn đợi phản hồi từ người bán. Bạn hoàn toàn có thể Hủy khiếu nại sau đó.</li>
                                <li class="text-success"> Bên mình chỉ giữ tiền 3 ngày, trong trường hợp đơn hàng không có khiếu nại gì, tiền sẽ được chuyển cho người bán, vì vậy xin hãy KIỂM TRA KỸ SẢN PHẨM sau khi mua. </li>
                            </div>
                            <div class="table-responsive" id="table-orders">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-nowrap">Thao tác</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Gian hàng</th>
                                            <th>Mặt hàng</th>
                                            <th>Người bán</th>
                                            <th class="text-right">Số lượng</th>
                                            <th class="text-right">Đơn giá</th>
                                            <th class="text-right">Giảm</th>
                                            <th class="text-right">Tổng tiền</th>
                                            <th class="text-right"><a data-toggle="tooltip" title="" data-original-title="Số tiền hoàn từ đánh giá đơn hàng ở gian hàng cho phép đánh giá hoàn tiền">Hoàn tiền<i style="font-size:10px" class="fa fa-question-circle"></i></a></th>
                                            <th class="text-center">Trạng thái</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="dispute_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" style="max-width: 800px;" role="document">
            <div class="modal-content">
                <form class="reviews-view__form" style="padding: 30px; margin-top: 0px;">
                    <h3>Khiếu nại đơn hàng</h3>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12">
                            <label class="text-success" for="dispute-text">Trường hợp bạn muốn hoàn tiền của đơn hàng, chúng tôi sẽ giữ số tiền của đơn hàng đó lại
                                cho bạn và chủ shop có thể thương lượng hoặc tranh chấp.
                            </label>
                            <label for="dispute-text">
                                Đơn hàng:<span class="badge badge-danger" id="dispute_code"></span>
                            </label>
                            <div class="form-group">
                                <label for="dispute-text">Thông tin liên hệ</label>
                                <input class="form-control" id="dispute-contact" required="">
                                <label for="dispute-text">Thông tin khiếu nại</label>
                                <textarea class="form-control" id="dispute-text" rows="6" required=""></textarea>
                                <label id="dispute_comment" class="text-danger"></label>
                            </div>
                            <div class="form-group mb-0">
                                <button id="btn-dispute" type="button" onclick="doDispute();" class="btn btn-danger btn-lg">Gửi khiếu nại</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="review_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" style="max-width: 800px;" role="document">
            <div class="modal-content">
                <form class="reviews-view__form" style="padding: 30px; margin-top: 0px;">
                    <h3>Đánh giá đơn hàng đã mua</h3>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12">
                            <span id="isRatingBack" style="padding:5px" class="badge badge-pill badge-success">Gian hàng đánh giá được hoàn 1 phần tiền.</span>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="wrap">
                                        <div class="stars">
                                            <label class="rate">
                                                <input type="radio" name="radio1" id="star1" value="1">
                                                <i class="far fa-star star one-star"></i>
                                                <div class="face"></div>
                                            </label>
                                            <label class="rate">
                                                <input type="radio" name="radio1" id="star2" value="2">
                                                <i class="far fa-star star two-star"></i>
                                                <div class="face"></div>
                                            </label>
                                            <label class="rate">
                                                <input type="radio" name="radio1" id="star3" value="3">
                                                <i class="far fa-star star three-star"></i>
                                                <div class="face"></div>
                                            </label>
                                            <label class="rate">
                                                <input type="radio" name="radio1" id="star4" value="4">
                                                <i class="far fa-star star four-star"></i>
                                                <div class="face"></div>
                                            </label>
                                            <label class="rate">
                                                <input type="radio" name="radio1" id="star5" value="5">
                                                <i class="far fa-star star five-star"></i>
                                                <div class="face"></div>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="form-group">
                                <label for="review-text">Chia sẻ thêm thông tin</label>
                                <textarea class="form-control" id="review-text" rows="6"></textarea>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Sản phẩm chuẩn chất lượng.</a>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Sản phẩm khá tốt.</a>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Sản phẩm ổn.</a>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Hỗ trợ nhiệt tình.</a>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Sản phẩm kém chất lượng.</a>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Không hỗ trợ khách hàng.</a>
                                <a href="#" onclick="setReasonTicket(this);" class="badge badge-pill badge-warning">Hàng không sử dụng được.</a>
                                <p id="err_comment" class="text-danger"></p>
                            </div>
                            <div class="form-group mb-0">
                                <button id="btn-rating" type="button" onclick="doRating();" class="btn btn-primary btn-lg">Gửi đánh giá</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function setReasonTicket(element2) {
            var newCmt = $('#review-text').val() + " " + element2.text;
            $('#review-text').val(newCmt);

        }

        function showRatingModal(kioskId, orderId, ratingBack) {
            $('#review_modal').modal();
            $('#btn-rating').attr('data-kioskId', kioskId);
            $('#btn-rating').attr('data-orderId', orderId);
            if (ratingBack > 0) {
                $('#isRatingBack').show();
            } else {
                $('#isRatingBack').hide();
            }
        }

        function showDisputeModal(orderId, code) {
            $('#dispute_modal').modal();
            $('#dispute_code').text(code);
            $('#btn-dispute').attr('data-orderId', orderId);
        }

        function doRating() {
            const star = $('.rate-active').prev().val();
            const comment = $('#review-text').val();
            const orderId = $('#btn-rating').attr('data-orderId');
            const kioskId = $('#btn-rating').attr('data-kioskId');
            if (comment == '') {
                $('#err_comment').html('Vui lòng chia sẻ thêm thông tin');
                return;
            }
            $.ajax({
                url: "/api/rating/comment",
                data: {
                    'star': star,
                    'comment': comment,
                    'order_id': orderId
                },
                type: "POST",
                async: false,
                success: function(res) {
                    if (res == 'OK') {
                        window.location.reload();
                    } else {
                        $('#err_comment').text(res);
                    }
                }
            });

        }

        function doDispute() {
            const comment = $('#dispute-text').val();
            const contact = $('#dispute-contact').val();
            const orderId = $('#btn-dispute').attr('data-orderId');

            if (comment == '') {
                $('#dispute_comment').html('Vui lòng chia sẻ thêm thông tin.');
                return;
            }
            if (contact == '') {
                $('#dispute_contact').html('Vui lòng điền thông tin liên hệ.');
                return;
            }
            $.ajax({
                url: `/api/dispute/comment`,
                type: 'POST',
                dataType: 'json',
                async: false,
                contentType: 'application/json',
                data: JSON.stringify({
                    'contact': contact,
                    'content': comment,
                    'order': {
                        'id': orderId,
                    }
                }),
                success: function(res) {
                    if (res.statusCode == 'OK') {
                        $('#dispute_comment').html("Khiếu nại thành công. Vui lòng chờ thông tin!");
                        window.location.reload();
                    } else {
                        $('#dispute_comment').html(res.message);
                    }
                }
            })
        }
        $(document).ready(function() {
            $(".modal").on("hidden.bs.modal", function() {
                resetModal();
            });
        });

        function resetModal() {
            $('#review-text').val('');
            $('#err_comment').html('');
            $('.fas').addClass('far').removeClass('fas')
        }

        function deleteDisputeModal(id) {
            var serverContext = "\/";
            swal({
                    title: "Hãy cân nhắc!",
                    text: 'Mỗi đơn hàng chỉ được khiếu nại 1 lần. KHÔNG hủy khiếu nại nếu chưa được giải quyết thỏa đáng. Nếu shop nào yêu cầu hủy khiếu nại mới bảo hành thì vui lòng thông báo cho sàn!',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Đồng ý hủy",
                    cancelButtonText: "Hủy",
                    closeOnConfirm: true,
                    closeOnCancel: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: "/api/dispute/delete",
                            type: "POST",
                            data: {
                                id: id
                            },
                            success: function(response) {
                                if (response.statusCode == 'OK') {
                                    toastr.success("Đã hủy khiếu nại thành công!");
                                    window.location.reload();
                                } else {
                                    swal("Lỗi", response.errorMsg, "error");
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