function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
function validatePhone($phone) {
    var filter = /^[0-9-+]{10,11}$/;
    return filter.test($phone);
}
function validateNumber($phone) {
  var filter = /^[0-9]+$/;
  return filter.test($phone);
}
function kiemtraSo() {
  var sl = $('#soluong').val();
  if(!validateNumber(sl)){
    alert('Đây không phải là số');
    $('#soluong').val(1);
    return false;
  }else{
    return true;
  }
}
function addCart(id,sl,st,controller){
  $.ajax({
    url: 'ajax/add_giohang.php',
    type: 'GET',
    data: {id: id, sl:sl, controller: controller},
    //dataType: 'JSON',
    success: function(data){
        if(st==0){
            $('#cart-view').html(data.total);
            $('#cart-view-header').html(data.total);
            $('#cart-view-mobile').html(data.total);
            $('#cart-view-menu').html(data.total);
            $.confirm({
                boxWidth: '300px',
                useBootstrap: false,
                columnClass: 'small',
                type: 'orange',
                title: 'Thông báo đặt hàng',
                content: data.message,
                buttons: {
                close: function(){
                }
            }
          });
        }
        if(st==1){
            window.location.href = 'cart';
        }
    }
  });
}
function cartNew(id,sl){
  var controller = 'newCart' ;
  if(!validateNumber(sl)){
    alert('Đây không phải là số');
    return false;
  }else{
  $.ajax({
    url: 'ajax/add_giohang.php',
    type: 'GET',
    data: {id: id,sl: sl,controller: controller},
    dataType: 'json',
    success: function(data){
      console.log(data); 
      $('.tong'+id).html(data.tong);
      $('#cartSum').html(data.tongtien);
    }
  });
}
}
function connectProduct(id,vt,tt,controller){
  for(i=1;i<5;i++){
    if(i == tt){
      $(".pdt"+i).addClass('pdt-action');
    }else{
      $(".pdt"+i).removeClass('pdt-action');
    }
  }
  $.ajax({
    url: 'ajax/add_giohang.php',
    type: 'GET',
    data: {id: id,vt: vt,controller: controller},
    //dataType: 'JSON',
    success: function(data){
      $('.connectPD').html(data);
    }
  })
}


$(document).ready(function(){
  $('#menu-mobile').mmenu();
  $(".toggle-menu").click(function(){
    $(".menu-sub").toggle(500);
  });
  $(".search-button").click(function(){
    var name = $("#name").val();
    window.location.href = 'tim-kiem/'+name;
  });
  
  $('.slickDetail').slick({
    dots: false,
    infinite: true,
    speed: 300,
    vertical: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
      breakpoint: 1280,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});
  $('.slickProductNB').slick({
		dots: false,
		infinite: true,
		speed: 300,
		vertical: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [{
		    breakpoint: 1280,
		    settings: {
		      slidesToShow: 5,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 1024,
		    settings: {
		      slidesToShow: 4,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 600,
		    settings: {
		      slidesToShow: 3,
		      slidesToScroll: 1
		    }
		  },
		  {
		    breakpoint: 480,
		    settings: {
		      slidesToShow: 2,
		      slidesToScroll: 1
		    }
		  }
		]
	});

  $('.slickProduct').slick({
      dots: false,
      infinite: false,
      speed: 300,
      vertical: false,
      slidesToShow: 9,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [{
          breakpoint: 1280,
          settings: {
            slidesToShow: 9,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 7,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
  });
  $(".page-item").click(function(){
    var id = $(this).attr("rel");
    if(id==1){
      $(".pd-1").css("display","flex");
      $(".pd-2").css("display","none");
    }else{
      $(".pd-1").css("display","none");
      $(".pd-2").css("display","flex");
    }
  });
  $('#btn-order-submit').click(function() {
		var error = true;
		var hoten = $('#hoten').val();
		var diachi = $('#diachi').val();
		var dienthoai = $('#dienthoai').val();
		var email = $('#email').val();
		var ghichu = $('#ghichu').val();
		if(hoten==''){
			error = true;
			alert('Quý khách chưa nhập họ tên');
			return false;
		}else{
			error = false;
		}
		if(dienthoai==''){
			error = true;
			alert('Quý khách chưa nhập điện thoại');
			return false;
		}else{
			if(!validatePhone(dienthoai)){
				error = true;
        alert('Điện thoại không đúng định dạng');
				return false;
			}else{
				error = false;
			}
		}
		if(email==''){
			error = true;
			alert('Quý khách chưa nhập email');
			return false;
		}else{
			if(!validateEmail(email)){
				error = true;
				alert('Email không đúng định dạng');
				return false;
			}else{
				error = false;
			}
		}
		if(diachi==''){
			error = true;
			alert('Quý khách chưa nhập địa chỉ');
			return false;
		}else{
			error = false;
		}
		if(error == false){
			$('#frm-order').submit();
		}else{
			return false;
		}
  });
  $('.minus_giohang').click(function(){
    var number_giohang= $('#soluong').val();
    if(number_giohang>1){
      var number_change = parseInt(number_giohang)-1;
      $('#soluong').val(number_change);
    }
  });
  $('.plus_giohang').click(function(){
     var number_giohang = $('#soluong').val();
      var number_change = parseInt(number_giohang)+1;
      $('#soluong').val(number_change);
  });
  $('#btn-thongtin').click(function() {
		var error = true;
    var dienthoai = $('#dienthoai').val();
		var email = $('#email').val();
    if(!validatePhone(dienthoai)){
      error = true;
      alert('Điện thoại không đúng định dạng');
      return false;
    }else{
      error = false;
    }
    if(!validateEmail(email)){
      error = true;
      alert('Email không đúng định dạng');
      return false;
    }else{
      error = false;
    }
		if(error == false){
			$('#form-thongtin').submit();
		}else{
			return false;
		}
  });
  $('#btn-dk').click(function() {
		var error = true;
    var username = $('#username').val();
		var password = $('#password').val();
    if(username==''){
			error = true;
			alert('Quý khách chưa nhập tài khoản');
			return false;
		}else{
			error = false;
    }
    if(password==''){
			error = true;
			alert('Quý khách chưa nhập password');
			return false;
		}else{
			error = false;
		}
		if(error == false){
			$('#form-dk').submit();
		}else{
			return false;
		}
  });
  $('#btn-ycau').click(function() {
		var error = true;
    var username = $('#username').val();
    if(username==''){
			error = true;
			alert('Quý khách chưa nhập tài khoản');
			return false;
		}else{
			error = false;
    }
		if(error == false){
			$('#form-dk').submit();
		}else{
			return false;
		}
  });
  
});
function checkValue(){
  if($('#password').val() == ''){
    alert('Chưa nhập mật khẩu mới');
    $('#password').focus();
    return false;	
  }
  if($('#repass').val() == ''){
    alert('Chưa nhập lại mật khẩu');
    $('#repass').focus();
    return false;	
  }

  if($('#repass').val() != $('#password').val()){
    alert('Mật khẩu mới và mật khẩu xác nhận chưa trùng khớp');
    $('#repass').focus();
    return false;	
  }
  document.frm_re_pass.submit();
}