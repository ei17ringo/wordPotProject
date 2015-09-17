    <div style="margin-top:50px;">

     <div style="margin-left:15%; margin-bottom:15px;">
      <?php
        echo $this->Form->create();
        echo $this->Form->input('',array('type'=>'text','placeholder'=>'単語から友達を検索'));
        echo $this->Form->button('検索',array('type'=>'submit','class'=>'btn','style'=>'background-color:#ffbd66;'));
        echo $this->Form->end();
        //debug($tests);
        //debug($word_friends);

      ?>
        <!--<form>
          <input type="text" placeholder="単語から友達を検索">
          <input type="submit" value="検索" class="btn" style="background-color: #ffbd66;">
        </form> -->
      </div>
      <span style="margin-left:15%; margin-bottom:15px; background-color:white; font-weight:bold;">◯◯の検索結果　◯◯件</span>

      <?php foreach($word_friends as $word_friend): ?>
      <div class="msg" style="background-color:white; height:90px;">
          <img width="60px" height="60px"  style="border: 2px solid; float:left; margin-left:10px; border-radius:30px;">
          <div style="width:200px; margin:0px; float:left;">
            <div style="padding-bottom:20px; padding-left:40px;">
              <a style=><?php echo $word_friend['UserProfile']['nickname']; ?></a><br />
            </div>
            <div style="padding-left:40px;">
              <span>ランク：<?php echo $word_friend['UserProfile']['rank']; ?></span>
            </div>
          </div>
          <div>検索した英単語</div>
          <div class="comment"><p><?php echo $word_friend['UserWord']['comment']; ?></p></div> 
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