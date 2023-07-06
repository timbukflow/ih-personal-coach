<?php include 'config-language.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $lang['personal-coach-title'] ?></title>
  <meta name="description" content="<?php echo $lang['personal-coach-description'] ?>It is scientifically proven that regular physical activity not only kills depression at the root, but also increases mindfulness, concentration and speed of the brain">
  <?php include 'head.php'; ?>
</head>

<body>
  <main id="navchange">
    <section id="personal-coach"> 
      <article data-aos="fade-up" data-aos-duration="2000">
        <header>
          <h1 class="pagetitle"><?php echo $lang['personal-coach-h1-01'] ?><br><?php echo $lang['personal-coach-h1-02'] ?></h1>
          <p><?php echo $lang['personal-coach-p'] ?></p>
        </header>
      </article>
      <div data-aos="fade-up" data-aos-duration="2000" class="pcimgc">
        <img src="./img/im-personal-coach-ilya-mizgirev.jpg" alt="im-personal-coach-ilya-mizgirev">
        <div class="quots">
          <p><?php echo $lang['personal-coach-quots-01'] ?><br><span><?php echo $lang['personal-coach-quots-02'] ?></span> 
          </p>
        </div>
      </div>
      <article data-aos="fade-up" data-aos-duration="2000">
        <h2 class="pagesubtitle"><?php echo $lang['personal-coach-location'] ?></h2>
        <p><?php echo $lang['personal-coach-location-p'] ?></p>
      </article>
      <article data-aos="fade-up" data-aos-duration="2000">
        <h2 class="pagesubtitle"><?php echo $lang['personal-coach-target-groups'] ?></h2>
        <div class="accContainer">
          <h2 class="accTitle"><?php echo $lang['personal-coach-target-groups-family'] ?></h2>
          <div class="accList">
            <p class="negativfont"><?php echo $lang['personal-coach-target-groups-family-p'] ?></p>
          </div>
          <h2 class="accTitle"><?php echo $lang['personal-coach-target-groups-kids-teenager'] ?></h2>
          <div class="accList">
            <p><?php echo $lang['personal-coach-target-groups-kids-teenager-p'] ?></p>
          </div>
          <h2 class="accTitle"><?php echo $lang['personal-coach-target-groups-women-men'] ?></h2>
          <div class="accList">
            <p><?php echo $lang['personal-coach-target-groups-women-men-p'] ?></p>
          </div>
          <h2 class="accTitle"><?php echo $lang['personal-coach-target-groups-senior'] ?></h2>
          <div class="accList">
            <p><?php echo $lang['personal-coach-target-groups-senior-p'] ?></p>
          </div>
        </div>
      </article>
    </section>
    <?php include 'footermenu.php'; ?><style> #fm-personal-coach { display: none; } </style>
  </main>

  <div class="scontainer">
      <div class="slidercolor"></div>
      <div class="slideimg01"></div>
      <div class="slideimg02"></div>
  </div>

  <?php include 'loading.php'; ?>
  <?php include 'menu.php'; ?>
  <?php include 'footer.php'; ?>
  <?php include 'script.php'; ?>
</body>
</html>
