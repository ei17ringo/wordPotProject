<div class="row" style="margin-top:10%;">
    	<div class="col-lg-8 col-lg-offset-2 left" style="margin-bottom:3%;"><h2>まとめて追加</h2></div>
  </div>
	<div class="container">
    <form action = "index">
    <?php for ($i=0; $i <10 ; $i++) : ?>
    <div style="border: 1px solid #c0c0c0; padding:15px; border-radius:10px 10px; width:75%; margin:auto; background:white; margin-bottom:3%;">
        <div style="height:60px;">
          <div style="width:45px; float:left;"><b>重要度</b>
            <div class="rateit1" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1"></div>
            <input type="text" style="margin-right: 30%;" placeholder="英単語">
          </div>
        <textarea placeholder="memo" cols="80" style="height:60px; border:1px #c0c0c0 solid; resize:none; float:right;"></textarea>
        </div>
    </div>
    <?php endfor;?>
  </div>
  
  <div style="margin-bottom:20%;" class="centered">
    <input class="btn" type="submit" value="追加" style="background-color: #ffbd66; width:200px;">
  </div>
</form>