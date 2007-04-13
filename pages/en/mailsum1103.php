<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr>
<center><h2>Summary of some discussions on the maillist</h2>
<P>
<h3>November</h3></center>
<P>
1) <span style='color:blue'><b>A really easy way to defeat datastore probing timingattacks?
</b></span><P>
Toad said:<br>
<i>Ok, I had another crazy idea. This one is an idea to defeat the timing attacks we all know and hate. The attack goes like this: Request a file at HTL 0 from a node. The node has a 30% chance of forwarding the request to another node, if it doesn't have the file. The node returns the file quickly, and we conclude that the node must have the file in the store. Solutions to this basically involve making it look like the node didn't have the file. 

<p>One avenue of approach would be to try to emulate the slowness expected if we got the file from the next node on the chain. My suggestion: use the next node on the chain to emulate the latency of the next node on the chain! Send a special kind of request to the next node on the chain that requires it to route the request, return the datasource it would have routed to, and return the data we are sending to it. We would then send it back to the requestor in the usual way. An attacker who could surveil the network at an IP layer might be able to deduce we were sending it the data and it was returning us it through traffic analysis, but that is made harder by multiplexing, a reasonable traffic level, perhaps dividing the payload into several pieces and redirecting it through other nodes before it reaches the next node in the chain (in the hope of concealing it amidst regular traffic), or well known anti-traffic-analysis measures such as traffic padding. In any case it would be significantly better than we have now, at a moderate performance cost (it's only one extra hop in the base proposal). 
<p>Thus the requesting node would not have a convincing case that we had the data in our store before they asked. Now, the question is, how important is our plausible deniability with respect to whether content was in our store before the request came in? Parts of freenet are designed to help this - for example the probabilistically not decrementing hops to live when HTL is low; but there are several ways to get around all these protections - requests at HTL 0 with timing information, announcements at HTL 0, and so on. If it is important, it may be possible to do something about it; if it is not, that may also make things easier. So, is it important?</i>
<p>
Some pointed out that a 'special request' could be used to determine that the node had the data, and was trying to conceil it. Newsbyte suggested that we could use the estimators for calculating the delay it would normally take, if  the node had to retrieve it from another node. Tom Kaitchuck and Martin Stone Davis had some objections to this, but seem to have thought that it was meant to be used for every node and/or with fixed time delays. However, Newsbyte pointed out that it should only be the node which has the data in it's store who would have to fake it, and that the estimator isn't fixed. Therefor, a request would only take on 'hop' longer, as Toad already indicated in his post. Toad, however, pointed out that the difficulty were the new nodes: since they have totally unrealistic estimators, it would be difficult to implement a time delay based on the estimators from the new nodes. Ofcourse, brandnew nodes would not have any data, but still, it could pose a problem. Luckily, he had some ideas to redress the problem, for instance, new node problem would be solved with estimators in the seednodes.


</td>
<tr>
<td align="right" valign="bottom">
<BR>
<P>
<BR>
<P>
<BR>
<P>
<BR>
Donation inquiries please contact <a href="mailto:ian@locut.us">Ian Clarke</a><BR>
</td>

