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

        <?php
          if($current_id == $userprofile["UserProfile"]["user_id"]) {
          echo '<button class="btn" type="submit" style="background:#ffbd66;margin-top:10px;" onclick="location.href=\'/wordPot/user_profiles/edit?id='.$userprofile["UserProfile"]["user_id"].'\'">編集</button>';}
        ?>
        </div>
      </div>
    </div>
    
  </div>
</div>

        
  
 


 

