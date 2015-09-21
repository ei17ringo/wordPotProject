<style>
  #scroll-box {
    height: 400px;
    overflow: hidden;
    overflow-y: scroll;
    border: 1px solid #ccc;
    padding: 0 20px;
  }
</style>
<script>
jQuery(function($){
  var id = 0;
  var target = $('#scroll-box');
  setInterval(function(){
    if (id > 20) {
      return;
    }
    target.animate({ scrollTop: $('#target' + id).offset().top -55}, 'slow');
    id++;
  }, 1000);
});
</script>

<div style="margin: 120px;">
  <div style="margin-bottom:10px;">
    <input type="text" name="example2" size="30" maxlength="30" value="word">

    <input type="text" name="example2" size="30" maxlength="30" value="comments">
    <button type="button" name="aaa" value="aaa">
    <font size="2">share!</font>
    </button>
  </div>

<div id="scroll-box">
<?php
  //debug($userwords);
  $i = 0;
  foreach ($userwords as $userword) { ?>
      <div class="msg" id ="target<?php echo $i; ?>">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a><?php echo $userword['User']['username']?></a><br />
            <span><?php echo $userword['UserWord']['rank']?></span>
          </div>
          <div class="new word"><?php echo $userword['Word']['word']?></div>
          <div class="comment"><?php echo $userword['UserWord']['comment']; ?></div> 
          <input type="submit" value="★" class="btn" style="background-color: #ffbd66;">
      </div>    
<?php
  $i++;    
  }
?>
</div>

      <div class="msg">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="new word">new word</div>
          <div class="comment">コメント</div> 
          <input type="submit" value="★" class="btn" style="background-color: #ffbd66;">
      </div>
      <div class="msg">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="new word">new word</div>
          <div class="comment">コメント</div> 
          <input type="submit" value="★" class="btn" style="background-color: #ffbd66;">
      </div>
      <div class="msg">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="new word">new word</div>
          <div class="comment">コメント</div>
          <input type="submit" value="★" class="btn" style="background-color: #ffbd66;"> 
      </div>
      <div class="msg">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="new word">new word</div>
          <div class="comment">コメント</div>
          <input class="hoshi" type="submit" value="★" class="btn">
      </div>
      <div class="msg">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="new word">new word</div>
          <div class="comment">コメント</div>
          <input type="submit" value="★" class="btn" style="background-color: #ffbd66;">
      </div>
    </div>