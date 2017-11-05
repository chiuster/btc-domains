<!DOCTYPE html>
<html>
  <head>
    <title>Cryptocurrency Domains</title>
  </head>
  <body>
    <h1>Cryptocurrency Domains for Sale</h1>
    Any inquiries can be addressed to Chris via email to <a href="mailto:chris@strategydomains.com">chris@strategydomains.com</a> or over the phone at (650)-690-2583 during business hours (Mon-Fri 8AM-5PM PDT).
<?php
  // header("Location: index.html");

  $text = file_get_contents("list");
  $domain_array = explode("\n", $text);
  sort($domain_array);

  foreach (array_filter($domain_array) as &$domain) {
    print("<a href='http://www.afternic.com/domain/$domain'>$domain</a><br />");
  }

?>
  </body>
</html>
