<h2>Freenet Client Protocol</h2>

<h3>Abstract</h3>
<p class="body">The FreenetClientProtocol (FCP) is designed to abstract the basics
  of Freenet so that client developers do not have to track the main Freenet protocol.
  FCP should be the bare bones of Freenet - metadata handling is not included
  in FCP though an extension to FCP may come about at a later date to avoid writing
  metadata handling libraries in many languages.</p>
<h4>Note</h4>
<p class="body">This protocol is never meant to go across a network - only via
  the loopback. Nodes should not accept FCP connections from hosts other than
  localhost by default.</p>

<h3>Basics</h3>
<p class="body">By <i>default</i> FCP is port 8481, but any client that uses FCP
  should leave this configurable, because this may be changed in the node's configuration
  file or by some future FCP revision.</p>
<p class="body">FCP follows the FNP setup for session and presentation.</p>
<p class="body">In the following, numbers are always hex-encoded and fields in
  square-brackets are optional.</p>
<p class="body">FCP allows one transaction per connection, after which the connection
  is torn down. At the beginning of each connection, the client must send these
  4 bytes:</p>

<pre>00 00 00 02</pre>

<p class="body">These are the 2-byte session identifier and the 2-byte presentation 
  identifier. In the future, different identifiers may be used to allow alternate 
  syntaxes or encrypted FCP connections from remote hosts, for example.</p>

<p class="body">After sending the session and presentation identifiers, the client 
  sends a message to initiate the transaction, then waits for one or more messages 
  from the node until the transaction is complete. Messages are a series of lines 
  terminated by LF or CRLF, in this form:</p>

<pre>Header
[Field1=Value1]
.
.
[FieldN=ValueN]
EndMessage
</pre>

<h3>Message Summary</h3>

<p class="body">This is the complete set of client to node messages, with the 
  possible node to client responses (only the headers are listed).</p>

<ul>
  <li><code>ClientHello</code>
    <ul>
      <li><code>NodeHello</code></li>
    </ul>
  </li>

  <li><code>ClientInfo</code>
    <ul>
      <li><code>NodeInfo</code></li>
    </ul>
  </li>

  <li><code>ClientGet</code></li>
  	<ul>
    <li><code>URIError</code></li>
    <li><code>Restarted</code></li>
    <li><code>DataNotFound</code></li>
    <li><code>RouteNotFound</code></li>
    <li><code>DataFound</code></li>
        <li><code>DataChunk</code></li>
	</ul>

  <li><code>ClientPut</code></li>
  	<ul>
    <li><code>URIError</code></li>
    <li><code>Restarted</code></li>
    <li><code>RouteNotFound</code></li>
    <li><code>KeyCollision</code></li>
    <li><code>Pending</code></li>
    <li><code>Success</code></li>
	</ul>

  <li><code>GenerateCHK</code></li>
  <ul>
	<li><code>Success</code></li>
  </ul>

  <li><code>GenerateSVKPair</code></li>
  <ul>
	<li><code>Success</code></li>
  </ul>

  <li><code>ClientDelete</code></li>
  <ul>
	<li><code>Success</code> </li>
  </ul>

  <li><code>InvertPrivateKey</code>
    <ul>
      <li><code>Success</code></li>
    </ul>
  </li>

  <li><code>GetSize</code>
    <ul>
      <li><code>Success</code></li>
    </ul>
  </li>

</ul>

  

<p class="body">Additionally, the node may respond to any client message with 
  a <code>FormatError</code>, meaning the command was not understood, and the 
  node may respond at any time with a <code>Failed</code>, indicating a fault
  in the node itself:</p>

<pre>(Node -&gt; Client)

FormatError
[Reason=&lt;descriptive string&gt;]
EndMessage

(Node -&gt; Client)

Failed
[Reason=&lt;descriptive string&gt;]
EndMessage
</pre>

<p class="body"><code>Failed</code> and <code>FormatError</code> will not be discussed
  in the remainder of this document. Clients should be prepared to handle a <code>Failed</code>
  at any time, and a <code>FormatError</code> as the response to any client message. 
  Either of these messages terminates the transaction and the connection.</p>
<hr>

<h3>Handshaking</h3>

<b>ClientHello</b>

<p class="body">This is totally optional for the client. Note that this counts as a transation and thus the connection is torn down afterwards.</p>

<pre>(Client -&gt; Node)

ClientHello
EndMessage
</pre>

<p class="body">In response the node sends the following message:</p>

<pre>(Node -&gt; Client)

NodeHello
Protocol=&lt;number: protocol version number.  Currently 1.2&gt;
Node=&lt;string: Description of the node&gt;
[HighestSeenBuild=&lt;number: Highest build seen in datastore&gt;]
EndMessage
</pre>

<p class="body">The optional <code>HighestSeenBuild</code> will only be present
  if a build higher than the node's current build is seen in the datastore. Client
  implementors are advised, in this circumstance, to notify the user that they
  should upgrade to the latest build of Freenet. The user should have the ability
  to turn off this warning.</p>
<hr>

<h3> Querying the node's status </h3>

<b>ClientInfo</b>

<p class="body"></p>

<pre>(Client -&gt; Node)

ClientInfo
EndMessage
</pre>

<p class="body">In response the node sends the following message:</p>

<pre>(Node -&gt; Client)

NodeInfo
ActiveJobs=&lt;number&gt;
MostRecentTimestamp=&lt;hex number&gt;
LeastRecentTimestamp=&lt;hex number&gt;
AllocatedMemory=&lt;number&gt;
Architecture=&lt;string&gt;
JavaName=&lt;string: free form&gt;
JavaVendor=&lt;string: free form&gt;
MaxFileSize=&lt;hex number&gt;
DatastoreUsed=&lt;hex number&gt;
AvailableThreads=&lt;number&gt;
EstimatedLoad=&lt;number&gt;
DatastoreMax=&lt;number&gt;
JavaVersion=&lt;string&gt;
DatastoreFree=&lt;hex number&gt;
OperatingSystemVersion=&lt;string&gt;
OperatingSystem=&lt;string: free form&gt;
FreeMemory=&lt;number&gt;
IsTransient=&lt;true|false&gt;
RoutingTime=&lt;number&gt;
EndMessage
</pre>

<p> Note: some numeric fields in this message are *not* in hex as all other FCP numbers are. </p>

<hr>

<h3>Requesting</h3>

<b>ClientGet</b>

<pre>(Client -&gt; Node)

ClientGet
RemoveLocalKey=&lt;true|false&gt;
URI=&lt;string: fully specified URI, such as freenet:KSK@gpl.txt&gt;
HopsToLive=&lt;number: hops to live&gt;
EndMessage
</pre>

<p class="body">The client is now in the <i>waiting</i> state. The node may return
  one of the following messages:</p>

<ul class="body">
<li><code>URIError</code>: Invalid Freenet URL. The transaction is terminated.</li>
<li><code>Restarted</code>: The client should continue waiting.</li>
<li><code>DataNotFound</code>: The transaction is terminated due to not being able to find data.</li>
<li><code>RouteNotFound</code>: The transaction is terminated due to not being able to find a route.</li>
</ul>

<b>RouteNotFound</b>

<pre>(Node -&gt; Client)

RouteNotFound
Unreachable=&lt;number: default = 0, nodes&gt;
Restarted=&lt;number: default = 0, nodes&gt;
Rejected=&lt;number: default = 0, nodes&gt;
EndMessage
</pre>

<p> <code>RouteNotFound</code> carries some extra fields as above, the other errors (<code>DataNotFound</code> and <code>URIError</code>) simply terminate the connection.  In a successful Request, a <code>DataFound</code> message is returned:</p>

<b>DataFound</b>

<pre>(Node -&gt; Client)

DataFound 
DataLength=&lt;number: number of bytes of metadata + data&gt;
[MetadataLength=&lt;number: default = 0, number of bytes of metadata&gt;]
Timeout=&lt;number: number of seconds by which the node will have a response&gt;
EndMessage
</pre>

<p>After a <code>DataFound</code> message the data itself is sent in chunks:</p>

<b>DataChunk</b>

<pre>(Node -&gt; Client)

DataChunk
Length=&lt;number: number of bytes in trailing field&gt;
Data
&lt;@Length bytes of data&gt;
</pre>

<p class="body">At any time when the full payload of data has not been
  sent (even before the <code>DataFound</code> message), a
  <code>Restarted</code> message may be sent. This means that the data
  failed to verify and the transfer will be restarted. The client
  should disregard all data it has recieved since it made its initial
  request and return to waiting for a <code>DataFound</code> message
  to begin the data transfer again.  Otherwise, when the final
  <code>DataChunk</code> is received, the transaction is complete and
  the connection dies.</p>

<hr>

<h3>Inserting</h3>

<b>ClientPut</b>

<pre>(Client -&gt; Node)

ClientPut
RemoveLocalKey=&lt;true|false&gt;
HopsToLive=&lt;number: hops to live&gt;
URI=&lt;string: fully specified URI, such as freenet:KSK@gpl.txt&gt;
DataLength=&lt;number: number of bytes of metadata + data&gt;
[MetadataLength=&lt;number: default = 0, number of bytes of metadata&gt;]
Data 
&lt;@DataLength number of bytes&gt;
</pre>

<p class="body">If the client is inserting a CHK, the URI may be abbreviated as
  just CHK@. In this case, the node will calculate the CHK. The node must get
  all of the trailing field before it can start the insert into Freenet. The node
  may reply with one of the following messages:</p>

<ul class="body">
  <li><code>URIError</code>: Invalid Freenet URL. The transaction is terminated.</li>

  <li><code>Restarted</code>: The client should continue waiting.</li>

  <li><code>RouteNotFound</code>: The transaction is terminated due to not being
    able to find a route.</li>

  <li><code>KeyCollision</code>: The transaction is terminated due to a document
    with the same key already existing in Freenet. This message contains a URI
    field with the Freenet URI of the document.</li>

  <li><code>SizeError</code>: The transaction is terminated due to the data being
    too large for the key type; all non-CHK keys have a limit of 32 kB of data.
</li>
</ul>

<p class="body">During an insertion, multiple <code>Pending</code> messages may be returned.
These messages signal that the data is being successfully inserted, but insertion
is not complete, and the node has not received a <code>StoreData</code> message
yet:</p>

<pre>(Node -&gt; Client)

Pending
URI=&lt;string: fully specified URI, such as freenet:KSK@gpl.txt&gt;
[PublicKey=&lt;string: public key&gt;]
[PrivateKey=&lt;string: private key&gt;]
EndMessage
</pre>

<p class="body">When the node receives a <code>StoreData</code> message (and thus
  insertion is complete), a <code>Success</code> message is returned with the
  Freenet URI of the new document and possibly a private/public keypair, if the
  inserted document was an SVK. See the section on key generation about this.</p>

<pre>(Node -&gt; Client)

Success
URI=&lt;string: fully specified URI, such as freenet:KSK@gpl.txt&gt;
[PublicKey=&lt;string: public key&gt;]
[PrivateKey=&lt;string: private key&gt;]
EndMessage
</pre>
<hr>
<h3> Key Operations </h3>

<p class="body">These messages allow a client to generate keys. This does not 
  affect Freenet at all - the calculations are carried out at the node.</p>

<p class="body">Key generation requests are done via a <code>GenerateKey</code> message. Either a CHK or an SVK keypair can be generated:</p>

<b>GenerateCHK</b>

<pre>(Client -&gt; Node)

GenerateCHK
DataLength=number: number of bytes of data + metadata&gt;
[MetadataLength=&lt;number: default = 0, number of bytes of metadata&gt;]
Data
&lt;@DataLength number of bytes&gt;
</pre>
 
<p class="body">The node calculates the CHK as it would do if inserting, but instead 
  returns it. This completes the transaction:</p>

<pre>(Node -&gt; Client)

Success 
URI=&lt;string: fully specified URI, such as freenet:KSK@gpl.txt&gt;
EndMessage
</pre>

<b>GenerateSVKPair</b>
<p class="body">The format for generating SVKs is very similar but generates a 
  pair of keys (public and private) which are independent of any data. This is 
  generally used for setting up SSKs:</p>
<pre>(Client -&gt; Node)

GenerateSVKPair
EndMessage
</pre>

<p class="body">The node generates a key pair and returns:</p>

<pre>(Node -&gt; Client)

Success
PublicKey=&lt;string: public Freenet key&gt;
PrivateKey=&lt;string: private Freenet key&gt;
EndMessage
</pre>

<p>The public and private keys are returned as Freenet-base64 encoded strings. 
  These can be used to construct URIs for inserting SSKs:</p>

<pre>(insert) freenet:SSK@&lt;PrivateKey&gt;/&lt;name&gt;
</pre>

<p> Note: the public key is not sufficient to request SSKs as the private key is for inserting.  Attempting to use the public key as follows: </p>

<pre>(request) freenet:SSK@&lt;PublicKey&gt;/&lt;name&gt;
</pre>

<p> will result in an invalid key error; there are bits added to the
end of the public key that are necessary for generating a proper
request.  The only way to be sure that your request key is correct is
to use the return value of <code>GenerateCHK</code> (for CHKs) or the
<code>Pending</code>/<code>Success</code> response on insert.</p>

<b>InvertPrivateKey</b>

<pre>(Client -&gt; Node)

InvertPrivateKey
Private=&lt;PrivateKey&gt;
EndMessage
</pre>

<pre>(Node -&gt; Client)

Success
PublicKey=&lt;PublicKey&gt;
EndMessage
</pre>

<p class="body">
<code>Private</code> can be either an insert URI (must start with
freenet:SSK@) or a raw private key (ie the private value you get back
from GenKeys).</p>

<p class="body">A <code>Success</code> message is sent on success with
the <code>PublicKey</code> field set to the public key.</p>

<b> GetSize </b>

<pre>(Client -&gt; Node)

GetSize
URI=&lt;string: fully specified URI, such as freenet:KSK@gpl.txt&gt;
EndMessage
</pre>

<pre>(Node -&gt; Client)

Success
Length=&lt;number: size of document rounded up to the nearest power of two.&lt;
EndMessage
</pre>

<p class="body">This command is useful for working with splitfiles, so
that one can pre-allocate a buffer for the entire file and know where
each part of the splitfile goes inside the buffer, knowing their
lengths.
</p>

<p class="body">One can implement an equivalent function to this for
just CHKs by base64 decoding the CHK routing key (the part before the
',') and inspecting the 3rd to last byte; it's the log2 size of the
entire document.  Be careful with your base64 decoder, freenet uses a
different table than the standard one.</p>

  <hr>
