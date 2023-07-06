<?php include 'config-language.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $lang['nutrition-title'] ?></title>
  <meta name="description" content="<?php echo $lang['nutrition-description'] ?>">
  <?php include 'head.php'; ?>
</head>

<body>
  <main id="navchange">
    <section id="nutrition"> 
      <article>
        <header data-aos="fade-up" data-aos-duration="2000">
          <h1 class="pagetitle"><?php echo $lang['nutrition-h1'] ?></h1>
          <p><?php echo $lang['nutrition-p'] ?></p>
        </header>
      </article>

      <div id="supplements" data-aos="fade-up" data-aos-duration="2000">
        <div class="supinfo" id="supinfo01">
          <h2><?php echo $lang['nutrition-supplements-protein'] ?></h2>
          <p><?php echo $lang['nutrition-supplements-protein-p-01'] ?> <br><br> <?php echo $lang['nutrition-supplements-protein-p-02'] ?></p>
          <img src="./img/cross-g.svg" alt="cross" width="20px" height="20px">
        </div>
        <div class="supinfo" id="supinfo02">
          <h2><?php echo $lang['nutrition-supplements-carbohydrates'] ?></h2>
          <p><?php echo $lang['nutrition-supplements-carbohydrates-p'] ?></p>
          <img src="./img/cross-g.svg" alt="cross" width="20px" height="20px">
        </div>
        <div class="supinfo" id="supinfo03">
          <h2><?php echo $lang['nutrition-supplements-fat'] ?></h2>
          <p><?php echo $lang['nutrition-supplements-fat-p'] ?></p>
          <img src="./img/cross-g.svg" alt="cross" width="20px" height="20px">
        </div>
        <div class="supinfo right" id="supinfo04">
          <h2><?php echo $lang['nutrition-supplements-vitamins'] ?></h2>
          <p><?php echo $lang['nutrition-supplements-vitamins-p'] ?></p>
          <img src="./img/cross-g.svg" alt="cross" width="20px" height="20px">
        </div>
        <div class="supinfo right" id="supinfo05">
          <h2><?php echo $lang['nutrition-supplements-minerals'] ?></h2>
          <p><?php echo $lang['nutrition-supplements-minerals-p'] ?></p>
          <img src="./img/cross-g.svg" alt="cross" width="20px" height="20px">
        </div>
        <div class="supinfo right" id="supinfo06">
          <h2><?php echo $lang['nutrition-supplements-water'] ?></h2>
          <p><?php echo $lang['nutrition-supplements-water-p'] ?></p>
          <img src="./img/cross-g.svg" alt="cross" width="20px" height="20px">
        </div>
        <div class="supplus pos01" data-target="#supinfo01"><img src="./img/cross.svg" alt="cross" width="21" height="21"></div>
        <div class="supplus pos02" data-target="#supinfo02"><img src="./img/cross.svg" alt="cross" width="21" height="21"></div>
        <div class="supplus pos03" data-target="#supinfo03"><img src="./img/cross.svg" alt="cross" width="21" height="21"></div>
        <div class="supplus pos04" data-target="#supinfo04"><img src="./img/cross.svg" alt="cross" width="21" height="21"></div>
        <div class="supplus pos05" data-target="#supinfo05"><img src="./img/cross.svg" alt="cross" width="21" height="21"></div>
        <div class="supplus pos06" data-target="#supinfo06"><img src="./img/cross.svg" alt="cross" width="21" height="21"></div>
        <img class="nimg" src="./img/im-personal-coach-nutrition-02.jpg" alt="im-personal-coach-nutrition">
        <img class="nimg resphiden" src="./img/im-personal-coach-nutrition-lachs-01.jpg" alt="im-personal-coach-nutrition-lachs">
      </div>
      <article data-aos="fade-up" data-aos-duration="2000">
        <h2 class="pagesubtitle"><?php echo $lang['nutrition-your-personal-meal-plan'] ?></h2>
        <div data-aos="fade-up" data-aos-duration="2000" class="three">
          <svg class="nicon" viewBox="0 0 161 281">
            <circle  cx="80.5" cy="200.5" r="80"/>
            <circle  cx="80.5" cy="80.5" r="80"/>
            <path d="M80.5,92.1c0,0-32,46.3-32,64s14.3,32,32,32s32-14.3,32-32	S80.5,92.1,80.5,92.1z"/>
          </svg>
          <h2><?php echo $lang['nutrition-01-icon'] ?></h2>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="three">
          <svg class="nicon" viewBox="0 0 161 281">
            <circle  cx="80.5" cy="200.5" r="80"/>
            <circle  cx="80.5" cy="80.5" r="80"/>
            <line x1="101.1" y1="80.5" x2="61.1" y2="80.5"/>
            <line x1="101.1" y1="200.5" x2="61.1" y2="200.5"/>
            <line x1="81.1" y1="220.5" x2="81.1" y2="180.5"/>
          </svg>
          <h2><?php echo $lang['nutrition-02-icon'] ?></h2>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="three">
          <svg class="nicon" viewBox="0 0 161 281">
            <circle  cx="80.5" cy="200.5" r="80"/>
            <circle  cx="80.5" cy="80.5" r="80"/>
            <path d="M2.9,220.1c16-22.7,25.3-50.4,25.3-80.3c0-29.7-9.3-57.3-25-79.9"/>
            <path d="M157.7,59.4c-16,22.7-25.3,50.4-25.3,80.3c0,30.1,9.5,57.9,25.6,80.7"/>
          </svg>
          <h2><?php echo $lang['nutrition-03-icon'] ?></h2>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="three">
            <svg class="nicon" viewBox="0 0 161 281">
              <circle  cx="80.5" cy="200.5" r="80"/>
              <circle  cx="80.5" cy="80.5" r="80"/>
              <path d="M94.5,1c0,12.7-28,12.7-28,25.4c0,12.7,28,12.7,28,25.4
              c0,12.7-28,12.7-28,25.4c0,12.7,28,12.7,28,25.4c0,12.7-28,12.7-28,25.4c0,12.7,28,12.7,28,25.4c0,12.7-28,12.7-28,25.4
              c0,12.7,28,12.7,28,25.4c0,12.7-28,12.7-28,25.4c0,12.7,28,12.7,28,25.4c0,12.7-28,12.7-28,25.4"/>
            </svg>
            <h2><?php echo $lang['nutrition-04-icon'] ?></h2>
          </div>
      </article>
    </section>
    <?php include 'footermenu.php'; ?><style> #fm-nutrition { display: none; } </style>
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
