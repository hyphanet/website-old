<H2>Protocolo de Enrutamiento Próxima Generación de Freenet</H2>
<b>by <a href="mailto:ian@locut.us">Ian Clarke</a>, Coordinador del Proyecto Freenet, 20 de Julio de 2003</b>
<P>Mientras Freenet ha recorrido un largo camino desde mi artículo en 1999, las 
ideas fundamentales tras cómo Freenet encuentra la información han cambiado 
muy poco. Ahora que Freenet está madurando es el momento de re-examinar 
la arquitectura central de Freenet para ver dónde puede ser mejorada. Este nuevo 
diseño es conocido como &quot;Enrutamiento Próxima Generación&quot;. 

<H3>El actual mecanismo de enrutamiento de Freenet</H3>
<P>Primeramente, permitanme recapitular sobre cómo funciona Freenet hoy. Cada nodo
en la red Freenet es necesario para para prestar un servicio simple a
los otros nodos en el sistema. Cuando un nodo recibe una petición de una 
clave en particular, debería hacer lo mejor que pueda para recuperar los datos
correspondientes a esa clave tan rápido como sea posible y enviarlos de regreso
al nodo que los requirió. Dado que todos los nodos en la red Freenet
ejecutan este servicio razonablemente bien - Freenet funcionará.

<P>En el caso mas simple, los receptores de la petición ya tendrán
los datos almacenados localmente, y pueden enviarlos inmediatamente al 
solicitante. En la mayoría de los casos, sin embargo, el nodo necesitará requerir los
datos a otro nodo en la red el cual piensa que será el más
capaz de recuperar los datos. La forma en que Freenet toma esta decisión integra
el núcleo del algoritmo Freenet. 

<P>Al presente, el algoritmo usado para seleccionar cual nodo debería ser
consultado para una clave dada es relativamente simple.En breve, cuando un nodo
envía una petición para una clave particular a otro nodo en la
red, y ese nodo tiene éxito recuperando los datos, la
dirección de un nodo de carga (posiblemente aquel donde los datos
se originan) es incluida en la réplica, este es llamado  "Fuente de Datos". 
El peticionante toma nota de
la clave requerida, y el nodo fuente hace la entrega.
Se asume que el nodo de carga es un buen lugar para enrutar futuros
requerimientos para claves cercanas a la clave previamente requerida. Esto es
análogo a decidir que ya que tu amigo George exitosamente
respondió una pregunta sobre Francia, el debería también ser un buen candidato para
contestar sobre Bélgica. 

<P>No obstante su simplicidad, este enfoque ha probado ser sorprendentemente 
efectivo, tanto en simulación como en práctica. Uno de los efectos
laterales esperados de este enfoque fue que los nodos tenderían a especializarse
en recuperar algunas claves en detrimento de otras. Esto puede ser visto
como algo análogo a la forma en que las personas se especializan
en áreas particulares de experiencia. Este efecto ha sido observado en
los nodos actuales diseminados en la red Freenet, la siguiente
imagen representa las claves almacenadas por un nodo Freenet actual.  El eje  X
representa el "keyspace", a la izquierda esta el 0,hacia la derecha
la clave  2<sup>160</sup>.  Las áreas oscuras indican donde los
nodos tienen mejor conocimiento.  Las tiras oscuras indican áreas en las que
el nodo tiene conocimiento detallado sobre adonde deberían ser enrutados
los requerimientos para esas claves:
<p>
<center><img src="image/rthist.png" width="480" height="100"></center>
<p>
Observa que cuando el nodo fué inicializado por primera vez las claves deberían haber sido uniformemente
distribuidas en el keyspace.  Ese es un buen 
indicador de que el actual algoritmo de enrutamiento de Freenet se está ejecutando 
correctamente.  Los nodos se especializan de esta manera debido a un efecto de realimentación emergente,
cuando un nodo responde exitosamente a un requerimiento de una clave dada - incrementa
la probabilidad de que otros nodos encaminen requerimientos para claves similares en el 
futuro.  Con el tiempo este efecto causa la especialización que puede ser vista
muy claramente en el diagrama debajo.  Puedes ver una animación del almacén de datos de un nodo especiálizandose con el tiempo 
<a href="image/histanim.mpeg">aquí</a>.

<H3>Mecanismo de enrutamiento Próxima Generación</H3>
<P>El hecho de que funcione, por supuesto, no significa que no pueda ser
mejorado.   En el nivel más simple, observa que
al algoritmo actual no distingue entre un nodo Freenet lento
conectado mediante una línea con un modem lento en el remoto desierto Australiano,
y un poderoso nodo conectado a un enlace T3 en el centro de Los Angeles. Nota también
que mientras el actual algoritmo trabaja, la única forma real de probar
mejoras al algoritmo es ver como afecta en gran escala a la 
red, o bien en simulación, o en el mundo real - esto nos lleva a 
un lento y engorroso ciclo de desarrollo.
Haciendo mas efectivo el uso de la 
información disponible para un nodo Freenet, podemos mejorar dramáticamente
la habilidad de un nodo para enrutar peticiones en una manera similar que resulte en
la respuesta más rápida para esa petición. Evitando las adivinanzas, y
haciendo lo posible por afirmar una base de realidad estadística - podemos aún acelerar 
nuestro esfuerzo de desarrollo permitiéndonos nosotros mismos determinar la efectividad
de una modificación basada en su efecto sobre un nodo individual, antes de desarrollarlo.
Estas metas son alcanzadas por el Enrutamiento Próxima Generación. 

<P>La idea central detrás del diseño de Enrutamiento Próxima Generación es hacer
a los nodos de Freenet mucho más inteligentes acerca de decidir donde encaminar la información.
Para cada referencia en tu tabla de enrutamiento, un nodo recopilará
extensiva información estadística incluyendo tiempos de respuesta para
peticiones de claves en particular, la proporción de peticiones de búsqueda de 
información exitosas, y el tiempo requerido para establecer una
conexión en primer lugar. Cuando un nuevo requerimiento es recibido, esta 
información es usada para estimar cual nodo es probablemente capaz de
recuperar los datos en la menor cantidad de tiempo, y ese es el nodo
al cual el requerimiento es reenviado.
<H3>Estimación de Respuesta de Datos (DataReply)</H3>
<P>La medición más importante es encontrar una forma de estimar, dada una
clave requerida por un nodo dado, cuanto tiempo tomará
obtener los datos. Para lograr esto un algoritmo es mandatorio que pueda
cumplir con los siguientes criterios:
<UL>
	<LI><P>Debe ser capaz de hacer suposiciones razonables sobre las claves que
	no ha visto antes
	<LI><P>Debe ser progresivo &ndash; si el desempeño de un nodo cambia
	con el tiempo, eso debería ser representado, pero no debería ser muy
	susceptible a fluctuaciones recientes las cuales podrían variar significativamente
	del promedio.
	<LI><P>Debería ser de &ldquo;libre escala&rdquo;<BR>Considera una implementación
	ingenua de esto que trabaja dividiendo el keyspace en un
	número de secciones y manteniendo un promedio para cada una. Ahora considera
	un nodo donde la mayoría de sus requerimientos entrantes caen dentro de una muy pequeña
	sección del keyspace. Nuestra implementación ingenua será
	incapaz de representar variaciones en tiempo de respuesta en una pequeña
	área y por lo tanto limitará las habilidades del nodo para estimar
	correctamente los tiempos de enrutamiento.
	<LI><P>Debe ser eficientemente serializable.
</UL>
<P>Desarrollamos un algoritmo simple el cual satisface esos criterios. Trabaja
manteniendo N puntos de &ldquo;referencia&rdquo;  (donde N es
configurable &ndash; siendo 10 un valor típico) los cuales son inicialmente 
homogéneamente distribuidos en el keyspace.  Cuando tenemos una nueva 
muestra de tiempo de enrutamiento para una clave en particular &ndash; movemos los dos puntos
más cercanos hacia nuestra nueva muestra.  La cantidad que son movidos puede 
ser ajustada para cambiar cuan &ldquo;olvidadizo&rdquo; es el estimador.
<P><center><IMG SRC="image/rte_diag.gif" NAME="Gráfico1" WIDTH=335 HEIGHT=256 BORDER=0><BR CLEAR=LEFT><BR><BR>
</center>

<P>En este diagrama se puede ver que dos de los puntos de referencia
(azul) están siendo movidos hacia nuestra nueva muestra de datos (rojo).
<P>Cuando queremos crear un estimado para una nueva clave, vemos adonde intersecta la
línea entre los puntos de referencia a ambos lados de la clave
(verde) y esto nos da nuestra respuesta de tiempo estimada.

<H3>Manejando diferentes longitudes de datos</H3>
<P>
Considera también el hecho que no hay solo una medida de tiempo
que deba ser tomada en cuenta cuando recibimos una Respuesta de Datos, hay
dos.  La primera es el tiempo requerido para obtener el comienzo de la 
respuesta, la segunda es el tiempo requerido para transferir los datos.
Esto lleva a la cuestión de cómo podemos combinar estas dos mediciones
en un solo valor el cual pueda ser reportado al algoritmo estimador
descrito arriba.
<p>
La respuesta que hemos establecido al respecto es usar esos dos números para 
estimar que el tiempo total entre la petición siendo enviada y
y la transferencia  <i>completada</i> pueda haber sido el
promedio de la longitud del dato en Freenet (la cual en cambio estimamos
tomando la longitud de datos promedio en el almacén de datos local).  Este 
es un único valor el cual puede ser comparado directamente con otras medidas
de tiempo aún cuando fueron hechas con requerimientos donde los datos
eran de diferentes tamaños.

<h3>Manejando mensajes Dato no Encontrado</h3>
Cuando una petición ha visitado el número de nodos especificado  en su
campo "saltos de vida"  (similar al "tiempo de vida" en otros protocolos), 
un mensaje "Dato no Encontrado" o mensaje DNE es devuelto al solicitante.  Esto indica
que el dato no pudo ser hallado dentro del límite de tiempo especificado por el
solicitante.  Hay dos razones por las que un DNE pueda ser devuelto para algunos
datos, o bien el dato existe pero no fué encontrado, o el dato no existe
para nada.  En el caso primero, un DNE incrementaría un defecto en la 
habilidad de encaminamiento de cualquier nodo al cual fué encaminado el requerimiento.  En el último 
caso, no - pero la dificultad es para un DNE dado - hay
una forma fácil de decir que tipo de DNE es este, si es "legítimo" o no.
<p>

Permítenos, por un momento, asumir que había una forma de identificar DNE
ilegítimos DNEs.  En este caso, el costo en términos de tiempo requerido para tal DNE
sería el tiempo requerido para recibir el  DNE mas el tiempo requerido para
solicitar el mismo dato de algún otro lugar.  Podemos estimar lo anterior
mirando cuanto los DNEs previos tomaron para peticiones enviadas a este nodo
(tomando en cuenta que este tiempo será proporcional al SDV de
la petición <sup>p.ej.</sup> una petición con un SDV de 10 visitará dos veces
tantos nodos como peticiones con SDV 5 y por lo tanto tomará cerca del doble
regresar un DNE). Podemos estimar lo último mirando el 
promedio de tiempo que toma recuperar algún dato exitosamente.
<p>
Ahora, imagina un nodo Freenet con enrutamiento perfecto, los únicos DNEs que devuelve
serían "legítimos" - ya que los datos estaban en la red, podría 
encontrarlos.  La proporción de DNEs que este nodo perfecto devuelve sería la
misma proporción de DNEs para los cuales el dato simplemente no existe 
en la red.  Ahora - tal nodo (asumimos) podría no existir, sin embargo
podemos aproximarnos a él buscando la proporción de DNEs para el nodo
con la proporción más baja de DNEs en nuestra tabla de enrutamiento.
<p>
Entonces ahora, podemos determinar el costo de tiempo de los DNEs, y podemos tambien aproximar
que proporción de los DNEs de un nodo son legítimos - y así no adeudaríamos
un costo de tiempo.  Podemos por lo tanto agregar un costo estimado de tiempo de enrutamiento para
cada nodo en su cuenta de DNEs.

<h3>Manejando fallas de conexión</h3>
Con nodos los cuales están duramente sobrecargados - también es posible que cuando
intentemos establecer una conexión con ellos - seamos incapaces de hacerlo,
podemos tener en cuenta esta posibilidad consultando la proporción promedio
de conexiones fallidas para cada nodo, y cuánto le toma a cada uno - y agregar
esto a nuestro tiempo estimado de enrutamiento para ese nodo.

<h3>Conocimiento heredado</h3>
Uno de los problemas observados en la actual Freenet es el tiempo requerido
para un nodo Freenet establecer suficiente conocimiento sobre la red Freenet
para encaminar eficientemente.  Esto es particularmente dañiño para la usabilidad de Freenet
ya que las primeras impresiones de las personas sobre el software son críticas, y la
primer impresión de Freenet son generalmente las peores impresiones de Freenet
ya que se forman antes que el nodo Freenet pueda encaminar las peticiones eficazmente.
<p>
La solución es emplear alguna confianza calificda entre los nodos Freenet,  permitiendoles
compartir la información que han recabado sobre cada nodo, no obstante
en un modo no confiable.  Hay dos formas de que un nodo Freenet encuentre
nuevos nodos Freenet.  La primera es cuando arrancan por primera vez - cargan
un archivo "seednodes.ref" el cual contiene la experiencia de encaminamiento de otro
nodo mas experto. Con el encaminamiento P.G encaminar esta información será enriquecido con
los datos estadísticos actuales de tal manera que aún un nodo que arranca por primera vez, ya
tendrá el conocimiento de un nodo experto.  Luego irá refinando
este conocimiento de acuerdo a su propia experiencia.
<p>
La otra forma en que los nodos aprenden sobre nuevos nodos es en el  campo "Fuente de Datos" 
de réplicas exitosas a requerimientos de datos.  El campo Fuente de Datos contendrá
uno de los nodos cercanos en la cadena de respuesta.  Este simple enfoque
permitirá a la Fuente de Datos del nodo adjuntar información estadística
concerniente a su propio desempeño a la réplica - pero esto claramente sería
abierto a abusos.  Un refinamiento podría ser decir que cualquier nodo devolviendo una
petición la cual ha recolectado su propia información estadística sobre el
sobre el nodo en la Fuente de Datos reemplazará los datos estadísticos en la respuesta
con las suyas propias. Esto significará que aún cuando si un nodo pone información estadística
errónea en la respuesta - esta probablemente será reemplazada cuando
sea devuelta al solicitante
.
<h3>Beneficios del Enrutamiento Próxima Generación</h3>
<ul>
<li><b>Se adapta a la topología de red</b><br>
En el viejo algoritmo de enrutamiento de Freenet, un nodo corriendo con un modem
lento en el medio del desierto Australiano es visto en la misma manera
que un nodo rápido corriendo con un enlace T3 en el centro de San José.  En escencia,
la topología subyacente de Internet es ignorada por Freenet, todos los nodos son tratados 
por igual.  En contraste, el encaminamiento P.G. basa sus decisiones en tiempos reales de
encaminamiento, esto significa que un nodo tenderá a preferir mensajes de encaminamiento para
nodos más rápidos, o mejores conexiones a Internet que estén geográficamente más
cercanas - a menos que esos nodos se vuelvan sobrecargados, lo cual disminuirá la 
incentiva a usarlos y tendrá un efecto de balance de carga.

<li><b>El desempeño puede ser evaluado localmente</b><br>
Con el viejo enfoque de enrutamiento de Freenet, la única vía concreta
para evaluar su desempeño era probando.  Con el Enrutamiento P.G. tenemos una
métrica simple de cuan efectivamente es ejecutada - nominalmente la diferencia
ente tiempos estimados de encaminamiento, y los tiempos reales.  Si una modificación
al algoritmo resulta en una estimación más cercana, entonces sabemos que es mejor.  Si no,
sabemos que no lo es.  Esto acelera dramáticamente el ciclo de desarrollo
de futuras mejoras.
<li><b>Enfocando óptimamente</b><br>
Si uno acepta que un entorno donde solamente el nodo propietario puede ser confiable,
es razonable decir que todas las decisiones deberían basarse en sus propias  
observaciones.  Dado esto, se podría decir que si hacemos uso óptimo de
observaciones anteriores mientras tomamos decisiones de enrutamiento,  luego nuestro algoritmo
es óptimo.  Ahora claramente siempre habrá espacio para refinamientos
en la manera en la que el nuevo algoritmo estima los tiempos de enrutamiento.
</ul>
<h3>Estado Actual</h3>
Enrutamiento de Próxima Generación fué desarrollado en Freenet ente 2003-2005, sin embargo en 
Freenet 0.7, iniciado en 2005, volvimos a un enfoque mucho más simple.  
Un artículo del 2007 por Oskar Sandberg <a href="http://arxiv.org/abs/0804.0577">
Búsqueda Descentralizada con Costos Aleatorios</a> determina que los conceptos 
subyacentes a este artículo "eran fundamentalmente sonido".

<h3>Interesado en ayudar?</h3>
Además de unirte a nuestros esfuerzos de desarrollo,realmente puedes ayudarnos a hacer
esto una realidad donando lo que puedas al proyecto en nuestra página de
<a href="donate.html">Donaciones</a> .
