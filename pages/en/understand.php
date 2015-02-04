      <h1>Documentation</h1>
      <div id="navigation">
	<p> Go to :
	  <a href="install.html">Install</a>
	  <a href="connect.html">Connect</a>
	  <a href="content.html">Content</a>
	  <a href="understand.html">Understand</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Understand Freenet</h2>
      <p>
	Freenet can be thought of as a large storage device. 
	When you store a file in it, you receive a key which 
	can be used to retrieve the file. When you supply 
	Freenet with a key, it returns the appropriate file 
	(if it is located). The storage space is distributed 
	among all connected nodes on Freenet.
      </p>
      
      <p>
	Freenet is a Peer-to-peer network, which is both
	decentralized and anonymized. The nodes that you
	connect to only knows its nearest neighbours and has
	no idea about how the network as a whole is structured.
      </p>

      <h3>Small world network</h3>
      
      <p>
	Freenet is built on the principle of small world 
	networks. By connecting to nodes of people you already
	know, and the people you know in turn connect to people
	they know, one should be able to reach all nodes in a
	Freenet network.
      </p>

      <h3>The datastore</h3>

      <p>
	All Freenet nodes contribute with a part of their
	harddrive space to store files. The files are stored
	encrypted in the <span style="font-weight:
				      bold;">store</span>-directory in the Freenet installation
	directory.
      </p>

      <p>
	Unlike other peer-to-peer networks, you 
	as a user have little or no control over what is 
	stored in your datastore. Instead, files are kept or
	deleted depending on how popular they are.
	This is to ensure that Freenet is censorship resistant. 
	The only possible way to remove something from Freenet 
	is to not search for it, and hope that everybody else 
	does the same.
      </p>
      
      <p>
	It is hard, but not impossible, to determine which
	files that are stored in your local Freenet Datastore. 
	This is to enable plausible deniability as to what
	kind of material that lies on your harddrive in the
	datastore.
      </p>

      <p>
	The initial diskspace allocated for the datastore is
	5% of available disk space if it is over 20GB, 10% if it is
	over 10GB, 512MB if under 10GB, and 256MB if under 5GB.
	You can change the store size at any time, the more the 
	better, both for your personal browsing and for Freenet as 
	a whole.
      </p>

      <h3>Freenet Routing</h3>

      <p>
	Initially, each node has no information about the 
	performance of the other nodes it knows about. This 
	means that routing of requests is essentially random. 
	But since different nodes have different randomness, 
	they will disagree about where to send a request, given 
	a key. So the data in a newly-started Freenet will be 
	distributed somewhat randomly.
      </p>

      <p>
	As more documents are inserted by the same node, they 
	will begin to cluster with data items whose keys (see below) 
	are similar, because the same routing rules are used for 
	all of them. More importantly, as data items and 
	requests from different nodes "cross paths", they 
	will begin to share clustering information as well.
      </p>

      <p>
	The result is that the network will self-organize 
	into a distributed, clustered structure where nodes 
	tend to hold data items that are close together in 
	key space. There will probably be multiple such 
	clusters throughout the network, any given document 
	being replicated numerous times, depending on how 
	much it is used.
      </p>

      <h3>Freenet keys</h3>

      <p>
	Each file that exists on Freenet has a key associated
	with it. Freenet 0.7 has various types of keys. Keys 
	are used for everything on freenet, and are a kind of 
	<a href="https://en.wikipedia.org/wiki/Uniform_Resource_Identifier">URI</a> 
	(e.g. freenet:=KSK@sample.txt). 
      </p>

      <p>
	Most keys are hashes: there is no notion of semantic 
	closeness when speaking of key closeness. Therefore 
	there will be no correlation between key closeness 
	and similar popularity of data as there might be if 
	keys did exhibit some semantic meaning, thus avoiding 
	bottlenecks caused by popular subjects.
      </p>

      <h3>Accessing data</h3>

      <p>
	To access a particular piece of data on Freenet,
	you can use FProxy. You need to know the key to
	the data, and enter it like this (or click a link
	containing the key):
      </p>
      
      <pre>
	http://localhost:8888/[Freenet Key]</pre>
      
      <p>
	There are four types of keys in Freenet:
      </p>
      <ul>
	<li><span style="font-weight: bold;">CHK</span> - Content Hash Keys</li>
	<li><span style="font-weight: bold;">SSK</span> - Signed Subspace Keys</li>
	<li><span style="font-weight: bold;">USK</span> - Updateable Subspace Keys</li>
	<li><span style="font-weight: bold;">KSK</span> - Keyword Signed Keys</li>
      </ul>
          
      <p>
	CHKs are the most fundamental. All files over 1kB are ultimately divided into 
	one or more 32kB CHKs. CHKs' filenames are determined only by their contents. 
	SSKs are the other basic type. These combine a public key with a human-readable 
	filename and therefore allow for freesites. KSKs are a variant of SSKs where 
	everything is determined by a simple human readable filename (e.g. =KSK@sample.txt). 
	These are spammable but convenient in some cases. And USKs are a form of 
	updatable keys especially useful for freesites and 
	<span style="font-weight: bold;">Address Resolution Keys</span>.
      </p>
      <p>
	An Address Resolution Key (ARK) is an Updateable Subspace Key (USK) inserted 
	by the node whenever its IP address changes. It contains the reference for 
	the node - its cryptographic details, and in particular its IP address(es). 
	ARKs are a way to help people connect to Freenet 
	if they have problems caused by firewalls, routers or changing IP addresses. 
	If someone cannot accept incoming traffic it can make it difficult to connect. 
      </p>
      <p>
	ARKs are an implementation detail and you don't need to know anything about 
	them to use Freenet.
      </p>

      <h3>Content Hash Keys</h3>

      <p>
	Content Hash Keys are for files with static content, like an .mp3 or a PDF-document.
	These keys are hashes of the content of the
	file. A hash is a reproducible method of turning a 
	specific piece of data into a relatively small number
	that serve as a sort of <span style="font-style:italic;">
	  fingerprint</span> for the data. If the file content 
	changes, even ever so little, the hash of the file 
	changes radically. This makes the data hard to tamper 
	with without anyone noticing. A CHK uniquely identifies 
	a file, it should not be possible for two files with 
	different content to have the same CHK. The CHK 
	consists of three parts:
      </p>
      <ol>
	<li>the hash for the file</li>
	<li>the decryption key that unlocks the file, and</li>
	<li>the cryptographic settings used</li>
      </ol>
      <p>
	A typical CHK key looks like this:
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">CHK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">file hash</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">decryption key</td>   
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">crypto settings</td>
	</tr>
      </table>
      <p>
	or for example:
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">CHK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">SVbD9~HM5nzf3AX4yFCBc-A4dhNUF5DPJZLL5NX5Brs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">bA7qLNJR7IXRKn6uS5PAySjIM6azPFvK~18kSi6bbNQ</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AAEA--8</td>
	</tr>
      </table>
      <p>
	The decryption key is stored encrypted within the file, so it is not 
	possible to decrypt the file without the CHK key.
      </p>
      <p>To access the file, the whole key must be pasted behind the FProxy
	address (cut to fit screen):</p>
      <pre>
	http://localhost:8888/CHK@SVbD9~[..]X5Brs,bA7qLN[..]Si6bbNQ,AAEA--8</pre>

      <h3>Signed Subspace Keys</h3>
      <p>
	Signed Subspace Keys are usually for sites that are going to change over time. 
	For example, a website that may need news to be updated or information to be 
	corrected, added or deleted. They work in such a way that someone else can't 
	put up a newer version of your site and pretend it was you who did it.
      </p>
      <p>
	It works by using public-key cryptography so you can sign your site. Only the 
	person with the secret key can add updated versions of your site to Freenet.
      </p>
      <p>
	Also the SSK consists of five parts:
      </p>
      <ul>
	<li><span style="font-weight: bold;">public key hash</span> - This part is all 
	  that is required to uniquely identify the file (but not decrypt it), so nodes 
	  need only store this bit. The actual public key is stored (unencrypted) with 
	  the (encrypted) data.</li>
	<li><span style="font-weight: bold;">document decryption key</span> - This 
	  is only known to clients and not to the nodes storing the data, so nodes cannot 
	  decrypt the data they store without the full address.</li>
	<li><span style="font-weight: bold;">crypto settings</span> - Cryptographic 
	  algorithm used, etc.</li>
	<li><span style="font-weight: bold;">user selected name</span> - a word or 
	  sentence chosen by the site author.</li>
	<li><span style="font-weight: bold;">version</span> - the current version of
	  the site.</li>
      </ul>
      
      <p>
	The version number is increased each time a new version of the site
	is created and inserted into Freenet. This approach is used since it is not
	currently possible to update already inserted data in Freenet. Updateable
	Subspace Keys makes this more transparent to the user, see below.
      </p>
      <p>
	A typical SSK key looks like this:
      </p>
      <table>
	<tr>
	  
	  <td style="background: #def0ff;">SSK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">public key hash</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">decryption key</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">crypto settings</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">user selected name</td>
	  <td style="background: #ddd;">-</td>
	  <td style="background: #def0ff;">version</td>
	</tr>
	  
      </table>
      
      <p>
	For example (cut for screen purposes):
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">SSK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">GB3wuHmt[..]o-eHK35w</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">c63EzO7u[..]3YDduXDs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AQABAAE</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">mysite</td>
	  <td style="background: #ddd;">-</td>
	  
	  <td style="background: #def0ff;">4</td>
	</tr>
      </table>
      
      <h3>How Signed Subspace Keys work</h3>

      <ul>
	<li>The author generates a cryptographic keypair: a 
	  <span style="font-weight: bold;">private key</span> 
	  for signing files and a <span style="font-weight: bold;">
	    public key</span> for verifying the signature.</li>
	
	<li>The author also generates a single <span style="font-weight: bold;">symmetric key</span> 
	  (one that is used for both encrypting and decrypting).</li>
	<li>When a file is inserted into Freenet, it is encrypted with the 
	  <span style="font-weight: bold;">symmetric key</span> and signed 
	  with the <span style="font-weight: bold;">private key</span>. The 
	  signature is stored with the file. Nodes don't store the 
	  <span style="font-weight: bold;">symmetric key</span>, only the 
	  <span style="font-weight: bold;">public key</span> part of the SSK, 
	  as an index to the data. This is so they can plausibly deny knowledge 
	  of the data on their node.</li>
	
      </ul>
      
      <p>
	The SSK is made up of a hash of the public key, and the symmetric key. 
	The hash of the public key acts as the index to the data for searching 
	purposes. Also, the actual public key is stored with the data. This is 
	so that Freenet nodes can verify the signature when the SSK file comes 
	into their node, and also so that clients can verify the signature when 
	retrieving the file. The symmetric key is so that clients can decrypt 
	the file.
      </p>
      <p>
	Signed Subspace Key sites have largely been superseded by Updatable Subspace 
	Key (USK) sites, which are based on SSKs but allow for links that try to always 
	retrieve the most up-to-date version of the site.
      </p>
      <h3>Updateable Subspace Keys</h3>
      <p>
	Updateable Subspace Keys are useful for linking to the latest version of a 
	Signed Subspace Key (SSK) site. Note that USKs are really just a user-friendly 
	wrapper around SSKs, which hide the process of searching for more recent 
	versions of a site. 
      </p>
      <p>
	A typical USK key looks like this:
      </p>
      <table>
	<tr>
	  
	  <td style="background: #def0ff;">USK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">public key hash</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">decryption key</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">crypto settings</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">user selected name</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">number</td>
	  <td style="background: #ddd;">/</td>	
	</tr>
	
      </table>
      <p>
	It is almost identical to the Signed Subspace Key, with the exception of the 
	version-number. There are two types of USK addresses:
      </p>
      <ul>
	<li>an USK with a positive number at the end, or</li>
	<li>an USK with a negative number at the end.</li>
      </ul>
      <p>
	The USK with a <span style="font-weight: bold;">positive</span> number at the 
	end works like this: the Freenet node on your computer keeps a list of 
	versions of USKs that it knows about, without necessarily storing the data as 
	well. This list is built up from previous visits, and also background requests 
	from previous visits to these kind of links. When you visit an USK like the 
	one below, it consults this list for versions of the mysite site 
	of number 5 or greater. If it finds any, it return the latest one. Then, in the 
	background, it searches for <span style="font-weight: bold;">newer</span> 
	
	versions that it doesn't yet know about to add to your USK registry for the 
	next time you visit the address.
      </p>
      <p>
	Example (cut for screen purposes):
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">USK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">GB3wuHmt[..]o-eHK35w</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">c63EzO7u[..]3YDduXDs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AQABAAE</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">mysite</td>
	  <td style="background: #ddd;">/</td>
	  
	  <td style="background: #def0ff;">5</td>
	  <td style="background: #ddd;">/</td>
	  
	</tr>
      </table>
      
      <p>
	When you visit a link with a <span style="font-weight: bold;">negative</span> 
	number at the end, Freenet searches for the version you requested 
	(e.g. <span style="font-weight: bold;">-7</span>) plus four more 
	(i.e. 7,8,9,10,11) at the node on your computer and on other 
	nodes. If it finds only version 7, it will return that. If it finds one of the 
	others, it searches for another batch of five versions: 12,13,14,15,16. It 
	repeats this until there are four consecutive versions it can't find. Then 
	it will return the latest version it has found so far.
      </p>
      
      <p>
	Example (cut for screen purposes):
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">USK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">GB3wuHmt[..]o-eHK35w</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">c63EzO7u[..]3YDduXDs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AQABAAE</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">mysite</td>
	  <td style="background: #ddd;">/</td>
	  
	  <td style="background: #def0ff;">-7</td>
	  <td style="background: #ddd;">/</td>
	  
	</tr>
      </table>
      
      <p>
	The real treat with USKs comes when data is to be inserted into Freenet.
	But more on that elsewhere.
      </p>
      
      <h3>Keyword Signed Keys</h3>
      
      <p>
	Keyword-Signed Keys (KSKs) allow you to save named pages in Freenet. They 
	are not secure against spamming or name hijacking. Several people could 
	each insert a different file to Freenet, all with the same address.
	However, there is a collision detection, which tries to prevent 
	overwriting of a once-inserted page. A KSK address looks like this:
      </p>
      
      <table>
	<tr>
	  <td style="background: #def0ff;">KSK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">myfile.txt</td>
	</tr>
      </table>

      <p>
	The drawback to KSKs is that anyone can insert a file with the same name
	as yours and divert traffic from your file to their own. The advantage
	is human readable links that can be easily remembered.
      </p>
      
      <p>
	The KSK description should not contain slashes, just as with other keys 
	(slashes are used to denote Manifests or Containers).
      </p>
      <p>
	A KSK address can contain a redirection to a CHK address, or it can 
	contain the file itself.
      </p>
      <h3>Containers</h3>
      <p>
	A container, in general Freenet terms, is a file that contains 
	several other files. In freenet 0.7, a freesite, or other collection 
	of files, may be bundled together in a ZIP file, which is limited in 
	size to 2MB. Containers have the advantage that when you load one page 
	you load all the files on the freesite, so either it loads in its 
	entirety or it doesn't load at all, and greatly reduce the number 
	of keys required to insert a given freesite. Containers are currently 
	created transparently when inserting a freesite using e.g. jSite.
      </p>
      <h3>Manifests</h3>
      <p>
	A manifest contains metadata over the list of blocks a CHK is divided into and 
	some information about the content-type(MIME), the filenames
	and other useful information. The main information is whether the 
	CHK-key is a splitfile or not, and whether the manifest is chained 
	or not. You don't need to know much about manifests in order to
	use Freenet, since it is a part that is handled internally.
      </p>
