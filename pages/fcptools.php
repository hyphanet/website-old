 <h1>Freenet Client Protocol Tools (FCPTools)</h1>

 <p>First check the documentation for <a href="http://freenetproject.org/index.php?page=FCPlib">FCPLib</a>. Everything 
 that applies to FCPLib also applies to FCPTools.</p>
 
 <h2>What are the FCPTools?</h2>

 <p>The FCPTools are command-line driven programs for inserting and retrieving 
 files with Freenet. Included separately is <a href="http://freenetproject.org/index.php?page=FCPlib">FCPLib</a>, the 
 Freenet Client Protocol Library. The FCPTools are linked against FCPLib and 
 serve as nice examples for using the library in Freenet client programs. 
 Everything is released under the GNU General Public License.</p>
 <p>The command-line tools are:</p>
 <ul>
   <li><b>fcpput</b>: Inserts single files and splitfiles into Freenet. There is 
   an option for generating a public and private keypair as well.</li>
   <li><b>fcpget</b>: Retrieves single files (no splitfiles) from Freenet (you 
   can of course retrieve the key in rawmode and manually follow the Blockmap 
   data).</li>

   <li><b>fcpx</b>: A general informational utility.</li>
 </ul>
 <p>There is currently unmaintained code for fcpputsite which needs to be 
 rewritten to use FCPLib exclusively. I believe that a shell script written 
 around fcpput could work nicely as a short term substitute.</p>
 <h3>Status of Development</h3>
 <p>The FCPTools (and FCPLib) are works in progress, but beginning to take solid form in 
 preparation for a 0.9 release, which will not include a command-line fcpputsite.</p>
 <p>The version in CVS is 0.4.9 and works well for what it claims to support. 
 Admittedly there are missing features here and there, and these will get most 
 of my attention in the near future. For example:</p>

 <ul>
   <li>Metadata support is spotty, so not yet 
        supported. Further, where metadata is actually stored needs to change 
        (metadata stored in CHKs). 
 
   <li>FEC inserts supported, but not FEC retrieves. 
 
   <li>Multithreading not supported, nor even desirable for the library itself. 
   Any scheduler should be built on <i>top</i> of FCPLib.</li>
</ul>
 <p>Some things have been improved:</p>
 <ul>
   <li>Thoroughly checked and fixed most, if not all memory leaks. This should 
   allow FCPLib to loaded into RAM for extended periods of time without 
   problems.</li>

   <li>Insert and retrieve logic is not redundant; it is shared. For example, 
   the same code that inserts data into Freenet for splitfiles is used later to 
   insert metadata, meaning each operation works equally well within the chain 
   of commands.</li>
   <li>Metadata is not supported, however it is processed when required (for 
   example, retrieving a key containing a Redirect target).</li>
   <li>All the documented functions for inserting and retrieving can be used 
   more than once on a handle without having to close the handle and re-open it.</li>
   <li>The functions for inserting and retrieving single files is identical for 
   splitfiles.</li>
 </ul>
 <h3>Contact Information</h3>

 <p>All Freenet and FCPLib related email send to <SCRIPT language="javascript">eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%22%6d%61%69%6c%74%6f%3a%4a%61%79%20%4f%6c%69%76%65%72%69%20%3c%69%6c%6e%65%72%6f%40%67%6d%78%2e%6e%65%74%3e%22%3e%4a%61%79%20%4f%6c%69%76%65%72%69%3c%2f%61%3e%27%29%3b'))</SCRIPT>. I am currently subscribed to 
 Freenet-dev, Freenet-tech, and Freenet-support. On the Freenode IRC network I can be found in #freenet under the registered nick 
 &quot;Jay&quot;.</p>
 
 <h2>Source Code</h2>
 <p>There are two options for obtaining the source:</p>
 <h3>CVS</h3>
 <p>To be on the 
 bleeding edge, access the source from CVS as follows (all on one line):</p>

 <p><code>cvs -z3 _<br>
&nbsp;&nbsp;&nbsp; -d:pserver:anonymous@cvs.sourceforge.net:/cvsroot/freenet _<br>
&nbsp;&nbsp;&nbsp;&nbsp; co Contrib/fcptools</code></p>
 <p>This will download the fcptools source from CVS HEAD into the directory 
 Contrib/fcptools. From there the normal GNU/Make commands will build the source 
 (check INSTALL.* and README.* under the fcptools directory for all the 
 details).</p>
 <p><a href="http://cvs.sourceforge.net/viewcvs.py/freenet/Contrib/fcptools/">
 Follow this link</a> to browse the  code at SourceForge using ViewCVS.</p>

 <h3>Tarballs</h3>
 <p>Occasionally when I feel a quasi-stable point is reached in the project's 
 cycle, I post a tarball to the <a href="http://freenetproject.org/snapshots/">
 freenet snapshots directory</a>. The filename itself will be 
 date-stamped as follows:</p>
 <ul>
   <li>fcptools-yyyymmdd.tgz (source code)</li>
   <li>fcptools-yyyymmdd-bin.tgz (Win32 pre-compiled binaries)</li>

 </ul>
 <p>You can use these links as well:</p>
 <ul>
   <li><a href="http://freenetproject.org/snapshots/fcptools-unstable.tgz">
   fcptools-unstable.tgz</a> (latest source code)</li>
   <li><a href="http://freenetproject.org/snapshots/fcptools-unstable-bin.tgz">
   fcptools-unstable-bin.tgz</a> (latest Win32 pre-compiled binaries)</li>

 </ul>
 <p>I recommend this method over the others, since CVS at times may not even 
 compile. The tarballs are fully tested before uploaded (SourceForge 
 compile-farm among other tests) and should function as advertised. The binaries 
 will also contain (in addition to fcpget, fcpput, and fcpx) the FCPLib static 
 library and C header file.</p>
 <h2>Using FCPTools</h2>
 <p>Some common parameters are used by both fcpget and fcpput, but for the sake 
 of completeness everything is listed for all 3 programs.</p>
 <h3>FCP-Put Usage:</h3>

<pre>fcpput [-n hostname] [-p port] [-l hops to live] [-s]  [-D]
       [-v verbosity] [-g] [-V] [-h] freenet_uri [FILE]...

Options:

  -n, --address host     Freenet node address
  -p, --port num         Freenet node port
  -l, --htl num          Hops to live

  -a, --retry num        Number of retries after a timeout
  -s, --stdin            Read key data from stdin
  -D, --delete-local     Delete key from local datastore on insert

  -v, --verbosity num    Verbosity of log messages (default 2)
                         0=silent, 1=critical, 2=normal,
                         3=verbose, 4=debug
  -f, --logfile file     Full pathname for the output log file
                         (default stdout)

  -g, --genkeys          Generate a keypair then exit

  -V, --version          Output version information and exit
  -h, --help             Display this help and exit

  uri                    URI to give newly inserted key; variations:
                           CHK@
                           KSK@&lt;routing key&gt;

                           SSK@&lt;private key&gt;[/&lt;docname&gt;]

  file                   Read key data from local file
                         (cannot be used with --stdin)

Examples:

To insert a Content Hash Key (CHK) with file "gpl.txt":
  fcpput CHK@ /home/hapi/gpl.txt

To insert a Keyword Signed Key (KSK) with file "gpl.txt" against a
freenet node at address raven.cp.net with hops to live 10:
  fcpput --htl 10 --address raven.cp.net KSK@gpl.txt gpl.txt

To insert a Subspace Signed Key (SSK) with file "gpl.txt":
  fcpput SSK@LNlEaG7L24af-OH~CKmyPOvJ~EM/ gpl.txt

To insert an SSK within named document "licenses":
  fcpput SSK@LNlEaG7L24af-OH~CKmyPOvJ~EM/licenses gpl.txt</pre>

<h3>FCP-GET Usage:</h3>

<pre>fcpget [-n hostname] [-p port] [-l hops to live] [-s] [-S]
       [-v verbosity] [-V] [-h] freenet_uri [FILE]

Options:

  -n, --address host     Freenet node address
  -p, --port num         Freenet node port
  -l, --htl num          Hops to live

  -a, --retry num        Number of retries after a timeout
  -s, --stdout           Write key data to stdout
  -S, --skip-local       Skip key in local datastore on retrieve
  -v, --verbosity num    Verbosity of log messages (default 2)
                         0=silent, 1=critical, 2=normal,
                         3=verbose, 4=debug
  -f, --logfile file     Full pathname for the output log file
                         (default stdout)

  -V, --version          Output version information and exit
  -h, --help             Display this help and exit

  uri                    URI to retrieve; variations:
                           CHK@
                           KSK@&lt;routing key&gt;
                           SSK@&lt;private key&gt;[/&lt;docname&gt;]

  file                   Write key data to local file
                         (cannot be used with --stdout)</pre>

 <h3>FCP-X Usage:</h3>

<pre>fcpx [-n hostname] [-p port] [-v verbosity] [-f filename] COMMAND

COMMAND is one of the following FCP commands:

  hello
  info
  
Options:

  -n, --address host     Freenet node address
  -p, --port num         Freenet node port

  -v, --verbosity num    Verbosity of log messages (default 2)
                         0=silent, 1=critical, 2=normal,
                         3=verbose, 4=debug
  -f, --logfile file     Full pathname for the output log file
                         (default stdout)</pre>

<p><h1>*</h1></p>
