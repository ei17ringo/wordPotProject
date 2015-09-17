<?php                      //model名
echo $this->Form->create('UserProfile', array('action'=>'edit'));

?>

<input type="hidden" name="user_id" value="<?php echo $userprofile["UserProfile"]["user_id"]?>">
<input type="hidden" name="id" value="<?php echo $userprofile["UserProfile"]["id"]?>">
<br><br>  
<div class="container-fluid well span6" style="overflow:hidden;">
  <!--<div class="row-fluid">-->
  <div class="span2" style="float:left;">
    <div>
      <img src="/wordPot/mistery.jpeg" alt="プロフィール画像" class="img-circle" style="width:180px;height:180px;">
    </div>
    <div class="comment" style="clear:both;margin-top:20px;width:180px;"><input type="text" name="nickname" value="<?php echo $userprofile["UserProfile"]["nickname"]?>"></div>
  </div>
  <div style="float:left;margin-left:20px;">
    <div style="float:left;">
      <div class="comment" style="width:250px; height:200px"><input type="text" name="description" value="<?php echo $userprofile["UserProfile"]["description"]?>"></div>
      <div class="span2" style="clear:both;">
        <button class="btn" type="submit" style="background:#ffbd66;margin-top:10px;">SAVE
        
        </button>
      </form>
      </div>
    </div>
  </div>
 
</div>
        
    




  
