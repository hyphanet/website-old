while my original design for Freenet has improved dramatically since my 
1999 paper, the fundamental ideas behind how Freenet finds information 
have changed very little.  Now that Freenet is maturing it is time to 
re-examine the core Freenet architecture to see where can be improved.
This new design is known as "Next Generation Routing".
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
retrieve the data.  It is the criteria  upon which this other node is 
selected that determines how quickly the data will be retrieved.
<p>
At present, the algorithm used to select which node should be consulted 
for a given key is relatively simple.  In short, when a node forwards a 
request for a particular key to another node in the network, and that 
node is successful in retrieving the data, the eventual source of the 
data is remembered by each node  as the data is passed back to the 
original requester.  When a node receives a request for particular key 
it checks this remembered information to find the key closest to the one 
being sought, and it forwards the request to the node  where that data 
originated.
<p>
Despite its simplicity, this approach has proved surprisingly effective,
both in simulation and in practice.  One of the expected side effects of
this approach was that nodes would tend to specialize in the retrieval
of some keys to the exclusion of others.  This can be seen is somewhat
analogous to the way that people specialize in particular areas of
expertise.  This effect has been observed in actual Freenet nodes
deployed in the Freenet network.  This is a good indication that
Freenet's routing algorithm is performing correctly.
<p>
The fact that it works, of course, does not mean that it cannot be 
improved upon.  In fact, by making more effective use of the information 
available to a Freenet node, we can dramatically improve a node's 
ability to route requests in a manner likely to result in the fastest 
response for that request.  This is the goal of Next Generation Routing.

