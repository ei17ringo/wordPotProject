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
      <h3 style="margin:25px 0px 20px 0px; text-decoration: underline;">タイムライン    </h3>


<div id="scroll-box">
<?php
  //debug($userwords);
  $i = 0;
  foreach ($userwords as $userword) { ?>
      

      <div class="msg" id ="target<?php echo $i; ?>" style="background-color:white; height:100px;">
          <img width="60px" height="60px"  style="border: 2px solid; float:left; margin-left:10px; border-radius:30px; margin-top:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <div style="padding-bottom:20px; padding-left:40px; margin-top:10px;">
              <a style><?php echo $userword['User']['username']?></a><br />
            </div>
            <div style="padding-left:40px;">
              <span>ランク：<?php echo $userword['UserWord']['rank']?></span>
            </div>
          </div>
          <div style="font-size:120%; margin-bottom:5px;"><?php echo $userword['Word']['word']?></div>
          <div class="comment"><p><?php echo $userword['UserWord']['comment']; ?></p></div> 
      </div>

<?php
  $i++;    
  }
?>
      </div>
    </div>

</div>