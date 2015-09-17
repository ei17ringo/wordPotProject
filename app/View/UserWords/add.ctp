<div style="margin:120px;">
  <h3 style="margin:25px 0px 30px 0px; text-decoration: underline;">まとめて追加</h3>
  <form method = "post">
    <input class="btn" type="submit" value="追加" style="background-color: #ffbd66; width:100px;">
    <?php for ($i=0; $i <10 ; $i++) : ?>
    <div style="border: 1px solid #c0c0c0; margin: 15px 30px 30px 0px; padding:15px; border-radius:10px 10px; background-color:white;">
      <b>重要度</b>
      <div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" style="margin-right:20px;"></div>
      <input type="text" placeholder="英単語" name="data[<?php echo $i; ?>][Word][word]">
      <textarea placeholder="memo" cols="80" style="margin-left:auto; width:70%; border:1px #c0c0c0 solid;" name="data[<?php echo $i;?>][UserWord][comment]"></textarea>
    </div>
  <?php endfor;?>
</div>
  
<div style="margin-bottom:20%;" class="centered">
  <input class="btn" type="submit" value="追加" style="background-color: #ffbd66; width:200px;">
</div>
</form>