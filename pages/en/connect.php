<h2>Connecting to Freenet</h2>
<p>There are two ways to connect to Freenet:</p>
<ul><li>You can enable insecure mode (the installation wizard will ask you) and Freenet will automatically find nodes to connect to - Strangers.</li>
<li>You can connect to nodes run by people you know - Friends. Note that these should be people you actually know on some level,
in order to maintain good network topology and maximum security.</li></ul>
<p>
In practice, you should probably use both of these options, unless you are really paranoid, in which
case you should of course only connect to people you trust. Insecure mode should work automatically
once enabled, so the rest of this page is about connecting to Friends.
</p>
<p>
To connect to your friends' nodes, you have to exchange Node references with them. The references
must be added on <span style="font-weight:bold;">both sides</span> to be established. That is, you need to add his/hers, and he/she needs to add yours.
</p>
<p>
<span style="font-style:italic;">When you have a freshly connected node, you have no data cached in your datastore,
and very few connections even if insecure mode is enabled. Requests are sent
out in a random fashion. <span style="font-weight:bold;">This makes some (or all) requests time out before retrieving anything.</span> It takes a couple of days for your 
Freenet-node to get up to speed, so please don't get discouraged by this.
</span>
</p>
<p>
You should have at least three nodes that are connected to you at all times, ideally at least five to seven. Since some nodes may
be unreachable at times, you need to connect to some more nodes to get the expected number. The nodes
that are connected directly to you are the only nodes on freenet that might see what kind of traffic that passes
through to your Freenet node. But if insecure mode is enabled, any node can find yours; this is the big
advantage of <b>not</b> enabling insecure mode: you are effectively invisible except to your Friends.
In practice most people start off with insecure mode and gradually add Friends, and hopefully turn off
insecure mode once they have at least 10 Friends.
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
There are a number of ways to add peer node references.
</p>

<h3>Fproxy</h3>
<p>Connecting peer nodes with FProxy can be done in several ways. Common for all these are that they are all done under the 
<span style="font-weight:bold;">Darknet</span> menu item or using the <a href="http://127.0.0.1:8888/friends/">
http://127.0.0.1:8888/friends/</a> link. Below is the thing that makes it all happen:</p>

<img src="/image/add_peers.png">
<p>As you can see, there are three ways of getting a node reference from someone else:</p>
<ul>
<li>Pasting it &quot;as is&quot;, in the top field,</li>
<li>an URL pointing at the reference, such as <a href="http://dark-code.bulix.org/">http://dark-code.bulix.org/</a> or</li>
<li>a file, containing the reference.</li>
</ul>
<p>bulix.org is a so called <span style="font-weight:bold;">paste-bin</span>, where you can add your node reference, make sure that
the <span style="font-weight:bold;">private</span> box is checked, and press <span style="font-weight:bold;">Paste</span>.</p>
<p>The paste-bin then returns an URL (e.g. http://dark-code.bulix.org/yuf01h-34676?raw), which can be shared with others. Make sure that
you add <span style="font-weight:bold;">?raw</span> to the link. This makes the link point only to the actual pasted data, with no extra 
design elements.</p>
<p>Your own Freenet reference can be found on the <a href="http://127.0.0.1:8888/friends/">
http://127.0.0.1:8888/friends/</a> page, under the caption <span style="font-weight:bold;">My reference</span>.
It might look something like this (cut for screen purposes):</p>

<pre>
lastGoodVersion=Fred,0.7,1.0,1010
sig=7c7edc8c5250e42ac4cb161b216b70de7019221f1b331f0f92bd67439[...]609660f0d4
identity=5tBtS3R59nfOTvc1be~V0sSfkWir8EW38YeocP0gsYM
myName=FreenetTestInstall
location=0.02970997399122577
testnet=false
version=Fred,0.7,1.0,1016
physical.udp=83.255.75.223:13762
ark.pubURI=SSK@M1wjFha2tujYo50QQF~5Fqz5anVEiIzI9VrA8IrhAsQ,5M[...],AQACAAE/ark
ark.number=0
dsaPubKey.y=JhlWYVx8rA0y0x1Fb3y9TfqXDYiIsnkEka8PLsePerpCELTIn[...]laHe2bkl0O7Dg
dsaGroup.p=AIYIrE9VNhM38qPjirGGT-PJjWZBHY0q-JxSYyDFQfZQeOhrx4[...]ofeLdX7xhehuk
dsaGroup.g=UaRatnDByf0QvTlaaAXTMzn1Z15LDTXe-J~gOqXCv0zpz83CVn[...]Fuqt8yZe1PDVg
dsaGroup.q=ALFDNoq81R9Y1kQNVBc5kzmk0VvvCWosXY5t9E9S1tN5
End
</pre>
<p>Remember that both you and the node you are connecting to must add references to make the connection work. This means that if you
add a persons node reference on your side, but that person does not add your reference on his/her side, the connection 
<span style="font-weight:bold;">does not work</span>.</p>
<h3>Darknet peers</h3>
<p>When you have a number of connections, you can visit the Darknet-page. It should look something like this:</p>
<img src="/image/Freenet-darknet_peers.png">
<p>There are a number of status messages that can be seen here:</p>
<ul>
<li>CONNECTED - the node is connected and ready to take your request</li>
<li>BACKED OFF - the node is choked with traffic and unable to respond</li>
<li>DISCONNECTED - the node is not connected to your node, and probably turned off</li>
<li>NEVER CONNECTED - the connection between the nodes has not been established. This can be because of firewall problems/restrictions
, one side not adding the other sides node reference or that the nodes has not been online at the same time yet in order to confirm 
the connection. If the problem persists over a long time and both sides have added each other, try to redo the connection.</li>
</ul>
<p>In the Idle-column, you can see how much time has passed since the last status message.</p>
