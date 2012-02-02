      <h1>Documentación</h1>
      <div id="navigation">
	<p> Ir :
	  <a href="install.html">Instalar</a>
	  <a href="connect.html">Conectar</a>
	  <a href="content.html">Contenidos</a>
	  <a href="understand.html">Comprendiendo</a>
	  <a href="freemail.html">Freemail</a>
	  <a href="frost.html">Frost</a>
	  <a href="jsite.html">jSite</a>
	  <a href="thaw.html">Thaw</a>
	  <a href="http://wiki.freenetproject.org">Wiki</a>
	</p>
      </div>

      <h2>Conectando a Freenet</h2>
      <p>Hay dos formas de conectar a Freenet:</p>

      <ul>
	<li>Puedes habilitar el modo inseguro (el instalador
	te preguntará) y Freenet automáticamente encontrará nodos para conectar
	 - Extraños.</li>
	<li>Puedes conectar a nodos hosteados por personas que conozcas -
	Amigos. Nota que deberán ser personas que conozcas actualmente en 
	algun nivel, en orden de mantener buena topología de red y 
	máxima seguridad.</li>
      </ul>
      
      <p>
	En la práctica, probablemente deberás usar ambas opciones, a menos que seas realmente paranoico, en cuyo
	caso deberías por supuesto conectar solamente con personas de tu confianza. El modo inseguro funcionará automáticamente
	una vez habilitado, así que el resto de esta página es sobre conectar con Amigos.
      </p>

      <p>
	Para conectar con los nodos de tus amigos, tienes que intercambiar referencias de Nodo con ellos. Las referencias
	deberán ser agregadas en <span style="font-weight:bold;">ambos lados</span> para ser aceptadas. Esto es, necesitas agregarlo/a, y el/ella necesita agregarte.
      </p>

      <p>
	<span style="font-style:italic;">Cuando tienes un nodo recién conectado, no hay data cacheada en tu almacén de datos,
	  y muy pocas conexiones aún si el modo inseguro está habilitado. Las solicitudes son enviadas de modo aleatorio. 
	  <span style="font-weight:bold;">Esto hace que algunas (sino
	  todas) las peticiones expiren antes de recibir nada.</span> Lleva
	  un par de días para tu nodo Freenet tomar velocidad,
	  por favor no te desanimes por esto.</span>
      </p>

      <p>
	Deberías tener al menos tres nodos conectados
	todo el tiempo, idealmente entre cinco y siete. Dado que algunos nodos
	pueden estar inaccesibles a veces, necesitas conectar algunos más
	para obtener el numero deseado. Los nodos que están conectados
	directamente a ti son los únicos nodos de Freenet que pueden ver
	que tipo de tráfico circula a través de tu nodo.
	Pero si el modo inseguro está habilitado, cualquier nodo podrá encontrar el tuyo; 
	esta es la gran ventaja de <b>no</b> habilitar
	el modo inseguro: efectivamente sos invisible excepto para tus
	Amigos. En la práctica la mayoría de la gente comienza con modo inseguro
	y gradualmente agrega Amigos, y con suerte deshabilita el modo inseguro
	una vez que tenga al menos diez Amigos.
      </p>
      
      <img src="/image/Freenet-architecture-small.png"/>

      <p><span style="font-size:75%;font-style:italic;">Figura 1: Conexiones
      Freenet visibles</span></p>
      
      <p>
	<span style="font-weight:bold;">El nodo A</span> en la figura
	también tiene un número de nodos conectados a él, pero son todos
	(excepto tu proopio nodo) invisibles para ti. El algoritmo de
	ruteo de tráfico es por lo tanto capaz solamente de dirigir tráfico hacia
	uno de los pocos nodos que conoces segun evalúe sea mas 
	probable encontrar lo que estás buscando.
      </p>

      <p>
	El tráfico está encriptado, así que es muy difícil para los
	nodos conectados ver en qué consiste tu tráfico en
	Freenet, pero no es imposible. Es por lo tanto
	importante que conectes solamente gente que conoces. Si esto no 
	es posible, al menos con gente con la que hayas hablado.
      </p>

      <p>
	Hay un número de formas de agregar referencias de nodos pares.
      </p>

      <h3>Fproxy</h3>
      <p>
	Conectar nodos pares con FProxy puede hacerse de varias
	maneras. Es común a todos que esto se hace bajo
	el menú <span style="font-weight:bold;">Darknet</span> o usando
	el  link <a href="http://127.0.0.1:8888/friends/">http://127.0.0.1:8888/friends/</a>
	Debajo está lo que sucede:
      </p>
      
      <img src="/image/add_peers.png"/>
      
      <p>Como puedes ver, hay tres formas de obtener la referencia de nodos de alguien mas:</p>
      
      <ul>
	<li>Pegandolo &quot;tal cual&quot;, en el campo superior,</li>
	<li>una URL apuntando a la referencia, o</li>
	<li>un archivo, conteniendo la referencia.</li>
      </ul>
      
      <p>
	<a href="http://dark-code.bulix.org/">http://dark-code.bulix.org/</a>
	es un asi llamado <span style="font-weight:bold;">paste-bin</span>, donde
	puedes agregar tu referencia de nodo, asegúrate que la opción 
	<span style="font-weight:bold;">privado</span> está marcada y presiona
	<span style="font-weight:bold;">Pegar</span>.
      </p>

      <p>
	El paste-bin luego devuelve una URL
	(e.g. http://dark-code.bulix.org/yuf01h-34676?raw), la cual puede
	ser compartida con otros. Asegúrate que
	agregas <span style="font-weight:bold;">?raw</span> al
	enlace. Esto hace que apunte solamente a la data actualmente
	ingresada, sin elementos extra de diseño.
      </p>
      
      <p>
	Tu propia referencia Freenet puede ser encontrada en 
	la página <a href="http://127.0.0.1:8888/friends/">http://127.0.0.1:8888/friends/</a>
	 bajo la sección <span style="font-weight:bold;">Mi
	referencia</span>. Debería verse similar a esto (adaptado a las dimensiones de la pantalla):
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
	Recuerda que tu y el nodo que estas conectando
      deben agregar las referencias para que la conexión funcione. Esto significa que
      si agregas referencias de nodos de personas de tu lado, pero esas
      personas no agregan tu referencia de su lado, la
      conexión <span style="font-weight:bold;">no funcionará</span>.
      </p>

      <h3>Pares Darknet</h3>
      <p>
	Cuando tengas un número de conexiones, puedes visitar la
	página de Darknet. Debería ser algo parecido a esto:
      </p>

      <img src="/image/Freenet-darknet_peers.png"/>

      <p>Hay un número de mensajes de estado que se pueden ver aquí:</p>

      <ul>
	<li>CONNECTED - el nodo está conectado y listo para responder tu consulta</li>
	<li>BACKED OFF - el nodo está saturado de tráfico y es incapaz de responder</li>
	<li>DISCONNECTED - en nodo no está conectado a tu nodo, y probablemente apagado</li>
	<li>NEVER CONNECTED - la conexión entre ambos nodos no
	ha sido establecida. Esto puede deberse a problemas/restricciones 
	de firewall, un lado no esta agregando las referencias del
	otro lado o que el nodo no ha estado online al
	mismo tiempo en orden de confirmar la conexión. Si el 
	problema persiste por largo tiempo y ambos lados se han agregado
	uno al otro, Trata de rehacer la conexión.
	</li>
      </ul>
      
      <p>
	En la columna Idle, puedes ver cuanto tiempo ha transcurrido
	desde el último mensaje de estado
      </p>
