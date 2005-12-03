<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr>
<center><h2>Summary of some discussions on the maillist</h2>
<P>
<h3>February</h3></center>
<P>
1) <span style='color:blue'><b>Freenet User Interface
</b></span><P>
Ian said:<br>
<i>
<p>
I really want to tackle the issue of Freenet's user friendliness (or 
lack thereof) head on.
<p>
Here are some ideas:
<p>
1) Switch to a powerful templating engine such as 
http://freemarker.sf.net/ which will allow us to completely separate 
data from presentation, and will mean that people can work on
<p>
Cons: freemarker.jar is about 700k, which would add about 30% to the 
size of the distro, still, probably worth it if it makes Freenet easy to use
<p>
2) Allow Freenet to be configured completely through the web interface, 
with a "Wizard"-style interface for initial configuration.
<p>
3) Migrate FProxy over to using NIO
<p>
Cons: This may only make sense once more of Freenet's guts are converted 
over to use NIO
<p>
I think the organizational problem we have been experiencing is that it 
is difficult to devote developer resources to UI issues since those 
closest to the development team, and Freenet's most vocal users, tend to 
be sufficiently familiar with the software that they are not affected by 
most usability problems, and lower level stuff therefore always seems 
more urgent ("What good is it if it looks nice but doesn't work?!!").
<p>
To address this issue, I am keen to find a volunteer to become Freenet's 
user friendliness "Czar", who can focus on UI issues specifically 
without succumbing to the lure of lower level hacking.
<p>
I think if we can migrate to something like FreeMarker it would allow a 
good separation between developers focusing on the core code, and 
developers / designers concentrating on the UI, thus reducing the degree 
to which each group can inhibit the progress of the other.
<p>
Ideally I would like this UI Czar to be a paid position, however at 
current funding levels, despite the massive recent influx of donations 
(over $4,000 - thanks everyone!!!) after our Slashdot story two days 
ago, I don't think we could do this without putting Toad's employment in 
jeopardy in the medium term, which I am not willing to do.
<p>
None the less, if someone were to take on this position, and do a good 
job, it would make them an excellent candidate to become Freenet 
employee #2 - once sufficient funds become available (something I am 
sure their efforts will help to bring about).
<p>
The suitable candidate should be comfortable with Java, but not 
necessarily an expert, should have some good ideas about what is and is 
not a good UI, and most importantly - have the commitment to stick with 
this for at least a few months.
<p>
I don't want to scare anyone off, but unless you are willing to give at 
least 15 hours a week to Freenet over at-least the next 2 months, you 
probably aren't the right person.
<p>
Having said that, don't worry too much, giving up one's social life to work on Freenet seems to come naturally after a while anyway.<p>
Ian.
<p>
</i>
<br>
<p>
As usual, toad was sceptic about it, asking what exactly did this gave us and stating that substituting variables is trivial, and we already have it. However, he was a bit more enthousiastic about JMX as a possibility, as Iakin had pointed out in an earlier post. Ian responded with explaining that FreeMarker allows you to completely separate the data itself, from how you present that data. And that this is simply not even nearly possible with the current primitive variable substitution template mechanism. Toad apparently had no idea what that (or something else - a bold remark by Ian at the end, perhaps?) meant. Also, Ian had no clue what JMX meant, to the surprise of  Niklas, who explained it to him a zillion times before. Niklas, lastly, repeated that JMX stands for Java Management eXtenstion and provided some links: http://article.gmane.org/gmane.network.freenet.devel/5490 http://article.gmane.org/gmane.network.freenet.devel/5541 and  http://java.sun.com/products/JavaManagement/index.jsp . 






<p>
<br>
<p>


<p>



</td>
<tr>
<td align="right" valign="bottom">
<BR>
<P>
<BR>
<P>
<BR>
<P>
<BR>
Donation inquiries please contact <a href="mailto:ian@locut.us">Ian Clarke</a><BR>
</td>

