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
<b>5th December, 2005: Major new version of Freenet in progress (updated)</b><br>
<p>Freenet is currently undergoing a major re-write incorporating a number of fundamental changes. 
Version 0.7 of Freenet aims to (in addition to supporting traditional "opennet" operation, whereby
users can quickly and easily get onto the network by downloading seednodes files from a central
source), create a scalable darknet, where users only connect directly to other users they know and 
(at least marginally) trust. The purpose of this change is to protect users who may be placed
at risk simply by using the software, irrespective of what they are using it for. In the new 
model, only people you choose to connect to will know that you are running the software. </p>

<p>Previous darknets, such as <a href="http://en.wikipedia.org/wiki/WASTE">WASTE</a>, have been 
limited to relatively small disconnected networks. The core innovation in Freenet 0.7 will be
to allow a globally scalable darknet, capable of supporting millions of users. This is made 
possible by the fact that human relationships tend to form 
<a href="http://en.wikipedia.org/wiki/Small-world_network">small-world networks</a>, a 
property that can be exploited to find short paths between any two people. The work is based on
a talk given at <a href="http://defcon.org/">DEFCON 13</a> by Ian Clarke and 
Oskar Sandberg (<a href="http://freenetproject.org/papers/vegas1_dc.pdf">slides available here</a>).
</p>
<p>Other modifications include switching from TCP to UDP, which allows 
<a href="http://en.wikipedia.org/wiki/UDP_hole_punching">UDP hole punching</a> along with faster 
transmission of messages between peers in the network. Anonymous message broadcast ("publish/subscribe"),
and other new basic functions, have been postponed to 0.8 in order to get 0.7 out as soon as possible;
Freenet 0.7 will support insertion and retrieval of information, as 0.5 does, but it should do it faster,
and more securely. It will not include "premix routing" (a difficult technique to provide an extremely 
high level of anonymity to requesters and posters which we will introduce in 0.8 or 0.9), but we will 
endeavour to ensure that 0.7 is more secure than 0.5 in every respect. Thanks to the new transport layer,
and darknet support, we expect that Freenet 0.7 will be usable in countries with national firewalls 
(China blocked the current version some time ago - both the web site and the protocol).
</p>
<p>Currently, we have insert and retrieval of arbitrarily large files ("redundant splitfiles") working,
and a text mode interface. We should have an alpha which has initial FCP and Fproxy support by the end of
January. Darknet routing is working, but not yet opennet, and there are issues to address with load 
balancing, but our new model (based on Ethernet and TCP/IP) is currently being debugged and should work as
it is based on tried and tested solutions. If you want to help, join #freenet-alphatest on irc.freenode.net,
or contact <a href="mailto:toad@amphibian.dyndns.org">Toad (Matthew Toseland)</a>.
</p>
<p>Using donations through this website, the project has been able to employ one developer full-time, 
Matthew Toseland.  Matthew has since become the backbone of the Freenet development effort.  The 
project is always in need of additional funds to assure Matthew's continued employment, so if you 
can contribute to our efforts, please visit our <a href="/index.php?page=donate">donations</a> page.</p>
