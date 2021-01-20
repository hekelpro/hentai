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
      }
      .list-video iframe{
        display: block;
        margin: auto;
      }
      a{
        margin-top: 10px;
      }
    </style>
  </head>
<body>
  <div class="sambut">
    <marquee><b>SELAMAT DATANG, NIKMATI AJA VIDEO YANG ADA</b></marquee>
  </div>
  <div class="list-video">
    <?php
    include("../simple_html_dom.php");
    $nice = $_GET["url"];
    if(empty($nice)){
      header("Location: ../index.php");
    }
    $cek = file_get_html($nice);
    foreach ($cek->find("h1[class=entry-title]") as $judul){
      $judl = $judul->plaintext;
    }
    foreach ($cek->find("div[class=player-embed]") as $vid){
      foreach ($vid->find("iframe") as $frame){
        $video = $frame->src;
      }
    }
    ?>
    <iframe src="<?= $video; ?>" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
    <b><?= $judl; ?></b>
    <br><br><a href="../index.php" class="btn btn-primary btn-lg btn-block">KEMBALI KE HOME</a>
  </div>
</body>
</html>