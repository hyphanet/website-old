      <h1>News</h1>


	<a name="more-peers"><h3>21st August, 2009 - Freenet increases peers limit (#1 on uservoice)</h3></a>
	<p>Freenet 0.7 build 1231 solves what was <a href="http://freenet.uservoice.com/pages/8861-general/suggestions/93039-release-the-20-nodes-barrier?ref=title">
	the number one uservoice request</a>. Until now, most Freenet nodes have had exactly 20 connections. Now,
	the number of connections (opennet peers, or "Connections to Strangers") will vary according to how much
	upstream bandwidth you have, between 10 and 40. So slow nodes will have fewer peers (trading slightly less
	effective routing for more efficiency) and fast nodes will have more peers. Overall we expect this will
	improve speed, but it is difficult to simulate these things, so lets find out!</p>
	
	<p>Also, <a href="http://code.google.com/soc/">Google Summer of Code</a> is now over, and all of our
	students have passed. Much of their work is still in the process of being merged into Freenet itself.
	Still to come, better friend to friend file transfers, a new CSS filter, a filter for ATOM feeds, a new
	search plugin with many improvements and a new scalable index format, and much greater (but still 
	optional) use of javascript in the web interface to make it more responsive.</p>

	<a name="xml-vuln"><h3>8th August, 2009 - Upgrade your Java Virtual Machine <b>now</b>: severe XML vulnerability affecting Freenet</h3></a>
	<p>If you are running Freenet on Java prior to 1.6 build 15 or 1.5 build 20, please upgrade as soon as possible.
	Until you update Java, Freenet will disable the search function and various other plugins to
	minimise risk. However, if you have untrusted people on your LAN (local network),
	we recommend you <b>shut down Freenet immediately</b> until you are able to upgrade
	your Java. Also, do not run Thaw, which is known to be vulnerable, until you have
	upgraded, and do not accept jSite config files from anyone. Build 1228 of 
	Freenet will tell you if your Java is vulnerable. Windows users generally will be 
	notified by Java when updates are available; the situation may be more tricky for 
	Linux and Mac OS/X users as they will have to wait for an update from their linux distributions
	or from Apple respectively.</p>
	
	<p>For more details, see <a href="http://www.cert.fi/en/reports/2009/vulnerability2009085.html">here</a>.
	The problem is a remote code execution vulnerability affecting Java and also some
	other programs using certain XML parsing libraries. It was <a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2009-2625">initially thought</a> to
	be purely a denial of service attack, but there is exploit code circulating.</p>

	<a name="build1226"><h3>30th July, 2009 - Various security improvements and preparation for Bloom filter sharing in new stable build</h3></a>
	
	<p>
	Build 1226 is now available, including many changes. Existing Freenet nodes will
	update automatically. Some of the more interesting new features include:</p>
	<ul>
	<li><b>Finally fixing <a href="http://www.theregister.co.uk/2005/05/13/freener_not_so_anonymous/">The Register's attack</a>!</b><br>
	In 2005, The Register discovered what many of us had known for some time - that
	Freenet caches everything you visit in your datastore, and therefore that if
	your computer is seized or stolen, the bad guys may be able to determine what
	you have been browsing. Or they could even do it remotely by probing your
	datastore. This is now fixed. Freenet does not store anything that you download,
	visit, or upload, in your datastore. However, to maximise performance, we do
	have a private cache of freesites you have visited, called the "client cache",
	and we have a "slashdot cache" which caches everything else but only for 30
	minutes, to help with <a href="http://wiki.freenetproject.org/UltraLightweightPassiveRequests">propagating Frost/FMS posts</a>
	and flash floods. We had planned to fix this with encrypted tunnels (formerly
	known as premix routing), but that is a difficult project which may cost a lot
	of performance. The changes in this build may reduce performance slightly, but 
	they will enable new things which should greatly improve performance, as well as
	improving Freenet's usefulness in hostile regimes. No security system is 
	perfect, but nonetheless Freenet may be better for a specific application than 
	the alternatives, <b>especially if you can use darknet</b>, and darknet Freenet 
	can function where very little else will.</li>
	<li><b>Encryption for sensitive local data</b><br>
	Both the new client cache and the downloads/uploads database can now be encrypted.
	This is controlled by the "physical security level" setting. If you set this to
	LOW, nothing is encrypted, not even temporary files, and Freenet will use less
	CPU and work slightly faster. If you set it to NORMAL or higher, Freenet 
	now encrypts your client cache and downloads database. At NORMAL, the keys are
	kept in a file master.keys, so if you securely delete this file (or click the
	panic button on the downloads page), both are gone. At HIGH, the keys are still
	in master.keys, but it is password-protected. At MAXIMUM, the keys are not 
	stored at all, they are different every time you start Freenet; this means
	that your download queue will only last until the next restart, but at least
	you can be sure that if you restart the node, nobody can tell what you were
	doing with it. So you have detailed control over the tradeoff between security,
	convenience and performance. This allows those with slow computers to use LOW,
	and those who live in hostile regimes where their computer is likely to be
	seized to use HIGH or MAXIMUM.</li>
	<li><b>Preparation for Bloom filter sharing</b><br>
	There were two reasons for all this. The first is to improve security for those
	living in hostile regimes where their computer may be seized and they may get
	into trouble for what they have been doing on Freenet. The second is to prepare
	for the big performance feature for 0.8, Bloom filter sharing. Essentially, the
	idea is that we tell our peers what keys we have in our datastore using a highly 
	compressed data structure called a Bloom filter. We can then tell immediately
	when one of our peers has the block we are looking for, potentially avoiding
	searching and transferring the data through many other nodes. This should 
	improve performance considerably, reducing latency, increasing download speeds,
	and making it easier to find rare content. Watch this space!</li>
	</ul>

      <a name="big-donation-german-finance"><h3>8th July, 2009 - Big
      donation from <a href="http://www.finanzvergleich.de">German
      finance site</a></h3></a>

      <p>
	The German financial services comparison site, <a href="http://www.finanzvergleich.de">Finanz Vergleich</a>
	has given us $1,500 to fund ongoing development. This will go
	mainly towards ongoing work on Freenet's stability and
	usability. Thanks!
      </p>

      <a name="freenet-0-7-5-released"><h3>12th June, 2009 - Freenet 0.7.5 released!</h3></a>
      <p>
	The Freenet Project is very pleased to announce the release of
	Freenet 0.7.5.
      </p>
      <p>
	Freenet is free software designed to allow the free exchange
	of information over the Internet without fear of censorship,
	or reprisal. To achieve this Freenet makes it very difficult
	for adversaries to reveal the identity, either of the person
	publishing, or downloading content. The Freenet project
	started in 1999, released Freenet 0.1 in March 2000, and has
	been under active development ever since.
      </p>
      <p>
	Freenet is somewhat unusual in that you can publish content to
	Freenet, and then disconnect from the network.  This content
	will remain available to other Freenet users, although it may
	eventually be deleted if nobody is interested in it.  Freenet
	will copy and move the content around the network according to
	demand, making it very difficult for an adversary to remove
	content.  Freenet will automatically create more copies of
	popular content to ensure that it will always be available.
      </p>
      <p>
	Freenet 0.7 introduced the "darknet" concept, allowing users
	to only connect to their trusted friends (and through them to
	their friends' friends, and the entire network), greatly
	reducing their vulnerability to attack. You can use Freenet
	even if you don't know any other Freenet users, it just won't
	be as secure.
      </p>
      <p>
	Freenet 0.7.5 features major improvements to performance and
	usability, as well as improvements to security and
	robustness. In particular:
      </p>
      <ul>
	<li>
	  Freenet
	  now <a href="http://google-opensource.blogspot.com/2009/05/improving-freenets-performance.html">uses
	  a database</a> to store longer-term data that must survive a
	  restart.  This increases Freenet's speed and reduces its
	  memory usage.  In particular, you can now have almost any
	  number of downloads and uploads in progress without worrying
	  about memory usage.
	</li>
	<li>
	  Improvements to the web interface make it clearer what you
	  can do with Freenet, show progress when loading a page or
	  file will take more than a few seconds, integrate search
	  into the browse page, and generally improve usability in
	  many areas.
	</li>
	<li>
	  Significantly improved performance for inserting and
	  retrieving files and especially pages, and also for
	  Freenet's initial connection to the network.
	</li>
	<li>
	  A new installer for Windows which works with Vista as well
	  as Windows XP/2000 (Freenet also works on Mac and Linux
	  systems).
	</li>
	<li>
	  Many other optimizations.
	</li>
	<li>
	  Lots and lots of bug fixes!
	</li>
      </ul>

      <p>
	There are versions of Freenet 0.7.5 for Windows, Mac, and
	Linux.  They can be downloaded from:
      </p>
      <p><a href="http://freenetproject.org/download.html">http://freenetproject.org/download.html</a></p>
      <p>
	If you have any difficulty getting Freenet to work, or any
	questions not answered in the <a href="/faq.html">faq</a>, please
	join us
	on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	in the #freenet channel at irc.freenode.net, or email
	the <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/support/">support
	  mailing list</a>. If you have any suggestions for how to
	improve Freenet, please
	visit <a href="http://freenet.uservoice.com/">our uservoice
	  page</a>.
      </p>
      <p>
	There is a lot of work still to do on Freenet, particularly
	when it comes to ease of use.  If you have Java programming or
	web design skills, or would like to help translate Freenet
	into your own language, and would like to help us improve
	Freenet, please join
	our <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl/">development
	mailing list</a> and introduce yourself.
      </p>

      <a name="another-big-donation-google"><h3>7th May, 2009 -
      Another big donation funds ongoing development</h3></a>

      <p>
	<a href="http://www.google.com/">Google</a>'s <a href="http://code.google.com/opensource/">Open Source team</a> has donated US$18,000 to the Freenet Project to 
	support the ongoing development of the Freenet software (thanks again 
	Google!).
      </p>

      <p>
	Their last donation funded the db4o project, which has now been merged into 
	Freenet, greatly improving performance for large download queues while 
	reducing memory usage, amongst other benefits.
      </p>
      <p>
	We are currently working on Freenet 0.8, which will be released later this 
	year, and will include additional performance improvements, usability work, 
	and security improvements, as well as the usual debugging. Features are not 
	yet finalized but we expect it to include Freetalk (a new anonymous web 
	forums tool), a new Vista-compatible installer for Windows (that part will be 
	out in a few days), and hopefully Bloom filter sharing, a new feature 
	enabling nodes to know what is in their peers' datastores, greatly improving 
	performance, combined with some related security improvements.
      </p>

