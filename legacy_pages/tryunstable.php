<h3>Try out the Unstable Branch</h3>
This page will provide a quick explanation of how you can run the bleeding-edge
unstable branch of Freenet.
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
<li>Download <a 
href="http://freenetproject.org/snapshots/unstable.ref">http://freenetproject.org/snapshots/unstable.ref</a> 
and save it in your Freenet folder as <b>seednodes.ref</b> (this should 
overwrite the existing seednodes.ref file)
<li>If there is a line in your <b>freenet.conf</b> or <b>freenet.ini</b>
file starting with "routingTableImpl" delete it or comment it out by
prepending a '#'.
<li>Start Freenet as you normally would.
</ol>
<p>
If you would like to discuss Freenet's ongoing development, you are welcome to 
join us on #freenet on irc.freenode.net or join one of our 
<a href="/lists.html">mailing lists</a>.
