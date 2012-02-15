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
	usual a causa de esta edición obligatoria, pero la mayoría parece haber actualizado ahora. Gracias por su paciencia.
	Pueden ver un reporte mas completo en  <a href="http://amphibian.dyndns.org/flogmirror/">el Blog de Todd</a>.</p>

	<a name="sorry-folks-1248"><h3>8 de Junio, 2010 - Disculpas, "freenet.ini está perdido", y 1249</h3></a>
	<p>Algunas instalaciones en Windows de Freenet estaban rotas ayer debido a un error, con un mensaje de que el lanzador
	era incapaz de encontrar el archivo freenet.ini. Esto fué en realidad debido a un un error de larga data reparado en la edición 1249,
	pero la actualización a 1248 parece haberlo traído de nuevo. Disculpas chicos. Todo lo que tienen que hacer para repararlo es renombrar 
	freenet.ini.tmp como freenet.ini (en el directorio de instalación de Freenet, usualmente C:\Program Files\Freenet).</p>
	<p>El principal cambio reciente, aparte de la reparación de varios errores:</p>
	<p>Hay una nueva forma de indexar freesites (en la función de búsqueda incorporada), usando el nuevo complemento Spider 
	y una nueva versión del complemento existente Library. Está basado en el trabajo de infinity0	 en el Summer of Code 
	el último año. Esperamos que pronto algunas personas anónimas empiecen a corre índices freesite indizados usando esta nueva herramienta.
	Debería ser más rapido y más fácil para el propietario del índice (la persona que corre Spider) y para los usuarios el buscar
	contenidos.</p>

	<a name="gsoc-2010-accepted"><h3>26 de Avril, 2010 - Estudiantes en el Summer of Code!</h3>
	<p>El Proyecto Freenet tiene 3 estudiantes aceptados en  <a href="http://feedproxy.google.com/~r/GoogleOpenSourceBlog/~3/FnmsrUS2TBU/this-years-google-summer-of-code.html">Summer of Code</a>. 
	de Google. Google pagará a esos estudiantes por trabajar para nosotros en el verano. Estarán trabajando en:</p>
	<ul><li><b>Mejoras de red de bajo nivel</b> - Martin Nyhus estará trabajando on making Freenet's 
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
	<a href="http://new-wiki.freenetproject.org/Google_Summer_of_Code/2010">here</a>. Apply <a href="http://socghop.appspot.com/">here</a>.</p>
	<p>We will help you to fill in technical details, understand exactly what we need. We also welcome
	new ideas and approaches, please contact us, on our devl <a href="lists.html">mailing list</a>,
	or <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">IRC</a>. You will need to 
	demonstrate basic coding ability by fixing a minor bug or implementing a minor feature; you should
	have a look at <a href="https://bugs.freenetproject.org/">the bug tracker</a>, which may also be
	a source of project ideas. <a href="http://new-wiki.freenetproject.org/">The new wiki</a>, and 
	<a href="http://wiki.freenetproject.org/">the old wiki</a> are also good sources of ideas and
	documentation. If you want to work for us over summer, please <a href="http://socghop.appspot.com/">apply</a>!</p>
	<p>PS we have reinstated uservoice, after their support contacted us via our bug tracker and seem to have largely cleared up the spam problem.
	<a href="http://freenet.uservoice.com/">Click here</a> to make suggestions for how to improve Freenet!</a></p>

	<a name="build-1243-opennet-changes"><h3>17th March, 2010 - Opennet performance improvements and build 1243</h3></a>
	<p>Build 1243 is now out. This contains many changes aimed at making new nodes get up to speed faster by getting 
	connected to many other nodes as quickly as possible. This "announcement" or "bootstrapping" process, which only
	happens if you have opennet enabled (i.e. your network security level is LOW or NORMAL) also happens when your
	node has been offline for an extended period (hours). Let us know how it goes! We always welcome feedback, particularly
	<a href="https://bugs.freenetproject.org/">bug reports</a>.</p>
	
	<p>PS we have taken uservoice offline due to not being able to efficiently deal with spam. We are still interested in
	suggestions on how to improve Freenet, please post them on the <a href="http://new-wiki.freenetproject.org/Suggestions">Wiki</a> or the 
	<a href="https://bugs.freenetproject.org/">bug tracker</a>, or chat with us on <a href="http://webchat.freenode.net/?randomnick=1&channels=freenet">IRC</a> or the 
	<a href="lists.html">mailing lists</a>. We are interested in any alternatives to uservoice 
	if you know of any.</p>

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
<p>You may have some difficulty with the update scripts, if you use update.sh / update.cmd. If it doesn't work, try updating the script manually from <a class="maybeSwitchProtocol" href="https://checksums.freenetproject.org/latest/update.cmd">https://checksums.freenetproject.org/latest/update.cmd</a> (or <a class="maybeSwitchProtocol" href="https://checksums.freenetproject.org/latest/update.sh">update.sh</a>)</p>
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

