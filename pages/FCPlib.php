 <h1>Freenet Client Protocol Library</h1>

 <h2>What is the Freenet Client Protocol Library?</h2>
 <p>FCPLib (Freenet Client Protocol Library) aims to be a platform independent, 
 but natively compiled set of functions for storing and retrieving information 
 to and from Freenet. There are routines for storing documents to Freenet from 
 the local disk, and other routines for moving data in memory to and from 
 Freenet (for more information see the documentation
 for <a href="http://freenetproject.org/index.php?page=fcptools">FCPTools</a>, which is the package containing FCPLib).</p>
  
  <p>It is written in ANSI C, checked by gcc when compiling the library on a Unix 
 based system (the flags -ansi and -pedantic). I'm not sure how important this 
 issue is today, but to enable the greatest portability I have kept to these 
 standards (the flags attempt to enforce strict ANSI compliance and the 
 disabling of GNU extensions).</p>
 <h3>Supported Platforms</h3>
 <p>FCPLib is now routinely compiled on the following platforms:</p>
 <ul>
   <li>Microsoft Windows (Win32 only). 
 
   </li><li>Debian GNU/Linux. 
 
   </li><li>BSD. 
 
   </li><li>Sun Solaris. 
 
   </li><li>Mac OS X.</li>
 </ul>
 <h3>Contact Information</h3>
 <p>All Freenet and FCPLib related email send to <script language="javascript">
 eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%22%6d%61%69%6c%74%6f%3a%4a%61%79%20%4f%6c%69%76%65%72%69%20%3c%69%6c%6e%65%72%6f%40%67%6d%78%2e%6e%65%74%3e%22%3e%4a%61%79%20%4f%6c%69%76%65%72%69%3c%2f%61%3e%27%29%3b'))</script>. I am currently
 subscribed to Freenet-dev, Freenet-tech, and Freenet-support. On the Freenode IRC network I can be found in #freenet
 under the registered nick "Jay".</p>
 
 <h2>FCPLib API Overview</h2>
 <h3>Necessary Files</h3>
 <p>The necessary files depend on the platform:</p>
 <ul>
   <li>Windows: <code>ezFCPlib.lib, ezFCPlib.h</code></li>
   <li>UNIX: <code>ezFCPlib.a, ezFCPlib.h</code></li>
 </ul>
 <p>On both platforms the FCPLib compiles into a static library. You must 
 include this static module in your compiler's linking phase and put ezFCPlib.h 
 in your project's include path.</p>
 <h3>Library Startup and Terminate Functions</h3>
 <ul>
   <li><code>fcpStartup(FILE *Logfile, int Verbosity)</code>
   </li><li><code>fcpTerminate()</code></li>
 </ul>
 <p><code>fcpStartup()</code> allows a <code>FILE</code> pointer (which may be stdout or a locally opened 
 file) where debugging messages may be sent. This must be the first function 
 call to the FCPLib.</p>
 <p><code>fcpTerminate()</code> should be called before exiting.</p>
 <h3>Handle Create &amp; Destroy Functions.</h3>
 <ul>
   <li><code>fcpCreateHFCP(char *Host, int Port, int Htl, int Optmask)</code>
   </li><li><code>fcpInheritHFCP(hFCP *Handle)</code>
   </li><li><code>fcpDestroyHFCP(hFCP *Handle)</code></li>
 </ul>
 <p>These  functions are to be called immediately after <code>fcpStartup()</code>, before 
 any calls to the following functions: <code>fcpOpenKey()</code>, <code>fcpPutKeyFromFile()</code>,
 <code>fcpGetKeyToFile()</code>.</p>
 <p><code>fcpInheritHFCP()</code> duplicates an FCP Handle. Call this function 
 to prepare an FCP Handle with the same options as another one.</p>
 <p><code>fcpDestroyHFCP()</code> performs memory and file cleanup, and should 
 be called before calling <code>free()</code> on the Handle.</p>
 <h3>File Based Functions</h3>
 <p>There are 2 functions for moving data between files and Freenet:</p>
 <ul>
   <li><code>fcpPutKeyFromFile(hFCP *Handle, char *Key, char *KeyFile, char 
   *MetaFile)</code>
   </li><li><code>fcpGetKeyToFile(hFCP *Handle, char *Key, char *KeyFile, char 
   *MetaFile)</code></li>
</ul>
<p><code>fcpPutKeyFromFile() </code>supports files larger than 1M and inserts 
them as splitfiles.</p>
<p><code>fcpGetGeyToFile()</code> only supports single file chunks, which usually vary in 
Freenet from 200-1,000 kilobytes.</p>
 <h3>Memory Based Functions</h3>
 <h4>Opening a Key</h4>
 <p><code>fcpOpenKey(hFCP *Handle, char *Key, int Mode)</code></p>
 <p>This function opens a key in order to read from or write to, depending on 
 the Mode parameter. Opening a key in Read Mode immediately prompts FCPLib to 
 fetch the key and metadata, so that the next call to <code>fcpReadKey()</code> 
 has data to return.</p>
 <h4>Reading &amp; Writing</h4>
 <p><code>fcpWriteKey(hFCP *Handle, char *Buffer, int Length)<br>
 fcpWriteMetadta(hFCP *Handle, char *Buffer, int Length)</code></p>
 <p>Once a key is opened for writing, this function writes a block of data to a 
 temporary file that FCPLib later inserts into Freenet.</p>
 <p><code>fcpReadKey(hFCP *Handle, char *Buffer, int Length)<br>
 fcpReadMetadata(hFCP *Handle, char *Buffer, int Length)</code></p>
 <p>Once a key is opened for reading, this function reads from the temporary 
 file that <code>fcpOpenKey()</code> retrieved the key into.</p>
 <h4>Closing a Key</h4>
 <p><code>fcpCloseKey(hFCP *Handle)</code></p>
 <p>This function closes a key. When closing a key that has been opened in Write 
 Mode, FCPLib inserts into Freenet the key and metadata stored in the temporary 
 files. </p>
 <h2>FCPLib in Detail</h2>
 <h3>Startup &amp; Terminate Functions</h3>
 <h4>fcpStartup</h4>
 <p><code>int fcpStartup(FILE *Logfile, int Verbosity)</code></p>
<p><b>Parameters: </b>Logfile is a pointer to an opened <code>FILE</code> 
structure, or <code>NULL</code> to send logging information to <code>stdout</code>.</p>
<p><b>Returns:</b> Zero on success, -1 on error.</p>
<p><b>Remarks</b></p>
<p>This must be the first function called out of all the FCPLib functions. On 
Windows it initializes Winsock, and then for all platforms initializes the log.</p>
<h4>fcpTerminate</h4>
 <p><code>void fcpTerminate()</code></p>
<p><b>Remarks</b></p>
<p>This must be the last function to be called to FCPLib, especially before 
exiting a program. It closes the log, and on Windows calls the Winsock <code>
WSACleanup()</code> function.</p>
 <h3>Create and Destroy Functions</h3>
 <h4>fcpCreateHFCP</h4>
 <p><code>hFCP *fcpCreateHFCP(char *Host, int Port, int Htl, int Optmask)</code></p>
<p><b>Parameters:</b> Host is a hostname or IP address of a Freenet node, 
Port is the node's listen port, Htl the hops to live for the FCP handle, and 
Optmask a series of possible flags.</p>
<p><b>Optmask Values:</b></p>
 <ul>
   <li><code>FCP_MODE_RAW</code>: 
        Do not follow redirects on retrieve. 
 
   </li><li><code>FCP_MODE_DELETE_LOCAL</code>: Delete the key from 
        the local datastore on insert. 
 
   </li><li><code>FCP_MODE_SKIP_LOCAL</code>: Skip the local datastore on retrieve.</li>
 </ul>
<p><b>Returns:</b> A pointer to a malloc'ed <code>hFCP</code> structure.</p>
<p><b>Remarks</b></p>
<p>This function creates a new FCP Handle that must be free'd after use. Before 
freeing however, call <code>fcpDestroyHFCP()</code>.</p>
 <h4>fcpInheritHFCP</h4>
 <p><code>hFCP *fcpInheritHFCP(hFCP *Handle)</code></p>
<p><b>Parameters:</b> Handle is an already created hFCP structure.</p>
<p><b>Returns: </b>A pointer to a malloc'ed <code>hFCP</code> structure.</p>
<p><b>Remarks</b></p>
<p>This functions basically creates a new FCP Handle and fills it with values 
from the Handle parameter. Before freeing however, call <code>fcpDestroyHFCP()</code>.</p>
 <h4>fcpDestroyHFCP</h4>
 <p><code>void fcpDestroyHFCP(hFCP *Handle)</code></p>
<p><b>Parameters:</b> Handle is an already created hFCP structure.</p>
<p><b>Remarks</b></p>
<p>This function disconnects the socket (if necessary), and destroys everything 
that's been malloc'ed and not yet free'd within the <code>hFCP</code> structure. 
It also deletes any temporary files still being held on disk.</p>
 <h3>File Based Functions</h3>
 <h4>fcpPutKeyFromFile</h4>
 <p><code>int fcpPutKeyFromFile(hFCP *Handle, char *Key, char 
 *KeyFile, char *MetaFile)</code></p>
 <p><b>Parameters:</b> Handle is an already created hFCP structure, Key a Freenet URI, 
 KeyFile the local filename to insert into Freenet, and MetaFile is the 
 local filename to insert as metadata.</p>
 <p><b>Returns:</b> Zero on success, -1 on error.</p>
 <p><b>Remarks</b></p>
 <p>Handle must already be created from a prior call to any of the fcpCreate 
 functions. If the file is larger than <code>EZFCP_DEFAULT_SPLITSIZE</code>, the 
 file is inserted into Freenet as an FEC encoded splitfile.</p>
 <h4>fcpGetKeyToFile</h4>
 <p><code>int fcpGetKeyToFile(hFCP *Handle, char *Key, char *KeyFile, char 
 *MetaFile)</code></p>
<p><b>Parameters:</b> Handle is an already created hFCP structure, Key a 
Freenet URI, KeyFile the local filename to write the Freenet document, and 
MetaFile is the local filename to write the document's metadata.</p>
<p><b>Returns:</b> Zero on success, -1 on error.</p>
<p><b>Remarks</b></p>
<p>Handle must already be created from a prior call to any of the fcpCreate 
functions. The retrieving of splitfiles is currently not supported, which means 
this function assumes every URI parameter it receives is not FEC Encoded (in 
practical terms this means only the mapfile is retrieved).</p>
 <h3>Memory Based Functions</h3>
 <h4>fcpOpenKey</h4>
 <p><code>int fcpOpenKey(hFCP *Handle, char *Key, int Mode)</code></p>
<p><b>Parameters:</b> Handle is an already created hFCP structure, Key a 
Freenet URI, and Mode indicates either read or write.</p>
<p><b>MODE VALUES:</b></p>
 <ul>
   <li><code>FCP_MODE_O_READ.</code>
   </li><li><code>FCP_MODE_O_WRITE.</code></li>
 </ul>
<p><b>Returns: Zero on success, -1 on error.</b></p>
<p><b>Remarks</b></p>
<p>When a key is opened with Mode=FCP_MODE_O_READ, 
      the key specified in Key is immediately retrieved and stored internally 
      by FCPLib. Subsequent calls to <code>fcpReadKey()</code> return data from the retrieved 
      temporary file.</p>
      <p>When a key is opened with Mode=FCP_MODE_O_WRITE, calls to 
      <code>fcpWriteKey()</code> write the key data to an internal temporary file. The key is 
      written after a call to <code>fcpCloseKey()</code>.</p>
 <h4>fcpReadKey</h4>
 <p><code>int fcpReadKey(hFCP *Handle, char *Buffer, int Length)<br>
 int fcpReadMetadata(hFCP *Handle, char *Buffer, int Length)</code></p>
<p><b>Parameters:</b> Handle 
      is an already created hFCP structure, Buffer points to an allocated 
      block of memory. The function will read at most Length bytes.</p>
<p><b>Returns:</b> Bytes read 
      into Buffer, -1 on error.</p>
<p><b>Remarks</b></p>
      <p>Function reads from the internal temporary file 
      (which contains the data from the call to <code>fcpOpenKey()</code>) and returns no 
      more than Length bytes.</p>
 <h4>fcpWriteKey</h4>
 <p><code>int fcpWriteKey(hFCP *Handle, char *Buffer, int Length)<br>
 int fcpWriteMetadata(hFCP *Handle, char *Buffer, int Length)</code></p>
<p><b>Parameters:</b> Handle 
      is an already created hFCP structure, Buffer points to an allocated 
      block of memory. The function will write at most Length bytes.</p>
<p><b>Returns:</b> Bytes read 
      into Buffer, -1 on error.</p>
<p><b>Remarks</b></p>
      <p>Function writes to the internal temporary file no more than Length 
      bytes. Nothing is inserted into Freenet until the call to 
      <code>fcpCloseKey()</code>.</p>
 <h4>fcpCloseKey</h4>
 <p><code>int fcpCloseKey(hFCP *Handle)</code></p>
<p><b>Parameters:</b> Handle is an already created hFCP structure.</p>
<p><b>Returns:</b> Zero on 
      success, -1 on error.</p>
<p><b>Remarks</b>  </p>
      <p>When a key is opened in Write mode, this function will attempt to store 
      the key into Freenet. The functions returns after the key is stored or if 
      an error is encountered.</p>
      <p>When a key is opened in Read mode, <code>fcpCloseKey()</code> simply cleans up 
      temporary files and returns to the caller.</p>
 <h3>Other</h3>
 <h4>fcpMakeSvkKeypair</h4>
 <p><code>int fcpMakeSvkKeypair(hFCP *Handle, char *PubKey, char *PrivKey, 
 char *Entropy)</code></p>
<p><b>Parameters:</b> Handle 
      is an already created <code>hFCP</code> structure, PubKey points to an allocated 
      block of memory to hold the public key, and PrivKey points to an 
      allocated block of memory to hold the private key. Entropy is not currently used.</p>
<p><b>Returns:</b> Zero on 
      success, -1 on error.</p>
<p><b>Remarks</b>  </p>
<p>PubKey and PrivKey must be allocated with 
      at least&nbsp;28 bytes (27 for the key, 1 for the NULL character). 
      Entropy should be set to <code>NULL</code> for now, until it is implemented.</p>
<p><code>/********************************************************************/</code></p>
 <h2>Examples</h2>
 <p>For the sake of completion, each of the 4 different methods for moving data 
 to and from Freenet is illustrated with the minimal C code required.</p>
 <h3>Storing Files To Freenet with fcpPutKeyFromFile</h3>
 
<pre><code>#include "ezFCPlib.h"

int main(int argc, char* argv[])
{
  hFCP *hfcp;

  /* set the log reporting to Verbose (user friendly output) */  
  if (fcpStartup(stdout, FCP_LOG_VERBOSE) != 0)
    return -1;
	
  /* Connect to localhost, port 8481, hops to live 3,
     and 0 for the optmask */
  hfcp = fcpCreateHFCP("127.0.0.1", 8481, 3, 0);

  /* insert the key. CHK@ means "calculate the CHK".
     NULL for no metadata */
  if (fcpPutKeyFromFile(hfcp,
                       "CHK@",
                       "/home/hapi/message.txt", NULL) != 0)
    return -1;

  /* call to delete temp files and free memory */
  fcpDestroyHFCP(hfcp);
  free(hfcp);

  /* The final shutdown for FCPLib */
  fcpTerminate();

  return 0;
}</code></pre>

<h3>Storing Files To Freenet with fcpWriteKey</h3>

<pre><code>#include "ezFCPlib.h"

int main(int argc, char* argv[])
{
  hFCP *hfcp;
  char  msg[65];
  
  /* set the log reporting to Verbose (user friendly output) */  
  if (fcpStartup(stdout, FCP_LOG_VERBOSE) != 0)
    return -1;
	
  /* Connect to localhost, port 8481, hops to live 3,
     and 0 for the optmask */
  hfcp = fcpCreateHFCP("127.0.0.1", 8481, 3, 0);

  /* open the key to prepare for writing */
  if (fcpOpenKey(hfcp, "KSK@message.txt", FCP_MODE_O_WRITE) != 0)
    return -1;

  strcpy(msg, "Hello World!);

  /* write the "message" */
  fcpWriteKey(hfcp, msg, strlen(msg));

  /* this call actually stores the key in Freenet.
     it will not return until the file has been stored
     (or an error occurs) */
  if (fcpCloseKey(hfcp) != 0)
    return -1;
    
  /* call to delete temp files and free memory */
  fcpDestroyHFCP(hfcp);
  free(hfcp);

  /* The final shutdown for FCPLib */
  fcpTerminate();

  return 0;
}</code></pre>

 <h3>Retrieving Files From Freenet with fcpGetKeyToFile</h3>

<pre><code>#include "ezFCPlib.h"

int main(int argc, char* argv[])
{
  hFCP *hfcp;
  
  /* set the log reporting to Verbose (user friendly output) */  
  if (fcpStartup(stdout, FCP_LOG_VERBOSE) != 0)
    return -1;
	
  /* Connect to localhost, port 8481, hops to live 3,
     and 0 for the optmask */
  hfcp = fcpCreateHFCP("127.0.0.1", 8481, 3, 0);

  /* get the key and store it in the file message.txt.
     NULL for no metadata */
  if (fcpGetKeyToFile(hfcp,
                     "KSK@message.txt",
                     "/home/hapi/message.txt", NULL) != 0)
    return -1;

  /* call to delete temp files and free memory */
  fcpDestroyHFCP(hfcp);
  free(hfcp);

  /* The final shutdown for FCPLib */
  fcpTerminate();

  return 0;
}</code></pre>

<h3>Retrieving Files From Freenet with fcpReadKey</h3>

<pre><code>#include "ezFCPlib.h"

int main(int argc, char* argv[])
{
  hFCP *hfcp;
  int   bytes;
  char  buf[513];
  
  /* set the log reporting to Verbose (user friendly output) */  
  if (fcpStartup(stdout, FCP_LOG_VERBOSE) != 0)
    return -1;
	
  /* Connect to localhost, port 8481, hops to live 3,
     and 0 for the optmask */
  hfcp = fcpCreateHFCP("127.0.0.1", 8481, 3, 0);

  /* this call actually retrieves the key from Freenet;
     it will not return until the key is retrieved
     (or an error occurs) */
  if (fcpOpenKey(hfcp,
                "SSK@M7yZgrl8gwtAe1xEcR5Xyv4tFsoPAgM/fiw/7//",
                 FCP_MODE_O_READ) != 0)
    return -1;
    
  /* ReadKey returns &gt;0 whenever there's data left */
  while ((bytes = fcpReadKey(hfcp, buf,  512)) &gt; 0) {
    buf[bytes] = 0;

    /* hope this is text only! */
    printf("buf: %s\n", buf);  
  }

  /* cleanup some tempfiles */		
  if (fcpCloseKey(hfcp) != 0)
    return -1;
    
  /* call to delete remaining temp files and free memory */
  fcpDestroyHFCP(hfcp);
  free(hfcp);

  /* The final shutdown for FCPLib */
  fcpTerminate();

  return 0;
}</code></pre>

<h1>*</h1>
