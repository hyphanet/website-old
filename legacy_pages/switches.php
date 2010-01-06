<h2>Freenet Reference Daemon Documentation</h2>
<h3>Fred,0.5,1.46,552</h3>
<i>(This manual was automatically generated on Feb 5, 2003 1:16:03 PM. If you have
updated Freenet since then, you may wish to regenerate it.)</i>
FRED (Freenet REference Daemon) is the standard implementation of Freenet. This is
the node, which serves as a router, data cache, and personal gateway all rolled into
one. For FRED to run, it requires a configuration file to be present - this can be
created either during the installation, by starting the node with the --config switch
(see below), or running the freenet.config.Setup class manually. See the <a href="docs.html"
>project documentation pages</a> for more information, or ask pointed and specific questions
on the <a href="lists.html">mailing lists</a>.

<h4>Command line switches:</h4>
<table width="500" border="0" cellspacing="0" cellpadding="1">
<tr><td><i>Name:</i></td><td><b>help</b>(--help | -h)</td></tr>
<tr><td><i>Arguments:</i></td><td></td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> prints this help message. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>system</b>(--system)</td></tr>
<tr><td><i>Arguments:</i></td><td></td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> prints JVM properties. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>version</b>(--version | -v)</td></tr>
<tr><td><i>Arguments:</i></td><td></td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> prints out version info. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>manual</b>(--manual)</td></tr>
<tr><td><i>Arguments:</i></td><td></td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> prints a manual in HTML.</td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>export</b>(--export | -x)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}|-</td></tr>
<tr><td><i>Default val:</i></td><td>-</td></tr>
<tr><td><i>Description:</i></td><td> exports a signed NodeReference. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>seed</b>(--seed | -s)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}|-</td></tr>
<tr><td><i>Default val:</i></td><td>-</td></tr>
<tr><td><i>Description:</i></td><td> seeds routing table with refs. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>config</b>(--config | -c)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.conf</td></tr>
<tr><td><i>Description:</i></td><td> generates or updates config file. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>paramFile</b>(--paramFile | -p)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> path to a config file in a non-default location. </td></tr>
<tr><td colspan=2><hr></td></tr>
</table>

<h4>Configuration options: </h4>
These can reside either in the configuration file or be given as command line arguments. <br>
<table width="600" border="0" cellspacing="0" cellpadding="1">
<tr><td> <i>Name:</i></td><td><b>ipAddress</b>(-- ipAddress)</td></tr>
<tr><td><i>Arguments:</i></td><td>xxx.xxx.xxx.xxx</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> The IP address of this node as seen by the public Internet. 
You only need to override this if it cannot be autodetected, for example if you have a NAT 
(a.k.a. IP Masquerading) firewall/router, in which case you will need to set it to the IP address 
or DNS name of the internet-side interface of the router, which needs to be static (www.dyndns.org 
and similar services can help here if you have a dynamic IP). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>listenPort</b>(- -listenPort)</td></tr>
<tr><td><i>Arguments:</i></td><td>{port no.}</td></tr>
<tr><td><i>Default val:</i></td><td>{random}</td></tr>
<tr><td><i>Description:</i></td><td> The port to listen for incoming FNP
(Freenet Node <b style="color:black;background-color:#ffff66">Protocol</b>) connections on. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>clientPort</b>(- -clientPort)</td></tr>
<tr><td><i>Arguments:</i></td><td>{port no.}</td></tr>
<tr><td><i>Default val:</i></td><td>8481</td></tr>
<tr><td><i>Description:</i></td><td> The port to listen for local FCP
(Freenet Client <b style="color:black;background-color:#ffff66">Protocol</b>) connections on. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>fcpHosts</b>(-- fcpHosts)</td></tr>
<tr><td><i>Arguments:</i></td><td>{host list}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> A comma-separated list of hosts that may connect to the 
FCP port (clientPort).  If left blank, only the localhost will be allowed. If you set this, make sure 
localhost is included in the list or  access won't be allowed from the local machine. May be given as 
IP addresses or host names. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>adminPassword</b>(--adminPassword)</td></tr>
<tr><td><i>Arguments:</i></td><td>{string}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> If this is set then users that can provide the password can 
can have administrative access. It is recommended that you do not use this without also using adminPeer 
below in which case both are required. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>adminPeer</b>(-- adminPeer)</td></tr>
<tr><td><i>Arguments:</i></td><td>{Identity FieldSet}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> If this is set, then users that are authenticated owners of the 
given PK identity can have administrative access. If adminPassword is also set both are required. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>transient</b>(-- transient)</td></tr>
<tr><td><i>Arguments:</i></td><td>yes|no</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Transient nodes do not give out references to themselves, and 
should therefore not receive any requests.  Set this to yes if you cannot receive incoming connections, 
or cannot keep the computer continuously online. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>doAnnounce</b>(- -doAnnounce)</td></tr>
<tr><td><i>Arguments:</i></td><td>yes|no</td></tr>
<tr><td><i>Default val:</i></td><td>true</td></tr>
<tr><td><i>Description:</i></td><td> If this is true, the node will automatically announce to all nodes 
in the {seedFile} file, as specified by {announcementDelay}, etc. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>seedFile</b>(-- seedFile)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}</td></tr>
<tr><td><i>Default val:</i></td><td>seednodes.ref</td></tr>
<tr><td><i>Description:</i></td> <td> A file containing one or more node references which will be 
incorporated into the node's routing table on startup.  A reference is only added if there is no 
previously existing reference to that node. When this node announces, it will announce to the nodes 
listed in this file. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>diagnosticsPath</b>(--diagnosticsPath)</td></tr>
<tr><td><i>Arguments:</i></td><td>{dir}</td></tr>
<tr><td><i>Default val:</i></td><td>stats</td></tr>
<tr><td><i>Description:</i></td><td> The directory in which to save diagnostics data.  Defaults to 
{storePath}/stats if left blank. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>storeType</b>(-- storeType)</td></tr>
<tr><td><i>Arguments:</i></td><td>{string}</td></tr>
<tr><td><i>Default val:</i></td><td>freenet</td></tr>
<tr><td><i>Description:</i></td><td> Datastore implementation. Put "native" (without the quotes) if you 
want the new native filesystem datastore, which stores the files in a directory. Put "convert" to convert 
from an old monolithic store to a native store. Note that convert uses lots of disk space while doing the 
conversion (approximately twice the datastore size), and the resulting store may be (temporarily) 
slightly larger than the old one due to block size mismatch (this will be fixed as soon as the node 
tries to add a file to the store). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>nodeFile</b>(-- nodeFile)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> The path to the file containing the node's private key, DSA group, 
cipher key, etc.  Defaults to node_{port} in the current directory. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>storeFile</b>(-- storeFile)</td></tr>
<tr><td><i>Arguments:</i></td><td>{file}{,..}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> The path to the single directory containing the data store.  The 
total maximum size of the files in the directory is given by {storeSize}. It will create new files in 
this dir, and DELETE OLD ONES. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>storeSize</b>(-- storeSize)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes}</td></tr>
<tr><td><i>Default val:</i></td><td>268435456</td></tr>
<tr><td><i>Description:</i></td><td> The byte size of each data store file.  If there is more than one 
file, the total size of the store is the product of the number of files and {storeSize}. The maximum 
sized file that will be cached is 1/200th of this value, so we recommend the default 256MB, to cache the 
largest common file size on freenet, 1MB plus some headers </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>storeBlockSize</b>(--storeBlockSize)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes}</td></tr>
<tr><td><i>Default val:</i></td><td>4096</td></tr>
<tr><td><i>Description:</i></td><td> Size of blocks in the underlying filesystem for purposes of 
calculating space usage when storeType=native. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>storeCipherName</b>(--storeCipherName)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ string}</td></tr>
<tr><td><i>Default val:</i></td><td>Twofish</td></tr>
<tr><td><i>Description:</i></td><td> The name of a symmetric cipher algorithm to encrypt the datastore 
contents with.  Supported algorithms are "Twofish", "Rijndael", and "null", "none", or "void" (for no 
encryption). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>storeCipherWidth </b>(--storeCipherWidth)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ integer}</td></tr>
<tr><td><i>Default val:</i></td><td>128</td></tr>
<tr><td><i>Description:</i></td><td> The width in bits of the cipher key to use for the datastore. The 
allowed values for this will depend on the cipher algorithm. Twofish allows 64, 128, 192, or 256, while 
Rijndael allows 128, 192, or 256. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>routingDir</b>(- -routingDir)</td></tr>
<tr><td><i>Arguments:</i></td><td>{directory}</td> </tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> The directory in which to store the routing table files. Defaults to 
parent dir of storeDir. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>useDSIndex</b>(- -useDSIndex)</td></tr>
<tr><td><i>Arguments:</i></td><td>true|false</td></tr>
<tr><td><i>Default val:</i></td><td>true</td></tr>
<tr><td><i>Description:</i></td><td> Use a datastore index file. Shorter startup time, but we have to run 
checkpoints, which lock the datastore, causing a hiccup </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>bandwidthLimit</b>(--bandwidthLimit)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes/ sec}</td></tr>
<tr><td><i>Default val:</i></td><td>100000</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number of bytes per second to transmit, totaled between 
incoming and outgoing connections.  Ignored if either inputBandwidthLimit or outputBandwidthLimit is 
nonzero. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> inputBandwidthLimit</b>(--inputBandwidthLimit)</td></tr>
<tr><td><i> Arguments:</i></td><td>{bytes/sec}</td></tr>
<tr><td><i>Default val:</i></td><td>0</td></tr>
<tr><td><i>Description:</i></td><td> If nonzero, specifies an independent limit for incoming data only. 
(overrides bandwidthLimit if nonzero) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> outputBandwidthLimit</b>(--outputBandwidthLimit)</td></tr>
<tr><td><i> Arguments:</i></td><td>{bytes/sec}</td></tr>
<tr><td><i>Default val:</i></td><td>0</td></tr>
<tr><td><i>Description:</i></td><td> If nonzero, specifies an independent limit for outgoing data only. 
(overrides bandwidthLimit if nonzero) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> averageBandwidthLimit</b>(--averageBandwidthLimit)</td></tr>
<tr><td><i> Arguments:</i></td><td>{bytes/sec}</td></tr>
<tr><td><i>Default val:</i></td><td>0</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number of bytes per second to transmit (averaged over a 
week), totaled between incoming and outgoing connections.  Error to define it if any of 
(average)inputBandwidthLimit or (average)outputBandwidthLimit is nonzero. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> averageInputBandwidthLimit</b>(--averageInputBandwidthLimit)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes/sec}</td></tr>
<tr><td><i>Default val:</i></td><td>0</td></tr>
<tr><td><i>Description:</i></td><td> If nonzero, specifies an independent limit for incoming data only 
(averaged over a week). (overrides averageBandwidthLimit if nonzero) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> averageOutputBandwidthLimit</b>(--averageOutputBandwidthLimit)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes/sec}</td></tr>
<tr><td><i> Default val:</i></td><td>0</td></tr>
<tr><td><i>Description:</i></td><td> If nonzero, specifies an independent limit for outgoing data only 
(averaged over a week). (overrides bandwidthLimit if nonzero) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> maxNodeConnections</b>(--maxNodeConnections)</td></tr>
<tr><td><i> Arguments:</i></td><td>{int}</td></tr>
<tr><td><i>Default val:</i></td><td>60</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number of incoming and outgoing connections to allow 
at the same time. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> maxConnectionsPerMinute</b>(--maxConnectionsPerMinute)</td></tr>
<tr><td> <i>Arguments:</i></td><td>{int}</td></tr>
<tr><td><i>Default val:</i></td><td>60</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number of outgoing connections established in a one 
minute period. Deprecated and ignored. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> maxConnectionsMinute</b>(--maxConnectionsMinute)</td></tr>
<tr><td><i> Arguments:</i></td><td>{milliseconds}</td></tr>
<tr><td><i>Default val:</i></td><td>60000</td></tr>
<tr><td><i>Description:</i></td><td> The length of the period over which there must be at most 
maxConnectionsPerMinute connections. Deprecated and ignored. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> maxRequestsPerInterval</b>(--maxRequestsPerInterval)</td></tr>
<tr><td><i>Arguments:</i></td><td>{int}</td></tr>
<tr><td><i>Default val:</i></td><td>300</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number of outgoing connections established per 
maxRequestsInterval. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> maxRequestsInterval</b>(--maxRequestsInterval)</td></tr>
<tr><td><i> Arguments:</i></td><td>{milliseconds}</td></tr>
<tr><td><i>Default val:</i></td><td>60000</td></tr>
<tr><td><i>Description:</i></td><td> The length of the period over which there must be at most 
maxRequestsPerInterval connections. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>logLevel</b>(-- logLevel)</td></tr>
<tr><td><i>Arguments:</i></td><td>{word}</td></tr>
<tr><td><i>Default val:</i></td><td>normal</td></tr>
<tr><td><i>Description:</i></td><td> The error reporting threshold, one of: Error:   Errors only Normal: 
Report significant events Minor:   Report minor events Debug:   Report events only of relevance when 
debugging </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>logFile</b>(-- logFile)</td></tr>
<tr><td><i>Arguments:</i></td><td>{filename}|NO</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.log</td></tr>
<tr><td><i>Description:</i></td><td> The name of the log file (`NO' to log to standard out) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>logFormat</b>(-- logFormat)</td></tr>
<tr><td><i>Arguments:</i></td><td>{tmpl.}</td></tr>
<tr><td><i>Default val:</i></td><td>d (c, t): m</td></tr>
<tr><td><i>Description:</i></td><td> A template string for log messages.  All non-alphabet characters 
are reproduced verbatim. Alphabet characters are substituted as follows: d = date (timestamp), 
c = class name of the source object, h = hashcode of the object, t = thread name, p = priority, 
m = the actual log message </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>logDate</b>(-- logDate)</td></tr>
<tr><td><i>Arguments:</i></td><td>{tmpl.}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> A template for formatting the timestamp in log messages.  Defaults 
to the locale specific fully specified date format.  The template string is an ordinary Java date/time 
template - see: http://java.sun.com/products/jdk/1.4/docs/api/java.text.SimpleDateFormat .html </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>rtMaxRefs</b>(-- rtMaxRefs)</td></tr>
<tr><td><i>Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>50</td></tr>
<tr><td><i>Description:</i></td><td> The number of references allowed per node in the routing table. 
This should not be set too high. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>rtMaxNodes</b>(- -rtMaxNodes)</td></tr>
<tr><td><i>Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>50</td></tr>
<tr><td><i>Description:</i></td><td> The number of unique nodes that can be contained in the routing 
table. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>maxRoutingSteps</b>(--maxRoutingSteps)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ integer}</td></tr>
<tr><td><i>Default val:</i></td><td>40</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number or node refs that will be used to route a 
request before RNFing. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>messageStoreSize </b>(--messageStoreSize)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ integer}</td></tr>
<tr><td><i>Default val:</i></td><td>1000</td></tr>
<tr><td><i>Description:</i></td><td> The number of outstanding message replies the node will wait for 
before it starts to abandon them. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>failureTableSize </b>(--failureTableSize)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ integer}</td></tr>
<tr><td><i>Default val:</i></td><td>1000</td></tr>
<tr><td><i>Description:</i></td><td> The number keys that failed to be retrieved the node should key 
track of. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>failureTableTime </b>(--failureTableTime)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ milliseconds}</td></tr>
<tr><td><i>Default val:</i></td><td>1800000</td></tr>
<tr><td><i>Description:</i></td><td> The amount of time to keep keys cache keys that could not be found 
and automatically fail requests for them. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>minCP</b>(-- minCP)</td></tr>
<tr><td><i>Arguments:</i></td><td>{number between 0 and 1}</td></tr>
<tr><td><i>Default val:</i></td><td>0.01</td></tr>
<tr><td><i>Description:</i></td><td> Lower bound on Contact Probability of nodes in the 
Routing Table. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> failuresLookupARK</b>(--failuresLookupARK)</td></tr>
<tr><td><i>Arguments :</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>20</td></tr>
<tr><td><i>Description:</i></td><td> Number of consecutive failures required to trigger an 
ARK lookup. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>minARKDelay</b>( --minARKDelay)</td></tr>
<tr><td><i>Arguments:</i></td><td>{milliseconds} </td></tr>
<tr><td><i>Default val:</i></td><td>900000</td></tr>
<tr><td><i>Description:</i></td><td> Minimum time that a node in the routing table must have been 
uncontactable for before we can trigger an ARK lookup. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> routeConnectTimeout</b>(--routeConnectTimeout)</td></tr>
<tr><td><i> Arguments:</i></td><td>{millis}</td></tr>
<tr><td><i>Default val:</i></td><td>10000</td></tr>
<tr><td><i>Description:</i></td><td> The time to wait for connections to be established and authenticated 
before passing by a node while routing out. Connections that are by passed are still finished and cached 
for the time set by {connectionTimeout} (in milliseconds). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>maxHopsToLive</b>(--maxHopsToLive)</td></tr>
<tr><td><i>Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>25</td></tr>
<tr><td><i>Description:</i></td><td> When forwarding a request, the node will reduce the HTL to this 
value if it is found to be in excess. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>announcementHTL</b>(--announcementHTL)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ integer}</td></tr>
<tr><td><i>Default val:</i></td><td>15</td></tr>
<tr><td><i>Description:</i></td><td> The number of nodes that each announcement message should besent 
to. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> announcementAttempts</b>(--announcementAttempts)</td></tr>
<tr><td><i> Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>3</td></tr>
<tr><td><i>Description:</i></td><td> The number of attempts to make at announcing this node per 
initial peer. Zero means the node will not announce itself. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> announcementPollInterval</b>(--announcementPollInterval)</td></tr>
<tr><td><i>Arguments:</i></td><td>{milliseconds}</td></tr>
<tr><td><i>Default val:</i></td><td>900000</td></tr>
<tr><td><i>Description:</i></td><td> The time between polling for 1 hours no incoming requests to force 
reannouncement. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> announcementThreads</b>(--announcementThreads)</td></tr>
<tr><td><i> Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>3</td></tr>
<tr><td><i>Description:</i></td><td> If we run out of seed nodes, we can use other nodes from therouting 
table to announce to. However, since the trust levelof these nodes is unknown, this is not recommended 
for thetruly paranoid. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> announcementUseRT</b>(--announcementUseRT)</td></tr>
<tr><td><i>Arguments :</i></td><td>yes|no</td></tr>
<tr><td><i>Default val:</i></td><td>true</td></tr>
<tr><td><i>Description:</i></td><td> announce to nodes from routing table?. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>initialRequests</b>(--initialRequests)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ integer}</td></tr>
<tr><td><i>Default val:</i></td><td>10</td></tr>
<tr><td><i>Description:</i></td><td> The number of keys to request from the returned close values after 
an Announcement (this is per announcement made). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> initialRequestHTL</b>(--initialRequestHTL)</td></tr>
<tr><td><i>Arguments :</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>15</td></tr>
<tr><td><i>Description:</i></td><td> The hops that initial requests should make. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>doLoadBalance</b>(--doLoadBalance)</td></tr>
<tr><td><i>Arguments:</i></td><td>yes|no</td></tr>
<tr><td><i>Default val:</i></td><td>true</td></tr>
<tr><td><i>Description:</i></td><td> Whether to emply load balancing algorithms against the 
network. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>localIsOK</b>(-- localIsOK)</td></tr>
<tr><td><i>Arguments:</i></td><td>yes|no</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> set yes to allow permanent nodes with non-internet-resolvable 
addresses. Do not use this except in a local testing network. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>dontLimitClients </b>(--dontLimitClients)</td></tr>
<tr><td><i>Arguments:</i></td><td>yes| no</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> set yes to not bandwidth throttle connections to 
LocalInterfaces<a href='tiki-editpage.php?page=LocalInterfaces' class='wiki'>?</a> i.e. FCP and 
mainport. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> mainportURIOverride</b>(--mainportURIOverride)</td></tr>
<tr><td><i> Arguments:</i></td><td>URI</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> URI to mainport servlet, e.g. for SSL tunneling. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> distributionURIOverride</b>(--distributionURIOverride)</td></tr>
<tr><td> <i>Arguments:</i></td><td>URI</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> URI to distribution servlet, e.g. for SSL tunneling. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>aggressiveGC</b> (--aggressiveGC)</td></tr>
<tr><td><i>Arguments:</i></td><td>{seconds}</td></tr>
<tr><td><i>Default val:</i></td><td>0</td></tr>
<tr><td><i>Description:</i></td><td> How often to do aggressive garbage collection. May impact 
performance but should reduce working set.  Set to 0 to disable. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> configUpdateInterval</b>(--configUpdateInterval)</td></tr>
<tr><td><i> Arguments:</i></td><td>{minutes}</td></tr>
<tr><td><i>Default val:</i></td><td>5</td></tr>
<tr><td><i>Description:</i></td><td> How often to check for config file changes.  Set to 0 to 
disable. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>services</b>(-- services)</td></tr>
<tr><td><i>Arguments:</i></td><td>service_0,service_1 ,...</td></tr>
<tr><td><i>Default val:</i></td><td>mainport, distribution</td></tr>
<tr><td><i>Description:</i></td><td> A comma delimited list of services that are run when the node 
starts. If you don't know what this means, just accept the defaults. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>distribution. class</b>(--distribution.class)</td></tr>
<tr><td><i>Arguments:</i></td><td>{class name}</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.node.http.DistributionServlet</td></tr>
<tr><td> <i>Description:</i></td><td> The Java class of the distribution servlet. You shouldn't need to 
touch this. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>distribution. port</b>(--distribution.port)</td></tr>
<tr><td><i>Arguments:</i></td><td>{port number}</td></tr>
<tr><td><i>Default val:</i></td><td>8891</td></tr>
<tr><td><i>Description:</i></td><td> The port that the distribution servlet listens for HTTP 
requests on. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>distribution. params.unpacked</b>(--distribution.params.unpacked)</td></tr>
<tr><td><i> Arguments:</i></td><td>{directory}</td></tr>
<tr><td><i>Default val:</i></td><td>.</td></tr>
<tr><td><i>Description:</i></td><td> A directory containing (some of) the files needed for the 
Distribution Servlet - for example, a CVS tree, or where the UNIX tarball was unpacked. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>distribution. allowedHosts</b>(--distribution.allowedHosts)</td></tr>
<tr><td><i> Arguments:</i></td><td>{list of IP addresses}</td></tr>
<tr><td><i>Default val:</i></td><td>*</td></tr>
<tr><td><i>Description:</i></td><td> These IP addresses will be allowed to access the distribution 
pages generated by the DistributionServlet. Default * means everyone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>distribution. 
params.distribDir</b>(--distribution.params.distribDir)</td></tr>
<tr><td><i>Arguments:</i></td><td>{directory}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> Directory used by the node to store redistributibles for the 
Distribution Servlet - there is rarely any need to override this. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>authTimeout</b>( --authTimeout)</td></tr>
<tr><td><i>Arguments:</i></td><td>{millis}</td></tr>
<tr><td><i>Default val:</i></td><td>30000</td></tr>
<tr><td><i>Description:</i></td><td> How long to wait for authentication before giving up (in 
milliseconds) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> connectionTimeout</b>(--connectionTimeout)</td></tr>
<tr><td><i>Arguments :</i></td><td>{millis}</td></tr>
<tr><td><i>Default val:</i></td><td>600000</td></tr>
<tr><td><i>Description:</i></td><td> How long to listen on an inactive connection before closing 
(if reply address is known) </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>hopTimeExpected</b>(--hopTimeExpected)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ millis}</td></tr>
<tr><td><i>Default val:</i></td><td>4000</td></tr>
<tr><td><i>Description:</i></td><td> The expected time it takes a Freenet node to pass a message. Used 
to calculate timeout values for requests. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>hopTimeDeviation </b>(--hopTimeDeviation)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ millis}</td></tr>
<tr><td><i>Default val:</i></td><td>7000</td></tr>
<tr><td><i>Description:</i></td><td> The expected standard deviation in hopTimeExpected. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>maximumThreads</b>(--maximumThreads)</td></tr>
<tr><td><i>Arguments:</i></td><td>{integer }</td></tr>
<tr><td><i>Default val:</i></td><td>120</td></tr>
<tr><td><i>Description:</i></td><td> Should we use thread management?  If this number is defined and 
non-zero, this specifies the max number of threads in the pool.  If this is overrun connections will 
be rejected and events won't execute on time. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> doRequestTriageByDelay</b>(--doRequestTriageByDelay)</td></tr>
<tr><td><i>Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>true</td></tr>
<tr><td><i>Description:</i></td><td> If true, above 3000ms ticker delay requests will be rejected, above 
1000ms, requests except those in the datastore will be rejected, and above 500ms, requests except those 
in the most successful keyspace segment will be rejected. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>overloadLow</b>( --overloadLow)</td></tr>
<tr><td><i>Arguments:</i></td><td>{float between 0 and 1}</td></tr>
<tr><td><i>Default val:</i></td><td>0.85</td></tr>
<tr><td><i>Description:</i></td><td> The node will start to selectively reject requests above this load 
level. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>overloadHigh</b> (--overloadHigh)</td></tr>
<tr><td><i>Arguments:</i></td><td>{float between 0 and 1}</td></tr>
<tr><td><i>Default val:</i></td><td>0.9</td></tr>
<tr><td><i>Description:</i></td><td> The node will reject all QueryRequests<a 
href='tiki-editpage.php?page=QueryRequests' class='wiki'>?</a> above this load level. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> requestDelayCutoff</b>(--requestDelayCutoff)</td></tr>
<tr><td><i> Arguments:</i></td><td>{milliseconds}</td></tr>
<tr><td><i>Default val:</i></td><td>1000</td></tr>
<tr><td><i>Description:</i></td><td> The node will reject nearly all incoming queries when routingTime 
is over this value. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> successfulDelayCutoff</b>(--successfulDelayCutoff)</td></tr>
<tr><td><i> Arguments:</i></td><td>{milliseconds}</td></tr>
<tr><td><i>Default val:</i></td><td>3000</td></tr>
<tr><td><i>Description:</i></td><td> The node will reject ALL incoming queries above this 
routingTime. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>blockSize</b>(-- blockSize)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes}</td></tr>
<tr><td><i>Default val:</i></td><td>4096</td></tr>
<tr><td><i>Description:</i></td><td> What size should the blocks have when moving data? </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>streamBufferSize </b>(--streamBufferSize)</td></tr>
<tr><td><i>Arguments:</i></td><td>{ bytes}</td></tr>
<tr><td><i>Default val:</i></td><td>16384</td></tr>
<tr><td><i>Description:</i></td><td> The default size of stream buffers. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>maximumPadding</b>(--maximumPadding)</td></tr>
<tr><td><i>Arguments:</i></td><td>{bytes}</td></tr>
<tr><td><i>Default val:</i></td><td>65536</td></tr>
<tr><td><i>Description:</i></td><td> The maximum number of bytes of padding to allow between messages and in Void messages. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> logInboundContacts</b>(--logInboundContacts)</td></tr>
<tr><td><i> Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to enable inbound contact monitoring. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> logOutboundContacts</b>(--logOutboundContacts)</td></tr>
<tr><td><i> Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to enable outbound contact monitoring. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> logInboundRequests</b>(--logInboundRequests)</td></tr>
<tr><td><i> Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to enable per host inbound request monitoring. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> logOutboundRequests</b>(--logOutboundRequests)</td></tr>
<tr><td><i> Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to enable per host outbound request monitoring. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>logOutputBytes</b>(--logOutputBytes)</td></tr>
<tr><td><i>Arguments:</i></td><td>true/ false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to.count TCP bytes sent for diagnostics. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>watchme</b>(-- watchme)</td></tr>
<tr><td><i>Arguments:</i></td><td>true/false</td></tr> <tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Debugging only, setting this to true will remove your anonymity!. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> logInboundInsertRequestDist</b>(--logInboundInsertRequestDist)</td></tr> <tr><td><i>Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to enable logging of inbound InsertRequest<a href='tiki-editpage.php?page=InsertRequest' class='wiki'>?</a> key distribution. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>watchmeRetries</b>(--watchmeRetries)</td></tr>
<tr><td><i>Arguments:</i></td><td>{integer }</td></tr>
<tr><td><i>Default val:</i></td><td>3</td></tr>
<tr><td><i>Description:</i></td><td> Number of times watchMe will attempt to initialize. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> logSuccessfulInsertRequestDist</b>(--logSuccessfulInsertRequestDist)</td></tr>
<tr><td><i>Arguments:</i></td><td>true/false</td></tr>
<tr><td><i> Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Set true to enable logging of successful inbound InsertRequests' key distribution. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> defaultResetProbability</b>(--defaultResetProbability)</td></tr>
<tr><td> <i>Arguments:</i></td><td>{probability}</td></tr>
<tr><td><i>Default val:</i></td><td>0.05</td></tr>
<tr><td><i>Desc
ription:</i></td><td> The node will have this probability, on average (it varies according to load unless you set doLoadBalance=no), of resetting the datasource. Increase this to get more load, reduce it to get less load. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>FECTempDir</b>(- -FECTempDir)</td></tr>
<tr><td><i>Arguments:</i></td><td>{directory}</td> </tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> Dir. used for FEC temp files. You don't need to set this. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> FECInstanceCacheSize</b>(--FECInstanceCacheSize)</td></tr>
<tr><td><i> Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>1</td></tr>
<tr><td><i>Description:</i></td><td> Number of FEC instances to cache. Set to 1 unless you expect more than one simultaneous FEC operation. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> FECMaxConcurrentCodecs</b>(--FECMaxConcurrentCodecs)</td></tr>
<tr><td><i>Arguments:</i></td><td>{integer}</td></tr>
<tr><td><i>Default val:</i></td><td>1</td></tr>
<tr><td><i>Description:</i></td><td> Number of concurrent FEC encodes/decodes allowed. Each codec can use up to 24Mb of memory. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>FEC.Encoders.0. class</b>(--FEC.Encoders.0.class)</td></tr>
<tr><td><i>Arg
uments:</i></td><td>{class name}</td></tr>
<tr><td>
<i>Default val:</i></td><td>OnionFECEncoder</td></tr>
<tr><td><i>Description:</i></td><td> Default FEC encoder implementation. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>FEC.Decoders.0. class</b>(--FEC.Decoders.0.class)</td></tr>
<tr><td><i>Arguments:</i></td><td>{class name}</td></tr>
<tr><td><i>Default val:</i></td><td>OnionFECDecoder</td></tr>
<tr><td><i>Description:</i></td><td> Default FEC decoder implementation. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>tempDir</b>(-- tempDir)</td></tr>
<tr><td><i>Arguments:</i></td><td>{directory}</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> The directory used for temporary files. Used currently by fproxy and the FCP FEC mechanism, if their individual temp dirs are not set. If this is left unset, it will create a tempdir in the datastore (if the datastore is native). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>publicNode</b>(- -publicNode)</td></tr>
<tr><td><i>Arguments:</i></td><td>true/false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> Disables anonymity threatening servlets and infolets on a multi-user machine. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b> filterPassThroughMimeTypes</b>(--filterPassThroughMimeTypes)</td></tr>
<tr><td><i>Arguments:</i></td><td>comma delimited list of MIME types</td></tr>
<tr><td><i>Default val:</i></td><td>text/plain,image/jpeg,image/gif,image/png</td></tr>
<tr> <td><i>Description:</i></td><td> safe MIME types that will be passed through to the browser without query or filtering. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.class</b>(--mainport.class)</td></tr>
<tr><td><i>Arguments:</i></td><td> interface class</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.interfaces.servlet.MultipleHttpServletContainer </td></tr>
<tr><td><i>Description:</i></td><td> Name of the interface class to run the mainport service. You do not need to change this. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.port</b>(--mainport.port)</td></tr>
<tr><td><i>Arguments:</i></td><td>port number</td></tr>
<tr><td><i>Default val:</i></td><td>8888</td></tr>
<tr><td><i>Description:</i></td><td> Port to run the main Freenet HTTP interface on... this is the port that is accessed by your web browser when you are browsing freenet via fproxy, or looking at the various status monitors. This is normally only accessible from localhost, and is different from the public FNP port that other freenet nodes talk to, the FCP port that client programs talk to, and the distribution port that you can run a freenet distribution website on. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport. allowedHosts</b>(--mainport.allowedHosts)</td></tr>
<tr><td><i>Arguments: </i></td><td>Comma delimited list of IP addresses, netmasks or hostnames</td></tr>
<tr><td><i>Default val:</i></td><td>127.0.0.0/8</td></tr>
<tr><td><i>Description:</i></td><td> List of IP addresses (for example "192.168.1.7"), DNS names ("erica" or "www.nsa.gov") or netmasks ("192.168.1.0/24") of hosts (computers) that should be allowed to access the main web interface of your freenet node. Defaults to localhost (127.0.0.0/8) only. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport. bindAddress</b>(--mainport.bindAddress)</td></tr>
<tr><td><i>Arguments:</i></td><td>IP address or "*"</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> IP address of one interface for the main freenet web interface to listen on, or "*" to listen on all interfaces. Will be automatically determined from mainport.allowedHosts if not given, leave it alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name</i></td><td><b>mainport.params. servlet.1.uri</b>(--mainport.params.servlet.1.uri)</td></tr>
<tr><td><i> Arguments:</i></td><td>path</td></tr>
<tr><td><i>Default val:</i></td><td>/</td></tr>
<tr><td><i>Description:</i></td><td> Path within mainport for fproxy. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.method</b>(--mainport.params.servlet.1.method)</td></tr>
<tr><td><i>Arguments:</i></td><td>HTTP method</td></tr>
<tr><td><i>Default val:</i></td><td>GET</td></tr>
<tr><td><i>Description:</i></td><td> HTTP method for fproxy. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.class</b>(--mainport.params.servlet.1.class)</td></tr>
<tr><td> <i>Arguments:</i></td><td>servlet class</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.client.http.FproxyServlet</td></tr>
<tr><td><i> Description:</i></td><td> servlet class to run fproxy. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.name</b>(--mainport.params.servlet.1.name)</td></tr>
<tr><td><i>Arguments:</i></td><td>string</td></tr>
<tr><td><i>Default val:</i></td><td>Freenet HTTP proxy (fproxy)</td></tr>
<tr><td><i>Description:</i></td><td> name of first servlet on mainport (normally fproxy - "Freenet HTTP proxy (fproxy)"). Leave this alone.). </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.params.requestHtl</b>(--mainport.params.servlet.1.params. requestHtl)</td></tr>
<tr><td><i>Arguments:</i></td><td>integer HTL value between 0 and maxHopsToLive</td></tr>
<tr><td><i>Default val:</i></td><td>15</td></tr>
<tr><td><i>Description:</i></td><td> hops to live (HTL) of requests made by fproxy </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.params.passThroughMimeTypes</b>(--mainport.params.servlet.1. params.passThroughMimeTypes)</td></tr>
<tr><td><i>Arguments:</i></td><td> comma delimited list of MIME types</td></tr>
<tr><td><i>Default val:</i></td><td></td></tr>
<tr><td><i>Description:</i></td><td> MIME types regarded as safe that are passed to the browser without filtering or warning in fproxy. The default is empty (""), which means to use the node global default filterPassThroughMimeTypes </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.params.filter</b>(--mainport.params.servlet.1.params.filter)</td></tr>
<tr><td><i>Arguments:</i></td><td>true|false</td></tr>
<tr><td><i>Default val:</i></td><td>true</td></tr>
<tr><td><i>Description:</i></td><td> Whether to run the anonymity filter to remove HTML and CSS tags that might cause your browser to damage your anonymity </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.params.filterParanoidStringCheck</b>(--mainport.params.servlet .1.params.filterParanoidStringCheck)</td></tr>
<tr><td><i>Arguments:</i></td><td>true|false</td></tr>
<tr><td><i>Default val:</i></td><td>false</td></tr>
<tr><td><i>Description:</i></td><td> whether to make the anonymity filter really paranoid; currently this causes strings in CSS to be removed if they contain colons (":") </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.1.params.maxForceKeys</b>(--mainport.params.servlet.1.params. maxForceKeys)</td></tr>
<tr><td><i>Arguments:</i></td><td>integer</td></tr><tr><td><i>Default val:</i></td><td>100</td></tr>
<tr><td><i>Description:</i></td><td> Number of key overrides Fproxy should track... these are the confirmation pages you get when you go to some file that fproxy doesn't know how to handle </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.2.uri</b>(--mainport.params.servlet.2.uri)</td></tr>
<tr><td><i> Arguments:</i></td><td>path</td></tr>
<tr><td><i>Default val:</i></td><td>/servlet/nodeinfo/</td></tr>
<tr><td><i>Description:</i> </td><td> Path within mainport for the Node Info Servlet - this contains infolets which present pages of information about the node as well as the default front page </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.2.method</b>(--mainport.params.servlet.2.method)</td></tr>
<tr><td><i>Arguments:</i></td><td>HTTP method</td></tr>
<tr><td><i>Default val:</i></td><td>GET</td></tr>
<tr><td><i>Description:</i></td><td> HTTP method for Node Info Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.2.class</b>(--mainport.params.servlet.2.class)</td></tr>
<tr><td> <i>Arguments:</i></td><td>servlet class</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.node.http.NodeInfoServlet</td></tr>
<tr><td><i> Description:</i></td><td> servlet class to run Node Info Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.2.name</b>(--mainport.params.servlet.2.name)</td></tr>
<tr><td><i>Arguments:</i></td><td>string</td></tr>
<tr><td><i>Default val:</i></td><td>Web Interface</td></tr>
<tr><td><i>Description:</i></td><td> name of (usually) Node Info Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.3.uri</b>(--mainport.params.servlet.3.uri)</td></tr>
<tr><td><i> Arguments:</i></td><td>path</td></tr>
<tr><td><i>Default val:</i></td><td>/servlet/images/</td></tr>
<tr><td><i>Description:</i></td><td> Path within mainport for the Images - this serves static images needed by fproxy and the Node Info Servlet </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.3.method</b>(--mainport.params.servlet.3.method)</td></tr>
<tr><td><i>Arguments:</i></td><td>HTTP method</td></tr>
<tr><td><i>Default val:</i></td><td>GET</td></tr>
<tr><td><i>Description:</i></td><td> HTTP method for Images Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.3.class</b>(--mainport.params.servlet.3.class)</td></tr>
<tr><td> <i>Arguments:</i></td><td>servlet class</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.client.http.ImageServlet</td></tr>
<tr><td><i> Description:</i></td><td> servlet class to run Images Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.3.name</b>(--mainport.params.servlet.3.name)</td></tr>
<tr><td><i>Arguments:</i></td><td>string</td></tr>
<tr><td><i>Default val:</i></td><td>Server Images</td></tr>
<tr><td><i>Description:</i></td><td> name of (usually) Images Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.4.uri</b>(--mainport.params.servlet.4.uri)</td></tr>
<tr><td><i> Arguments:</i></td><td>path</td></tr>
<tr><td><i>Default val:</i></td><td>/</td></tr>
<tr><td><i>Description:</i></td><td> Path within mainport for the Insert Servlet - used to insert files into freenet from the web interface </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.4.method</b>(--mainport.params.servlet.4.method)</td></tr>
<tr><td><i>Arguments:</i></td><td>HTTP method</td></tr>
<tr><td><i>Default val:</i></td><td>POST</td></tr>
<tr><td><i>Description:</i></td><td> HTTP method for Insert Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.4.class</b>(--mainport.params.servlet.4.class)</td></tr>
<tr><td> <i>Arguments:</i></td><td>servlet class</td></tr>
<tr><td><i>Default val:</i></td><td>freenet.client.http.InsertServlet</td></tr>
<tr><td><i> Description:</i></td><td> servlet class to run Insert Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.4.name</b>(--mainport.params.servlet.4.name)</td></tr>
<tr><td><i>Arguments:</i></td><td>string</td></tr>
<tr><td><i>Default val:</i></td><td>Insert Proxy</td></tr>
<tr><td><i>Description:</i></td><td> name of (usually) Insert Servlet. Leave this alone. </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.4.params.insertHtl</b>(--mainport.params.servlet.4.params. insertHtl)</td></tr>
<tr><td><i>Arguments:</i></td><td>integer between 0 and maxHopsToLive</td></tr>
<tr><td><i>Default val:</i></td><td>15</td></tr>
<tr><td><i>Description:</i></td><td> Hops-to-Live<a href='tiki-editpage.php?page=Hops-to-Live' class='wiki'>?</a> value (HTL) of inserts through the web interface </td></tr>
<tr><td colspan=2><hr></td></tr>
<tr><td><i>Name:</i></td><td><b>mainport.params. servlet.4.params.splitFileThreads</b>(--mainport.params.servlet.4.params .splitFileThreads)</td></tr>
<tr><td><i>Arguments:</i></td><td>integer</td></tr>
<tr><td><i>Default val:</i></td><td>10</td></tr>
<tr><td><i>Description:</i></td><td> Number of threads to allocate to insert a splitfile through the web interface </td></tr>
</table>
<br/>


