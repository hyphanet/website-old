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
<b>25th June, 2005 : NO SOFTWARE PATENTS</b><br>
On the 6th of July (give or take 24 hours) the European Parliament will vote on
the Computer Implemented Inventions Directive. If this passes in its current
form, it will legalize software patents in the European Union. This will
<b>seriously</b> harm the entire software sector in Europe, and <b><i>open
source projects such as Freenet will be hit hardest as they cannot possibly
pay license fees for unavoidable and often <a href="http://webshop.ffii.org/">
trivial</a> patents</b></i>. Software patents only benefit 
<a href="http://news.com.com/2100-1012_3-5062409.html">patent trolls</a> and  <a href="http://www.microsoft.com">
very large companies</a>. If you represent a small to medium sized IT
business, please <a href="www.economic-majority.com">sign up to
economic-majority.com</a>. The <a href="www.ffii.org">FFII</a> will 
campaign on your behalf. If and only if you are sufficiently well versed in
the issues, please talk to your MEPs - <b>in person or by telephone, not by
email</b>; MEPs are swamped with emails on this issue and routinely ignore
them. If you don't want to live in a world where you need a license from
a large corporation to use Freenet, Linux, Apache or Firefox, please act now!
<br> More information: <a href="http://noepatents.eu.org/index.php/NO_Software_Patents">noepatents.eu.org</a></li>.
<p>
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
