<h2>The Freenet Client Protocol (FCP) Tools</h2>

<p class="body">The FCPTools are ANSI-C based Freenet client tools, and a separate 
  FCP specific library called ezFCPlib. Specifically, FCPTools include command 
  line utilities to insert and retrieve files (fcpput, fcpputsplit, fcpget) within 
  Freenet, as well as entire freesites (fcpputsite) via ezFCPlib. 
<p class="body">This version of the distribution is not perfect. fcpput simply 
  does not work; not for me anyway. fcpget works occasionally, while fcpputsite 
  seems to be the best functioning tool within FCPTools. It is this tool that 
  I document mainly here. Unfortunately, I haven't had much success with ezFCPlib 
  as a shareable component. Most of this is due to redundant code throughout the 
  tools, especially in fcpputsite which re-implements much of the buggy ezFCPlib 
  in order to function as well as it does.</p>

<p class="body">This version of FCPTools is currently in CVS under the tag FCP_0_4_7, 
  while CVS HEAD is the new version that I will only announce the release of once 
  I've put in the time that's needed to complete all the modules for a fully functional 
  fcpputsite. Even with transparent FEC encoding of large site files! This will 
  show the functioning of ezFCPlib within fcpputsite and how it can be used in 
  other client programs. Completing fcpget then will be an easier task.</p>

<h2>Contents of FCPTools:</h2>
<ul>
  <li><b>ezFCPlib</b> - The engine that drives (most of) the tools. Draft API 
    doc included under ./ezFCPlib/doc.</li>

  <li><b>fcpget</b> - A key request utility. <b>very buggy!</b></li>  <li><b>fcpput</b> - A key insert utility. <b>not functional!</b></li>

  <li><b>fcpputsite</b> - A freesite insertion utility.</li>

  <li><b>fcpputsplit</b> - A splitfile insertion utility. <b>Very buggy!</b></li>
</ul>

<hr/>

<h2>Download</h2>

<h3>Source</h3>

<p class="body">
Source tarballs are available from the <a href='http://freenetproject.org/snapshots/'>snapshots directory</a>:

<p class="body"> <a href='http://freenetproject.org/snapshots/fcptools-unstable.tgz'>fcptools-unstable</a>: 
  Latest version in <a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/freenet/Contrib/fcptools/">CVS 
  HEAD</a> (mainly of interest to developers).<br>
  <a href='http://freenetproject.org/snapshots/fcptools-stable.tgz'>fcptools-stable</a>: 
  The version covered in this document; tagged in CVS under <a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/freenet/Contrib/fcptools/?only_with_tag=fcp_0_4_7">FCP_0_4_7</a>.</p>

<p class="body">
Uncompress the source as follows:</p>

<p class="body">
<code>jcl@nero:~$ tar xfz FILENAME.tgz</code></p>

<p class="body">
This will unpack the source into a new directory. Change into this directory, and follow the instructions in the INSTALL.* and README files.</p>

<h3>Binaries</h3>

<p class="body">
<a href='http://freenetproject.org/snapshots/fcptools-bin.zip'>Download pre-compiled Win32 binaries</a> based on the stable (tag FCP_0_4_7) source tree only. If you are running Windows and want to try the unstable code, follow the instructions in INSTALL.msvc to compile the source yourself.</p>

<h2>Command Line Usage</h2>

<h3>Checking the installed version of FCPTools</h3>

<p class="body">
Make sure you are running the expected version (0.4.7) with the following:</p>

<pre>
jcl@nero:~$ fcpputsite -V
FCPtools Version 0.4.7
</pre>

<h3>fcpputsite</h3>

<p class="body">
The output from &quot;fcpputsite --help&quot; produces the following:</p>

<pre>
jcl@nero:~$ fcpputsite --help
FCPtools; Freenet Client Protocol Tools
Copyright (c) 2001 by David McNab

Usage: fcpputsite [OPTIONS] name dir pubkey prvkey

Options:

  -n, --address host        Freenet node address (default "localhost")
  -p, --port num            Freenet node port (default 8481)
  -l, --htl num             Hops to live (default 3)
  -r, --raw                 Raw mode - don't follow redirects

  -a, --attempts num        Attempts to insert each file (default 3)
  -s, --size num            Size of splitfile chunks (default 262144)
  -t, --split-threads num   Number of splitfile threads (default 8)
  -i, --insert-threads num  Max number of insert threads (default 5)

  -d, --no-dbr              Do not insert a dbr redirection
  -g, --gen-keypair         Do not insert - just create an SVK keypair instead
  -f, --days num            Insert a map file num days in the future (default is today)
  -D, --default file        Name of site's default file (default "index.html")
                            (the default file must exist in the specified directory)
  -v, --verbosity num       Verbosity of log messages (default 2)
                            0=silent, 1=critical, 2=normal, 3=verbose, 4=debug
  -R, --record-file name    Records progress of a large site in 'name' for resuming later

  -V, --version             Output version information and exit
  -h, --help                Display this help and exit

Required arguments:

  name      Name of site (SSK subspace identifier)
  dir       The directory containing the site
  pubkey    The SSK public key
  prvkey    The SSK private key
</pre>

<h3>fcpputsite usage</h3>

<p class="body"> The required arguments to fcpputsite are listed at the bottom 
  of the help screen:</p>

<ul>
  <li><b>name</b> - The name of the site's subspace SSK identifier. Each SSK can 
    have multiple subspaces, analogous to subdirectories within a website.</li>
  <li><b>dir</b> - The root directory of the website to insert into Freenet.</li>
  <li><b>pubkey</b> - The SSK's public key part.</li>
  <li><b>prvkey</b>- The corresponding private key.</li>
</ul>

<h3>Generating a Keypair</h3>

<p class="body">fcpputsite will generate a public/private keypair for you as follows:</p>

<pre>
jcl@nero:~$ fcpputsite -g
Here's your keypair:
Public:  bYFnTBsYpbrLDytTH6-aRBy3-hw
Private: AKcWau3odBnDlXvJj---gtSOWvG9
</pre>

<h3>Basic insertion of a Freesite</h3>

<p class="body">If our site that we wish to insert is in a directory <code>/home/nero/fcp</code>, and we wish to insert the site under the subspace identifier <code>client-protocol</code> with our generated SSK, we could do the following:</p>

<pre>
jcl@nero:~$ fcpputsite client-protocol /home/nero/fcp bYFnTBsYpbrLDytTH6-aRBy3-hw AKcWau3odBnDlXvJj---gtSOWvG9

fcpPutKeyFromFile: SUCCESS: ./images/icon.png
fcpPutKeyFromFile: SUCCESS: ./header.html
fcpPutKeyFromFile: SUCCESS: ./footer.html
fcpPutKeyFromFile: SUCCESS: ./index.html
Successfully inserted ./index.html with 0 retries
METADATA IS 1587 BYTES LONG
fcpPutKeyFromMem: SUCCESS
fcpPutKeyFromMem: SUCCESS
============================================
Successfully inserted freenet:SSK@bYFnTBsYpbrLDytTH6-aRBy3-hwPAgM/client-protocol//
</pre>

<p class="body">This is the most basic usage of fcpputsite. If you're lucky, fcpputsite will generate a bunch of messages (fcpPutKeyFromFile: prefix) to show how well the site's insert is progressing. When completed, fcpputsite returns the new site's Freenet URI:</p>

<pre>
freenet:SSK@<b>bYFnTBsYpbrLDytTH6-aRBy3-hw</b>PAgM/client-protocol//
</pre>

<p class="body">Notice how the returned URI is actually the public key returned earlier by <code>fcpputsite -g</code>.</p>
<hr/>

<h2>Contributing</h2>

The current maintainer of FCPTools is Jay Oliveri (<a href='mailto:ilnero@gmx.net'>ilnero@gmx.net</a>). Send patches, backtraces and conspiracies to him. Be sure to read the <a href="http://www.freenetproject.org/index.php?page=fcp">Freenet Client Protocol documentation</a>.




