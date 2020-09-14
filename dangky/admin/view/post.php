<script>
	$(document).ready(function() {
        $('.delete_images').click(function(){
	      if (confirm('Bạn có muốn xóa hình này ko ? ')) {
            var id = $(this).attr('title');
            var controller = 'productajax';
            var action = 'xoaimg';
            var table = 'post';
	        $.ajax ({
	          type: "GET",
	          url: "ajax/ajax.php",
	          data: {id:id,controller:controller,action:action,table:table},
	          success: function(result) {
	          }
	        });
	        $(this).parent().slideUp();
	      }
	      return false;
	    });
    });
</script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?=@$data['data']['ten']?>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form method="POST" action="index.php?controller=post&action=update&type=<?=$_REQUEST['type']?>" enctype="multipart/form-data">
                            <?php if($_REQUEST['type'] !='slider'){?>
                            <div class="form-group">
                                <textarea id="noidung"  class="ck_editors" name="noidung"><?=@$data['data']['noidung']?></textarea>
                            </div>
                            <?php } else {?>
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="img"><br/>
                                <img src="../<?=@$data['logo']['img']?>" style="width:150px">
                            </div>
                            <div class="form-group" style="border:1px solid #000;padding:20px">
                            <label>Slider</label>
                            <a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif">
                                <div class="jFiler jFiler-theme-dragdropbox"><div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Upload files here</h3></div><span class="jFiler-input-choose-btn btn-custom blue-light">Browse Files</span></div></div></div>
                            </a>
                                <div class="imgitem">
                                <?php if(count($data['slider'])!=0){?>
                                        <?php for($i=0;$i<count($data['slider']);$i++){?>
                                        <div class="item_trich">
                                            <img class="img_trich" src="../img/<?=$data['slider'][$i]['img']?>" />
                                            <input type="text" rel="<?=$$data['slider'][$i]['id']?>" value="<?=$data['slider'][$i]['stt']?>" class="update_stt tipS" />
                                            <a class="delete_images icon-jfi-trash jFiler-item-trash-action" title="<?=$data['slider'][$i]['id']?>" style="color:#FF0000"></a>
                                        </div>
                                        <?php } ?>
                                <?php }?>
                                </div>
                            </div>
                            <?php }?>
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

        