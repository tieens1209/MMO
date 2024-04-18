<div class="site__body">
			<div class="holder" style="display: none;"><div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			</div>
			
	<style>
		.container {
			max-width: 1170px;
			margin: auto;
		}

		img {
			max-width: 100%;
		}

		.inbox_people {
			background: #f8f8f8 none repeat scroll 0 0;
			float: left;
			overflow: hidden;
			width: 40%;
			border-right: 1px solid #c4c4c4;
			border-radius: 3px;
		}
		.emoji_picker{
			z-index: 5003;
			left: 0;
			border-radius: 3px;
			border: 1px #dfdfdf solid;
			width: 82%;
			margin-left: 40px;
			padding:8px;
			display:none;
			position: absolute;
			top: -76px;
			bottom: 49px;
			background-color: #fff;
			overflow: auto;
		}
		.sample_picker{
			z-index: 5003;
			left: 0;
			border-radius: 3px;
			border: 1px #dfdfdf solid;
			width: 82%;
			margin-left: 40px;
			padding:8px;
			display:none;
			position: absolute;
			top: -150px;
			bottom: 49px;
			background-color: #fff;
			overflow-y: auto; 
 			overflow-x: hidden; 
		}
		.inbox_msg {
			border: 1px solid #c4c4c4;
			clear: both;
			overflow: hidden;
			width: 100%;
			border-radius: 3px;
		}

		.top_spac {
			margin: 20px 0 0;
		}


		.recent_heading {
			float: left;
			width: 40%;
		}

		.srch_bar {
			display: inline-block;
			text-align: right;
			width: 60%;
		}

		.headind_srch {
			padding: 10px 29px 10px 20px;
			overflow: hidden;
			border-bottom: 1px solid #c4c4c4;
		}

		.recent_heading h4 {

			font-size: 21px;
			margin: auto;
		}

		.srch_bar input {
			border: 1px solid #cdcdcd;
			border-width: 0 0 1px 0;
			width: 80%;
			padding: 2px 0 4px 6px;
			background: none;
		}

		.srch_bar .input-group-addon button {
			background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
			border: medium none;
			padding: 0;
			color: #707070;
			font-size: 18px;
		}

		.srch_bar .input-group-addon {
			margin: 0 0 0 -27px;
		}

		.chat_ib h5 {
			font-size: 15px;
			color: #464646;
			margin: 0 0 8px 0;
		}

		.chat_ib h5 span {
			font-size: 13px;
			float: right;
		}

		.chat_ib p {
			font-size: 14px;
			color: #989898;
			margin: auto
		}

		.chat_img {
			float: left;
			width: 11%;
		}

		.chat_ib {
			float: left;
			padding: 0 0 0 15px;
			width: 88%;
		}

		.chat_people {
			overflow: hidden;
			clear: both;
		}

		.chat_list {
			border-bottom: 1px solid #c4c4c4;
			margin: 0;
			padding: 18px 16px 10px;
			cursor: pointer;
		}

		.inbox_chat {
			height: 500px;
			overflow-y: scroll;
		}

		.active_chat {
			background: #d2dde0;
		}

		.incoming_msg_img {
			display: inline-block;
			width: 6%;
		}

		.received_msg {
			display: inline-block;
			padding: 0 0 0 10px;
			vertical-align: top;
			width: 92%;
		}

		.received_withd_msg p {
			background: #ebebeb none repeat scroll 0 0;
			border-radius: 3px;
			color: #646464;
			font-size: 14px;
			margin: 0;
			padding: 5px 10px 5px 12px;
			width: 100%;
		}

		.time_date {
			color: #747474;
			display: block;
			font-size: 12px;
			margin: 8px 0 0;
		}
		.time_date_error {
			color: red;
			display: block;
			font-size: 12px;
			margin: 8px 0 0;
		}
		.noff_list {
			position: absolute;
			top: 0px;
			left: 0px;
			color: red;
			font-size: 15px;
			/* padding: 0px; */
			margin: 2px;
			/* padding-bottom: 9px; */
		}

		.received_withd_msg {
			width: 57%;
		}

		.mesgs {
			float: left;
			padding: 52px 15px 0 25px;
			width: 60%;
			position: relative;
		}

		.sent_msg p {
			background: #05728f none repeat scroll 0 0;
			border-radius: 3px;
			font-size: 14px;
			margin: 0;
			color: #fff;
			padding: 5px 10px 5px 12px;
			width: 100%;
		}

		.outgoing_msg {
			overflow: hidden;
			margin: 26px 0 26px;
		}

		.sent_msg {
			float: right;
			width: 46%;
		}

		.input_msg_write input {
			background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
			border: medium none;
			color: #4c4c4c;
			font-size: 15px;
			min-height: 48px;
			width: 77%;
			
		}

		.type_msg {
			border-top: 1px solid #c4c4c4;
			position: relative;
		}

		.msg_send_btn {
			background: #05728f none repeat scroll 0 0;
			border: medium none;
			border-radius: 50%;
			color: #fff;
			padding: 0px;
			cursor: pointer;
			font-size: 17px;
			height: 33px;
			position: absolute;
			right: 0;
			top: 11px;
			width: 33px;
		}
		.img_send_btn {
			background: #05728f none repeat scroll 0 0;
			border: medium none;
			border-radius: 50%;
			color: #fff;
			padding: 0px;
			cursor: pointer;
			font-size: 17px;
			height: 33px;
			position: absolute;
			right: 0;
			top: 11px;
			width: 33px;
		}
		.messaging {
			width: 100%;

		}

		.msg_history {
			height: 90%;
			overflow-y: auto;
		}
		
	</style>
	<div>&nbsp;</div>
	<div class="block">
		<div class="container">
			
			<div class="row">
				<div class="messaging">
					<div class="inbox_msg">
						<div id="list_chat" class="inbox_people">
							<div class="headind_srch">
								<div class="recent_heading">
									<h4>Gần đây <i id="notify_icon" onclick="volumeChange(this);" style="font-size:15px; cursor: pointer;" title="Bật/Tắt âm thanh" class="fa fa-volume-up"></i></h4>
								</div>
								<div class="srch_bar">
									<button title="Thu gọn" onclick="collapseList()" class="btn btn-secondary" fdprocessedid="6ag28d"><img style="width: 20px;" src="/images/icon/colla.png"> </button>
								</div>
								
							</div>
							<div id="inbox_chat" class="inbox_chat" style="height: 351px;"><a href="/chat-box.html?chat_to=taphoammo"><div class="chat_list active_chat"><div style="position: relative;" class="chat_people"><div class="chat_img"> <img src="/images/avatars/avartar_9.svg" alt="sunil"> </div><div class="chat_ib"><div style="padding-left:15px" class="row"><h5 style="width: 75%;" id="gest_name">taphoammo <i class="fa fa-check-circle" style="color:red; font-size: 80%;" title="Thuộc hệ thống"></i></h5><h5 style="width: 20%;"><span class="chat_date">15/4/2024</span></h5></div><p>Chào mừng bạn đến với taphoammo. ...</p></div></div></div></a></div>
					</div>
					<div id="main_chat" class="mesgs">
						<button id="show_button" title="Danh sách" onclick="showList()" style="display:none; position: absolute;top: 12px;left: 0px; z-index: 1;" class="btn btn-secondary">
							<img style="width: 20px;" src="/images/icon/show.png">
						 </button>
						 <div style="text-align: center;width: 103%; height: 52px;background-color: #ebebeb;position: absolute;top: 0px;left: 0px; z-index: 0;">
						 	
						 	<span style="font-size:17px;margin-bottom: -0.1rem; padding: 3px; font-weight: 900;" id="active_user"><a id="lastUsername" href="/thong-tin/taphoammo" data-name="taphoammo">@taphoammo <i class="fa fa-check-circle" style="color:red; font-size: 80%;" title="Thuộc hệ thống"></i></a></span>
						 	<a style="font-size: 11px; color: rgb(33, 191, 115);" id="time_online">Online</a>
						 	
						 	<p style="font-size:14px; margin-top: -2px;"><span class="badge badge-warning">Xin hãy cảnh giác với giao dịch không được bảo hiểm bên ngoài sàn!</span></p>
						 </div>
						<div onclick="hideEmoji();" id="msg_history" class="msg_history" style="overflow-y: scroll; height: 308px;">

							
								<div>
									<div class="incoming_msg">
										<div class="incoming_msg_img"> <img src="/images/avatars/avartar_9.svg" alt="sunil"> </div>
										<div class="received_msg">
											<div class="received_withd_msg">
												<p>Chào mừng bạn đến với taphoammo. Nếu có khó khăn gì trong quá trình sử dụng trang, nhắn tin cho mình ngay nhé. Bạn có thể tham khảo thêm về các câu hỏi thường gặp trên menu chính (FAQs). Xin cảm ơn.</p>
												<span class="time_date">10:55 - 15/04</span>
											</div>
										</div>
									</div>
									
								</div>
							
							
						</div>
						
						<div class="type_msg">
							<div id="emojiTab" class="emoji_picker">
								<button onclick="emojiOut(1);" type="button" class="btn btn-light btn-sm"><img src="/emoji/1.png" width="20"></button>
								<button onclick="emojiOut(2);" type="button" class="btn btn-light btn-sm"><img src="/emoji/2.png" width="20"></button>
								<button onclick="emojiOut(3);" type="button" class="btn btn-light btn-sm"><img src="/emoji/3.png" width="20"></button>
								<button onclick="emojiOut(4);" type="button" class="btn btn-light btn-sm"><img src="/emoji/4.png" width="20"></button>
								<button onclick="emojiOut(5);" type="button" class="btn btn-light btn-sm"><img src="/emoji/5.png" width="20"></button>
								<button onclick="emojiOut(6);" type="button" class="btn btn-light btn-sm"><img src="/emoji/6.png" width="20"></button>
								<button onclick="emojiOut(7);" type="button" class="btn btn-light btn-sm"><img src="/emoji/7.png" width="20"></button>
								<button onclick="emojiOut(8);" type="button" class="btn btn-light btn-sm"><img src="/emoji/8.png" width="20"></button>
								<button onclick="emojiOut(9);" type="button" class="btn btn-light btn-sm"><img src="/emoji/9.png" width="20"></button>
								<button onclick="emojiOut(10);" type="button" class="btn btn-light btn-sm"><img src="/emoji/10.png" width="20"></button>
								<button onclick="emojiOut(11);" type="button" class="btn btn-light btn-sm"><img src="/emoji/11.png" width="20"></button>
								<button onclick="emojiOut(12);" type="button" class="btn btn-light btn-sm"><img src="/emoji/12.png" width="20"></button>
								<button onclick="emojiOut(13);" type="button" class="btn btn-light btn-sm"><img src="/emoji/13.png" width="20"></button>
								<button onclick="emojiOut(14);" type="button" class="btn btn-light btn-sm"><img src="/emoji/14.png" width="20"></button>
								<button onclick="emojiOut(15);" type="button" class="btn btn-light btn-sm"><img src="/emoji/15.png" width="20"></button>
								<button onclick="emojiOut(16);" type="button" class="btn btn-light btn-sm"><img src="/emoji/16.png" width="20"></button>
								
							</div>
							<div id="sampleTab" class="sample_picker">
								<div id="listSample"><div class="row"><div class="col-1"><button data-key="0" onclick="deleteSample(0)" class="btn btn-sm  btn-default"><span class="fa fa-trash" aria-hidden="true"></span></button></div> <div class="col-11"><span style="cursor: pointer; background-color: #05728f;" onclick="sendSampleMessage(this);" class="badge badge-success">Xin chào!</span></div></div></div>
								<div class="row">
									<div class="col-1"><button onclick="addSample()" class="btn btn-sm  btn-default"><span style="font-size: 20px;" class="fas fa-plus-circle" aria-hidden="true"></span></button></div>
								    <div class="col-10"><input id="sampleInputText" class="form-control-sm" style=" width: 80%;"> </div>
								</div>
								
								
								
							</div>
							<div class="input_msg_write" style="padding-top: 5px;">
							
								<button style="width: 5%;padding: 1px;" class="btn btn-sm  btn-default" title="Gởi ảnh" data-toggle="modal" data-target="#uploadModal" fdprocessedid="lxk5cg"><span class="fa fa-file-image" aria-hidden="true"></span></button>
								<button style="width: 5%;padding: 1px;" class="btn btn-sm  btn-default" title="Biểu cảm" onclick="emojiAction()" fdprocessedid="sk5ck"><span class="far fa-smile" aria-hidden="true"></span></button>
								<button style="width: 5%;padding: 1px;" class="btn btn-sm  btn-default" title="Mẫu câu" onclick="sampleAction()" fdprocessedid="5kol4f"><span class="fa fa-book" aria-hidden="true"></span></button>
								<input onclick="hideEmoji();" id="chatMessage" type="text" class="write_msg" placeholder="Type a message" conversion-id="d9694c5a-6525-419e-9722-6234ec0200ae" fdprocessedid="5k4x4k">
								
								<button onclick="sendChatMessage()" class="msg_send_btn" type="button" fdprocessedid="yq5n8i"><a style="padding-left: 0px;" class="fa fa-paper-plane" aria-hidden="true"></a></button>
							</div>
						</div>
						<p id="error_code" style="text-align: right;width: 100%; color: red; font-size: 13px;"></p>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- Modal -->
		<div id="uploadModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        
		        <h4 class="modal-title">Chọn ảnh tải lên</h4>
		        <button type="button" class="close" data-dismiss="modal">×</button>
		      </div>
		      <div class="modal-body">
		        <!-- Form -->
		        <form method="post" action="" enctype="multipart/form-data">
		          Chọn ảnh : <input type="file" name="file" id="file" accept="image/*" class="form-control"><br>
		          <p class="text-danger" id="error_upload"></p>
		          <input type="button" class="btn btn-info" onclick="uploadImg();" value="Upload" id="btn_upload">
		           
		        </form>
				<br>
		        <!-- Preview-->
		        <div style="display:none;" id="preview">
		        	<img src="" id="img" width="100%"><br><br>
		        	<button type="button" onclick="sendImg();" data-dismiss="modal" class="btn btn-info">Gửi</button>
		        </div>
		      </div>
		 
		    </div>
		
		  </div>
		</div>
		
		
		
	</div>
		<script>
			var mylog="test";
			var chatHref= '<a href="/chat-box.html?chat_to=';
		</script>
	
	
	<script>
		
		function volumeChange(element){
			var class_name= element.className;
			if(class_name=="fa fa-volume-up"){
				element.className="fas fa-volume-mute";
				localStorage.setItem("volume", "off");
				isVolumeOn = false;
			}else{
				element.className="fa fa-volume-up";
				localStorage.setItem("volume", "on");
				isVolumeOn = true;
			}
		}
		var ListSave =null;
		function loadSample(){
			 ListSave =JSON.parse( localStorage.getItem("ListSample"));
			 if(ListSave==null){
				var newSaveOb = { text:"Xin chào!"};
				ListSave = [newSaveOb].concat(ListSave) ;
			 }
			 $("#listSample").empty();
			 var sumHtml="";
			 for(var k in ListSave) {
				if(ListSave[k]!=null){
					sumHtml = sumHtml+
					'<div class="row">'+
						'<div class="col-1"><button data-key='+k+' onclick="deleteSample('+k+')" class="btn btn-sm  btn-default"><span class="fa fa-trash" aria-hidden="true"></span></button></div>'+
					   ' <div class="col-11"><span style="cursor: pointer; background-color: #05728f;" onclick="sendSampleMessage(this);"  class="badge badge-success">'+ListSave[k].text+'</span></div>'+
					'</div>';
				}
				 $("#listSample").html(sumHtml);
				  
			}
			
		}
		function addSample(){
			var codeString = $("#sampleInputText").val();
			if(codeString=="" ){
				$("#save_error").text("Lỗi. Chưa điền đủ thông tin.");
			}else{
				var newSaveOb = { text:codeString};
				ListSave = [newSaveOb].concat(ListSave) ;
				localStorage.setItem("ListSample", JSON.stringify( ListSave));
				loadSample();
				 $("#sampleInputText").val("");
			}
		}
		function deleteSample(_index){
			ListSave.splice(_index,1);
			localStorage.setItem("ListSample", JSON.stringify( ListSave));
			loadSample();
			
		}
		function emojiOut(code){
			$("#chatMessage").val($("#chatMessage").val()+"[EMO]"+code+"[/EMO]");
			
		}
		function emojiAction(){
			$("#sampleTab").hide();
			if($('#emojiTab:visible').length == 0)
			{
				$("#emojiTab").show();
			}else{
				$("#emojiTab").hide();
			}
			
		}
		function sampleAction(){
			$("#emojiTab").hide();
			if($('#sampleTab:visible').length == 0)
			{
				$("#sampleTab").show();
			}else{
				$("#sampleTab").hide();
			}
			
		}
		function sendSampleMessage(elem){
			var text = elem.textContent;
			$('#chatMessage').val($('#chatMessage').val()+" "+text);
		}
		function hideEmoji(){
			$("#emojiTab").hide();
			$("#sampleTab").hide();
		}
		function sendImg(){
			var img =  $("#img").attr("src");
			$('#chatMessage').val("[img]"+img+"[/img]");
			sendChatMessage(true);
			 $("#preview").hide(); 
		}
		function uploadImg(){
			 var fd = new FormData();
		        var files = $('#file')[0].files;
		        
		        // Check file selected or not
		        if(files.length > 0 ){
		           fd.append('file',files[0]);
		
		           $.ajax({
		              url: '/api/img/upload',
		              type: 'post',
		              data: fd,
		              contentType: false,
		              processData: false,
		              async:false,
		              success: function(response){
		                 if(response.includes("OK|")){
		                    $("#img").attr("src",response.replace("OK|","/")); 
		                    
		                    $("#preview").show(); 
		                 }else{
		                    $("#error_upload").text(response);
		                 }
		              },
		           });
		        }else{
		           $("#error_upload").text("Hãy chọn 1 ảnh!");
		     }
			
		}
		var out_session1 = 0;
		var check_date = new Date();
		function sendChatMessage(isImg=false) {
			 hideEmoji();
			var newDate = new Date();
			var seconds = (newDate - check_date) / 1000;
			if (seconds > 1) {
				var id = $('#chatMessage').attr("conversion-id");
				var message = $('#chatMessage').val();
				$('#chatMessage').val('');
				if (message != "") {
					var element = document.getElementById("msg_history");
					var dt = new Date();
					var time = dt.getHours() + ":" + dt.getMinutes() + " - " + dt.getDate() + "/" + (dt.getMonth() + 1);
					//message = $.parseHTML(message),nodeNames = [];
					//console.log(message);
					var messageUI="";
					if(isImg){
						
						messageUI = message.replace("[/img]","").replace("[img]","");
						messageUI = "<a href='"+messageUI+"' target='_blank'><img src='"+messageUI+"'></a>";
					}else{
						messageUI = message.replace(/\[EMO\](.+?)\[\/EMO\]/g,'<img width="20" src="/emoji/$1.png"/>');
					}
					var guiID = uuidv4();
					$('#msg_history').append("<div><div class='outgoing_msg'><div class='sent_msg'><p>" + messageUI + "</p><span id='"+guiID+"' class='time_date'  >" + time + "</span></div></div></div>");
					$('#msg_history').animate({scrollTop: element.scrollHeight}, "slow");
					$('#error_code').text("");
					
					$.ajax({
						url: "/api/sendNewMessage/" + id,
						type: "post",
						dataType: "text",
						data: {
							message: message,
							mylog:mylog
						},
						success: function (result) {
							if (result == "OK") {
								
								check_date = newDate;
							}else{
								$("#"+guiID).text($("#"+guiID).text()+" - Send error!");
								$("#"+guiID).toggleClass('time_date time_date_error');
							}
						}, error: function () {
							$("#"+guiID).text($("#"+guiID).text()+" - Send error!");
							$("#"+guiID).toggleClass('time_date time_date_error');
						}
					});
				}
			} else {
				alert("Quá nhanh!");
			}
		}
		var lastConversion = "";
		function getNewConversion() {
			if (out_session1 > 8) {return;}
			var guest_name = $('#lastUsername').attr('data-name');
			$.ajax({
				url : "/api/getNewConversion",
				type : "post",
				dataType:"text",
				data : {
					guest_name:guest_name,
					mylog:mylog
				},
				success : function (result){
					out_session1=0;
					if(String(result)!=lastConversion){
						lastConversion=String(result);
						var jsonData = JSON.parse(result);
						$('#inbox_chat').empty();
						for (var i = 0; i < jsonData.length; i++) {
							 var counter = jsonData[i];
							 var classInner="chat_list";
							 if(counter.active){
								$('#active_user').html("<a  id='lastUsername' href='/thong-tin/"+counter.guest_user+"' data-name='"+counter.guest_user+"'>@"+counter.htmlName+"</a>");
								if(counter.lastOnline=="Online"){
									$('#time_online').css("color","#21bf73");
								}else{
									$('#time_online').css("color","#989898");
								}
								$('#time_online').text(counter.lastOnline);
								classInner="chat_list active_chat";}
							 var dt = new Date(counter.date)
							 var time = dt.getDate()+"/"+(dt.getMonth()+1)+"/"+dt.getFullYear();
							 var noff="";
							 if(counter.newMes>0){
									noff= '<span style="margin: 2px;" class=" noff_list indicator__value">'+counter.newMes+'</span>';
								}
							var userImage=counter.avatar;
							 var html = chatHref +counter.guest_user+'">'+
											'<div class="'+classInner+'">'+
												'<div style="position: relative;" class="chat_people">'+
													'<div class="chat_img"> <img src="'+userImage+'"'+
															'alt="sunil"/>'+
															noff +
													' </div>'+
													'<div class="chat_ib">'+
														'<div style="padding-left:15px" class= row>'+
															'<h5 style="width: 75%;" id="gest_name" >'+counter.htmlName+'</h5>'+
															'<h5 style="width: 20%;"><span class="chat_date" >'+time+'</span></h5>'+
														'</div>'+
														'<p>'+counter.last_chat+'</p>'+
													'</div>'+
												'</div>'+
											'</div>'+
										'</a>';
							$('#inbox_chat').append(html);
							
						}
						var activeElm = $(".active_chat");
						console.log(activeElm.offset().top);
						$('#inbox_chat').animate({ scrollTop: activeElm.offset().top-250}, 0);
						
					}
				},
				error: function () {
					   out_session1++;
				 }
			});

		}
		 function getNewMessage(){
			if(out_session1>8){return;}
			var id= $('#chatMessage').attr("conversion-id");
			$.ajax({
		                    url : "/api/getNewMessage/"+id,
		                    type : "post",
		                    dataType:"text",
		                    async:false,
		                    data : {
								mylog:mylog
		                    },
		                    success : function (result){
								out_session1 =0;
		                       var jsonData = JSON.parse(result);
		                      // console.log(result);
								for (var i = 0; i < jsonData.length; i++) {
								    var counter = jsonData[i];
								   // console.log(counter.message);
								    var message=counter.message;
								    var dt = new Date(counter.date)
								    var time = dt.getHours() + ":" + dt.getMinutes() +" - "+dt.getDate()+"/"+(dt.getMonth()+1);
								    if(counter.isFromTele){time = time+"|From Telegram";}
								    $('#msg_history').append('<div class="incoming_msg"><div class="incoming_msg_img"> <img src="'+counter.avatar+'" alt="sunil"> </div> <div class="received_msg"> <div class="received_withd_msg"> <p>'+message+'</p><span class="time_date">'+time+'</span></div></div></div>');
								    var element = document.getElementById("msg_history");
								    $('#msg_history').animate({ scrollTop: element.scrollHeight}, "slow");
								}
		                    },
		                    error: function () {
							       out_session1++;
							 }
		                });
		}
		function collapseList() {
			$('#list_chat').css({'width': '0%'});
			$('#main_chat').css({'width': '98%'});
			$('#show_button').show();
		}
		function showList() {
			if ($(window).width() >= 975) {
				$('#list_chat').css({'width': '35%'});
				$('#main_chat').css({'width': '63%'});
			} else {
				$('#list_chat').css({'width': '80%'});
				$('#main_chat').css({'width': '17%'});
			}
			$('#show_button').hide();
		}
		function uuidv4() {
		  return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
		    (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
		  );
		}
		$(document).ready(function () {
			var heigh = $(window).height();
			if (heigh > 300) {
				heigh = heigh - 200;
				$('.inbox_chat').height(heigh);
				$('.msg_history').height(heigh - 43);
			}
			$('#site_footer').hide();
			if ($(window).width() < 975) {
				collapseList();
			}
			loadSample();
			
			var element = document.getElementById("msg_history");
			$('#msg_history').animate({scrollTop: element.scrollHeight+50}, "fast");
			$("#chatMessage").on('keyup', function (e) {
				if (e.key === 'Enter' || e.keyCode === 13) {
					sendChatMessage();
				}
			});
			getNewConversion();
		    setInterval(function(){ getNewMessage(); }, 2000);
		    setInterval(function(){ getNewConversion(); }, 5000);

			var volume = localStorage.getItem("volume");
			
			if(volume==null){
				localStorage.setItem("volume", "on");
			}else if(volume=="off"){
				$("#notify_icon").removeClass("fa-volume-up");
				$("#notify_icon").addClass("fa-volume-mute");
				
				
			}else{
				$("#notify_icon").removeClass("fa-volume-mute");
				$("#notify_icon").addClass("fa-volume-up");
				
			}
		});
	</script>
	

		</div>