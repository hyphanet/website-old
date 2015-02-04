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
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Install Freenet</h2> 
      <p>
	Installer Freenet pourrait être moins difficile a installer
	que ce que vous auriez pu entendre.
	Il y a deux façons d'installer Freenet.
      </p>

      <ul>
	<li>Installation graphique</li>
	<li>Installation en ligne de commande</li>
	<li>Mettre en place une copie-mirroir d'une installation Freenet</li>
      </ul>

      <p>
	Si vous souhaitez installer le logiciel Freenet sur un ordinateur
	qui n'a pas d'interface graphique, voir
	<a href="download.html#unix"> Installation en ligne de commande </ a>
	instructions. Si vous avez une copie-miroir d'une installation 
	déjà éxistante sans installer Freenet explicitement,
	voir <a href="download.html#mirrored"> Mettre en place une 
	copie-mirroir d'une installation Freenet </ a>. Sinon, continuez à lire.
      </p>

      <h4>Installation Graphique</h4>
      
      <p>Pour une installation graphique, vous devez avoir:</p>
      <ul>
	<li>Un environement Java opérationnel,</li>
	<li>une copie téléchargée de <a href="https://downloads.freenetproject.org/alpha/installer/new_installer.jar">
	    https://downloads.freenetproject.org/alpha/installer/new_installer.jar</a> et</li>
	<li>une interface utilisateur graphique fonctionnelle (GUI)</li>
      </ul>
      
      <p>
	Vous devez enregistrer le fichier new_installer.jar à un endroit où vous 
	pouvez le retrouver. Votre répertoire courant peut être le bon endroit.
	L'étape suivante vous demande de vous rappeler où vous avez enregistré le
	fichier (le chemin d'accès), il est donc très important de bien maîtriser
	cette étape.
      </p>

      <p>
	Pour démarrer l'installation, ouvrir une fenêtre avec une 
	fenêtre en ligne de commande/console/terminal/shell'. Exchange
	the <span style="font-weight:bold;">/path/to</span> to the
	real path (for example:
	/home/username/download/new_installer.jar) to the
	new_installer.jar-file and type:
      </p>
      
      <pre>
	$ java -jar /path/to/new_installer.jar</pre>
      
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
	background, showing the following page:
      </p>

      <img src="/image/install/10-Successful_installation.png"/ width="100%">

      <p>
	It is a page showing a number of ways to proceed with your Freenet
	quest. Among other things, it shows how you could go about exchanging
	node references to add peer-nodes to yours, in order to communicate on
	Freenet. But more on that later.
      </p>

      <p>
	Clicking the <span style="font-weight:bold;">Get started on
	Freenet</span> link in the image above, opens up Freenet's
	first time wizard.
      </p>
