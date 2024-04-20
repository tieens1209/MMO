<div class="main-body">

    <title>Quản lý user - Tạp hóa MMO</title>
    <script type="text/javascript">
        $(() => {
            document.getElementById("seller").className += " active";
        });

        function approval(action, id) {
            var serverContext = "\/";

            var title = '';
            if (action == 'APPROVAL') {
                title = 'Bạn có chắc chắn ĐỒNG Ý!';
            } else {
                title = 'Bạn có chắc chắn TỪ CHỐI!';
            }
            swal({
                    title: title,
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: "/approval.html",
                            type: "POST",
                            data: {
                                action: action,
                                id: id
                            },
                            success: function(response) {
                                if (response.errorMsg == 'success') {
                                    swal("Thành công!", "Xử lý thành công duyệt Resller!", "success");
                                    response.errorMsg
                                    window.location.href = serverContext + "index.php?act=seller";
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

    <div class="card">
        <div class="card-body">

            <h5>Quản lý seller</h5>



            <div class="d-md-flex justify-content-md-end mb-3">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Thao tác</th>
                        <th scope="col">Gian hàng</th>
                        <th scope="col">Tên Seller</th>
                        <th scope="col">Tổng đơn hàng</th>
                        <th scope="col">Doanh số</th>

                        <th scope="col" class="text-right">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</div>