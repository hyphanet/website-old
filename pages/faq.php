Freenet Frequently Asked Questions

<h1> Philosophical questions
</h1><ol><li><a href="#what">What is Freenet?</a>

</li><li><a href="#who">Who is behind Freenet?</a>
</li><li><a href="#trust">If authors are anonymous how can you trust information?</a>
</li><li><a href="#donate-bw">Do I have to donate disk space and bandwith?</a>
</li><li><a href="#leech">I don't have to donate anything when using filesharing application X and I get to leech more.</a>
</li><li><a href="#donate-more-bw">All my friends donate very little space and bandwith. Why should I donate more?</a>
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
<h1> Technical questions
</h1><ol><li><a href="#how">How do I use this software? I downloaded it, but when I run it there's no GUI.</a>
</li><li><a href="#search">Is Freenet searchable?</a>
</li><li><a href="#firewall">How do I get freenet working with a Firewall/NAT?</a>
</li><li><a href="#connection-perm">Do I need a permanent connection to run a node?</a>

</li><li><a href="#warez">1 c4n'T 63t n0 w4ReZ, f1L3z, mp3z, n07hiNg!?!</a>
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

</li><li><a href="#heisenbug">What is a Heisenbug?</a>
</li><li><a href="#backtrace">Why are there so many messages in my logfile with a backtrace attached?</a>
</li></ol>
<h1> Publisher questions
</h1><ol><li><a href="#find">If I publish something in Freenet, how will people find it? Don't they have to know the key I used?</a>
</li><li><a href="#chk">How do I publish a Content Hash Key (CHK)?</a>
</li><li><a href="#update">Can Freenet documents be updated / deleted?</a>

</li></ol>
<h1> Contribution questions
</h1><ol><li><a href="#idea">I have this great idea....</a>
</li><li><a href="#contribute">Can I contribute to the Freenet Project?</a>
</li><li><a href="#access">How can I access the code and website?</a>
</li><li><a href="#devtools">What tools do I need to help develop?</a>
</li></ol>
<h1> Security questions

</h1><ol><li><a href="#attack">Won't attack X break Freenet's anonymity?</a>
</li><li><a href="#flooding">Is Freenet vulnerable to flooding attacks?</a>
</li><li><a href="#hash">Why hash keys and encrypt data when a node operator could identify them (the data) anyway if he tried?</a>
</li><li><a href="#cancer">What about hostile "cancer" nodes within the network?</a>
</li><li><a href="#attackY">What about attack Y?</a>
</li></ol>
<h1> Philosophical answers
</h1><p><b id="what">What is Freenet?</b><br>
Freenet
is free software designed to ensure true freedom of communication over
the Internet. It allows anybody to publish and read information with
complete anonymity. Nobody controls Freenet, not even its creators, meaning that the system is not vulnerable to manipulation or shutdown. Freenet

is also very efficient in how it deals with information, adaptively
replicating content in response to demand.  For more information,
please read <a href="index.php?page=whatis">WhatIsFreenet</a>.</p>

<p><b id="who">Who is behind Freenet?</b><br>
Freenet
grew out of a design for an anonymous publication system created by Ian
Clarke while a student at the University of Edinburgh, Scotland. Since
then many other people have contributed towards making Ian's proposal a
reality.</p>

<p><b id="trust">If authors are anonymous how can you trust information?</b><br>
Cryptographic signing of information allows people to prove
authorship, this technique is frequently used to authenticate
authorship of emails. Moreover, you could actually sign information
while remaining anonymous, thus having an anonymous persona. You could
prove that you wrote different pieces of information on Freenet, without revealing your identity. In this way you could build up an anonymous reputation for reliability.</p>


<p><a name="donate-bw">Do I have to donate disk space and bandwith?</a>
You aren't really donating in the sense that you lose the disk
space and the bandwith; but you aren`t really sharing either (at least
not the same way as with filesharing programs). It is more like
pitching in to the common Freenet resource pool.</p>

<p><b id="leech">I don't have to donate anything when using filesharing application X and I get to leech more.</b><br>
Do you get to do that anonymously? Freenet is designed with anonymity in mind, performance comes second.</p>


<p><a name="donate-more-bw">All my friends donate very little space and bandwith. Why should I donate more?</a>
If you are happy with what you are getting then no. But if you want
more you should consider donating more, making your node permanent and
you should ask your friends to do the same.</p>

<p><a name="donate-lot">If I donate a lot will my experience improve significantly?</a>
Your experience will definitely get better, but for a really great
improvement we need more people to start thinking like you. Bandwith
counts more than diskspace.</p>

<p><b id="permanent">What do I get from running a permanent node?</b><br>
Don't be frightened from the word permanent. It doesn't mean that once you start your node you're hooked to freenet
for life. And once you see how much better it is to run a permanent
node, you will likely not want to switch back to transient. Your node
will connect itself better to the rest of the network, so requesting
keys wll be faster. Since you will be getting a lot of traffic it is
likely that the newly stored material will be closer to you (or eveb on
your very own node) and you will have faster access to the newest
editions of the freesites or the latest uploads in Frost. Do you really
need anytihng else? ;-) Oh yeah, you are helping the network too.</p>


<p><b id="legal">Is Freenet legal?</b><br>
If by legal you mean not illegal, then yes it is. Of course,
anything can be found to be illegal at some point in the future, and
the law can be an ass sometimes, so we can make no guarantee about Freenet's future legality other than it should be legal in any fair and just society.</p>

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
know not to request that specific key.</p>

<p><b id="export">How about encryption export restrictions?</b><br>
The Freenet Project has notified the US authorities (since the files are hosted on SourceForge,
which is on US soil) that it will be exporting crypto. As long as your
country doesn't prohibit the use of encryption you are fine.</p>


<p><b id="whatelse">I have nothing to hide and don't need anonymity. Is there anything else Freenet can offer?</b><br>
Yes, in fact even without the anonymity feature Freenet
is very useful because of its unique way it handles content distribution
and information load. In simple terms that means you can publish a
website without worrying about how big the site will be and without
having to put someone elses ad banners on it. Over time that site may
very well become more accessible and faster to load than a site on the
ordinary web.

<h1> Technical answers
</h1><p><b id="how">How do I use this software? I downloaded it, but when I run it there's no GUI.</b><br>
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
Edit your freenet.conf or freenet.ini file, change the ipAddress setting to be the IP address of your firewall or NAT. Also note the listenPort setting, or change it to whatever port you want Freenet to listen on. You now need to configure your firewall/NAT to forward incoming connections on the listenPort to the computer on which your Freenet

node is running. Many modern firewalls and NATs have a web interface to
do this, or if you do not administer the firewall, you will need to ask
your system administrator to do this.</p>

<p><a name="connection-perm">Do I need a permanent connection to run a node?</a>
No, but it is preferred. You can run the software and test it from
a "transient" connection (such as provided by typical modem/ISP
setups), but for the network as a whole to be most useful, we will need
as many permanent nodes as possible (most cable modem or DSL setups are
suffiently "permanent" for this). A later version of Freenet may take better advantage of transient nodes.</p>

<p><b id="warez">1 c4n'T 63t n0 w4ReZ, f1L3z, mp3z, n07hiNg!?!</b><br>
Since Freenet
0.5 was released just recently it is probably still adjusting to the
massive amount of new users joining it. Don't worry, once it adapts it
will be much faster (it was very fast before the release was announced,
so trust us). In the meantime you may try donating more disk space and
bandwith and making your node permanent. It is very important to always
keep your node up to date, so download the update script/program at
least few times a week.</p>


<p><b id="connections">Why does Freenet only download 1 or 2 files at a time?</b><br>
Many browsers limit the number of simultaneous connections to something far too low for efficiently browsing Freenet (since Freenet
pages often have much higher latency than web pages). This can usually
be reconfigured. For example, for Mozilla, create a file with the
following contents called user.js in the directory with prefs.js, or append to an existing user.js:</p>

<div class="simplebox" align="center">
user_pref("network.http.max-connections", 200);
user_pref("network.http.max-connections-per-server", 100);
user_pref("network.http.max-persistent-connections-per-server", 10);
user_pref("network.http.max-persistent-connections-per-proxy", 50);
</div>
<p>Note that these settings will cause mozilla to use more
connections for all your browsing, which may not be desirable from a
network congestion point of view; volunteers to make mozilla allow this
sort of settings to be set per host would be welcome...</p>

<p><a name="io-error">What does I/O error in servlet mean?</a>
This message in the log file is normally harmless.  Freenet writes this to the log any time your browser breaks a connection to fproxy (<i>e.g.</i> if you clicked "Stop" in your browser while waiting for a Freenet page's images to load).</p>


<p><a name="store-perm">Why can't Freenet store data permanently?</a>
Because we can't find a way to do this without compromizing Freenet's
other goals. For example, people often suggest that someone's node could
just never drop data they want to cache permanently. This, however,
won't work because even if the data is still available on their node,
there is no way to ensure that requests for that data will be routed to
that node. We have considered many other ways that Freenet could store data permenantly, but they either won't work, or compromize Freenet's core goals of anonymity, and scalability.</p>


<p><a name="why-java">Why is Freenet implemented in Java?</a>
The core reasons for implementing Freenet in Java are:
</p><ul><li> Rapid development
</li><li> Cross-platform
</li><li> Good networking support
</li><li> Open Source implementations available

</li></ul>Almost everyone has their opinion as to which languages are
better, sometimes these opinions are perhaps better described as
religous convictions!  Just remember that various architectural design
decisions can have a much greater impact on efficiency and
ease-of-development than the choice of programming language.<p></p>

<p><a name="fproxy-lan">How do I allow connections to FProxy from other computers?</a>
If you want everyone to be able to use your node, then add the following lines to your freenet.conf or freenet.ini file:
</p><div class="simplebox" align="center">
mainport.bindAddress=*
mainport.allowedHosts=*

</div>
Of course, this leaves your node wide open, unless you control
access with a firewall of some sort.  If you'd prefer to use access
controls within Freenet, then you can use lines like this:
<div class="simplebox" align="center">
mainport.bindAddress=*
mainport.allowedHosts=127.0.0.1,192.168.1.0/24
</div>

<p><a name="empty-conf">My freenet.ini (or .conf) file is empty, or nearly so!</a>
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


<p><a name="fec-cli">My browser can't save large files from Freenet.  Can I retrieve them from the command line?</a>
Yes, you can.  Use this command:
</p><div class="simplebox" align="center">
java -cp freenet.jar freenet.client.cli.Main get KEY filename
</div>
Be sure to specify the filename you want to save the key into.  You can use the --help option to learn the other switches, such as healing percentage, HTL for the individual blocks, etc.<p></p>


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
something's wrong.</p>

<p><b id="backtrace">Why are there so many messages in my logfile with a backtrace attached?</b><br>
The development version (0.4) of fred outputs a backtrace if a log
entry is triggered by an exception. To turn it quiet you must change
the java source in Freenet/support/StandardLogger.java  The relevant parts are calls to printStackTrace.</p>

<h1>Publisher answers
</h1><p><b id="find">If I publish something in Freenet, how will people find it? Don't they have to know the key I used?</b><br>
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


<h1> Contribution answers
</h1><p><b id="idea">I have this great idea....</b><br>
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
</li><li> Work on the Freenet web site (including wiki FAQ).
</li><li> Contribute your ideas to the discussion lists.
</li></ul><p>If you are a developer, you can also help by designing and developing other applications to run on Freenet.</p>

<p><b id="access">How can I access the code and website?</b><br>
The Freenet project is hosted at SourceForge. You will have to create an account for yourself there, then send email to the project coordinator asking him to add you to the group. Further details are available on the Freenet and SourceForge web sites.</p>


<p><b id="devtools">What tools do I need to help develop?</b><br>
To build and deploy the Freenet server, you will need Java tools compatible with Sun's JDK 1.1 or later. To retrieve and update the code at SourceForge you will need a network version of <i>CVS</i>,
(This is not necessary if you only want to download, compile, and run
the server without contributing to its code). To do web development you
will need <i>SSH</i> (or <i>OpenSSH</i>). Further instructions for building and deploying the server are included with the code itself.</p>


<h1> Security answers
</h1><p><b id="attack">Won't attack X break Freenet's anonymity?</b><br>
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
first (a future SMTP- &gt;Freenet bridge would make this possible).</p>
<p>It is our intention that Freenet's
node-to-node communications should be encrypted, but that has not been
implemented either (with the current state of the network we are more
interested in testing if the theoretical ideas regarding the routing
carry over into reality; you have to have a house before you can lock
the door). </p>

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
