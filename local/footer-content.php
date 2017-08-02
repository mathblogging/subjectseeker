<div id="footer-wrapper">
  <div class="floater-wrapper">
    <div class="footer-element-wrapper">
      <div class="footer-element">
        <div class="footer-title">My Account</div>
        <?php 
				global $modules;
				getPlugin($modules["text-user-panel"]);
				?>
      </div>
    </div>
    <div class="footer-element-wrapper">
      <div class="footer-element">
        <div class="footer-title">Mathblogging.org Blog</div>
        <?php
        getPlugin($modules["get-feed"]);
				?>
      </div>
    </div>
    <div class="footer-element-wrapper">
      <div class="footer-element">
        <div class="footer-title">Follow us!</div>
        <div class="follow-icons">
          <a class="twitter-t" href="https://twitter.com/#!/mathblogging" title="Twitter"></a>
          <a class="facebook-icon" href="http://www.facebook.com/mathblogging" title="Facebook"></a>
          <a class="g-icon" href="https://plus.google.com/b/112575195895144913171/112575195895144913171/posts/p/pub" rel="publisher" title="Google+" style="text-decoration:none;"><img src="https://ssl.gstatic.com/images/icons/gplus-32.png" alt="" /></a>
          <a class="rss-icon" href="/search/default/?type=post" title="RSS"></a>
        </div>
      </div>
    </div>
  </div>
</div>
