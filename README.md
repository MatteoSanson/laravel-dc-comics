# Template progetto Laravel

1. Modifica welcome.blade.php (resources/views).
2. Installato SASS:<br>
comando **npm i --save-dev sass**<br>
e modifica di files e cartelle.
3. Aggiornamento file **vite.config.js** (modifica percorso css e aggiunto alias).
4. Importati assets scss:<br>
nel file resources/js/app.js aggiunto **import '~resources/scss/app.scss'**<br>
nel file html, nel tag ```<head>``` inserisco **@vite('resources/js/app.js')** che importa lo stile tramite js.
5. Processare le immagini presenti nella cartella **resources/img/**<br>
con il comando ```import.meta.glob(['../img/**']);``` nel percorso **resources/js/app.js**
6. Creata cartella **img** all'interno di **resources**.
7. Installato pacchetto Bootstrap:<br>
stoppo il server, lancio il comando **npm i --save bootstrap @popperjs/core**.<br>
all'interno di vite.config.js inserisco **import path from "path";**<br>
e aggiungo l'alias **'~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')**.
8. Importo nel file **/resources/scss/app.scss** il css di bootstrap usando la direttiva @import di sass con l'alias 𛲇bootstrap creato precedentemente nel file vite.config.js.
9. Importato Bootstrap nel file **resources/js/app.js** con il comando **import * as bootstrap from 'bootstrap';**. 