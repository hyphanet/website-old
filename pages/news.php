<!-- Please keep this to at-most 5 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style). -->
<h3>News</h3>
<p><b>16th July, 2003 - Freenet 0.5.2 Released!</b><br></p>
After four months work, four prereleases and very many builds, 
Freenet 0.5.2 is now <a href="/index.php?page=download">available
for download</a>. It features substantially improved performance 
and uses significantly less CPU, threads and system resources. In 
more detail, we now use nonblocking I/O, which lets us handle far more
connections using far fewer threads, reject less queries, and use less
amount of CPU time for the same load. This will not only make individual
nodes more system friendly but it also should significantly improve
routing and load handling over the entire network. We also implemented
probabilistic caching, which should improve routing and let Freenet
as a whole store more data. There were also a number of user interface
improvements, further improvements to the large file download system,
a fix for the Heisenbug (caused by random number generator problems),
and tons of bugfixes. You can download it <a href="/index.php?page=download">
here</a>. Major changes over RC4 are bugfixes. Progress has only been 
possible at this rate because the project has been able to pay a
full time developer for the bargain rate of $1500/month, please consider
<a href="/index.php?page=donate">donating</a>.</p>

<!-- shorten the news, don't scare noobs & idiots away
<p><b>23rd June, 2003 - Ian responds to Peacefire paper</b><br>
Ian just posted a <a 
href="http://slashdot.org/~Sanity/journal/37275">response</a> 
to Bennett Haselton's paper <i>"Why a 
'distributed cloud' of peer-to-peer systems will not be able to 
circumvent Internet blocking in the long run"</i> on his <a 
href="http://slashdot.org/~sanity/journal">weblog</a> today.  In it 
he argues that the attack Bennett describes, while being a 
theoretical possibility, would be practically impossible even for the 
best-funded of government Internet censors.
</p>
<p><b>14th June, 2003 - Your support needed</b><br>
Things have been progressing well, we have almost finished a major 
architectural improvement (migrating to java.nio) which should lead to 
a significant reduction in Freenet's cpu usage, and we are working on 
the most fundamental improvement to Freenet's core algorithm since its 
original design - NGRouting.
<br>
Matthew Toseland, our full time developer, has been a major catalyst to 
Freenet development, however his contract is coming to an end and the 
project's funds are presently very low.  As a result I am making this 
appeal for your financial support.  If you can afford to - please visit 
our <a href="/index.php?page=donate">donations</a> page, you can 
contribute with a credit card through Paypal, or via E-Gold if you 
prefer.
-->

