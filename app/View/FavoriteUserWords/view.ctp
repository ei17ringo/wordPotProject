<div style="margin-top:10%;">
  <div class="col-sm-2" style="margin-top:10%;">
        <div style="border:1px solid #c0c0c0; border-radious:10px 10px; background:white; width:50%;margin:0 70%;">
        <span>カテゴリー一覧</span>
      <ul style="line-height:2rem;">
        <?php 
        $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];?>
        <?php for ($i=0; $i < 26; $i++) : ?>
        <li><a><?php echo $alphabet[$i]?></a></li>
      </ul>
    </div>
  </div>
  
  <div class="row container col-sm-10">
        
    <div style="margin-right:auto;margin-left:auto;width:70%;">
      <span class="col-lg-8 col-lg-offset-2 left"><h1><b>WORD</b>
        <a class="right" style="font-size:2rem;font-weight:initial;"><i class="glyphicon glyphicon-thumbs-up">LIKE</i></a>
          </h1>
      </span>
      <h3 style="clear:both;">重要度</h3>
      <div id="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1"></div>
      <h3>意味・例文</h3>
      <textarea style="width:600px; height:200px; resize:none; margin-right:auto;"></textarea>
      <h3>メモ</h3>
      <form class="form-horizontal" style="margin-bottom:50px;">
        <label class="control-label" for="text"></label>
        <textarea style="width:600px; height:100px; resize:none; margin-right:auto;"></textarea>
      </form>
    </div>
  </div>
</div>
  <section id="contact"></section>