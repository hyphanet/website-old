<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr>
<center><h2>What's new?</h2><p>
<h3>Changelog for the stable branche</h3>
</center>
<P>
<BR>
<P>

<LI> <span style='color:blue'>Date: Thu, 19 Feb 2004 02:26:34 +0000</b></a></span><P>
<b>Build 5070</b><p>


Freenet stable build 5070 is now available. The snapshots have been
updated. You can get it via the update.sh script on Linux, BSD, or OS/X,
or use the freenet-webinstall.exe utility to update on Windows, or get
the jar from http://freenetproject.org/snapshots/freenet-latest.jar .
All stable branch users should upgrade.<p>

The main change in this build is significant work on the rate limiting
algorithm. We now average the requests per hour and load values before
estimating the target global queries per hour. This should improve
things significantly and prevent oscillations in load, and help nodes
with less CPU power to handle as many requests as they can, and no more.
There were several other minor changes; for a detailed changelog check
the CVS list.<p>

<hr>



<LI> <span style='color:blue'>Date: Sun, 15 Feb 2004 01:08:54 +0000</b></a></span><P>
<b>Build 5069</b><p>



Freenet stable build 5069 is now available. The snapshots will have been
updated sometime in the next few minutes; if you don't get 5069, try
again in an hour's time. If it's still 5068, complain to
support@...  You can get it via the update.sh script on
Linux, BSD, or OS/X, or use the freenet-webinstall.exe utility to update 
on Windows, or get the jar from 
http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

A large number of bugfixes, some of them major, and a number of larger
changes, are present in this build. Details:<p>
* Fixed a major bug in stats that was causing us to dramatically 
  underestimate our used bandwidth resulting in effectively no controls on
  the number of trailers transferring, resulting in too many requests
  accepted, too many parallel transfers, and most of them running really
  slowly and eventually failing.<p>
* Fixed another major bug that resulted in one request for a reasonably
  available file causing a large number of transfers; certain send
  failure modes were not being handled properly, with the result that we
  continued to receive the file (thus allowing it to propagate through
  the network), but forgetting about it so that when it does complete,
  it does not get committed, and moving on to request the file from
  another node, so we end up transferring many copies, most of which end
  up in the temp dir and never leave it; this bug wasted a lot of
  bandwidth and also disk space.<p>
* Implemented new rate limiting algorithm. Joint effort by me and ian.
  Should be much better behaved than the old one, involves less
  "alchemy". Each node we are connected to is sent a different minimum
  request interval, depending on how many requests it makes, but all
  have a reasonably fair quota, which will increase quickly if needed.
  This data is included on the Open Connections page at max detail.<p>
* Lots of improvements and bugfixes to the rate limiting system: all FNP
  messages now carry the request interval, and we can read it from
  IdentifyPacketMessage's (although we don't write it yet). The code to
  detect nodes violating the minimum request intervals has been
  significantly improved, and we now have a message so that nodes can
  tell other nodes that they have violated their quota, with some
  debugging info. However this is not necessarily all wrapped up yet.
  When it is, we will implement some enforcement mechanisms such as
  banning nodes which persistently violate the request intervals.<p>
* Many minor optimizations and fixes.<p>
* Opera (the browser) users who have read and acted on the warning, i.e.
  configured opera to respect MIME types, can now set
  mainport.params.servlet.1.params.dontWarnOperaUsers=true to get rid of
  the warning page.<p>

<hr>




<LI> <span style='color:blue'>Date: Tue, 10 Feb 2004 13:34:17 +0000</b></a></span><P>
<b>Build 5068</b><p>



Freenet stable build 5068 is now available. Upgrade using
freenet-webinstall.exe or update.sh , or download the jar from
http://freenetproject.org/snapshots/freenet-latest.jar . All users of
the stable network/branch should upgrade immediately.<p>

This fixes a major bug in 5067 and a minor one, one that caused
NullPointerException's in routing after we had been up for a while, and
one optimization.<p>

<hr>



<LI> <span style='color:blue'>Date: Tue, 10 Feb 2004 01:25:59 +0000</b></a></span><P>
<b>Build 5067</b><p>


Freenet stable build 5067 is now available. Upgrade using
freenet-webinstall.exe or update.sh , or download the jar from
http://freenetproject.org/snapshots/freenet-latest.jar . All users of
the stable network/branch should upgrade immediately.<p>

This fixes two major bugs in 5066:<p>
* High-level bandwidth limiting was effectively disabled by the low
  level bandwidth limiting having too low a multiplier. This lead to
  large numbers of simultaneous transfers, resulting in nodes rejecting
  all queries for ages, slow transfers, and more transfer failures.<p>
* An accidentally committed patch changed the name of a part of the
  format used by Fred to convey routing data when reseeding.<p>

<hr>





<LI> <span style='color:blue'>Date: Sun, 08 Feb 2004 02:31:14 +0000</b></a></span><P>
<b>Build 5066</b><p>

Freenet stable build 5066 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade. You will also need to reseed your node: get
a new seednodes.ref from
http://freenetproject.org/snapshots/seednodes.ref . This build is not
compatible with older stable builds.
<p>
We have merged several weeks' work in this build. Specifically, rate
limiting, which is a new way of balancing load on Freenet, and a bug fix
in the datastore, which could have been quite nasty (causing the LRU
list in the datastore to be wrong, and the node to get jammed for a
while every time a file was committed). Subjectively, the unstable
network seems to work fairly well with this code, although there are a
few concerning stats, so we decided it needs wider testing. Hopefully
the stable branch will work significantly better as a result of the new
code. Of course it will initially as it is small, the test comes when it
gets bigger. Please upgrade and reseed.
<P>

<HR>




<LI> <span style='color:blue'>Date: Tue, 27 Jan 2004 21:02:21 +0000</b></a></span><P>
<b>Build 5065</b><p>

Freenet stable build 5065 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

The main change here is to reduce the maximum HTL to 10. Ian suggested
this could reduce the network load, on the basis of experimental
evidence from last year that if data isn't found at HTL 7-13, it
probably won't be found at all. I believe this was found by Cruft's
spider originally... If it doesn't work, we msay revert it.<p>

<hr>

<LI> <span style='color:blue'>Date: Tue, 27 Jan 2004 01:58:35 +0000</b></a></span><P>
<b>Build 5064</b><p>

Freenet stable build 5064 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

The main change is the implementation of a defence against a very nasty
denial of service attack. Detail: if a node requests a file from us,
and we transfer the data from another node, or as is more common, a
chain of other nodes, and then it terminates the transfer, then we would
previously continue to receive the data, on the grounds that we might
need it - it will be useful, and also on the grounds that closing a
connection is expensive. The latter reason no longer exists given
multiplexing. The overriding concern now is that the transfer will use
up bandwidth and cause overload on many nodes throughout the network,
and the attack uses very little bandwidth to cause this. Thus it is more
important to prevent the attack than to get the file, as an attacker
could relatively easily use it to propagate garbage data to a large
fraction of the network, overwhelm the network, destroy specialization
and generally produce the symptoms we have been seeing. However there is
no evidence that an attack along such lines has in fact been mounted; we
should eliminate that possibility.<p>

Future work:<p>
1. We need to punish the node in some other way - it has put us through
a lot of work, only to cancel the request. This can happen naturally
sometimes, due to restarts; this could however be detected by the
connection loss, but this doesn't help us much if the cancels cascade
down the chain. So we need some mechanism so that nodes which cancel a
lot of transfers will be penalized. My favourite idea would be to
implement the latest load balancing idea, request rate limiting, and
then to multiply the minimum request interval for a specific node by a
number calculated for that node, which would be a function of the
running average of transfers cancelled.<p>

<hr>

<LI> <span style='color:blue'>Date: Tue, 20 Jan 2004 19:55:34 +0000</b></a></span><P>
<b>Build 5063</b><p>

Freenet stable build 5063 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

Changes:<p>
* Reduce the maximum hops to live from 25 to 20. This should reduce
  overall network load.<p>
* Re-enable NGRouting. This works pretty well on unstable. However
  unstable is a tiny network, so we have no real reason to think it will
  work well on stable. But we may as well try it. One important feature
  is 'unobtanium', a mechanism where the node when overloaded can choose
  which requests it wants to accept on the basis of success probability.<p>

<hr>


<LI> <span style='color:blue'>Date: Tue, 20 Jan 2004 19:40:40 +0000</b></a></span><P>
<b>Build 5062</b><p>


Freenet stable build 5062 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

Changes:<p>
* Reduce the HTL when we get a QueryRejected after the Accepted (this
  means it is probably a route not found QR). We used to do this for all
  QRs, but I think that is excessive. This should significantly reduce
  the overall load. It may make routing worse. It will be interesting to
  see. Hopefully the load reduction will offset the routing to fewer
  nodes, and lower HTLs when we do, resulting in overall better
  routing...<p>
* Don't count unconnectable nodes as backed off in the routing table
  status page.<p>

<hr>

<LI> <span style='color:blue'>Date: Thu, 15 Jan 2004 17:44:31 +0000</b></a></span><P>
<b>Build 5061</b><p>


Freenet stable build 5061 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

The major change is a change to routing that takes what was done in 5060
in the opposite direction, sort of... if every node rejects us, we will
try the backed off nodes, but we will do it only after trying all the
non-backed-off nodes. This strategy appears to have been working for
local requests, before 5060, so maybe it will work more widely. This is
also how we use backoff on NGRouting... anyway, all stable nodes should
be upgraded as soon as possible. In practice it should improve the local
node's performance irrespective of other nodes, in that it reduces the
number of RNFs and increases the chance of finding data, but it may also
increase the overall network load.. we may have taken it too far in the
other direction in 5060. The only local cost is that it may take longer
for requests to fail.<p>


<hr>



<LI> <span style='color:blue'>Date: Thu, 15 Jan 2004 04:09:52 +0000</b></a></span><P>
<b>Build 5060</b><p>


Freenet stable build 5060 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

Changelog:<p>
* Make the routing algorithm treat local and non-local requests exactly
  the same. We were treating local requests differently in that we would
  route to nodes that were backed off for a local request, but not for a
  request we were serving for another node. This was perhaps exploitable
  probabilistically to identify groups of local requests, and was also
  probably causing a distortion in routing...<p>
* Increase the routing table size to 100. Because of the above and
  because of the fact that the overwhelming majority of queries are
  rejected or time out, a larger routing table may be helpful.<p>
* Added new stats localRequestSuccessRatio and localRoutingSuccessRatio,
  these may be of interest, but should probably be made optional...<p>
* Removed the non-working links on the routing table summary page.<p>
* Prevented a NullPointerException in MuxConnectionHandler, although the
  underlying bug remains, it is slightly less severe...<p>



<hr>


<LI> <span style='color:blue'>Date: Wed, 14 Jan 2004 23:05:08 +0000</b></a></span><P>
<b>Build 5058</b><p>

Freenet stable build 5058 is now available. The snapshots have been
updated. Get it via the update.sh script on Linux, BSD, or OS/X, or use
the freenet-webinstall.exe utility to update on Windows, or get the jar
from http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>

Changelog:<p>
* Force all stable branch nodes to use the classic routing
  implementation. This may have been set wrong because a node switched
  networks, etc. If a user really wants to run ngr on the stable network
  he can edit the code and compile it him-/her-self.<p>
* Remove the NewNodeContactor, a hack used to ensure that new nodes in
  the routing table are contacted regularly, which was only enabled if
  NGRouting was active. This has been causing a massive amount of
  traffic on the unstable branch and depending on how many nodes were
  actually running NGR on stable may have caused a lot of traffic there
  too. The replacement is code to route every 100th incoming FNP request,
  on average, using the least-experienced-first routing algorithm, if we
  are using NGR. All these changes will also be committed to unstable
  where they may make more difference.<p>
* Minor cosmetic improvement to the routing table status page (nodes
  only show in red if they have no connections and connections are
  failing).<p>
* The routing table size to max connections ratio has been reduced from
  a minimum of 4 to a minimum of 2. This means nodes on win9x can have a
  30 node routing table and nodes on OS/X can have a 50 node routing
  table.<p>
* Locking fix in the classic routing table. This could have caused
  various problems...<p>
* Up the lastGoodBuild to 5053 to remove ambiguity; probably no
  practical impact.<p>
<P>

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
Want to help? Make a summary of a discussion on the freenet maillist and send it to <a href="mailto:newsbyte@freenetproject.org">NewsByte</a>
</td>

