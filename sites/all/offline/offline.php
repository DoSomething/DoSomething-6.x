<?php
  header('HTTP/1.1 503 Service Temporarily Unavailable');
  header('Status: 503 Service Temporarily Unavailable');
  header('Retry-After: 7200'); // in seconds
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr"> 

<head> 
  <title>Temporarily Offline | Do Something</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head> 
 
<body>
  <style type="text/css">
    body { background: #0f3b70; font-family: "Trebuchet MS",Arial,Helvetica,sans-serif}
    #wrapper { background: white; margin: 30px auto; width: 950px; padding: 25px; }
    h1 { margin: 0 0 0.25em; font-size: 2em; color: #48BCDC; }
    p { margin: 0 0 1em; color: #0f3b70; font-size: 13px;}
  </style>
  <div id="wrapper">
    <img style="float: left; width: 120px; padding: 0 15px 15px 0;" src="http://openarchitecturenetwork.org/system/files/do_something_logo.jpg" />
    <h1>Site temporarily offline</h1> 
    <p>We're offline briefly to make some improvements, and we'll be back soon (shooting for 6:00 EST). More importantly, Happy Mother's Day moms! While we're down, you can join us at: <a href="http://www.facebook.com/dosomething">http://www.facebook.com/dosomething</a></p> 
  </div>
</body> 
</html>
