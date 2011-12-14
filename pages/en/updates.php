      <h1>Updates</h1>
    
    <h3><a name="1405">15th November 2011 - 1405</a></h3>
	<p>Freenet 0.7.5 build 1405 is now available. Please upgrade. There are many changes, mostly client layer or FCP or filtering stuff from FMS. Highlights:</p>
<ul>
<li> Allow plugins to exempt themselves from the content filter.
</li><li>Low-level change paving the way to a load management change in the next build, very minor tweaks to routing.
</li><li>Fix GetCHKOnly (!!)
</li><li>Fix a USK subscription leak, and various other minor client layer changes.
</li><li>Add PrivateURI to FCP PersistentPut/PersistentPutDir. (Be careful when reporting FCP logs)
</li><li>Improvements to CompatibilityMode and PersistentGet.
</li><li>Improvements to the bandwidth page on the first-time wizard.
</li><li>Wait 100ms before trying to search the disk to get more entropy on startup, and fix a rare crypto bug (not serious).
</li><li>German update.
</li><li>New versions of Freetalk and WebOfTrust.
</li><li>Filter fixes.
</li><li>Always use AIMDs (like Freenet was in July and earlier). It appears they are essential even with NLM.
</li><li>Allow switching advanced <-> simple mode on any page.
</li><li>Allow building without junit, if skipping tests.</li>
</ul>
<p>
THANKS TO:<br />
Anonymous at fms<br />
ArneBab<br />
Bombe<br />
Eleriseth at fms<br />
Sadao at fms<br />
sweetie at irc<br />
toad
</p>
<p>
Apologies for the long delay involved in this release. The upside is the network performance seems reasonable at the moment, and there hasn't been any big disruption due to low level changes or frequent updates. We are discussing how to release builds in future.</p>

<p>THANKS FOR USING FREENET!
	</p>