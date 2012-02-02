      <h1>Desarrollador</h1>
      
      <h3>Código fuente</h3>
      
      <p>
	Estamos usando <a href="http://git-scm.com/">git</a> como 
	nuestro sistema administrador de código fuente, ubicado 
	en <a href="http://www.github.com/">github</a>. Tenemos varios
	repositorios git diferentes para el sitio, freenet en si misma (fred),
	plugins officiales , los dos instaladores, librerias y asi siguiendo; 
	puedes ver la lista en  <a href="http://github.com/freenet/">nuestra página en github</a>.
	
      </p>

      <p>
	Recomendamos muy especialmente que uses el cliente de linea de comandos git oficial,
	o el port para Windows. Si quieres usar la integración git con Eclipse git puedes ver 
	el tutorial <a href="http://github.com/guides/using-the-egit-eclipse-plugin-with-github">aqui</a>.
      </p>
      
      <p>Puedes obtener el último código fuente de git usando la siguiente línea de comandos:</p>
      <pre>
	git clone git://github.com/freenet/fred-staging.git</pre>

      <p>Una vez que hayas clonado el repositorio, para recuperar los ultimos cambios:</p>
      <pre>
	git pull origin</pre>

      <p>
    Mas información de como usar git abajo, en esta página
      </p>

      <p>
	Git es un sistema de control de revisiones, esto significa
	entre otras cosas:
      </p>
      <ul>
	<li>Cada uno tiene una copia completa del repositorio, incluyendo el historial.</li>
	<li>Ramificar y combinar es fácil.</li>
	<li>Trabajar offline (ej. en un tren) es fácil.</li>
	<li>Es mucho menos vulnerable a una falla o compromiso de un servidor central.</li>
	<li>Contribuciones anónimas a Freenet son mucho mas fáciles.</li>
	<li>En general, un flujo de trabajo mas seguro.</li>
      </ul>
      
    <p>Inicialmente usamos git de manera similar a SVN: Cada desarrollador tiene permisos
    de escritura en el repositorio, y nosotros otorgamos permisos de escritura bastante liberalmente. Sin embargo,
    probablemente este no es el mejor modelo: Muchos otros proyectos que usan Git emplean un
    modelo mas (o menos, dependiendo de como lo veas) centralizado donde tu 
    divides el repositorio (esto es realmente fácil en github), haces tus cambios, los escribes
    en tu repositorio, y luego nos preguntas para validarlos; luego un desarrollador central revisa los
    cambios y o bien los escribe en el repositorio central o solicita algunos cambios.
    La ventaja es que hay menos revisiones en el historial, mejor código en general, las cosas
    pueden retirarse mas facilmente  cuando tratamos de liberar un lanzamiento, y el modelo de
    seguridad es más simple. Tratamos de moderar este modelo actualmente. Encontrarás
    que es más fácil de dividir -staging y luego solicitar una validación (github hace ambas cosas 
    muy fácil), antes que solicitar permisos de escritura a -staging.</p>
    
    <p>Cada parte de Freenet actualmente tiene dos repositorios: -official y -staging (ej.
    fred-official y fred-staging). Este es un remanente de nuestro uso de git similar a  
    SVN: El repositorio -official ha sido revisado y lanzado al menos como un pre-build,
    y solamente desarrolladores centrales pueden escribir en el - ellos deben revisar el código que están aprobando antes 
    de validar, y usualmente firmaran un tag para el  build o pre-build luego de ello. El repositorio 
    -staging casi cualquiera puede escribirlo. Nuevos desarrolladores deberán dividir en github
    y luego solicitar validacion.</p>
      
      <p>
    De cualquier forma, por favor mantennos informados de los que estas haciendo con Freenet! Crea una 
    cuenta github, y luego contactanos mediante
	la <a class="maybeSwitchProtocol" href="https://emu.freenetproject.org/cgi-bin/mailman/listinfo/devl">lista de 
	desarrolladores</a> o en <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a>
	en el canal <a href="irc://irc.freenode.net/%23freenet">#freenet</a>
	en irc.freenode.net. Nota que deberias usar una direccion 
	(funcionando) real de email cuando valides; proveeremos
	colaboradores con redirect @freenetproject.org si es necesario.**
      </p>

      <h3>Instrucciones de compilación</h3>
      
      <p>Para compilar el código fuente necesitas <a href="http://ant.apache.org/">Apache ANT</a>.</p>
      
      <h3>Compilación completa</h3>
      
      <p>
	Building Fred (the Freenet reference daemon) with ant will pull in
	freenet-ext.jar for third party dependancies from the website. To build
	freenet-ext.jar yourself you need to get the contrib module, build it, and put it into
	lib/freenet-ext.jar before you build the main project. Note also that the
	contrib module contains a number of native libraries used to improve 
	performance; you may also want to rebuild these.
      </p>
      <p>
	Plugins, installers etc can generally be built with ant, but some 
	libraries may be written in other languages and have their own building 
	procedures.
      </p>

      <h3>Basic git workflow</h3>
      <p>To pull all changes to the repository:</p>
      
      <pre>
	git pull origin</pre>

      <p>
	Or if you want to review the changes before you merge them into your
	local repository:
      </p>

      <pre>
	git fetch origin
	git log -p -M --ignore-space-change master..origin/master</pre>

      <p>
	If you are happy with the changes, then either merge your local changes
	into the remote changes:
      </p>

      <pre>
	git rebase origin/master</pre>
      <p>Or merge the remote changes into your local repository:</p>
      <pre>
	git merge origin/master</pre>
      <p>The latter will result in a non-linear history, so you should use rebase
	unless your local changes are very large.</p>
      <p>To commit your local changes to your local repository:</p>

      <pre>
	git commit -a</pre>
      <p>Or:</p>
      <pre>
	git commit [ filenames you want to commit ]</pre>
      <p>To upload your changes (assuming you have cloned the -staging tree):</p>
      <pre>
	git push origin</pre>
      <p>To view recent changes:</p>
      <pre>
	git log -p -M --ignore-space-change</pre>
      <p>To undo one or more local commits, assuming you have not pushed your 
	changes, and have not merged remote changes (this will simply reset your
	local repository to a previous version, getting rid of everything since 
	then):</p>
      <pre>
	git reset [ last good revision ]</pre>

      <p>Or if you have committed your change, you will need to revert it:</p>
      <pre>
	git revert [ revision to get rid of ]</pre>
      <p>
	More documentation for git can be found <a href="http://git-scm.com/documentation">here</a>
	or <a href="http://www.kernel.org/pub/software/scm/git/docs/">here</a>.
      </p>
      <p>
	If you don't like a commit, or think it could be improved, generally you should post to the devl 
	<a href="lists.html">mailing list</a>. You should CC the author of the 
	commit, but unless it is a trivial matter you should always
	mail devl.
      </p>
    <p>Please avoid monster commits. All commits are reviewed manually
    both to ensure security and to avoid bugs, and this is much easier if
    you follow some basic rules:</p>
    <ul>
    <li>Keep cosmetic changes separate from functional changes. In
    particular, indenting and braces improvements, while these are 
    generally acceptable, should <b>not</b> be mixed with functional 
    changes.</li>
    <li>Don't break the build: When you push, fred should build. Ideally
    each individual commit should build.</li>
    <li>Small commits: "git commit" is a purely local operation, so there
    is no reason to combine a bunch of unrelated changes in a single 
    commit. Obviously use your judgement.</li>
    <li>Big or controversial stuff should go on a branch, rather than
    just getting pushed. We may be in the process of getting a new build 
    out, and if big stuff is pushed it is likely to be shifted to a branch
    while the build is deployed.</li>
    </ul>

    <h3>The website</h3>
    <p>To edit the website, check out the website-staging repository, edit the files (in pages/en/),
    commit and push as above. Then remind Toad to deploy it if he doesn't do so in a reasonable time.
    Alternatively, fork the website module on github, and then post a pull request. This may actually
    get results more quickly!</p>
    <p>The website is php-based but is compiled at deploy time into static HTML. You can simulate this
    to see exactly what your changes will look like by running the make-pages.sh script (you will need
    php5-cgi). This outputs static HTML to output/.</p>
    <p>We are trying to move most of the documentation to <a href="http://wiki.freenetproject.org">the 
    wiki</a>, which should be easier to edit.</p>
    
