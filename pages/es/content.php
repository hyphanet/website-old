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

      <h2>Contenido</h2>
      <h3>Freenet como sistema de Distribución de Contenido</h3>
      
      <p>
	En adición a sus características de anonimato, Freenet es también una
	forma eficaz de distribuir grandes archivos - a menudo alcanzando
	velocidades de descarga superiores a otros sistemas de distribución de
	contenidos. Como red de distribución de contenidos Freenet tiene las
	siguientes ventajas:
	<ul>
	  <li>
	    <b>Totalmente descentralizada</b><br/>
	    La información puede ser ingresada en Freenet para descargarla
	    sin confiar en ningún servidor centralizado.  Todo lo que
	    hay que hacer es proporcionar la "clave" del contenido a
	    alguien mas y sera capaz de descargarlo.
	  </li>
	  <li>
	    <b>Almacenamiento en caché adaptativo</b><br/>
	    Muchas arquitecturas CDN solamente permiten pares que ya hayan 
	    descargado un archivo para compartirlo con otros pares.  Freenet
	    depositará adaptativamente la información sobre pares 
	    cuanto sea necesario para cubrir la demanda independientemente de lo que hayan 
	    descargado los pares.
	    Esto permite a Freenet "escalar" mucho mas rápidamente que 
	    que la mayoría de las soluciones, y mejora el balance de carga.
	  </li>
		
	  <li>
	    <b>Seguridad fuerte</b><br/>
	    Freenet siempre ha apoyado el concepto de "Content Hash
	    Keys" el cual garantiza la integridad de la data recibida.
	    Este concepto también ha sido adoptado por otras
	    arquitecturas.  Freenet también apoya "Signed Subspace
	    Keys" lo cual permite firmar un contenido digitalmente.  Esto
	    también permite garantizar la integridad del contenido,pero es
	    mas flexible que CHKs.
	  </li>
	  
	  <li>
	    <b>Corrección de propagación de errores</b><br/>
	    En común con otras arquitecturas CDN, Freenet
	    emplea "Forward Error Correction", lo cual permite reconstruir a 
	    los archivos aun cuando algunas de las partes del archivo
	    no puedan ser recuperadas.  Unicamente, Freenet también soporta
	    "healing", lo cual involucra la reconstrucción 
	    y reinserción de componentes de archivos perdidos.
	  </li>
	</ul>
	Esta página contiene enlaces a contenido accesible libremente en 
	Freenet.  Si quieres agregar un nuevo enlace por favor envíalo por email
	a <a href="mailto:ian@locut.us">us</a> - recuerda que nosotros
	solamente enlazaremos contenidos que puedan ser distribuidos legalmente
	en los Estados Unidos de America.
      </p>
