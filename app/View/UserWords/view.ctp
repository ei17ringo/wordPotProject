<script>
  $(function(){
    $(".rateit1").rateit();
    $("#rate0").bind('rated', function(){
    });
  });
</script>
<div style="margin: 0 auto;">
  <h3 style="margin:25px 0px 30px 0px; text-decoration: underline;">単語詳細ページ</h3>
 <!-- <div class="col-sm-2">
    <div style="border:1px solid #c0c0c0; border-radious:10px 10px; background:white; width:50%;margin:1% 70%;">
      <span>カテゴリー一覧</span>
      <ul style="line-height:2rem;">
       <?php 
       // $alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        ?>
        <?php for ($i=0; $i < 26; $i++) : ?>
        <li><a><?php // echo $alphabet[$i];?></a></li>
        <?php endfor; ?>
        </ul>
    </div>
  </div> -->

  <div style="width:80%;">
    <form action="/wordPot/user_words/edit/<?php echo $userwords['UserWord']['id']?>">
    
    <div style="argin-left:auto;">
      <div>
        <h1><b><?php echo $userwords['Word']['word'];?></b></h1>
        <input class="btn" type="submit" value="編集" style="background-color: #ffbd66; width:90px; margin-left:80%;">
      </div>
      <h3 style="clear:both;">重要度</h3>
      <div class="rateit1" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userwords['UserWord']['rank'];?>"></div>
      <h3>意味・例文</h3>
      <div class="comment" style="width:90%; height:auto; resize:none; margin-right:auto; margin-bottom:5%; background-color:white;">
        <?php echo $meaning['Body']['div']['div']; ?>
      </div>
      <h3 style="clear:both;">メモ</h3>
      <label class="control-label" for="text"></label>
      <div class="comment" style="width:90%; height:auto; resize:none; margin-right:auto; background-color:white;"><?php echo $userwords['UserWord']['comment']; ?></div>
    </div>
    
    </form>
  </div>  
</div>