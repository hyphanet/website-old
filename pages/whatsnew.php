<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr>
<h2>What's new?</h2><p>
<h3>Changelog for the stable branch</h3>

<LI> <span style='color:blue'>Date: Wed, 02 Jun 2004 19:54:01 +0100</b></a></span><P>
<b>Build 5084</b><p>


Freenet stable build 5084 is now available. Please upgrade ASAP, if you
are running a stable branch node (if you're not, you'll know). You can
do this by running the update.sh script on POSIX like systems such as 
Linux or MacOS/X (stop the node first, then update it, then start it),
or on Windows, you can run the update option on the menu, if there is
one, or on any platform, stop the node, download
http://freenetproject.org/snapshots/freenet-latest.jar over your
existing freenet.jar, and then start the node up again.<p>

Two changes only in this build:<p>
* Fix a NullPointerException that prevented the node from starting up
  sometimes if it had bad seednodes.<p>
* Make 5083 mandatory. The reason for the stable network's recent bad
  performance is probably because the network consists of many 5083
  nodes and many 5082 nodes. Because 5083 makes some fairly drastic
  changes to how HTL is used (and some routing changes), the two builds
  don't get along very well with one another. We can improve the
  situation by making 5083 mandatory.<p>
<hr>




<LI> <span style='color:blue'>Date: Sat, 29 May 2004 21:31:54 +0100
</b></a></span><P>
<b>Build 5083</b><p>


Freenet stable build 5083 is now available. All stable branch users
should upgrade. This build will be made mandatory in the fairly near 
future, so it is a good idea to upgrade soon. If you don't know which 
branch you're on you're probably running stable. If on linux, MacOS/X,
or other POSIX like system, use the scripts:<p>
./stop-freenet.sh<br>
./update.sh<br>
./start.sh<p>
If on Windows, use the update link on the start menu, or
freenet-webinstall.exe. On any OS, you can shut down the node and fetch
the new jar from http://freenetproject.org/snapshots/freenet-latest.jar
which you can then copy over your existing freenet.jar, and then restart
the node.<p>

Changes include:<p>
* 5082 is made mandatory. 5083 will be made mandatory by the next stable
  build, because of the major changes (especially the next item). The
  overwhelming majority of seednodes run 5082 now, so hopefully this
  won't be too big a problem.<p>
* maxHopsToLive is now 20, and HTL is used slightly differently.<p>
* Use a completely different algorithm for the probability running
  averages in NG Routing. The old one was inaccurate and alchemical.<p>
* Use different algorithms for smoothing data and estimating request
  rates for rate limiting. This should eliminate (or greatly reduce)
  the oscillations in received queries that we have seen recently on
  both networks. It should also make rate limiting more accurate and
  stable.<p>
* Fix some major bugs, for example: We were not calling the callbacks on
  expired messages. Now we do, with a separate thread for it.<p>
* Open more connections simultaneously on startup. Should speed up the
  process of nodes getting wired into the network on startup.<p>
* Nodes that are limited by threads (usually these are high bandwidth
  nodes) should behave better (reject less queries and connections).<p>
* Show more detail on the per node routing table pages linked from the
  routing table page.<p>
* Improve input bandwidth predicting load estimator: assume that our
  input bandwidth is at least equal to our output limit.<p>
* New experimental option doReserveBandwidthForSuccess, which throttles
  bandwidth usage to try to improve routing success. Feel free to
  experiment with this if you have some idea what you are doing; it WILL
  result in your node processing fewer queries and less traffic however.<p>
* Various optimizations and locking improvements.<p>
* Improve renaming code in datastore.<p>
* Fix on-the-fly update of maxOpenConnectionsNewbieFraction.<p>
* logDetail renamed to logLevelDetail in freenet.client.cli.Main<p>
* Add some RFC3330 local/invalid/LAN/testing addresses to the node's IP
  validation code. This affects which connections are throttled (if a 
  connection is from a LAN address, it shouldn't be throttled), and
  whether the node accepts a detected IP address.<p>
* New diagnostics: receivedTransferSize, sentTransferFailureSize,
  sentTransferSuccessSize.<p>
* Refactoring, removal of dead or useless code, logging changes, etc
  etc.<p>
Full changes are available from the CVS list or from browsing the CVS
repository via our web site.
You may see the following message after starting a 5083 node, the first
time:<p>
"Caught java.io.IOException: Invalid magic 1072614716 should be 17025 -
format change?"<p>
This is due to the changes to routing, which incompatibly changed the
routing table format. Your routing table's estimators will therefore be
reset. This message should only happen the first time you start the node
after upgrading. If it happens after that, something is wrong. The
seednodes estimator format also changed, so when reseeding you may see
messages like:<p>
Caught freenet.node.rt.EstimatorFormatException: Wrong impl:
SelfAdjustingDecayingRunningAverage reading tcp/freenetfarm.dnsalias.com:35985,
sessions=1, presentations=3, ID=DSA(b078 8b64 9e69 0302 b2e2  53c6 7610 dbd1 1641 5580),
version=Fred,0.5,STABLE-1.50,5079 from FieldSet :(<p>

This just means that the seednodes format has changed. It will still use
the nodes, hopefully, but it won't use the estimators.<p>
<hr>



<LI> <span style='color:blue'>Date: Sat, 15 May 2004 21:00:12 +0100</b></a></span><P>
<b>Build 5082</b><p>

Freenet stable build 5082 is now available. The snapshots have been
updated. Please upgrade ASAP. Stable branch users should upgrade at
least weekly as Freenet is still at a relatively early phase of
development. You can use the update option on the start menu, or
freenet-webinstall.exe to update your node on Windows. Or under Linux,
MacOS/X or other POSIX-like systems, you can use update.sh:<p>
./stop-freenet.sh<br>
./update.sh<br>
./start-freenet.sh<p>

Please remember to stop the node before updating, and start it again
afterwards.<br>
You can also get the jar directly from 
http://freenetproject.org/snapshots/freenet-latest.jar

<p>
Details of this build:<br>
Various bug fixes, some of them pretty serious. Comes to a fairly small
amount of actual code though. Lots more changes are being tested and 
debugged on unstable.<p>
* Rate limiting was almost completely broken due to a stupid bug. Fixed
  it.<p>
* Major routing fix: many of our running averages were, for various
  reasons, at 0.999999999999 or so. With the current running average
  implementation for probabilities, the result of this is that the
  running average will never change (because the closer it is to 0.0 or
  1.0, the less sensitive it is). We were supposed to be doing bounds
  checking to ensure that this wasn't a problem; there was a bug in the
  bounds checking :(. The result of this bug was that some of the major
  factors in the NGRouting calculation were very often completely wrong!
  The current implementation is suboptimal, there is a replacement 
  being tested on unstable, but the code merged in this build should be
  much better than the previous builds!<p>
* Fixed a NullPointerException that would cause the web interface to
  stop working after a while.<p>
* Show some more useful detail next to probability running averages on
  the per node pages linked from the routing table page.<p>
* Don't leak a temp file when an insert fails.<p>
* A minor optimization in DSAPublicKey.equals(), and some minor code
  style changes.<p>
<hr>


<LI> <span style='color:blue'>Date: Thu, 13 May 2004 04:25:10 +0100</b></a></span><P>
<b>Build 5081</b><p>


Freenet stable build 5081 is now available. Please upgrade, unless you
are running an unstable build. Users of the stable network should
upgrade weekly on average. The snapshots are updating. You can get the
new build by using freenet-webinstall.exe on Windows, or update.sh on
Linux/*nix/MacOS X. Don't forget to shut down the node before updating
and start it up afterwards.<p>
Changelog: Fixed lots of bugs:<p>

* The routing table was being overrun by nodes with no contact details.<p>
* Reseeding caused a NullPointerException and never worked (thanks
  Conrad).<p>
* Many inserts would never finish.<p>
* Several inaccuracies fixed and improvements made to rate limiting.<p>
* The "latest build" indicator was very easily spoofable. Now it is
  rather less easy to spoof.<p>
* Fproxy threads would hang forever if an exception happened during the
  request, e.g. if out of disk space.<p>
* We should cache late-arriving data, if we are still searching.
* hops.png had a border on some pages.<p>
* Vary the minRequestInterval randomly slightly to prevent oscillation
  (and make traffic analysis harder).<p>
* build.xml will now build (with ant) everything, including
  freenet-ext.jar, if you have the source for Contrib.<p>
* Update CVS details in build.xml because sf changed the CVSROOT.<p>
* Don't send whether we are transient in our node reference. Firstly, it
  is irrelevant: all that matters now is whether the node is
  contactable; all nodes will either do their share or will be dropped
  from people's routing tables. Secondly, it's a breach of privacy
  (although a minor one given the first reason).<p>
* DataSent was not being sent until after the padding had been sent,
  when a SendData failed. This meant the parent state didn't know the
  send had failed for some time, which could cause problems.<p>
* Handle various unexpected or late messages better.<p>
* Some minor refactoring, logging, indenting, comments, etc.<p>
<hr>



<LI> <span style='color:blue'>Date: Tue, 04 May 2004 00:30:22 +0100</b></a></span><P>
<b>Build 5078</b><p>

Freenet stable build 5078 is now available. The snapshots have been
updated. All stable branch users should upgrade ASAP.<p>

Changelog:<p>
* Make 5077 mandatory. This is a fairly significant change. 5077 made
  huge changes, including some fundamental changes to how freenet
  routes ("bidirectional routing" - all connected nodes may be routed to);
  for the network to work effectively, we need the whole of stable to be
  running more or less the same code.<p>
* Lots of bugfixes.<p>
* New, cleverer startup script for unix-like systems.<p>
<hr>






<LI> <span style='color:blue'>Date: Sun, 25 Apr 2004 02:08:22 +0100</b></a></span><P>
<b>Build 5077</b><p>

Stable build 5077 is now available. The snapshots have been updated.
All users of the stable branch should upgrade ASAP. This build has far
too many changes to list exhaustively (but I tried, you can see the
results in the commit comments). Some highlights:<p>
* Fixed a HUGE bug which was preventing inserts from working at all
  well. This may well be responsible for much of Freenet's woes. It has
  been around at least since the native datastore rewrite..<p>
* Major changes to how and to where we route - "bidirectional routing".
  Basically this means that the routing table is a superset of the set
  of connected nodes, and if a node is connected, we will try to route
  to it. Even if it is a transient. This should significantly improve
  performance and reduce the number of Route Not Found errors.<p>
* Improved announcements<p>
* Fixed a major rate limiting bug.<p>
* Fixed many less significant bugs.<p>
* New diagnostics and config options<p>
* Substantial reduction in memory usage. Many leaks eliminated.<p>
* Fixed two major bugs that would cause splitfile downloads in fproxy to
  hang, and made some related improvements.<p>
* Improvements to the HTTP interface to the node (diagnostics etc are
  themed, better routing table status page, etc)<p>
* Fixed bug with ZIP files in manifests.<p>
* New linux-specific option doCPULoad, to attempt to throttle requests
  based on actual measured overall system CPU usage. I found this
  useful, others might; a Windows implementation is not likely. It is
  not possible to do this in a cross platform manner.<p>
* Workaround for a major NIO bug on Windows (which caused 100% CPU
  usage).<p>
* Major bug fix relating to cancelling messages (messages that were
  supposed to be cancelled weren't getting cancelled).<p>
* Tons of refactoring - much code tidied up, split into more manageable
  pieces, or outright deleted due to not being needed.<p>
* Lots of optimizations.<p>
* Linked to the new FIND is Not Dolphin index instead of Dolphin, it is
  more appropriate for the stable branch as it indexes stable sites
  only.<p>
* And much more!<p>
<hr>




<LI> <span style='color:blue'>Date: Wed, 17 Mar 2004 16:09:24 +0000</b></a></span><P>
<b>Build 5076</b><p>

Freenet stable build 5076 is now available. The snapshots have been
updated. You can get the build via the update.sh script on Linux, BSD,
or OS/X, or use the freenet-webinstall.exe utility to update on Windows,
or get the jar from
http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>
Major changes:<p>
* Make 5074 mandatory. Most nodes seem to have upgraded... This is
  necessary for the next item.<p>
* Send the minRequestInterval on the IdentifyPacketMessage, a message
  that is exchanged when a connection is opened. This will improve the
  accuracy of rate limiting.<p>
* Fix a serious bug in the new NGRoutingTable discard-sort order (i.e.
  the algorithm that decides which node to drop when we want to drop a
  node from the routing table). The bug would have caused new nodes that
  can't be connected to, to persist in the routing table forever. It was
  introduced in 5075.<p>
<hr>


<LI> <span style='color:blue'>Date: Sat, 13 Mar 2004 18:54:08 +0000</b></a></span><P>
<b>Build 5075</b><p>

Freenet stable build 5075 is now available. The snapshots have been
updated. You can get the build via the update.sh script on Linux, BSD,
or OS/X, or use the freenet-webinstall.exe utility to update on Windows,
or get the jar from
http://freenetproject.org/snapshots/freenet-latest.jar . All stable
branch users should upgrade.<p>
Major changes:<p>
* New algorithm for deciding which nodes to drop from the routing table.
* New load measurement based on predicting future downlink bandwidth
  usage. Won't affect the node much at present, it could be combined
  with limits on local clients to prevent nodes from getting high
  messageSendTime's when they request lots of data.<p>
* Increase the default estimated file size (for rate limiting, load
  balancing, etc) to 350kB.<p>
* Tweaks to the rate limiting code.<p>
* Make logInputBytes and logOutputBytes work again.<p>
* Fix a rare NullPointerException when accepting a new FNP connection
  and the connection times out.<p>
<hr>


<LI> <span style='color:blue'>Date: Sat, 06 Mar 2004 02:53:49 +0000</b></a></span><P>
<b>Build 5074</b><p>

Freenet stable build 5074 is now available. The snapshots will have been
updated sometime in the next few hours. Once that has happened, you can get
build 5074 via the update.sh script on Linux, BSD, or OS/X, or use the
freenet-webinstall.exe utility to update on Windows, or get
the jar from http://freenetproject.org/snapshots/freenet-latest.jar .
All stable branch users should upgrade.<p>

Major changes:<p>
* Fixed a major memory leak.<p>
* Fixed a minor routing problem (the overall probability estimators,
  used for various purposes, were always exactly 1.0).<p>
* Fixed a more major routing problem (very high routing table churn caused
  by us being too quick to poach references from requestors).<p>
* Lots of changes to the HTML interface to the node; hirvox has been
  doing lots of good work on this. The new template system will be much
  more flexible.<p>
* New diagnostic var inputBytes.<p>
* Lots of minor changes, optimizations, etc.<p>

<hr>



<LI> <span style='color:blue'>Date: Wed, 03 Mar 2004 16:15:27 +0000</b></a></span><P>
<b>Build 5073</b><p>


Freenet stable build 5073 is now available. The snapshots are being
updated. You can get it via the update.sh script on Linux, BSD, or OS/X,
or use the freenet-webinstall.exe utility to update on Windows, or get
the jar from http://freenetproject.org/snapshots/freenet-latest.jar .
All stable branch users should upgrade. The snapshots have been updated.
<p>
Changelog:<p>
* Fixed a fairly major deviation from freenet's original design goals:
  the attacker must not be able to probe for data without causing it to
  be distributed more widely. Specifically, if the requestor cancels a
  transfer, we should still transfer the data. Of course this means that
  nodes can DoS the network by requesting data and then cancelling the
  transfer; we will instigate some sort of blacklisting to try to
  discourage this, but it is not an immediate priority.<p>
* Fix a NullPointerException in the TransferInsert state.
<p>
<hr>



<LI> <span style='color:blue'>Date: Thu, 26 Feb 2004 01:16:18 +0000</b></a></span><P>
<b>Build 5072</b><p>


Freenet stable build 5072 is now available. The snapshots are being
updated. You can get it via the update.sh script on Linux, BSD, or OS/X,
or use the freenet-webinstall.exe utility to update on Windows, or get
the jar from http://freenetproject.org/snapshots/freenet-latest.jar .
All stable branch users should upgrade. The snapshots should have been
updated soon.
<p>
This fixes a bug that went into 5071 by mistake, that could cause the
node not to start, or other bad things. Please upgrade. Apologies for
releasing a new stable build so soon after the first one.<p>

<hr>



<LI> <span style='color:blue'>Date: Wed, 25 Feb 2004 21:46:11 +0000</b></a></span><P>
<b>Build 5071</b><p>



Freenet stable build 5071 is now available. The snapshots have been
updated. You can get it via the update.sh script on Linux, BSD, or OS/X,
or use the freenet-webinstall.exe utility to update on Windows, or get
the jar from http://freenetproject.org/snapshots/freenet-latest.jar .
All stable branch users should upgrade.

The main change in this build is a fix for a memory leak. This may not
be fully fixed yet but is drastically reduced from 5070. Also there is a
significant rate limiting fix, and lots of minor fixes. Please upgrade.<p>

<hr>




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
<hr>
<tr>
<td align="right" valign="bottom">
Want to help? Make a summary of a discussion on the freenet maillist and send it to <a href="mailto:newsbyte@freenetproject.org">NewsByte</a>
</td>

