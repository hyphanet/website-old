<h3>State of the Freenet</h3>
<h4>Ian Clarke, 18th February, 2004</h4>
The last few weeks have been very interesting indeed.  Since about July 2003 Freenet's performance 
inexplicably deteriorated, and since then we have been trying to find out why, and trying to find 
solutions to get it back to its previously healthy performance.
<p>
Eventually we decided that the most likely explanation was simply that Freenet's users were pumping 
more requests into the Freenet network than the network was capable of handling.  As each node became 
incapacitated through overload, it only increased the burden on other nodes in the network, resulting 
in the problem spiraling out of control, until eventually the majority of the messages being sent 
over the Freenet network (often over 95%) were nodes telling other nodes that they are overloaded!
<p>
After a number of failed attempts to solve the problem by making small changes to our existing load 
balancing algorithm, it eventually became clear that we would need to go back to first principles, 
and design a solution to the problem from the ground up.
<p>
The underlying idea behind this solution is that for the load balancing algorithm to be successful, 
it would need to be able to limit the number of requests entering the network *at source*, namely 
limiting the number of requests that could be created to what the network can effectively handle.
<p>
The eventual solution involved nodes adaptively estimating how many requests they can comfortably 
handle, their "request quota", and then intelligently allocating this quota to the nodes that want to 
send it requests for data.
<p>
We devised an algorithm that could allocate this quota in such a way that if a node wasn't using all 
of its quota, that this spare quota could then be reallocated to other nodes that are more likely to 
use it.  This allows the total number of requests to remain under-quota, but without being so-far 
under-quota that the nodes would be under-utilized.
<p>
A simple version of this algorithm was tested two weeks ago, and managed to reduce the number of 
rejected requests from over 95% to less than 5%.  We have now implemented a more sophisticated 
version of the algorithm and are in the process of testing and tweaking it, but early results are 
very positive.
<p>
We believe that this "rate limiting" scheme might be so effective as to have applications well beyond 
Freenet, and my intention is to write a paper on the subject just as soon as we have gained 
sufficient experience of how it operates in the real world.   I think this demonstrates that while 
the research nature of this project can sometimes cause frustration when things don't quite go to 
plan, it also allows us to develop and explore cutting-edge ideas that have applications well beyond 
the specific goals of the Freenet project.
<p>
At the very core of the project's ability to maintain this momentum, even when things aren't looking 
very rosy from the users' perspective, is Matthew Toseland - the project's grossly underpaid and 
extremely hardworking and talented full-time developer.  Matthew asks for only £850 per month, which 
is way below what he could earn as a commercial software developer, and his full-time development 
efforts, in addition to their direct effect, also serve as a catalyst for the contributions of other 
volunteers.
<p>
Unfortunately, due to the recent poor performance, which we are now hopefully climbing out of, we 
have been unable to do a formal release of the Freenet software.  We are now optimistic that, if rate 
limiting continues to be as promising as it appears to be, we will be in a position to release 
Freenet 0.6, the first major release in well over a year.
<p>
The problem is that this is still 6 weeks away at an absolute minimum, and as things stand right now, 
and despite the generous donations of many Freenet users, the project is almost out of funds with 
which to employ Matthew.
<p>
For this reason I am appealing to supporters of the project to, once again, dig deep and if you can, 
make a contribution to the project in the form of a Paypal donation, a Paypal subscription, or 
through E-Gold if Paypal is not your cup of tea.
<p>
You can make a donation through the donations page on our website at:
<blockquote>
  <a href="http://freenetproject.org/index.php?page=donations">
     http://freenetproject.org/index.php?page=donations</a>
</blockquote>
If, for whatever reason, you would like to make a donation through other means, please contact me 
directly at ian@freenetproject.org. 
<p>
If you would like to try out the very latest trial version of the Rate 
Limiting algorithm you will need to run the "unstable" branch of Freenet, 
<a href="/index.php?page=tryunstable">this page</a> will explain how to do 
this.
