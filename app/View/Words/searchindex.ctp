    <div style="margin-top:120px;">

     <div style="margin-left:15%; margin-bottom:15px;">
      <?php
        echo $this->Form->create();
        echo $this->Form->input('word',array('type'=>'text','placeholder'=>'単語から友達を検索','label'=>false,'div'=> false,'style'=>'width:300px; height:40px; border:solid 1px;' ));
        echo $this->Form->button('検索',array('type'=>'submit','class'=>'btn','style'=>'background-color:#ffbd66; left-margin:10px; height:40px;'));
        echo $this->Form->end();
        //debug($tests);
        //debug($word_friends);

      ?>
        <!--<form>
          <input type="text" placeholder="単語から友達を検索">
          <input type="submit" value="検索" class="btn" style="background-color: #ffbd66;">
        </form> -->
      </div>
      <span style="margin-left:15%; margin-bottom:15px; background-color:white;"><span style="font-weight:bold;">&quot<?php echo $searched_word; ?>&quot</span>の検索結果</span>

      <?php foreach($word_friends as $word_friend): ?>
      <div class="msg" style="background-color:white; height:100px;">
          <img src="/wordPot/memberpicture/<?php echo $word_friends['UserProfile']['picture']; ?>" width="60px" height="60px"  style="border: 2px solid; float:left; margin-left:10px; border-radius:30px; margin-top:10px;">
          <div style="width:200px; margin:0px; float:left;">
            <div style="padding-bottom:20px; padding-left:40px; margin-top:10px;">
              <a href="/wordPot/user_profiles/index/<?php echo $userword['UserWord']['user_id']; ?>"><?php echo $word_friend['UserProfile']['nickname']; ?></a><br />
            </div>
            <div style="padding-left:40px;">
              <span>ランク：<?php echo $word_friend['UserProfile']['rank']; ?></span>
            </div>
          </div>
          <div style="font-size:120%; margin-bottom:5px;"><?php echo $word_friend['Word']['word']; ?></div>
          <div class="comment"><p><?php echo $word_friend['UserWord']['comment']; ?></p></div> 
      </div>
    <?php endforeach; ?>
  </div>



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