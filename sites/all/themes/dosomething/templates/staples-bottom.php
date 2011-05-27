<div id="home-footer" class="clearfix">

  <div id="home-footer-locator">

    <form action="http://stores.staples-locator.com/staples/advantage.adp" target="_blank">

      <div>
        <input type="text" class="zip" name="postalCode" value="zip code" onclick="if (this.value == this.defaultValue) { this.value=''; }" onblur="if (this.value == '') { this.value=this.defaultValue; }" />
        <input type="submit" value="find" class="button button-medium rounded shadow blue-gradient" />
        <input type="hidden" name="address" />
        <input type="hidden" name="city" />
        <input type="hidden" name="stateProvince" />
        <input type="hidden" name="radius" value="20" />
        <input type="hidden" name="viewMap" value="1" />
        <input type="hidden" name="transaction" value="search" />
      </div>

    </form>

    <a href="https://foursquare.com/search?q=staples"><img src="/<?=$ds_micro;?>/sfs/foursquare.png" /></a>

  </div>

  <div id="home-footer-prizes">
    <!-- <a class="button button-medium rounded shadow blue-gradient" href="/staples-for-students/enter">enter</a> -->
  </div>



  <div id="home-footer-supplies">
    <a class="button button-medium rounded shadow blue-gradient" href="/products/homeroom">check it out</a>
  </div>

</div>
