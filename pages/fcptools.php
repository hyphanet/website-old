<h2>The Freenet Client Protocol (FCP) Tools</h2>

<p class="body">The FCPTools are ANSI-C based Freenet client tools, and a seperate FCP specific library called ezFCPlib. Specifically, FCPTools include command line utilities to insert and retrieve files (fcpput, fcpputsplit, fcpget) within Freenet, as well as entire freesites (fcpputsite) via ezFCPlib.

<p class="body">This version of the distribution is not perfect.  fcpput simply does not work; not for me anyway.  fcpget works occassionally, while fcpputsite seems to be the best functiong tool within FCPTools.  It is this tool that I document mainly here.  Unfortunately, I haven't had much success with ezFCPlib as a shareable component.  Most of this is due to redundant code throughout the tools, especially in fcpputsite which re-implements much of the buggy ezFCPlib in order to function as well as it does.</p>

<p class="body">This version of FCPTools is currently in CVS under the tag FCP_0_4_7, while CVS HEAD is the new version that I will only announce the release of once I've put in the time that's needed to complete all the modules for a fully functional fcpputsite.  Even with transparent FEC encoding of large site files!  This will show the functioning of ezFCPlib within fcpputsite and how it can be used in other client programs.  Completing fcpget then will be an easier task.</p>

<h2>Contents of FCPTools:</h2>
<ul><li><b>ezFCPlib</b> - the engine that drives (most of) the tools. Draft API doc included under ./ezFCPlib/doc.</li>

<li><b>fcpget</b> - a key request utility. <b>very buggy!</b></li>

<li><b>fcpput</b> - a key insert utility. <b>not functional!</b></li>

<li><b>fcpputsite</b> - a freesite insertion utility.</li>

<li><b>fcpputsplit</b> - a splitfile insertion utility. <b>very buggy!</b></li></ul>

<hr/>

<h2>Download</h2>

<h3>Source</h3>

<p class="body">
Source tarballs are available from the <a href='http://freenetproject.org/snapshots/'>snapshots directory</a>:

<p class="body">
<a href='http://freenetproject.org/snapshots/fcptools-unstable.tgz'>fcptools-unstable</a>: Latest version in <a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/freenet/Contrib/fcptools/">CVS HEAD</a> (mainly of interest to developers).<br>
<a href='http://freenetproject.org/snapshots/fcptools-stable.tgz'>fcptools-stable</a>: The version covered in this document; tagged in CVS under <a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/freenet/Contrib/fcptools/?only_with_tag=fcp_0_4_7">FCP_0_4_7</a>.</p>

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

<h3>fcpputsite examples</h3>

<p class="body">
Here explain what the f*@! is going on!</p>

<hr/>

<h2>Contributing</h2>

The current maintainer of FCPTools is Jay Oliveri (<a class='wiki'  href='mailto:ilnero@gmx.net'>ilnero@gmx.net</a>). Send patches, backtraces and conspiracies to him. Be sure to read the <a href="http://www.freenetproject.org/index.php?page=fcp">Freenet Client Protocol documentation</a>.





















