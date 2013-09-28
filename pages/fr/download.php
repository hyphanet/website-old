      <h1>Télécharger Freenet</h1>
      <h3>Remarque importante pour les nouveaux utilisateurs</h3>
      <p>
      Afin d'obtenir les meilleures performances possibles, Freenet
      tourne en permanence. Cela ne devrait pas avoir d'incidence
      sur les performances de votre ordinateur, puisque cela ne nécéssite 
      que 200Mo de mémoire vive (RAM) et 10% de la puissance d'un 
      cœur processeur, ainsi que quelques accès au disque. Nous
      vous recommandons fortement d'éteindre Freenet lorsque vous jouez
      à des jeux, etc... Sous Windows, vous pouvez couper Freenet via
      l'icone situé dans la zone de notification&nbsp;; pour les autres
      systèmes, des liens sont fournis soit sur le bureau, soit dans
      le menu.
      </p>
      <p>
      Normalement, Freenet devrait se connecter automatiquement et fonctionner
      tout seul, en se connectant de façon automatique aux autres nœuds (Inconnus). 
      Cependant, si vous connaissez plusieurs personnes qui utilisent déjà Freenet,
      vous pouvez activer le mode "haute sécurité" et 
      <a rel="nofollow" href="http://127.0.0.1:8888/addfriend/">les ajouter en tant qu'amis</a>&nbsp;;
      Freenet ne se connectera alors qu'à eux, et le fait que vous utilisez Freenet sera
      quasiment indétectable. Vous pourrez bien sûr toujours accéder au reste du réseau
      via les amis des amis etc... de vos amis. Néanmoins, les performances seront
      dégradées tant que vous n'ajouterez pas plus de 10 amis qui sont souvent en ligne
      en même temps que vous.
      </p>

      <div id="nojws">
	
	<h2>Instructions pour l'installation</h2>
	<p>
	Afficher les instructions pour :
	<a href="javascript:showDiv('windows');hideDiv('macos');hideDiv('unix');">Windows</a>,
	<a href="javascript:hideDiv('windows');showDiv('macos');hideDiv('unix');">Mac OSX</a>,
	<a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">Linux et autres Unix</a>.
	</p>
      </div>
      
      <div id="windows">
	
	<h3>Windows</h3>
	
	<p>
	Téléchargez et éxécutez <big><a href="https://freenet.googlecode.com/files/FreenetInstaller-FREENETVERSION.exe">le programme d'installation</a> (8MB)</big><br/> 
	<br/>
	Celui-ci installera automatiquement Freenet ainsi que les
	autres composants requis pour vous. Une fois l'installation
	achevée, votre navigateur internet s'ouvrira automatiquement
	et affichera l'interface utilisateur de Freenet.<br/>
	Remarque : Freenet ne contient <b style="text-decoration: underline;">AUCUN logiciel espion</b>&nbsp;; 
	c'est un Logiciel Libre dont le code source est librement consultable
	en ligne.<br/> 
	<br/>
	Freenet ne s'exécutera pas sur les systèmes plus vieux que
	Windows 2000 Professionel (càd Windows 95/98/ME), et en aucun
	cas vous ne devriez utiliser un système d'exploitation dont
	le support a été arrêté.<br/>
	</p>
	
      </div>

      <div id="macos">
	
	<h3>Mac OSX</h3>
	
	<p>
	  <a href="/jnlp/freenet.jnlp">Installez Freenet 0.7.5</a> en utilisant JavaWebStart.<br/>
	  Si cela ne fonctionne pas, essayez <a href="javascript:hideDiv('windows');hideDiv('macos');showDiv('unix');">les instructions relatives à Linux</a>.
	</p>
	
      </div>
      
      <div id="unix">
	
	<h3>Linux et autres systèmes Unix</h3>

	<p>
	  Essayez le <a href="/jnlp/freenet.jnlp">programme d'installation JavaWebStart</a>.<br/>
	  Si cela ne fonctionne pas, veuillez essayer les instructions données ci-dessous.
	</p>	
	<p>
	Vous aurez besoin d'un <b>environnement d'exécution Java</b> (JRE)
	récent. Il semblerait que Freenet fonctionne mieux avec
	l'environnement Java de Sun, que vous pouvez obtenir via
	votre <a rel="nofollow" href="http://fr.wikipedia.org/wiki/Gestionnaire_de_paquets">
	gestionnaire de paquets</a> (recommandé) ou bien directement depuis
	le site <a rel="nofollow" href="http://www.java.com/">http://www.java.com/</a>.<br/> 
	</p>
	<p>
	Les versions de Java 1.6 et suivantes fonctionneront.
	Généralement, nous vous recommandons d'utiliser la dernière
	version disponible.<br/>
	Vous aurez également besoin de 'wget' pour que les commandes
	ci-dessous fonctionnent (sur Ubuntu, tapez 'sudo apt-get install wget'
	dans un terminal).
	</p>

	<p>
	Ouvrez un terminal, et tapez :
	</p>
	
	<!-- please use "pre" as following (ie a newline after the
	openning pre, and no newline before the ending pre) -->

	<pre>
	  wget <a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar">https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar</a> -O new_installer_offline.jar
	  java -jar new_installer_offline.jar</pre>
	
	<p>
	  Alternativement,
	  télécharger <a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar">le
	    programme d'installation</a>
	  (<a href="https://freenet.googlecode.com/files/new_installer_offline_FREENETVERSION.jar.sig">signature 
	    gpg</a>) et cliquer ensuite sur le fichier peut fonctionner
	    sur certains systèmes, mais s'il y a un quelconque problème,
	    nous vous recommandons d'exécuter les lignes de commandes ci-dessus. 
	</p>
	
	<div id="mirrored">
	  
	  <h3>Installation en mirroir</h3>
	  
	  <p>
	    Si vous avez repertoire d'installation de Freenet qui 
	    fonctionne, vous pouvez alors le mirrorer vers une 
	    autre machine (i.e. via rsynch ou unison), mettre en 
	    place une installation mirrorée n'est pas difficile.
	    L'installation de Freenet ne nécessite aucune 
	    information issue de votre adresse IP; Freenet ne 
	    peut pas, sinon il ne pourrait s'installer en 
	    obtenant une adresse IP issue d'un serveur DHCP.
	  </p>

	  <p>
	    Tout ce dont vous avez besoin est de dire au système que
	    vous avez mirroré de lancer le proxy Freenet  au 
	    démarrage.
	    Lancez <tt>crontab -l</tt> sur la machine initiale. 
	    Trouvez la ligne notée "FREENET AUTOSTART"  et ajouté là
	    au crontab de la machine mirroir.
	  </p>
	  
	  <p>
	    Toutefois: chaque installation dispose d'une clé 
	    d'identification unique généré lors de l'installation. 
	    Si vous essayez d'exécuter deux instances avec la même 
	    identité dans le même temps, les deux démons proxy 
	    deviendront confus et instables. Ne faites pas cela !
	  </p>
	  
	</div>
	
    <h3>HOWTO</h3>  
	      
      	     <p>Vous trouverez peut-être ce guide <a href="http://freesocial.draketo.de/index.html">Freenet Social Networking Guide</a> très utile (en anglais).</p>

      </div>
      
      <script type="text/javascript">
					 // Try to detect if Sun Java 1.6.0 or higher is installed
					 //var Java = PluginDetect.isMinVersion('Java', '1,6,0');
					 
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
      Si rien de tout cela ne fonctionne, ouvrez l'adresse <a rel="nofollow" href="http://127.0.0.1:8888/" rel="nofollow">http://127.0.0.1:8888/</a>
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
      à son nœud. Premièrement, ouvrez la page <a rel="nofollow" href="http://127.0.0.1:8888/addfriend/">Ajouter un ami</a>. 
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
      applications tierces pour discuter sur des forums, partager des
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
	(Essayez <a rel="nofollow" href="https://webchat.freenode.net/?randomnick=1&channels=freenet">ici</a> pour le canal anglophone,
	<a rel="nofollow" href="https://webchat.freenode.net/?randomnick=1&channels=freenet-fr">là</a> pour le canal francophone).
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
      (JVM) 32 bits, à cause des limitations du <a rel="nofollow" href="http://wrapper.tanukisoftware.org/doc/english/download.jsp">Java Service Wrapper</a> (lien anglais).
      Elle ne sera pas forcément mise à jour automatiquement, donc vous devrez peut-être la
      <a rel="nofollow" href="http://www.java.com/en/download/manual.jsp">mettre à jour occasionnellement</a>.
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
	  stable <a href="https://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2">ici</a>(<a href="https://freenet.googlecode.com/files/freenet-FREENETTAG-source.tar.bz2.sig">signature</a>).
	</small>
      </p>
