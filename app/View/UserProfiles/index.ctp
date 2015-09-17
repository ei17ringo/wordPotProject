
<br><br>  
<div class="container-fluid well span6" style="overflow:hidden;">
  <!--<div class="row-fluid">-->
  <div class="span2" style="float:left;">
    <div>
      <img src="/wordPot/mistery.jpeg" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
    </div>
    <div class="comment" style="clear:both;margin-top:20px;width:180px;"><?php echo $userprofile["UserProfile"]["nickname"]?></div>
    <div class="comment" style="clear:both;margin-top:10px;width:70px;"><?php echo $userprofile["UserProfile"]["rank"]?></div>
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
  <div class="comment" style="clear:both;width:450px;height:350px;margin-top:20px;">単語帳一覧</div>
</div>
        
  
 


 

