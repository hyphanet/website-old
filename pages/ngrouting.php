<h3>Freenet's Next Generation Routing Protocol</h3>

While my original design for Freenet has been improved upon dramatically
since my 1999 paper, the fundamental ideas behind how Freenet finds
information have changed very little.  Now that Freenet is maturing it
is time to re-examine the core Freenet architecture to see where can be
improved. This new design is known as "Next Generation Routing".

<p>
Firstly, let me recap on how Freenet works right now.  Every node in the
Freenet network is required to provide a simple service to other nodes
in the system.  When a node receives a request for a particular key, it
should do its best to retrieve the data corresponding to that key as
quickly as possible and send it back to the node that requested it.  
<p>
In the simplest case, the recipients of the request will already have
the data cached locally, and can immediately send it to the requester.  
In most cases, however, the node will need to request the data from 
another node in the network which it thinks will be better able to 
retrieve the data.  The way Freenet makes this decision forms the core 
of the Freenet algorithm.
<p>

At present, the algorithm used to select which node should be consulted
for a given key is relatively simple.  In short, when a node forwards a
request for a particular key to another node in the network, and that
node is successful in retrieving the data, the address of an upstream
node (possibly the one where the data originated) is included in the
reply.  The requestor makes a note of the requested key, and the
upstream node passed back with that reply.  It is assumed that upstream
node is a good place to route future requests for keys closest to the
previously requested key.  It is analagous to deciding that since your
friend George successfully answered a question about France, he might
also be a good person to answer a question about Belgium. 

<p> Despite its simplicity, this approach has proved surprisingly
effective, both in simulation and in practice.  One of the expected side
effects of this approach was that nodes would tend to specialize in the
retrieval of some keys to the exclusion of others.  This can be seen is
somewhat analogous to the way that people specialize in particular areas
of expertise.  This effect has been observed in actual Freenet nodes
deployed in the Freenet network.  This is a good indication that
Freenet's routing algorithm is performing correctly. 

<p> The fact that it works, of course, does not mean that it cannot be
improved upon.  In fact, by making more effective use of the information
available to a Freenet node, we can dramatically improve a node's
ability to route requests in a manner likely to result in the fastest
response for that request.  This is the goal of Next Generation Routing.

<p> The core idea behind the Next Generation Routing design is to make
Freenet nodes an order of magnitude smarter about deciding where to
route information.  For each node in its routing table, a node will
collect extensive statistical information including response times for
requesting particular keys, the proportion of requests which succeed in
finding information, and the time required to establish a connection in
the first place.  When a new request is received, this information is 
used to estimate which node is likely to be able to retrieve the data in 
the least amount of time, and that is the node to which the request is 
forwarded.

<p> The most important metric is finding a way to estimate, given a 
given key being requested from a given node, how long that request is 
likely to take.
