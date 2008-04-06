<h1>Document encryption</h1>
Insertion
<ol>
<li>Alice has a document, <i>PDoc</i>, with key <i>PKey</i> - she
wants to insert 
it into Freenet securely
<li>Alice uses a symmetric crypto algorithm to encrypt <i>PDoc</i>
with <i>PKey</i> to create <i>CDoc</i>
<li>Alice hashes <i>PKey</i> using SHA1 to get <i>Ckey</i>
<li>Alice inserts <i>(Ckey, CDoc)</i> into Freenet
</ol>
Retrieval
<ol>
<li>Bob has <i>PKey</i>, and wishes to use it to retrieve 
<i>PDoc</i> from Freenet
<li>Bob hashes <i>PKey</i> using SHA1 to get <i>Ckey</i>
<li>Bob requests <i>Ckey</i> from Freenet and gets <i>CDoc</i>
<li>Bob uses <i>PKey</i> to decrypt <i>Ckey</i>, to get 
<i>PDoc</i>
</ol>
Nodes only ever see (CKey, CDoc) which will be meaningless to them.*<br>
<font size="4">
* This is vulnerable to a dictionary attack on CKey but that would
require a complete list of Freenet keys.
</font>
