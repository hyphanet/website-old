<h1>Freenet Frequently Asked Questions</h1>

<h2> Philosophical questions
</h2><ol><li><a href="#what">What is Freenet?</a>

</li><li><a href="#who">Who is behind Freenet?</a>
</li><li><a href="#trust">If authors are anonymous how can you trust information?</a>
</li><li><a href="#donate-bw">Do I have to donate disk space and bandwidth?</a>
</li><li><a href="#leech">I don't have to donate anything when using filesharing application X and I get to leech more.</a>
</li><li><a href="#donate-more-bw">All my friends donate very little space and bandwidth. Why should I donate more?</a>
</li><li><a href="#donate-lot">If I donate a lot will my experience improve significantly?</a>
</li><li><a href="#permanent">What do I get from running a permanent node?</a>
</li><li><a href="#legal">Is Freenet legal?</a>

</li><li><a href="#trouble">Can I get trouble if I run a node?</a>
</li><li><a href="#copyright">What about copyright?</a>
</li><li><a href="#childporn">What about child porn, offensive content or terrorism?</a>
</li><li><a href="#offensive">I don't want my node to be used to harbor child porn, offensive content or terrorism. What can I do?</a>
</li><li><a href="#export">How about encryption export restrictions?</a>
</li><li><a href="#whatelse">I have nothing to hide and don't need anonymity. Is there anything else Freenet can offer?</a>

</li></ol>
<h2> Technical questions
</h2><ol><li><a href="#how">How do I use this software? I downloaded it, but when I run it there's no GUI.</a>
</li><li><a href="#search">Is Freenet searchable?</a>
</li><li><a href="#firewall">How do I get freenet working with a firewall/NAT?</a>
</li><li><a href="#connection-perm">Do I need a permanent connection to run a node?</a>

</li><li><a href="#connections">Why does Freenet only download 1 or 2 files at a time?</a>
</li><li><a href="#io-error">What does I/O error in servlet mean?</a>
</li><li><a href="#store-perm">Why can't Freenet store data permanently?</a>
</li><li><a href="#why-java">Why is Freenet implemented in Java?</a>

</li><li><a href="#fproxy-lan">How do I allow connections to FProxy from other computers?</a>
</li><li><a href="#empty-conf">My freenet.ini (or .conf) file is empty, or nearly so!</a>
</li><li><a href="#fec">What is FEC?</a>
</li><li><a href="#healing">What is healing?</a>
</li><li><a href="#fec-cli">My browser can't save large files from Freenet.  Can I retrieve them from the command line?</a>
</li><li><a href="#distribution">What's this distribution servlet? How do I use it?</a>
</li><li><a href="#seednodes">How do I extract the necessary seedNode values from my own node?</a>
</li><li><a href="#roadmp">Is there a future roadmap of Freenet?</a>

</li><li><a href="#heisenbug">What is a Heisenbug?</a>
</li><li><a href="#whatsnew">What's new?</a>
</li><li><a href="#backtrace">Why are there so many messages in my logfile with a backtrace attached?</a>
</li></ol>
<h2> Publisher questions
</h2><ol><li><a href="#find">If I publish something in Freenet, how will people find it? Don't they have to know the key I used?</a>
</li><li><a href="#chk">How do I publish a Content Hash Key (CHK)?</a>
</li><li><a href="#update">Can Freenet documents be updated / deleted?</a>

</li></ol>
<h2> Contribution questions
</h2><ol><li><a href="#idea">I have this great idea....</a>
</li><li><a href="#contribute">Can I contribute to the Freenet Project?</a>
</li><li><a href="#access">How can I access the code and website?</a>
</li><li><a href="#devtools">What tools do I need to help develop?</a>
</li></ol>
<h2> Security questions

</h2><ol><li><a href="#attack">Won't attack X break Freenet's anonymity?</a>
</li><li><a href="#flooding">Is Freenet vulnerable to flooding attacks?</a>
</li><li><a href="#hash">Why hash keys and encrypt data when a node operator could identify them (the data) anyway if he tried?</a>
</li><li><a href="#cancer">What about hostile "cancer" nodes within the network?</a>
</li><li><a href="#attackY">What about attack Y?</a>
</li></ol>
<h2> Philosophical answers
</h2><p><b id="what">What is Freenet?</b><br>
Freenet
is free software designed to ensure true freedom of communication over
the Internet. It allows anybody to publish and read information with
complete anonymity. Nobody controls Freenet, not even its creators, meaning that the system is not vulnerable to manipulation or shutdown. Freenet

is also very efficient in how it deals with information, adaptively
replicating content in response to demand.  For more information,
please read <a href="index.php?page=whatis">What Is Freenet</a>.</p>

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
more you should consider donating more, making your node permanent and
you should ask your friends to do the same.</p>

<p><b id="donate-lot">If I donate a lot will my experience improve significantly?</b><br>
Your experience will definitely get better, but for a really great
improvement we need more people to start thinking like you. Bandwidth
counts more than diskspace.</p>

<p><b id="permanent">What do I get from running a permanent node?</b><br>
Don't be frightened from the word permanent. It doesn't mean that once you start your node you're hooked to freenet
for life. And once you see how much better it is to run a permanent
node, you will likely not want to switch back to transient. Your node
will connect itself better to the rest of the network, so requesting
keys will be faster. Since you will be getting a lot of traffic it is
likely that the newly stored material will be closer to you (or even on
your very own node) and you will have faster access to the newest
editions of the freesites or the latest uploads in Frost. Without permanent
nodes, there is no network to request from. By running a permanent node you are 
helping the network.<br>Perhaps more importantly, running a permanent node improves
your anonymity. Since all requests coming from a transient node originate on that node,
the node you're connecting to is guaranteed that the request came from you. A permanent
node forwards requests for other nodes too, so the node you connect to can never be sure
if it was actually you requesting or inserting the data in question.</p>

<p><b id="legal">Is Freenet legal?</b><br>
If by legal you mean not illegal, then yes it is. Of course,
anything can be found to be illegal at some point in the future, and
the law can be an ass sometimes, so we can make no guarantee about Freenet's future legality.</p>

<p><b id="trouble">Can I get trouble if I run a node?</b><br>
This is related to the previous question. We have done everything
we can to make it extremely difficult for any sane legal system to
justify punishing someone for running a Freenet

node, and there is little precedent for such action in today's developed
countries. Many legal systems recognise the importance of freedom of
speech, which is Freenet's
core goal. Having said that, there is risk in doing anything that your
government might not agree with; you should make an informed decision
as to whether to take that risk.</p>

<p><b id="copyright">What about copyright?</b><br>
There are some excellent thoughts on this subject on the <a href="index.php?page=philosophy">Philosophy</a> page.</p>

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
Fred (the Freenet REference Daemon) runs as a daemon, or service, in the background. You normally talk to it with a Freenet client. One of the services that Fred offers is called fproxy, which lets you talk to Freenet with a web browser. Point your web browser to <a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a> for the gateway page. Try clicking the various links in the "Bookmarks" panel to reach some of the popular Freenet index sites.</p>

<p>If you're looking for applications that run on top of Freenet and provide a different interface or functionality, please see the <a href="index.php?page=tools">Tools</a> page.</p>

<p><b id="search">Is Freenet searchable?</b><br>
No search mechanism has yet been implemented. One of the design
goals was to make it impossible to locate the exact place where any
piece of information is stored. Even a server operator cannot determine
what is stored at his own node. This naturally makes searching very
difficult. Information is currently retrieved by "keys" which should be
guessable, or communicated by some other means.</p>
<p>Proposals for adding safe searching and indexing capabilities to Freenet are being discussed for the future. For example, Freenet documents can contain hyperlinks which could be spidered in the same way as the web -- for example, see <a href="http://www.freenet.org.nz/search/">this spider</a> (WARNING: NOT ANONYMOUS!). Alternately, lists of keywords or other metadata could be circulated through the network. </p>


<p><b id="firewall">How do I get freenet working with a Firewall/NAT?</b><br>
<ol>
<li>Open the <b>freenet.conf</b> or <b>freenet.ini</b> file in a text 
editor.  On Windows you will normally find this file in <b>c:\Program 
Files\Freenet</b>, on Linux you will find it wherever you unpacked the 
Freenet tarball.
<li>Find the line containing the <b>ipAddress</b> setting and change it 
to:
<pre>
ipAddress=x.x.x.x
</pre>
...where x.x.x.x is the IP address of your NAT or Firewall (consult the 
manual if you are unsure how to determine this).
<li>Find the line containing <b>listenPort</b> and take a note of the 
number it is set to - do <i>not</i> change it.
<li>Configure your NAT or firewall to forward connections to the 
listenPort number that you noted in the previous step, to the same port 
on your computer (you will probably need to know your computer's 
internal IP address which will often begin with 192.168.x.x)
</ol>
<p><b id="connection-perm">Do I need a permanent connection to run a node?</b><br>
No, but it is preferred. You can run the software and test it from
a "transient" connection (such as provided by typical modem/ISP
setups), but for the network as a whole to be most useful, we will need
as many permanent nodes as possible (most cable modem or DSL setups are
sufficiently "permanent" for this). A later version of Freenet may take better advantage of transient nodes.</p>

<p><b id="connections">Why does Freenet only download 1 or 2 files at a time?</b><br>
Many browsers limit the number of simultaneous connections to something far too low for efficiently browsing Freenet (since Freenet
pages often have much higher latency than web pages). This can usually
be reconfigured. For example, for Mozilla, create a file with the
following contents called user.js in the directory with prefs.js, or append to an existing user.js:</p>

<code>
user_pref("network.http.max-connections", 200);<BR>
user_pref("network.http.max-connections-per-server", 100);<BR>
user_pref("network.http.max-persistent-connections-per-server", 10);<BR>
user_pref("network.http.max-persistent-connections-per-proxy", 50);<BR>
</code>
<p>Note that these settings will cause mozilla to use more
connections for all your browsing, which may not be desirable from a
network congestion point of view; volunteers to make mozilla allow this
sort of settings to be set per host would be welcome...</p>

<p><b id="io-error">What does I/O error in servlet mean?</b><BR>
This message in the log file is normally harmless.  Freenet writes this to the log any time your browser breaks a connection to fproxy (<i>e.g.</i> if you clicked "Stop" in your browser while waiting for a Freenet page's images to load).</p>

<p><b id="store-perm">Why can't Freenet store data permanently?</b><BR>
Because we can't find a way to do this without compromising Freenet's
other goals. For example, people often suggest that someone's node could
just never drop data they want to cache permanently. This, however,
won't work because even if the data is still available on their node,
there is no way to ensure that requests for that data will be routed to
that node. We have considered many other ways that Freenet could store data permanently, but they either won't work, or compromise Freenet's core goals of anonymity, and scalability.</p>


<p><b id="why-java">Why is Freenet implemented in Java?</b><BR>
Opinions differ about the choice of java for the reference implementation of
freenet (even among the core developers). <a href="http://www.freenetproject.org/index.php?page=people">Ian Clarke</a> and several
other developers are java proponents and the choice for java was made. Even if everybody could be convinced
to switch to a different language reimplementing the current freenet protocol would be quite a big task, and
take up a significant amount of time, while there is only a limited about of developer-time available. Flame wars
on the development list about the language choice aren't welcome, people willing to implement freenet
in other languages however are very much encouraged to try. Don't underestimate the amount of work however.

<p><b id="fproxy-lan">How do I allow connections to FProxy from other computers?</b><br>
If you want everyone to be able to use your node, then add the following lines to your freenet.conf or freenet.ini file:
</p><code>
mainport.bindAddress=*<BR>
mainport.allowedHosts=*<BR>
</code><p>
Of course, this leaves your node wide open, unless you control
access with a firewall of some sort.  If you'd prefer to use access
controls within Freenet, then you can use lines like this:</p>
<code>
mainport.bindAddress=*<br>
mainport.allowedHosts=127.0.0.1,192.168.1.0/24<br>
</code>

<p><b id="empty-conf">My freenet.ini (or .conf) file is empty, or nearly so!</b><br>
If you tried to install Freenet
at a time when your Java runtime environment was not working, you might
have created a broken configuration file.  Make sure your Java
environment works.  Then, remove the config file and try running the Freenet setup again.  (On Unix, this is ./start-freenet.sh .)


</p><p><b id="fec">What is FEC?</b><br>
FEC stands for Forward Error Correction.  When large files are inserted into Freenet, they are split into several small blocks -- this is called a <i>splitfile</i>.
FEC adds redundant check blocks to a splitfile, so that if some of the
blocks fall out of the network or can't be found, you might still be
able to retrieve enough of the file to reconstruct it.</p>

<p><b id="healing">What is healing?</b><br>
When you download a splitfile that uses FEC (see previous
question), some of the blocks may have become unavailable.  Healing
lets you repair the file by recalculating the data for the missing
blocks, and then reinserting them into Freenet.</p>


<p><b id="fec-cli">My browser can't save large files from Freenet.  Can I retrieve them from the command line?</b><br>
Yes, you can.  Use this command:
</p><code>
java -cp freenet.jar freenet.client.cli.Main get KEY filename<BR>
</code><p>
Be sure to specify the filename you want to save the key into.  You can use the --help option to learn the other switches, such as healing percentage, HTL for the individual blocks, etc.<p>
You can also use standalone freenet tools like <a href="http://127.0.0.1:8888/SSK@CKesZYUJWn2GMvoif1R4SDbujIgPAgM/fuqid/9//">FUQID</a> (windows only, link only works if you have fproxy running on 127.0.0.1:8888), or <a href="http://freenetproject.org/index.php?page=fcptools">FCPTools</a>.

<p><b id="distribution">What's this distribution servlet? How do I use it?</b><br>
The distribution servlet allows you to provide friends/colleagues/people you meet in IRC to download a copy of Freenet
from your node. They get seednodes extracted from your node's routing
tables, speeding their integration into the network. To use it, go to <a href="http://127.0.0.1:8891/">http://127.0.0.1:8891/</a>
and create a URL. This URL will be good for 24 hours or 100 hits,
whichever comes first. People visiting the URL will find a copy of Freenet for download.</p>

<p><b id="seednodes">How do I extract the necessary seedNode values from my own node?</b><br>

Temporarily stop your node with sh stop-freenet.sh Then type sh start-freenet.sh --export myref.ref Wait a few seconds, until java processes stop. Then do sh start-freenet.sh
again to start the node normally. myref.ref will contain your node
reference. Make sure that if you post this for others to use, that you
avoid extra linebreaks.</p>


<p><b id="roadmp">Is there a future roadmap of Freenet?</b><br>
Yes, there is a provisional, unofficial roadmap of Freenet, describing the possible future development of the project <a href="http://www.freenetproject.org/index.php?page=roadmap"> here.</a>

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

<p><b id="whatsnew">What's new?</b><br>
To see the latest changes of the builds in the stable branch, you can go to <b><a href="http://www.freenetproject.org/index.php?page=whatsnew">What's new?</b>


<p><b id="backtrace">Why are there so many messages in my logfile with a backtrace attached?</b><br>
Fred (and freenet in general) are still very much in development, and if something goes wrong it's worthwhile
to know exactly what went wrong.

<h2>Publisher answers
</h2><p><b id="find">If I publish something in Freenet, how will people find it? Don't they have to know the key I used?</b><br>
Yes, people will have to know what key you used to publish your
information. This means you will have to announce your key in some way.</p>
<p>The most common way to do this is to send a message, containing
your key and brief description of your information, to the author of
one of the existing Freenet sites. Most of the "portal" sites which are linked from the Freenet
web interface (fproxy) have a submission form which lets you send them
messages anonymously. You could also send your key to people by using
the Freenet mailing lists, or the IRC channel (irc.freenode.net #freenet), or by private e-mail, or by advertising your Freenet

site on your World Wide Web site. Or if you're feeling extravagant, you
could try skywriting it. (Graffiti is not recommended, for legal
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
<p>One may employ a date-based redirect (DBR), though -- these are
evaluated according to the current time and date. A DBR with a
frequency of a day will point at a new target key every 24 hours. If
this new target is always inserted before the DBR rolls over, the
illusion of having the "same" document that is still updatable is
achieved. If nothing resides at the current target, it appears as if
the content were "deleted".</p>
<p>It should be noted, though, that by not going through the DBR
one can access the target corresponding to any time in the past (as
long as the content has not been "pushed out" to make room) or future
(as long as the content has been already inserted).</p>
<p>The problem is it is not clear how useful they are for documents
that change at irregular intervals. DBR sites, also, may not be
retired, as they will break soon, after future-dates insertions expire.</p>
<p>As of today, probably the best way for most cases is the use of "edition" publishing.</p> 


<h2> Contribution answers
</h2><p><b id="idea">I have this great idea....</b><br>
Good! First step: read the <a href="index.php?page=lists">mailing list archives</a>.
Odds are good that someone else had the same idea and discussed it with
the group. Either a flaw was found in the idea, or perhaps it was
decided to postpone implementing the idea until later. Some examples of
ideas already discussed are storing information by content hash, key
redirection, signed keys/data, use of UDP, server discovery, URLs,
document versioning, and others. If you don't see the idea discussed in
the archives, by all means bring it up in the appropriate mailing list.</p>

<p><b id="contribute">Can I contribute to the Freenet Project?</b><br>
Absolutely. Even if you don't have the time or skills to become a co-developer of the project, you can contribute in other ways:</p>

<ul><li> Help test Freenet by installing and configuring the server software on your machine.
</li><li> Install the client software on your machine to test retrieving information and publishing your own.
</li><li> Work on the Freenet web site (including the FAQ).
</li><li> Contribute your ideas to the discussion lists.
</li></ul><p>If you are a developer, you can also help by designing and developing other applications to run on Freenet.</p>
<P> People that want to contribute to Freenet in <a href="http://www.freenetproject.org/index.php?page=openjobs">any way</a>, by contributing artwork, new ideas, or even correcting spelling/grammar mistakes or ideas for adding new pages/paragraphs on this site, are also welcome to <a href="mailto:newsbyte@freenetproject.org">email</a>. </p>

<p><b id="access">How can I access the code and website?</b><br>
The Freenet project is hosted at SourceForge. You will have to create an account for yourself there, then send email to the project coordinator asking him to add you to the group. Further details are available on the Freenet and SourceForge web sites.</p>


<p><b id="devtools">What tools do I need to help develop?</b><br>
To build and deploy the Freenet server, you will need Java tools compatible with Sun's JDK 1.1 or later. To retrieve and update the code at SourceForge you will need a network version of <i>CVS</i>,
(This is not necessary if you only want to download, compile, and run
the server without contributing to its code). To do web development you
will need <i>SSH</i> (or <i>OpenSSH</i>). Further instructions for building and deploying the server are included with the code itself.</p>


<h2> Security answers
</h2><p><b id="attack">Won't attack X break Freenet's anonymity?</b><br>
Short answer: Probably yes.</p>
<p>Long answer:</p>
<p>Freenet does not offer true anonymity in the way that the <i>Mixmaster</i>

and cypherpunk remailers do. Most of the non-trivial attacks (advanced
traffic analysis, compromising any given majority of the nodes, etc.)
that these were designed to counter would probably be successful in
identifying someone making requests on Freenet.</p>
<p>On Freenet, whatever you do, your identity is still revealed to the first Freenet
Node you talk to, and even if you limit yourself to talk only to trusted
nodes (a feature that will be implemented in the future), they will
have to talk to the rest of the network at some time or another. The
anonymity that Freenet
offers is really just obscurity in the fact that it is hard to prove
that your node wasn't proxying the request for or insert of data on
behalf of somebody else (who might also just have been proxying it).</p>
<p>The problem is that the only way that you can offer true
anonymity is if the client can directly control the routing of data,
and thus encrypt it with a series of keys of the nodes it will pass
through (a la Mixmaster). Freenet's

dynamic routing cannot offer that, so to attain true anonymity you have
to send the message through an external network of anonymous remailers
first (a future SMTP-&gt;Freenet bridge would make this possible).
There are also plans for doing mixmaster-style injection of requests
over the "standard" protocol, however this probably won't be implemented
before version 1.0, which is still some way off.</p>

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
solutions (for example allowing clients to vote on the validity of the
information returned on requests, and enforcing that all information be
indexed by a hash of the contents at the lowest level) have been on the
table and discussed for some time now.</p>


<p><b id="attackY">What about attack Y?</b><br>
Freenet
is still in testing and there are bound to be attacks found that we have
not dealt with yet. So if you do manage to figure out a truly new kind
of attack, we are interested in hearing about it. Please keep in mind
what Freenet
is and what it is not, however. No single network can offer everybody
everything, and there are security issues (like anonymity, discussed
above) that Freenet,
by it's nature, will never deal with to extent you might wish. If this
upsets you, all of our code is freely available, so you are free to
take as much of it as you like and write your own distributed network
that suits your desires. </p>
