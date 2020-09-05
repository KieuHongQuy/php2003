<section id="slider" class="mw-1000">
    <div class="slider-left">
        <ul>
            <?php foreach($dsmenu as $key =>$value){?>
                <li>
                    <a href="product/<?=$value['tendm1']['tenkhongdau']?>"><?=$value['tendm1']['ten']?></a>
                    <?php if(count($dsmenu[$key]['danhmuc2'])){?>
                        <div class="slider-menu">
                        <ul>
                        <?php foreach($dsmenu[$key]['danhmuc2'] as $keysub => $valuesub){?>   
                            <li><a href="product/<?=$value['tendm1']['tenkhongdau']?>/<?=$valuesub['tenkhongdau']?>"><?=$valuesub['ten']?></a>          
                                <?php if(count($dsmenu[$key]['danhmuc3'][$keysub])){?>
                                    <ul>
                                        <?php foreach($dsmenu[$key]['danhmuc3'][$keysub] as $keysup => $valuesup){?>
                                            <li><a href="product/<?=$value['tendm1']['tenkhongdau']?>/<?=$valuesub['tenkhongdau']?>/<?=$valuesup['tenkhongdau']?>"><?=$valuesup['ten']?></a></li>
                                        <?php }?>
                                    </ul>
                                <?php }?>    
                            </li>
                         <?php }?>
                        </ul> 
                        </div>                    
                    <?php }?>
                </li>
            <?php }?>
        </ul>
    </div>
    <div class="slider-right">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:900px;height:433px;overflow:hidden;visibility:hidden;">
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:900px;height:433px;overflow:hidden;">
          <?php for($i=0;$i<count($slider);$i++){ ?>
          <div data-b="0">
              <img data-u="image" src="img/<?=$slider[$i]['img']?>" alt="<?=$slider[$i]['ten']?>"/>
          </div>
          <?php } ?>
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:16px;height:16px;">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="b" cx="8000" cy="8000" r="5800"></circle>
              </svg>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
      </div>
  </div>
    </div>
</section>