<!-- - sono presenti diversi dipartimenti, ciascuno con i propri corsi di laurea;
- ogni corso di laurea è formato da diversi corsi;
- ogni corso può essere tenuto da diversi insegnanti e prevede più appelli d'esame;
- ogni studente è iscritto ad un corso di laurea;
- per ogni appello d'esame a cui lo studente ha partecipato, è necessario memorizzare il voto ottenuto, anche se non sufficiente -->

## Università



# Dipartimenti
- id
- nome
- indirizzo
- città

# Corsi di Laurea
- id
- nome
- descrizione
- durata
- anno accademico
- lingua

# Corsi
- id
- nome
- descrizione
- durata
- codice corso
- modalità di acesso

# Insegnanti
- id
- nome
- cognome
- email
- numero di telefono
- materia

# Appelli
- id
- modalità_esame (scritto,orale)
- docente
- assistente
- materia
- data

# Studenti
- id
- nome
- cognome
- telefono
- email
- età


# Voto
- risultato
- esito

# Relazioni
1 dipartimento corrispondono più corsi di laurea
1 corso di laurea corrispondono più corsi
1 corso corrispondono più appelli
più insegnanti corrispondono più corsi
1 corso corrispondono più appelli
1 corso di laurea corrispondono più studenti
1 studente corrispondono più voti
1 studente corrispondono più appelli
1 appello corrisponde 1 voto