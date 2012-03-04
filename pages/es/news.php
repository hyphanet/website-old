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
WoT es usado por Freetalk, FlogHelper, y probablemente pronto por búsqueda distribuída, charla en tiempo real y otras cosas.</p>
<p>Freetalk es un sistema de chat resistente a spam basado en WoT. Es similar a  FMS, pero eventualmente sera incorporado a Freenet, y será parte de esta por defecto. Serás capaz de embeber 
un tablón Freetalk en tu freesite. FlogHelper es un complemento basado en WoT-para escribir un flog (freenet blog), el cual es muy fácil de usar, pero usa WoT para manejar identidades. Yo debería haber incorporado FlogHelper 
hace meses, pero WoT no está listo aún y FlogHelper lo necesita.</p>
<p>WoT debería estar listo pronto. Recientemente un problema importante ha sido descubierto en el algoritmo de cálculo de confianza, luego de repararlo y de algunos problemas menores, WoT se convertirá en un complemento semi-official, 
el cual tristemente requerirá el vaciado de la existente web de confianza de pruebas, así que tristemente todas las identidades y mensages desaparecerán. Freetalk necesita más trabajo, alrededor del  50% de los errores marcados en 0.1 en el 
mapa de ruta están reparados al momento.</p>
<p>En la versión 1240, introdujimos una nueva versión de Library. Esta es una gran mejora sobre la versión vieja, es más rápido, soporta embeber una búsqueda en freesite, y tiene más errores reparados. 
Sin embargo buscar términos comunes aún provoca errores de memoria insuficiente.</p>
<p>Hay otro problema con Library: infinity0 empleó el último verano creando un formato de índice escalable para Library, el cual debería hacer mucho más fácil insertar y mantener índices grandes. Pronto 
cambiaremos el buscador para usar este nuevo formato, y en el proceso esperamos mejorar grandemente el desempeño para escribir índices, así no volverá a tomar una semana y se hace incrementalmente. 
Soy conciente que se ha prometido antes, pero es importante, así que sucederá tarde o temprano, espero que temprano.</p>
<p>Una búsqueda completa distribuída basada en Web de Confianza , focalizada en compartir archivos, está lejana en el horizonte por el momento. infinity0 deberá ser capaz de hacer algun trabajo en ella como parte de sus estudios, veremos. 
No estará en 0.8.0.</p>
<h2>PRIORIDADES Y PUBLICACIONES</h2>
<p>Nos gustaría sacar 0.8 pronto, o al menos una beta de 0.8. Varios problemas importantes:</p>
<ul><li>El instalador de Windows necesita ser reparado en 64-bit. Se ha estado trabajando en eso.</li>
<li>Freetalk deberá estar listo.</li>
<li>Auto-configuratión de límites de memoria en los instaladores, y preguntarle al usuario sobre cuanta memoria usar (al menos en algunos casos) es relativamente fácil e importante, pero no vital.</li>
<li>Sustanciales mejoras a la red abierta, particularmente hacer que los nodos se anuncien en la red y se ubiquen donde debean estar tan rapidamente como sea posible.</li>
<li>Sustanciales mejoras a la persistencia de datos. Ya hemos hecho mucho aquí pero hay más para hacer.</li>
<li>Library debe trabajar bien y rápido apenas instalado. Esto significa entre otras cosas el nuevo buscador mencionado arriba.</li>
<li><b>MUCHOS ERRORES REPARADOS!</b> La primer beta no necesita ser perfecta, pero hay algunos problemas críticos con los que lidiar, como el hecho que los nodos a menudo no reanudan adecuadamente
después de haber sido suspendidos por un tiempo.</li>
</ul>
<p>Por favor prueba Freenet, y reporta cualquier error y problemas de usabilidad que encuentres en el  <a href="https://bugs.freenetproject.org/">rastreador de erroresr</a> o vía Freetalk tablón en.freenet (nota que este 
	será borrado pronto asi que si luego de una nueva edición de Freetalk se borran deberás reenviarlos).</p>
<h2>MEJORAS EN LA RED ABIERTA</h2>
<p>Tenemos muchas ideas de como mejorar el inicio de la red abierta (hacer que los nodos se asimilen a la red más rápidamente), y mejorar la red abierta en general. Algunas de ellas serán implementadas en 1240, 
incluyendo muchas correcciones de errores. Pondremos más con el tiempo para que podamos apreciar su impacto. Mejorar la red abierta debería mejorar el desempeño para la mayoría de los usuarios quienes no corren 24x7 y debería 
mejorar el desempeño para cualquier otro también, y estos nodos conectarán y arrancaran haciendo un trabajo útil más rapidamente.</p>
<h2>PERSISTENCIA DE DATOS</h2>
<p>Tenemos muchas ideas de cómo mejorar la persistencia de datos. Hay un montón de capacidad en la red, aún así los datos parecen volverse inaccesibles muy rápidamente  (estadísticas abajo). Estoy convencido que 
mejorar la persistencia de datos mejorará la usabilidad y la percepcion del desempeño de Freenet  inmensamente. La continuada popularidad de insertar por demanda en uservoice lo demuestra mas que cualquier cosa: 
La gente quiere un sistema que funcione! EMHO podemos mejorar grandemente las cosas sin reordenar la inserción por demanda, aunque los clientes para compartir archivos basados en búsqueda distribuída deberían eventualmente ofrecer esto 
(pero hay serios problemas de seguridad con insertar por demanda).</p>
<p>Evan está convencido que mayormente la pobre persistencia de datos no es debida a que los datos desaparezcan de los almacenes, sino debida a que el pequeñonúmero de nodos que almacenan los datos (como opuesto a cachearlos)  quedan fuera de línea 
o se tornan inencontrables. Hemos incrementado el número de nodos que almacenan datos, hemos hecho que el nodo use el almacén para cachear si hay espacio libre, hemos hecho varias cosas apuntando 
a mejorar la persistencia de datos, y hay mucho más que podemos hacer. Una cuestión inmediata es si las mejoras de seguridad obtenidas el último año por no hacer cache en altos HTL han roto muchas 
inserciones haciendo que no se cacheen en los nodos correctos; vamos a probar esto en 1241. Una cuestión relacionada es por qué insertar la misma clave 3 veces da tan enorme ganancioa en el desempeño con relación a  
insertarla sólo una vez; investigaremos esto pronto. Probablemente triple-insertaremos los bloques de cabecera de los archivos muy prontamente, pero el gran premio es alcanzar 90%+ de éxito luego de una semana que vemos 
con triple-insercion de un solo bloque, y esto podria ser bien posible con algunos cambios a cómo se inserta...</p>
<p>Finalmente, la redundancia en la capa del cliente puede ser mucho más inteligente: Dividimos archivos en grupos de hasta 128 bloques, llamados segmentos, y luego sumamos otro "bloque de verificación" para redundancia. 
Desafortunadamente esto significa que a veces el último segmento solamente tiene 1 bloque y 1 bloque de verificación, y así es mucho menos confiable que el resto del archivo. Repararemos esto.</p>
<p>Hemos estado recolectando estadísticas sobre recuperabilidad de datos en el tiempo. Las de abajo son "peores casos" que se refieren a bloques CHK individuales, sin reintentos. En la vida real, con muchos reintentos (al menos 2 
	para una captura directa y más si el archivo está en cola), y con grandes, redundantes archivos, debería ser sustancialmente mejor que esos números. Cada día insertamos 32 bloques y capturamos un manojo
de 32 bloques de hace 1día, hace 3 días, hace 7 días, etc. Hay dos de esos corriendo para obtener más datos, así que sólo estoy mostrando ambos resultados aquí. Los porcentajes son la proporción del original 
insertado que todavía es recuperable:</p>
<table border="0">
<tr><td>1 día</td><td>76% / 77%</td></tr>
<tr><td>3 días</td><td>66% / 70%</td></tr>
<tr><td>7 días</td><td>60% / 61%</td></tr>
<tr><td>15 días</td><td>48% / 48%</td></tr>
<tr><td>31 días</td><td>36% / 33%</td></tr>
<tr><td>63 días</td><td>21% / 19%</td></tr>
</table>
<p>Ahora, aquí hay un punto interesante. En cada caso  insertamos un archivo 64KB CHK  - esto es, un bloque al tope y cuatro debajo de este. Insertamos uno tres veces, e insertamos tres diferentes 
cada vez. Luego tiramos de ellos después de una semana. Podemos por lo tanto comparar promedios de éxito de un bloque individual insertado una vez, un bloque individual insertado 3 veces, y un MHK simulado, esto es, un bloque el cual 
ha sido re-codificado en 3 bloques tal que capturamos todos ellos y si uno de ellos era exitoso podemos regenerar los otros.</p>
<p>Total de intentos donde insertar tuvo éxito y la captura ejecutada: 63</p>
<p>Claves individuales exitosas: 61</p>
<p>MHKs exitosos: 58</p>
<p>Claves individuales capturadas: 189</p>
<p>Claves individuales capturadas exitosas: 141</p>
<p>Promedio de éxitos para claves individuales (de MHK insertadas): 0.746031746031746</p>
<p>Promedio de éxitos para claves triple-insertadas: 0.9682539682539683</p>
<p>Promedio de éxitos para las MHK (éxito = cualquiera de 3 claves diferentes que haya funcionado): 0.9206349206349206</p>
<h2>INTERFAZ DE USUARIO Y USABILIDAD</h2>
<p>El amigo de Ian pupok está trabajando en borrador de una nueva interfez de usuario AJAXy para Freenet. la rama de web-pushing de sashee, la cual hace la interfaz de usuario mucho más dinámica sin hacerla parecer  
muy diferente, podría ser incorporada pronto, pero desactivada por defecto, ya que tiene algunos errores molestos. Cuando está activadda, resuelve el problema de las conecciones paralelas anticuadas, mostrando progresos individuales 
para cada imagen sin consumir demasiado del limitado número de conexiones de tu navegador (6 u 8 en los navegadores modernos). Nos las perderemos en 0.8.</p>
<p>Más ampliamente en utilidad, las pruebas de usabilidad son siempre bienvenidas: Convence a un amigo de instalar Freenet, observa cómo lo hace, no lo ayudes a menos que esté realmente atrancado, reporta cualquier problema que 
tenga o cualquier comentario que haga sobre cómo podria ser mejor.</p>

	<a name="more-peers"><h3>21de Agosto, 2009 - Freenet incrementa el número de pares (#1 on uservoice)</h3></a>
	<p>Freenet 0.7 versión 1231 resuelve lo que fué <a href="http://freenet.uservoice.com/pages/8861-general/suggestions/93039-release-the-20-nodes-barrier?ref=title">
	el número uno de peticiones uservoice</a>. Hasta ahora, la mayoría de los nodos Freenet tenían exactamente 20 conexiones. Ahora,
	el número de conexiones (pares de red abierta, o "Conexiones con Desconocidos") variará de acuerdo a cuanto
	ancho de banda de subida tengas, entre 10 y 40. Así los nodos lentos tendrán menos pares (negociando un enrutamiento
	levemente menos efectivo para una mayor eficiencia) y los nodos rápidos tendrán más pares. Sobre todo esperamos que esto
	 mejore la velocidad, pero es difícil de simular estas cosas, asi que busquemoslas!</p>
	
	<p>También, el <a href="http://code.google.com/soc/">Google Summer of Code</a> ha terminado, y todos nuestros 
	estudiantes han aprobado. Mucho de su trabajo está aún en el proceso de ser incorporado en Freenet en si misma.
	Aún por venir, una mejor transferencia de archivos amigo-a-amigo, un nuevo filtro CSS, un filtro de resúmenes ATOM, un nuevo
	complemento de búsqueda con muchas mejoras y un nuevo formato de índice escalable, y mucho mayor (perio aún  
	opcional) uso de javascript en la interfaz web para hacerla más receptiva.</p>

	<a name="xml-vuln"><h3>8 de Agosto, 2009 - Actualiza tu Java Virtual Machine <b>ahora</b>: severa vulnerabilidad XML afecta Freenet</h3></a>
	<p>Si estás corriendo Freenet sobre Java anterior a 1.6 versión 15 o 1.5 versión 20, por favor actualiza tan pronto como sea posible.
	Hasta que actualices Java, Freenet deshabilitará la función de búsqueda y varios otros complementos para 
	minimizar el riesgo. Sin embargo, si tienes personas no confiables en tu  LAN (red local),
	te recomendamos que <b>apagues Freenet inmediatamente</b> hasta que seas capaz de actualizar
	tu Java. Además, no corras Thaw, el cual es sabido que es vulnerable, hasta que hayas 
	actualizado, y no aceptes archivos de configuración jSite de cualquiera. La versión 1228 de 
	Freenet te dirá si tu Java es vulnerable. Usuarios de Windows generalmente serán 
	notified por Java cuando haya actualizaciones disponibles; la situación puede ser un poco más complicada para usuarios de  
	GNU/Linux y Mac OS/X ya que deberán esperar por una actualización para sus distribuciones GNU/Linux 
	o de Apple respectivamente.</p>
	
	<p>Para más detalles, mira <a href="http://www.cert.fi/en/reports/2009/vulnerability2009085.html">aquí</a>.
	El problemae es una vulnerabilidad de ejecución remota de código que afecta a Java y también algunos
	otros programas que usan ciertas librerías de análisis (parsing) XML . Fué <a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2009-2625">inicialmente pensada</a> para
	ser puramente un ataque de denegación de servicio, pero hay circulando código para aprovecharla (exploit code).</p>

	<a name="build1226"><h3>30 de Julio, 2009 - Varias mejoras de seguridad y preparación para compartir el filtro Bloom en la nueva versión estable</h3></a>
	
	<p>
	La versión 1226 está ahora disponible, incluytendo muchos cambios. Los nodos Freenet existentes la  
	actualizarán automáticamente. Algunas de las nuevas características más interesantes incluyen:</p>
	<ul>
	<li><b>Finalmente reparación del <a href="http://www.theregister.co.uk/2005/05/13/freener_not_so_anonymous/">ataque de The Register'</a>!</b><br>
	En 2005, The Register descubrió lo que muchos de nosotros sabíamos desde hace un tiempo - que
	Freenet almacena todo lo que visitas en su almacén de datos, y por lo tanto que si 
	tu ordenador es capturado o robado, los chicos malos podrían ser capaces de determinar qué
	has estado navegando. O podrían inclusive hacerlo remotamente sondeando tu
	almacén de datos. Esto está reparado ahora. Freenet no almacenanada que hayas descargado,
	visitado, o subido, en tu almacén de datos. Sin embargo, para maximizar el desempeño, tenemos
	un cache privado de los freesites que has visitado, llamado el  "cache del cliente",
	y tenemos un  "cache slashdot" el cual almacena todo pero solo por 30
	minutos, para ayudar con la  <a href="http://wiki.freenetproject.org/UltraLightweightPassiveRequests">propagación de envíos Frost/FMS</a>
	e inundación flash (flash floods). Hemos planeado reparar esto con túneles encriptados (anteriormente
	conocidos como enrutamiento de pre mezcla (premix routing), pero es unproyecto difícil el cual puede costar mucho
	desempeño. Los cambios en esta edición reducirán el desempeño levemente, pero 
	habilitarán nuevas cosas las cuales debeŕian mejorar el desempeño grandemente, también como
	mejorar la usabilidad de Freenet en regímenes hostiles. Ningún sistema de seguridad es  
	perfecto, no obstante Freenet podría ser mejor para una aplicación específica que  
	las alternativas, <b>especialmente si usas darknet</b>,y darknet Freenet 
	puede funcionar donde muy pocos otras podrían.</li>
	<li><b>Encriptación para datos locales sensibles</b><br>
	El nuevo cache de cliente y la base de datos de descargas/subidas pueden ahora ser encriptadas.
	ESto es controlado por la configuración del "nivel de seguridad física". Si lo estableces en
	BAJO, nada es encriptado, ni siquiera los archivos temporales, y Freenet usará menos
	CPU y trabajará levemente más rapido. Si lo estableces en NORMAL o más alto, Freenet 
	ahora encriptará tu cache de cliente y base de datos de descargas. En NORMAL, las claves son 
	guardadas en u narchivo master.keys, así si birras este archivo seguramente (o haces click en el
	botón de pánico en la página de descargas), ambos desaparecerán. En ALTO, las claves están aún 
	en master.keys, pero está protegido por contraseña. En MAXIMO, las claves no 
	se guardan para nada, son diferentes cada vez que inicias Freenet; esto significa
	que tu lista de descargas durará solamente hasta el próximo reinicio, pero al menos
	puedes estar seguro que si reinicias el nodo, nadie puede decir lo que has estado
	haciendo conél. Así tienes un control detallado sobre el balance enter seguridad,
	conveniencia y desempeño. Esto permite a aquellos con ordenadores lentos usar BAJO,
	y a aquellos quienes viven en regímenes hostiles donde es probable que sus ordenadores 
	sean secuestrados usar ALTO o MAXIMO.</li>
	<li><b>Preparación para el filtro Bloom</b><br>
	Hubieron dos razones para todo esto. La primera es mejorar la seguridad para aquellos
	viviendo en regímenes hostiles donde sus ordenadores pueden ser secuestrados y ellos pueden meterse
	en problemas por lo que han estado haciendo en Freenet. Lo segundo es prepararse
	para la característica de gran desempeño para 0.8, el filtro Bloom. Esencialmente,  
	la idea es que les decimos a nuestros pares (peers)  que claves tenemos en nuestro almacén de datos usando 
	una estructura de datos altamente comprimidos llamada filtro Bloom. Podemos luego decir inmediatamente
	cuando uno de nuestros pares tiene el bloque que estamos buscando, evitando potencialmente
	la búsqueda y transferencia de datos a travez de muchos otros nodos. Esto debería 
	mejorar el desempeño considerablemente, reduciendo la latencia, incrementando la velocidad de las descargas,
	encontrar contenidos poco populares. Mantente informado!</li>
	</ul>

      <a name="big-donation-german-finance"><h3>8 de Julio, 2009 - Gran
      donación de  un <a href="http://www.finanzvergleich.de">Sitio de finanzas
      Alemán</a></h3></a>

      <p>
	El sitio de servicios de comparaciones financieras Alemán, <a href="http://www.finanzvergleich.de">Finanz Vergleich</a>
	nos ha dado $1,500 para financiar desarrollos venideros. Esto hará
	principalmente avanzar el trabajo en la estabilidad y usabilidad de Freenet.
	Gracias!
      </p>

      <a name="freenet-0-7-5-released"><h3>12 de Junio, 2009 - Freenet 0.7.5 liberada!</h3></a>
      <p>
	The Proyecto Freenet está muy complacido en anunciar la liberación de
	Freenet 0.7.5.
      </p>
      <p>
	Freenet es software libre diseñado para permitir el libre intercambio
	de información sobre Internet sin temor de censura,
	o represalias. Para conseguir esto Freenet hace muy difícil
	para los adversarios revelar la identidad, bien del 
	editor, o del que descarga contenidos. The Proyecto Freenet 
	comienza en 1999, liberando Freenet 0.1 en Marzo de 2000, y ha
	estado bajo activo desarrollo desde entonces.
      </p>
      <p>
	Freenet es algo inusual en el sentido en que puedes publicar contenido en
	Freenet, y luego desconectarte de la red.  Este contenido
	permanecerá disponible para otros usuarios de Freenet, aún cuando pueda
	eventualmente ser borrado si nadie está interesado en él.  Freenet
	copiará y moverá el contenido alrededor de la red de acuerdo a 
	demanda, haciendop muy difícil para un adversario remover
	contenidos.  Freenet automáticamente creará más copias del
	contenido popular para asegurar que siempre stará disponible.
      </p>
      <p>
	Freenet 0.7 introduce el concepto "darknet", permitiendo a los usuarios
	conectar solamente con sus amigos confiables (y a traves de ellos
	los amigos de sus amigos, y la red entera), reduciendo
	grandemente su vulnerabilidad a un ataque. Puedes usar Freenet
	aún si no conoces algún otro usuario Freenet, solo que esto
	no será tan seguro.
      </p>
      <p>
	Freenet 0.7.5 implementa grandes mejoras al desempeño y
	usabilidad, también como mejoras a la seguridad y
	robustez. En particular:
      </p>
      <ul>
	<li>
	  Freenet
	  ahora <a href="http://google-opensource.blogspot.com/2009/05/improving-freenets-performance.html">usa
	  una base de datos</a> para almacenar datos a largo plazo que puede sobrevivir al
	  reinicio. Esto incrementa la velocidad de Freenety reduce su
	  uso de memoria.  En particular, ahora puedes tener casi cualquier
	  número de descargas y subidas en progreso sin preocuparte
	  sobre el uso de memoria.
	</li>
	<li>
	  Mejoras a la interfaz web hacen más claro lo que
	  puedes hacer con Freenet, mostrar el progreso de carga de una página o
	  archivo topmará sólo unos pocos segundos, integra la búsqueda en la
	  página de avegación, y generalmente mejora la usabilidad en 
	  muchas áreas.
	</li>
	<li>
	  Desempeño significativamente mejorado para insertar y
	  recuperar archivos y especialmente páginas, y también para
	  la conexión inicial de Freeneta la red.
	</li>
	<li>
	  Un nuevo instalador para Windows el cual trabaja co Vista tan bien
	  como con Windows XP/2000 (Freenet tambien funciona en sistemasMac y GNU/Linux).
	</li>
	<li>
	  Muchas otras optimizaciones.
	</li>
	<li>
	  Montones y montones de errores reparados!
	</li>
      </ul>

      <p>
	Hay versiones de Freenet 0.7.5 para Windows, Mac, y
	GNU/Linux.  Pueden descargarse de:
      </p>
      <p><a class="maybeSwitchProtocol" href="download.html">https://freenetproject.org/download.html</a></p>
      <p>
	Si tienes alguna dificultad poniendo a funcionar Freenet, o alguna
	pregunta no está respondida en las  <a href="/faq.html">PUF</a>, por favor
	únete a nosotros
	en <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	en el  #freenet channel en irc.freenode.net, o email
	la <a class="maybeSwitchProtocol" href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/support/">lista de correos
	de soporte</a>. Si tienes alguna sugerencia de cómo mejorar
	Freenet, por favor
	visita <a href="http://freenet.uservoice.com/">nuestra página de uservoice</a>.
      </p>
      <p>
	Hay mucho trabajo para hacer aún en Freenet, particularmente
	hacerla fácil de usar.  Si tienes habilidades programando Java o 
	diseñando webs, i te gustaría ayudar a traducir Freenet
	a tu propio idioma, y te gustaría ayudarnos a mejorar
	Freenet, por favor súmate
	a nuiestra <a class="maybeSwitchProtocol" href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl/">lista de correo de
	desarrolladores</a> y preséntate.
      </p>

      <a name="another-big-donation-google"><h3>7 de Mayo, 2009 -
      Otra gran donación financia el desarrollo en curso</h3></a>

      <p>
	El equipo de <a href="http://www.google.com/">Google</a> <a href="http://code.google.com/opensource/">Open Source </a> ha donado US$18,000 al Proyecto Freenet 
	para apoyar el desarrollo en curso del software Freenet (gracias nuevamente  
	Google!).
      </p>

      <p>
	Su última donación financió el proyecto db4o, el cual ahora ha sido incorporado en 
	Freenet, mejorando grandemente el desempeño para grandes colas de descargas mientras 
	reduce el uso de memoria, entre otros beneficios.
      </p>
      <p>
	Actualmente estamos trabajando en Freenet 0.8, la cual será liberada más tarde este 
	año, e incluirá mejoras adicionales en el desempeño, usabilidad, funcionamiento, 
	y mejoras a la seguridad, también como la depuración usual. Características que no están aún finalizadas 
	pero esperamos incluir Freetalk (una nueva herramienta de foros web), 
	un nuevo instyalador Vista-compatible para Windows (parte estará listo en 
	unos pocos días), y esperamos el filtro Bloom, una nueva característica 
	que posibilita a los nodos saber que hay en los almacenes de datos de sus pares (peers), mejorando 
	grandemente el desempeño, combinado con algunas mejoras relativas a la seguridad.
      </p>

