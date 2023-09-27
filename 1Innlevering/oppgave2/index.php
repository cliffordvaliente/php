

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Oppgave 1</title>
      <link rel="stylesheet" href="/stylesheets/index.main.css">
  </head>
  <body>
<p>
  Oppgave 2: innstillinger i php.ini </br></br>
Vi skal lære om innebygde funksjoner i neste modul, men her kommer en som er viktig å kjenne til nå.
Lag et script som har én linje med kode; et kall til funksjonen phpinfo(). Kjør scriptet i nettleseren. Da
ser du mye tekst på en side. Sjekk hva innstillingene display_errors og document_root er satt til.
Hint: Søk i teksten som kommer fram, ellers blir det tidkrevende å lete. Svar også på hvorfor du tror det
er lurt å kjenne til bruk av funksjonen phpinfo().

</p>

 </br></br>

 <p>
På display_errors er satt på off både local og master value. </br>
På document_root er satt på /Applications/MAMP/htdocs </br>
det er lurt å kjenne til bruk av funksjonen phpinfo() fordi det hjelper oss å "troubleshooting" eller debugging eller for å forstå PHP konfigurasjon og andre innstillinger, også for vi informasjon om server og andre ting som er lurt å vite som for eksempel compability med Php, som for eks mysql. 
</p>

<h1>Her er php info liste</h1>

<!-- Script to run the function phpinfo() -->
  <?php
phpinfo();
?>
  </body>
</html>