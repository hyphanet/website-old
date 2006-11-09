<h2>Download Freenet 0.7</h2>
<p>
<small><b>Note: </b> You can still find the download page for Freenet 0.5 <a 
href="/download-old.html">here</a>, however 0.5 is no longer officially
maintained or supported and 0.7 has many radical improvements not least being that 
it is significantly faster.</small>
</p>
<h3>Important note for first time users</h3>

Freenet 0.7 is different to most other P2P networks in that, to protect
your security, you only connect directly to other people you trust, but
through them you gain access to the entire Freenet network.
<p>

When you first start Freenet 0.7 your node will not know any other nodes
on the network, you need to connect to other nodes - at least three. 
Ideally you should find people you trust that are already part of the
Freenet 0.7 network and connect to them, but if that isn't possible in
the early stages of the Freenet 0.7 network you can try connecting to
the irc server <big>irc.freenode.net</big> and join the channel
<big>#freenet-refs</big>, to see if anyone will connect to you.

<p> <i>If you have a firewall or a NAT box click <a
href="/faq.html#firewall"><b>here</b></a>
for some info.</i> <BR> &nbsp;<BR>

<h3>Windows</h3>
- Download and run <big><a href="http://downloads.freenetproject.org/alpha/installer/freenet-win32.exe">freenet-webinstall</a></big><br>
<br>
It will automatically install Freenet and other required components for you. When done, your default browser will automatically open up to Freenet's web-based user interface. <br>
(Freenet contains <u><b>NO spyware or adware</b></u> , it's Free Software! The source code is publicly available for review) <BR>
<BR>
Freenet works best with <b>Windows 2000 Professional, XP Professional or NT. </b> Windows 95, 98 and 2000 Millennium Edition don't work as well; in particular, the installer won't run on those operating systems.<br>
If the installer doesn't work (something seriously wrong) then please let us know, install Java, and try the Linux instructions below.

<h3>Mac OSX, Unix, and Linux</h3>
You need to have a recent Java Runtime Environment. We have experienced best results with Sun's Java Runtime Environment which can be obtained from <a href="http://www.java.com/">http://www.java.com/</a>. <BR>
Java version 1.4.1 and later will work. However, be aware that there are applet security vulnerabilities in all versions prior to Java 1.5 update 4. Generally, we recommend using Java 1.5.

<p>Type on a command line : 
<pre>
wget <a href="http://downloads.freenetproject.org/alpha/installer/new_installer.jar" alt="new_installer.jar">http://downloads.freenetproject.org/alpha/installer/new_installer.jar</a>
java -jar new_installer.jar
</pre>
</p>

<p> Or do the following on a headless system:
<pre>
wget <a href="http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz" alt="freenet07.tar.gz">http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz</a>
cat freenet07.tar.gz | gzip -d | tar xv
./bin/1run.sh
./run.sh start
</pre>
</p>

<P>Afer you start Freenet, wait a few seconds for it to start up (on a
slow computer, you may need to wait about 30 seconds), and visit
<pre>http://127.0.0.1:8888/</pre> in your web browser to access Freenet's user
interface. <BR> &nbsp;<BR> </P>

<h3>So it's running, what do I do?</h3>

You need to get connected.  If you know anyone running Freenet, ask them 
for their reference, and give them yours.  If you visit <a 
href="http://127.0.0.1:8888/darknet/">http://127.0.0.1:8888/darknet/</a> 
in your browser, you can see your reference at the bottom and you can add
other people's references, either by cutting and pasting the reference
itself, or by pointing Freenet to a URL or a file containing their
reference.
<p>
If you don't know anyone running Freenet, visit #freenet-refs on 
irc.freenode.net and ask nicely to exchange references with someone.  
You will find a tool like <a 
href="http://dark-code.bulix.org/">dark-code.bulix.org</a> useful (please don't 
paste references into the #freenet-refs IRC channel).
<p>
</B>Note: You need to add their reference and they need to add 
yours before your nodes can communicate.</b>

<h3>So I'm connected, what do I do?</h3>

You can find links to some pages in the index on the FProxy homepage at 
<a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a>.  You can find links to some third party 
applications <a 
href="http://wiki.freenetproject.org/FreenetZeroPointSevenApps">here</a>.
	
<h3>Hardware requirements</h3>
<b>Minimum:</b> 400MHz Pentium 2, with at least 192MB of RAM.<br>
<b>Recommended:</b> 1GHz or more processor with 256MB
<!-- decreasing agaisnt my will :(-->
RAM or more (especially if using Windows XP). <BR>
&nbsp;<BR>
<h3>Upgrading</h3>
Freenet provides now an update-over-freenet mechanism ; We recommend people to use it in favour of the updating scripts.

After installing Freenet, Windows users can upgrade to the latest-stable Freenet release by clicking on "update.cmd" in the Freenet directory.
<p> Linux users may similarly upgrade by running the update.sh shell script in the freenet/bin/ directory.
<p>
<h3>Source Code</h3>
You can obtain the latest source code from SVN from <a href="https://emu.freenetproject.org/svn/trunk/freenet/">https://emu.freenetproject.org/svn/trunk/freenet/</a>.
<BR>
