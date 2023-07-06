<?php include 'config-language.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $lang['index-title'] ?></title>
  <meta name="description" content="<?php echo $lang['index-description'] ?>">
  <?php include 'head.php'; ?>
</head>

<body>  
  <header class="home">
    <div class="description"> 
      <h1>
        <?php echo $lang['description'] ?>
        <span><?php echo $lang['description-span'] ?></span>  
      </h1>
    </div>
    </div>
    <div class="scontainer">
      <div class="slidercolor"></div>
      <div class="slideimg01"></div>
      <div class="slideimg02"></div>
    </div>
  </header>

  <main id="navchange">
    <section id="method">
      <article data-aos="fade-up" data-aos-duration="2000">
        <h1 class="pagetitle"><?php echo $lang['method-h1'] ?></h1>
        <p><?php echo $lang['method-p'] ?></p>

        <div class="circleContainer">
          <a id="acbutton">
            <div class="circle c01">
              <h3 class="t01"><?php echo $lang['method-circle-01'] ?></h3>
            </div>
          </a>
          <a href="personal-coach">
            <div class="circle c02">
              <h3 class="t02"><?php echo $lang['method-circle-02'] ?></h3>
            </div>
          </a>
          <a href="nutrition">
            <div class="circle c03">
              <h3 class="t03"><?php echo $lang['method-circle-03'] ?></h3>
            </div>
          </a>
          <a href="movement">
            <div class="circle c04">
              <h3 class="t04"><?php echo $lang['method-circle-04'] ?></h3>
            </div>
          </a>
        </div>

      </article>
      <article data-aos="fade-up" data-aos-duration="2000" id="analysis">
        <h2 class="pagesubtitle"><?php echo $lang['method-analysis'] ?></h2>
        <p><?php echo $lang['method-analysis-p'] ?></p>
      </article>
      <article data-aos="fade-up" data-aos-duration="2000">
        <h2 class="pagesubtitle"><?php echo $lang['method-correction'] ?></h2>
        <p> <?php echo $lang['method-correction-p'] ?></p>
      </article>
    </section>
    <?php include 'footermenu.php'; ?><style> #fm-method { display: none; } </style>
  </main>
  
  <?php include 'loading.php'; ?>
  <?php include 'menu.php'; ?>
  <?php include 'footer.php'; ?>
  <?php include 'script.php'; ?>

</body>
</html>
