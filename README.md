# Web-project

Balsamiq: https://balsamiq.cloud/sdc1ww5/pgdz0x4/r1B14


SPIEGAZIONE SEMPLICE DI COME FUNZIONA GIT

A COSA SERVE GIT -> a salvare le cose e pubblicarle su questa repository tramite dei semplici comandi in qualsiasi momento. MO VEDIAMO I COMANDI
(APRI IL TERMINALE SU VISUAL STUDIO CODE!!)

git clone [link] -> chiaramente le parentesi quadre non devi scriverle, è per far capire che lì devi mettere il link che trovi direttamente nella repo nel pulsante verde dove c'è scritto "Code". Questo comando lo dovrai fare solo una volta e ti servirà per clonare la repository sul tuo computer. Di conseguenza, nel terminale di VScode prima di scrivere questa cosa devi essere posizionato nella cartella giusta, ossia nel posto in cui vuoi che questa repository sia clonata.
Dopo aver fatto questo comando, se tutto va bene vedrai (nel posto in cui l'hai salvata) la nuova cartella Web-project. A questo punto ti basta aprire il folder su VScode, e ora sei pronto per programmare

git pull -> quando fai questo comando, ti metti in "pari" con gli aggiornamenti che ho fatto io: questo comando serve per aggiornare la tua cartella di tutte le modifiche che ho fatto io fino a quel momento. Devi SEMPRE fare questo comando prima di iniziare a programmare, o potremmo trovarci dei conflitti prima di risolvere. In genere, è meglio se lo fai anche appena prima di salvare le tue modifiche 

git add -A -> questo comando devi farlo appena prima di fare il salvataggio (vedi comando successivo). In pratica serve solo per dire quali file modificati vuoi salvare, e mettendo il -A intendi che vuoi salvare TUTTI i file che hai modificato. Se non volessi salvarli tutti (perché magari in qualche file hai fatto qualche modifica che ancora non vuoi salvare), non dovrai fare git add -A, ma git add [tutti i nomi dei file che hai modificato e che vuoi salvare]

git commit -m "nome del salvataggio" -> questo è il comando che ti permette di salvare. Tra le virgolette puoi scrivere quello che ti pare, dire ad esempio cosa hai modificato in quel particolare salvataggio in modo da tenere un pochino traccia dei cambiamenti che abbiamo fatto. Ricordati di fare "git pull" prima del salvataggio così non troviamo conflitti!!!

git push -> questo è l'ultimo comando che devi fare, subito dopo aver fatto "git add -A" e "git commit -m ...". Questo comando dice che tu vuoi caricare su github il salvataggio (o i salvataggi se hai fatto più commit), in modo che poi io facendo "git pull" possa vedere le tue modifiche.

git status -> questo è un comando un po' opzionale che ti serve per vedere quali file hai modificato. In particolare, se hai modificato dei file vedrai i nomi uno sotto l'altro. Se i file sono colorati di rosso, vuol dire che non li hai ancora aggiunti al salvataggio (cioè non hai fatto git add). Se sono verdi, vuol dire che li hai aggiunti al salvataggio. Se i file sono tutti verdi vuol dire che probabilmente hai appena fatto un "git add -A"

RIASSUNTO BREVISSIMO:
-per aggiornarti delle modifiche ha fatto Sofia fai: git pull
-per salvare le tue modifiche e farmele vedere fai: "git add -A", poi "git commit -m "nome salvataggio" ", poi "git push"
FINE
-ricordati di fare git pull subito prima di salvare le tue modifiche
-tutto questo si fa da terminale su vscode perché è comodissimo
-ciao ciao
