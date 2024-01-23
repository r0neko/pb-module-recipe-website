# Sweet Chic
Un simplu site de prezentare in care pot fi gasite diferite retete adaugate de un administrator prin intermediul unei pagini de administrator expuse la http://localhost:8080/admin

Aceasta este o versiune de prototip/concept, care se afla intr-o continua dezvoltare, fiind realizata cu scopul de a arata posibilitatea realizarii unui astfel de site.

Nota: nu exista vreo metoda de autentificare in momentul de fata.

# Tehnologii folosite
- Laravel Lumen 10 - un framework de PHP care faciliteaza accesul la functionalitati cum ar fi folosirea sistemului de template Blade pentru a eficientiza realizarea de continut pentru site si folosirea stratului de abstractizare al accesului la baza de date impreuna cu sistemul sau de entitati/modele care reprezinta elementele stocate in baza de date;
- Bootstrap 5.3.2 - un framework CSS care faciliteaza realizarea de design-uri web care pot permite atat utilizarea pe dispozitive mobile intr-un mod eficient cat si pe calculatoare, oferind un aspect simplu si modern "out of the box"

# Instructiuni de instalare
Pentru a putea folosi site-ul, va trebui sa instalati PookieBoard, un sistem CMS realizat de catre mine, pe care il puteti gasi la adresa https://github.com/r0neko/pookieboard

Procesul de instalare este simplu:
```
composer install
touch database/database.sqlite
cp .env.example .env
```
Dupa rularea acestor comenzi, modificati fisierul `.env`, si asigurati-va ca urmatorii parametri sunt configurati in felul urmator:
```dotenv
DB_CONNECTION=sqlite
DB_DATABASE=/ruta/absoluta/la/pookieboard/database/database.sqlite
```
Ca pasi finali, trebuie doar sa permiteti structurarea bazei de date ruland
`php artisan migrate:fresh` si sa instalati elementele CMS-ului ruland `php artisan module:assets PookieBoardCMS`

Odata instalat, puneti acest folder `RNRecipeWebsite` in folder-ul `modules` al platformei, iar apoi rulati comanda `php artisan module:activate RNRecipeWebsite` pentru a activa acest modul.
Ca sa instalati si cateva date de proba, rulati `php artisan db:seed`, iar acest modul va introduce automat date de proba dintr-un fisier JSON integrat.


# Accesare aplicatie
Rulati `php artisan serve`, iar proiect-ul va putea fi gasit la adresa `http://localhost:8080` si va fi indicat de asemenea in linia de comanda.
