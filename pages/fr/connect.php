      <h1>Documentation</h1>
      <div id="navigation">
	<p> Aller à :
	  <a href="install.html">Installer</a>
	  <a href="connect.html">Connexion</a>
	  <a href="content.html">Contenu</a>
	  <a href="understand.html">Comprendre</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="https://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Se connecter à Freenet</h2>
      <p>Il y a deux manières de se connecter à Freenet:</p>

      <ul>
	<li>Vous pouvez activer le mode non-sécurisé (l'installateur vous le demandera) et Freenet se connectera automatiquement aux inconnus (Inconnus).</li>
	<li>Vous pouvez vous connecter aux noeuds tenus par des personnes que vous connaissez (Amis).
		Veuillez noter que ces neuds doivent vraiment être des personnes que vous connaissez réellement dans une certaine mesure pour maintenir une bonne topologie dans le réseau et un maximum de sécurité.</li>
      </ul>
      
      <p>
      	En pratique, vous devriez utiliser ces deux approches. A moins que vous soyez vraiment paranoïaque,
      	dans ce cas vous devriez vous connecter uniquement à des personnes de confiance. Le mode non-sécurisé deverais fonctionner automatiquement dès son activation.
      	Le reste de cette page traite de la connexion entre amis.
      </p>

      <p>
      	Pour se connecter aux noeuds d'amis, vous devez echanger les référence de noeuds avec eux. Les référence
      	doivent être ajoutés <span style="font-weight:bold;">des deux cotés</span> pour que la connexion d'etablisse.
      	C'est-à-dire que vous devez ajouter sa référence et lui doit de son coté rajouter la vôtre.
      </p>

      <p>
	<span style="font-style:italic;">
		Lors de la connexion d'un nouveau noeud Freenet, vous n'avez aucune donnée dans votre cache
		et peu de connexions même si le mode non-sécurisé est activé. Les requêtes sont envoyées
		 aléatoirement.
		 <span style="font-weight:bold;">
		 	Ce processus à pour conséquence de provoquer une interruption des requêtes prenant trop de temps avant même de recevoir des données.
		</span>
		Le noeud Freenet peut prendre plusieurs jours pour atteindre une vitesse de croisière raisonnable, ne vous découragez donc pas pour cela.
		</span>
      </p>

      <p>
    Vous devriez avoir au moins trois noeuds connectés a vous
    en tout temps, idéalement de cinq à sept. Sachant que des noeuds
    peuvent devenir injoignables de temps en temps, vous devez vous connecter
    à plus de noeuds de manière à garder un nombre de noeuds raisonnable.
    Les noeuds qui sont connectés directement à vous sont les seuls noeuds
    qui pourraient voir quelle sorte de traffic transite par votre noeud Freenet.
	Mais si le mode non-sécurisé est activé, nimporte quel noeud peut vous contacter.
	Il existe donc un grand bénéfice à ne <b>pas</b> activer le mode non-sécurisé.
	Vous serez en effet uniquement visible par vos amis. En pratique, la plupart des
	utilisateurs démarrent avec le mode non-sécurisé, ajoutent des amis
	et ensuite seulement désactivent le mode non-sécurisé une fois atteint au moins 10 amis.
    </p>
      
      <img src="/image/Freenet-architecture-small.png"/>

      <p><span style="font-size:75%;font-style:italic;">Schéma 1: Connexions Freenet visibles</span></p>
      
      <p>
	Le <span style="font-weight:bold;">Noeud A</span> sur le schéma posséde
	un certain nombre de noeuds connectés à lui mais ils sont tous invisible pour vous (à part votre propre noeud).
	L'algorithme s'occupant de router le traffic est alors seulement
	capable de diriger le traffic sur un des noeuds que vous connaissez dont il pense
	qu'il est le plus apte à trouver se que vous recherchez. 
      </p>

      <p>
    Le traffic est chiffré, il est donc plutôt difficile pour les noeuds
    auquels vous vous connectez de voir en quoi consiste votre traffic émanant de Freenet.
    Cela reste néamoins du domaine du possible. Il est donc important de vous connecter uniquement
    aux personnes que vous connaissez. Si ce n'est pas possible, connectez vous au moins au personnes
    avec qui vous avez parlé.
      </p>

      <p>
    Il y a plusieurs manières d'ajouter des références de noeuds.
      </p>

      <h3>Fproxy</h3>
      <p>
     Connecter des noeuds avec FProxy (le site web local de Freenet) peut être fait
     de plusieurs manières. Les plus communes étant regroupées dans le menu <span style="font-weight:bold;">Darknet</span>
     ou en utilisant ce lien:
	<a href="http://127.0.0.1:8888/friends/" rel="nofollow">http://127.0.0.1:8888/friends/</a>
      </p>
      
      <img src="/image/add_peers.png"/>
      
      <p>Comme vous voyez, il y a trois manières d'entrer la référence de noeud de quelqu'un d'autre:</p>
      
      <ul>
	<li>En le copiant-collant &quot;tel-que&quot;, dans le champ du haut,</li>
	<li>d'entrer un lien pointant sur la référence ou </li>
	<li>d'envoyer un fichier contenant la référence.</li>
      </ul>
      
      <p>
	<a href="http://dark-code.bulix.org/">http://dark-code.bulix.org/</a>
	est un <span style="font-weight:bold;">presse-papier</span>,
	où vous pouvez envoyer des références de noeuds, assurez-vous que la case
	<span style="font-weight:bold;">privée (&quot;private&quot; en anglais)</span> est cochée
	et appuyez sur le bouton <span style="font-weight:bold;">Coller (&quot;Paste en anglais&quot;)</span>.
      </p>

      <p>
    Le presse-papier deverais vous retourner un lien
	(par exemple http://dark-code.bulix.org/yuf01h-34676?raw), que vous pouvez partager.
	Assurez-vous d'avoir ajouté<span style="font-weight:bold;">?raw</span> à la fin du lien (comme sur l'exemple).
	Cela revoie uniquement les données envoyées sans aucun elemement de design supplémentaire.
      </p>
      
      <p>
    Votre propre référence de noeud Freenet est disponible sur la page:
	<a href="http://127.0.0.1:8888/friends/" rel="nofollow">http://127.0.0.1:8888/friends/</a>
	, sous le sous-titre <span style="font-weight:bold;">Ma référence</span>. Cela doit resembler plus ou moins à ceci (tronqué pour l'exemple):
      </p>

      <pre>
	lastGoodVersion=Fred,0.7,1.0,1010
	sig=7c7edc8c5250e42ac4cb161b216b70de7019221f1b331f0f92bd67439[...]609660f0d4
	identity=5tBtS3R59nfOTvc1be~V0sSfkWir8EW38YeocP0gsYM
	myName=FreenetTestInstall
	location=0.02970997399122577
	testnet=false
	version=Fred,0.7,1.0,1016
	physical.udp=83.255.75.223:13762
	ark.pubURI=SSK@M1wjFha2tujYo50QQF~5Fqz5anVEiIzI9VrA8IrhAsQ,5M[...],AQACAAE/ark
	ark.number=0
	dsaPubKey.y=JhlWYVx8rA0y0x1Fb3y9TfqXDYiIsnkEka8PLsePerpCELTIn[...]laHe2bkl0O7Dg
	dsaGroup.p=AIYIrE9VNhM38qPjirGGT-PJjWZBHY0q-JxSYyDFQfZQeOhrx4[...]ofeLdX7xhehuk
	dsaGroup.g=UaRatnDByf0QvTlaaAXTMzn1Z15LDTXe-J~gOqXCv0zpz83CVn[...]Fuqt8yZe1PDVg
	dsaGroup.q=ALFDNoq81R9Y1kQNVBc5kzmk0VvvCWosXY5t9E9S1tN5
	End</pre>

      <p>
      	Rappelez vous que vous devez ajouter chaqun de votre coté les références
      	pour que la connection fonctionne. Ceci veux dire que si vous ajoutez quelqu'un
      	mais que la personne ne vous rajoute pas en retour, la connexion ne
      	<span style="font-weight:bold;">marchera pas</span>.
      </p>

      <h3>Noeuds cachés (Darknet)</h3>
      <p>
      	Quand vous avez atteint un certain nombre de connexions,
      	vous pouvez visiter la page Darknet. Elle deverais resembler a ceci:
      </p>

      <img src="/image/Freenet-darknet_peers.png"/>

      <p>Des status sont disponibles:</p>

      <ul>
	<li>CONNECTE - Le noeud est connecté et prêt à recevoir vos requêtes.</li>
	<li>EN ATTENTE - Le noeud est submergé de traffic et ne peut pas répondre.</li>
	<li>DECONNECTE - Le noeud n'est pas connecté à votre noeud et probablement éteint.</li>
	<li>JAMAIS CONNECTT - La connexion entre les neuds n'a pas été établie.
		Ceci peut être dû à des problèmes/restriction de la part d'un pare-feu,
		un des deux noeuds d'ajoutant pas les références
		ou les noeuds n'ont jamais été les deux en ligne au même moment pour confirmer la connexion.
		Si le problème persiste pendant longtemps et que les noeuds se sont ajoutés entre eux,
		essayez de réinitialiser la connextion.
	</li>
      </ul>
      
      <p>
    Dans la collonne Inactif, vous pouvez voir combien de temps
    s'est ecoulé depuis le dernier message de status.
      </p>
