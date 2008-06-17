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

<ol><li><a href="#attack">Won't attack X break Freenet's anonymity?</a>
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
as to whether to take that risk.</p>

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
but this doesn't always work (and it never works if you don't have the UPnP plugin loaded).</p>
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
fproxy.allowedHosts=0.0.0.0<BR>
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
</h2><p><b id="attack">Won't attack X break Freenet's anonymity?</b><br>
Short answer: Probably yes.</p>
<p>Long answer:</p>
<p>Freenet does not offer true anonymity in the way that Tor and the
<i>Mixmaster</i> cypherpunk remailers do. Most of the non-trivial attacks 
(advanced traffic analysis, compromising any given majority of the nodes, etc.)
that these were designed to counter would probably be successful in
identifying someone making requests on Freenet.</p>
<p>Your identity is always visible to the nodes you are actually connected to.
They know what keys your node requests: your anonymity against them
is a limited level of plausible deniability, that maybe you are 
forwarding these requests for some other node. Unfortunately, your peers can do 
<a href="http://wiki.freenetproject.org/CorrelationAttacks">correlation 
attacks</a> to figure out which requests are from you and which requests are from
your peers or somebody else. These attacks rely on the attacker knowing what
the keys are for, and there being lots of them, so for example, a big splitfile, 
a big freesite inserted regularly, a Frost poster maybe who uploads files too.</p>
<p>At the moment, the most important thing you can do to protect yourself is to 
get lots of <a href="http://127.0.0.1:8888/friends/">"Friends"</a>
aka <a href="http://wiki.freenetproject.org/DarkNet">darknet</a> connections:
these are permanent, fixed connections to people you actually know. Once you have 
enough, you can turn off <a href="http://wiki.freenetproject.org/OpenNet">opennet</a> (aka insecure mode),
and only connect to people you know. This makes it very much more expensive for an 
attacker, as he has to infiltrate the social network, rather than just 
<a href="http://wiki.freenetproject.org/NodeHarvesting">harvesting</a> the opennet
and connecting to nodes (which is technically very easy). One significant 
advantage over Tor etc is that if enough users only connect to Friends, it is very
difficult to block the entire network; blocking Mixmaster or the current Tor on 
the other hand is very easy.
<p>The only way that we can offer true
anonymity is if the client can directly control the routing of data,
and thus encrypt it with a series of keys of the nodes it will pass
through (a la Mixmaster). There are plans to implement 
<a href="http://wiki.freenetproject.org/PremixRouting">"premix routing"</a>
during <a href="http://wiki.freenetproject.org/FreenetZeroPointEight">Freenet
0.8</a>, which would function similarly to Mixmaster remailers, Tor, etc, for
the first few hops, but this is still a long way off.</p>
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
Nonetheless, you have a reasonably low bandwidth multiplier (the total number of nodes visited, around 20 on average).</p>

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
everything, and there are security issues (like anonymity, discussed
above) that Freenet,
by it's nature, may not deal with to extent you might wish. If this
upsets you, all of our code is freely available, so you are free to
take as much of it as you like and write your own distributed network
that suits your desires. </p>

<p><b id="rabbit">Where can I get a high quality copy of the rabbit icon?</b><br>
<a href="/image/rabbit/freenet-bunny.svg">Here</a>.</p>
