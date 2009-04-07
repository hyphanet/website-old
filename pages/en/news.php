<!-- Please keep this to at-most 3 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style).  Additionally, please remove obsolete news items (such as
old new build announcements) --> 
<?php
	// updated hourly on emu
	$file = "/tmp/paypal.txt";
	$file2 = "/tmp/usd_rate.txt";
	if(file_exists($file)) {
		$handle = fopen($file, "r");
		$paypalTotal = fread($handle, filesize($file));
		fclose($handle);
		$usdRate = 0.68103;

		$totalUSD = ($paypalTotal + 876.88);
		$totalBGP = $totalUSD * $usdRate;
		$days = round($totalBGP / ((4 * 30 * 12 * 1.039 * 1.025 + 80)/(365.25/12)));
		echo "
<h3>Financial Status</h3>
<p>The project's current balance is <b>\$$totalUSD</b>.<br>
We have enough money to pay for the project's full time developer and the server for <a title=\"approximate figure not including work already paid for (1 month or less)\">around another <b>$days days</b></a>. If you would like to help <a href=\"/donate.html\">support</a> the Freenet Project, <a href=\"/donate.html\">click here to make a donation</a>.
</p>
		";
	}
?>

<h3>News</h3>

<p><b>1st April, 2009 - Freenet now uses db4o, lower memory use and better
large-file downloads!</b></p>
<p>Since Freenet 0.7, Freenet has had built-in code for downloading and
uploading large files.  This has improved performance and usability, 
but it has also meant that when lots of downloads are going at the same time, 
Freenet could use a lot of memory.  Also, it could make Freenet slow to start 
up, and use a lot of system resources.</p>
<p>DB4O is an open source database technology, that we hoped might help us address
these problems.  By storing the current progress of uploads and
downloads in <a href="http://www.db4o.com/">this database</a> rather
than in memory, Freenet's memory usage can be greatly reduced.</p>
<p>We are currently testing these significant changes, meaning that it
will be included in the official Freenet in the very near future.</p>
<p>If you want to help with testing this new functionality, run
"update.cmd testing" (or "update.sh testing" if on mac/linux), in the 
directory you installed Freenet to.  Please report any bugs you find <a
href="https://bugs.freenetproject.org/">here</a>, or to the mailing lists.</p>
<p>You may also want to join #freenet-testers on irc.freenode.net. If you don't
want to help testing, we will release a stable build based on this code soon,
and an alpha of 0.8 hopefully within the next month.</p>
<p>Also please note that this work has been almost entirely the work of
our one paid developer, and currently we can only have enough funds to
pay him for another month, so <a href="/donate.php">please consider donating</a>
if you'd like to see these improvements continue.</p>

<p><b>26th March, 2009 - Summer of Code 2009</b></p>
<p>Freenet has been accepted into <a href="http://socghop.appspot.com/">Google Summer of Code 2009</a>! 
That means Google will be paying for a bunch of students to work for us over the summer. 
We have had 24 proposals from students and the application period has now passed.
See <a href="http://wiki.freenetproject.org/SummerOfCode2009">here</a> for more details.</p>

<p><b>11th Dec, 2008 - Submit your suggestions for Freenet</b></p>
You can now request and vote on features for Freenet through <a href="http://freenet.uservoice.com/">freenet.uservoice.com</a>.  What are you waiting for?!

<p><b>8th May, 2008 - Freenet 0.7.0 "Darknet" released!</b></p>
<p>The Freenet Project is very pleased to announce the release of Freenet 0.7.0.</p>

<p>Freenet is software designed to allow the free exchange of information over the Internet without fear of censorship, or reprisal.  To achieve this Freenet makes it very difficult for adversaries to reveal the identity, either of the person publishing, or downloading content.  The Freenet project started in 1999, released Freenet 0.1 in March 2000, and has been under active development ever since.</p>

<p>Freenet is unique in that it handles the storage of content, meaning that if necessary users can upload content to Freenet and then disconnect.  We've discovered that this is a key requirement for many Freenet users.  Once uploaded, content is mirrored and moved around the Freenet network, making it very difficult to trace, or to destroy.   Content will remain in Freenet for as long as people are retrieving it, although Freenet makes no guarantee that content will be stored indefinitely.</p>

<p>The journey towards Freenet 0.7 began in 2005 with the realization that some of Freenet's most vulnerable users needed to hide the fact that they were using Freenet, not just what they were doing with it.  The result of this realization was a ground-up redesign and rewrite of Freenet, adding a "darknet" capability, allowing users to limit who their Freenet software would communicate with to trusted friends.  This would make it far more difficult for a third-party to determine who is using Freenet.</p>

<p>Freenet 0.7 also embodies significant improvements to almost every other aspect of Freenet, including efficiency, security, and usability.  Freenet is available for Windows, Linux, and OSX. It can be downloaded from:</p>

<p><a href="/download.html">http://freenetproject.org/download.html</a></p>

<p>If you have any difficulty getting Freenet to work, or any questions not answered in <a href="/faq.html">the faq</a>, please join us on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a> in the <a href="irc://irc.freenode.net/%23freenet">#freenet</a> channel at irc.freenode.net. Thank you.</p>

<p>This release would not have been possible without the efforts of numerous volunteers, and Matthew Toseland, Freenet's full time developer. Matthew's work is funded through donations via our website (as well as a few larger sponsors from time to time).  We ask that anyone who can help us to ensure Matthew's continued employment visit our donations page and make a contribution at:</p>

<p><a href="/donate.html">http://freenetproject.org/donate.html</a></p>
