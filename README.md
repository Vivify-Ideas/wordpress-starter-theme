=== vivify_theme ===


1. Kreirati projekat u lokalu uz pomoc flywheel-a

2. Ulogovati se na wp-dashboard (wordpress admin dashboard) uz pomoc kredencijala koje smo uneli pri setapovanju projekta (imeprojekta/wp-admin)

3. Blokirati robote (settings -> reading -> cekirati search engine visibility)

4. Na nivou vivify_theme teme u editoru odraditi search and replace, “vivify_theme” zameniti za ime projekta (ime teme bi treblalo da bude isto kao i ime projekta)

5. Ubaciti vivify_theme (sada vec sa izmenjenim imenom) temu u themes folder (ukoliko koristimo flywheel) putanja: 
   Local Sites -> Ime Projekta -> app -> public -> wp-content -> themes

6. Aktivirati temu i pobrisati ostale teme ako ih ima (ostaviti mozda Twenty Nineteen temu za svaki slucaj)

7. Pobrisati sve widget-e (appearance -> widgets, sve sa desne strane)

8. Obrisati Hello World post iz Posts

9. Obrisati “Sample Page” iz Pages

10. Kreirati “Homepage” stranicu i dodeliti joj template “Homepage”

11. Podesiti “Homepage” kao Front Page u Settings -> Reading

12. Obrisati Tagline u Settings -> General

13. Podesiti Permalinks na Post Name (settings -> permalinks)

14. Kreirati primarnu navigaciju

15. Instalirati/aktivirati "Classic Editor" (besplatan), "ACF PRO" i ostale potrebne plagine (u zavisnosti od potreba projekta)...kredencijali za placene i licencirane plagine se mogu naci na passbolt.com

16. Za migriranje baze podataka instalirati sledeca tri plagina redom:  github-updater-8.9.0,  wp-sync-db-1.5,  wp-sync-db-media-files-master

17. U root-u teme, screenshot.jpg zameniti sa screenshot-om naseg projekta

18. Na nivou teme odraditi “npm install” (ukoliko se ne poklapaju verzije gulp-a i node.js-a, odraditi “npm install natives”), potom “gulp build”

19. Pokrenuti “gulp watch”


** Napomene **

- Uputstvo za MIGRATE DB:

  Tools -> Migrate db
  Na oba sajta (lokalnom i na stage-u) instalirati sva tri gore pomenuta plagina i u settings tabu dati permisije na oba za push i pull (cekirati oba checkboxa na oba sajta), kopirati sa stage-a iz taba connection info url sa apijem. Potom u migrate tabu na lokalnom sajtu cekirati PUSH i paste-ovati kopirani url. Ovim cemo pusovati bazu sa lokala na stage, opciono cekirati MEDIA FILES ukoliko zelimo da prebacimo slike i ostalo...


