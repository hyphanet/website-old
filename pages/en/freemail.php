<h2>Freemail</h2>

<p>Freemail is an email system for Freenet. It allows you to send anonymous emails to other Freenet users using your standard email
client. It is currently not bundled in the Freenet installer, and has to be downloaded separately. You can also try the Freemail plugin by selecting it from the list on the plugins page of your Freenet node. Beware, though, that the plugin is still in an early stage of development, and users should be confident about looking in log files and reporting problems if they find them.<p>

<p>You can download the latest pre-compiled version from <a href="http://downloads.freenetproject.org/alpha/plugins/Freemail/">http://downloads.freenetproject.org/alpha/plugins/Freemail/</a></p>

<h3>The short version</h3>

<p>To setup an account for Freemail, execute the following commands:</p>
<pre>
java -jar Freemail.jar --newaccount [username]
java -jar Freemail.jar --passwd [username] [password]
java -jar Freemail.jar --shortaddress [username] [short Freemail-address]
java -jar Freemail.jar
</pre>

<p>Exchange the values within [brackets] with the appropriate values. The chosen short Freemail-address must be unique and will give
you an address looking like:</p>
<ul>
<li>&lt;anything&gt;@[short Freemail-address].freemail</li>
</ul>
<p>
After running the last command you now have a running Freemail proxy, listening on localhost at IMAP port 3143 for incoming mails, 
and SMTP port 3025 for outgoing mails. Connect to it using your favourite email client software</p>

<p>If you didn't follow, read the long version below.</p>
 
 
<h3>The long version</h3>

<h3>Account Setup</h3>
<p>
Change to the directory containing the Freemail.jar file. At the command line, type:
<pre>
java -jar Freemail.jar
</pre>
<p>
If you are running Freemail for the first time, it will prompt you to create an account:
</p>
<pre>
Starting Freemail for the first time.
You will probably want to add an account by running Freemail with arguments --newaccount &lt;username&gt;
</pre>

<p>
So do what it says. The username you create here is used to authenticate to the Freemail-service and is only seen by you, 
it isn't part of your freemail address:
</p>
<pre>
java -jar Freemail.jar --newaccount john
</pre>
<p>
It now generates your Freemail address which is a long random string like 
<span style="font-weight:bold;">anything@DS3FG3R...SF6FHJ8YUK.freemail</span>. Generating the cryptographic keypair will take a few 
minutes.
</p>
<pre>
Generating mailsite keys...
Mailsite keys generated.
Your Freemail address is: anything@DS3FG3R...SF6FHJ8YUK.freemail
Generating cryptographic keypair (this could take a few minutes)...
Account creation completed.
Account created for john. You may now set a password with --passwd &lt;password&gt;
</pre>

<p>
The next step is to create a password for your account. The syntax to create a password is shown below:
</p>
<pre>
java -jar Freemail.jar --passwd [username] [password]
</pre>
<p>
To create the password <span style="font-weight:bold;">secretpass</span> for the user <span style="font-weight:bold;">john</span>, type:
</p>
<pre>
java -jar Freemail.jar --passwd john secretpass
</pre>
<p>Now we have an account, a password for that account and a rather lengthy Freemail-address. The problem is that not many people in the
world will be able to remember that Freemail-address. The solution to this problem is to create a short address that points to the long
one:</p>
<p>
To do this, run the main command again:
</p>
<pre>
java -jar Freemail.jar
</pre>
<p>
and the software will prompt you to create a short Freemail address:
</p>
<pre>
Secure Freemail address: anything@DS3FG3R...SF6FHJ8YUK.freemail
You don't have a short Freemail address. You could get one by running Freemail
with the --shortaddress option, followed by your account name and the name
you'd like. For example, 'java -jar freemail.jar --shortaddress bob bob' will give
you the address 'anything@bob.freemail'. Try to pick something unique!
trying slotinsert to freenet:SSK@sdfgsdfg...ertretert/mailsite-1/mailpage
</pre>
<p>
The syntax to create a short freemail address is:
</p>
<pre>
java -jar Freemail.jar --shortaddress [username] [short address]
</pre>
<p>
To create an alias known as <span style="font-weight:bold;">jsmith</span> for user <span style="font-weight:bold;">john</span>, write:
</p>
<pre>
java -jar Freemail.jar --shortaddress john jsmith
</pre>
<p>
If that short alias is free, it will tell you your Freemail address:
</p>
<pre>
Secure Freemail address: anything@DS3FG3R...SF6FHJ8YUK.freemail
Short Freemail address (*probably* secure): anything@jsmith.freemail
</pre>
<p>
Now you have created a Freemail account, a long and a short address and set up a password for the account. Now, all you need to do is
to start the Freemail proxy, to listen for incoming IMAP and SMTP connections. The Freemail proxy must run while you use Freemail, or
else no mails you send will get delivered. To start the server, run the command:
</p>
<pre>
java -jar Freemail.jar
</pre>

<h3>Mail client setup</h3>

<p>Now you have the Freemail proxy running, which means that you can send and receive emails through Freenet. For this we recommend that
you setup your favorite email client.
</p>
<p>
The settings for the email client, illustrated below with the Firefox-bundled Thunderbird email client, must be setup with the following
settings:
</p>
<ul>
<li><span style="font-weight:bold;">Incoming emails </span>- Protocol: <span style="font-weight:bold;">IMAP</span>, Server: 
<span style="font-weight:bold;">localhost</span>, Port: <span style="font-weight:bold;">3143</span></li>
<li><span style="font-weight:bold;">Outgoing emails </span>- Protocol: <span style="font-weight:bold;">SMTP</span>, Server: 
<span style="font-weight:bold;">localhost</span>, Port: <span style="font-weight:bold;">3025</span></li>
</ul>
<p>
Remember that the Freemail.jar program needs to be running whilst you are reading and sending freemails.
</p>

<h3>Thunderbird</h3>
<p>
If you use Thunderbird as your email client:
</p>
<ol>
<li> From the Edit menu, select Account Settings.</li>
<li> Click the Add Account... button.</li>
<li>Select Email Account and click Next.</li>
<li>Type in the name and either the long Freemail address you were given, or your short address if you created one. Check this carefully as an incorrect address here will not only mean people won't be able to reply to you, but your messages will appear as 'Spoofed'. Once you've done this, click Next.</li>
<li>Set the type of incoming server to IMAP and the incoming server name to localhost. Then click Next.</li>
<li>For the Incoming User Name, use the account name you chose earlier ('john' in this example), which may not be the same as your email 
address. Click Next.</li>
<li>Enter an arbitrary Account Name and click Next and then Finish.</li>
<li>Nw we have to change the IMAP port number from the default: On the left panel click on Server Settings under the new account. 
Change the Port to 3143 from the default of 143.</li>
</ol>
<p>
Now you should be able to read incoming freemails. To send out emails:
</p>
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
<p>
Congratulations - you're now set up to send and receive email over Freenet!
</p>
