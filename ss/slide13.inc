<h1>Document verification</h1>
Content Hashed Keys (CHKs)<br>
Eg: 
<b>freenet:CHK@vBdwJX-fbH1OJ2RRiyDLBVM-H1gKAwI</b>
<ul>
<li>Key is hash of the document's contents
<li>Progressive hashing
<li>If you have the correct key, you <i>will</i> get the correct 
document
</ul>
Signature Verifying Keys (SVKs)<br>
Eg: <b>freenet:SSK@kj9mFvMP4IROkObPHFPlapSnjj0PAgM/techgrounds//</b>
<ul>
<li>Key is a public key combined with a plaintext string
<li>Document must include signature which matches the public key or 
nodes won't cache it
<li>You can guarentee that the document was inserted by whoever has the 
corresponding private key
</ul>
