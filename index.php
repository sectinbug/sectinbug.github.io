<?php require('lib/ere.php');?>
<!DOCTYPE html><html lang="ko"><head><meta charset="utf-8">
    <link href="/css/visage.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/img/er icon.jpg" sizes="32x32" >
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="154495534202-b887gtbg7hhn0rvcl5bsa5t2ph1g59k8.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- <script src="/js/ggle_login_strt.js"></script>
    <script src="/js/tag_mov.js"></script>
    <script src="/js/tst_mov_motion.js"></script> -->
    <script src="/js/ere.js"></script>
    <title><?php wottl(); ?></title>
  </head>
  <body>
    <h1><a href="index.php">web</a></h1>
    <ol><?php wolist(); ?></ol>
    <a href="create.php">추__가</a>
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">수__정?ㅋ</a>
    <form action="delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" value="삭__제"></form><?php } ?>
    <h2><?php wottl(); ?></h2>
    <?php word_dt();?> 
  </body>
  </html>
  