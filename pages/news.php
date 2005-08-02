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
Ian and Oskar recently gave a presentation at <a href="http://www.defcon.org/">DEFCON</a>. You can download it <a href="http://freenetproject.org/papers/vegas1_dc.pdf">here</a>. This describes a new darknet-specific routing algorithm (read the presentation if you don't know what this means), which we are implementing for Freenet 0.7. There is still a long way to go with both the algorithm and the code, but we are now testing a pre-alpha. This is a very long way from being feature complete, fully secure, or user-friendly, but if you want to help test it (right now we don't need huge numbers of testers, so only if you're really keen; we will release a public alpha when it's been tested a bit more and is more feature complete), join the IRC channel and talk to toad_, or contact me via email (toad at amphibian.dyndns.org). Coders would also be very welcome although there will be a steepish learning curve. Please keep in contact while testing 0.7, although as it progresses, we <b>will</b> want to have people inviting their friends for a nice darknet topology. As always, another way to assist in the development effort is to <a href="/index.php?donate">donate</a> so we can continue to fund Matthew Toseland, the guy who does most of the work.<p>
<b>6th July, 2005 : NO SOFTWARE PATENTS</b><br>
We won! The European Parliament overwhelmingly rejected the software patent directive. More <a href="http://www.noepatents.org/">here</a>.<p>
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
