<h2>Download Freenet 0.5.1</h2>
<b>Note: Firewall/NAT users</b><br>
If your computer is behind a firewall or NAT you must make some quick changes to your NAT's configuration for Freenet to work property.  Please see <a href="http://freenetproject.org/index.php?page=faq#firewall">here</a> for instructions.
<h3>Windows</h3>
Windows users should download and run <a href="http://freenetproject.org/snapshots/freenet-webinstall.exe">freenet-webinstall.exe</a>.  This will download other required components of Freenet, configure, and run the software.  When it is finished, double-click on the small blue rabbit icon in your task-tray.
<h3>Unix</h3>
Unix users should first install a recent Java Runtime Environment.  We have experienced best results with Sun which can be obtained from <a href="http://java.sun.com/">http://java.sun.com/</a>.  Once Java is installed, download <a href="http://prdownloads.sourceforge.net/freenet/freenet-0.5.2-rc2.tar.gz?download">freenet-0.5.2-rc2.tar.gz</a>.  Get started by typing:
<pre>
$ tar xfz freenet-0.5.2-rc2.tar.gz
$ cd freenet
$ sh start-freenet.sh
</pre>
After you start Freenet wait a few seconds for it to start-up (on a slow computer, you may need to wait about 30 seconds), and visit http://127.0.0.1:8888/ in your web browser to access Freenet's user interface.
<h3>Upgrading</h3>

After installing Freenet, Windows users can upgrade to the latest daily Freenet "snapshot" release by clicking on "Update Snapshot" in the Freenet section of their Start menu.
<p>
Linux users may similarily upgrade by running the update.sh shell script in the freenet/ directory.
<h3>Hardware requirements</h3>
We recommend a processor equivalent to at least a 400MHz Pentium 2/3, with at least 192MB of RAM.

