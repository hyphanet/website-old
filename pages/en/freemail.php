<h2>Freemail</h2>

<p>Freemail is an email system for Freenet. It allows you to send
anonymous emails to other Freenet users using your standard email
client. It is currently not bundled in the Freenet installer, and has
to be downloaded separately. You can also try the Freemail plugin by
selecting it from the list on the plugins page of your Freenet
node. Beware, though, that the plugin is still in an early stage of
development, and users should be active about looking in log files
and reporting problems if they find them.<p>

<p>You can download the latest pre-compiled version from <a
href="http://downloads.freenetproject.org/alpha/plugins/Freemail/">http://downloads.freenetproject.org/alpha/plugins/Freemail/</a></p>

<h3>The easy way to set up a Freemail account is to visit the Freemail
plugin, after you have downloaded it, through your <b>Plugins</b> web
page.  The web interface will prompt you for an IMAP name, an IMPAP
password, and a Freemail shortname to associate with the account.
When the account is created, it will email you the secure name that it
generated for you.</h3>

<p>The chosen short Freemail-address must be unique and will give
you an address looking like:</p>

<ul>
<li>&lt;anything&gt;@&lt;short-Freemail-address&gt;.freemail</li>
</ul>

<p>The &lt;anything&gt; before the @ will be ignored.  It is only
there because mail user and transport agents want to see an @ in
addresses. Yes, we <em>do</em> know this is an ugly kludge.</p>

<p>Once you have installed the freemail plugin for your Freenet proxy 
daemon, starting or restarting the daemon will start the freemail service
for you automatically.</p>

<p>If for some reason you cannot make the web interface work, we have
included hand-configuration instructions down this page.</p>

<h3>Mail client setup</h3>

<p>Now you have the Freemail proxy running, which means that you can
send and receive emails through Freenet. For this we recommend that
you setup your favorite email client.  </p>

<p>The settings for the email client, illustrated below with fetchmail and the
Firefox-bundled Thunderbird email client, must be setup with the
following settings:</p>

<ul>
<li><span style="font-weight:bold;">Incoming emails </span>- Protocol: <span style="font-weight:bold;">IMAP</span>, Server: 
<span style="font-weight:bold;">localhost</span>, Port: <span style="font-weight:bold;">3143</span></li>
<li><span style="font-weight:bold;">Outgoing emails </span>- Protocol: <span style="font-weight:bold;">SMTP</span>, Server: 
<span style="font-weight:bold;">localhost</span>, Port: <span style="font-weight:bold;">3025</span></li>
</ul>

<p>Remember that the Freemail.jar program needs to be running whilst
you are reading and sending freemails.</p>

<h3>fetchmail</h3>

<p>You can easily make <a
href="http://fetchmail.berlios.de/">fetchmail</a> poll your freenet
mail with an entry like this:</p>

<pre>
poll freenet via localhost with proto imap port 3143
    user LOCALNAME here is IMAPNAME there with password PASSWORD
</pre>

<p>This will cause Freemail mail to be automatically fetched and merged into
your normal incoming mail stream, so any of your email clients will see it.
Of course, you will need to change IMAPNAME and PASSWORD to match the 
authetication pair you gave when you created the Freemail account, and LOCALNAME
to the local login you want to receive the mail.</p>

<p>A variant of this recipe will still work if you have your freenet
node. running on another machine. Just change "localhost" to the DNS
address of the node host.</p>

<h3>Thunderbird</h3>

<p>If you use Thunderbird as your email client:</p>

<ol>
<li> From the Edit menu, select Account Settings.</li>
<li> Click the Add Account... button.</li>
<li>Select Email Account and click Next.</li>
<li>Type in the name and either the long Freemail address you were given, or your short address if you created one. Check this carefully as an incorrect address here will not only mean people won't be able to reply to you, but your messages will appear as 'Spoofed'. Once you've done this, click Next.</li>
<li>Set the type of incoming server to IMAP and the incoming server name to localhost. Then click Next.</li>
<li>For the Incoming User Name, use the account name you chose earlier ('john' in this example), which may not be the same as your email 
address. Click Next.</li>
<li>Enter an arbitrary Account Name and click Next and then Finish.</li>
<li>Now we have to change the IMAP port number from the default: On the left panel click on Server Settings under the new account. 
Change the Port to 3143 from the default of 143.</li>
</ol>

<p>Now you should be able to read incoming freemails. To send out emails:</p>

<ol>
<li>From the Edit menu, select Account Settings.</li>
<li>In the left-hand panel, scroll down and click on the Outgoing Server (SMTP) option.</li>
<li>You probably already have at least one SMTP server set up already for your normal emails. So click on the Add... button to create 
one specially for freemails.</li>
<li>Under Description put anything you want - Freemail might be a good choice. Set Server Name to localhost and change Port to 3025. 
Make sure 'Use name and password' is checked and put your original account name as the User Name ('john' in our example). 'Use secure 
connection' should be set to No (don't worry, it's only the local connection that is unencrypted). Click OK.</li>
<li>The final thing is to set your new Freemail account to use this outgoing server instead of the default one. So in the left panel 
find and click on the top line of the new incoming mail account you added. In our example this would be something like 
me@jsmith.freemail. There should be a drop-down box called Outgoing Server (SMTP). Set this to the new setup we just added: 
something like Freemail - localhost. And click OK.</li>
</ol>

<p>Congratulations - you're now set up to send and receive email over
Freenet!</p>

<h3>Hand configuration</h3>

<p>To set up an account for Freemail by hand, execute the following
commands:</p>

<pre>
java -jar Freemail.jar --newaccount &lt;username&gt;
java -jar Freemail.jar --passwd &lt;username&gt; &lt;password&gt;
java -jar Freemail.jar --shortaddress &lt;username&gt; &lt;short-Freemail-address&gt;
java -jar Freemail.jar
</pre>

<p>Exchange the values within &lt;brackets&gt; with the appropriate
values.</p>

<p>After running the last command you now have a running Freemail
proxy, listening on localhost at IMAP port 3143 for incoming mails,
and SMTP port 3025 for outgoing mails. Connect to it using your
favourite email client software.</p>

<p>If you didn't follow, here's a longer and more detailed recipe:</p>

<h3>Account Setup</h3>

<p> Change to the directory containing the Freemail.jar file. At the
command line, type:</p>

<pre>
java -jar Freemail.jar
</pre>

<p>If you are running Freemail for the first time, it will prompt you
to create an account:</p>

<pre>
Starting Freemail for the first time.
You will probably want to add an account by running Freemail with arguments --newaccount &lt;username&gt;
</pre>

<p>So do what it says. The username you create here is used to
authenticate to the Freemail-service and will only be seen by you, it isn't
part of your freemail address:</p>

<pre>
java -jar Freemail.jar --newaccount john
</pre>

<p>It now generates your Freemail address which is a long random
string like <span
style="font-weight:bold;">anything@DS3FG3R...SF6FHJ8YUK.freemail</span>. Generating
the cryptographic keypair is a computation-intensive process and may
take a few minutes on a slow machine.</p>

<pre>
Generating mailsite keys...
Mailsite keys generated.
Your Freemail address is: anything@DS3FG3R...SF6FHJ8YUK.freemail
Generating cryptographic keypair (this could take a few minutes)...
Account creation completed.
Account created for john. You may now set a password with --passwd &lt;password&gt;
</pre>

<p>The next step is to create a password for your account. The syntax
to create a password is shown below:</p>

<pre>
java -jar Freemail.jar --passwd &lt;username&gt; &lt;password&gt;
</pre>

<p>To create the password <span
style="font-weight:bold;">secretpass</span> for the user <span
style="font-weight:bold;">john</span>, type:</p>

<pre>
java -jar Freemail.jar --passwd john secretpass
</pre>

<p>Now we have an account, a password for that account and a rather
lengthy Freemail-address. The problem is that not many people in the
world will be able to remember that Freemail-address. The solution to
this problem is to create a short address that points to the long
one:</p>

<p>To do this, run the main command again:</p>

<pre>
java -jar Freemail.jar
</pre>

<p>and the software will prompt you to create a short Freemail address:</p>

<pre>
Secure Freemail address: anything@DS3FG3R...SF6FHJ8YUK.freemail
You don't have a short Freemail address. You could get one by running Freemail
with the --shortaddress option, followed by your account name and the name
you'd like. For example, 'java -jar freemail.jar --shortaddress bob bob' will give
you the address 'anything@bob.freemail'. Try to pick something unique!
trying slotinsert to freenet:SSK@sdfgsdfg...ertretert/mailsite-1/mailpage
</pre>

<p>The syntax to create a short freemail address is:</p>

<pre>
java -jar Freemail.jar --shortaddress &lt;username&gt; &lt;short address&gt;
</pre>

<p> To create an alias known as <span
style="font-weight:bold;">jsmith</span> for user <span
style="font-weight:bold;">john</span>, write: </p>

<pre>
java -jar Freemail.jar --shortaddress john jsmith
</pre>

<p>If that short alias is free, it will tell you your Freemail address:</p>

<pre>
Secure Freemail address: anything@DS3FG3R...SF6FHJ8YUK.freemail
Short Freemail address (*probably* secure): anything@jsmith.freemail
</pre>

<p> Now you have created a Freemail account, a long and a short
address and set up a password for the account. Now, all you need to do
is to start the Freemail proxy, to listen for incoming IMAP and SMTP
connections. The Freemail proxy must run while you use Freemail, or
else no mails you send will get delivered. To start the server, run
the command: </p>

<pre>
java -jar Freemail.jar
</pre>

<h3>Troubleshooting tips</h3>

<p>If you try to run the Freemail jar and get messages that look like the 
following:</p>

<pre>
24/12/2008 11:20:52 ERROR(freemail.smtp.SMTPListener): Error in SMTP server - Address already in use
24/12/2008 11:20:52 ERROR(freemail.imap.IMAPListener): Error in IMAP server - Address already in use
</pre>

<p>...it probably means you downloaded the Freemail plugin through the Web
interface and your node is already running it.  On a Linux machine you
can check to see if the private SMTP and IMAP ports are actually in use
with <code>netstat -tln</code>; the port numbers you're looking for in
the listing are 3143 (Freenet IMAP) and 3025 (Freenet SMTP).</p>

<p>If you get these messages and these ports are <em>not</em> in use,
try shutting down and restarting the node.  If the problem persists
after that, you have found a bug and should file it with the Freenet
developers.</p>

<p>If the ports are indeed in use, check the <b>List of Plugins</b> on
your <b>Plugins</b>. If Freemail is in that list, then you can eaither
unload it and go through the manual procedure (running java -jar
Freemail.jar) or configure your Freemail account through the web
interface.</p>
