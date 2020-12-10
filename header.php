<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <title>AIEN</title>
</head>

<!-- top -->

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/scroll.js'></script>
  
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

<!-- <h1 class="wp">最新の投稿</h1> -->

<?php if (have_posts()): ?>
  <!-- <h2 class="subtitle">最新の投稿</h2> -->

<div class="manth">
  <div class="manth2">
  <h1 class="title">今月の予定</h1>
    <div class="plan">
      <div class="sentence">
      <ul>
      <!-- while (繰り返しの条件。条件が満たされたら繰り返す) -->
      <!-- have_post()投稿された記事が存在する間 -->
      <!-- the_post();記事を一つ取り出してつい変えるようにする -->
      <?php query_posts("cat=7&showposts=1"); ?>
        <?php while (have_posts()): the_post(); ?>
          <li id="post-<?php the_ID(); ?>" class="news">
            <p>
              <a href="#"><?php the_title(); //タイトル ?></a>
            </p>

            <p>
              <!-- こんにちは！寒い日が続いていますが... -->
              <?php the_excerpt(); //本文伐採 ?>
              <a href="<?php the_permalink(); //詳細へのリンク ?>">続きを読む</a>
            </p>
          </li>

        <?php endwhile; ?>
      </ul>
<?php else: ?>
  <h2 class="subtitle">投稿はありません</h2>
<?php endif; ?>

        <!-- <p>【GoToトラベル適用！】</p><br><br>
        <p>巷で話題のGoToトラベル</p><br>
        <p>長い審査を経て、この度</p><br>
        <p>直接予約も適用となりました！！</p><br>
        <p>AIEN 公式HPからご予約すると</p><br>
        <p>≪35％オフ≫となります！！</p><br> -->



      </div>
    </div>
  </div>

  


<?php if (have_posts()): ?>
  <div class="manth2">
  <h1 class="title">イベント</h1>
    <div class="plan">
      <div class="sentence">
      <ul>
      <!-- while (繰り返しの条件。条件が満たされたら繰り返す) -->
      <!-- have_post()投稿された記事が存在する間 -->
      <!-- the_post();記事を一つ取り出してつい変えるようにする -->
      <?php query_posts("cat=6&showposts=1"); ?>
        <?php while (have_posts()): the_post(); ?>
          <li id="post-<?php the_ID(); ?>" class="news">
            <p>
              <a href="#"><?php the_title(); //タイトル ?></a>
            </p>

            <p>
              <!-- こんにちは！寒い日が続いていますが... -->
              <?php the_excerpt(); //本文伐採 ?>
              <a href="<?php the_permalink(); //詳細へのリンク ?>">続きを読む</a>
            </p>
          </li>

        <?php endwhile; ?>
      </ul>
<?php else: ?>
  <h2 class="subtitle">投稿はありません</h2>
<?php endif; ?>
        <!-- <p>【Shopifyパートナー交流会】</p><br>
        <p>Shopifyを仕事にしている人</p><br>
        <p>またはShopifyをこれから仕事にしたい方の</p><br>
        <p>交流イベントを開催します</p><br> -->
      </div>
    </div>
  </div>


<?php if (have_posts()): ?>
  <div class="manth2">
  <h1 class="title">お知らせ</h1>
    <div class="plan">
      <div class="sentence">
      <ul>
      <!-- while (繰り返しの条件。条件が満たされたら繰り返す) -->
      <!-- have_post()投稿された記事が存在する間 -->
      <!-- the_post();記事を一つ取り出してつい変えるようにする -->
      <?php query_posts("cat=5&showposts=1"); ?>
        <?php while (have_posts()): the_post(); ?>
          <li id="post-<?php the_ID(); ?>" class="news">
            <p>
              <a href="#"><?php the_title(); //タイトル ?></a>
            </p>

            <p>
              <!-- こんにちは！寒い日が続いていますが... -->
              <?php the_excerpt(); //本文伐採 ?>
              <a href="<?php the_permalink(); //詳細へのリンク ?>">続きを読む</a>
            </p>
          </li>

        <?php endwhile; ?>
      </ul>
<?php else: ?>
  <h2 class="subtitle">投稿はありません</h2>
<?php endif; ?>
        <!-- <p>【3rd Anniversary】</p><br>
        <p>合縁奇縁の4年目になりました</p><br>
        <p>4年目のAIENも</p><br>
        <p>何卒宜しくお願い致します</p><br> -->
      </div>
    </div>
  </div>
</div>

<!-- top終了 -->