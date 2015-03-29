      <h1>News</h1>

    <a name="20150329-new-installer"></a><h3>29th March 2015 - New Linux/Unix/OS X installer</h3>

<p>
The installer for Linux, Unix, and Mac OS X is updated to better detect Java.
</p>

    <a name="20150315-1468-progress"></a><h3>15th March 2015 - Progress toward build 1468</h3>

<p>
Build 1468 continues to make progress toward release.
</p>

<p>
What is done:
</p>

<ul>
<li>Replace the unreliable db4o database. (Yay!)</li>
<li>Create more flexible Windows tray app.</li>
<li>Update Windows installer translations for Finnish and French.</li>
<li>Add Windows installer translations for Czech, German, Italian, Polish,
    Brazilian Portuguese, and Simplified Chinese.</li>
<li>Improve the reliability of starting Freenet under changing Java
    installations on Linux/OS X/POSIX.</li>
<li>Update WebOfTrust with bug fixes and a new API.</li>
</ul>

<p>
What remains to be done:
</p>

<ul>
<li><del>Finish reviewing the synchronous plugin communication API. Review is split
    between <a href="https://github.com/freenet/fred/pull/319">GitHub</a> and more
    recently the <a href="https://emu.freenetproject.org/pipermail/devl/2015-February/037986.html">development mailing list</a>.</del> -- Done 2015-03-28</li>
<li>Update all plugins (KeyUtils and WebOfTrust are already ready) for the API
    breakage in this version.</li>
<li>Add a .NET 3.5 install to the Windows installer, along with the new tray app.
    (This is necessary for it to always work for those not on Windows 7.)</li>
<li>Everything on <a href="https://bugs.freenetproject.org/roadmap_page.php?version_id=85">this list</a>.</li>
</ul>

<p>
Because this is such a large release new installers for build 1467 will be
released shortly to test those changes. Once everything on this list is
complete, there will be a release candidate, then finally the stable release.
</p>

    <a name="20150314-localization-lab"></a><h3>14th March 2015 - Freenet translation joins Localization Lab</h3>

<p>
The Freenet project has joined the <a href="http://www.localizationlab.org">Localization Lab</a>
organization on Transifex. This allows a larger team of translators,
translating into more languages, and access to paid support.
</p>
<p>
If this transition has caused any problems please let us know!
</p>

    <a name="20150215-csharp-tray"></a><h3>15th February 2015 - New Windows tray app for testing</h3>

<p>
The Windows tray application distributed as of build 1467 is written in the
automation scripting language AutoHotKey. It has not been well-maintained and
is also often falsely detected by antivirus by virtue of the language it uses.
We are pleased to announce a new Windows tray application written in C# which
has some additional features:
</p>

<ul>
<li>Allow choosing which browser to launch.</li>
<li>Allow starting Freenet without the tray on startup.</li>
<li>Allow opening the Downloads folder from the menu.</li>
<li>Give a more actionable response to crashes.</li>
<li>Can be hidden while keeping Freenet running.</li>
<li>Can be located other places than in the Freenet installation folder.</li>
</ul>

<p>
If all goes well we plan for this tray app to be distributed with build 1468.
Testing is appreciated! If you'd like to try it for yourself you can find it
<a href="https://downloads.freenetproject.org/FreenetTray-testing-eaf31ea.exe">here</a>.
Please let us know how it goes and if you'd like to see any changes.
</p>

    <a name="20150211-suma-award"></a><h3>11th February 2015 - Freenet received the SUMA Award 2014/15</h3>

<p><img align="right" src="image/suma2015_badge.png">At this year's
<a href="http://searchstudies.org/de/suma2015.html">congress</a> of <a
href="http://suma-ev.de/en/index.html">SUMA-EV</a>, association for
free access to knowledge, the <a
href="http://suma-awards.de/en/index.html">SUMA award</a> was awarded
in the venerable Karl-H.-Ditze lecture hall of the Hamburg University
of Applied Sciences. The topic of the award, was the surveillance
scandal, revealed by whistleblower Edward Snowden: 'protection against
total surveillance'.  From submissions of about 50 projects for the
SUMA award 2014/15 the panel of SUMA-EV selected the Freenet
Project as the winner. The prize money of 2500€ will be used like
regular <a href="donate.html">donations</a> to fund our one paid
developer.</p>

<blockquote><img width="100%" src="image/suma_award_2015_handover.jpg" /><br /> Wolfgang
Sander-Beuermann with Arne Babenhauserheide, long-term Freenet
contributor, as representative of the award winner. Photo: Michael
Christen in Hamburg, Lizenz: CC0.</blockquote>


    <a name="20150105-mempo-apt-get"></a><h3>1st January 2015 - apt-get over Freenet</h3>

<p>Developers of the privacy-focused Debian derivative Mempo report that it can
download updates over Freenet! For details, see their page on
<a href="http://deb.mempo.org/#install_apt_freenet">Apt over Freenet</a>.</p>

<p>Key Points:</p>

<ul>
<li>use Freenet to distribute online updates</li>
<li>most secure hosting option</li>
</ul>

<p>That means it is now possible to get reproducibly built kernels
checked by anonymous (and therefore hard to pressure) contributors and
update them over Freenet without disclosing that you use them.
This applies to the packages provided by Mempo - other apt-get activity
like installing GIMP is still public.
It would be possible to host the entire Debian repository in Freenet,
but this is not yet on the agenda for Mempo because this other activity
does not disclose the potentially sensitive information
that you want additional privacy.</p>

<blockquote>
The practical cool result now, is that Mempo repository can not be censored,
DDoSed or taken offline, despite having just 1 tiny server (or no server at all)
— rfreeman (one of the mempo developers)
</blockquote>

    <a name="build01467"><h3>23rd November 2014 - Freenet 0.7.5 build 1467 released</h3>

<p>This release fixes a bug introduced in build 1466 which can erase the list of
plugins to load when Freenet starts if it crashes. If you are affected by this
bug and can no longer connect, try adding the UPnP or JSTUN plugins again.</p>

<p>This release also has updated Finnish, French, Dutch, and Brazilian
Portuguese translations thanks to <a
href="https://www.transifex.com/projects/p/freenet/">volunteers on
Transifex</a>.</p>

<p>The Windows installer is updated:</p>

<ul>
<li>It now disables the Java installer's sponsor offers. Thanks artart78!</li>
<li>It gained a Finnish translation. Thanks oselotti!</li>
</ul>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

    <a name="build01466"><h3>9th November 2014 - Freenet 0.7.5 build 1466 released</h3>

<p>This release is planned to be the second-to-last version of Freenet to 
support Java 6. The version after this one will refuse to upgrade 
unless running on Java 7 or later. Support for this behavior is part of 
a larger effort to allow separate official update channels - stable, 
testing, and unstable - as well as make it easier to publish unofficial 
update channels and further improve deployment security.</p>

<p>Highlights for this build:</p>

<ul>
<li>Add Hungarian Windows installer translation. Thanks drezzium!</li>
<li>Allow hiding the Java version End Of Life alert. (I'm sorry for the excessive annoyingness. Still - please upgrade Java!)</li>
<li>Upgrades to the next version (that is, when running this build's upgrade code) should no longer get <a href="https://bugs.freenetproject.org/view.php?id=3208">stuck in an upgrade loop</a>.</li>
<li>Increase opennet peer limit to 142 peers. This now has <a href="https://github.com/freenet/fred/pull/286">more math behind it</a> and will change when network parameters are adjusted.</li>
<li>Add more opennet seed nodes. Thanks saces and juiceman!</li>
<li>This build will be mandatory starting 2014-11-16, because old nodes will reject new nodes with more than 110 peers. Updates only take a few hours to spread, so this should only cause short term disruption.</li>
</ul>

<p>Additionally Matthew's  (toad_'s) summer work on a custom on-disk 
format is done. This release lays the groundwork to include the results 
of that work <a href="http://127.0.0.1:8888/USK@pxtehd-TmfJwyNUAW2Clk4pwv7Nshyg21NNfXcqzFv4,LTjcTWqvsq3ju6pMGe9Cqb3scvQgECG81hRdgj5WO4s,AQACAAE/blog/23/Content-626611C.html">in the next release</a>. This is designed for less 
disk activity and better behavior when corrupted.</p>

<p>This release coincides with the 25th anniversary of the demolition of 
the Berlin wall (Mauerfall), which marked the beginning of the end of a 
large censorship and surveillance regime. May censorship be demolished
everywhere!</p>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty and Arne Babenhauserheide</p>

<p>The link to http://127.0.0.1:8888 works for default Freenet nodes, but will not 
work for some setups. If you have a nonstandard setup, you should know 
the correct URL to use.</p>

    <a name="downloads"><h3>27th September 2014 - Recent download problems</h3>

<p>We've changed download hosting in hope of avoiding the problems with
the previous service. If you find problems please drop in <a href="/irc.html">chat</a>
or the <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/support">support list</a> and let us know!</p>

    <a name="build01465"><h3>9th August 2014 - Freenet 0.7.5 build 1465 released</h3>

<p>Oracle Java 6 has not received security updates <a href="http://www.oracle.com/technetwork/java/javase/eol-135779.html">since February 2013</a>. Starting with this release, Freenet displays <a href="https://github.com/freenet/fred/pull/269">an alert</a> when running on old versions of Java. It will require Java 7 or later in a future release.</p>

<p>This release changes the rules for accepting connections in a way that we hope will improve performance. Because it is likely that this will interact poorly with the existing behavior, build 1464 and older will become too old on 2014-08-16.</p>

<p>Also in this release:</p>

<ul>
<li>Add Russian Windows installer translation. Thanks zabuldon! If you want to give a translation for another language please do so; the English source file is <a href="https://github.com/freenet/wininstaller-innosetup/blob/master/translations/Messages_en.isl">here</a>. In addition to Russian there are currently translations for Spanish, French, and Dutch.</li>
<li>Enhance the CSS filter to prevent pages from appearing differently based on browser history.</li>
<li>Update German, Finnish, French, Japanese, Dutch, Brazilian Portuguese, and Simplified Chinese translations thanks to volunteers on Transifex.</li>
<li>Update seed nodes. Thanks justusranvier and Stanley!</li>
</ul>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

    <a name="build01464"><h3>12th July 2014 - Freenet 0.7.5 build 1464 released</h3>

<p>The website now shows screenshots more recent than 2009. (!)</p>

<p>
There is a <a href="/papers/roos-pets2014.pdf">new paper</a> out about
Freenet. We are implementing some changes based on their findings.
</p>

<p>In this release:</p>

<ul>
<li>Translation updates for French, German, Italian, Japanese, Dutch,
Brazilian Portuguese, and Simplified Chinese thanks to
<a href="https://www.transifex.com/projects/p/freenet/">volunteers on Transifex.</a></li>
<li>Untranslated strings appear again in the translation page in Fred.
This problem was due to Transifex returning untranslated strings as
though they were translations.</li>
<li>Code cleanup.</li>
</ul>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

    <a name="build01463"><h3>14th June 2014 - Freenet 0.7.5 build 1463 released</h3>

<p>
The Windows installer runs on Windows XP again. In 1462 it failed on XP with
the error message "Floating point division by zero." If you are still running
XP, please upgrade! It is
<a href="http://windows.microsoft.com/en-us/windows/end-support-help">
no longer supported by Microsoft and is not secure</a>. We intend to drop
support for installing on XP in a future release.
</p>

<p>In this release:</p>

<ul>
<li>Translation updates for Freenet, Freemail, FlogHelper, and KeyUtils thanks
to volunteers on Transifex. To upgrade a plugin, reload it from the Plugins
page and check "Remove the plugin from the cache."</li>
<li>Update default bookmarks.</li>
<li>Code cleanup.</li>
<li>Fix seed node problems.</li>
</ul>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

    <a name="build01462"><h3>26th May 2014 - Freenet 0.7.5 build 1462 released</h3>
<p>
There is a new Windows installer; it is signed. (Without breaking internal
integrity checks like the last release.) It can run from and install to paths
with non-English characters. Thanks romnGit! There are currently translations
for English, French, and Spanish. If you'd like to contribute a translation for
your <a href="https://github.com/freenet/wininstaller-innosetup/tree/master/translations">language</a> please send it to us. Options for contacting us include Sone,
GitHub, IRC, FMS, and the <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl">mailing list</a>.
<p>

<p>
There are performance problems with some types of file downloads - specifically
bulk downloads for CHKs. We think this might be due to unofficial performance
patches negatively impacting performance for everyone not using them. If you
are running these patches we ask that you not run them so that bulk CHK
performance can be restored network-wide. In August 2011 build 1397 enabled New
Load Management, which was intended to avoid these types of weaknesses, but it
introduced performance problems at scale and was disabled. In the long term we
hope to fix these problems and redeploy NLM, but for right now we ask that
people not use these patches.
</p>

<p>
In this release:
</p>

<ul>
  <li>Add an opennet seed node. Thanks Juiceman!</li>
  <li>Add Korean Windows tray application translation. Thanks ilbe123!</li>
  <li>Fix potential security problems with malicious UPnP devices. Thanks to waldheinz for the report.</li>
  <li>Select options by default on the "Add a Friend" page.</li>
  <li>Omit empty plugin groups on the plugin page.</li>
  <li>Avoid leaking node location in link length probe.</li>
  <li>Base stats page average distance on actual location instead of 0.0.</li>
</ul>

<p>
There is a new Windows tray application in development. It is planned to
replace the current tray and launcher for new installations. Its features:
</p>

<ul>
  <li>Hide the tray icon while Freenet continues running.</li>
  <li>Change startup preferences.</li>
  <li>Change which browser it launches.</li>
  <li>Hopefully will be false-positived less by antiviruses that are overly suspicious of scripting languages.</li>
  <li>Be signed.</li>
</ul>

<p>
If you want to give feedback on the tray application it is <a href="https://downloads.freenetproject.org/FreenetTray-testing-00c0832.exe">here</a>.
</p>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

    <a name="build01461"><h3>30th March 2014 - Freenet 0.7.5 build 1461 released</h3>
<p>Freenet 0.7.5 build 1461 is now available.</p>

<p>
The Mac and Linux web installers are now properly signed. The Windows installer
is now signed too. Translation updates for Fred, Freemail, FlogHelper, and
KeyUtils are included - largely thanks to volunteers on Transifex. There are
also translation updates for Web of Trust, but Web of Trust staging is not
stable enough to be deployed.
</p>

<p><i>
Update: Signing the Windows installer caused an internal integrity check to fail,
which prevented the installer from working. The Windows installer being offered
for download now is still that for build 1459. Once installed and connected
Freenet can update itself to build 1461.
</i></p>

<p>
Build 1460 contained all these things but it was signed, which prevented some
types of coexistance with unsigned libraries. Signing is postponed until a
future release.
</p>

<p><h4>In this release</h4></p>

<ul>
  <li>Add Brazilian Portuguese translation.</li>
  <li>Update Swedish, Simplified Chinese, and Traditional Chinese translations.</li>
  <li>Add CSS filter support for "nth" psuedoclasses. Thanks paul@jCa8...!</li>
  <li>Limit length of log displayed on startup page. Thanks vwoodzell!</li>
  <li>Fix store location stats checking the wrong store. Thanks Matthias Treydte!</li>
  <li>Update default jSite bookmark.</li>
  <li>Fix JPEG filter omitting extension code.</li>
  <li>Fix a bug that prevented Sone from inserting updates when physical security was set high enough.</li>
</ul>

<p><h4>Changes in Freemail</h4></p>

<ul>
  <li>Add German, Italian, Brazilian Portuguese, Portuguese, and Simplified Chinese translations.</li>
  <li>Update French and Norwegian translations.</li>
  <li>Fix a bug that prevented working with LCWoT.</li>
  <li>Fix labelling SMTP bind address configuration option as IMAP.</li>
</ul>

<p><h4>Changes in FlogHelper</h4></p>

<ul>
  <li>Add Italian and Traditional Chinese translations.</li>
  <li>Update French and German translations.</li>
</ul>

<p><h4>Changes in KeyUtils</h4></p>

<ul>
  <li>Add French, Italian, Brazilian Portuguese, and Simplified Chinese translations.</li>
</ul>

<p><h4>Changes in JSTUN</h4></p>

<ul>
  <li>Update STUN server list.</ul>
</ul>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

    <a name="gsoc-2014"><h3>1st March 2014 - Freenet accepted into Google Summer of Code!</h3>
    <p>Freenet has once again been accepted into Google Summer of Code. This pays students to work
    on projects to improve Freenet over the summer. See <a href="https://wiki.freenetproject.org/Google_Summer_of_Code/2014">the wiki</a>
    for project ideas. Please contact us and demonstrate coding ability by
    solving a small bug or implementing a small feature before submitting a project proposal.
    We will be very happy to help with this, so feel free to get in touch on the <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl/">mailing list</a> or <a href="irc://chat.freenode.net/freenet">IRC</a>!</p>

    <p>Students can sign up from March 10th to March 21st. For details see <a href="https://www.google-melange.com/gsoc/homepage/google/gsoc2014">the Google Summer of Code site</a>.</p>

    <a name="build01459"><h3>21st January 2014 - Freenet 0.7.5 build 1459 released</h3>
    <p>Freenet 0.7.5 build 1459 is now available. Freenet will require Java 7 or
       higher in a future update. Java 6 has been at End of Life since February
       2013, which means it <a href="http://www.oracle.com/technetwork/java/javase/eol-135779.html">does not receive security updates</a>.
       There will be an alert warning people to upgrade before this happens.</p>

    <p>We now have a code signing certificate, so the Java-based installer for
       Mac OS X and Linux is signed, which will make it easier to run. In future
       releases more things will be signed.</p>

<p>In this release:</p>

<ul>
 <li>Fix configuration page partially allowing unsupported large bandwidth limits. (1 GBps or higher)</li>
 <li>Translation updates from Transifex.</li>
 <li>Network-level changes.</li>
 <li>Links to release notes and developer details are now to a specific version instead of just the latest.</li>
</ul>

<p>Thank you for using Freenet!</p>
<p>- Steve Dougherty</p>

    <a name="build01458"><h3>6th January 2014 - Freenet 0.7.5 build 1458 released</h3>
    <p>Freenet 0.7.5 build 1458 is now available. Google <a href="http://google-opensource.blogspot.se/2013/05/a-change-to-google-code-download-service.html">phased out Google
Code downloads</a>, so the main downloads on the website are now hosted
on Google Drive.</p>

<p>In this release:</p>

<ul>
<li>The update notification and statistics pages link to the release
    announcement and developer details.</li>
<li>More French and Italian translation thanks to <a href="https://www.transifex.com/projects/p/freenet/">volunteers on
    Transifex</a>. The French translation has complete coverage!</li>
<li>Network-level changes thanks to Quadrocube.</li>
<li>New Freenet installations are portable: they can run without changes
    after being moved between directories. To make an existing
    installation portable shut down Freenet and edit freenet.ini to make
    these paths relative:
   <ul>
   <li>fproxy.CSSOverride (if one is specified)</li>
   <li>node.masterKeyFile</li>
   <li>node.downloadsDir</li>
   <li>node.install.userDir</li>
   <li>node.install.tempDir</li>
   <li>node.install.pluginDir</li>
   <li>node.install.persistentTempDir</li>
   <li>node.install.cfgDir</li>
   <li>node.install.runDir</li>
   <li>node.install.nodeDir</li>
   <li>node.install.storeDir</li>
   <li>node.install.pluginStoresDir</li>
   </ul>
</li>
<li>On January 14th Oracle will deploy a new version of Java which
    <a href="https://blogs.oracle.com/java-platform-group/entry/new_security_requirements_for_rias">requires code signatures from a trusted certificate authority</a> to
    use JNLP. Freenet uses JNLP to launch the Linux and Mac
    installers. We currently use self-signed certificates, which will
    stop working. We are in the process of getting a trusted certificate.</li>
</ul>

<p>Thank you for using Freenet!</p>

<p>- Steve Dougherty</p>

	<a name="2013-gsoc-results"><h3>7th December 2013 - Results of Google Summer of Code 2013</h3>
	<p>Google Summer of Code 2013 resulted in many interesting projects. Before the next release we intend to review all project code for inclusion into the official version. Time permitting, we will also review previous years' projects, like the SVG and OGG filters.</p>
	<ul>
	<li><b>Android Node Reference Exchange:</b>This <a href="https://github.com/NiteshBharadwaj/Freenet">Android application</a>, <a href="https://github.com/NiteshBharadwaj/plugin-MDNSDiscovery-official">changes to the MDNSDiscovery plugin</a>, and <a href="https://github.com/NiteshBharadwaj/fred-staging/tree/Android-App-Merge">changes to Freenet</a> make it easier to connect directly to friends. The application can send references to the home node and exchange references with friends' phones in proximity. (<a href="https://emu.freenetproject.org/pipermail/devl/2013-September/037358.html">more information</a>)</li>
	<li><b>Content curation:</b>This <a href="https://github.com/leuchtkaefer/contentcuration/tree/master/ContentCuration">Freenet plugin</a> and <a href="https://github.com/leuchtkaefer/plugin-Library-staging/">changes to the Library plugin</a> allow publishing searchable lists of files. Currently these lists must be searched individually. (<a href="https://emu.freenetproject.org/pipermail/devl/2013-September/037354.html">more information</a>)</li>
	<li><b>Fred transport layer:</b>These changes to Freenet <a href="https://github.com/Quadrocube/fred-staging/tree/transport-layer-modifications">improve direct file transfer performance</a> and <a href="https://github.com/Quadrocube/fred-staging/tree/link-stats-tracking">add more diagnostics</a>. The network changes are already part of the upcoming build 1458, but diagnostics require deploying jFreeChart, and so will take more effort. (<a href="https://emu.freenetproject.org/pipermail/devl/2013-September/037337.html">more</a> <a href="https://emu.freenetproject.org/pipermail/devl/2013-September/037347.html">information</a>)</li>
	<li><b>Infocalypse Web of Trust support:</b>These changes to the <a href="https://bitbucket.org/operhiem1/wiki_hacking">Infocalypse DVCS</a> and <a href="https://github.com/thynix/plugin-wot-staging/tree/session-login">Web of Trust plugin</a> add support to Infocalypse for Web of Trust identities and pull requests. The Web of Trust changes are merged, but the Infocalypse maintainer has not been reachable so far. A web interface <a href="https://github.com/Thynix/plugin-DVCS-WebUI">Freenet plugin</a> was worked on but not completed. (<a href="https://emu.freenetproject.org/pipermail/devl/2013-August/037247.html">more</a> <a href="https://emu.freenetproject.org/pipermail/devl/2013-September/037333.html">information</a>)</li>
	</ul>
	
    <a name="2013-tor-bust"><h3>5th August 2013 - Statement on the recent Freedom Hosting (Tor) bust</h3>
    <p>According to <a href="http://arstechnica.com/tech-policy/2013/08/alleged-tor-hidden-service-operator-busted-for-child-porn-distribution/">the press</a>,
    half of the hidden sites on Tor are now down, apparently connected to the arrest of a man allegedly 
    behind Freedom Hosting, a hosting service for Tor hidden services. Some of these sites were said to offer 
    illegal content and were apparently run by the FBI for two weeks, using a Javascript-based browser 
    exploit to try to find their users.</p>
    
    <p>This has had no effect on Freenet and could not happen on Freenet. Tor hidden services are centralised: 
    A hidden service on Tor is run by a single server somewhere, and if this server is found, the whole site 
    can be shut down, or compromised. In this case half the hidden sites on Tor were run on the same group of 
    servers! See the <a href="https://blog.torproject.org/blog/hidden-services-current-events-and-freedom-hosting">Tor blog</a> and
    <a href="https://lists.torproject.org/pipermail/tor-announce/2013-August/000089.html">mailing list</a>.</p>
    
    <p>On Freenet, anything you upload is distributed across the network across thousands of separate nodes 
    all over the world, and will remain available for as long as it remains sufficiently popular: Freenet is 
    a distributed data storage network designed to prevent censorship, provide anonymity and be hard to block. 
    To see more information on the difference between Freenet and Tor, see 
    <a href="https://freenetproject.org/faq.html#tor">our explanation in the FAQ</a>.</p>
    
    <p>Also, the Javascript exploit mentioned would not have worked on Freenet because Freenet removes 
    Javascript by default. The Tor Browser Bundle has an option to block Javascript. We recommend that you 
    enable this if you use Tor.</p>
    
    <p>Furthermore, there was no attack against Tor itself: As far as we know, no users of the major 
    "darknets" (Freenet, Tor and I2P) has been traced by attacking the networks, by law enforcement or anyone 
    else. In this case, it appears to have been user error, not a problem with Tor itself. Similarly on 
    Freenet, users need to be careful, and Freenet will often tell you when you are about to do something risky.</p>
    
    <p>Having said that, Freenet's security is not perfect, and there are some known (but theoretical) 
    weaknesses, so it might be possible for an attacker with relatively limited resources to trace individual Freenet 
    contributors. Most of Freenet's weaknesses can be addressed by making long-lived connections with people 
    that you trust, i.e. building a friend-to-friend "darknet". This functionality is already a part of the 
    regular Freenet software, but we need more users who use Freenet in friend-to-friend mode to improve anonymity.</p>
    
    <p>We have planned further improvements, which should greatly improve security (censorship resistance, 
    anonymity and resistance to blocking), speed and usability. The expanding online surveillance from both 
    governments (e.g. PRISM) and private corporations clearly show that tools such as Freenet, TOR and I2P are 
    essential for a healthy democracy.</p>
    
    <p>Please help us secure freedom of access to information by contributing to the Freenet-project with 
    code, donations, translations, or just by running a node or creating content (anonymously)!</p>
    
    <p>Volunteers - especially developers - are always very welcome. Feel free to contact us, through <a href="/irc.html">IRC 
    online chat</a>, <a href="/lists.html">the mailing lists</a>, or on Freenet itself in the "freenet" board on FMS.</p>
    
    <p>For press enquiries please contact <a href="mailto:ian@freenetproject.org">Ian Clarke</a>.</p>
    
    <a name="2013-second-developer-xor"><h3>26th June 2013 - Freenet gets a second paid developer to fix the Web of Trust!</h3>
    <p>Long time coder xor (also known as p0s) has agreed to work, in a paid role, for us on fixing the Web of Trust plugin. This is a crucial component of many Freenet plugins:</p>
    
    <ul><li><b>Sone</b>, an anonymous social network / microblogging tool.</li>
    <li><b>Freemail</b>, a private and untraceable email over Freenet system.</li>

    <li>A filesharing system as yet unnamed which a student is working on.</li>
    <li>Extensions to Infocalypse, being worked on by another student, a tool for managing source code which is vital to developing software over Freenet.</li>
    </ul>
    
    <p>See the Freenet Social Networking Guide for how to load the first 2 plugins.</p>
    
    <p>xor is well qualified for the role as he wrote most of the current code in the Web of Trust. The immediate priority will be to improve stability and performance by implementing a new more efficient FCP API. After that further optimisations are planned.</p>
    
    <p>Freenet relies on unpaid volunteer developers as well as a few key paid developers. Toad (Matthew Toseland) is returning to full time work for Freenet after a study break, although he is off to university in October, and xor is just starting working for Freenet.</p>
    
    <p>Improving the Web of Trust should substantially improve the performance of the key tools mentioned above and may be used by more in the future. Thanks to all our developers and donors!</p>
    
    <a name="2013-summer-of-code-accepted"><h3>8th April 2013 - Freenet accepted by Google Summer of Code!</h3>
    <p>Freenet has once again been accepted into Google Summer of Code 2013. This pays students to work
    for us, as paid developers, over the summer. See <a href="https://wiki.freenetproject.org/Google_Summer_of_Code/2013">here</a>
    for more details and ideas for projects. You should contact us and demonstrate your coding ability by
    solving a small bug or implementing a small feature before we will consider you; but we will be very
    happy to help you, so please contact us via the mailing list or IRC!</p>
    
    <p>Students can sign up from April the 22nd to May 3rd. See <a href="https://google-melange.appspot.com/gsoc/homepage/google/gsoc2013">the 
    official google site</a>.</p>
    
    <a name="2013-sadly-not-an-april-fool"><h3>Build 1439 and 1440</h3></a>
    <p><b>Update: Instructions for fixing nodes that fail to start after updating to 1439: 
    <a href="https://emu.freenetproject.org/pipermail/devl/2013-April/036892.html">here</a>.</b></p>
    <p>Please do not upgrade to build 1439. Wait for build 1440. If your node is unable to start up after
    upgrading automatically to 1439, you may need to use the last-resort update scripts ("update.cmd" or
    "update.sh"). Please come to the IRC channel if you have any difficulty with this. This will only happen
    on nodes that upgraded to 1439 over a short period before 1440 was deployed, and only if they have 
    friends (darknet peers). For various reasons the build wasn't adequately tested. I (Toad) am very sorry 
    about this and have put in place a permanent fix (this was ultimately due to a 
    don't-call-methods-until-constructor-is-finished issue). Sorry folks...</p>
    
    <p>Apart from this embarrassing mistake, 1439/1440 includes an important fix to the warnings shown when
    a file can't be parsed by the content filter (apparently this caught out at least one Freenet user),
    and a new type of probe request which will allow us to determine whether a theory about load management
    is correct (that almost all nodes are only using half their capacity). Thanks!</p>
    
    <p>Sorry about this. And no, sadly, this is not an April Fool's joke.</p>
    
    <p><i>Update</i>: This seems to have not had much of an impact on the network. Looks like it didn't
    affect most people and the mess has been cleaned up. Thanks for your patience, it won't happen again!</p>
      
    <a name="2012-traceback-attack"><h3>11th September 2012 - Response to the University of Hawaii's "Experimental Study of Accountability in Existing Anonymous Networks"</h3></a>
    <p>Some academics <a href="http://www.ee.hawaii.edu/~dong/traceback/index.htm">have published</a> 
    a couple of attacks against Freenet, and they appear to be working on more as part of a project to 
    unmask anonymous Freenet users. Build 1411, which was released on the 3rd of September, makes their 
    main attack largely impractical.  Nonetheless, we are working on improvements to both make this 
    attack harder and to solve some of the <a href="https://freenetproject.org/faq.html#attack">other 
    known attacks</a>. You can learn more about the attacks and our solution to them on our chief 
    developer's <a href="http://amphibian.dyndns.org/flogmirror/#20120911-security">personal blog</a>.</p>
    
    <p>We welcome all work to understand Freenet's security and expose any problems with it, although we
    would suggest that next time they might let us know before they make the paper public, as is common 
    practice in the security community.</p>
    
    <p>Finally, the long term solution is to build a darknet, a Freenet network where people only 
    connect directly to people they trust. That means, get your friends using Freenet, and then add 
    them as Friends on your node. When enough people use Freenet and form darknet connections, we 
    won't need opennet, and this makes all attacks dramatically harder. We will work on making this 
    easier and faster in the near future, as well as fixing the Pitch Black attack.</p>
    
    <a name="freedom-house-april-2011"><h3>13th April 2011 - Freenet top anti-censorship tool in survey of Chinese users!</h3></a>
    <p>A <a href="http://www.freedomhouse.org/sites/default/files/inline_images/Censorship.pdf" alt="full report">report</a> by 
    <a href="http://freedomhouse.org/">Freedom House</a> surveyed users in 
    Azerbaijan, Burma, <a href="http://www.freedomhouse.org/sites/default/files/LOtF_China.pdf" alt="Summary of results in China">China</a>
    and Iran for their perceptions of and preferred tools for bypassing local government censorship. 
    In China, Freenet was the only anti-censorship tool to achieve 5 stars, and 
    the third most widely used overall.</p>
    
	<a name="big-donation-september-2010"><h3>24th September 2010 - Another large donation, and brief status update</h3></a>
	<p>Once again Google's Open Source team has donated US$18,000 to the Freenet Project to support the 
	ongoing development of the Freenet software.</p>
	
	<p>In particular, we will use these funds to complete Freenet 0.8, which will be 
	released later this year, and will include additional performance improvements, 
	usability work, and security improvements.  It will also include new ways to 
	communicate over Freenet, including "Freetalk", a forums discussion system employing 
	a novel "web of trust" approach to prevent spam in an entirely decentralized way.</p>

	<p>In other news, the Summer of Code was a qualified success, with two of our students 
	performing very well. Support for ogg vorbis/theora will be merged soon, and the new 
	more efficient transport layer will be merged a bit later.</p>
	
	<p>Freenet's user base has been growing fairly steadily, and we have over 20,000 
	regular users.  Our current work is focused largely on Freetalk and rewriting the 
	load management code for higher and more consistent performance.</p>
	
	<a name="sorry-again-1253"><h3>14th June, 2010 - Serious bug, please upgrade immediately</h3></a>
	<p>Freenet build 1253 fixes a very serious bug, and all users should upgrade immediately, especially those
	running 32-bit x86 systems. This build is "mandatory", meaning it will not connect to anything before 1252.
	The bug was in the native FEC acceleration - this is a native (C, not Java) library used to speed up 
	splitfile decoding (a stage in downloads related to improving the chances that a big file will be 
	retrievable by adding some "check blocks" or redundant data in case some of the original data blocks can't 
	be found). It causes segfaults on 32-bit Windows systems and probably 32-bit Linux systems too. It has been
	exploited "in the wild" (on Frost) to segfault nodes when they access a specific Frost message. We do not 
	know whether this could be turned into something more serious, so we have turned off all native FEC 
	acceleration for now; Freenet will be slightly slower when decoding downloaded files, but will not 
	segfault. We would welcome help with auditing the library code involved, if any C/JNI gurus can spare the
	time; it is most likely a problem with the JNI interface to the Onion FEC code.</p>
	<p>Other changes in 1251/1252/1253 are somewhat more hopeful:</p>
	<ul><li><b>Even splitfile splitting</b> Large files on Freenet are divided into 32KB blocks, which are 
	then grouped into "segments" of up to around 4MB. Until 1251, all but the last segment would be exactly
	4MB, so the last segment could be much smaller than this - in some cases having just one block, or just
	a few blocks. This could cause some downloads to get stuck with just a few blocks remaining. Now all the 
	segments are the same size, and there are other tweaks. Unfortunately this triggered the above bug.</li>
	<li><b>New content filter infrastructure</b> Freenet filters various types of data, for example HTML, to 
	ensure that they cannot give away your IP address. One of our Summer of Code students (Spencer) has been
	working on improving this, and the first part of his work has been merged. Filtering now happens at a 
	lower level, and can therefore be used by FCP clients and for persistent downloads. This also paves the 
	way for efficient handling of large files when Spencer implements filters for multimedia formats later
	this year.</li>
	</ul>
	<p>Sorry about this folks. The network will be somewhat chaotic for a few days and may be slower than 
	usual because of the mandatory build, but most of it seems to have upgraded now. Thanks for your patience.
	You can see a fuller account on <a href="http://amphibian.dyndns.org/flogmirror/">Toad's Blog</a>.</p>

	<a name="sorry-folks-1248"><h3>8th June, 2010 - Sorry, "freenet.ini is missing", and 1249</h3></a>
	<p>Many Windows Freenet installs were broken yesterday due to a bug, with an error message that the launcher
	was unable to find the file freenet.ini. This was actually due to a long-standing bug fixed in build 1249,
	but the update to 1248 seems to have triggered it. Sorry folks. All you have to do to fix it is rename 
	freenet.ini.tmp to freenet.ini (in the directory you installed Freenet to, usually C:\Program Files\Freenet).</p>
	<p>The main change recently, apart from many bug fixes:</p>
	<p>There is a new way of indexing freesites (for the built-in search function), using the new Spider 
	plugin and a new version of the existing Library plugin. This is based on infinity0's Summer of Code work 
	last year. Hopefully some anonymous person will start running a freesite index using this new tool soon.
	This should be faster and easier both for the index owner (person who runs Spider) and the users searching
	for content.</p>

	<a name="gsoc-2010-accepted"><h3>26th April, 2010 - Summer of Code students announced!</h3></a>
	<p>The Freenet Project has 3 students accepted in Google's <a href="http://feedproxy.google.com/~r/GoogleOpenSourceBlog/~3/FnmsrUS2TBU/this-years-google-summer-of-code.html">Summer of Code</a>. 
	Google will pay these students to work for us over the summer. They will be working on:</p>
	<ul><li><b>Low level networking improvements</b> - Martin Nyhus will be working on making Freenet's 
	low level networking work more efficiently and flexibly. This will improve performance and pave the
	way for transport plugins in the long term.</li>
	<li><b>New content filters</b> - Spencer Jackson will be working on filters for Ogg audio and video formats,
	amongst others, and improvements to the backend filtering code. Freenet has to filter content to ensure that
	it does not contain any code that might breach your anonymity, e.g. "web bugs". These can also exist in 
	media files.</li>
	<li><b>Distributed searching</b> - Tatyana Pyatigorskaya will be working on distributed searching and 
	filesharing. This includes extending Ximin Luo's work on new index formats last year to support searching
	indexes published through your Web of Trust, and work on an easy to use interface for maintaining a file index.</li>
	</ul><p>Good luck to all our students! Much of last year's work has either been merged or will be merged
	soon, and one of last year's students is a mentor this year. Thanks also to <a href="http://code.google.com/soc/">Google</a>.</p>

	<a name="gsoc-2010"><h3>18th March, 2010 - Freenet accepted into Google Summer of Code 2010!</h3></a>
	<p>The Freenet Project has been accepted by Google for a fifth year in Google Summer of Code! This
	offers students the opportunity to be paid to work for a lively and significant open source project 
	over the summer, rather than chasing the increasingly scarce menial labour market! Flip bits not burgers!</p>
	<p>You should submit at least two proposals for projects within Freenet as we often get several 
	students chasing the same tasks. You can see some ideas for projects 
	<a href="https://wiki.freenetproject.org/Google_Summer_of_Code/2010">here</a>. Apply <a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2013">here</a>.</p>
	<p>We will help you to fill in technical details, understand exactly what we need. We also welcome
	new ideas and approaches, please contact us, on our devl <a href="lists.html">mailing list</a>,
	or <a href="https://webchat.freenode.net/?randomnick=1&channels=freenet">IRC</a>. You will need to 
	demonstrate basic coding ability by fixing a minor bug or implementing a minor feature; you should
	have a look at <a href="https://bugs.freenetproject.org/">the bug tracker</a>, which may also be
	a source of project ideas. <a href="https://wiki.freenetproject.org/">The new wiki</a>, and 
	<a href="https://old-wiki.freenetproject.org/">the old wiki</a> are also good sources of ideas and
	documentation. If you want to work for us over summer, please <a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2013">apply</a>!</p>
	<p>PS we have reinstated uservoice, after their support contacted us via our bug tracker and seem to have largely cleared up the spam problem.
	<a href="https://freenet.uservoice.com/">Click here</a> to make suggestions for how to improve Freenet!</a></p>

	<a name="build-1243-opennet-changes"><h3>17th March, 2010 - Opennet performance improvements and build 1243</h3></a>
	<p>Build 1243 is now out. This contains many changes aimed at making new nodes get up to speed faster by getting 
	connected to many other nodes as quickly as possible. This "announcement" or "bootstrapping" process, which only
	happens if you have opennet enabled (i.e. your network security level is LOW or NORMAL) also happens when your
	node has been offline for an extended period (hours). Let us know how it goes! We always welcome feedback, particularly
	<a href="https://bugs.freenetproject.org/">bug reports</a>.</p>

	<a name="new-paper-march-2010"><h3>9th March, 2010 - New paper added</h3></a>
	<p>A new paper has been added, <a href="/papers/freenet-0.7.5-paper.pdf">Private Communication Through a Network of Trusted Connections: The Dark Freenet</a>, written by Oskar and Vive (two of our theoreticians) with some help from Toad (chief coder). This focuses on the architecture of the network, rather than on the routing and swapping algorithms, which <a href="/papers.html">other papers</a> have described in detail. It has a slight focus on darknet, but should be of interest to anyone interested in how the network works. It also has some new simulations...</p>

	<a name="status-update-jan-2010"><h3>4th February, 2010 - Freenet status update</h3></a>
	<p>Time for a status update...</p>
<h2>BUILD 1240</h2>
<p>Our last stable build, 1239, was in November. We have just released a new one, 1240. This has many changes (opennet stuff, optimisations, all sorts of stuff), which I list in the mail about it. One of the most important is that there are several new seednodes, and many dead ones have been removed. I have tested it 3 times today and it's bootstrapped fast each time, although yesterday it bootstrapped very slowly one time.</p>
<h2>NETWORK STATUS AND NETWORK STATISTICS</h2>
<p>Evan Daniel has been doing some useful work analysing the network. Amongst other things, he has discovered that:</p>
<ul><li>The Guardian article, in December, which was reprinted around the world, has more than doubled the size of our network, although there is a slight downward trend now. This may be due to seednodes issues and not having had a build since November.</li>
<li>We have around 4500-7000 nodes online at any given time.</li>
<li>Over 5 days, we have around 14000 non-transient nodes.</li>
<li>For nodes online at any one time, roughly 37% are 24x7 nodes (96% uptime average), 33% are regular users (56% average uptime), and 30% are occasional or newbie nodes (16% average uptime).</li>
</ul>
<h2>EMU IS DEAD, LONG LIVE OSPREY</h2>
<p>We have finally gotten rid of emu! Our faithful and powerful dedicated server supplied at a discount by Bytemark is no more. We now have a virtual machine called Osprey, which does most of the same job, for a much lower cost, and has a much simplified setup so should be easier to maintain. We have tried to outsource services, for example we use Google Code for our downloads, but some things will have to stay under our direct control for some time to come e.g. mailing lists and the bug tracker.</p>
<p>You may have some difficulty with the update scripts, if you use update.sh / update.cmd. If it doesn't work, try updating the script manually from <a href="https://downloads.freenetproject.org/latest/update.cmd">https://downloads.freenetproject.org/latest/update.cmd</a> (or <a href="https://downloads.freenetproject.org/latest/update.sh">update.sh</a>)</p>
<h2>WOT, FREETALK, RELATED THINGS AND OTHER PLUGINS</h2>
<p>Xor (also known as p0s) continues to work on the Web of Trust and Freetalk plugins. These are approaching the point where we can make them loadable from the plugins page, and then bundle them, enabled by default.</p>
<p>WoT is the backend system which implements a pseudonymous web of trust, which functions in a similar way to that in FMS. You can create identities, assign trust to other identities, announce your identity via CAPTCHAs and so on. This is the Community menu, from which you can see your identities and other people's, and the trust relationships between them. WoT is used by Freetalk, FlogHelper, and probably soon by distributed searching, real time chat and other things.</p>
<p>Freetalk is a spam-resistant chat system based on WoT. This is similar to FMS, but it will eventually be bundled with Freenet, and will be a part of it by default. You will be able to embed a Freetalk board on your freesite. FlogHelper is a WoT-based plugin for writing a flog (freenet blog), which is very easy to use, but uses WoT to manage identities. I would have bundled FlogHelper months ago, but WoT isn't ready yet and FlogHelper needs it.</p>
<p>WoT should be ready soon. Recently a major issue has been discovered with the trust calculation algorithm, after that is fixed and some minor issues, WoT will become a semi-official plugin, which will sadly require flushing the existing "testing" web of trust, so sadly all old messages and identities will go away. Freetalk needs more work, about 50% of the bugs marked for 0.1 on the roadmap are fixed at the moment.</p>
<p>In build 1240, we pull in a new version of Library. This is a great improvement over the old version, it is faster, it supports embedding a search on a freesite, and has many bugs fixed. However searching for common terms can still cause out of memory crashes.</p>
<p>There is another issue with Library: infinity0 spent last summer creating a scalable index format for Library, which should make it a lot easier to insert and maintain big indexes. We will soon change the spider to use this new format, and in the process we expect to greatly improve performance for writing indexes, so it doesn't take a week any more and is done incrementally. I realise this has been promised before, but it is important, so it will happen sooner or later, hopefully sooner.</p>
<p>Full Web of Trust-based distributed searching, with a focus on filesharing, is on the distant horizon at the moment. infinity0 might be able to do some work on it as part of his studies, we'll see. It won't be in 0.8.0.</p>
<h2>PRIORITIES AND RELEASES</h2>
<p>We would like to get 0.8 out soon, or at least a beta of 0.8. Several major issues:</p>
<ul><li>The windows installer needs to be fixed on 64-bit. This is being worked on.</li>
<li>Freetalk must be ready.</li>
<li>Auto-configuration of memory limits in the installers, and asking the user about memory usage (at least in some cases) is relatively easy and important, but not vital.</li>
<li>Substantial improvements to opennet, particularly making nodes announce onto the network and get where they should be as quickly as possible.</li>
<li>Substantial improvements to data persistence. We have done much here already but there is more to do.</li>
<li>Library must work well and fast out of the box. This means amongst other things the new spider mentioned above.</li>
<li><b>MANY BUG FIXES!</b> The first beta does not need to be perfect, but there are some critical issues that need dealing with, such as the fact that nodes often don't resume properly after being suspended for a while.</li>
</ul>
<p>Please test Freenet, and report any bugs and usability issues you find on <a href="https://bugs.freenetproject.org/">the bug tracker</a> or via Freetalk board en.freenet (note that this will be wiped soon so if after a new Freetalk release it is wiped you may need to resend).</p>
<h2>OPENNET IMPROVEMENTS</h2>
<p>We have many ideas on how to improve opennet bootstrapping (make nodes assimilate into the network more quickly), and to improve opennet generally. Some of these are implemented in 1240, including many bugfixes. More will be put out over time so we can see their impact. Improving opennet should improve performance for the majority of users who don't run 24x7 and it should improve performance for everyone else too, as those nodes will get connected and start doing useful work more quickly.</p>
<h2>DATA PERSISTENCE</h2>
<p>We have many ideas on how to improve data persistence. There is a lot of capacity on the network, yet data seems to become inaccessible quite quickly (stats below). I am convinced that improving data persistence will improve Freenet's usability and perceived performance immensely. The continued popularity of insert on demand on uservoice demonstrates this as much as anything: People want a system that works! IMHO we can greatly improve things without resorting to insert on demand, although filesharing clients based on distributed searching may eventually offer it (but there are serious security issues with insert on demand).</p>
<p>Evan is convinced that mostly poor data persistence is not due to data falling out of stores, but due to the small number of nodes that stored the data (as opposed to caching it) going offline or becoming unreachable. We have increased the number of nodes that store data, we have made the node use the store for caching if there is free space, we have done various things aimed at improving data persistence, and there is much more we can do. An immediate question is whether the security improvements gained last year by not caching at high HTL have broken many inserts by making them not get cached on the right nodes; we will test this in 1241. A related question is why inserting the same key 3 times gives such a huge performance gain relative to inserting it once; we will investigate this soon after. We will probably triple-insert the top blocks of splitfiles soonish, but the bigger prize is to achieve the 90%+ success after a week that we see with triple-insertion of a single block, and this may well be possible with some changes to how inserts work...</p>
<p>Finally, the redundancy in the client layer could be a lot smarter: We divide files up into groups of 128 blocks, called segments, and then add another 128 "check blocks" for redundancy. Unfortunately this means that sometimes the last segment only has 1 block and 1 check block, and so is much less reliable than the rest of the splitfile. We will fix this.</p>
<p>We have been collecting statistics on data retrievability over time. The below are "worst case" in that they relate to single CHK blocks, with no retries. Real life, with many retries (at least 2 for a direct fetch and more if the file is queued), and with large, redundant splitfiles, should be substantially better than these numbers. Every day we insert 32 blocks and fetch a bunch of 32 blocks from 1 day ago, 3 days ago, 7 days ago, etc. There are two of these running to get more data, so I am just showing both results here. The percentages are the proportion of the original insert that is still retrievable:</p>
<table border="0">
<tr><td>1 day</td><td>76% / 77%</td></tr>
<tr><td>3 days</td><td>66% / 70%</td></tr>
<tr><td>7 days</td><td>60% / 61%</td></tr>
<tr><td>15 days</td><td>48% / 48%</td></tr>
<tr><td>31 days</td><td>36% / 33%</td></tr>
<tr><td>63 days</td><td>21% / 19%</td></tr>
</table>
<p>Now, here's an interesting one. In each case we insert a 64KB CHK splitfile - that is, one block at the top and four underneath it. We insert one three times, and we insert three different ones once each. We then pull them after a week. We can therefore compare success rates for a single block inserted once, a single block inserted 3 times, and a simulated MHK, that is, a block which has been re-encoded into 3 blocks so that we fetch all of them and if any of them succeeds we can regenerate the others.</p>
<p>Total attempts where insert succeeded and fetch executed: 63</p>
<p>Single keys succeeded: 61</p>
<p>MHKs succeeded: 58</p>
<p>Single key individual fetches: 189</p>
<p>Single key individual fetches succeeded: 141</p>
<p>Success rate for individual keys (from MHK inserts): 0.746031746031746</p>
<p>Success rate for the single key triple inserted: 0.9682539682539683</p>
<p>Success rate for the MHK (success = any of the 3 different keys worked): 0.9206349206349206</p>
<h2>USER INTERFACE AND USABILITY</h2>
<p>Ian's friend pupok is working on a new AJAXy user interface mockup for Freenet. sashee's web-pushing branch, which makes the user interface a lot more dynamic without making it look much difference, should be merged soon, but turned off by default, since it has some nasty bugs. When it is turned on, it solves the age-old parallel connections bug, showing individual progress for each image without hogging your browser's limited number of connections (6 or 8 on modern browsers). Both of these may miss 0.8.</p>
<p>More broadly on usability, usability testing is always welcome: Persuade a friend to install Freenet, watch them do it, don't help them unless they get really stuck, report any problems they have or any comments they make about how it could be better.</p>

	<a name="more-peers"><h3>21st August, 2009 - Freenet increases peers limit (#1 on uservoice)</h3></a>
	<p>Freenet 0.7 build 1231 solves what was <a href="https://freenet.uservoice.com/pages/8861-general/suggestions/93039-release-the-20-nodes-barrier?ref=title">
	the number one uservoice request</a>. Until now, most Freenet nodes have had exactly 20 connections. Now,
	the number of connections (opennet peers, or "Connections to Strangers") will vary according to how much
	upstream bandwidth you have, between 10 and 40. So slow nodes will have fewer peers (trading slightly less
	effective routing for more efficiency) and fast nodes will have more peers. Overall we expect this will
	improve speed, but it is difficult to simulate these things, so lets find out!</p>
	
	<p>Also, <a href="http://code.google.com/soc/">Google Summer of Code</a> is now over, and all of our
	students have passed. Much of their work is still in the process of being merged into Freenet itself.
	Still to come, better friend to friend file transfers, a new CSS filter, a filter for ATOM feeds, a new
	search plugin with many improvements and a new scalable index format, and much greater (but still 
	optional) use of javascript in the web interface to make it more responsive.</p>

	<a name="xml-vuln"><h3>8th August, 2009 - Upgrade your Java Virtual Machine <b>now</b>: severe XML vulnerability affecting Freenet</h3></a>
	<p>If you are running Freenet on Java prior to 1.6 build 15 or 1.5 build 20, please upgrade as soon as possible.
	Until you update Java, Freenet will disable the search function and various other plugins to
	minimise risk. However, if you have untrusted people on your LAN (local network),
	we recommend you <b>shut down Freenet immediately</b> until you are able to upgrade
	your Java. Also, do not run Thaw, which is known to be vulnerable, until you have
	upgraded, and do not accept jSite config files from anyone. Build 1228 of 
	Freenet will tell you if your Java is vulnerable. Windows users generally will be 
	notified by Java when updates are available; the situation may be more tricky for 
	Linux and Mac OS/X users as they will have to wait for an update from their linux distributions
	or from Apple respectively.</p>
	
	<p>For more details, see <a href="http://www.cert.fi/en/reports/2009/vulnerability2009085.html">here</a>.
	The problem is a remote code execution vulnerability affecting Java and also some
	other programs using certain XML parsing libraries. It was <a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2009-2625">initially thought</a> to
	be purely a denial of service attack, but there is exploit code circulating.</p>

	<a name="build1226"><h3>30th July, 2009 - Various security improvements and preparation for Bloom filter sharing in new stable build</h3></a>
	
	<p>
	Build 1226 is now available, including many changes. Existing Freenet nodes will
	update automatically. Some of the more interesting new features include:</p>
	<ul>
	<li><b>Finally fixing <a href="http://www.theregister.co.uk/2005/05/13/freener_not_so_anonymous/">The Register's attack</a>!</b><br>
	In 2005, The Register discovered what many of us had known for some time - that
	Freenet caches everything you visit in your datastore, and therefore that if
	your computer is seized or stolen, the bad guys may be able to determine what
	you have been browsing. Or they could even do it remotely by probing your
	datastore. This is now fixed. Freenet does not store anything that you download,
	visit, or upload, in your datastore. However, to maximise performance, we do
	have a private cache of freesites you have visited, called the "client cache",
	and we have a "slashdot cache" which caches everything else but only for 30
	minutes, to help with <a href="https://wiki.freenetproject.org/UltraLightweightPassiveRequests">propagating Frost/FMS posts</a>
	and flash floods. We had planned to fix this with encrypted tunnels (formerly
	known as premix routing), but that is a difficult project which may cost a lot
	of performance. The changes in this build may reduce performance slightly, but 
	they will enable new things which should greatly improve performance, as well as
	improving Freenet's usefulness in hostile regimes. No security system is 
	perfect, but nonetheless Freenet may be better for a specific application than 
	the alternatives, <b>especially if you can use darknet</b>, and darknet Freenet 
	can function where very little else will.</li>
	<li><b>Encryption for sensitive local data</b><br>
	Both the new client cache and the downloads/uploads database can now be encrypted.
	This is controlled by the "physical security level" setting. If you set this to
	LOW, nothing is encrypted, not even temporary files, and Freenet will use less
	CPU and work slightly faster. If you set it to NORMAL or higher, Freenet 
	now encrypts your client cache and downloads database. At NORMAL, the keys are
	kept in a file master.keys, so if you securely delete this file (or click the
	panic button on the downloads page), both are gone. At HIGH, the keys are still
	in master.keys, but it is password-protected. At MAXIMUM, the keys are not 
	stored at all, they are different every time you start Freenet; this means
	that your download queue will only last until the next restart, but at least
	you can be sure that if you restart the node, nobody can tell what you were
	doing with it. So you have detailed control over the tradeoff between security,
	convenience and performance. This allows those with slow computers to use LOW,
	and those who live in hostile regimes where their computer is likely to be
	seized to use HIGH or MAXIMUM.</li>
	<li><b>Preparation for Bloom filter sharing</b><br>
	There were two reasons for all this. The first is to improve security for those
	living in hostile regimes where their computer may be seized and they may get
	into trouble for what they have been doing on Freenet. The second is to prepare
	for the big performance feature for 0.8, Bloom filter sharing. Essentially, the
	idea is that we tell our peers what keys we have in our datastore using a highly 
	compressed data structure called a Bloom filter. We can then tell immediately
	when one of our peers has the block we are looking for, potentially avoiding
	searching and transferring the data through many other nodes. This should 
	improve performance considerably, reducing latency, increasing download speeds,
	and making it easier to find rare content. Watch this space!</li>
	</ul>

      <a name="big-donation-german-finance"><h3>8th July, 2009 - Big
      donation from <a href="http://www.finanzvergleich.de">German
      finance site</a></h3></a>

      <p>
	The German financial services comparison site, <a href="http://www.finanzvergleich.de">Finanz Vergleich</a>
	has given us $1,500 to fund ongoing development. This will go
	mainly towards ongoing work on Freenet's stability and
	usability. Thanks!
      </p>

      <a name="freenet-0-7-5-released"><h3>12th June, 2009 - Freenet 0.7.5 released!</h3></a>
      <p>
	The Freenet Project is very pleased to announce the release of
	Freenet 0.7.5.
      </p>
      <p>
	Freenet is free software designed to allow the free exchange
	of information over the Internet without fear of censorship,
	or reprisal. To achieve this Freenet makes it very difficult
	for adversaries to reveal the identity, either of the person
	publishing, or downloading content. The Freenet project
	started in 1999, released Freenet 0.1 in March 2000, and has
	been under active development ever since.
      </p>
      <p>
	Freenet is somewhat unusual in that you can publish content to
	Freenet, and then disconnect from the network.  This content
	will remain available to other Freenet users, although it may
	eventually be deleted if nobody is interested in it.  Freenet
	will copy and move the content around the network according to
	demand, making it very difficult for an adversary to remove
	content.  Freenet will automatically create more copies of
	popular content to ensure that it will always be available.
      </p>
      <p>
	Freenet 0.7 introduced the "darknet" concept, allowing users
	to only connect to their trusted friends (and through them to
	their friends' friends, and the entire network), greatly
	reducing their vulnerability to attack. You can use Freenet
	even if you don't know any other Freenet users, it just won't
	be as secure.
      </p>
      <p>
	Freenet 0.7.5 features major improvements to performance and
	usability, as well as improvements to security and
	robustness. In particular:
      </p>
      <ul>
	<li>
	  Freenet
	  now <a href="http://google-opensource.blogspot.com/2009/05/improving-freenets-performance.html">uses
	  a database</a> to store longer-term data that must survive a
	  restart.  This increases Freenet's speed and reduces its
	  memory usage.  In particular, you can now have almost any
	  number of downloads and uploads in progress without worrying
	  about memory usage.
	</li>
	<li>
	  Improvements to the web interface make it clearer what you
	  can do with Freenet, show progress when loading a page or
	  file will take more than a few seconds, integrate search
	  into the browse page, and generally improve usability in
	  many areas.
	</li>
	<li>
	  Significantly improved performance for inserting and
	  retrieving files and especially pages, and also for
	  Freenet's initial connection to the network.
	</li>
	<li>
	  A new installer for Windows which works with Vista as well
	  as Windows XP/2000 (Freenet also works on Mac and Linux
	  systems).
	</li>
	<li>
	  Many other optimizations.
	</li>
	<li>
	  Lots and lots of bug fixes!
	</li>
      </ul>

      <p>
	There are versions of Freenet 0.7.5 for Windows, Mac, and
	Linux.  They can be downloaded from:
      </p>
      <p><a href="download.html">https://freenetproject.org/download.html</a></p>
      <p>
	If you have any difficulty getting Freenet to work, or any
	questions not answered in the <a href="/faq.html">faq</a>, please
	join us
	on <a href="https://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	in the #freenet channel at irc.freenode.net, or email
	the <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/support/">support
	  mailing list</a>. If you have any suggestions for how to
	improve Freenet, please
	visit <a href="https://freenet.uservoice.com/">our uservoice
	  page</a>.
      </p>
      <p>
	There is a lot of work still to do on Freenet, particularly
	when it comes to ease of use.  If you have Java programming or
	web design skills, or would like to help translate Freenet
	into your own language, and would like to help us improve
	Freenet, please join
	our <a href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl/">development
	mailing list</a> and introduce yourself.
      </p>
