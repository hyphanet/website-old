<h3>Crash Course</h3>

<br/>This needs work...but it's a start.
<br/>
<br/>The following applies to Unix/Linux/OS X users. (Someone write an equivalent for Windows?)
<br/>
<br/><ol>
<li><br/>Get Sun's Java runtime environment. Other Java Virtual Machines are likely to be
<br/>unreliable/buggy for Freenet. 
<br/><a href="http://java.sun.com/">http://java.sun.com/</a> and <b style="color:black;background-color:#ffff66">download</b> the source.
<br/>

<br/>
<br/><li>Make sure that your server's hostname is valid. I got weird fatal errors
<br/>from Freenet and finally traced it to that -- I had arbitrarily named the
<br/>machine "halflife" and that wasn't a valid DNS name. Freenet shouldn't care, or

<br/>it should at least provide more meaningful error messages when this happens,
<br/>but oh well. Do a reverse lookup on your server IP:
<br/>
<br/><font face="Courier" size="2">
<br/>nslookup your-ip
<br/></font>
<br/>
<br/>and set your hostname to be whatever that resolves to (in my case, something
<br/>like "dhcp-182-blahblah.mydomain.com"). Edit
<br/>/etc/sysconfig/network-scripts/ifcfg-eth0 and set this in the HOSTNAME= line.
<br/>That will make it do the right thing after your next reboot, but to get it to
<br/>take effect right away, type (as root) hostname your-hostname.
<br/>
<br/><li>Get the latest freenet snapshot from <a href="http://downloads.freenetproject.org/">here.</a> Its name will be freenet-yyyymmdd.tgz where yyyy=year, mm=month, and dd=date (probably today's date, the developers update it ALL the time.)

<br/>
<br/><li>Unpack it (tar -xzf name-of-archive.tgz) and run the start script (sh start-freenet). It will
<br/>start prompting you for info. In most if not all cases, you can just hit return
<br/>to accept the defaults for each configuration question. One of the most important ones, however,
<br/>is the transient/non-transient question. If your IP address changes often (i.e., you are dialing into 
<br/>an ISP with your modem, or you are on a network with short DHCP lease times), then PLEASE specify
<br/>"transient" here. Otherwise, other nodes will waste their resources trying to connect to your node's
<br/>old IP information and this degrades performance across the whole Freenet network. 
<br/>
<br/><li>When it finishes
<br/>building the config, Freenet should start up and stay running. You might get
<br/>some warning messages but that's ok, usually. Type ps ax after a minute or so
<br/>and see if it's still running. It takes awhile (30 seconds maybe?) to start up fproxy, so 
<br/>be patient. You can type 
<br/>
<br/><font face="Courier" size="2">
<br/>watch netstat -anp 

<br/></font>
<br/>
<br/>and wait for a listening service on port 8888 to appear. This means fproxy is ready.
<br/>
<br/><li>Bring up a web browser and go to <b>http://localhost:8888</b> and you should get the Freenet gateway page. From there, go to
<br/>the Freedom Engine (or one of the other portals) and start surfing. The more you use it, and the longer you
<br/>leave it running, the better it will get (your requests will go faster and
<br/>you'll find stuff with more success).
<br/>
<br/><li>If you want to be able to use fproxy from a remote machine, edit
<br/>freenet.conf and add the following lines:
<br/>
<br/><font face="Courier" size="2">
<br/>mainport.bindAddress=*

<br/>mainport.allowedHosts=127.0.0.1,ip-you-want-to-connect-from
<br/></font>
<br/>
<br/>You can add other IPs, comma-separated (no spaces). Make sure you leave
<br/>127.0.0.1 (localhost) in there.
<br/>
<br/><li>Restart freenet by typing "sh stop-freenet.sh" followed by "sh start-freenet.sh".
<br/>You should be good to go. 
<br/></ol>
<br/>-- MB
<br/>
<br/><h3>The Masochistic Way</h3>
<br/>
<br/>Here's what I did, or at least what I can remember, for OpenBSD:
<br/>
<br/><ol>

<li><br/>Install <a href="http://www.kaffe.org/">Kaffe</a>.
<br/><ul>
<li><br/><font face="courier" size="2">mkdir&nbsp;/usr/local/src</font><br/>
<li><font face="courier" size="2">cd&nbsp;/usr/local/src</font><br/>
<li><font face="courier" size="2">cvs&nbsp;-d:pserver:readonly@cvs.kaffe.org:/cvs/kaffe&nbsp;login</font><br/>
<ul>
<li><font face="courier" size="2">The&nbsp;password&nbsp;is&nbsp;<b>readonly</b>.</font><br/>
</ul>
<li><font face="courier" size="2">cvs&nbsp;-d:pserver:readonly@cvs.kaffe.org:/cvs/kaffe&nbsp;co&nbsp;kaffe
</font><br/><li><font face="courier" size="2">cd&nbsp;kaffe
</font><br/><li><font face="courier" size="2">./configure&nbsp;&nbsp;--with-includes=/usr/local/include&nbsp;--with-libraries=/usr/local/lib&nbsp;--with-engine=jit3
</font><br/><li><font face="courier" size="2">Edit&nbsp;<b>libtool</b>&nbsp;and&nbsp;change&nbsp;<b>need_version=no</b>&nbsp;to&nbsp;<b>need_version=yes</b>

</font><br/><li><font face="courier" size="2">gmake
</font><br/><li><font face="courier" size="2">gmake&nbsp;install
</font><br/></ul>
<li>Create a Freenet user account.<br/>
<ul>
<li><font face="courier" size="2">Choose&nbsp;a&nbsp;partition&nbsp;with&nbsp;lots&nbsp;of&nbsp;space.</font><br/>
<li><font face="courier" size="2">vipw</font><br/>
<li><font face="courier" size="2">mkdir&nbsp;~freenet</font><br/>
<li><font face="courier" size="2">chown&nbsp;freenet&nbsp;~freenet</font><br/>
<li><font face="courier" size="2">vi&nbsp;~freenet/.profile</font><br/>
<ul>
<li><font face="courier" size="2">Set&nbsp;PATH&nbsp;so&nbsp;that&nbsp;java&nbsp;will&nbsp;be&nbsp;in&nbsp;it.</font><br/>
<li><font face="courier" size="2">Set&nbsp;CLASSPATH&nbsp;so&nbsp;that&nbsp;~freenet/freenet.jar&nbsp;and&nbsp;~freenet/freenet-ext.jar&nbsp;will&nbsp;be&nbsp;in&nbsp;it.</font><br/>
</ul></li>
<li><font face="courier" size="2">Everything&nbsp;else&nbsp;is&nbsp;done&nbsp;as&nbsp;the&nbsp;freenet&nbsp;user.</font><br/></li>
</ul>
<br/>
<br/><li><b style="color:black;background-color:#ffff66">Download</b> the three files you need.
<br/><ul>
<li><font face="courier" size="2">su&nbsp;-&nbsp;freenet

</font><br/><li><font face="courier" size="2">wget&nbsp;http://downloads.freenetproject.org/freenet-ext.jar
</font><br/><li><font face="courier" size="2">wget&nbsp;http://downloads.freenetproject.org/freenet-latest.jar
</font><br/><li><font face="courier" size="2">mv&nbsp;freenet-latest.jar&nbsp;freenet-DATE.jar
</font><br/><li><font face="courier" size="2">ln&nbsp;-s&nbsp;freenet-DATE.jar&nbsp;freenet.jar
</font><br/>
<ul>
<li><font face="courier" size="2">I&nbsp;keep&nbsp;multiple&nbsp;versions&nbsp;because&nbsp;sometimes&nbsp;one&nbsp;of&nbsp;them's&nbsp;bad.

</font><br/>
</ul>
<li><font face="courier" size="2">wget&nbsp;http://downloads.freenetproject.org/seednodes/seednodes.ref
</font><br/>
<ul>
<li><font face="courier" size="2">Or&nbsp;if&nbsp;you&nbsp;prefer,&nbsp;get&nbsp;someone&nbsp;else's&nbsp;seednodes.ref&nbsp;file.
</font><br/>
</ul>
</ul>

<br/><li>Configure the node.

<br/><ul>
<li><font face="courier" size="2">java&nbsp;freenet.node.Main&nbsp;--config
</font><br/><li><font face="courier" size="2">Optionally,&nbsp;edit&nbsp;freenet.conf&nbsp;by&nbsp;hand&nbsp;to&nbsp;change&nbsp;things&nbsp;you&nbsp;want&nbsp;changed.
</font><br/>
</ul>

<br/><li>Start the node.<br/>
<ul>
<li><font face="courier" size="2">nohup&nbsp;java&nbsp;freenet.node.Main&nbsp;&amp;
</font><br/></li>
</ul>
</ol>
<br/>
<br/>That's just the fundamentals.  In actual practice, running Freenet on OpenBSD required a bit more tweaking than this.  For example, I had to put <b>kern.maxfiles=4096</b> in <b>/etc/sysctl.conf</b>, and <b>:openfiles-max=512:</b> in the <b>default</b> stanza in <b>/etc/login.conf</b>.  And I had to use ksh for freenet's shell, instead of bash.  And maybe some other changes, all of which I've forgotten by now.

<br/>
<br/>Here's what I actually have in ~freenet/.profile:
<br/>
<br/><pre>
<br/>CLASSPATH=$HOME/freenet.jar:$HOME/freenet-ext.jar
<br/>export CLASSPATH
<br/>ulimit -n 400
<br/>
<br/>case $SHELL in
<br/><font face="courier" size="2">&nbsp;*/bash)&nbsp;source&nbsp;~/.bashrc&nbsp;;;
</font><br/><font face="courier" size="2">&nbsp;*/ksh)&nbsp;&nbsp;export&nbsp;ENV=$HOME/.kshrc&nbsp;;;

</font><br/>esac
<br/></pre>
<br/>
<br/>~freenet/.kshrc just has <b>set -o vi</b> in it.  Here's the actual shell script that I run to start freenet<dl><dt> I cleverly named it <b>run</b></dt><dd>
</dd></dl><br/>
<br/><pre>
<br/>&#35;!/bin/sh
<br/>
<br/>&#35; Increase number of open files permitted from 64 to 128.

<br/>ulimit -n 400
<br/>&#35; Let process use 256 MB memory (data segment size; this also pull up the
<br/>&#35; virtual memory size, -v, which we can't do directly).
<br/>ulimit -d 262144
<br/>
<br/>while true; do
<br/><font face="courier" size="2">&nbsp;&nbsp;&nbsp;pids=`ps&nbsp;xw&nbsp;|&nbsp;grep&nbsp;-v&nbsp;grep&nbsp;|&nbsp;grep&nbsp;-q&nbsp;java&nbsp;|&nbsp;awk&nbsp;'{print&nbsp;$1}'`

</font><br/><font face="courier" size="2">&nbsp;&nbsp;&nbsp;[&nbsp;-z&nbsp;"$pids"&nbsp;]&nbsp;&&&nbsp;break
</font><br/><font face="courier" size="2">&nbsp;&nbsp;&nbsp;kill&nbsp;`echo&nbsp;$pids`
</font><br/><font face="courier" size="2">&nbsp;&nbsp;&nbsp;sleep&nbsp;2
</font><br/>done
<br/>
<br/>nohup java -mx 224M freenet.node.Main &
<br/></pre><br/>

