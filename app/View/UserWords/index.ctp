<div style="margin: 120px;">
      <h3 style="margin:25px 0px 30px 0px; text-decoration: underline;">あなたの単語帳    </h3>
      <div style="float:right;">
        <input type="text" placeholder="単語帳から検索">
        <input type="submit" value="検索">
      </div>
      <div>
        <button class="btn" style="background-color: #ffbd66;">まとめて追加</button>
      </div>
      <div style="border: 1px solid #c0c0c0; margin: 15px 30px 30px 0px; padding:15px; border-radius:15px 15px; background-color:white;">
        <div>おてがる追加</div>
        <form>
          <div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" style="margin-right:20px;"></div>
          <input type="text" placeholder="英単語">
          <textarea placeholder="メモ" cols="80" style="margin-left:20px;　border: 1px #c0c0c0;"></textarea>
          <input class="btn" type="submit" value="追加" style="margin-left:20px; background-color: #ffbd66;">
        </form>
      </div>

      <table class="table" style="background-color:white;">
      <tabl>
        <tr>
          <th>番号</th>
          <th>重要度</th>
          <th>英単語</th>
          <th>意味</th>
          <th></th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($userwords as $userword): ?>
        
          <tr>
            <td><?php echo $i; ?></td>
            <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1" data-rateit-value="<?php echo $userword['UserWord']['rank']; ?>"></div></td>
            <td><a><?php echo $userword['Word']['word']; ?></a></td>
            <td id="meaning">〈人に〉胸を悪くさせる</td>
            <td><button class="btn btn-default">編集</button></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
        <!-- <tr>
          <td>2</td>
          <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1"></div></td>
          <td><a>confirm</a></td>
          <td id="meaning">〈陳述・証拠・うわさなどを〉(正しいと)確かめる</td>
          <td><button class="btn btn-default">編集</button></td>
        </tr>
        <tr>
          <td>1</td>
          <td><div class="rateit1" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="3" data-rateit-step="1"></div></td>
          <td><a>apply</a></td>
          <td id="meaning">〈規則・原理などを〉〔…に〕適用する</td>
          <td><button class="btn btn-default">編集</button></td>
        </tr>-->
      </table>
    </div> 
