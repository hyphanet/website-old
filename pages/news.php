<!-- Please keep this to at-most 3 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style).  Additionally, please remove obsolete news items (such as
old new build announcements) --> 
<h3>Financial Status</h3>
The project's current Paypal balance is <b><? 
include("paypaltotal.txt"); 
?></b>.  The project requires approximately $2,300 per month to pay for 
its 
full time developer, Matthew Toseland.  If you would like to help 
support the Freenet Project, you can make a convenient donation through 
our <a href="/index.php?page=donate">donations page</a>.

<h3>News</h3>
<b>2nd August, 2005: New darknet routing algorithm, paper, 0.7</b><br>
Ian and Oskar recently gave <a href="http://freenetproject.org/papers/vegas1_dc.pdf">a presentation</a> at <a href="http://www.defcon.org/">DEFCON</a>. This concerned a new emphasis for the project - making a globally scalable friend-to-friend darknet - which eliminates a whole swathe of attacks and makes Freenet far more usable in the medium term in hostile regimes such as China and the Middle East. Some have in the past suggested steganography; without a darknet topology, steganography is worthless because all nodes can be discovered quickly and cheaply by any attacker. It also describes a promising new routing algorithm which we are now implementing (although it will require further work).<p>
We have recently had some <a href="http://yro.slashdot.org/yro/05/08/01/118257.shtml?tid=153&tid=95&tid=17">slashdot</a> and <a href="http://nytimes.com/2005/08/01/technology/01file.html">NY Times</a> coverage in relation to this presentation. We can now announce that we have a pre-alpha of 0.7 in early semi-public testing. This implements the new routing algorithm, but is neither user-friendly nor secure at this point. If you are keen to help test it (we don't yet need massive numbers of testers; we will put out a public alpha when it is more feature complete and more tested), please contact Toad at toad at amphibian dot dyndns dot org or join #freenet on irc.freenode.net. Coders will be very welcome; there will be a steepish learning curve but we will be delighted to help you to contribute. Please keep in contact while testing 0.7, although as it progresses, we <b>will</b> eventually want to have people inviting their friends for a nice darknet topology so we can test routing - but for now, everyone on the darknet needs to stay in personal contact with Toad (Matthew Toseland, the project's hired coder). As always, another way to assist in the development effort is to <a href="/index.php?donate">donate</a> so that our paid coder can continue to work full-time on Freenet.<p>
<b>6th July, 2005 : NO SOFTWARE PATENTS</b><br>
We won! The European Parliament overwhelmingly rejected the software patent directive. More <a href="http://www.ffii.org/">here</a> (may be down due to litigation).<p>
<b>13th May, 2005 : Comments on recent story in "The Register"</b><br>
A recent story in <a href="http://theregister.co.uk">The Register</a> claims to have exclusively
discovered a vulnerablilty in Freenet that would allow an attacker to determine what you
had downloaded from Freenet.  This issue is not news to us, we have been aware of it
since at least October 2003, when it was publicly <a href="http://thread.gmane.org/gmane.network.freenet.devel/6423">
raised and discussed</a> on our mailing list.  
<p>
The article does not stress the fact that while
the attack as described requires someone to have direct access to your computer, Freenet is not
designed to thwart forensic analysis of your hard disk, but there are <a 
href="http://www.google.co.uk/search?q=encrypted+filesystem&sourceid=mozilla-search&start=0&start=0&ie=utf-8&oe=utf-8&client=firefox&rls=org.mozilla:en-US:unofficial">numerous
tools</a> which do that have been widely available for years.
<p>
It is the case, however, that even the theoretical possibility of this kind of attack is undesirable, and it will
be addressed in the next major release of Freenet, 0.7, which we are working on at present.

<p>
<b>8th November, 2004 : Unofficial Freenet RPMs now available</b>
<p>Freenet developer Mika Hirvonen has put together some RPMs of the 
Freenet stable and unstable builds which Fedora users can install and 
upgrade conveniently using Yum or Apt-rpm.  You can find further 
information <a 
href="http://nightwatch.mine.nu/freenet/">here</a>.
<p>
<b>27th October, 2004 : Stable build 5099, Stable network reset</b>
<p>Stable build 5099 has been released, all users running the stable
branch should upgrade as this build contains numerous important bugfixes,
mostly related to inserts. The network has been reset because of this.
There are also many changes since 5090, such as the introduction of 
request queueing, a technique to reduce RNFs and improve routing 
accuracy. The network seems a bit overloaded at present and not all content
authors have updated, but it should improve significantly as testing went
well. Instructions for upgrading or installing are <a href="/index.php?page=download">here</a>.</p>
