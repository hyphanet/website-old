<!-- Please keep this to at-most 3 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style).  Additionally, please remove obsolete news items (such as
old new build announcements) --> 

<h3>News</h3>

<p><b>9th June, 2009 - 0.7.5 release candidate 1!</b></p>
<p>The Freenet Project is very pleased to announce the first release candidate (beta) of Freenet 0.7.5.</p>
<p>Freenet is free software designed to allow the free exchange of information over the Internet without fear of censorship, or reprisal. To achieve this Freenet makes it very difficult for adversaries to reveal the identity, either of the person publishing, or downloading content. The Freenet project started in 1999, released Freenet 0.1 in March 2000, and has been under active development ever since.</p>
<p>Freenet is somewhat unusual in that you can publish content to Freenet, and then disconnect from the network.  This content will remain available to other Freenet users, although it may eventually be deleted if nobody is interested in it.  Freenet will copy and move the content around the network according to demand, making it very difficult for an adversary to remove content.  Freenet will automatically create more copies of popular content to ensure that it will always be available.</p>
<p>Freenet 0.7 introduced the "darknet" concept, allowing users to only connect to their trusted friends (and thus to their friends' friends, and the entire network), greatly reducing their vulnerability to attack. You can use Freenet even if you don't know any other Freenet users, it just won't be as secure.</p>
<p>Freenet 0.7.5 beta 1 features major improvements to performance and usability, as well as improvements to security and robustness. In particular:</p>
<ul><li>Freenet now uses a database (DB4O) to store longer-term data that must survive a restart.  This significantly increases Freenet's speed and reduces its memory usage. In particular, you can now have almost any number of downloads and uploads in progress without worrying about memory usage.</li>
<li>Improvements to the web interface make it clearer what you can do with Freenet, show progress when loading a page or file will take more than a few seconds, integrate search into the browse page, and generally improve usability in many areas.</li>
<li>Significantly improved performance for inserting and retrieving files and especially sites, and also Freenet's initial connection to the network</li>
<li>A new installer for Windows which works with Vista as well as Windows XP/2000 (Freenet also works fine on Mac and Linux systems).</li>
<li>Many other optimizations</li>
<li>Lots and lots of bug fixes!</li></ul>
<p>We need wider testing for 0.7.5 before we can declare it to be ready, so this is only a release candidate. If you are an existing or past Freenet user, or just want to get in before everyone else does, please test Freenet 0.7.5 rc1 (which is equal to build 1218). In particular we are concerned about possible bugs in the installers (for Windows and Mac in particular), but please report any bugs or problems you have downloading, installing, or using Freenet. General feedback on how usable and fast Freenet is would also be welcome. Hopefully 0.7.5 will be released within the next week. Please get your friends to try it out, and tell us everything that they got stuck on, but please don't slashdot us yet! :)</p>
<p>You can get Freenet from <a href="/download.html">the download page</a>.</p>
<p>You can report bugs on <a href="https://bugs.freenetproject.org">the bug tracker</a>, <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/support/">the support list</a>, or talk to us on IRC on #freenet on irc.freenode.net.</p>
<p>If you have Java programming or web design skills, and would like to help us improve Freenet, please join our development mailing list and introduce yourself. Also, if you can insert a full XMLSpider index anonymously, please do so immediately and contact us with the new key. Translators are also always welcome, if you can translate strings from English into some language that Freenet does not properly support yet, please contact us.</p>
<p><b>7th May, 2009 - Another big donation funds ongoing development</b></p>
<p><a href="http://www.google.com/">Google</a>'s <a href="http://code.google.com/opensource/">Open Source team</a> has donated US$18,000 to the Freenet Project to 
support the ongoing development of the Freenet software (thanks again 
Google!).</p>
<p>Their last donation funded the db4o project, which has now been merged into 
Freenet, greatly improving performance for large download queues while 
reducing memory usage, amongst other benefits.</p>
<p>We are currently working on Freenet 0.8, which will be released later this 
year, and will include additional performance improvements, usability work, 
and security improvements, as well as the usual debugging. Features are not 
yet finalized but we expect it to include Freetalk (a new anonymous web 
forums tool), a new Vista-compatible installer for Windows (that part will be 
out in a few days), and hopefully Bloom filter sharing, a new feature 
enabling nodes to know what is in their peers' datastores, greatly improving 
performance, combined with some related security improvements.</p>
<p><b>8th May, 2008 - Freenet 0.7.0 "Darknet" released!</b></p>
<p>The Freenet Project is very pleased to announce the release of Freenet 0.7.0.</p>

<p>Freenet is software designed to allow the free exchange of information over the Internet without fear of censorship, or reprisal.  To achieve this Freenet makes it very difficult for adversaries to reveal the identity, either of the person publishing, or downloading content.  The Freenet project started in 1999, released Freenet 0.1 in March 2000, and has been under active development ever since.</p>

<p>Freenet is unique in that it handles the storage of content, meaning that if necessary users can upload content to Freenet and then disconnect.  We've discovered that this is a key requirement for many Freenet users.  Once uploaded, content is mirrored and moved around the Freenet network, making it very difficult to trace, or to destroy.   Content will remain in Freenet for as long as people are retrieving it, although Freenet makes no guarantee that content will be stored indefinitely.</p>

<p>The journey towards Freenet 0.7 began in 2005 with the realization that some of Freenet's most vulnerable users needed to hide the fact that they were using Freenet, not just what they were doing with it.  The result of this realization was a ground-up redesign and rewrite of Freenet, adding a "darknet" capability, allowing users to limit who their Freenet software would communicate with to trusted friends.  This would make it far more difficult for a third-party to determine who is using Freenet.</p>

<p>Freenet 0.7 also embodies significant improvements to almost every other aspect of Freenet, including efficiency, security, and usability.  Freenet is available for Windows, Linux, and OSX. It can be downloaded from:</p>

<p><a href="/download.html">http://freenetproject.org/download.html</a></p>

<p>If you have any difficulty getting Freenet to work, or any questions not answered in <a href="/faq.html">the faq</a>, please join us on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a> in the <a href="irc://irc.freenode.net/%23freenet">#freenet</a> channel at irc.freenode.net. Thank you.</p>

<p>This release would not have been possible without the efforts of numerous volunteers, and Matthew Toseland, Freenet's full time developer. Matthew's work is funded through donations via our website (as well as a few larger sponsors from time to time).  We ask that anyone who can help us to ensure Matthew's continued employment visit our donations page and make a contribution at:</p>

<p><a href="/donate.html">http://freenetproject.org/donate.html</a></p>
