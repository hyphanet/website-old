<!-- Please keep this to at-most 3 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style).  Additionally, please remove obsolete news items (such as
old new build announcements) --> 

<h3>Blog</h3>

<p><b>12th June, 2009 - Freenet 0.7.5 released!</b></p>
<p>
<script type="text/javascript" src="http://www.reddit.com/r/programming/button.js?url=http://freenetproject.org/index.html"></script>
<script type="text/javascript">
digg_url = 'http://digg.com/software/Freenet_project_releases_Freenet_0_7_5_the_darknet';
digg_skin = 'compact';
</script>
<script src="http://digg.com/tools/diggthis.js" type="text/javascript"></script>
</p>
<p>The Freenet Project is very pleased to announce the release of Freenet 0.7.5.</p>
<p>Freenet is free software designed to allow the free exchange of information over the Internet without fear of censorship, or reprisal. To achieve this Freenet makes it very difficult for adversaries to reveal the identity, either of the person publishing, or downloading content. The Freenet project started in 1999, released Freenet 0.1 in March 2000, and has been under active development ever since.</p>
<p>Freenet is somewhat unusual in that you can publish content to Freenet, and then disconnect from the network.  This content will remain available to other Freenet users, although it may eventually be deleted if nobody is interested in it.  Freenet will copy and move the content around the network according to demand, making it very difficult for an adversary to remove content.  Freenet will automatically create more copies of popular content to ensure that it will always be available.</p>
<p>Freenet 0.7 introduced the "darknet" concept, allowing users to only connect to their trusted friends (and through them to their friends' friends, and the entire network), greatly reducing their vulnerability to attack. You can use Freenet even if you don't know any other Freenet users, it just won't be as secure.</p>
<p> Freenet 0.7.5 features major improvements to performance and usability, as well as improvements to security and robustness. In particular: </p>
<ul>
<li>Freenet now <a href="http://google-opensource.blogspot.com/2009/05/improving-freenets-performance.html">uses a database</a> to store longer-term data that must survive a restart.  This increases Freenet's speed and reduces its memory usage.  In particular, you can now have almost any number of downloads and uploads in progress without worrying about memory usage.</li>
<li>Improvements to the web interface make it clearer what you can do with Freenet, show progress when loading a page or file will take more than a few seconds, integrate search into the browse page, and generally improve usability in many areas.</li>
<li>Significantly improved performance for inserting and retrieving files and especially pages, and also for Freenet's initial connection to the network.</li>
<li>A new installer for Windows which works with Vista as well as Windows XP/2000 (Freenet also works on Mac and Linux systems).</li>
<li>Many other optimizations.</li>
<li>Lots and lots of bug fixes!</li>
</ul>
<p>There are versions of Freenet 0.7.5 for Windows, Mac, and Linux.  They can be downloaded from:</p>
<p><a href="http://freenetproject.org/download.html">http://freenetproject.org/download.html</a></p>
<p>If you have any difficulty getting Freenet to work, or any questions not answered in the <a href="/faq.html">faq, please join us on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a> in the #freenet channel at irc.freenode.net, or email the <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/support/">support mailing list</a>. If you have any suggestions for how to improve Freenet, please visit <a href="http://freenet.uservoice.com/">our uservoice page</a>. </p>
<p>There is a lot of work still to do on Freenet, particularly when it comes to ease of use.  If you have Java programming or web design skills, or would like to help translate Freenet into your own language, and would like to help us improve Freenet, please join our <a href="http://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl/">development mailing list</a> and introduce yourself.</p>


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
