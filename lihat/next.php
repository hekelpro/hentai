<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, scale-initial=1, shrink-to-fit=no">
    <meta name="author" content="Rizky">
    <meta name="description" content="HENTAI">
    <title>Hentai</title>
    <link rel="icon" href="https://i.ibb.co/bLvSgW5/749f8558-d00a-4d65-b495-867f6d924e31.png">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
      }
      body{
        background-color: #283747;
      }
      .sambut{
        color: black;
        border: 10px;
        padding: 10px;
        border-radius: 10px;
        background-color: silver;
        text-align: center;
        margin-top: 5px;
      }
      .list-video{
        padding: 8px;
        border: 20px;
        border-radius: 10px;
        background-color: #7d8087;
        margin-top: 10px
      }
      .list-video img, b{
        display: block;
        margin: auto;
        width: 40%;
        height: 25%;
        border-radius: 10px;
        text-align: center;
        color: white;
      }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
<body>
  <div class="sambut">
    <marquee><b>SELAMAT DATANG, NIKMATI AJA VIDEO YANG ADA</b></marquee>
  </div>
  <?php
  include("../simple_html_dom.php");
  ?>
  <div class="list-video">
  <?php
  function get_link($url, $title){
    ?>
    <h5><?= $title; ?></h5>
    <a href="../chekin/next.php?url=<?= $url; ?>" class="btn btn-primary btn-lg btn-block">LIHAT VIDEO</a>
    <br><hr><br>
    <?php
  }
  
  $live = $_GET["url"];
  if(empty($live)){
    header("Location: ../index.php");
  }elseif (isset($live)) {
    $b = file_get_html($_GET["url"]);
    foreach ($b->find("div[class=thumb]") as $link_img){
      foreach ($link_img->find("img") as $image){
        ?>
        <img src="<?= $image->src; ?>" alt="hentai-img">
        <?php
      }
    }
    foreach ($b->find("h1[class=entry-title]") as $c){
      ?>
      <b><?= $c->plaintext; ?></b>
      <?php
    }
    ?>
    <br><br>
    <?php
    foreach ($b->find("div[class=eplister]") as $epl){
      foreach ($epl->find("li") as $ul){
        foreach ($ul->find("a") as $a){
          foreach ($a->find("div[class=epl-title]") as $title){
            //get_video($a->href, $img, $titel, trim($title->plaintext));
            get_link($a->href, trim($title->plaintext));
          }
        }
      }
    }
    ?>
    </div>
    <?php
  }else{
    header("Location: ../index.php");
  }
  
  ?>
</body>
</html>