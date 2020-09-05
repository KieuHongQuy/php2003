<?php 
    session_start();
    $config_url=$_SERVER["SERVER_NAME"].':8080/dangky/admin';
    @define("_config_url",$config_url);
    include_once "../config/classdatabase.php";
    include_once "./controller/custom.php";
    include_once "./routeradmin.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình PHP">
    <meta name="author" content="">
    <title>Admin PHP 2020</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="less/button_hienthi.css" rel="stylesheet">
    <link href="js/multiupload/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="js/multiupload/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <?php if($_SESSION['username']){?>
        <div id="wrapper">
            <?php include "./view/left.php"?>
            <?php include "./view/".$data['view'].".php"?>
        </div>
    <?php }else{?>
        <?php include "./view/".$data['view'].".php"?>
    <?php }?>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/multiupload/jquery.filer.min.js"></script>
    <script src="js/js.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script>
	$(document).ready(function() {
		$('.ck_editors').each(function(index, el) {
			var id = $(this).attr('id');
			CKEDITOR.replace( id, {
			height : 400,
			entities: false,
			skin: 'moono',
	        basicEntities: false,
	        entities_greek: false,
	        entities_latin: false,
			filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
			filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
			filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			allowedContent:
				'h1 h2 h3 h4 h5 h6 p blockquote strong em;' +
				'a[!href];' +
				'img(left,right)[!src,alt,width,height];' +
				'table tr th td caption;' +
				'span{!font-family};' +
				'span{!color};' +
				'span(!marker);' +
				'del ins'
			});

		});

	});
	
</script>
<script>
  $(document).ready(function() {
    $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text"style="width:100%" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" style="width:100%" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });
        $('.conso').priceFormat({
            limit: 13,
            prefix: '',
            centsLimit: 0
	    });
  });
</script>
</body>

</html>
