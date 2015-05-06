<!--
  jQuery library
-->
<script type="text/javascript" src="/js/jquery-1.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="/js/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="/js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="/js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
$(document).ready(function() {
    $("#mycarousel").jcarousel({
      'visible': 1,
      'scroll': 1,
      'wrap': 'both'
    });
});
//-->
</script>

<!-- Contents -->

      <div id="whatistitle" style="margin-bottom: 10px";>
	<h1>分享, 聊天, 浏览. 匿名. 在 Free&nbsp;Network.</h1>
      </div>
      <div class="whatis">
	<p>
	  分享文件, 在论坛聊天, 浏览和发布, 匿名且无被封锁和审查的恐惧! 以更安全的方式连接你的朋友!
	  <br/>
	  <a href="whatis.html">了解更多!</a>
	</p>
      </div>

      <div id="screenshots_container">
	<div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
	     <p style="text-align: center;"><a href="screenshots.html">更多 Freenet 截屏</a></p>
	</div>
	<div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="image/screenshot/browse.png" class="thickbox"><img src="image/screenshot/browse.png" width="383" height="311" alt="Bookmarks" /></a></li>
             <li><a href="image/screenshot/sone.png" class="thickbox"><img src="image/screenshot/sone.png" width="383" height="298" alt="Sone" /></a></li>
             <li><a href="image/screenshot/fms.png" class="thickbox"><img src="image/screenshot/fms.png" width="383" height="298" alt="FMS forum" /></a></li>
           </ul>
	</div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
      	   <p>我们无法探知你的操作系统. 请开启 javascript, 或前往 <a href="download.html">下载页</a> 安装 Freenet.</p>
      </div>

      <div id="windows" class="sprites download">
   	<a href="https://freenetproject.org/jnlp/FreenetInstaller.exe">
   	   <span id="software">Freenet</span>
   	   <span id="action">下载</span>
   	   <span id="version">Windows 版 0.7.5</span>
   	</a>
      </div>

      <div id="macos" class="sprites download">
        <a href="/jnlp/freenet.jnlp">
   	   <span id="software">Freenet</span>
   	   <span id="action">安装</span>
   	   <span id="version">Mac OS 版 0.7.5</span>
   	</a>
      </div>
	
	<div id="unix">
	     <div class="download sprites">
	     	  <a href="/jnlp/freenet.jnlp">
	     	     <span id="software">Freenet</span>
	     	     <span id="action">安装</span>
	     	     <span id="version">Linux/Unix 版 0.7.5</span>
	     	  </a>
	     </div>
	     <p style="clear: left;">
		如果不启动, 请参考
	     	<a href="download.html#unix">安装指南</a>
	     </p>
	</div>
	
	<p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">安装指南和其他操作系统安装包.</a></p>

    <div style="clear: both"></div>

	<div id="donate_button">
	     <h4>做出捐助</h4>
	     <p>我们不为任何人下载和使用 Freenet 收费, 我们是依赖用户捐助而存在的非营利组织.</p>
	     <p>我们现在的收支是 <b>$MONEYBALANCE</b>.</p>
<!--	     <p>Our current balance of <b>$MONEYBALANCE</b> will pay for this server and our one paid developer for around another <b>MONEYDAYS days</b>.</p> -->
	     <p><a href="donate.html">捐助!</a></p>
	</div>

      <div id="news">
	<h4>最新新闻</h4>
    <p>
	<?php
		include dirname(__FILE__) . "../en/latestnews.php");
	?>
    </p>

	<p>
          (2012 年 4 月 14 日) <a href="https://emu.freenetproject.org/pipermail/devl/2012-April/036354.html">发布 Freenet 0.7.5 build 1407</a><br />
          (2012 年 4 月 3 日) <a href="https://emu.freenetproject.org/pipermail/devl/2012-April/036295.html">发布 Freenet 0.7.5 build 1406</a><br />
          (2012 年 3 月 26 日) <a href="https://twitter.com/#!/nextgens1/status/184713742448201728">If you are a student and you fancy flipping bits rather than burgers, you should consider applying for Google Summer of Code 2012! Registration is now open: send us your proposals!</a><br />
          (2012 年 3 月 16 日) <a href="https://www.google-melange.com/gsoc/org/google/gsoc2012/freenet">Freenet has been accepted as a mentoring organization for Google Summer of Code 2012!</a><br />
          (2011 年 11 月 15 日) <a href="https://emu.freenetproject.org/pipermail/devl/2011-November/035824.html">发布 Freenet 0.7.5 build 1405</a><br />
	  (2011 年 4 月 13日) <a href="news.html#freedom-house-april-2011">Freenet 在中文用户调查中名列反审查工具第一名!</a><br/>
	  <a href="news.html">过去的新闻</a>
	</p>
      </div>


      <script type="text/javascript">
  			 hideDiv("windows");
			 hideDiv("macos");
			 hideDiv("unix");
			 hideDiv("screenshot_nojs");
			 showDiv("screenshot_js");
			 // Try to detect if Sun Java 1.6.0 or higher is installed
			 var Java = PluginDetect.isMinVersion('Java', '1,6,0');
			 
			 // Os detection
			 var OSName="";
			 if (navigator.appVersion.indexOf("Win")!=-1)
			    OSName="windows";
			 else if (navigator.appVersion.indexOf("Mac")!=-1)
			      OSName="macos";
			 else if (navigator.appVersion.indexOf("X11")!=-1)
			      OSName="unix";
			 else if (navigator.appVersion.indexOf("Linux")!=-1)
			      OSName="unix";
			 
  			 if(OSName == "windows") {
				showDiv("windows");
				hideDiv("default");
  		 	 } else if (OSName != "") {
			       	showDiv(OSName);
				hideDiv("default");
			 } else {
			   	showDiv("windows");
				showDiv("macos");
				showDiv("unix");
				showDiv("default");
			 }
      </script>
