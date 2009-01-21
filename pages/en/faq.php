<h2>Freenet Frequently Asked Questions</h2>

<h3> Philosophical questions</h3>

<ol><li><a href="#what">What is Freenet?</a>
</li><li><a href="#who">Who is behind Freenet?</a>
</li><li><a href="#trust">If authors are anonymous how can you trust information?</a>
</li><li><a href="#donate-bw">Do I have to donate disk space and bandwidth?</a>
</li><li><a href="#leech">I don't have to donate anything when using filesharing application X and I get to leech more.</a>
</li><li><a href="#donate-more-bw">All my friends donate very little space and bandwidth. Why should I donate more?</a>
</li><li><a href="#donate-lot">If I donate a lot will my experience improve significantly?</a>
</li><li><a href="#legal">Is Freenet legal?</a>
</li><li><a href="#blocked">Is Freenet blocked by national firewalls?</a>
</li><li><a href="#trouble">Can I get trouble if I run a node?</a>
</li><li><a href="#copyright">What about copyright?</a>
</li><li><a href="#childporn">What about child porn, offensive content or terrorism?</a>
</li><li><a href="#offensive">I don't want my node to be used to harbor child porn, offensive content or terrorism. What can I do?</a>
</li><li><a href="#export">How about encryption export restrictions?</a>
</li><li><a href="#whatelse">I have nothing to hide and don't need anonymity. Is there anything else Freenet can offer?</a>
</li></ol>
<h3> Technical questions</h3>

<ol><li><a href="#how">How do I use this software? I downloaded it, but when I run it there's no GUI.</a>
</li><li><a href="#slow">Why is Freenet so slow?</a>
</li><li><a href="#search">Is Freenet searchable?</a>
</li><li><a href="#firewall">How do I get freenet working with a firewall/NAT?</a>
</li><li><a href="#connection-perm">Do I need a permanent connection to run a node?</a>

</li><li><a href="#connections">Why does Freenet only download 1 or 2 files at a time?</a>
</li><li><a href="#store-perm">Why can't Freenet store data permanently?</a>
</li><li><a href="#why-java">Why is Freenet implemented in Java?</a>

</li><li><a href="#fproxy-lan">How do I allow connections to FProxy from other computers?</a>
</li><li><a href="#openjdk">The installer breaks while downloading files and I'm using Ubuntu 8.04 and/or OpenJDK</a>
</li><li><a href="#fec">What is FEC?</a>
</li><li><a href="#healing">What is healing?</a>
</li><li><a href="#heisenbug">What is a Heisenbug?</a>
</li><li><a href="#whatsnew">What's new? Is there a changelog?</a>
</li><li><a href="#backtrace">Why are there so many messages in my logfile with a backtrace attached?</a>
</li><li><a href="#stabchange">How can I change from stable to unstable?</a>
</li></ol>
<h3> Publisher questions</h3>

<ol><li><a href="#find">If I publish something in Freenet, how will people find it? Don't they have to know the key I used?</a>
</li><li><a href="#chk">How do I publish a Content Hash Key (CHK)?</a>
</li><li><a href="#update">Can Freenet documents be updated / deleted?</a>
</li></ol>
<h3> Contribution questions</h3>

<ol><li><a href="#idea">I have this great idea....</a>
</li><li><a href="#contribute">Can I contribute to the Freenet Project?</a>
</li><li><a href="#access">How can I access the code and website?</a>
</li><li><a href="#devtools">What tools do I need to help develop?</a>
</li><li><a href="#freenethelp">Is there a Help Site that goes deeper into the questions newbies may have about Freenet, and where people can contribute too?</a>
</li><li><a href="#bugs">Where can I report bugs?</a>
</li></ol>
<h3> Security questions</h3>

<ol><li><a href="#browser">Can I browse Freenet with my regular browser?</a>
</li><li><a href="#attack">Won't attack X break Freenet's anonymity?</a>
</li><li><a href="#flooding">Is Freenet vulnerable to flooding attacks?</a>
</li><li><a href="#hash">Why hash keys and encrypt data when a node operator could identify them (the data) anyway if he tried?</a>
</li><li><a href="#cancer">What about hostile "cancer" nodes within the network?</a>
</li><li><a href="#attackY">What about attack Y?</a>
</li></ol>
<h3> Misc. questions</h3>
<ol><li><a href="#rabbit">Where can I get a high quality copy of the rabbit icon?</a>
</li><li><a href="http://wiki.freenetproject.org/FrequentlyAskedQuestions">An other FAQ on our wiki server</a>
</li><li><a href="http://wiki.freenetproject.org/FreenetZeroPointSevenSecurity">A page dedicated to the security of freenet 0.7 on our wiki server</a>
</li></ol>
<h2> Philosophical answers
</h2><p><b id="what">What is Freenet?</b><br>
Freenet
is free software designed to ensure true freedom of communication over
the Internet. It allows anybody to publish and read information with
complete anonymity. Nobody controls Freenet, not even its creators, meaning that the system is not vulnerable to manipulation or shutdown. Freenet

is also very efficient in how it deals with information, adaptively
replicating content in response to demand.  For more information,
please read <a href="/whatis.html">What Is Freenet</a>.</p>

<p><b id="who">Who is behind Freenet?</b><br>
Freenet grew out of a design for an anonymous publication system created by Ian
Clarke while a student at the University of Edinburgh, Scotland. Since
then many other people have contributed towards making Ian's proposal a
reality.</p>

<p><b id="trust">If authors are anonymous how can you trust information?</b><br>
Cryptographic signing of information allows people to prove
authorship, this technique is frequently used to authenticate
authorship of emails. Moreover, you could actually sign information
while remaining anonymous, thus having an anonymous persona. You could
prove that you wrote different pieces of information on Freenet, without revealing your identity. In this way you could build up an anonymous reputation for reliability.</p>

<p><b id="donate-bw">Do I have to donate disk space and bandwidth?</b><br>
You aren't really donating in the sense that you lose the disk
space and the bandwidth; but you aren't really sharing either (at least
not the same way as with filesharing programs). It is more like
pitching in to the common Freenet resource pool.</p>

<p><b id="leech">I don't have to donate anything when using filesharing application X and I get to leech more.</b><br>
Do you get to do that anonymously? Freenet is designed with anonymity in mind, performance comes second.</p>

<p><b id="donate-more-bw">All my friends donate very little space and bandwidth. Why should I donate more?</b><br>
If you are happy with what you are getting then no. But if you want
more you should consider donating more and running your node as close to 24x7 as possible, and
you should ask your friends to do the same.</p>

<p><b id="donate-lot">If I donate a lot will my experience improve significantly?</b><br>
Your experience will definitely get better, but for a really great
improvement we need more people to start thinking like you. Bandwidth
counts more than diskspace.</p>

<p><b id="legal">Is Freenet legal?</b><br>
We don't currently know of any prosecutions for using merely using Freenet.
Some people claim that the <a href="http://en.wikipedia.org/wiki/DADVSI">DADVSI</a>
makes Freenet illegal in France; others have told us about the German data retention
law which allegedly requires anonymity systems to retain enough data to trace web
requests, which may or may not apply to us. Europe-wide, the
<a href="http://www.fsfeurope.org/projects/ipred2/ipred2.html">IPRED2</a> may have
wide-ranging effects, including on Freenet, should it pass... or it may not. 
Many of these things are arguable either way (depending on how broadly the 
legislation is applied) and will have to be decided in caselaw.
The law can be an ass sometimes. You can read the EFF's advice to peer to peer developers 
<a href="http://www.eff.org/wp/iaal-what-peer-peer-developers-need-know-about-copyright-law">here</a>. 
If you need legal advice, talk to a lawyer. Also read the next section especially if you
are in China; blocking the protocol may suggest the authorities don't like us!
</p>

<p><b id="blocked">Is Freenet blocked by national firewalls?</b><br>
The Chinese national firewall (Golden Shield) has blocked our website for many years,
and was observed in 2005 to block the 0.5 protocol as well. This suggests China doesn't 
like us, so be careful if you run Freenet in China. Some other countries such as the 
United Kingdom are <a href="http://news.bbc.co.uk/1/hi/business/7240234.stm">seriously considering</a>
forcing ISPs to block all peer to peer systems capable of sharing illegal files; this 
would probably include Freenet. Freenet 0.7 has some minimal defences against blocking; 
the protocol is relatively hard to identify (we will make this a lot harder in future),
and it supports a <a href="http://wiki.freenetproject.org/DarkNet">darknet</a> mode 
(i.e. only connecting to your friends) which makes automated harvesting and blocking 
of nodes very difficult.

<p><b id="trouble">Can I get trouble if I run a node?</b><br>
This is related to <a href="#legal">"Is Freenet legal?"</a>. We have done everything
we can to make it extremely difficult for any sane legal system to
justify punishing someone for running a Freenet
node, and there is little precedent for such action in today's developed
countries. Many legal systems recognise the importance of freedom of
speech, which is Freenet's
core goal. Having said that, there is risk in doing anything that your
government might not agree with; you should make an informed decision
as to whether to take that risk. Furthermore, your ISP or hosting provider
may have a problem with Freenet. At least one French hosting provider
has been known to ban Freenet (along with Tor and others) from their
servers; please read your terms and conditions to make sure you are 
allowed to run Freenet.</p>

<p><b id="copyright">What about copyright?</b><br>
There are some excellent thoughts on this subject on the <a href="/philosophy.html">Philosophy</a> page.
Specific copyright-related laws may be a problem, please read <a href="#legal">Is Freenet legal?</a>
and <a href="#blocked">Is Freenet blocked by national firewalls?</a>.</p>

<p><b id="childporn">What about child porn, offensive content or terrorism?</b><br>
While most people wish that child pornography and terrorism did not
exist, humanity should not be deprived of their freedom to communicate
just because of how a very small number of people might use that
freedom.</p>


<p><b id="offensive">I don't want my node to be used to harbor child porn, offensive content or terrorism. What can I do?</b><br>
The true test of someone who claims to believe in Freedom of Speech
is whether they tolerate speech which they disagree with, or even find
disgusting. If this is not acceptable to you, you should not run a Freenet node. There is another thing you can do. Since content in Freenet
is available as long as its popular, you can help limit the popularity
of whatever information you do not like. For example, if you do not
want a file to spread you should not request it and tell everyone you
know not to request that specific key. However, keep in mind that freenet 
is not designed so as to only allow communication between people if a sufficient
number of people agree with the communication. Freenet is designed to make communication
possible even if there's just one publisher and one reader, and this is already reasonably
feasible on the current freenet.</p>

<p><b id="export">How about encryption export restrictions?</b><br>
The Freenet Project has notified the US authorities (since the files are hosted on SourceForge,
which is on US soil) that it will be exporting crypto. As long as your
country doesn't prohibit the use of encryption you are fine.</p>


<p><b id="whatelse">I have nothing to hide and don't need anonymity. Is there anything else Freenet can offer?</b><br>
Yes, in fact even without the anonymity feature Freenet
is very useful because of its unique way it handles content distribution
and information load. In simple terms that means you can publish a
website without worrying about how big the site will be and without
having to put someone elses ad banners on it. While it is unlikely that
freenet sites will ever load faster than regular websites, it does adapt to
sudden surges of visitors (which will often occur when relatively unknown sites 
get linked to from a big site) better, and high download speeds for big files
are feasible too. Just don't expect very low latency.

<h2> Technical answers</h2>
<p><b id="how">How do I use this software? I downloaded it, but when I run it there's no GUI.</b><br>
Fred (the Freenet REference Daemon) runs as a daemon, or service, in the background. You normally talk to it through a Freenet client. One built-in client is fproxy, which lets you talk to Freenet with a web browser. 
Freenet should have installed a Browse Freenet shortcut on the desktop and/or the start menu. This should launch a customised firefox profile optimised for browsing Freenet (with a black theme so you can see clearly that you're not browsing the web). 
Failing that, point your web browser to <a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a> for the gateway page. Try clicking the various links in the "Bookmarks" panel to reach some of the popular Freenet index sites.</p>

<p>If you're looking for applications that run on top of Freenet and provide a different interface or functionality, please see the <a href="/tools.html">Tools</a> page.</p>

<p><b id="slow">Why is Freenet so slow?</b><br>
When you first install Freenet, it will be slow, and you may see Data Not Found 
or Route Not Found errors for freesites. This is normal, and Freenet will speed
up significantly over time. For best performance you should try to run Freenet
as close to 24 hours a day as possible. This is why we install Freenet as a
service.</p>
<p>Please bear in mind that Freenet is inherently high latency: it can take a while 
to (for example) load a page for the first time, even if it is capable of reasonable
speeds (as anonymous systems go!) for large popular files. The Browse Freenet
icon/menu item should launch a customised version of Firefox which will use many
connections to maximise performance especially when you open many freesites in
tabs. If that doesn't work then see <a href="#connections">here</a>. And of course,
protecting your anonymity does cost a certain amount of performance.</p>

<p><b id="search">Is Freenet searchable?</b><br>
Yes, there are a few different search mechanisms. To search the freenet web,
go to the plugins page, load the XMLLibrarian plugin if it isn't already there,
and use that. Alternatively, Frost and Thaw also provide searching for messages 
and files. Note that searching on Freenet is a good deal more difficult than
on other networks because of Freenet's different architecture and design goals.

<p><b id="firewall">How do I get freenet working with a Firewall/NAT?</b><br>
Mostly, Freenet should just work with a NAT. However, you should forward the ports
manually if you can. Click on the <a href="http://127.0.0.1:8888/friends/">Friends</a> or <a href="http://127.0.0.1:8888/strangers/">Strangers</a> page. At the bottom you will
see a list of ports used by the node. You should forward (for UDP) the Darknet FNP 
and Opennet FNP ports. You may need to look up your router's documentation to figure
out how to do this. Freenet should have forwarded them itself through <a href="http://en.wikipedia.org/wiki/Universal_Plug_and_Play">Universal Plug and Play</a>,
but this doesn't always work (and it never works if you don't have the UPnP plugin loaded, or have one router behind another).</p>
<p>If you have a dyndns address or other domain name pointing to the computer you run 
your Freenet node on, tell the node about it. Go to <a href="http://127.0.0.1:8888/config/">the config page</a>, 
and find the option "IP address override". Put your domain name in that box, and apply the settings.</p>

<p><b id="connection-perm">Do I need a permanent connection to run a node?</b><br>
No, but it is preferred. You can run the software and test it from
a "transient" connection (such as provided by typical modem/ISP
setups), but for the network as a whole to be most useful, we will need
as many permanent nodes as possible (most cable modem or DSL setups are
sufficiently "permanent" for this). A later version of Freenet may take better advantage of transient nodes.</p>

<p><b id="connections">Why does Freenet only download 1 or 2 files at a time?</b><br>
Many browsers limit the number of simultaneous connections to something far too low for efficiently browsing Freenet (since Freenet
pages often have much higher latency than web pages). This can usually
be reconfigured. For example, for Mozilla Firefox, type <span style="font-weight: bold;">about:config</span> in the address field
of the browser and replace the value of the following settings to the one stated. Filter on <span style="font-weight: bold;">&quot;connections&quot;</span>
to get only the relevant settings:</p>

<code>
network.http.max-connections 200<BR>
network.http.max-connections-per-server 200<BR>
network.http.max-persistent-connections-per-proxy 200<BR>
network.http.max-persistent-connections-per-server 200<BR>
</code>
<p>Note that these settings will cause mozilla to use more
connections for all your browsing, which may not be desirable from a
network congestion point of view; volunteers to make mozilla allow this
sort of settings to be set per host would be welcome...</p>
<p>Note also that if you have installed Freenet recently, it should have created
a Firefox profile for browsing Freenet with similar settings, with a black theme,
which you can access through the Browse Freenet icon.</p>

<p><b id="store-perm">Why can't Freenet store data permanently?</b><BR>
Because we can't find a way to do this without compromising Freenet's
other goals. For example, people often suggest that someone's node could
just never drop data they want to cache permanently. This, however,
won't work because even if the data is still available on their node,
there is no way to ensure that requests for that data will be routed to
that node. We have considered many other ways that Freenet could store data 
permanently, but they either won't work, or compromise Freenet's core goals 
of anonymity, and scalability. However, if you simply reinsert your data 
regularly, or if it is regularly downloaded (not by the same person as it 
would be cached on their node and the path to their node), it should 
remain available indefinitely.</p>

<p><b id="why-java">Why is Freenet implemented in Java?</b><BR>
Opinions differ about the choice of java for the reference implementation of
freenet (even among the core developers). <a href="/people.html">Ian Clarke</a> and several
other developers are java proponents and the choice for java was made. Even if everybody could be convinced
to switch to a different language reimplementing the current freenet protocol would be quite a big task, and
take up a significant amount of time, while there is only a limited amount of developer-time available. Flame wars
on the development list about the language choice aren't welcome, people willing to implement freenet
in other languages however are very much encouraged to try. Don't underestimate the amount of work however.

<p><b id="fproxy-lan">How do I allow connections to FProxy from other computers?</b><br>
If you want everyone to be able to use your node you have the following options:<br></p>
<ul>
<li>Go to <a href="http://127.0.0.1:8888/config/">fproxy's configuration page</a> and enable advanced mode in the FPROXY section</li>
<li>Stop your node and edit freenet.ini manually</li>
</ul>
<p>In both cases change the following parameters:</p>
<p>If you want everyone to be able to access your node:
</p><code>
fproxy.bindTo=0.0.0.0<BR>
fproxy.allowedHosts=*<BR>
</code><p>
Of course, this leaves your node wide open, unless you control
access with a firewall of some sort.  If you'd prefer to use access
controls within Freenet, then you can use lines like this:</p>
<code>
fproxy.bindTo=0.0.0.0<br>
fproxy.allowedHosts=127.0.0.1,192.168.1.0/24<br>
</code>
<p>Or even (find your IP address from ipconfig/ifconfig/winipcfg and substitute it for 192.168.1.1):</p>
<code>
fproxy.bindTo=127.0.0.1,192.168.1.1<br>
fproxy.allowedHosts=127.0.0.1,192.168.1.0/24<br>
</code>
<p>And if you want to grant full access (i.e. change config settings, restart, etc) to the node (WARNING: Be very careful who you give full fproxy access to!):
<code>
fproxy.allowedHostsFullAccess=127.0.0.1,192.168.1.0/24<br>
</code>
</p>

<p><b id="openjdk">Problems installing with OpenJDK</b><br>
<p>Some versions of OpenJDK, particularly the one included with Ubuntu 8.04,
have some problems with SSL which cause the installer to fail. Please install
the Sun JRE, at least version 5. On Ubuntu or Debian, open a root terminal and type:</p>
<pre>
apt-get install sun-java6-jre
update-java-alternatives -s java-6-sun
</pre>

<p><b id="fec">What is FEC?</b><br>
FEC stands for Forward Error Correction.  When large files are inserted into Freenet, they are split into many small blocks -- this is called a <i>splitfile</i>.
FEC adds redundant check blocks to a splitfile, so that if some of the
blocks fall out of the network or can't be found, you might still be
able to retrieve enough of the file to reconstruct it.</p>

<p><b id="healing">What is healing?</b><br>
When you download a splitfile that uses FEC (see previous
question), some of the blocks may have become unavailable.  Healing
lets you repair the file by recalculating the data for the missing
blocks, and then reinserting them into Freenet.</p>


<p><b id="heisenbug">What is a Heisenbug?</b><br>
The name comes from the Heisenberg Uncertainty Principle of
physics, which states that when measuring both the momentum and the
position of a particle, the product of the uncertainties is a constant.
In Freenet, the Heisenbug refers to a problem which plagued the developers for a long time and was extremely difficult to reproduce.</p>
<p>The current theory is that the Heisenbug is actually a bug in
certain Java virtual machines, particularly IBM's, which causes certain
calculations to return the wrong results; but these results match a
certain pattern.  Whenever your node sees this pattern, it reports that
the Heisenbug <i>may</i> have occurred, and writes verbose information
to the logs.  Since this pattern can also occur under normal
circumstances (about once in every 65,000 times), a few Heisenbug
reports may be expected.  But if you're getting lots of them,
something's wrong.</p><b>Update</b>: It's turned out that the heisenbug was actually a bug in the fred
code, there was a bug in our implementation of <A HREF="http://www.counterpane.com/yarrow.html">Yarrow</A>,
a piece of code should have been synchronized (a java method of locking) but wasn't. If you're still seeing
heisenbugs being reported in your logfile and are running a current version of freenet, please report them
to the mailinglist.

<p><b id="whatsnew">What's new? Is there a changelog?</b><br>
On every new build, a brief summary of all the main changes is posted to the support and devl lists and the freenet-announce board on Frost.
Alternatively for a much more detailed view, check <a href="http://cia.navi.cx/stats/project/freenet">the SVN logs</a>.

<p><b id="backtrace">Why are there so many messages in my logfile with a backtrace attached?</b><br>
Fred (and freenet in general) are still very much in development, and if something goes wrong it's worthwhile
to know exactly what went wrong.

<p><b id="stabchange">How can I change from stable to unstable?</b><br>
There is no unstable network anymore.


<h2>Publisher answers
</h2><p><b id="find">If I publish something in Freenet, how will people find it? Don't they have to know the key I used?</b><br>
Yes, people will have to know what key you used to publish your
information. This means you will have to announce your key in some way.</p>
<p>The most common way to do this is to send a message, containing
your key and brief description of your information, to the author of
one of the existing Freenet sites. Most of the "portal" sites which are linked from the Freenet
web interface (fproxy) have a submission form which lets you send them
messages anonymously. You could also send your key to people by using
the Freenet <a href="/lists.html">mailing lists</a>, in the
IRC channel (irc.freenode.net #freenet), by private e-mail, or by advertising your Freenet
site on your World Wide Web site. If you're feeling extravagant, you
could even try skywriting it. (Graffiti is not recommended, for legal
reasons.)</p>

<p><b id="chk">How do I publish a Content Hash Key (CHK)?</b><br>
A Content Hash Key is based on the actual content contained within
it - and as such, the key will only be known after it has been inserted
into Freenet.  To insert a CHK, simply insert it as "CHK@", Freenet will tell you what the actual CHK is once the insertion completes.

</p><p><b id="update">Can Freenet documents be updated / deleted?</b><br>

Currently, a document posted to Freenet
with the same name as one already present may actually serve to
propagate the existing document. There is also currently no means of
deleting a document from Freenet. Documents that are never requested are eventually removed through disuse.</p>
<p>However, you can use an <a href="http://wiki.freenetproject.org/FreenetUSKPages">Updatable Subspace Key (USK)</a>
to provide a form of updatable freesite: your node will automatically look for later editions of
the site (after you visit it, or always if you bookmark it), and show you the latest version.</p>

<h2> Contribution answers
</h2><p><b id="idea">I have this great idea....</b><br>
Good! First step: read the <a href="/lists.html">mailing list archives</a>.
Odds are good that someone else had the same idea and discussed it with
the group. Either a flaw was found in the idea, or perhaps it was
decided to postpone implementing the idea until later. Some examples of
ideas already discussed are storing information by content hash, key
redirection, signed keys/data, use of UDP, server discovery, URLs,
document versioning, and others. If you don't see the idea discussed in
the archives, by all means bring it up in the appropriate <a href="/lists.html">mailing list</a>.</p>

<p><b id="contribute">Can I contribute to the Freenet Project?</b><br>
Absolutely. Even if you don't have the time or skills to become a co-developer of the project, you can contribute in other ways:</p>

<ul><li> Help test Freenet by installing and configuring the server software on your machine.
</li><li> Install the client software on your machine to test retrieving information and publishing your own.
</li><li> Work on the Freenet web site (including the FAQ).
</li><li> Contribute your ideas to the discussion lists.
</li><li> Translate the user interface into your local language.
</li></ul><p>If you are a developer, you can also help by designing and developing other applications to run on Freenet.</p>
<P> People that want to contribute to Freenet in <a href="/openjobs.html">any way</a>, by contributing artwork, new ideas, or even correcting spelling/grammar mistakes or ideas for adding new pages/paragraphs on this site, are also welcome to <a href="mailto:ian@locut.us">email</a>. </p>

<p><b id="access">How can I access the code and website?</b><br>
We are using a <a href="http://subversion.tigris.org/">subversion</a> server : <a href="http://freenet.googlecode.com/svn/trunk/">Freenet's subversion repository</a>.

<p><b id="devtools">What tools do I need to help develop?</b><br>
To build and deploy the Freenet server, you will need Java tools compatible with Sun's JDK 1.5 or later. To retrieve and update the code at <a href="http://freenet.googlecode.com/svn/trunk/freenet/">http://freenet.googlecode.com/svn/trunk/freenet/</a>using <a href="http://subversion.tigris.org/">subversion</a>,
(This is not necessary if you only want to download, compile, and run
the server without contributing to its code). Further instructions for building and deploying the server are included with the code itself.
Generally speaking, joining our IRC channel is a good idea: <a href="irc://irc.freenode.net/freenet">#freenet on irc.freenode.net</a></p>

<p><b id="freenethelp">Is there a Help Site that goes deeper into the questions newbies may have about Freenet, and where people can contribute too?</b><br>
You could have a look at <a href="http://wiki.freenetproject.org/">our wiki</a>. There is also an older, largely unmaintained <a href="http://www.freenethelp.org">Freenet Help Site</a> wiki. You can contribute to both, since they are wiki's so most pages are editable.

<p><b id="bugs">Where can I report bugs?</b><br>
You can use our <a href="https://bugs.freenetproject.org/">bug tracking system</a> or send a mail to our <a href="/lists.html">development mailing list</a>.</p>

<h2> Security answers
</h2><p><b id="browser">Can I use my regular browser to browse Freenet?</b><br>
Freenet has a web interface: much of the content on Freenet is in the form of
"freesites", downloads, configuration and friend connections can be managed from 
the web interface. However, because of weaknesses in current browsers, we 
<b>strongly</b> recommend that you use a separate browser for Freenet. Specifically,
browser history stealing, in all its forms, is a major threat if you share a 
browser between Freenet and the WWW at large: malicious web pages will be able to
probe which freesites you have visited, and report this information to their owners.

<p><b id="attack">Won't attack X break Freenet's anonymity?</b></p>
<p><b>Short answer:</b> Probably yes.</p>
<p><b>Long answer:</b></p>
<p>Freenet has a different threat model to Tor and the Mixmaster remailers. 
Freenet is designed to resist
censorship: The network must therefore be robust, and content must be distributed
without requiring a central server, whether anonymous or not. Anonymity is important
for requesters and especially for those who upload content in the first place. The
typical example is a corporate or government whistleblower. Generally to find the
originator of some content, the attacker must be able to predict the data in advance,
must be able to move across the network relatively quickly, and must be able to 
perform the attack while the data is being inserted; after that, it is distributed 
across the network and is much harder to trace, and the originator may have left the 
network. However, if by chance or by overwhelming force the attacker is connected
to the whistleblower (or e.g. seizes the computers of everyone on the network), he 
may be able to identify this much more quickly. All of this is vastly more difficult 
on a darknet, where everyone connects only to their friends, where it is very hard for
an attacker to find nodes, and where to connect to a given node he must social engineer
its operator! Freenet does support opennet mode (plug and play), but darknet is far more 
secure, and additionally is far more difficult to block on a national firewall.</p>
<p>Tor on the other hand is designed to anonymise real-time data streams, on the 
assumption that the list of nodes can be public, that there is a free world where
nodes can be operated safely, that the authors of controversial content will be able
to either host (hidden) web servers themselves or upload it to other (hidden, but usually centralised) storage systems,
and so on. And Tor has a concept of a "client", which is somebody who uses the 
service without providing any value to it; on Freenet, every node relays data for
its neighbours. Hence the attacks on Freenet are completely different to the attacks
on Tor. Both compromise to some degree to enable more or less real-time performance.</p>
<p>If you can use the darknet, trust your friends, don't reinsert files or insert easily
predictable data, and change your anonymous identity after some volume of inserts, you
should be relatively safe using Freenet. If you can connect, build up some trust in your
anonymous persona, insert your controversial content, and then disappear, again, you are
better off with Freenet, especially if the content is a website. In some other cases, 
Tor is better.</p>
<p>In Freenet 0.9, we will add a form of cryptographic tunnels, somewhat similar
to Tor's onion routing; this should greatly reduce the impact of many of the below
attacks.</p>
<b>Major known attacks:</b>
<p>In the interests of giving would-be users as much information as possible, and on
the assumption that any serious attacker would do their homework, here are the major 
classes of attack on Freenet we are presently aware of:</p>

<ul><li><b>Harvesting</b>: Simply by running some powerful Freenet nodes, an 
attacker can identify most of the opennet (Strangers network) relatively easily.
These nodes can then be attacked one by one (subject to resources), their traffic
analysed, or simply be blocked on a national firewall. Connecting only to friends
largely solves this problem. It is still possible for ISPs to identify nodes with 
traffic flow analysis. Obviously a large network will make this harder. And this 
attack is trivial on Tor, although they provide a means to work around it.</li>
<li><b>Datastore attacks</b>: Everything any node requests through your node is
cached locally. Everything you fetch is also cached locally (we may make this 
configurable at some point, but turning it off enables an easier attack). If the
attacker can obtain your hard disk, or connect to your node and probe your datastore
by requesting keys and timing how long they take, he may be able to determine what
you have been downloading from/uploading to Freenet. Right now the best way to 
prevent this is to only connect to your trusted friends, as above, and encrypt your hard disk. 
Once we have tunnels, we will not need to cache locally requested keys in the
datastore, which will solve this attack.</li>
<li><b>Correlation attacks</b>: If you are connected to a node, and can recognise
the keys being requested (probably because it was posted publicly), you can show 
statistically that the node in question probably requested it, based on the 
proportion of the keys requested from that node, the locations of nearby nodes, the 
HTL on the requests and so on. This will again be largely eliminated by tunnels.</li>
<li><b>Adaptive search</b>: If you want to find the author of some content, and you
can predict the content or the keys to be inserted, you can listen out for their 
inserts. Each request gives you a data point suggesting roughly where the originator 
might be (on the location space), and on each insert you intercept you can move 
slightly closer to the originator, by obtaining connections to nodes which are closer 
to your current guesstimate of the target's location. If you are right these new 
connections will yield more of the target's requests/inserts, and you can rapidly 
close in on the originator. The best defense right now is darknet (connecting to 
friends only): Darknet makes it very difficult for an attacker to obtain new 
connections closer to his guess of where the target is. The tunnels proposal will 
likely make this attack considerably more difficult. Also, if the attacker cannot guess 
the content to be inserted in advance, this is very much more difficult (hence 
reinserting big files is <b>bad</b>); we will randomize the insertion keys in 0.9 to 
give additional protection for inserters. And of course this is of no use for tracing 
the author if the author has finished the insert and left the network: you have
to intercept the insert while it is in progress.</li>
<li><b>Traffic analysis</b>: Freenet provides minimal protection against global
traffic analysis (basic message padding etc); if the attacker also has nodes on the 
network, the extra data will likely be helpful. However on Tor-style networks,
global traffic analysis will defeat the network completely: all that is needed is
to observe both the entry and exit points.</li>
<li><b>Swapping attacks</b>: It is possible to attack the location swapping algorithm, and
thereby disrupt routing. This has been demonstrated by the authors of the Pitch 
Black paper. We are working on a solution, but this only affects the darknet (Friends 
network), which presently is a small proportion of the overall Freenet.</li>
</ul>
</p>
<p>More information on the current practical state of Freenet security is available
<a href="http://wiki.freenetproject.org/FreenetZeroPointSevenSecurity">here</a>.

<p><b id="flooding">Is Freenet vulnerable to flooding attacks?</b><br>
Short answer: no.</p>

<p>Long answer:</p>
<p>We don't think so. Aside from protecting freedom of speech, Freenet
is also designed to be an efficient dynamic caching system. If
information is requested a lot from a limited number of nodes, the
nodes that the requests pass through will cache the information,
lowering the load on the network. If information is inserted on a
limited set of nodes and then subsequently requested a lot from a
separate set of nodes, with repetition, the sets will close in on one
another in the network topology until they are "neighbors" and only the
originally targeted nodes are suffering from the attack.</p>
<p>In other words, in order to harm Freenet
with a flood you need to consistently change your point of entry into
the network and continually insert and request new data, and you will
still only increase the workload for the network that is linear to your
own. Given an immense will and capacity greater than the total of the
entire network, it is possible to cripple any public network (including
the Internet itself) with floods, but it is our intention to always
keep Freenet as resistant to this as theoretically possible.</p>
<p>Curiously enough, the above analysis only applies to <a href="http://wiki.freenetproject.org/Opennet">Opennet</a>.
On Darknet, you might have a little more success, although it would be much harder to change your entry point in any significant way.
Nonetheless, you have a reasonably low bandwidth multiplier (the total number of nodes visited, around 20 on average), and you are severely limited by the number of nodes you can connect to, which will be low on a darknet.</p>

<p><b id="hash">Why hash keys and encrypt data when a node operator could identify them (the data) anyway if he tried?</b><br>

Hashing the key and encrypting the data is not meant a method to keep Freenet
Node operators from being able to figure out what type of information is
in their nodes if they really want to (after all, they can just find
the key in the same way as someone who requests the information would)
but rather to keep operators from having to know what information is in
their nodes if they don't want to. This distinction is more a legal one
than a technical one. It is not realistic to expect a node operator to
try to continually collect and/ or guess possible keys and then check
them against the information in his node (even if such an attack is
viable from a security perspective), so a sane society is less likely
to hold an operator liable for such information on the network.</p>

<p><b id="cancer">What about hostile "cancer" nodes within the network?</b><br>
The existence of malicious nodes within the network is the most
difficult problem that a distributed network must face, and has been
the bane of many previous ideas. Many systems (such as multiplayer
gaming networks) try to avoid malicious nodes by keeping the protocol
and code closed, but we have yet to see an example of that working in
the long run. And anyway it is opposed to Freenet's philosophy.</p>
<p>Freenet
is based on a balance of positive and negative feedback loops that bring
requests for information to a node when it is functioning well, and
keep requests away from it when it is not. The key to avoiding
"cancers" is (as in the body) to make sure these loops can correctly
identify even the most carefully designed malicious node and not keep
sending requests to it. This issue is not fully dealt with by the
current test code, but you can rest assured that a number of possible
solutions have been on the table and discussed for some time now.
Several have been implemented (enforcing hashes or signatures on content, 
per node failure tables, backing off from a node that causes timeouts ...)</p>

<p><b id="attackY">What about attack Y?</b><br>
Freenet
is still in testing and there are bound to be attacks found that we have
not dealt with yet. So if you do manage to figure out a truly new kind
of attack, we are interested in hearing about it. Please keep in mind
what Freenet
is and what it is not, however. No single network can offer everybody
everything, and there are security issues that Freenet,
by it's nature, may not deal with to extent you might wish. If this
upsets you, all of our code is freely available, so you are free to
take as much of it as you like and write your own distributed network
that suits your desires. </p>

<p><b id="rabbit">Where can I get a high quality copy of the rabbit icon?</b><br>
<a href="/image/rabbit/freenet-bunny.svg">Here</a>.</p>
