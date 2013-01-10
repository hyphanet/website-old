      <h1>Documentation</h1>
      <div id="navigation">
	<p> Go to :
	  <a href="install.html">Install</a>
	  <a href="connect.html">Connect</a>
	  <a href="content.html">Content</a>
	  <a href="understand.html">Understand</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="thaw.html">Thaw</a>
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Install Freenet</h2> 
      <p>
	To install Freenet might not be as difficult as you might have
	heard. There are two ways to install Freenet:
      </p>

      <ul>
	<li>Graphical install</li>
	<li>Headless install</li>
	<li>Enabling a mirror copy of a Freenet installation</li>
      </ul>

      <p>If you want to install the Freenet software on a computer
      which lacks a GUI, see
      the <a href="download.html#unix">Headless install</a>
      instructions. If you have mirrored a working Freenet
      installation to a machine without explicitly installing it,
      see <a href="download.html#mirrored">Mirrored
      install</a>. Otherwise, continue reading.
      </p>

      <h4>Graphical install</h4>
      
      <p><b>The below is outdated for Windows systems</b>, for Windows you should
      use <a href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">the Windows installer</a> as described on <a href="/download.html">the download page</a>.
      You can also get the Windows installer from <a href="https://downloads.freenetproject.org/latest/FreenetInstaller.exe">here</a> or <a href="https://downloads.freenetproject.org/alpha/installer/FreenetInstaller-FREENETVERSION.exe">here</a>.</p>
      
      <p>For a graphical installation you have to have:</p>
      <ul>
	<li>A working Java Runtime Environment,</li>
	<li>a downloaded copy of <a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar">new_installer_offline.jar</a>
	(if this does not work try <a href="https://downloads.freenetproject.org/latest/new_installer_offline.jar">here</a>)</li>
	<li>a working graphical user interface (GUI)</li>
      </ul>
      
      <p>
	You should save the new_installer.jar file somewhere were you
	can find it again. Your home-directory should be a good
	place. The next step requires you to know where you stored the
	file (the path to it), so it is quite important that you do
	that step thouroghly.
      </p>

      <p>
	To start the installation, open a command line
	interface/terminal/shell window. Exchange
	the <span style="font-weight:bold;">/path/to</span> to the
	real path (for example:
	/home/username/download/new_installer.jar) to the
	new_installer.jar-file and type:
      </p>
      
      <pre>
	$ java -jar /path/to/new_installer_offline.jar</pre>
      
      <p>
	The first window you should see is the one below, which allows
	you to select your preferred language for the installation
	program.
      </p>

      <img src="/image/install/1-langselect.png"/>

      <p>
	Next is shown an about-box, some information about the version
	of Freenet and authors. Just
	click <span style="font-weight:bold;"> Next</span> to proceed.
      </p>

      <img src="/image/install/2-about.png"/>
      
      <p>
	The next step is to choose the directory in which to install
	Freenet. The default location on Linux operating systems
	is <span style="font-weight:bold;">/home/username/Freenet</span>
	as shown below. Change it to something appropriate or leave
	&quot;as
	is&quot;. Click <span style="font-weight:bold;">Next</span>
	when you are finished.
      </p>

      <img src="/image/install/4-Install_directory.png"/>

      <p>
	Select the packages that you want to install with your Freenet
	software. Since it takes up virtually no extra disk-space, it
	is recommended that you leave all packages selected and
	press <span style="font-weight:bold;">Next</span>.
      </p>

      <img src="/image/install/5-select_packages.png"/>

      <p>
	In the next stage, the packages are installed, and a progress
	meter runs across the window. When it is finished,
	press <span style="font-weight:bold;">Next</span> to continue
	to the next step.
      </p>

      <img src="/image/install/6-Install_packages.png"/>

      <p>
	After that, the Freenet software is installed and/or
	upgraded, plugins are enabled and the environment is
	started. When completed,
	press <span style="font-weight:bold;">Next</span> to proceed.
      </p>

      <img src="/image/install/7-install_progress.png"/>

      <p>
	For some graphical environments, shortcuts in the menu-structure
	can be created. This is not the case for all of the platforms that
	Freenet run on. However, there should be created shortcuts on the
	desktop in all supported environments. Change the application group
	according to your needs and
	press <span style="font-weight:bold;">Next</span> when finished.
      </p>

      <img src="/image/install/8-create_shortcuts.png"/>

      <p>
	After that, the installation is
	finished. Click <span style="font-weight:bold;">Done</span> to close
	the window.
      </p>

      <img src="/image/install/9-Install_finished.png"/>

      <p>
	If all has gone well, a browser window should have opened in the
	background. This will ask you a bunch of questions to configure Freenet,
	and then you should be able to use it.
	  </p>
	
	  <p>
	It will ask about network security level - "protection from strangers attacking
	you over the internet". If you choose LOW or NORMAL, Freenet should "just work",
	connecting in a few minutes. If you choose HIGH or MAXIMUM, Freenet will need you
	to add Friends before you can use it. These must be people you personally know.
	Adding people you don't know will not improve security.
      </p>
