<h1>Freenet's routing protocol</h1>
<ul>
<li>Each node in the network stores some information locally
<li>Nodes also have approximate knowledge of what their neighbors store 
too
<li>Request is forwarded to node's "best guess" neighbor unless it has 
the information locally
<li>If the information is found within the request's "Hops to Live", it 
is passed back through this chain of nodes to the original requestor
<li>The intermediate nodes store the information in their LRU cache as 
it passes through
</ul>
