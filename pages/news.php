<!-- Please keep this to at-most 5 news items, and if it is more than a
few sentences - create a separate page and link to that (ie. Slashdot
style). --> 

<h3>News</h3> 
<p><b>13th January, 2004 - Stable build 5054 released</b></p>
After discovering a major bug which we suspect to have been the cause of 
Freenet's recent poor performance, we have back-ported a number of 
important improvements from Freenet's "unstable" branch to stable.  
The main improvement, apart from the bug fix, is "multiplexing".  this 
means that rather than open multiple connections to the same node, 
multiple streams of data can now be sent across the same inter-node 
connection.  This will reduce Freenet's bandwidth, CPU, and memory usage 
requirements.
