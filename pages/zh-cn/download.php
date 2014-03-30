      <h1>下载 Freenet</h1>
      <h3>首次安装的重要提示</h3>
      <p>
    为了性能最优化, Freenet 将持续运行. 它需要大约 200MB RAM 和 CPU 单核的 10% 运算能力, 以及一些磁盘访问, 这并不会干扰你电脑的正常使用. 我们强烈建议你在玩游戏时才关闭 Freenet. 要关闭 Freenet, 在 Windows 上可以通过系统通知栏图标完成, 在其他系统上可以使用系统菜单或桌面连接.
      </p>
      <p>
    通常 Freenet 安装好后将自动连接并立即 "开始工作", 自动连接其他节点 (陌生人). 但是, 如果你知道有其他人运行 Freenet, 你可以高安全模式并
    <a rel="nofollow" href="http://127.0.0.1:8888/addfriend/">添加他们为好友</a>, 
	Freenet 将会连接他们, 让你的 Freenet 在仍然可以被他们好友的好友访问时几乎完全无法探测. 此模式下的连接速度将非常慢, 除非你有 10 个以上的在线活跃好友.
      </p>

      <div id="nojws">
	
	<h2>安装指南</h2>
	<p>
	  显示指南:
	  <a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows
	    </a>, <a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac
	    OSX</a>, <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux
	    等</a><br/>
	</p>
      </div>
      
      <div id="windows">
	
	<h3>Windows</h3>
	
	<p>
	  - 下载和运行 <big><a href="https://downloads.freenetproject.org/latest/FreenetInstaller.exe">安装包</a> (8MB)</big><br/> 
	  <br/>
	  自动安装 Freenet 和所需组件. 完成后, 你的默认浏览器将自动打开 Freenet 的 web 用户介面. <br/>
	  (Freenet <b style="text-decoration: underline;">绝不包含</b> 间谍软件或广告软件,
	  这是自由软件! 源码公开供公众检视) <br/> 
	  <br/>
	  Freenet 需要 Windows XP 或以后的版本.<br/>
	</p>
	
      </div>

      <div id="macos">
	
	<h3>Mac OSX</h3>
	
	<p>
	  <a href="/jnlp/freenet.jnlp">使用 JavaWebStart 安装 Freenet 0.7</a><br/>
	  如果不成功, 请尝试 <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux 安装指南</a>.
	</p>
	
      </div>
      
      <div id="unix">
	
	<h3>Linux 和其他类 Unix 系统</h3>

	<p>
	  请用 <a href="/jnlp/freenet.jnlp">JavaWebStart 安装包</a>.<br/>
	  如果不成功, 请尝试以下指南.
	</p>	
	<p>
	  你需要有最近的 <b>Java 运行时环境</b>
	  (JRE). 我们发现最好的获取 Java 运行时环境的方式是通过你的<a rel="nofollow" href="https://en.wikipedia.org/wiki/Package_manager">包管理器</a>或官方网站<a rel="nofollow" href="http://www.java.com/">http://www.java.com/</a>.<br/> 
	</p>
	<p>
	  你需要 Java 版本 1.6. 你应保持更新以避免问题和保持最佳性能. 同时, 你可能需要 wget 以便执行以下指令 (在 Ubuntu, 在终端执行
	  "sudo apt-get install wget").
	</p>

	<p>
	  打开终端执行:
	</p>
	
	<!-- please use "pre" as following (ie a newline after the
	openning pre, and no newline before the ending pre) -->

	<pre>
	  wget '<a href="FREENET_INSTALLER_REDIRECT_URL">FREENET_INSTALLER_REDIRECT_URL</a>' -O new_installer_offline.jar
	  java -jar new_installer_offline.jar</pre>
	
	<p>
	  或者,
	  某些系统中下载<a href="FREENET_INSTALLER_REDIRECT_URL">安装包</a>
	  (<a href="FREENET_INSTALLER_SIG_URL">gpg
	    签名</a>) 并执行可能成功, 如果不成功, 我们推荐使用上述的命令行.
	</p>
	
	<div id="mirrored">
	  
	  <h3>镜像安装</h3>
	  
	  <p>
	    如果你已有可工作的 Freenet 安装目录, 那么从一台 Unix 镜像到另一台 (e.g. 通过 rsync 或
	    unison) 的镜像安装是很简单的. Freenet 安装只关注主机 IP 地址; 从 DHCP 池中获得 IP 的机器安装将失败
	  </p>

	  <p>
	    你所做的只需在启动时告知系统你镜像并在开机时启动 Freenet Proxy 守护进程 (Daemon). 在源机器执行 <tt>crontab -l</tt> , 找到标签为 "FREENET
	    AUTOSTART" 的行, 在镜像机上添加你的 crontab.
	  </p>
	  
	  <p>
	    然而: 每个安装在安装时都有产生惟一标识键钥. 如果试图<em>同时运行</em>同样标识的实例, 守护进程将会混乱. 不要这么做!
	  </p>
	  
	</div>
	
    <h3>HOWTO</h3>  
	      
      	     <p>你可能发现这篇 <a href="http://freesocial.draketo.de/index.html">Freenet Social Networking Guide</a> 很有用.</p>

      </div>
      
      <script type="text/javascript">
					 // Try to detect if Sun Java 1.6.0 or higher is installed
					 //var Java = PluginDetect.isMinVersion('Java', '1,6,0');
					 
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
					 
					 hideDiv("windows");
					 hideDiv("macos");
					 hideDiv("unix");
					 if (OSName != "") {
					   showDiv(OSName);
					 } else {
					   showDiv("windows");
					   showDiv("macos");
					   showDiv("unix");
					 }
      </script>
      
      <h3>防火墙和路由器</h3>
      
      <p>
	Freenet 在大部分路由器上应工作正常, 如果你有防火墙或路由器并遇到问题, 点击<a href="faq.html#firewall"><b>这里</b></a>查看相关信息.
      </p>
      
      <h3>已经运行了, 我该做什么?</h3>
      
      <p>
	安装完成后, 浏览器应该打开一个指向首次运行向导的窗口. 你应在此先配置基本设定, 然后再使用 Freenet. 你可以通过 (屏幕右下角) 系统通知栏菜单再次访问 Freenet, 或通过桌面/开始菜单中的 Freenet 快捷方式. 如果不成功, 试着在浏览器中打开<a rel="nofollow" href="http://127.0.0.1:8888/" rel="nofollow">http://127.0.0.1:8888/</a>.
      
      <p>
	为了最佳安全性, 你应使用单独的浏览器窗口打开 Freenet, 最好使用隐身模式. Windows 上, 如果可能系统通知栏将优先使用 Chrome 隐身模式. Internet Explorer 不能与 Freenet 很好配合工作, Firefox 和 Opera 可以使用.
      </p>
      
      <p>
	如果你有认识任何人运行 Freenet, 你可以连接他们的节点以增强你的安全性和网络性能. 首先打开<a rel="nofollow" href="http://127.0.0.1:8888/addfriend/">添加好友页面</a>. 你和好友都 应下载下 "节点参考值文件". 发送文件给对方, 使用页面底部的表单添加参考值. 当双方完成后, 你好友的节点会在好友页显示, 状态可能是 "已连接" 或 "繁忙". 你可以在配置页为你的节点设置一个方便识别的名字. 无论是在网上还是线下, 请只添加<b>你真正认识的人</b>, 添加陌生人会损害性能和安全性 (他们可能是坏蛋!).
      </p>
      
      <h3>已经连接了, 我该做什么?</h3>
      
      <p>
    Freenet 自身就包含了匿名网站 ("freesites"), 文件共享, 搜索和更多, 你还可使用 第三方应用 进行聊天, 文件共享, 上传 freesites 等.
      </p>
      
      <h3>它不工作, 现在怎么办?</h3>
      
      <p>
	如果是安装和运行 Freenet 的问题, 请从<a href="mailto:support@freenetproject.org">帮助邮件列表</a>与我们联系 
	(<a href="lists.html">点此订阅</a>), 或加入 irc.freenode.net 上的 IRC 频道 #freenet (网页版在<a rel="nofollow" href="https://webchat.freenode.net/?randomnick=1&channels=freenet">这里</a>).
      </p>
      
      <h3>硬件需求</h3>
      <p>
    通常 1GHz 处理器和 1GB 的 RAM 即可. Freenet 在更低配置上也可运行, 但至少需 128MB 的 RAM, 所以除非系统专门用来运行 Freenet, 否则低于 512MB 的内存将会很卡. 然而处理器应该不会是问题, 我们知道有人在 400MHz 奔腾 2 或 ATOM 处理器上运行, 虽然下载和浏览速度很慢.</p>
    
      <p>
	Freenet 使用部分磁盘存储数据用, 你应分配至少 100MB 以上的空间, 我们推荐至少 1GB. Freenet 还为你的下载使用磁盘空间. Freenet 的内存用量大约是 
	192MB + 每 2GB 数据存贮多 1MB 内存.
      </p>
      
      <p>
      在 64 位 Windows 上, 需要安装 32 位 Java 虚拟机才能安装, 这是因为 <a rel="nofollow" href="http://wrapper.tanukisoftware.org/doc/english/download.jsp">Java Service Wrapper</a> 限制.
      它不会自动更新, 你可能需要<a rel="nofollow" href="http://www.java.com/en/download/manual.jsp">周期性手动更新</a>.
      </p>
      
      <h3>升级</h3>
      
      <p>
	Freenet 提供基于 freenet 的更新机制:
	它可与其他 Freenet 节点软件保持同步, 此机制甚至在其他节点过新而不能路由时仍正常工作. 此功能是匿名且安全的, 我们推荐使用它. 然而, 如果更新失败, 你仍可手动从其他节点更新:</p>
      
      <ul>
	<li>Windows 可在 Freenet 安装目录下找到运行 "update.cmd" 进行更新. 你还可以从 <a rel="nofollow" href="https://code.google.com/p/freenet/downloads/list">Google Code</a> 下载最新 .jar 文件替代旧的 .jar 文件进行更新.</li>
	<li>Mac 和 Linux 用户可在 Freenet 安装目录下找到运行 update.sh 脚本进行更新. 你还可以从 <a rel="nofollow" href="https://code.google.com/p/freenet/downloads/list">Google Code</a> 下载最新 .jar 文件替代旧的 .jar 文件进行更新.</li>
      </ul>
      
      <p>
	<small>
	  <b>源代码:</b>
	  参见<a href="developer.html">开发者网页</a>获得 Git 访问, 或下载最新稳定版 tarball 在 <a href="FREENET_SOURCE_URL">这里</a> (<a href="FREENET_SOURCE_SIG_URL">数字签名</a>).
	</small>
      </p>
