<h3>Try Next Generation Routing</h3>
This page will provide a quick explanation of how you can try out
the just-implemented Next Generation routing algorithm that is
described in <a href="/index.php?page=ngrouting">this</a> article.
<p>
Here are the steps:
<ol>
<li>Install Freenet as normal for your platform
<li>Rename the <b>freenet.jar</b> file in your Freenet folder to 
<b>freenet-stable.jar</b>.
<li>Download <a href="http://freenetproject.org/snapshots/freenet-unstable-latest.jar">
http://freenetproject.org/snapshots/freenet-unstable-latest.jar</a> and save it
in your Freenet folder as <b>freenet.jar</b> (this will overwrite the
existing freenet.jar file if you failed to follow the previous step).
<li>If there is a line in your <b>freenet.conf</b> or <b>freenet.ini</b>
file starting with "routingTableImpl" delete it or comment it out by
prepending a '#'.
<li>Start Freenet as you normally would.
</ol>
Now that it is running - you can take the opportunity to look under the hood
(for this to make any sense you will really want to read the article mentioned
above).  Go to your FProxy page and switch to advanced mode if you aren't
there already.  Click <b>Node Status Interface</b> and then <b>Node Reference
Status</b>, which will be the first link.  If Freenet is running on the default
port on your computer you can probably get to this page by clicking 
<a target="_blank" 
href="http://127.0.0.1:8888/servlet/nodestatus/nodestatus.html">here</a> (will
open in a new window).
<p>
On this page you will see a list of the nodes your node knows about, along with
a summary of the statistics it has collected on each node.  You may want to
download some stuff through your node, making it do some work, so that it collects
some interesting statistics for you to examine.  Chose one of the nodes
in this list, preferably one that has had a few successful transfers (the 7th
column).  You will notice that the node IP addresses in the first column are
hyperlinks - you can get more detail about the stats collected for a specific
node by clicking here.
<p>
You will now see some statistics for this node, it will include the probabilities
of things like requests and connections failing to this node, and the average 
times different things take.  Further down you should see some graphs, some of which
may just be flat lines if your node hasn't collected enough statistics yet.  These
are the "ResponseTimeEstimators" and their job is to track the times different events
take on a per-key basis (remember that Freenet keys are basically very large numbers),
and then use this collected data to estimate times for keys that it may not have
seen before.  The X-axis of these graphs is the key, and the Y axis denotes the 
time required to retrieve that key.  The black line indicates the RTEs estimate, and
the red dots indicate recently collected data samples.
<p>
When your node gets a new request for a key, it will use all of this statistical
data to select the node most likely to provide the fastest response to that request.
<p>
Note that all of this stuff is under active development, and so the information
described on this page (current as of 08/23/2003) could become out-of-date
quite quickly.
<p>
If you would like to discuss NGrouting, you are welcome to join us on #freenet
on irc.freenode.net or join one of our <a href="/index.php?page=lists">mailing
lists</a>.
