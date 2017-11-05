<?php
  // header("Location: index.html");

  $text = file_get_contents("list");
  $domain_array = explode("\n", $text);
  sort($domain_array);

  foreach ($domain_array as &$domain) {
    print("<a href='http://www.afternic.com/domain/$domain'>$domain</a><br />");
  }

?>
