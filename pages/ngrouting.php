<H3>Freenet's Next Generation Routing Protocol</H3>
<P>While my original design for Freenet has been improved upon
dramatically since my 1999 paper, the fundamental ideas behind how
Freenet finds information have changed very little. Now that Freenet
is maturing it is time to re-examine the core Freenet architecture to
see where can be improved. This new design is known as &quot;Next
Generation Routing&quot;. 
</P>
<H3>Freenet's current routing mechanism</H3>
<P>Firstly, let me recap on how Freenet works right now. Every node
in the Freenet network is required to provide a simple service to
other nodes in the system. When a node receives a request for a
particular key, it should do its best to retrieve the data
corresponding to that key as quickly as possible and send it back to
the node that requested it. 
</P>
<P>In the simplest case, the recipients of the request will already
have the data cached locally, and can immediately send it to the
requester. In most cases, however, the node will need to request the
data from another node in the network which it thinks will be better
able to retrieve the data. The way Freenet makes this decision forms
the core of the Freenet algorithm. 
</P>
<P>At present, the algorithm used to select which node should be
consulted for a given key is relatively simple. In short, when a node
forwards a request for a particular key to another node in the
network, and that node is successful in retrieving the data, the
address of an upstream node (possibly the one where the data
originated) is included in the reply. The requester makes a note of
the requested key, and the upstream node passed back with that reply.
It is assumed that upstream node is a good place to route future
requests for keys closest to the previously requested key. It is
analogous to deciding that since your friend George successfully
answered a question about France, he might also be a good person to
answer a question about Belgium. 
</P>
<P>Despite its simplicity, this approach has proved surprisingly
effective, both in simulation and in practice. One of the expected
side effects of this approach was that nodes would tend to specialize
in the retrieval of some keys to the exclusion of others. This can be
seen is somewhat analogous to the way that people specialize in
particular areas of expertise. This effect has been observed in
actual Freenet nodes deployed in the Freenet network. This is a good
indication that Freenet's routing algorithm is performing correctly. 
</P>
<H3>Next generation routing mechanism</H3>
<P>The fact that it works, of course, does not mean that it cannot be
improved upon. In fact, by making more effective use of the
information available to a Freenet node, we can dramatically improve
a node's ability to route requests in a manner likely to result in
the fastest response for that request. This is the goal of Next
Generation Routing. 
</P>
<P>The core idea behind the Next Generation Routing design is to make
Freenet nodes much smarter about deciding where to route information.
For each node reference in its routing table, a node will collect
extensive statistical information including response times for
requesting particular keys, the proportion of requests which succeed
in finding information, and the time required to establish a
connection in the first place. When a new request is received, this
information is used to estimate which node is likely to be able to
retrieve the data in the least amount of time, and that is the node
to which the request is forwarded.</P>
<H3>DataReply estimation</H3>
<P>The most important metric is finding a way to estimate, given a
given key being requested from a given node, how long it will take to
get the data. To achieve this an algorithm was required that would
meet the following criteria:</P>
<UL>
	<LI><P>Must be able to make reasonable guesses about keys that it
	has not seen before</P>
	<LI><P>Must be progressive &ndash; if a node's performance changes
	over time, this should be represented, but should not be
	over-sensitive to recent fluctuations which may vary significantly
	from the average.</P>
	<LI><P>Must be &ldquo;scale free&rdquo;<BR>Consider a naive
	implementation of this that works by splitting the key-space into a
	number of sections and maintaining an average for each. Now consider
	a node where most of its incoming requests lie within a very small
	section of the key-space. Our na&iuml;ve implementation would be
	unable to represent variations in response time within that small
	area and would therefore limit that node's ability to accurately
	estimate routing times.</P>
	<LI><P>Must be efficiently serializable</P>
</UL>
<P>We developed a simple algorithm which meets these criteria. It
works by maintaining N &ldquo;reference&rdquo; points (where N is
configurable &ndash; 10 being a typical value) which are initially
evenly distributed across the key-space.  When we have a new routing
time sample for a particular key &ndash; we move the two points
closest to our new sample towards it.  The amount they are moved can
be adjusted to change how &ldquo;forgetful&rdquo; the estimator is.</P>
<P><IMG SRC="../image/rte_diag.gif" NAME="Graphic1" ALIGN=CENTER WIDTH=335 HEIGHT=256 BORDER=0><BR CLEAR=LEFT><BR><BR>
</P>
<P>In this diagram it can be seen that two of the reference points
(blue) are being moved towards our new data sample (red).</P>
<P>When we wish to create an estimate for a new key, we see where the
line between the reference points at either side of that key
intersects (green) and this gives us our estimated response time.</P>
<H3>Handling different data lengths</H3>
<P>
</P>
