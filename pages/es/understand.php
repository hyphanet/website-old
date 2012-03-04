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

      <h2>Comprendiendo Freenet</h2>
      <p>
	Freenet puede pensarse como un gran dispositivo de almacenamiento. 
	Cuando guardas un archivo en éĺ, recibes una clave la cual  
	puede ser usada para recuperar el archivo. Cuando proporcionas a  
	Freenet una clave, te devuelve el archivo correspondiente 
	(si es encontrado). El espacio de almacenamiento está distribuído 
	entre todos los nodos conectados a Freenet.
      </p>
      
      <p>
	Freenet es una red Peer-to-peer, la cual está
	descentralizada y anonimizada. Los nodos a los que 
	conectas solamente conocen a sus vecinos más cercanos y no
	tienen idea sobre como está estructurada la red en su totalidad.
      </p>

      <h3>Red de mundo pequeño</h3>
      
      <p>
	Freenet está construída sobre el principio de redes de mundo  
	pequeño. Conectando a nodos de personas que tú ya conocías
	previamente, y la gente que conoces está conectada a personas que
	ellos conocen, uno debería ser capaz de encontrar todos los nodos
	en una red Freenet.
      </p>

      <h3>El almacén de datos</h3>

      <p>
	Todos los nodos Freenet contribuyen con una porción de espacio de su 
	disco rígido para almacenar archivos. Los archivos son almacenados 
	encriptados en el directorio <span style="font-weight:bold;">store</span>
	en la carpeta de instalación de Freenet.
      </p>

      <p>
	A diferencia de otras redes peer-to-peer, tú 
	como usuario tienes poco o ningíun control sobre lo que 
	está almacenado en tu almacén de datos. En su lugar, los archivos son mantenidos o
	borrados dependiendo de cúan populares son.
	Esto es para asegurar que Freenet es resistente a la censura. 
	La única forma posible de remover algo de Freenet 
	es no buscarlo, y esperar que nadie mas haga 
	lo mismo.
      </p>
      
      <p>
	Es difícil, pero no imposible, determinar cuales
	archivos están guardados en tu almacén de datos local. 
	Esto es para permitir plausible deniability sobre que 
	tipo de material se encuentra en tu disco rígido en el 
	almacén de datos.
      </p>

      <p>
	E espacio en disco inicial utilizado para el almacén de datos es
	el 5% de espacio disponible en disco si es de más de 20GB, 10% si es
	mayor a 10GB, 512MB si es menor a 10GB, y 256MB si es menor a 5GB.
	Puedes cambiar el tamaño del almacén en cualquier momento, mientras más es 
	mejor, para tu navegación personal y para Freenet en su totalidad.
      </p>

      <h3>Encaminando Freenet</h3>

      <p>
	Inicialmente, cada nodo no tiene información sobre el 
	funcionamiento de los otros nodos que conoce. Esto 
	significa que el encaminamiento de peticiones es escencialmente aleatorio. 
	Pero dado que diferentes nodos tienen diferente aleatoriedad, 
	estarán en desacuerdo acerca de dónde enviar un requerimiento, dada 
	una clave. Entonces la información en una instalacion Freenet recien iniciada será 
	distribuída de alguna manera aleatoriamente.
      </p>

      <p>
	Mientras más documentos son insertados por el mismo nodo, 
	comenzarán a agruparse con datos cuyas claves (ver más abajo) 
	sean similares, porque las mismas reglas de encaminamiento son usadas para 
	todos ellos. Más importante, como los datos y los 
	requerimientos de diferentes nodos "cruzan rutas", ellos  
	comenzarán a compartir racimos de información también.
      </p>

      <p>
	El resultado es que la red se auto-organizará 
	en una estructura de racimos distribuídos donde los nodos 
	tienden a mantener los datos que son cercanos en el espacio 
	de la clave. Habrá probablemente múltiples racimos de estos 
	a traves de la red, dado que cualquier documento 
	comenzará a replicarse muchas veces, dependiendo de cuanto 
	sea usado.
      </p>

      <h3>Claves Freenet</h3>

      <p>
	Cada archivo que existe en Freenet tiene una clave asociada
	con él. Freenet 0.7 tiene varios tipos de claves. Las claves  
	son usadas para todo en Freenet, y son una suerte de 
	<a href="http://en.wikipedia.org/wiki/Uniform_Resource_Identifier">URI</a> 
	(ej. freenet:=KSK@sample.txt). 
      </p>

      <p>
	La mayoría de las claves son hashes: no hay noción de cercanía 
	semántica cuando hablamos de cercanía de claves. Por lo tanto 
	no habrá correlación entre cercanía de claves 
	y similar popularidad de datos como podría haber si las
	claves exiben algún significado semántico, evitando así
	cuellos de botella causados por sujetos populares.
      </p>

      <h3>Accediendo a los datos</h3>

      <p>
	Para acceder a una particular porción de datos en Freenet,
	puedes usar FProxy. Necesitas saber la clave para los
	datos, e ingresarla (o hacer click en un enlace
	conteniendo la clave):
      </p>
      
      <pre>
	http://localhost:8888/[Clave Freenet]</pre>
      
      <p>
	Hay cuatro tipos de claves en Freenet:
      </p>
      <ul>
	<li><span style="font-weight: bold;">CHK</span> - Claves de Contenido Hash [Content Hash Keys]</li>
	<li><span style="font-weight: bold;">SSK</span> - Claves de Subespacio Firmadas [Signed Subspace Keys]</li>
	<li><span style="font-weight: bold;">USK</span> - Claves de Subespacio Actualizables [Updateable Subspace Keys]</li>
	<li><span style="font-weight: bold;">KSK</span> - Claves de LLavero Firmadas [Keyword Signed Keys]</li>
      </ul>
          
      <p>
	CHKs son las fundamentales. Todos los archivos mayores a  1kB son finalmente divididos en 
	uno o mas CHKs de  32kB. Los nombres CHK de los archivos son determinados solamente por sus contenidos. 
	SSKs son otro tipo básico. Estas combinan una clave pública con un nombre de archivo 
	legible y por lo tanto aptos para freesites. KSKs son una variante de  SSKs donde 
	todo está determinado por un simple nombre de archivo legible (ej. =KSK@sample.txt). 
	Estas son spammable pero convenientes en algunos casos. Y las USKs son una forma de 
	claves actualizables especialmente útiles para freesites y 
	<span style="font-weight: bold;">Claves de Resolución de Dirección</span>.
      </p>
      <p>
	Una Clave de Resolución de Dirección (ARK) es una Clave de Subespacio Actualizable (USK) insertada 
	por el nodo cuando su dirección IP cambia. Contiene la referencia para  
	el nodo -sus detalles criptográficos, y en particular su(s) dirección(es) IP. 
	ARKs son la manera de ayudar a la gente a conectar con Freenet 
	si tienen problemas causados por cortafuegos, enrutadores o direcciones IP cambiantes. 
	Si alguien no puede aceptar tráfico entrante puede ser difícil de conectar. 
      </p>
      <p>
	ARKs son una implementación detallada y no necesitas saber nada sobre 
	ellas para usar Freenet.
      </p>

      <h3>Claves de Contenido Hash</h3>

      <p>
	Las Claves de Contenido Hash son para archivos con contenido estático como un .mp3 o un documento PDF.
	Estas claves son hashes del contenido del
	archivo. Un hash es un método reproducible de transformar una 
	porción específica de datos en un número relativamente pequeño
	que sirve como una especie de <span style="font-style:italic;">
	 huella digital</span> para los datos. Si el contenido del archivo 
	cambia, aún en lo más mínimo, el hash del archivo 
	cambia radicalmente. Esto hace a los datos difícil de falsificar 
	sin que nadie se dé cuenta. Una CHK individualiza un  
	archivo, no debería ser posible para dos archivos con 
	distinto contenido tener la misma CHK. La CHK 
	consiste de tres partes:
      </p>
      <ol>
	<li>el hash ṕara el archivo</li>
	<li>la clave de desencriptación que descubre el archivo, y </li>
	<li>la configuración criptográfica usada</li>
      </ol>
      <p>
	Una claveCHK típica luce como esto:
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">CHK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">hash del archivo</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">clave de desencriptación</td>   
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">crypto configuración</td>
	</tr>
      </table>
      <p>
	por ejemplo:
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">CHK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">SVbD9~HM5nzf3AX4yFCBc-A4dhNUF5DPJZLL5NX5Brs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">bA7qLNJR7IXRKn6uS5PAySjIM6azPFvK~18kSi6bbNQ</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AAEA--8</td>
	</tr>
      </table>
      <p>
	La clave de desencriptación se almacena encriptada con el archivo, así que no es  
	posible desencriptar el archivo sin la clave CHK.
      </p>
      <p>Para acceder al archivo, la clave completa deberá pegarse detrás de la dirección
	 de FProxy (acortada para caber en pantalla):</p>
      <pre>
	http://localhost:8888/CHK@SVbD9~[..]X5Brs,bA7qLN[..]Si6bbNQ,AAEA--8</pre>

      <h3>Claves de Subespacio Firmadas</h3>
      <p>
	Las Claves de Subespacio Firmadas son usualmente para sitios que van a cambiar con el tiempo. 
	Por ejemplo, un sitio web puede necesitar actualizar noticias o corregir, agregar o borrar 
	información. Trabajan de manera que nadie más pueda superponer  
	una nueva versión de tu sitio y pretender que has sido tú el que lo hizo.
      </p>
      <p>
	Funciona usando una clave pública criptográfica asi puedes firmar tu sitio. Solamente la 
	persona con la clave secreta puede agregar versiones actualizadas de tu sitio a Freenet.
      </p>
      <p>
	También la SSK consiste de cinco partes:
      </p>
      <ul>
	<li><span style="font-weight: bold;">hash de clave pública</span> - Esta parte es todo  
	  lo que se requiere para individualizar el archivo (pero no para desencriptarlo), asi que los nodos 
	  solamente necesitan almacenar esta parte. La clave pública actual es almacenada (desencriptada) con 
	  los datos  (encriptados).</li>
	<li><span style="font-weight: bold;">clave de desencriptación del documento</span> - Esta 
	  es solamente conocida por los clientes y no por los nodos que almacenan los datos, asi que los nodos no pueden 
	  desencriptar los datos que almacenan sin la dirección completa.</li>
	<li><span style="font-weight: bold;">crypto configuración</span> - Algoritmo 
	  criptográfico usado, etc.</li>
	<li><span style="font-weight: bold;">nombre seleccionado por el usuario</span> - una palabra  
	  o frase elegida por el autor del sitio.</li>
	<li><span style="font-weight: bold;">versión</span> - la versión actual del
	  sitio.</li>
      </ul>
      
      <p>
	El número de versión es incrementado cada vez que una nueva versión del sitio
	es creada e insertada en Freenet. Se usa este enfoque ya que no es
	actualmente posible actualizar datos ya insertados en Freenet. Las Claves 
	de Subespacio Actualizables  hacen esto mas transparente al usuario, ver más abajo.
      </p>
      <p>
	Una clave SSK típica se ve como esto:
      </p>
      <table>
	<tr>
	  
	  <td style="background: #def0ff;">SSK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">hash de la clave pública</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">clave de desencriptación</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">cripto configuración</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">nombre elegido por el usuario</td>
	  <td style="background: #ddd;">-</td>
	  <td style="background: #def0ff;">versión</td>
	</tr>
	  
      </table>
      
      <p>
	Por ejemplo (recortado para caber en la pantalla):
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">SSK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">GB3wuHmt[..]o-eHK35w</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">c63EzO7u[..]3YDduXDs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AQABAAE</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">mi_sitio</td>
	  <td style="background: #ddd;">-</td>
	  
	  <td style="background: #def0ff;">4</td>
	</tr>
      </table>
      
      <h3>Cómo trabajan las Claves de Subespacio Firmadas</h3>

      <ul>
	<li>El autor genera un par criptográfico: una 
	  <span style="font-weight: bold;">clave privada</span> 
	  para firmar archivos y una <span style="font-weight: bold;">
	    clave pública</span> para verificar la firma.</li>
	
	<li>El autor también genera una simple <span style="font-weight: bold;">clave simétrica</span> 
	  (una que es usada para encriptar y desencriptar).</li>
	<li>Cuando un archivo es insertado en Freenet, es encriptado con la 
	  <span style="font-weight: bold;">clave simétrica</span> y firmado 
	  con la <span style="font-weight: bold;">clave privada</span>. La 
	  firma es almacenada con el archivo. Los nodos no guardan la  
	  <span style="font-weight: bold;">clave simétrica</span>, solamente la parte de la 
	  <span style="font-weight: bold;">clave pública</span> de la SSK, 
	  como un índice a los datoas. Esto es porque pueden plausiblemente negar conocimiento 
	  de los datos en sus nodos.</li>
	
      </ul>
      
      <p>
	La SSK consiste de un hash de la clave pública, y la clave simétrica. 
	El hash de la clave pública actúa comlo el índice a los datos para propósitos de 
	búsqueda. También, la clave pública actual es almacenada con los datos. Esto es 
	para que los nodos Freenet puedan verificar la firma cuando los archivos SSK entran 
	al nodo, y es asi que los clientes pueden verificar la firma cuando 
	recuperan el archivo. La clave simétrica es para que los clienter puedan desencriptar 
	el archivo.
      </p>
      <p>
	Las Claves de Subespacio Firmadas han sido largamente reemplazadas por las Claves de 
	Subespacio Actualizables (USK), las cuales tstán basadas en SSKs pero permiten a los enlaces que intenten siempre 
	recuperar la versión más actualizadade el sitio.
      </p>
      <h3>Claves de Subespacio Actualizables</h3>
      <p>
	Las Claves de Subespacio Actualizables son útiles para enlazar a la última versión de una 
	Claves de Subespacio Firmadas (SSK) de un sitio. Nota que las USKs son realmente solo un revestimiento 
	amigable sobre una SSK, la cual oculta el proceso de búsqueda de versiones más recientes 
	de un sitio.
      </p>
      <p>
	Una USK típica se vería como sigue.
      </p>
      <table>
	<tr>
	  
	  <td style="background: #def0ff;">USK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">hash de la clave pública</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">clave de desencriptación</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">cripto configuración</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">nombre elegido por el usuario</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">número</td>
	  <td style="background: #ddd;">/</td>	
	</tr>
	
      </table>
      <p>
	Es casi idéntica a la  Claves de Subespacio Firmadas, con la excepcion del 
	númerli de versión. Hay dos tipos de direcciones USK:
      </p>
      <ul>
	<li>una USK con un número positivo al final , o</li>
	<li>una USK con un número negativo al final.</li>
      </ul>
      <p>
	Las USK con un número <span style="font-weight: bold;">positivo</span> al final 
	trabajan de esta manera: el nodo Freenet en tu ordenador mantiene una lista de  
	versiones de USKs que conoce, sin almacenar necesariamente los datos también 
	 Esta lista está constituída de visitas previas, y tambien de requerimientos en segundo plano 
	de las visitas previas a esta clase de enlaces. Cuando visitas una USK como la de más 
	abajo, consulta su lista de versiones del sitio mi_sitio 
	de número 5 o mayor. Si encuentra alguna, devuelve la última. Luego, en segundo plano, 
	busca las versiones más <span style="font-weight: bold;">nuevas</span> 
	que aún no conoce para agregar su registro USK para la próxima vez 
	que visites la dirección.
      </p>
      <p>
	Ejemplo (recortado para caber en la pantalla):
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">USK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">GB3wuHmt[..]o-eHK35w</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">c63EzO7u[..]3YDduXDs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AQABAAE</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">mi_sitio</td>
	  <td style="background: #ddd;">/</td>
	  
	  <td style="background: #def0ff;">5</td>
	  <td style="background: #ddd;">/</td>
	  
	</tr>
      </table>
      
      <p>
	Cuando visitas un enlace con un número <span style="font-weight: bold;">negativo</span> 
	al final, Freenet busca la versión que has solicitado 
	(ej. <span style="font-weight: bold;">-7</span>) y cuatro más 
	(ej. 7,8,9,10,11) en el nodo en tu ordenador y en otros 
	nodos. Si encuentra solamente la versión 7, devuelve esta. si encuentra alguna de las 
	otras, busca otro lote de cinco versiones: 12,13,14,15,16. Repite 
	esto hasta que haya cuatro versiones consecutivas que no pueda encontrar. Luego 
	devuelve la última versión que ha encontrado.
      </p>
      
      <p>
	Ejemplo (recortado para caber en la pantalla):
      </p>
      <table>
	<tr>
	  <td style="background: #def0ff;">USK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">GB3wuHmt[..]o-eHK35w</td>
	  <td style="background: #ddd;">,</td>
	  
	  <td style="background: #def0ff;">c63EzO7u[..]3YDduXDs</td>
	  <td style="background: #ddd;">,</td>
	  <td style="background: #def0ff;">AQABAAE</td>
	  <td style="background: #ddd;">/</td>
	  <td style="background: #def0ff;">mi_sitio</td>
	  <td style="background: #ddd;">/</td>
	  
	  <td style="background: #def0ff;">-7</td>
	  <td style="background: #ddd;">/</td>
	  
	</tr>
      </table>
      
      <p>
	El truco real con las USKs viene cuando la información va a ser insertada en Freenet.
	Pero más sobre esto en otro lugar.
      </p>
      
      <h3>Claves de LLavero Firmadas</h3>
      
      <p>
	Las Claves de LLavero Firmadas (KSKs) te permite guardar páginas en Freenet. No 
	son seguras contra spamming o secuestro de nombre. Varias personas podrían 
	cada una insertar un archivo diferente en Freenet, todos con la misma dirección.
	Sin embargo, hay una detección de colisión, la cual trata de prevenir 
	sobreescribir una página una vez insertada. Una dirección KSK luce como esto:
      </p>
      
      <table>
	<tr>
	  <td style="background: #def0ff;">KSK</td>
	  <td style="background: #ddd;">@</td>
	  <td style="background: #def0ff;">mi_archivo.txt</td>
	</tr>
      </table>

      <p>
	La desventaja de las KSKs es que cualquiera puede insertar un archivo con el mismo nombre
	como suyo y derivar trafico de tua archivo hacia el propio. La ventaja
	son enlaces legibles que pueden ser facilmente recordados.
      </p>
      
      <p>
	La descripción de las KSK no deberían contener barras, como las otras claves 
	(las barras son usadas para denotar Manifiestos o Contenedores).
      </p>
      <p>
	Una dirección KSK puede contener una redirección a una dirección CHK, o puede 
	contener el archivo en si mismo.
      </p>
      <h3>Contenedores</h3>
      <p>
	Un contenedor, en términos generales de Freenet, es un archivo que contiene 
	varios otros archivos. En  Freenet 0.7, un freesite, u otra colección 
	de archivos, pueden ser empaquetados todos juntos en un archivo ZIP, el cual está limitado en  
	tamaño a 2MB. Los Contenedores tienen la ventaja que cuando cargas una página 
	cargas todos los archivos del freesite, entonces o bien los carga enteramente  
	a todos o no carga nada, y se reduce grandemente el número 
	claves necesarias para insertar un freesite dado. Los Containers son corrientemente 
	creados transparentemente cuando se inserta un freesite usando ej. jSite.
      </p>
      <h3>Manifiestos</h3>
      <p>
	Un Manifiesto contiene metadata sobre la lista de bloquesen que está dividido una CHK  
	y alguna información sobre el content-type(MIME), los nombres de archivos
	y otra información útil. La información principal es si la clave 
	CHK es un archivo dividido o no, y si el manifiesto está encadenado 
	o no. No necesitas saber mucho sobre Manifiestos en orden de 
	usar Freenet, ya que es una parte que es manejada internamente.
      </p>
