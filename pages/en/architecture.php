<h3>Freenet architecture</h3>
<p>
In order to connect to Freenet, you have to exchange Node references with other users of Freenet. The references
must be added on both sides to be established. That is, you need to add his/hers, and he/she needs to add yours.
</p>
<p>
You should have at least three nodes that are connected to you, ideally at least five to seven. The nodes
that are connected directly to you are the only nodes on freenet that might see what kind of traffic that passes
through to your Freenet node. These are also the only nodes that you can see on the network, the others are hidden
from you.
</p>
<img src="/image/Freenet-architecture-small.png">
<br/>
<span style="font-size:75%;font-style:italic;">Figure 1: Visible Freenet connections</span>
<p>
<span style="font-weight:bold;">Node A</span> in the figure also has a number of nodes connected to it, but they are all 
(except from your own node) invisible to you. The traffic routing algorithm is therefore only able to direct traffic to one 
of the few nodes that you know of that it thinks is most able to find what you are looking for.
</p>
The traffic is encrypted, so it is quite difficult for the nodes that you connect to to see what your Freenet-traffic
consists of, but it is far from impossible. It is therefore important that you connect only to people you know. If
that is not possible, then at least people you've talked to.
</p>
<p>
