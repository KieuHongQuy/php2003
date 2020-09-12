<?php if($data['data']){ 
?>
    <div class="form-group">
        <label>Danh mục cấp 2</label>
        <select id="id_cat" class="conso form-control" name="id_cat" onchange="select_cat()">
            <option value="0">Danh mục cấp 2</option>
            <?php foreach($data['data'] as $val){?>
                <option value="<?=$val['id']?>"><?=$val['ten']?></option>
            <?php }?>
        </select>
    </div>
<?php }?>