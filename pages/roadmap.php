<P><BR><BR>
</P>
<TABLE WIDTH=800 BORDER=0 CELLPADDING=2 CELLSPACING=0>
	<COL WIDTH=1>
	<COL WIDTH=0>
	<COL WIDTH=100>
	<COL WIDTH=832>
	<COL WIDTH=0>
	<COL WIDTH=1>
	<TR VALIGN=TOP>
		<TD ROWSPAN=13 WIDTH=1 BGCOLOR="#ffffff"></TD>
		<TD COLSPAN=4 WIDTH=944 BGCOLOR="#ffffff">
			<P ALIGN=LEFT><FONT SIZE=4 STYLE="font-size: 16pt">Matthew Toesland's (Toad) provisional Roadmap:</FONT> 
			</P>
			<UL>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Freenet 0.6 and
				NGRouting</B><BR> (we may put out a 0.5.3 if the network stabilizes
				enough before NGRouting is implemented). The main change in 0.6
				will be the implementation of NGRouting. This may take
				considerable tweaking to get right, but should solve the load
				balancing problem in a rational and empirical way, something that
				will be enormously useful. It may also make routing so effective
				that it can work in hostile environment situations where path
				folding (passing references around) is disabled (or reduced) to
				prevent harvesting, or even with fixed (possibly hardware) links.
				It will also adapt the routing to the network topology, speeding
				up fetching data dramatically. We will not release 0.6 until the
				network is working reasonably well i.e. a lot better than it is
				now, so it may well include some features listed below. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>NIOv2</B><BR> This
				may be implemented before 0.6, depending on how things go. The
				current NIO implementation leaves negotiations, connection
				establishment, sending several important messages such as
				DataRequests, and trailing field transfers, pseudo-synchronous
				(meaning we internally emulate blocking I/O to minimize code
				changes). Also all the HTTP based client code, and some internal
				stuff in the handling of FCP inserts. Not only is this
				inefficient, severely limiting to the node's load handling
				capacity, and prevents us from making the default splitfile
				download or upload threads 100, it also allows various denial of
				service attacks which might be feasible using very little
				bandwidth. NIOv2 will eliminate most of these problems (we will
				probably leave making the servlets use nonblocking I/O until
				last, maybe significantly later, maybe even post 1.0). 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Multiplexing</B><BR>
				Currently, a trailing field transfer will block a connection.
				This is a waste of system resources (i.e. the connection limit),
				makes handling various DoS's harder (we could reserve one
				connection for each routing table node if we had muxing), can
				cause timeouts, and slows the node down by forcing it to open
				more connections to the same node (which often involves expensive
				negotiations). We do not need to implement a full flow control
				protocol (a la WebMUX), if we impose a maximum file size in the
				node (we decided to make it 1MB). 
				<BR>
Multiplexing will bring significant benefits, regardless of routing algorithm. The main ones: 
<BR>* Dramatically reduced connection churn. 
<BR>* Significantly reduced memory usage. 
<BR>* Significantly reduced CPU usage. This is not just cosmetic; CPU usage affects message send times, and when the CPU is pegged long-term, the node becomes pretty much useless to both the user and the network. 
<BR>* Rewriting ConnectionHandler - new class MuxConnectionHandler - get rid of dead code etc. Will be backwards compatible by using the old CH for the old Presentation. 
<BR>* Protocol will be simpler to parse, resulting in fewer serious (corruption -> connection death) bugs. Detecting where a trailer ended etc is tricky on the old protocol. The new protocol will have an explicit trailer ended with code X command. 
<BR>* Room for extensibility, can e.g. get rid of Identify message hack, include IP address detection, etc, once the core functionality is implemented. 
<BR>* Improve message send times. 
<BR>* Eliminate some low bandwidth DoSs. 
<BR>* Nodes on win9x and other connection limited environments will work better. 

				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Session protocol
				version 2.0 and related changes</B><BR> Several problems: firstly,
				connection restarts currently involve public key crypto
				operations; they could be made a lot lighter. Secondly, the
				current session protocol wouldn't work at all for packet based
				transports. Thirdly, Freenet TCP traffic can be identified by
				various unencrypted control bytes that we use. Unfortunately,
				many ISPs have already installed hardware capable of detecting
				such traffic signatures - they use them for deprioritizing Kazaa
				traffic to optimize interactive performance, but they could
				easily be made to use it to identify or block Freenet traffic.
				All of these should be fixed by session protocol version 2.0.
				Also, it will enable us to implement network level IP address
				detection. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Pre-mix routing</B><BR>
				Entirely security related. If you request a large splitfile or a
				site full of images, a node that the requests get sent to could
				statistically determine the probability of you having made the
				request rather than being the node it got routed through. And
				HTLs give away information despite our randomizing them a little
				on the client. So we add a mixmaster layer - tunnel the request
				through a pair of nodes, so that the first one knows us, but not
				our request, and the second one knows the request and the first
				one, but not us. The nodes are chosen randomly within reasonable
				bounds. This should reduce our vulnerability to such attacks. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Memory and CPU
				optimization</B><BR> We need to reduce Freenet's memory, thread and
				CPU footprint. Drastically. This will be profile driven but I
				have several ideas about the big consumers already. Thread
				footprint will be reduced by more NIO, as will CPU, but we will
				need some profiling. Ideally our memory footprint should be
				brought down to 64MB or so; we want people to run Freenet in the
				background, 24x7, remember? 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Misc security</B><BR>
				We need to increase the keysize to 256 bits (we use 128 a lot of
				places), we need to look at resistance to (asymmetrical) DoS
				attacks on the session level, there are probably lots of other
				issues. One interesting possibility on the quasi-steganography
				side would be to pass through data incoming on our port to
				another process on the local machine unless/until we see a
				node-specific magic string, thus making port scanning even
				harder. We currently listen on all interfaces (and then reject
				the connections from unwanted IP ranges) if asked to listen on
				more than one - this needs fixing too. Padding messages (to
				prevent information leakage to traffic analysis) is another
				possibility; there may also be practical solutions to the various
				timing attacks that can currently reveal whether a node served a
				file from cache. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>UDP</B><BR> We may or
				may not want to implement UDP support before 1.0. Advantages: it
				is a message based transport, and therefore fast for messages; it
				will allow users behind certain firewalls to run full nodes, and
				it will give us the infrastructure for future steganographic
				protocols. It also is not subject to OS level limitations on
				number of simultaneous connections, and may be necessary in
				relation to certain DoS attacks. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Web based config</B><BR>
				The current situation with the wininstaller is very suboptimal;
				we could extend the config updating infrastructure to allow a
				fully java based (re-)configuration on the fly via the web
				interface, and make the wininstaller completely optional, a thin
				wrapper. Not necesarily a major priority. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Debugging!</B><BR>
				Debugging has always been one of my main tasks. A full time
				programmer can make more headway, more systematically on this
				than an unsupported group of volunteers. We will need a LOT more
				debugging before 1.0. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Really big
				datastores</B><BR> It may become necessary to support datastores so
				huge that the index does not fit in RAM, most likely we will do
				this through the Berkeley DB, although several other
				possibilities have been discussed. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Revocable SSKs</B><BR>
				In order to have an official project freesite, or any other
				important freesite really, we need to have a revocation mechanism
				whereby anyone of several people can revoke a key that they do
				not own (they are only trusted for revoking it if it is cracked).
				Once this is done, we will set up an official project freesite. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Other client
				changes</B><BR> We may implement some kind of client load manager,
				which would balance request load between background splitfile
				downloads and uploads, so that one splitfile gets lots of
				&quot;threads&quot;, but for several, available request &quot;threads&quot;
				would be shared out. Background downloads should persist across
				restarts. Prefetch, and transparent splitfile downloads (e.g. on
				large inline images) also require this for effective operation.
				On the other hand, we may not. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Performance</B><BR>
				Major performance indicators include announcements working,
				inserts at one node immediately being available at another given
				enough HTL, latency measurements, and the stream servlets (which
				probably need more work) actually working across the network.
				Major releases should be based on performance more than features.
								</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Development Tools</B><BR>
				It would be very nice to have Freenet-hosted development tools
				working for 1.0, so that anonymous contribution to the
				development was easier. Arch and Frost are a good start. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>1.0</B><BR> We will
				release 1.0 when we are confident that the network works
				reasonably well, can handle the load of such a cataclysm, and we
				have reasonable security in place against any known possible
				asymmetrical-force attacks. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Kaffe/GCJ</B><BR> It
				would be wonderful if Kaffe or GCJ would run Freenet (complete
				with NIO) before 1.0, for a variety of reasons, but we won't
				delay 1.0 for this nor will we spend project time getting these
				to work unless absolutely necessary. 
				</P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"><FONT SIZE=4><B>Post 1.0</B><BR></FONT></P>
				<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
				<UL>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>TUKs</B><BR>
		A new key type that supports secure sites that: 
<br>- are like edition sites that can be bookmarked 
<br>- are like DBR sites, but don't dissapear when they aren't inserted 
<br>- doesn't allow people to delete their content 
<br>- allows people to backtrack to old versions without much trouble 
<p>Summary: There are two parts to the proposal - a new key type and some supporting metadata. The new Time Updatable Key (TUK) contains in its payload only the latest site edition number. The TUK itself is signed by the site's owner, and nodes throughout freenet have access to the update date through standard datastore/FNP mechanisms. Whenever a TUK collision occurs, the one with the latest timestamp wins, replacing the old version. So, here we are with a new key containing a value that can be updated. Typical (proper) usage would have the TUK contain an ever increasing edition number (or milliseconds since epoch, for you DBR fans). <P>

					
					<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Passive Requests</B><BR>
					Requests that hang around on the network waiting for the file to
					become available. Faster and less load than client level
					polling. Trivial application: reducing network load caused by
					Frost, making it respond faster. Security implications not fully
					understood yet (they will be before we implement it, also
					below). 
					</P>
					<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
					<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Inverse Passive
					Requests</B><BR> An idea to provide semi-permanence (availability of
					files not immediately published) through a mechanism related to
					passive requests. Of course it would not be true permanence, but
					it would have some interesting uses and would be faster and less
					load generating than the client level alternatives. Security
					implications not fully understood yet. 
					</P>
					<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
					<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Streaming</B><BR>
					(Possibly lossy) - A stream insert is routed to a node chain by
					its key; requests for the stream are routed to the same nodes.
					The stream is multiplied in the request chain. If routing really
					does work, we can do fun things like this and the above.
					Security implications not fully understood yet. 
					</P>
					<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
					<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Steganography,
					etc</B><BR> Alternate transports, steganography, support for hostile
					environment guerilla networks (e.g. no path folding), etc. An
					eternal struggle. 
					</P>
					<P ALIGN=LEFT STYLE="margin-bottom: 0cm"></P>
					<LI><P ALIGN=LEFT STYLE="margin-bottom: 0cm"><B>Better NAT
					support</B><BR> It might be possible to use NATted nodes better
					through various mechanisms, we should investigate more fully
					after 1.0. 
					</P>
				</UL>
			</UL>
			