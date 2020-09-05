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
  })
}
function cartNew(id,sl){
  var controller = 'newCart' ;
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
  })
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

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
function validatePhone($phone) {
    var filter = /^[0-9-+]{10,11}$/;
    return filter.test($phone);
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
});