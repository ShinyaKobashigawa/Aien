<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <title>AIEN</title>
</head>

<!-- top -->

<div class="wrap-video">
  
  <div class="text">
    <p>AIEN</p>
    <p>COFFEE & HOSTEL</p>
  </div>
  
  <video src="<?php echo get_template_directory_uri(); ?>/video/sample-video.mp4" muted autoplay loop></video>
  <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/TIqDj8zhfa0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

</div>

<nav class="menu_bar">
  <ul>
    <li><a href="">ホーム</a></li>
    <li><a href="">ホステル</a></li>
    <li><a href="">イベント</a></li>
    <li><a href="">ブログ</a></li>
    <li><a href="">予約・問い合わせ</a></li>
  </ul>
</nav>

<div class="manth">
  <div class="manth2">
  <h1 class="title">今月の予定</h1>
    <div class="plan">
      <div class="sentence">
        <p>【GoToトラベル適用！】</p><br><br>
        <p>巷で話題のGoToトラベル</p><br>
        <p>長い審査を経て、この度</p><br>
        <p>直接予約も適用となりました！！</p><br>
        <p>AIEN 公式HPからご予約すると</p><br>
        <p>≪35％オフ≫となります！！</p><br>
      </div>
    </div>
  </div>



  <div class="manth2">
  <h1 class="title">イベント</h1>
    <div class="plan">
      <div class="sentence">
        <p>【Shopifyパートナー交流会】</p><br>
        <p>Shopifyを仕事にしている人</p><br>
        <p>またはShopifyをこれから仕事にしたい方の</p><br>
        <p>交流イベントを開催します</p><br>
      </div>
    </div>
  </div>



  <div class="manth2">
  <h1 class="title">お知らせ</h1>
    <div class="plan">
      <div class="sentence">
        <p>【3rd Anniversary】</p><br>
        <p>合縁奇縁の4年目になりました</p><br>
        <p>4年目のAIENも</p><br>
        <p>何卒宜しくお願い致します</p><br>
      </div>
    </div>
  </div>
</div>

<!-- top終了 -->


<!-- under -->

 <div>
   <h4 class="b_title">ブログ</h4>
  <ul class="b_list">
    <li> <img src="<?php echo get_template_directory_uri(); ?>/img/s_IMG_3902.jpg"></li>
    <li> <img src="<?php echo get_template_directory_uri(); ?>/img/top_1000.jpg"></li>
    <li> <img src="<?php echo get_template_directory_uri(); ?>/img/slider_009.jpg"></li>
  </ul>
  <div class="contents">
    <div class="form">
    <h4 class="contact">お問い合わせ</h4>
    <p>お名前</p>
    <input>
    <p>メールアドレス</p>
    <input>
    <p>件名</p>
    <input>
    <p>お問い合わせ内容</p>
    <textarea></textarea><br>
    <input class="contact-submit" type="submit" value="送信">
  </div>
    <!-- <div class='google'>   
    <h4 class="map">Map</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.121807276513!2d127.74854431538338!3d26.32255498338533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e513095c6cac17%3A0xdee52072b0e5e896!
  2z44Ki44Kk44Ko44OzIOOCs-ODvOODkuODvO-8huODm-OCueODhuODqw!5e0!3m2!1sja!2sjp!4v1606908642650!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div> -->
  </div>
  <div class="footer">
    <div class="footer_top">
    
      <div class='booking'>	<a href="" class="btn btn-default btn-rounded m-0 booking_title" data-toggle="modal" data-target="#modalContactForm">
        予約</a>	<!-- <li class="nav-item"> -->
        <a class="nav-link disabled" href="#"><div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Booking</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
              <div class="md-form mb-5">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="form34" class="form-control validate">
              <label data-error="wrong" data-success="right" for="form34">Your name</label>
              </div>
          
              <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="email" id="form29" class="form-control validate">
              <label data-error="wrong" data-success="right" for="form29">Your email</label>
              </div>
          
              <div class="md-form mb-5">
              <i class="fas fa-tag prefix grey-text"></i>
              <input type="text" id="form32" class="form-control validate">
              <label data-error="wrong" data-success="right" for="form32">Subject</label>
              </div>
          
              <div class="md-form">
              <i class="fas fa-pencil prefix grey-text"></i>
              <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
              <label data-error="wrong" data-success="right" for="form8">Your message</label>
              </div>
          
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
            </div>
          </div>
          </div>
          </div>
          <div class="page_top"><a href="#">ページトップに戻る</a></div>
    </div>
    <div class="footer_bottom">
      <div class="reserves">© Copyright Aien All rights reserved.</div>
      <div class="sns">
     <a href="#"><i class="fab fa-facebook-f light-green-text-2" style="color:#9696b3;"></i></a>
      <a href="#"><i class="fab fa-twitter light-green-text-2" style="color:#9696b3;"></i></a>
      <a href="#"><i class="fab fa-instagram light-green-text-2" style="color:#9696b3;"></i></a>
      </div>
      <div class="info"><a href="#">About Aien</a></div>
    </div>
  </div>
  


 </div>






<!-- under終了 -->
</body>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>