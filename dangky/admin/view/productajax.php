<?php if($data['data']){
    if($_GET['kt'] == 1){    
?>
    <div class="form-group">
        <label>Danh mục cấp 2</label>
        <select id="id_cat" class="conso form-control" name="id_cat" onchange="onchangecat()">
            <option value="0">Danh mục cấp 2</option>
            <?php foreach($data['data'] as $val){?>
                <option value="<?=$val['id']?>"><?=$val['ten']?></option>
            <?php }?>
        </select>
    </div>
<?php }else{ ?>
    <div class="form-group">
        <label>Danh mục cấp 2</label>
        <select id="id_cat" class="conso form-control" name="id_cat" onchange="onchangecat()">
            <option value="0">Danh mục cấp 2</option>
            <?php foreach($data['data'] as $val){?>
                <option value="<?=$val['id']?>"><?=$val['ten']?></option>
            <?php }?>
        </select>
    </div>
    <div class="form-group" id="id_item">
        <label>Danh mục cấp 3</label>
        <select id="id_item" class="conso form-control" name="id_item">
            <option value="0">Danh mục cấp 3</option>
        </select>
    </div>
<?php } 
}else{?>
    <label>Danh mục cấp 3</label>
    <select id="id_item" class="conso form-control" name="id_item">
        <option value="0">Danh mục cấp 3</option>
        <?php foreach($data['datacat'] as $val){?>
            <option value="<?=$val['id']?>"><?=$val['ten']?></option>
        <?php }?>
    </select>
<?php }?>