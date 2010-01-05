      <h1>Télécharger Freenet</h1>
      <h3>Remarque importante pour les nouveaux utilisateurs</h3>
      <p>
      Afin d'obtenir les meilleures performances possibles, Freenet
      tourne en permanence. Cela ne devrait pas avoir d'incidence
      sur les performances de votre ordinateur, puisque cela nécéssite 
      environ 200Mo de mémoire vive (RAM) et 10% de la puissance d'un 
      processeur monocoeur, ainsi que quelques accès au disque. Nous
      vous recommandons fortement d'éteindre Freenet lorsque vous jouez
      à des jeux, etc... Sur Windows, vous pouvez couper Freenet via
      l'icone situé dans la zone de notification&nbsp;; pour les autres
      systèmes, des liens sont fournis soit sur le bureau, soit dans
      le menu.
      </p>
      <p>
      Normalement, Freenet devrait se connecter automatiquement et fonctionner
      tout seul, en se connectant de façon automatique aux autres nœuds (Inconnus). 
      Cependant, si vous connaissez plusieurs personnes qui utilisent déjà Freenet,
      vous pouvez activer le mode "haute sécurité" et 
      <a href="http://127.0.0.1:8888/addfriend/">les ajouter en tant qu'amis</a>&nbsp;;
      Freenet ne se connectera alors qu'à eux, et le fait que vous utilisez Freenet sera
      quasiment indétectable. Vous pourrez bien sûr toujours accéder au reste du réseau
      via les amis des amis etc... de vos amis. Néanmoins, les performances seront
      dégradées tant que vous n'ajouterez pas plus de 10 amis qui sont souvent en ligne
      en même temps que vous.
      </p>

      <!--      
      <div id="jws">
	<h2>Instructions pour l'installation</h2>
	<p>
	Cliquer sur le lien d'
	<big><big><a href="http://checksums.freenetproject.org/latest/freenet.jnlp">installation
	de Freenet</a></big></big> devrait démarrer l'installateur si vous avez <a href="http://www.java.com/getjava/">Java</a>
	d'installé. Si cela ne fonctionne pas pour une raison ou pour une autre, vous pouvez
	essayer les instructions spécifiques à chaque système d'exploitation :
	<a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">instructions pour Windows</a>,<br/>
	<a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">instructions pour Mac OSX</a>,<br/>
	<a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">instructions pour Linux et les différents Unix-like</a>.
	</p>
      </div>
      -->  
      
      <div id="nojws">
	
	<h2>Instructions pour l'installation</h2>
	<p>
	Afficher les instructions pour :
	<a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows</a>,<br/>
	<a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac OSX</a>,<br/>
	<a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux et autres Unix</a>.
	</p>
      </div>
      
      <div id="windows">
	
	<h3>Windows</h3>
	
	<p>
	Téléchargez et éxécutez <big><a href="http://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">le programme d'installation</a> (8MB)</big><br/> 
	<br/>
	Celui-ci installera automatiquement Freenet ainsi que les
	autres composants requis pour vous. Une fois l'installation
	achevée, votre navigateur internet s'ouvrira automatiquement
	et affichera l'interface utilisateur de Freenet.<br/>
	Remarque : Freenet ne contient <b style="text-decoration: underline;">AUCUN logiciel espion</b>&nbsp;; 
	c'est un Logiciel Libre ! Le code source est librement consultable
	en ligne.<br/> 
	<br/>
	Freenet fonctionne mieux avec Windows XP Professionel ou Vista.
	Quelques problèmes ont été rapportés avec le programme
	d'installation sur Windows 7, ils seront corrigés bientôt.
	Freenet ne s'exécutera pas sur les systèmes plus vieux que
	Windows 2000 Professionel (càd Windows 95/98/ME), et en aucun
	cas vous ne devriez utiliser un système d'exploitation dont
	le support a été arrêté.<br/>
	</p>
	
      </div>

      <div id="macos">
	
	<h3>Mac OSX</h3>
	
	<p>
	  <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">Installez Freenet 0.7.5</a> en utilisant JavaWebStart.<br/>
	  Si cela ne fonctionne pas, essayez les instructions relatives à Linux.
	</p>
	
      </div>
      
      <div id="unix">
	
	<h3>Linux et autres systèmes Unix</h3>

	<p>
	  Essayez le <a href="http://checksums.freenetproject.org/latest/freenet.jnlp">programme d'installation JavaWebStart</a>.<br/>
	  Si cela ne fonctionne pas, veuillez essayer les instructions données ci-dessous.
	</p>	
	<p>
	Vous aurez besoin d'un <b>environnement d'exécution Java</b> (JRE)
	récent. Il semblerait que Freenet fonctionne mieux avec
	l'environnement Java de Sun, que vous pouvez obtenir via
	votre <a href="http://fr.wikipedia.org/wiki/Gestionnaire_de_paquets">
	gestionnaire de paquets</a> (recommandé) ou bien directement depuis
	le site <a href="http://www.java.com/">http://www.java.com/</a>.<br/> 
	</p>
	<p>
	Les versions de Java 1.5 et suivantes fonctionneront. Toutefois,
	soyez conscient que des vulnérabilités concernant les applets
	touchent toutes les versions précédant Java 1.5 update 4.
	Généralement, nous vous recommandons d'utiliser les dernières
	versions disponibles.<br/>
	Vous aurez également besoin de 'wget' pour que les commandes
	ci-dessous fonctionnent (sur Ubuntu, tapez 'apt-get install wget'
	dans un terminal).
	</p>

	<p>
	Ouvrez un terminal, et tapez :
	</p>
	
	<!-- please use "pre" as following (ie a newline after the
	openning pre, and no newline before the ending pre) -->

	<pre>
	  wget <a href="http://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">http://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar</a> -O new_installer_offline.jar
	  java -jar new_installer_offline.jar</pre>
	
	<p>
	  Alternativement,
	  télécharger <a href="http://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar">le
	    programme d'installation</a>
	  (<a href="http://freenet.googlecode.com/files/new_installer_offline_FREENETJARVERSION.jar.sig">signature 
	    gpg</a>) et cliquer ensuite sur le fichier peut fonctionner
	    sur certains systèmes, mais s'il y a un quelconque problème,
	    nous vous recommandons d'exécuter les lignes de commandes ci-dessus. 
	</p>
	
	<h3>Installation sans écran</h3>
	
	<p>
	Sur un système sans écran, exécutez ces commandes :
	</p>
	
	<pre>
	  wget <a href="http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz">http://downloads.freenetproject.org/alpha/installer/freenet07.tar.gz</a>
	  tar xvzf freenet07.tar.gz
	  cd freenet
	  ./run.sh start</pre>
	
	<p>
	Lisez la <a href="faq.html#fproxy-lan">FAQ</a> pour savoir comment
	activer l'accès web depuis un ordinateur distant.
	</p>
	
	<p>Veuillez noter que cela n'installera pas d'icone dans la zone de notification, 
	ni de raccourcis dans les menus ou sur votre bureau. 
	Pour ouvrir Freenet, ouvrez l'adresse suivante dans votre navigateur internet :</p>
      
      <pre>
	<a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a></pre>
	
	<p>
	Veuillez aussi noter que la majorité des gens utilisent l'interface graphique
	d'installation - utilisez la si vous pouvez. Les scripts du programme d'installation
	sans écran peuvent être un peu instables, donc essayez encore si cela n'a pas
	fonctionné du premier coup. Et <b>vous devez avoir Java Sun installé et définit par
	défaut</b> (man update-java-alternatives sur debian/ubuntu) avant l'installation.
	</p>

	<div id="mirrored">
	  
	  <h3>Mirrored installation</h3>
	  
	  <p>
	    If you have a working Freenet installation directory that you have mirrored 
	    from one Unix machine to another (e.g. via rsync or
	    unison), enabling the mirrored installation is not
	    difficult.  Nothing in a Freenet installation cares
	    about its host's IP address; it can't, or Freenet would
	    fail on machines that get IP addressss from a DHCP pool
	  </p>

	  <p>
	    All you actually need to do is tell the system you've
	    mirrored to that it should start the Freenet proxy
	    daemon for you on boot.  Do <tt>crontab -l</tt> on the
	    source machine, find the line that is tagged "FREENET
	    AUTOSTART" and add that to your crontab on the mirrored
	    machine.
	  </p>
	  
	  <p>
	    However: each installation has a unique identity key
	    generated at installation time. If you try to run two
	    instances with the same identity <em>at the same
	      time</em>, both proxy demons will become confused and
	    upset. Don't do this!
	  </p>
	  
	</div>
	
    <h3>HOWTO</h3>  
	      
      	     <p>You might find the <a href="http://www.minihowto.org/freenet_howto/freenet a very short minihowto.html">mini-howto</a> useful (it might be of interest to Windows users too).</p>

      </div>
      
      <script type="text/javascript">
					 // Try to detect if Sun Java 1.5.0 or higher is installed
					 //var Java = PluginDetect.isMinVersion('Java', '1,5,0');
					 
					 // Os detection
					 var OSName="";
					 if (navigator.appVersion.indexOf("Win")!=-1)
					 OSName="windows";
					 else if (navigator.appVersion.indexOf("Mac")!=-1)
					 OSName="macos";
					 else if (navigator.appVersion.indexOf("X11")!=-1)
					 OSName="unix";
					 else if (navigator.appVersion.indexOf("Linux")!=-1)
					 OSName="unix";
					 
					 hideDiv("windows");
					 hideDiv("macos");
					 hideDiv("unix");
					 if (OSName != "") {
					   showDiv(OSName);
					 } else {
					   showDiv("windows");
					   showDiv("macos");
					   showDiv("unix");
					 }
      </script>
      
      <h3>Pares-feu et routeurs</h3>
      
      <p>
      Freenet devrait fonctionner normalement avec la majorité des routeurs, mais
      si vous rencontrez des problèmes et que vous avec un pare-feu ou un routeur,
      cliquez <a href="faq.html#firewall"><b>ici</b></a> pour plus d'infos.
      </p>
      
      <h3>Bien, ça tourne, qu'est-ce que je fais ?</h3>
      
      <p>
      Quand le programme d'installation se ferme, il devrait ouvrir un navigateur
      internet affichant l'assistant de configuration. Vous pouvez alors 
      configurer les paramètres de base, et ensuite commencer à utiliser
      Freenet. Après cela, vous pourrez accéder à Freenet via le menu de
      la zone de notification (en bas à droite de l'écran), ou utiliser le
      raccourci "Browse Freenet" situé sur le bureau ou dans le menu démarrer.
      Si rien de tout cela ne fonctionne, ouvrez l'adresse <a href="http://127.0.0.1:8888/">http://127.0.0.1:8888/</a>
      dans votre navigateur.
      
      <p>
      Pour une meilleure sécurité, nous vous conseillons d'utiliser Freenet dans un
      navigateur différent de celui que vous utilisez habituellement, de préférence
      en mode de navigation privée.<br/>
      Sur Windows, le menu de la zone de notification essaiera si possible 
      d'ouvrir Google Chrome en mode incognito. Internet Explorer fonctionne
      mal avec Freenet, Firefox et Opera peuvent par contre être
      utilisés sans problème. 
      </p>
      
      <p>
      Si vous connaissez quelqu'un qui utilise Freenet, vous pouvez améliorer
      votre sécurité et aider à construire un réseau robuste en vous connectant
      à son nœud. Premièrement, ouvrez la page <a href="http://127.0.0.1:8888/addfriend/">Ajouter un ami</a>. 
      Vous et votre ami devez télécharger votre "référence". Envoyez alors le fichier
      à votre ami, et récupérez sa référence. Ajoutez sa référence en utilisant
      le formulaire en bas de la page "ajouter un ami". Votre ami doit procéder
      de la même façon avec votre référence.<br/>
      Une fois que chacun a ajouté la référence de l'autre, le nœud de votre ami
      devrait être affiché sur la page de connexion aux amis, probablement en tant
      que "CONNECTÉ" ou "BUSY".<br/>
      Vous pouvez donner un nom à votre nœud sur la page de configuration&nbsp;; il sera
      ainsi plus facile de savoir à qui il appartient (seul vos amis pourront
      le voir).<br/>
      <b>N'ajoutez que des nœuds qui appartiennent à des personnes que vous
      connaissez vraiment</b> (dans la vie réelle ou sur internet). Ajouter
      des inconnus fait chuter les performances et n'améliore pas votre sécuritéé
      (ils peuvent très bien être les méchants !). 
      </p>
      
      <h3>Bien, je suis connecté, qu'est-ce que je fais ?</h3>
      
      <p>
      Freenet inclus des sites web anonymes ("freesites"), le partage de fichier,
      la recherche, et plus, mais vous pouvez utiliser des 
      <a href="http://wiki.freenetproject.org/FreenetZeroPointSevenApps">applications 
	tierces</a> (lien en anglais) pour discuter sur des forums, partager des
	fichiers, insérer votre freesite dans le réseau, etc...
      </p>
      
      <h3>Ça ne marche pas, alors ?</h3>
      
      <p>
      Si vous rencontrez des problèmes lors de l'installation ou de l'exécution
      de Freenet, merci de nous contacter (en anglais si vous pouvez, sinon en français, mais
      l'attente et la qualité des réponses ne seront peut-être pas les mêmes)
      sur la <a href="mailto:support@freenetproject.org">liste de support</a> 
	(<a href="lists.html">inscription ici</a>), ou de nous joindre sur IRC sur les
	canaux #freenet (anglophone) ou #freenet-fr (francophone) sur le serveur irc.freeode.net.
	<br/>
	(Essayez <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">ici</a> pour le canal anglophone,
	<a href="http://webchat.freenode.net/?randomnick=1&channels=freenet-fr">là</a> pour le canal francophone).
      </p>
      
      <h3>Matériel requis</h3>
      <p>
      Un processeur tournant à 1GHz et 1Go de mémoire vive (RAM) devraient suffire. Freenet
      s'exécutera sur des systèmes moins performants, mais il utilisera au moins 128Mo
      de RAM, donc à moins que le système ne fasse rien d'autre, il fonctionnera mal
      si la quantité de RAM totale est de moins de 512Mo. En revanche, le processeur
      pose moins de problèmes, et certaines personnes ont fait tourner Freenet sur
      des Pentium 2, ou des ATOM cadencés à 400MHz&nbsp;; néanmoins, les téléchargements
      et la navigation seront ralentis.
      </p>
          
      <p>
      Freenet utilisera aussi une partie de votre disque pour y
      stocker des données. Vous pouvez configurer la taille utilisée,
      qui doit être supérieure à 100Mo. Nous recommandons d'allouer au moins
      1Go.Freenet utilisera aussi de l'espace disque pour vos téléchargements.<br/>
      L'empreinte mémoire de Freenet est d'approximativement 192Mo,
      plus 1Mo pour chaque 2Go d'espace disque configuré (par défaut,
      Freenet utilisera donc environ 192Mo de mémoire vive).
      </p>
      
      <p>
      Enfin, sur les systèmes Windows 64 bits, nous installons une machine virtuelle Java
      (JVM) 32 bits, à cause des limitations du <a href="http://wrapper.tanukisoftware.org/doc/english/download.jsp">Java Service Wrapper</a> (lien anglais).
      Elle ne sera pas forcément mise à jour automatiquement, donc vous devrez peut-être la
      <a href="http://www.java.com/en/download/manual.jsp">mettre à jour occasionnellement</a>.
      </p>
      
      <h3>Mise à jour</h3>
      
      <p>
      Le nœud est maintenant fournit avec un mécanisme de
      mise-à-jour via le réseau Freenet :
      le nœud se tiendra automatiquement à jour à partir
      des autres nœuds Freenet, et cela fonctionnera
      même s'ils sont trop récents pour que nous nous connections
      à eux. C'est anonyme et sûr, et nous le recommandons aux
      utilisateurs. Néanmoins, si quelque chose ne fonctionne pas,
      vous pouvez toujours mettre à jour votre nœud depuis nos
      serveurs :

      	       <ul>
		<li>
		Les utilisateurs de Windows peuvent se mettre à jour
		vers la dernière version stable de Freenet depuis le
		menu de la zone de notification, ou en exécutant 
		le fichier "update.cmd" (cliquez simplement dessus)
		du répertoire Freenet.
		</li>
		<li>
		Les utilisateurs de Mac et de Linux peuvent mettre à jour
		via le script update.sh du répertoire Freenet.
		</li>
      	       </ul>
      </p>
      
      <p>
	<small>
	  <b>Code source:</b>
	  Voir la <a href="developer.html">page des développeurs</a> 
	  pour obtenir un accès git, ou téléchargez la dernière archive
	  stable <a href="http://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2">ici</a>.
	</small>
      </p>
