</div>


<!-- Main Scripts -->

<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/simplebar.min.js"></script>
<script src="./assets/js/feather.min.js"></script>
<script src="./assets/js/script.min.js"></script>
<div class="sidebar-backdrop" id="sidebarBackdrop" data-toggle="sidebar"></div>

<!-- Plugins -->
<script src="./assets/js/jquery.dataTables.bootstrap4.responsive.min.js"></script>
<script src="./assets/js/sweetalert.min.js"></script>
<script src="./assets/js/index.js"></script>
<script src="./assets/js/flatpickr.min.js"></script>

<script type="text/javascript" src="./assets/js/nicEdit.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
</script>

<script>
    hideLoading();

    function showLoading() {
        $('.holder').show();
    }

    function hideLoading() {
        $('.holder').hide();
    }

    const token = $("meta[name='_csrf']").attr("content");
    const header = $("meta[name='_csrf_header']").attr("content");
    $(document).ajaxSend(function(e, xhr, options) {
        xhr.setRequestHeader(header, token);
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./assets/js/js(1)"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-121607210-1');
</script>

<script>
    function beforeLogin2() {
        if (typeof grecaptcha !== 'undefined') {
            var siteKey = "6LdlMFIcAAAAALDBHMRWYQXmpfU34Kgz11OmxTku";
            grecaptcha.execute(siteKey, {
                action: "register"
            }).then(function(response) {
                $('#response3').val(response);
                $('#formSignin').submit();
            });
        }
    }
</script>
<script>
    var out_session2 = 0;
    var old_title = "";
    var new_title = "";
    var curentNewMes = 0;
    var interval = null;
    var new_mess = false;
    var new_order = false;
    var isVolumeOn = true;
    var volume = localStorage.getItem("volume");
    var audio = new Audio('sound/notify.mp3');
    if (volume != null && volume == "off") {
        isVolumeOn = false;
    }

    function playNotifySound() {
        if (isVolumeOn) {
            audio.play();
        }

    }


    function checkFullNoff() {
        if (out_session2 > 5) {
            return;
        }
        $.ajax({
            url: "/api/getNotify",
            type: "post",
            dataType: "text",
            data: {

            },
            success: function(result) {
                out_session2 = 0;
                var rsArr = result.split("|");
                if (rsArr.length > 3) {
                    var newOrder = rsArr[0];
                    var newComment = rsArr[1];
                    var newReseller = rsArr[2];
                    var newTopup = rsArr[3];
                    var newWating = rsArr[4];
                    var newService = rsArr[5];
                    var disputeSum = rsArr[6];
                    var newMessage = rsArr[7];
                    // var newSeller = rsArr[2];
                    // var newReseller = rsArr[3];
                    // var newTopup = rsArr[4];
                    // var newWating = rsArr[5];
                    // var newService = rsArr[6];
                    // var disputeSum = rsArr[7];
                    // var newMessage = rsArr[8];

                    if (newMessage > 0) {
                        new_mess = true;
                        if (newMessage > curentNewMes) {
                            playNotifySound();
                        }

                        curentNewMes = newMessage;
                    } else {
                        new_mess = false;
                    }
                    var showrs = newMessage;
                    if (showrs > 99) {
                        showrs = "99+";
                    }
                    if (newMessage > 0) {
                        $('#chatNotify').removeClass("badge badge-pill badge-secondary");
                        $('#chatNotify').addClass("badge badge-pill badge-danger");
                    } else {
                        showrs = "";
                        $('#chatNotify').removeClass("badge badge-pill badge-danger");
                        $('#chatNotify').addClass("badge badge-pill badge-secondary");
                    }
                    $('#chatNotify').text(showrs);


                    if (newTopup > 0) {
                        setTimeout(function() {
                            swal("Nạp tiền", "Bạn vừa nạp thành công " + newTopup.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + " VND", "success");
                        }, 100);
                    }

                    var sum = parseInt(newOrder) + parseInt(newComment) + parseInt(newReseller) + parseInt(newWating);
                    if (sum > 0) {
                        new_order = true;
                    } else {
                        new_order = false;
                    }

                    if (sum > 99) {
                        sum = "99+";
                    }
                    $('#noffall_1').text(sum);
                    $('#noffall_2').text(sum);

                    if ($("#reseller_new").length) {
                        if (parseInt(newReseller) > 0) {
                            $('#reseller_new').text(newReseller);
                            $('#reseller_new').show();
                        } else {
                            $('#reseller_new').hide();
                        }
                    }
                    if ($("#product_sell_new").length) {
                        if (parseInt(newOrder) > 0) {
                            $("#product_sell_new").text(newOrder);
                            $("#product_sell_new").show();
                        } else {
                            $("#product_sell_new").hide();
                        }

                    }
                    if ($("#rating_new").length) {
                        if (parseInt(newComment) > 0) {
                            $("#rating_new").text(newComment);
                            $("#rating_new").show();
                        } else {
                            $("#rating_new").hide();
                        }

                    }

                    if ($("#product_presell_new").length) {
                        if (parseInt(newWating) > 0) {
                            $("#product_presell_new").text(newWating);
                            $("#product_presell_new").show();

                        } else {
                            $("#product_presell_new").hide();
                        }
                    }
                    if ($("#service_sell_new").length) {
                        if (parseInt(newService) > 0) {
                            $("#service_sell_new").text(newService);
                            $("#service_sell_new").show();

                        } else {
                            $("#service_sell_new").hide();
                        }
                    }
                    if ($("#dispute_new").length) {
                        if (parseInt(disputeSum) > 0) {
                            $("#dispute_new").text(disputeSum);
                            $("#dispute_new").show();

                        } else {
                            $("#dispute_new").hide();
                        }
                    }



                }

            },
            error: function() {
                out_session2++;
            }
        });
    }

    function refeshTitle() {
        if (!new_mess && !new_order) {
            document.title = old_title;
        } else {
            new_title = "Bạn có tin nhắn mới - Tạp Hóa MMO";
            if (document.title == old_title) {
                document.title = new_title;
            } else {
                document.title = old_title;
            }

        }


    }
    $(document).ready(function() {
        old_title = document.title;
        checkFullNoff();
        setInterval(function() {
            checkFullNoff();
        }, 20000);
        setInterval(function() {
            refeshTitle();
        }, 2000);


    });
</script>




<div class="flatpickr-calendar animate showTimeInput flatpickr-monthSelect-theme-light" tabindex="-1">
    <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                <g></g>
                <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z">
                </path>
            </svg></span>
        <div class="flatpickr-month">
            <div class="flatpickr-current-month">
                <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div>
            </div>
        </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                <g></g>
                <path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                </path>
            </svg></span>
    </div>
    <div class="flatpickr-innerContainer">
        <div class="flatpickr-rContainer">
            <div class="flatpickr-monthSelect-months" tabindex="-1"><span class="flatpickr-monthSelect-month" tabindex="-1">Jan</span><span class="flatpickr-monthSelect-month" tabindex="-1">Feb</span><span class="flatpickr-monthSelect-month" tabindex="-1">Mar</span><span class="flatpickr-monthSelect-month selected" tabindex="-1">Apr</span><span class="flatpickr-monthSelect-month" tabindex="-1">May</span><span class="flatpickr-monthSelect-month" tabindex="-1">Jun</span><span class="flatpickr-monthSelect-month" tabindex="-1">Jul</span><span class="flatpickr-monthSelect-month" tabindex="-1">Aug</span><span class="flatpickr-monthSelect-month" tabindex="-1">Sep</span><span class="flatpickr-monthSelect-month" tabindex="-1">Oct</span><span class="flatpickr-monthSelect-month" tabindex="-1">Nov</span><span class="flatpickr-monthSelect-month" tabindex="-1">Dec</span></div>
        </div>
    </div>
</div><span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
</body>

</html>