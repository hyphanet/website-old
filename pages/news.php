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
<b>21st April, 2006: New Frost released with 0.7 support</b><br>
A new version of <a href="http://jtcfrost.sf.net/">Frost</a>, the 
Freenet message board system, has been released, and it now supports 
Freenet 0.7!  Note that Frost requires that a copy of Freenet is up and 
running before it will work.  Try it out by installing <a 
href="/index.php?page=download-new">Freenet 0.7</a>, and then <a 
href="http://jtcfrost.sourceforge.net/">Frost</a>.
<p>
<b>3rd April, 2006: Freenet 0.7 Alpha 1</b><br>
<p>Freenet is a decentralised "peer-to-peer" system designed to allow the 
anonymous sharing of information on the Internet.  After many months of work,
the first alpha version of Freenet 0.7 is ready for testing.</p>
<p>Freenet 0.7 represents a major new approach to peer-to-peer network design.
To protect the network, and the user's anonymity, Freenet users will now have 
the ability to connect directly to other people that they know and trust, 
together forming a "global darknet" making it extremely difficult for any 
third party, whether a government or another powerful organisation, to 
determine that a user is participating in Freenet, let alone what they are 
doing with it.  This new version is a complete rewrite of the Freenet 
software, representing numerous other improvements, including:</p><ul>
<li>Freenet now operates over UDP rather than TCP</li>
<li>Freenet can transparently operate through firewalls</li>
<li>Freenet's core architecture and algorithm has been redesigned for simplicity and efficiency</li>
<li>A new and even simpler API allowing the rapid development of third party software that interacts with Freenet</li>
</ul>
<p>The new Freenet employs a simpler and more flexible routing model than
previous versions, which in the future may allow diverse applications ranging
from efficient search, to near-real time instant messaging and chat between
anonymous participants.   Initially Freenet 0.7 will be a "pure darknet"
model, in that all connections must be trusted, however future versions will
permit a mixed opennet/darknet approach where the user can opt to allow 
untrusted connections to their node, which will improve connectivity and
convenience at the expense of security.</p>
<p>Note that this release is still a very early alpha; users should neither 
expect it to be secure, nor user friendly.  Rather, the purpose of this release
is to facilitate wider testing, to inform people of the progress we have made, 
and to attract fresh development talent, both to Freenet itself, and to third 
party applications that use Freenet as a platform.</p>
<p>This release would not have been possible without the work of numerous 
volunteers, and Matthew Toseland, Freenet's full time developer.  Matthew's work
is funded through donations via our website, we ask that anyone who can help us
to ensure Matthew's continued employment by visiting our donations page and 
making a contribution at:</p>
<p><a href="http://freenetproject.org/index.php?page=donate">http://freenetproject.org/index.php?page=donate</a></p>
<p>The new version of Freenet may be downloaded from:</p>
<p><a href="http://freenetproject.org/index.php?page=download-new">http://freenetproject.org/index.php?page=download-new</a></p>
<br>
<b>18th February, 2006: Searching in a Small World</b><br>
Oskar Sandberg has made available his thesis <a href="http://www.math.chalmers.se/~ossa/lic.pdf">Searching in a Small World</a>.
This describes a simple decentralized algorithm for creating small world networks that is inspired by Freenet's original
approach, along with the experimental and theoretical basis for this approach.  This also provides an insight into why
small world networks might form naturally among human relationships.
<p>
<b>3rd January, 2006: Slides and Demo from Chaos Congress talk now online</b><br>
On Friday 30th Oskar Sandberg and I <a href="http://events.ccc.de/congress/2005/fahrplan/events/492.en.html">spoke</a>
at the 22nd Chaos Communication Congress in Berlin, Germany.  We were speaking about
the upcoming 0.7 redesign of Freenet.  Now that I have thawed out 
(it was -6&deg;C!), I have had a chance to upload our <a href="http://freenetproject.org/papers/ccc/ccc-slideshow.pdf.bz2">slideshow</a> (pdf.bz2 format), and a Java <a href="http://freenetproject.org/papers/ccc/ccc-freenet-demo.tar.bz2">demo</a> 
(requires Java 1.5).
