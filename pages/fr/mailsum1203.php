<h2>Summary of some discussions on the maillist</h2>
<P>
<h3>December</h3>
<P>
1) <span style='color:blue'><b>Multiplexing
</b></span><P>
Toad said:<br>
<div style="font-style:italic;">I am implementing multiplexing. This will bring significant benefits,
regardless of routing algorithm. The main ones:<p>

* Dramatically reduced connection churn.<br>
* Significantly reduced memory usage.<br>
* Significantly reduced CPU usage. This is not just cosmetic; CPU usage
  affects message send times, and when the CPU is pegged long-term, the
  node becomes pretty much useless to both the user and the network.<br>
* Rewriting ConnectionHandler - new class MuxConnectionHandler - get rid
  of dead code etc. Will be backwards compatible by using the old CH for
  the old Presentation.<br>
* Protocol will be simpler to parse, resulting in fewer serious
  (corruption -&gt; connection death) bugs. Detecting where a trailer ended
  etc is tricky on the old protocol. The new protocol will have an explicit
  trailer ended with code X command.<br>
* Room for extensibility, can e.g. get rid of Identify message hack,
  include IP address detection, etc, once the core functionality is
  implemented.<br>
* Improve message send times.<br>
* Eliminate some low bandwidth DoSs.<br>
* Nodes on win9x and other connection limited environments will work
  better.<p>

I should have a prototype implementation running within a week or so..
probably.
</div>
<br>
<p>
Ian asked the question if it would solve the primary problem afflicting Freenet and thought it wouldn't... in which case he thought we shouldn't be focusing on that. Most others, such as Simon Porter and Niklas Bergh thought it was worthwhile, since it would yield benefits in any case, even if it wouldn't help with the routing (there was some discussion if MUX would directly benefit the routing or not). NG-routing wasn't being very effective as yet, and it wasn't clear exactly why not, so seen the limited resources of the project, most thought it was a good thing to persue multiplexing, and maybe go back to NG-routing later.

<BR>
<P>
<BR>
<P>
<BR>
<P>
<BR>
Donation inquiries please contact <a href="mailto:ian@locut.us">Ian Clarke</a><BR>
