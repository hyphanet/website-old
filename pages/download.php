<h2>Download Freenet 0.5.1</h2>

<i>If you have a firewall or a NAT box click <a href="#NAT"><b>here</b></a> for some info.</i>

<h3>Windows</h3>
Download and run    
<big><a href="http://freenetproject.org/snapshots/freenet-webinstall.exe">freenet-webinstall.exe</a></big><br><br>
It will automatically install Freenet and other required components for you (It contains <u><b>no</b></u> spyware or adware). When done, double-click on the small blue rabbit icon in your task-tray.  Freenet works best with <b>Windows 2000 or XP.</b>
<h3>Unix</h3>
You need to have a recent Java Runtime Environment.  We have experienced best results with Sun JRE 1.4.1 which can be obtained from <a href="http://java.sun.com/">http://java.sun.com/</a>.  Once Java is installed, download <a href="http://prdownloads.sourceforge.net/freenet/freenet-0.5.2-rc2.tar.gz?download">freenet-0.5.2-rc2.tar.gz</a>.  Get started by typing:
<pre>
$ tar xfz freenet-0.5.2-rc2.tar.gz
$ cd freenet
$ sh start-freenet.sh
</pre>
After you start Freenet wait a few seconds for it to start-up (on a slow computer, you may need to wait about 30 seconds), and visit http://127.0.0.1:8888/ in your web browser to access Freenet's user interface.

<h3>Hardware requirements</h3>
<b>Minimum:</b> 400MHz Pentium 2, with at least 192MB of RAM.<br>
<b>Recomended:</b> 1GHz or more processor with 384MB RAM or more (especially if using Windows XP).

<h3>Upgrading</h3>

After installing Freenet, Windows users can upgrade to the latest daily Freenet "snapshot" release by clicking on "Update Snapshot" in the Freenet section of their Start menu.
<p>
Linux users may similarily upgrade by running the update.sh shell script in the freenet/ directory.
<br><br> 
<a name="NAT"></a>
<font color="red"><b>Note: Firewall/NAT users</b></font><br>
If your computer is behind a firewall or NAT you must make some quick changes to your NAT's configuration for Freenet to work property.  
Please see <a href="http://freenetproject.org/index.php?page=faq#firewall">here</a> for instructions.


<!--put some empty space so that the Firewall info will appear on top of the page-->




















<!--end of empty space-->
