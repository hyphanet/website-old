<!-- Please keep this to at-most 3 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style).  Additionally, please remove obsolete news items (such as
old new build announcements) --> 
<!-- removed due to large donation - its unfair to imply that the project
	is at death's door
<h3>Financial Status</h3>
The project's current Paypal balance is <b><? 
include("paypaltotal.txt"); 
?></b>.  The project requires approximately $2,300 per month to pay for 
its 
full time developer, Matthew Toseland.  If you would like to help 
support the Freenet Project, you can make a convenient donation through 
our <a href="/donate.html">donations page</a>.
-->
<h3>News</h3>
<b>20 March, 2007 - <a href="http://code.google.com/soc/freenet/about.html">Freenet joins Google Summer of Code 2007</a></b><br>
<p>Last year, Freenet was part of <a href="http://code.google.com/soc/">Google's Summer of Code</a>. Four students worked for us instead of for the fast food industry over the summer. All four delivered useful results, including the now widely used Thaw filesharing utility, essential improvements to the installer and FEC code, the resurrected and much improved Freemail and some simulations that will inform decisions on load balancing and congestion control in the near future and for years to come. Google paid them $4,500 and us $500 each, and let us visit their HQ for a conference. This year we have been accepted into the Summer of Code again. If you are a student and want to work with us this summer, send an application in, and feel free to contact us via email, IRC, or otherwise.</p>

<p>For more details see our <a href="http://wiki.freenetproject.org/SummerOfCode2007">wiki page on SoC 2007</a>:</p>

<p>In the meantime, Freenet 0.7 continues to progress: Endless bugfixes interspersed with a significant increase in performance around Chritmas, substantial and ongoing improvements in memory usage, various security improvements, lots of work on the datastore, and more. The network continues to grow despite the naysayers and despite a major crypto bug that was fixed in 1010, forcing a partial network reset. This year we plan to implement opennet as well as further improvements to performance (we have a number of leads as to what is going on). Opennet will mean that new users no longer need to manually peer with total strangers - like in 0.5, the network will do it for them. Once they are connected to the network then they can add some of their friends ("true darknet connections") to increase their security.</p>

<p>If you haven't tried Freenet since our last announcement, please try it again. And if you haven't tried it since the first alpha release of 0.7, you should definitely try it out again. We are not releasing a second alpha because we want to deal with Opennet first.</p>

<b>29 November, 2006 - <a href="http://code.google.com/soc/freenet/about.html">Summer of Code roundup</a></b><br>
As you may know, Google paid for four students to work for us full-time over the summer, as part of their <a href="http://code.google.com/soc/">Summer of Code</a> project (to get students into open source). Here's a summary of all the good things that came out of this:
<ul>
<li><b>Freemail</b> (<i>dbkr</i> - Dave Baker)<br>
Dbkr wrote an email server which uses Freenet as a back-end. This is one of the features which is most asked-for by groups in repressive regimes, and fills an important hole in Freenet's current functionality (we have web sites, we have discussion boards, we don't really have private messaging). This is now working, its architecture is complete, and it will be bundled with Freenet soon.</li>
<li><b>Load simulations</b> (<i>mrogers</i> - Michael Rogers)<br>
Mrogers wrote us an event-based simulator for evaluating proposed changes to Freenet routing, load balancing and data storage. In the past we have generally deployed changes in a fairly haphazard way, and it has often not been clear whether a particular change has been beneficial. Since we started work on 0.7 we have been more systematic, but the simulations we have built were not able to simulate many of the more complex processes, such as load balancing / load limiting. mrogers has produced a detailed simulation which has already yielded insights into congestion control, has confirmed some of our recent decisions on load balancing, and is being used to prototype a new load management algorithm which should radically improve Freenet's performance.</li>
<li><b>Installer improvements and related stuff</b> (<i>nextgens</i> - Florent Daigni&egrave;re)<br>
Over the summer nextgens, an experienced freenet developer already, worked on what was most urgently needed for Freenet, and which he had most expertise in, but wasn't necessarily most interesting. His work related mostly to deployment: The installer, the uninstaller, the updating system, the mirror network, native libraries and general bugfixing. All of this has been deployed already and has enhanced Freenet's usability. He also did some work on getting Freenet to work on free JVMs, which has yielded some results.</li>
<li><b>Thaw</b> (<i>jflesch</i> - J&eacute;r&ocirc;me Flesch)<br>
Over the summer jflesch developed Thaw (a filesharing utility and upload/download manager). Thaw's goals were firstly to provide a user-friendly, cross platform interface to the built-in Freenet download manager engine (replacing an older Windows-only tool called FUQID), and secondly to evolve into a complete file sharing application via sharing file indexes. The first goal has been 100% fulfilled and Thaw is now the preferred tool. The second goal has been partially achieved; Thaw has working functionality for searching file indexes, but this is not yet used very much.</li>
</ul><p>All in all, a great success, many thanks to Google!</p>

<b>17th August, 2006 - John Gilmore donates US$15,000 to the Freenet Project</b> [<a href="http://digg.com/software/John_Gilmore_donates_US_15_000_to_the_Freenet_Project">digg it</a>]<br>
John Gilmore, one of the founders of the Electronic Frontier Foundation, the Cypherpunks mailing list, and Cygnus Solutions, has donated US$15,000 to the Freenet Project, to support the ongoing development of the Freenet software.
<p>
This donation will ensure the continued employment of Freenet's full-time software developer, Matthew Toseland. Matthew has been working for Freenet full-time for the last 4 years, funded entirely by donations to the project.
<p>
In April 2006 the Freenet Project released the first alpha version of Freenet 0.7, a new approach to anonymous peer-to-peer adopting a "scalable darknet" architecture, designed to offer a new level of privacy and security for those using the software, while addressing a number of other long-standing issues with Freenet. This donation will support the project as it works towards a beta release of Freenet 0.7, improving the ease of use, speed, and security of the software.
<p>
The donation came from John Gilmore's donor advised fund at <a target="_blank" href="http://sff.org/about/index.html">The San Francisco Foundation</a>.
<p>
