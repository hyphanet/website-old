      <h1>文档</h1>
      <div id="navigation">
	<p> 前往:
	  <a href="install.html">安装</a>
	  <a href="connect.html">连接</a>
	  <a href="content.html">内容</a>
	  <a href="understand.html">理解</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>连接至 Freenet</h2>
      <p>有两种方法连接至 Freenet:</p>

      <ul>
	<li>你可以开启非安全模式 (安装向导会提示你), Freenet 将自动寻找并连接至 - 陌生人.</li>
	<li>你还可以只连至你熟知的人运行的节点 - 好友. 注意, 为了维护网络结构和保持最大安全, 这些人应是你或多或少了解的人.</li>
      </ul>
      
      <p>
	实践中, 你应同时使用两种连接, 除非你真的只想连接好友. 非安全模式默认自动开启运行无需设置, 本页的其余部分只探讨连至好友的细节.
      </p>

      <p>
	要连接到好友节点, 你需要与好友交换节点参考值 (references). 节点参考值必须被<span style="font-weight:bold;">双方</span>互加才能建立连接. 即, 你加 ta 的, ta 也要加你的.
      </p>

      <p>
	<span style="font-style:italic;">当你刚连上节点时, 你的数据库中还没有资料缓存,
	  并且即使你开启了非安全连接, 也不会有太多的连接. 请求被以随机发送的形式进行. 
	  <span style="font-weight:bold;">这使得某些 (或全部) 请求在返回前超时.</span> 要
	  Freenet 节点进入全速运行可能需要几天时间, 所以不要因此而气馁.</span>
      </p>

      <p>
	你可能会有至少 3 个节点连到你, 理想的情况应该至少 15-17 个. 因为一些节点可能经常不能连接, 你需要连接更多的节点以达到理想状态. 在 Freenet 上只有那些直接连接到你的节点才可能看到从你节点产生的流量. 如果非安全模式开启, 则陌生人可能会看见你节点产生的流量; <b>不</b>开启非安全模式有此优势: 你将对除了好友以外的人完全不可见. 但实践中大部分人都需要先开启非安全模式, 加到至少 10 个活跃好友后再关闭.
      </p>
      
      <img src="/image/Freenet-architecture-small.png"/>

      <p><span style="font-size:75%;font-style:italic;">图 1: 可见的 Freenet 连接</span></p>
      
      <p>
	图中<span style="font-weight:bold;">节点 A</span>也连到其他一些节点, 但是他们全部
	(除了你连 ta 的那条外) 都对你不可见. 因此流量路径算法只有在掌握你有限的直接节点才能发现你的浏览目的地.
      </p>

      <p>
	流量是加密的, 因此你连接的节点很难看到你的 Freenet 浏览内容, 不过也不是完全不可能. 因此只连接那些你认识的人是最好. 如果做不到, 至少是聊过的人.
      </p>

      <p>
	有几种方法添加节点参考值.
      </p>

      <h3>Fproxy</h3>
      <p>
	使用 FProxy 添加节点参考值有几种方法. 他们都在<span style="font-weight:bold;">暗网</span>菜单下或请访问 <a href="http://127.0.0.1:8888/friends/" rel="nofollow">http://127.0.0.1:8888/friends/</a>. 见下图:
      </p>
      
      <img src="/image/add_peers.png"/>
      
      <p>如你所见, 添加方式有三种:</p>
      
      <ul>
	<li>在顶部区域&quot;如实&quot;粘帖</li>
	<li>一个指向参考值的 URL 地址, 或</li>
	<li>包含参考值的文件.</li>
      </ul>
      
      <p>
	<a href="http://dark-code.bulix.org/">http://dark-code.bulix.org/</a> 是一个所谓的<span style="font-weight:bold;">互联网剪贴板</span>, 你可以使用它粘帖你的参考值, 确保勾选 <span style="font-weight:bold;">private</span> 选项, 然后点击 <span style="font-weight:bold;">Paste</span>.
      </p>

      <p>
	互联网剪贴板会返回一个 URL (如 http://dark-code.bulix.org/yuf01h-34676?raw), 将这个地址与他人共享. 确保连接中的 <span style="font-weight:bold;">?raw</span> 未遗漏以保证数据按原始格式展现.
      </p>
      
      <p>
	你自己的节点参考值可在 <a href="http://127.0.0.1:8888/friends/" rel="nofollow">http://127.0.0.1:8888/friends/</a>
	找到, 在 <span style="font-weight:bold;">我的参考值</span> 下. 看起来像这样 (为网页展现而截断了部分):
      </p>

      <pre>
	lastGoodVersion=Fred,0.7,1.0,1010
	sig=7c7edc8c5250e42ac4cb161b216b70de7019221f1b331f0f92bd67439[...]609660f0d4
	identity=5tBtS3R59nfOTvc1be~V0sSfkWir8EW38YeocP0gsYM
	myName=FreenetTestInstall
	location=0.02970997399122577
	testnet=false
	version=Fred,0.7,1.0,1016
	physical.udp=83.255.75.223:13762
	ark.pubURI=SSK@M1wjFha2tujYo50QQF~5Fqz5anVEiIzI9VrA8IrhAsQ,5M[...],AQACAAE/ark
	ark.number=0
	dsaPubKey.y=JhlWYVx8rA0y0x1Fb3y9TfqXDYiIsnkEka8PLsePerpCELTIn[...]laHe2bkl0O7Dg
	dsaGroup.p=AIYIrE9VNhM38qPjirGGT-PJjWZBHY0q-JxSYyDFQfZQeOhrx4[...]ofeLdX7xhehuk
	dsaGroup.g=UaRatnDByf0QvTlaaAXTMzn1Z15LDTXe-J~gOqXCv0zpz83CVn[...]Fuqt8yZe1PDVg
	dsaGroup.q=ALFDNoq81R9Y1kQNVBc5kzmk0VvvCWosXY5t9E9S1tN5
	End</pre>

      <p>
	记住你和好友必须互加参考值. 就是说如果你加了好友, 但好友并未加你, 那么连接<span style="font-weight:bold;">不会成功</span>.
      </p>

      <h3>暗网节点</h3>
      <p>
	当你有一些连接后你可以访问暗网节点页面, 看起来像这样:
      </p>

      <img src="/image/Freenet-darknet_peers.png"/>

      <p>此处可以看见一系列状态信息:</p>

      <ul>
	<li>已连接 - 节点已连接并准备好接受你的请求</li>
	<li>掉线 - 节点繁忙无法接受更多请求</li>
	<li>已断开 - 节点没有与你连上, 可能关机了</li>
	<li>从未连接 - 连接没有建立. 可能因为防火墙问题/限制, 或只单向添加, 或未同时在线以确认连接. 如果此问题一直存在并且双方都已互加过, 请试着重加一遍.
	</li>
      </ul>
      
      <p>
	在空闲时间栏, 你可以看到自上次状态信息改变后已过去的时间.
      </p>
