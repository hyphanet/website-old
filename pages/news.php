<!-- Please keep this to at-most 5 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style). --> 

<h3>News</h3> 
<p><b>8th February, 2004 - Stable build 5066 released</b></p>
We have just migrated a number of recent improvements and bugfixes back
to the stable branch.  The most significant of these are the introduction
of a new load balancing mechanism which is the first real attempt at load
balancing that has proved almost entirely successful.  In the unstable
branch over 95% of queries were being rejected by nodes due to overload,
but with the new load balancing mechanism this is now less than 5% and
planned improvements promise to reduce this further.  The second most
significant change is the fixing of a major bug in the datastore code
which has gone undetected for over a year, and which was playing havoc
with Freenet's caching of data.  All users should upgrade immediately
by selecting "Update Snapshot" in your Windows Start menu, or running
the <i>update.sh</i> script in your Linux freenet directory.  New users
should download the latest stable snapshot from the <a href="index.php?page=download">
download page</a>.
