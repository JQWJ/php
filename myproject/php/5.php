<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
       echo htmlspecialchars('<script>alert(1);</script>');
    ?>
  </body>
</html>

<!-- 사용자가 입력한 script 태그를 무력화시키는 방법 -->