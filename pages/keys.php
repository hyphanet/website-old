<h1> Freenet Keys

</h1>
<br/>Freenet keys come in different varieties called key types. Typically this type is included at the beginning of a key, delimited by an at- sign (@). The types are:
<br/>
<br/><b>CHK</b>: The Content (Cryptographic?) Hash Key is the workhorse on which other key types build. Every document has a corresponding hash value that serves as it's key. Two equal documents have equal hashes, so if different <b style="color:black;background-color:#ffff66">people</b> insert the same document, this yields the same CHK. At the same time the hash function is built so that two different documents are very very unlikely to have the same hash (and therefore CHK). For all practical purposes, there is a one-to-one correspondence of CHKs to documents.
<br/><div class='simplebox' align='center'>
<br/>Example: CHK@wQYjaBkpulyIBq4sbvyDL2NZ7ToPAwI,qW4hMEc6NWsx-T-etpfPAg
<br/></div>
<br/>
<br/>All the other key types usually redirect to a CHK. So fundamentally, all real content is behind a CHK.
<br/>
<br/><b>KSK</b>: These are fully free-form, so can be used to tag nice, descriptive names to content. By loose convention they are seen as a hierarchic system, with levels seperated by slashes. When you request a KSK, the Cryptographic Hash of the keyword is computed. The CHK corresponding to this hash is retrieved, and the data pointed to by that CHK is another CHK to which you're being redirected.
<br/><div class='simplebox' align='center'>

<br/>Example: KSK@plays/Shakespeare/Coriolanus
<br/></div>
<br/>
<br/>KSK keys are deprecated for most purposes, because they can be hijacked by an attacker.  If you are publishing important content in Freenet, you should seriously consider using an SSK instead (see below).
<br/>
<br/><b>SSK</b>: A Secure (or Signed) Subspace Key consists of a prefix specifying the subspace, followed by a free-form name placing the key inside the subspace. Actually each subspace has two prefixes associated with it, one used for inserting, the other for retrieval of keys. The insert prefix is normally kept secret, while the retrieval prefix is given out freely. This ensures that only the holder(s) of the secret prefix may put content into the subspace, while everybody may get content out.
<br/>
<br/>This kind of key works somewhat like a PGP keypair. You give one of them (the public key) away, and the other (the private key) you must keep in secret, for you will use it to insert things inside your namespace.
<br/><div class='simplebox' align='center'>
<br/>Example: SSK@rBjVda8pC-Kq04jUurIAb8IzAGcPAgM/TFE//
<br/></div><br/></div>
<p class="editdate">Last modification date: Monday 10 of March, 2003 [12:34:02] by greycat</p>
<br/>

