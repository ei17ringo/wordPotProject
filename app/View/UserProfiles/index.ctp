
<br><br>  

<div style="margin:120px;">
  <div class="container-fluid well span6" style="overflow:hidden;">
  <!--<div class="row-fluid">-->
    <div class="span2" style="float:left;">
      <div>
        <?php if($userprofile["UserProfile"]["picture"] == ""){ ?>
        <img src="/wordPot/mistery.jpeg" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
        <?php }else{ ?>
        <img src="/wordPot/memberpicture/<?php echo $userprofile["UserProfile"]["picture"] ?>" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
        <?php } ?>
      </div>
      <h2><div class="text" style="clear:both;margin-top:20px;"><?php echo $userprofile["UserProfile"]["nickname"]?></div></h2>
      <h2><div class="text" style="clear:both;"><img src="/wordPot/ico_gold.gif" style="width:35px;margin-right:5px;margin-bottom:7px;"><?php echo $userprofile["UserProfile"]["rank"]?>位</div></h2>
    </div>
    <div style="float:left;margin-left:20px;">
      <div style="float:left;">
        <div class="comment" style="width:250px; height:200px"><?php echo $userprofile["UserProfile"]["description"]?></div>
        <div class="span2" style="clear:both;">
        <button class="btn" type="submit" style="background:#ffbd66;margin-top:10px;"><?php
          echo $this->Html->link('EDIT',
           array('controller' => 'UserProfiles', 'action' => 'edit')
          );
            ?>
        </button>
        </div>
      </div>
    </div>
    <div class="text" style="clear:both;">
      <div style="margin-top:340px;"><h4>単語帳一覧</h4></div>
      <table class="table" style="background-color:white;">
          <tr>
            <th>番号</th>
            <th>重要度</th>
            <th>英単語</th>
          </tr>
          <?php $i=1; ?>
          <?php foreach($userwords as $userword): ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userword["UserWord"]["rank"]?>"></div></td>
            <td><a><?php echo $userword['Word']['word']; ?></a></td>
            <?php $i++; ?>
            <?php endforeach; ?>
          </tr>
      </table>
    </div>
  </div>
</div>

        
  
 


 

