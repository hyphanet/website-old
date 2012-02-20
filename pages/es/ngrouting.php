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

<P>En el caso mas simple, los eceptores de la petición ya tendrán
los datos almacenados localmente, y pueden enviarlos inmediatamente al 
solicitante. En la mayoría de los casos, sin embargo, el nodo necesitará requerir los
datos a otro nodo en la red el cual piensa que será el más
capaz de recuperar los datos. La forma en que Freenet toma esta decisión integra
el núcleo del algoritmo Freenet. 

<P>Al presente, el algoritmo usado para seleccioner cual nodo debería ser
consultado para una clave dada es relativamente simple.En breve, cuando un nodo
envía una petición para una clave particular a otro nodo en la
red, y ese nodo tiene éxito recuperando los datos, la
direccion de un nodo de carga (posiblemente aquel donde los datos
se originan) es incluída en la réplica, este es llamado  "Fuente de Datos". 
El peticionante toma nota de
la clave requerida, y el nodo fuente hace la entrega.
Se asume que el nodo de carga es un buen lugar para enrutar futuros
requerimientos para claves cercanas a la clave previamente requerida. Esto es
análogo a decidir que ya que tu amigo George exitosamente
respondió una pregunta sobre Francia, el debería tambien ser un buen candidato para
contestar sobre Bélgica. 

<P>No obstante su simplicidad, este enfoque ha probado ser sorprendentemente 
efectivo, tanto en simulación como en práctica. Uno de los efectos
laterales esperados de este enfoque fué que los nodos tenderían a especializarse
en recuperar algunas claves en detrimento de otras. Etsto puede ser visto
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
<center><img src="/image/rthist.png" width="480" height="100"></center>
<p>
Nota que cuando el nodo fué inicializado por primera vez las claves deberían haber sido uniformemente
distribuidas en el keyspace.  Ese es un buen 
indicador de que el actual algoritmo de enrutamiento de Freenet se está ejecutando 
correctamente.  Los nodos se especializan de esta manera debido a un efecto de realimentación emergente,
cuando un nodo responde exitosamente a un requerimiento de una clave dada - incrementa
la probabilidad de que otros nodos encaminen requerimientos para claves similares en el 
futuro.  Con el tiempo este efecto causa la especializacion que puede ser vista
muy claramente en el diagrama debajo.  Puedes ver una animación del almacén de datos de un nodo especiálizandose con el tiempo 
<a href="/image/histanim.mpeg">aquí</a>.

<H3>Mecanismo de enrutamiento Próxima Generación</H3>
<P>El hecho de que funcione, por supuesto, no significa que no pueda ser
mejorado.   En el nivel más simple, nota que
al algoritmo actual no distingue entre un nodo Freenet lento
conectado mediante una línea con un modem lento en el remoto desierto Australiano,
y un poderosdo nodo conectado a un enlace T3 en el centro de Los Angeles. Nota también
que mientras el actual algoritmo trabaja, la única forma real de probar
mejoras al algoritmo es ver como afecta en gran escala a la 
red, o bien en simulación, o en el mundo real - esto nos lleva a 
un lento y engorroso ciclo de desarrollo.
Haciendo mas efectivo el uso de la 
información disponible para un nodo Freenet, podemos mejorar dramáticamente
la habilidad de un nodo para enrutar peticiones en una manera similar que resulte en
la respuesta más rapida para esa petición. Evitando las adivinanzas, y
haciendo lo posible por afirmar una base de realidad estadística - podemos aún acelerar 
nuestro esfuerzo de desarrollo permitiendonos nosotros mismos determinar la efectividad
de una modificación basada en su efecto sobre un nodo individual, antes de deasrrollarlo.
Estas metas son alcanzadas por el Enrutamiento Próxima Generación. 

<P>La idea central detras del diseño de Enrutamiento Próxima Generación es hacer
a los nodos de Freenet mucho más inteligentes acerca de decidir donde encaminar la información.
Para cada referencia en tu tabla de enrutamiento, un nodo recopilará
extensiva información estadística incluyendo tiempos de respuesta para
peticiones de claves en particular, la proporcion de peticiones de búsqueda de 
informacón exitosas, y el tiempo requerido para establecer una
conexión en primer lugar. Cuando un nuevo requerimiento es recibido, esta 
información es usada para estimar cual nodo es probablemente capaz de
recuperar los datos en la menor cantidad de tiempo, y ese es el nodo
al cual el requerimiento es reenviado.
<H3>Estimación de Respuesta de Datos</H3>
<P>La medición más importante es encontrar una forma de estimar, dada una
clave requerida por un nodo dado, cuanto tiempo tomará
obtener los datos. Para lograr esto un algoritmo es mandatorio que pueda
cumplir con los siguientes criterios:
<UL>
	<LI><P>Must be able to make reasonable guesses about keys that it
	has not seen before
	<LI><P>Must be progressive &ndash; if a node's performance changes
	over time, this should be represented, but should not be
	oversensitive to recent fluctuations which may vary significantly
	from the average.
	<LI><P>Must be &ldquo;scale free&rdquo;<BR>Consider a naive
	implementation of this that works by splitting the keyspace into a
	number of sections and maintaining an average for each. Now consider
	a node where most of its incoming requests lie within a very small
	section of the keyspace. Our na&iuml;ve implementation would be
	unable to represent variations in response time within that small
	area and would therefore limit that node's ability to accurately
	estimate routing times.
	<LI><P>Must be efficiently serializable
</UL>
<P>We developed a simple algorithm which meets these criteria. It
works by maintaining N &ldquo;reference&rdquo; points (where N is
configurable &ndash; 10 being a typical value) which are initially
evenly distributed across the keyspace.  When we have a new routing
time sample for a particular key &ndash; we move the two points
closest to our new sample toward it.  The amount they are moved can
be adjusted to change how &ldquo;forgetful&rdquo; the estimator is.
<P><center><IMG SRC="/image/rte_diag.gif" NAME="Graphic1" WIDTH=335 HEIGHT=256 BORDER=0><BR CLEAR=LEFT><BR><BR>
</center>
<P>In this diagram it can be seen that two of the reference points
(blue) are being moved toward our new data sample (red).
<P>When we wish to create an estimate for a new key, we see where the
line between the reference points at either side of that key
intersects (green) and this gives us our estimated response time.
<H3>Handling different data lengths</H3>
<P>
Also consider the fact that there isn't just one timing measurement
that must be taken into account when we receive a DataReply, there
are two.  The first is the time required to get the beginning
of the response, the second is the time required to transfer the data.
This raises the question of how we can combine these two timings
into a single value which can be reported to the estimator algorithm
described above.
<p>
The answer we have settled upon is to use these two numbers to
estimate what the total time between the request being sent and
the transfer being <i>completed</i> would have been had the data
been the average length of data in Freenet (which we in turn estimate
by taking the average length of data in the local datastore).  This
is a single value which can be compared directly with other timing
measurements even when they were made with requests where the data
was differing sizes.
<h3>Handling DataNotFound messages</h3>
When a request has visited the number of nodes specified in its
"hops to live" field (similar to "time to live" in other protocols), 
a "DataNotFound" or DNF message is returned to the requester.  This indicates
that the data could not be found within the time limit specified by
the requester.  There are two reasons that a DNF can be returned for some
data, either the data exists but wasn't found, or the data didn't exist
at all.  In the former case, a DNF would indicate a shortcoming in the
routing ability of whichever node the request was routed to.  In the latter
case, it would not - but the difficulty is that for a given DNF - there
is no easy way to tell what type of DNF it is, whether it is "legitimate"
or not.
<p>
Let, us, for a moment, assume that there was a way to identify illegitimate
DNFs.  In this case, the cost in terms of the time required for such a DNF
would be the time required to receive the DNF plus the time required to
request the same data from somewhere else.  We can estimate the former
by looking at how long previous DNFs took for requests sent to this node
(taking into account that this time will be proportional to the HTL of
the request <sup>ie.</sup> a request with a HTL of 10 will visit twice
as many nodes as a request with HTL 5 and will therefore take about twice
as long to return a DNF).  We can estimate the latter by looking at the
average amount of time it takes to successfully retrieve some data.
<p>
Now, imagine a Freenet node with perfect routing, the only DNFs it returns
would be "legitimate" - since if the data was in the network, it would
find it.  The proportion of DNFs this perfect node returned would be the
same as the proportion of DNFs for which the data simply didn't exist
in the network.  Now - such a node (we assume) could not exist, however
we can approximate it by looking at the proportion of DNFs for the node
with the lowest proportion of DNFs in our routing table.
<p>
So now, we can determine the time cost of DNFs, and we can also approximate
what proportion of a node's DNFs are legitimate - and therefore should not
incur a time cost.  We can therefore add an estimated routing time cost for
each node to account for DNFs.

<h3>Handing failed connections</h3>
With nodes which are heavily overloaded - it is also possible that when
we attempt to establish a connection to them - we will be unable to do-so,
we can account for this possibility by recalling the average proportion
of failed connections for each node, and how long each took - and adding
this on to our estimated routing time for that node.

<h3>Inherited Knowledge</h3>
One of the problems observed in the current Freenet is the time required
for a Freenet node to establish sufficient knowledge about the Freenet
network to route efficiently.  This is particularly damaging to Freenet's
usability as people's first impressions of software is critical, and the
first impressions of Freenet are generally the worst impressions of Freenet
as they are formed before the Freenet node can route requests effectively.
<p>
The solution is to employ some qualified trust between Freenet nodes, allowing
them to share the information the have collected about each other, albeit in
a rather untrusting way.  There are two ways that a Freenet node finds out
about new Freenet nodes.  The first is when they first start up - they load
a "seednodes.ref" file which contains the routing expertise of another
experienced node.  With N.G routing this information will be enriched with
actual statistical data so that even with a node first starts up, it will
already have the knowledge of an experienced node.  It will then go on to
refine this knowledge according to its own experience.
<p>
The other way nodes learn about new nodes is in the "DataSource" field
of successful replies to requests for data.  The DataSource field will
contain one of the upstream nodes in the request chain.  The simple approach
would be to allow this DataSource node to attach statistical information
concerning its own performance to the reply - but clearly this would be
open to abuse.  A refinement would be to say that any node passing back
a reply which has collected its own statistical information about the
node in the DataSource will replace the statistical data in the reply with
its own.  This will mean that even if a node does put misleading
statistical information in the reply - it will probably be replaced as it
is passed back to the requester.
<h3>Benefits of Next-Generation Routing</h3>
<ul>
<li><b>Adapts to network topology</b><br>
In the old Freenet routing algorithm, a Freenet node running on a slow
modem in the middle of the Australian outback is viewed pretty much the
same way as a fast node running on a T3 in downtown San Jose.  In essence,
the underlying Internet topology is ignored by Freenet, all nodes are treated
equally.  In contrast, N.G routing bases its decisions on actual routing
times, this means that a node will tend to prefer routing messages to
faster nodes, on better Internet connections that are geographically
closer - unless those nodes become overloaded, which will decrease the
incentive to use them and have a load balancing effect.
<li><b>Performance can be evaluated locally</b><br>
With the old approach to Freenet's routing, the only concrete way to
evaluate its performance was by trying it.  With N.G Routing we have
a simple metric of how effectively it is performing - namely the difference
between estimated routing times, and actual routing times.  If a modification
to the algorithm results in closer estimates, then we know it is better.  If not,
we know that it isn't.  This will dramatically accelerate the development cycle
of future improvements.
<li><b>Approaching optimality</b><br>
If one accepts that in an environment where only one's own node may be trusted,
it is reasonable to say that all decisions should be based upon one's own 
observations.  Given this, it could be said that if we make optimal use of
prior observations while making routing decisions, then our routing algorithm
is optimal.  Now clearly there will always be room for refinement
in the manner in which the new algorithm estimates routing times
</ul>
<h3>Current Status</h3>
Next Generation routing was deployed in Freenet from 2003-2005, however in 
Freenet 0.7, started in 2005, we reverted back to a much simpler approach.  
A 2007 paper by Oskar Sandberg <a href="http://arxiv.org/abs/0804.0577">
Decentralized Search with Random Costs</a> determined that the concepts 
underlying this paper "were fundamentally sound".

<h3>Interested in helping?</h3>
In addition to joining our development effort, you can really help us to make
this all a reality by donating whatever you can spare to the project on our
<a href="/donate.html">Donations</a> page.
