<?php include_once 'staples-header.php'; ?>

<div class="clearfix">

  <div id="sfs-sign-up">
    <div style="height: 100px;"></div>
    <?php if ($_GET['signup']) : ?>
    <p>Thanks for signing up.  We'll be sending you info and updates throughout the campaign to help you rock your school supply drive!</p>
    <?php else: ?>
    <?php print $right; ?>
    <?php endif; ?>
  </div>

  <!--
  <form id="sign-up-sfs" action="#">

    <img alt="Sign Up" src="/<?=$ds_micro;?>/sfs/sign-up.png" />

    <div>
      <label for="sfs-name" class="info">Name</label><br />
      <input id="sfs-name" type="text" /><br />
      <label for="sfs-school-name" class="info">School Name</label><br />
      <input id="sfs-school-name" type="text" /><br />
      <label for="sfs-email" class="info">Email</label><br />
      <input id="sfs-email" type="text" /><br />
      <label for="sfs-phone" class="info">Phone</label><br />
      <input id="sfs-phone" type="text" /><br />
      <input type="checkbox" name="updates" value="updates" id="sfs-updates" /> <label for="sfs-updates">Email me campaign updates.</label><br />
      <input type="checkbox" name="updates" value="updates" id="sfs-text" /> <label for="sfs-text">Send me text message campaign updates.</label><br />
      <input type="checkbox" name="updates" value="updates" id="sfs-action" /> <label for="sfs-action">Action kits are cool. I want one.</label><br />
      <input type="checkbox" name="updates" value="updates" id="sfs-sweeps" /> <label for="sfs-sweeps">Enter the Sweeps contest.</label><br />
      <input type="checkbox" name="updates" value="updates" id="sfs-conditions" /> <label for="sfs-conditions">I agree to the terms &amp; conditions.</label><br />
      <input type="submit" value="submit" class="button button-medium rounded shadow blue-gradient"  />
    </div>

  </form>
  -->

  <div id="psa" class="shadow rounded">
    <iframe width="497" height="283" src="http://www.youtube.com/embed/pbdl98VmbSo?rel=0" frameborder="0" allowfullscreen></iframe>
  </div>

</div>

<div id="home-main" class="orange-gradient shadow rounded clearfix">

  <img alt="Get Started" src="/<?=$ds_micro;?>/sfs/get-started.png" id="get-started" />
  <div style="position:relative; top: -75px; left: 400px; height:0px">
<a href="https://www.facebook.com/sharer/sharer.php?u=dosomething.org%2Fstaples-for-students"><img
    src="/<?=$ds_micro;?>/sfs/icon-fb.png" alt="Share on Facebook" style="margin: 0 0 15px 10px;" /></a>
  <a href="http://twitter.com/share"
      data-url="http://www.dosomething.org/staples-for-students"
      data-text="I took action for #education w/ @dosomething. get involved: staplesforstudents.org"><img
        src="/<?=$ds_micro;?>/sfs/icon-twitter.png" alt="Twitter share" style="margin: 0 0 15px 5px;"/></a> 
   </div>

  <div id="intro" class="clearfix">
    <?php print $content; ?>
  </div>

</div>

<div id="home-pll" class="orange-gradient shadow rounded clearfix">

  <img alt="Join a Pretty Little Liar Team Up to Help Kids In Need" src="/<?=$ds_micro;?>/sfs/team-up.png" />

  <ul>
    <li><a href="/staples-for-students/pretty-little-liars"><img alt="Ashley" src="/<?=$ds_micro;?>/sfs/pll-box-ashley.png" /></a></li>
    <li><a href="/staples-for-students/pretty-little-liars"><img alt="Lucy" src="/<?=$ds_micro;?>/sfs/pll-box-lucy.png" /></a></li>
    <li><a href="/staples-for-students/pretty-little-liars"><img alt="Troian" src="/<?=$ds_micro;?>/sfs/pll-box-troian.png" /></a></li>
    <li><a href="/staples-for-students/pretty-little-liars"><img alt="Shay" src="/<?=$ds_micro;?>/sfs/pll-box-shay.png" /></a></li>
  </ul>

</div>

<?php include_once 'staples-bottom.php'; ?>
<?php include_once 'staples-footer.php'; ?>
