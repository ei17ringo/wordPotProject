    <div style="margin-top:120px;">

     <div style="margin-left:15%; margin-bottom:15px;">
      <?php
        echo $this->Form->create();
        echo $this->Form->input('',array('type'=>'text','placeholder'=>'単語から友達を検索'));
        echo $this->Form->button('検索',array('type'=>'submit','class'=>'btn','style'=>'background-color:#ffbd66;'));
        echo $this->Form->end();
        //echo $this->Word->find('all');
        debug($tests);
        debug($word_friends);

      ?>
        <!--<form>
          <input type="text" placeholder="単語から友達を検索">
          <input type="submit" value="検索" class="btn" style="background-color: #ffbd66;">
        </form> -->
      </div>
      <span style="margin-left:15%; margin-bottom:15px; background-color:white; font-weight:bold;">◯◯の検索結果　◯◯件</span>

      <?php foreach($tests as $test): ?>
      <div class="msg" style="background-color:white;">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px; border-radius:24px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="comment"><p><?php echo $test['UserWord']['comment']; ?></p></div> 
      </div>
    <?php endforeach; ?>



<!--      <div class="msg" style="background-color:white;">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="comment">コメント</div> 
      </div>
      <div class="msg" style="background-color:white;">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="comment">コメント</div> 
      </div>
      <div class="msg" style="background-color:white;">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="comment">コメント</div> 
      </div>
      <div class="msg" style="background-color:white;">
          <img width="48px" height="48px"  style="border: 2px solid; float:left; margin-left:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <a>ニックネーム  </a><br />
            <span>rank </span>
          </div>
          <div class="comment">コメント</div> 
      </div>
    </div> -->