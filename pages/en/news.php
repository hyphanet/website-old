<!-- Please keep this to at-most 3 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style).  Additionally, please remove obsolete news items (such as
old new build announcements) --> 
<?php
	// updated hourly on emu
	$file = "/tmp/paypal.txt";
	if(file_exists($file)) {
		$handle = fopen($file, "r");
		$paypalTotal = fread($handle, filesize($file));
		fclose($handle);

		$totalUSD = ($paypalTotal + 4820.11);
		$totalBGP = $totalUSD * 0.63354;
		$days = round($totalBGP / ((4 * 30 * 12 * 1.039 * 1.025 + 80)/(365.25/12)));
		echo "
<h3>Financial Status</h3>
<p>The project's current balance is <b>\$$totalUSD</b>.<br>
We have enough money to pay for the project's full time developer and the server for <a title=\"approximate figure not including work already paid for, which never exceeds 1 month\">around</a> another <b>$days days</b>. If you would like to help support the Freenet Project, <a href=\"/donate.html\">click here to make a donation</a>.
</p>
		";
	}
?>

<h3>News</h3>

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
