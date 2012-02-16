      <h1>Noticias</h1>
    
    <a name="broken-update-1382"><h3>14 de Julio 2011 - Problemas con 1382 y actualización automática</h3></a>
    <p>Debido a pruebas insuficientes, un error serio se ha deslizado en la versión 1382.
    Freenet no podrá actualizarse a si misma, y se quejará sobre esto, con un error como:</p>
    <blockquote>
    El actualizador automático ha sido deshabilitado. Esto puede ser a causa de un problema local, como falta de espacio en disco, o el sistema de actualización puede estar comprometido. 
    La razón es: Verificar la revocación de clave falla con un error interno: FetchException:Temporary files error:null:-1:null:false:null:Already finalized..
    </blockquote>
    <p>Reinicia Freenet, usualmente será capaz de actualizarse en una hora o dos.
    Si esto no funciona (si el mensaje de error de arriba vuelve), usa los scripts update.cmd o update.sh para hacer una actualización
    manual (esto descargará la actualización de freenetproject.org). No tendrías 
    necesidad de reinstalar, por favor contáctanos si tienes mas problemas. Gracias y disculpas!<br>
    - Toad</p>
    
    <a name="freedom-house-april-2011"><h3>13 de Abril 2011 - Freenet máxima herramienta anticensura en encuesta a usuarios Chinos!</h3></a>
    <p>Un <a href="http://freedomhouse.org/template.cfm?page=383&report=97" alt="full report">reporte</a> de 
    <a href="http://freedomhouse.org/">Freedom House</a> usuarios encuestados en 
    Azerbaijan, Burma, <a href="http://freedomhouse.org/images/File/special_reports/LOtF_China.pdf" alt="Summary of results in China">China</a>
    e Irán sober sus opiniones y herramientas preferidas para evitar la censura del gobierno local. 
    En China, Freenet fué la única herramienta anticensural en alcanzar 5 estrellas, y 
    la tercera más ampliamente usada en general.
    
	<a name="wikileaks-freenet-december-2010"><h3>7 de Deciembre 2010 - Wikileaks y Freenet</h3></a>
	
	<p>Hay un <a href="http://www.reddit.com/r/technology/comments/ehep2/why_do_wikileaks_supporters_propose_designing/">mensaje en Reddit</a> 
	sobre Freenet como posible solución a prueba de censura. Desde que <a href="http://www.wikileaks.info/">Wikileaks</a> ha tenido problemas con su último alojamiento 
	como resultado de la intervención del gobierno, la gente ha estado hablando acerca de <a href="http://dot-p2p.org/index.php?title=Ideas">DNS distribuídos</a>. 
	Otros han sugerido que Freenet es una mejor solución.</p>

	<a name="big-donation-september-2010"><h3>24 de Septiembre 2010 - Otra gran donación, y breve actualización de estado</h3></a>
	<p>Una vez más el equipo Open Source de Google ha donado US$18,000 al Proyecto Freenet para apoyar  
	el desarrollo en curso del software de Freenet.</p>
	
	<p>En particular, usaremos esos fondos para completar Freenet 0.8, lacual será liberada 
	más tarde este año, e incluirá mejoras adicionales en el funcionamiento, 
	usabilidad, y mejoras en la seguridad.  También incluirá nuevas formas de  
	comunicarse sobre Freenet, incluyendo "Freetalk",un sistema de foros de discución empleando 
	una nueva aproximacion a la  "web de confianza" para prevenis el spam en una forma enteramente descentralizada.</p>

	<p>En otras noticias, el Summer of Code fué un éxito calificado, con dos de nuestros estudiantes 
	desempeñandose muy bien. El soporte para ogg vorbis/theora será incorporado pronto, y la nueva 
	capa de transporte mas eficienteserá incorporada un poco más tarde.</p>
	
	<p>Los usuarios básicos de Freenethan estado creciendo bastante constantemente, y tenemos más de 20,000 
	usuarios regulares.  Nuestro trabajo actual está enfocado grandemente en Freetalk y reescribiendo el  
	código de administracion de carga para un mejor y mas eficaz funcionamiento.</p>
	
	<a name="sorry-again-1253"><h3>14 de Junio, 2010 - Fallas serias, por favor actualiza inmediatamente</h3></a>
	<p>La versión 1253 de Freenet erpara una falla muy seria, y todos los usuarios deberían actualizarse inmediatamente, especialmente aquellos 
	corriendo sistemas de 32-bit x86. Esta versión es "obligatoria", significa que no conectará a nada anterior a  1252.
	El error estaba en la aceleración nativa FEC - esta es una librería nativa (C, not Java) usada para acelerar 
	la decodificación de archivos (un estadio en las descargas relativo a mejorar las oportunidades de que un archivo grande sea 
	recuperable agregando algunos "bloques de prueba" o datos redundantes en caso que algunos de los bloques de datos originales no puedan 
	ser hallados). Esto causa fallas de segmentación en sistemas de 32-bit Windows y probablemente en sistemas de 32-bit GNU/Linux también. Han sido 
	explotados "en el terreno" (en Frost) para cascar nodos cuando acceden a mensajes específicos en Frost. Nosotros no 
	sabemos si esto puede tornarse en algo mas serio, asi que hemos deshabilitado la aceleración FEC 
	nativa por ahora; Freenet será levemente más lenta cuando decodofica archivos descargados, pero no  
	cascará. La ayuda con la auditoría del código de la librería involucrada será bienvenida, si algún gurú C/JNI puede hacerse 
	tiempo; es más como un problema con la interfaz JNI en el código del anillo FEC.</p>
	<p>Otros cambios en 1251/1252/1253 son un poco más esperanzadores:</p>
	<ul><li><b>División de archivos en partes iguales</b> Los archivos grandes en Freenet son divididos en bloques de 32KB, los cuales son 
	luego agrupados en "segmentos" de hasta alrededor de 4MB. Hasta 1251, todo excepto los últmos segmento podian ser exactamente
	de 4MB, entonces el último segmento podía ser mucho mas pequeño que esto - en algunos casos teniendo sólo un block, o sólo
	unos pocos bloques. Esto podía causar que alguna descarga se atascase con sólo unjos pocos blocks faltantes. Ahora todos 
	los segmentos son del mismo tamaño, y hay otros refinamientos.Desafortunadamente esto causaba el error de arriba.</li>
	<li><b>Nueva infraestructura de filtro de contenido</b> Freenet filtra varios tipos de datos, por ejemplo HTML, para 
	asegurar que no pueden revelar tu dirección IP. Uno de nuestrs estudiantes en el  Summer of Code (Spencer) ha estado
	trabajando en mejorar esto, y la primer parte de su trabajo ha sido incorporada. El filtrado ahora se realiza a 
	bajo nivel, y puede luego ser usado por clientes FCP y para descargas persistentes. Esto también facilitará la 
	forma de manejar con eficiencia grandes archivos cuando Spencer implemente filtros para formatos multimedia posteriormente
	este año.</li>
	</ul>
	<p>Disculpas por esto chicos. La red estará algo caótica por unos pocos días y quizás más lenta que lo 
	usual a causa de esta versión obligatoria, pero la mayoría parece haber actualizado ahora. Gracias por su paciencia.
	Pueden ver un reporte mas completo en  <a href="http://amphibian.dyndns.org/flogmirror/">el Blog de Todd</a>.</p>

	<a name="sorry-folks-1248"><h3>8 de Junio, 2010 - Disculpas, "freenet.ini está perdido", y 1249</h3></a>
	<p>Algunas instalaciones en Windows de Freenet estaban rotas ayer debido a un error, con un mensaje de que el lanzador
	era incapaz de encontrar el archivo freenet.ini. Esto fué en realidad debido a un un error de larga data reparado en la versión 1249,
	pero la actualización a 1248 parece haberlo traído de nuevo. Disculpas chicos. Todo lo que tienen que hacer para repararlo es renombrar 
	freenet.ini.tmp como freenet.ini (en el directorio de instalación de Freenet, usualmente C:\Program Files\Freenet).</p>
	<p>El principal cambio reciente, aparte de la reparación de varios errores:</p>
	<p>Hay una nueva forma de indexar freesites (en la función de búsqueda incorporada), usando el nuevo complemento Spider 
	y una nueva versión del complemento existente Library. Está basado en el trabajo de infinity0	 en el Summer of Code 
	el último año. Esperamos que pronto algunas personas anónimas empiecen a corre índices freesite indizados usando esta nueva herramienta.
	Debería ser más rapido y más fácil para el propietario del índice (la persona que corre Spider) y para los usuarios el buscar
	contenidos.</p>

	<a name="gsoc-2010-accepted"><h3>26 de Abril, 2010 - Estudiantes en el Summer of Code!</h3>
	<p>El Proyecto Freenet tiene 3 estudiantes aceptados en  <a href="http://feedproxy.google.com/~r/GoogleOpenSourceBlog/~3/FnmsrUS2TBU/this-years-google-summer-of-code.html">Summer of Code</a>. 
	de Google. Google pagará a esos estudiantes por trabajar para nosotros en el verano. Estarán trabajando en:</p>
	<ul><li><b>Mejoras de bajo nivel en conexiones de red </b> - Martin Nyhus estará trabajando en hacer que las  
	conexiones de red de bajo nivel de Freenet trabajen mas eficiente y flexiblemente. Esto mejorará el desempeño y allanará 
	el camino para los complementos de transporte a largo plazo.</li>
	<li><b>Nuevos filtros de contenidos</b> - Spencer Jackson estará trabajando en los filtros para formatos de audio y video Ogg,
	entre otros, y mejoras en el código de filtrado. Freenet tiene que filtrar contenido para asegurarse que
	no contiene ningún código que pueda revelar tu anonimato , ej. "web bugs". Esto también puede existir en los  
	archivos multimedia.</li>
	<li><b>Búsqueda distribuída</b> - Tatyana Pyatigorskaya estará trabajando en búsqueda distribuída e 
	intercambio de archivos. Esto incluye extender el trabajo del último año de  Ximin Luo sobre nuevos formatos de índices para soportar 
	índices publicados a través de tu Web de Confianza, y trabajar en una interfaz fácil de usar para mantener un archivo índice.</li>
	</ul><p>Buena suerte a todos nuestros estudiantes! Mucho del trabajo del último año ha sido o será incorporado pronto, 
	y un estudiante del último año es un mentor este año. Gracias también a <a href="http://code.google.com/soc/">Google</a>.</p>

	<a name="gsoc-2010"><h3>18 de Marzo, 2010 - Freenet es aceptada en el  Google Summer of Code 2010!</h3></a>
	<p>El Proyecto Freenet ha sido aceptado por Google por quinto año en el Google Summer of Code! Este
	ofrece a los estudiantes la oportunidad de ser remunerados por trabajar en un significativo y muy activo proyecto de software libre 
	en el verano, antes que salir de cacería al escaso mercado laboral! Voltea bits, no hamburguesas!</p>
	<p>Deberías remitir al menos dos propuestas de proyectos con  Freenet ya que a menudo ofrecemos a varios 
	estudiantes perseguir las mismas tareas. Puedes ver algunas ideas de proyectos 
	<a href="http://new-wiki.freenetproject.org/Google_Summer_of_Code/2010">aquí</a>. Inscríbete <a href="http://socghop.appspot.com/">aquí</a>.</p>
	<p>Te ayudaremos a completar los detalles técnicos, comprende exactamente lo que precisamos. También le damos la bienvenida
	a nuevas ideas y enfoques, por favor contáctanos, a nuestra lista de email de  <a href="lists.html">desarrolladores</a>,
	o <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">IRC</a>. Necesitarás  
	demostrar habilidades básicas de programación reparando una falla pequeña o implementando alguna característica menor; debrías 
	echar una mirada en <a href="https://bugs.freenetproject.org/">el reastreador de fallas</a>, el cual tambien podría ser
	una fuente de ideas de proyecto. <a href="http://new-wiki.freenetproject.org/">La nueva wiki</a>, y 
	<a href="http://wiki.freenetproject.org/">la vieja wikii</a> también son buenas fuentes de ideas y
	documentación. Si quieres trabajar para nosotros en el verano, por favor <a href="http://socghop.appspot.com/">inscríbete</a>!</p>
	<p>PD: hemos reinstalado uservoice, luego de que su soporte nos contactó mediante nuestro rasterador de fallas y parece haber solucionado ampliamente el problema del spam
	<a href="http://freenet.uservoice.com/">Haz click</a> para hacer sugerencas de como mejorar Freenet!</a></p>

	<a name="build-1243-opennet-changes"><h3>17 de Marzo, 2010 - Mejoras en el desempeño de la red abierta y version 1243</h3></a>
	<p>La versión 1243 está liberada. Tiene muchos cambios focalizados en hacer que los nuevos nodos tomen velocidad más rápido haciendo que  
	conecten con  muchos otros nodos tan rápido como sea posible. Este proceso de "anuncio" o "inicio", el cual solamente
	ocurre si tienes la red abierta habilitada (ej. el nivel de seguridad de tu red es BAJO o NORMAL) también sucede cuando tu
	ha estado fuera de línea por un período extenso (horas). Dejanos saber como va! La información es siempre bienvenida, particularmente
	<a href="https://bugs.freenetproject.org/">reportes de errores</a>.</p>
	
	<p>PD hemos puesto uservoice fuera de línea debido a incapacidad de no manejar eficientemente el spam. Aún estamos interesados en 
	sugerencias de como mejorar Freenet, por favor envíalas a la <a href="http://new-wiki.freenetproject.org/Suggestions">Wiki</a> o al 
	<a href="https://bugs.freenetproject.org/">restreador de errores</a>, o conversa con nosotros por <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">IRC</a>  o las  
	<a href="lists.html">listas de correo</a>. Estamos interesados en una alternativa a uservoice 
	si sabes de alguna.</p>

	<a name="new-paper-march-2010"><h3>9 de Marzo, 2010 - Nuevo artículo agregado</h3></a>
	<p>Un nuevo artículo ha sido agregado, <a href="/papers/freenet-0.7.5-paper.pdf">Comunicación Privada Mediante una Red de Conexiones Confiables: The Dark Freenet</a>, 
	escrito por Oskar y Vive (dos de nuestros teóricos) con alguna ayuda de Toad (chief coder). Se focaliza en la arquitectura de la red, antes que en los algoritmos de enrutado e intercambio, 
	los cuales <a href="/papers.html">otros artículos</a> han descrito en detalle. Este tiene un leve foco en darknet, pero debería ser de interés para cualquiera interesado en cómo trabaja la red.  
	Tiene también algunas simulaciones nuevas...</p>

	<a name="status-update-jan-2010"><h3>4 de Febrero, 2010 - Actualización de estado de Freenet</h3></a>
	<p>Tiempo para una actualización de estado...</p>
<h2>VERSION 1240</h2>
<p>Nuestra última version, 1239, fué en Noviembre. Hemos liberado recientemente una nueva, 1240. Tiene muchos cambios (temas de red abierta, optimizaciones, toda clase de cosas), las que enumero en el email respectivo. 
Una de las más importantes es que hay varios seednodes nuevos, y muchos caídos han sido desactivados. Los he probado  3 veces hoy y enganchan cada vez más rápido, aunque 
ayer lo hacían muy lento.</p>
<h2>ESTADO DE RED Y ESTADISTICAS DE RED</h2>
<p>Evan Daniel ha estado haciendo un trabajo bastante útil analizando la red. Entre otras cosas, él ha descubierto que:</p>
<ul><li>El artículo de The Guardian, en Diciembre, el cual fué reimpreso por todo el mundo, tiene más del doble del tamaño de nuestra red, aunque ahora haya una tendencia levemente más baja. 
Esto puede deberse a los problemas con seednodes y no haber tenido una  versión desde Noviembre.</li>
<li>Tenemos alrededor de 4500-7000 nodos en línea en cualquiers instante dado.</li>
<li>Hace 5 dias, teníamos alrededor de 14000 nodos no trasientes.</li>
<li>De los nodos en línea en todo momento, bastamente 37% son nodos 24x7  (96% promedio de uptime), 33% son usuarios regulares (56% promedio de uptime), y 30% son nodos ocacionales o novatos
(16% promedio de uptime).</li>
</ul>
<h2>EMU HA MUERTO, VIVA OSPREY</h2>
<p>Finalmente nos hemos desecho de emu! Nuestro fiel y poderoso servidor dedicado proporcionado con descuento por Bytemark no está mas. Ahora tenemos una máquina virtual llamada Osprey, la cual hace la mayoría 
del mismo trabajo, por mucho menos costo, y tiene una configuración más simplificada así que debería ser más fácil de mantener. Hemos tratado de tercerizar servicios, por ejemplo usamos Google Code para nuestras descargas, 
pero algunas cosas deberań mantenerse bajo nuestro control directo por alguún tiempo ej. listas de correo y seguimiento de errores.</p>
<p>Podrías tener problemas con los scripts de actualización, si usas update.sh / update.cmd. Si no funcionan, intenta actualizar el script manualmente desde <a class="maybeSwitchProtocol" href="https://checksums.freenetproject.org/latest/update.cmd">https://checksums.freenetproject.org/latest/update.cmd</a> 
(o <a class="maybeSwitchProtocol" href="https://checksums.freenetproject.org/latest/update.sh">update.sh</a>)</p>
<h2>WOT, FREETALK, COSAS RELACIONADAS Y OTROS COMPLEMENTOS</h2>
<p>Xor (también conocido como p0s) continúa trabajando en los complementos Red de Confianza y Freetalk. Se están acercando al punto en que podemos hacerlos cargar desde la página de complementos, y luego 
empaquetarlos, habilitados por defecto.</p>
<p>WoT es el sistema de administración el cual implementa una web de confianza seudónima, que funciona de manera similar en FMS. Puedes crear identidades, asignar confianza a identidades, 
anunciar tu identidad mediante  CAPTCHAs y así siguiendo. Este es el menú Comunidad, desde el cual puedes ver tus identidades y las de otras personas, y la relación de confianza entre ellas. 
WoT es usado por Freetalk, FlogHelper, y probablemente pronto por bṕusqueda distribuída, charla en tiempo real y otras cosas.</p>
<p>Freetalk es un sistema de chat resistente a spam basado en WoT. Es similar a  FMS, pero eventualmente sera incorporado a Freenet, y será parte de esta por defecto. Serás capaz de embeber 
un tablón Freetalk en tu freesite. FlogHelper es un complemento basado en WoT-para escribir un flog (freenet blog), el cual es muy fácil de usar, pero usa WoT para manejar identidades. Yo debería haber incorporado FlogHelper 
hace meses, pero WoT no está listo aún y FlogHelper lo necesita.</p>
<p>WoT debería estar listo pronto. Recientemente un problema importante ha sido descubierto en el algoritmo de cálculo de confianza, luego de repararlo y de algunos problemas menores, WoT se convertirá en un complemento semi-official, 
el cual tristemente requerirá el vaciado de la existente web de confianza de pruebas, así que tristemente todas las identidades y mensages desaparecerán. Freetalk necesita más trabajo, alrededor del  50% de los errores marcados en 0.1 en el 
mapa de ruta están reparados al momento.</p>
<p>In build 1240, we pull in a new version of Library. This is a great improvement over the old version, it is faster, it supports embedding a search on a freesite, and has many bugs fixed. 
However searching for common terms can still cause out of memory crashes.</p>
<p>There is another issue with Library: infinity0 spent last summer creating a scalable index format for Library, which should make it a lot easier to insert and maintain big indexes. We will soon 
change the spider to use this new format, and in the process we expect to greatly improve performance for writing indexes, so it doesn't take a week any more and is done incrementally. 
I realise this has been promised before, but it is important, so it will happen sooner or later, hopefully sooner.</p>
<p>Full Web of Trust-based distributed searching, with a focus on filesharing, is on the distant horizon at the moment. infinity0 might be able to do some work on it as part of his studies, we'll see. 
It won't be in 0.8.0.</p>
<h2>PRIORITIES AND RELEASES</h2>
<p>We would like to get 0.8 out soon, or at least a beta of 0.8. Several major issues:</p>
<ul><li>The windows installer needs to be fixed on 64-bit. This is being worked on.</li>
<li>Freetalk must be ready.</li>
<li>Auto-configuration of memory limits in the installers, and asking the user about memory usage (at least in some cases) is relatively easy and important, but not vital.</li>
<li>Substantial improvements to opennet, particularly making nodes announce onto the network and get where they should be as quickly as possible.</li>
<li>Substantial improvements to data persistence. We have done much here already but there is more to do.</li>
<li>Library must work well and fast out of the box. This means amongst other things the new spider mentioned above.</li>
<li><b>MANY BUG FIXES!</b> The first beta does not need to be perfect, but there are some critical issues that need dealing with, such as the fact that nodes often don't resume properly 
after being suspended for a while.</li>
</ul>
<p>Please test Freenet, and report any bugs and usability issues you find on <a href="https://bugs.freenetproject.org/">the bug tracker</a> or via Freetalk board en.freenet (note that this 
	will be wiped soon so if after a new Freetalk release it is wiped you may need to resend).</p>
<h2>OPENNET IMPROVEMENTS</h2>
<p>We have many ideas on how to improve opennet bootstrapping (make nodes assimilate into the network more quickly), and to improve opennet generally. Some of these are implemented in 1240, 
including many bugfixes. More will be put out over time so we can see their impact. Improving opennet should improve performance for the majority of users who don't run 24x7 and it should 
improve performance for everyone else too, as those nodes will get connected and start doing useful work more quickly.</p>
<h2>DATA PERSISTENCE</h2>
<p>We have many ideas on how to improve data persistence. There is a lot of capacity on the network, yet data seems to become inaccessible quite quickly (stats below). I am convinced that 
improving data persistence will improve Freenet's usability and perceived performance immensely. The continued popularity of insert on demand on uservoice demonstrates this as much as anything: 
People want a system that works! IMHO we can greatly improve things without resorting to insert on demand, although filesharing clients based on distributed searching may eventually offer it 
(but there are serious security issues with insert on demand).</p>
<p>Evan is convinced that mostly poor data persistence is not due to data falling out of stores, but due to the small number of nodes that stored the data (as opposed to caching it) going offline 
or becoming unreachable. We have increased the number of nodes that store data, we have made the node use the store for caching if there is free space, we have done various things aimed 
at improving data persistence, and there is much more we can do. An immediate question is whether the security improvements gained last year by not caching at high HTL have broken many 
inserts by making them not get cached on the right nodes; we will test this in 1241. A related question is why inserting the same key 3 times gives such a huge performance gain relative to 
inserting it once; we will investigate this soon after. We will probably triple-insert the top blocks of splitfiles soonish, but the bigger prize is to achieve the 90%+ success after a week that we see 
with triple-insertion of a single block, and this may well be possible with some changes to how inserts work...</p>
<p>Finally, the redundancy in the client layer could be a lot smarter: We divide files up into groups of 128 blocks, called segments, and then add another 128 "check blocks" for redundancy. 
Unfortunately this means that sometimes the last segment only has 1 block and 1 check block, and so is much less reliable than the rest of the splitfile. We will fix this.</p>
<p>We have been collecting statistics on data retrievability over time. The below are "worst case" in that they relate to single CHK blocks, with no retries. Real life, with many retries (at least 2 
	for a direct fetch and more if the file is queued), and with large, redundant splitfiles, should be substantially better than these numbers. Every day we insert 32 blocks and fetch a bunch of 
32 blocks from 1 day ago, 3 days ago, 7 days ago, etc. There are two of these running to get more data, so I am just showing both results here. The percentages are the proportion of the original 
insert that is still retrievable:</p>
<table border="0">
<tr><td>1 day</td><td>76% / 77%</td></tr>
<tr><td>3 days</td><td>66% / 70%</td></tr>
<tr><td>7 days</td><td>60% / 61%</td></tr>
<tr><td>15 days</td><td>48% / 48%</td></tr>
<tr><td>31 days</td><td>36% / 33%</td></tr>
<tr><td>63 days</td><td>21% / 19%</td></tr>
</table>
<p>Now, here's an interesting one. In each case we insert a 64KB CHK splitfile - that is, one block at the top and four underneath it. We insert one three times, and we insert three different ones 
once each. We then pull them after a week. We can therefore compare success rates for a single block inserted once, a single block inserted 3 times, and a simulated MHK, that is, a block which 
has been re-encoded into 3 blocks so that we fetch all of them and if any of them succeeds we can regenerate the others.</p>
<p>Total attempts where insert succeeded and fetch executed: 63</p>
<p>Single keys succeeded: 61</p>
<p>MHKs succeeded: 58</p>
<p>Single key individual fetches: 189</p>
<p>Single key individual fetches succeeded: 141</p>
<p>Success rate for individual keys (from MHK inserts): 0.746031746031746</p>
<p>Success rate for the single key triple inserted: 0.9682539682539683</p>
<p>Success rate for the MHK (success = any of the 3 different keys worked): 0.9206349206349206</p>
<h2>USER INTERFACE AND USABILITY</h2>
<p>Ian's friend pupok is working on a new AJAXy user interface mockup for Freenet. sashee's web-pushing branch, which makes the user interface a lot more dynamic without making it look 
much difference, should be merged soon, but turned off by default, since it has some nasty bugs. When it is turned on, it solves the age-old parallel connections bug, showing individual progress 
for each image without hogging your browser's limited number of connections (6 or 8 on modern browsers). Both of these may miss 0.8.</p>
<p>More broadly on usability, usability testing is always welcome: Persuade a friend to install Freenet, watch them do it, don't help them unless they get really stuck, report any problems they 
have or any comments they make about how it could be better.</p>

	<a name="more-peers"><h3>21st August, 2009 - Freenet increases peers limit (#1 on uservoice)</h3></a>
	<p>Freenet 0.7 build 1231 solves what was <a href="http://freenet.uservoice.com/pages/8861-general/suggestions/93039-release-the-20-nodes-barrier?ref=title">
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
	minutes, to help with <a href="http://wiki.freenetproject.org/UltraLightweightPassiveRequests">propagating Frost/FMS posts</a>
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
      <p><a class="maybeSwitchProtocol" href="download.html">https://freenetproject.org/download.html</a></p>
      <p>
	If you have any difficulty getting Freenet to work, or any
	questions not answered in the <a href="/faq.html">faq</a>, please
	join us
	on <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	in the #freenet channel at irc.freenode.net, or email
	the <a class="maybeSwitchProtocol" href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/support/">support
	  mailing list</a>. If you have any suggestions for how to
	improve Freenet, please
	visit <a href="http://freenet.uservoice.com/">our uservoice
	  page</a>.
      </p>
      <p>
	There is a lot of work still to do on Freenet, particularly
	when it comes to ease of use.  If you have Java programming or
	web design skills, or would like to help translate Freenet
	into your own language, and would like to help us improve
	Freenet, please join
	our <a class="maybeSwitchProtocol" href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl/">development
	mailing list</a> and introduce yourself.
      </p>

      <a name="another-big-donation-google"><h3>7th May, 2009 -
      Another big donation funds ongoing development</h3></a>

      <p>
	<a href="http://www.google.com/">Google</a>'s <a href="http://code.google.com/opensource/">Open Source team</a> has donated US$18,000 to the Freenet Project to 
	support the ongoing development of the Freenet software (thanks again 
	Google!).
      </p>

      <p>
	Their last donation funded the db4o project, which has now been merged into 
	Freenet, greatly improving performance for large download queues while 
	reducing memory usage, amongst other benefits.
      </p>
      <p>
	We are currently working on Freenet 0.8, which will be released later this 
	year, and will include additional performance improvements, usability work, 
	and security improvements, as well as the usual debugging. Features are not 
	yet finalized but we expect it to include Freetalk (a new anonymous web 
	forums tool), a new Vista-compatible installer for Windows (that part will be 
	out in a few days), and hopefully Bloom filter sharing, a new feature 
	enabling nodes to know what is in their peers' datastores, greatly improving 
	performance, combined with some related security improvements.
      </p>

