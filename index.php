<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="generator" content="PSPad editor, www.pspad.com">
    <title>Ahoj! Volám sa Natália </title>
    <link href='style.css?v=<?=time()?>' rel='stylesheet'>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,300&family=Space+Mono&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--- toto tu musí byť ? ešte viac mi to rozbilo mobilnú verziu!!!!---->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header> 
        <a href="#omne">O Mne</a>
        <a href="#vzdelanie">Vzdelanie</a>
        <a href="#praca">Pracovné skúsenosti</a>
        <a href="#kurz">Kurzy</a>
        <a href="#znalosti">Znalosti</a>
    </header>
    
     <div>
        <p class="name">Ing. Natália Truchlíková</p>
    </div>
    
    <div  id="omne" class="omne">
      <div style="margin:auto;"  class="omne">
        <div>
          <img src="/images/naty.jpg" alt="naty.jpg, 273kB" title="Naty" height="auto" width="280">   
        </div>
        <div class="omnetext">
          <h2><b>Niečo o mne</b></h2>
          <h5>Túto web stránku som vytvorila ako ukážku a pri tvorbe som nepoužila šablónu ale vlastné CSS a HTML. Pre slider som si pomohla knižnicu Swiper.js. Kód k tejto stránke nájdete aj na mojom <a href="https://github.com/NatyTr" target="_blank">GitHube</a>.</h5>
          <p>Ahojte! Moje meno je Natália Truchlíková. Pôvodne pochádzam z Kysúc – konkrétne z Čierneho pri Čadci,
           no už od vysokej školy bývam v Bratislave. Študovala som na Ekonomickej Univerzite, kde som nadobudla tituly
            z účtovníctva a štatistiky. Po škole som sa zamestnala v ČSOB banke, v ktorej som pôsobila 2,5 roka ako Špecialista 
            na rizikové modely. Vo voľnom veľmi rada športujem, no mojou najväčšou záľubou je cestovanie a spoznávanie sveta. Momentálne
             sa však najviac venujem vzdelávaniu v programovaní.</p>
        </div>
      </div>
    </div>



    <div id="vzdelanie">
        <h2 style="text-align:center; padding-top: 10px;">Vzdelanie</h2>
        <div class="studium">
            <div class="studium2">
                <h4 style="background-color: #f9d6d4;" class="circle">SŠ</h4>
                <h4>Obchodná akadémia Čadca</h4>
                <div>
                  <p>2010 - 2014</p>
                </div>
            </div>
            <div  class="studium2">
                <h4 style="background-color: #e6b5b8;" class="circle">VŠ</h4>
                <h4>Ekonomická univerzita v Bratislave</h4>
                <div >
                  <p>Fakulta hospodárskej informatiky</p>
                  <p>Účtovníctvo</p>
                  <p>2014 - 2017</p>
                </div>
            </div>
            <div  class="studium2">
                <h4 style="background-color: #a7767c;" class="circle">VŠ</h4>
                <h4>Ekonomická univerzita v Bratislave</h4>
                <div>
                  <p>Fakulta hospodárskej informatiky</p>
                  <p>Štatistické metódy v ekonómii</p>
                  <p>2017 - 2019</p>
                </div>
            </div>
    </div>
    </div>
    

    <div id="praca" class="praca">
        <h2 style="text-align:center; padding: 10 0;">Pracovné skúsenosti</h2>
      <div style="display: flex; max-width: 90%; margin: auto;" class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">   
                <div class="kocka2">
                  <h4>Sunsets swimwear</h4>
                  <h5>Tvorba, spravovanie webovej stránky</h5>
                  <div>
                    <p>V roku 2021 som sa začala podieľať na tvorbe eshopu v CMS Wordpress, ktorý doteraz spravujem 
                      z hľadiska úpravy produktov, cien, reklamných 
                      kampaní.</p>
                    <p>AKTUÁLNE</p>
                  </div>
                 </div>      
          </div>
          <div class="swiper-slide">
                <div class="kocka2">
                  <h4>ČSOB banka</h4>
                  <h5>Špecialista pre rizikové modely</h5>
                  <div>
                    <p>Vykonávanie a koordinovanie činnosti v oblasti 
                      vývoja, správy a aktualizácie vývoja rizikových
                      modelov. Cieľom je zabezpečiť ich aktuálnosť a 
                      súlad s požiadavkami stanovenými regulátorom 
                      (pravidelný review a monitoring).
                      Práca v programoch SQL, SPSS, Excel.</p>
                    <p>JÚL 2019 - NOVEMBER 2021</p>
                  </div>
                </div>
          </div>
          <div class="swiper-slide">
                <div class="kocka2">
                  <h4>OMV Slovensko, s.r.o.</h4>
                  <h5>Gastro a Shop oddelenie</h5>
                  <div>
                    <p>Hlavnou náplňou práce bolo spracovanie 
                      pravidelných reportov a rôznych Ad hoc úloh, 
                      pričom som využívala najmä Excel a príležitostne 
                      program SAP.</p>
                    <p>MAREC 2018 - APRÍL 2019 </p>
                </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="kocka2">
                <h4>Poštová banka, a. s.</h4>
                <h5>Oddelenie daní a fakturácie</h5>
                <div>
                  <p>Tvorba a spracovanie dobropisov v programe SAP</p>
                  <p>MAREC 2017 - AUGUST 2017</p>
                </div>
            </div>
          </div>
          
</div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>




<div id="kurz" class="certifikaty">
    <div class="certifikaty_nadpis">
      <h2>Kurzy a certifikáty</h2>
      <p style="font-size: 13px; line-height: 1.4;">Všetky 3 kurzy som absolvovala na stránke wwww.codecademy.com, pomocou 
      ktorých som nadobudla základné skúsenosti s CSS, JavaScriptom a HTML. 
       </p>
    </div>
    <div class="certifikaty_items" >
      <div class="certifikaty_ostatne">
        <h4>Learn CSS</h4>
        <button type="button"><a href="/images/css.pdf" target="_blank">Zobraziť certifikát</a></button>
      </div>
      <div  class="certifikaty_ostatne">
        <h4>Learn HTML</h4>
        <button type="button"><a href="/images/html.pdf" target="_blank">Zobraziť certifikát</a></button>
      </div>
      <div  class="certifikaty_ostatne">
        <h4>Learn JavaScript</h4>
        <button type="button"><a href="/images/js.pdf" target="_blank">Zobraziť certifikát</a></button>
        <p></p>
      </div>
    </div>
</div>








    
 <div id="znalosti" class="znalosti">   
    <h2 style="text-align:center; margin-bottom: 40px;">Znalosti</h2>
    <div class="container">
      <div class="cell cell-1">
        <div  class="box_item" data-hover="Certifikát z kurzu na www.codecademy.com">
              <div>
                <h4>CSS</h4>
                <h5>Mierne pokročilý</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-2">
      <div  class="box_item" data-hover="Certifikát z kurzu na www.codecademy.com">
              <div>
                <h4>HTML</h4>
                <h5>Mierne pokročilý</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-3">
      <div  class="box_item" data-hover="Certifikát z kurzu na www.codecademy.com">
              <div>
                <h4>JavaScript</h4>
                <h5>Základy</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-4">
        <div  class="box_item" data-hover="Python byl prvý programovací jazyk s ktorým
         som sa stretla. Vypracovala som niekoľko menších skriptov s knižnicou Beautiful Soup">
              <div>
                <h4>Python</h4>
                <h5>Základy</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-5">
            <div  class="box_item" data-hover="SQL som sa začala učiť už popri vysokej škole.
             Využívala som ho dennodenne v práci v ČSOB banke.">
              <div>
                <h4>SQL</h4>
                <h5>Mierne pokročilý</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-6">
            <div  class="box_item" data-hover="S business managerom sa sa prvýkrát stretla po
             založení eshopu www.sunsets.sk, v ktorom do dnešného dňa nastavujem reklamné kampane.">
              <div>
                <h4>Facebook Business Manager</h4>
                <h5>Základy</h5>
              </div>
            </div>
     </div>
      <div class="cell cell-7">
            <div  class="box_item" data-hover="S Google Analyticsom som sa taktiež prvýkrát stretla 
            pri eshope www.sunsets.sk.">
              <div>
                <h4>Google Analytics</h4>
                <h5>Základy</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-8">
            <div  class="box_item" data-hover="V SPSS statistics a SPSS modeler som dennodene pracovala v ČSOB banke.">
              <div>
                <h4>SPSS Statistics</h4>
                <h5>Pokročilý</h5>
              </div>
            </div>
      </div>
      <div class="cell cell-9">
        <div  class="box_item" data-hover="Slack veľmi čast využívam na komunikáciu.">
              <div>
                <h4>Slack</h4>
                <h5>Mierne pokročilý</h5>
              </div>
            </div>
      </div> 
      <div class="cell cell-10">
        <div  class="box_item" data-hover="S Gitom som sa prvý krát zoznámila až pri tvorbe tejto stránky.">
              <div>
                <h4>Git</h4>
                <h5>Úplný začiatočník</h5>
              </div>
            </div>
            
      </div> 
      <div class="cell cell-11">
        <div  class="box_item" data-hover="Excel, Word či ostatné produkty od Microsoft office ovládam na pokročilej úrovni.">
              <div>
                <h4>Microsoft Office</h4>
                <h5>Pokročilý</h5>
              </div>
            </div>
            
      </div> 
      <div class="cell cell-12">
        <div  class="box_item" data-hover="Jeden z programov využívaných pri práci v ČSOB banke.">
              <div>
                <h4>Microsoft SQL Server</h4>
                <h5>Mierne pokročilý</h5>
              </div>
            </div> 
      </div> 
    </div>
</div>   
    
<footer>
    <div class="footer_main" >
      <div class="footer_menu">
        <h4>Menu</h4>
        <p><a href="#omne">O Mne</a></p>
        <p><a href="#vzdelanie">Vzdelanie</a></p>
        <p><a href="#praca">Pracovné skúsenosti</a></p>
        <p><a href="#kurz">Kurzy</a></p>
        <p><a href="#znalosti">Znalosti</a></p>
      </div> 
      <div class="footer_contact">
          <h4>Kontaktné informácie</h4>
          <p><b>Adresa:</b> Hollého 13, 811 08 Bratislava</p>
          <p><b>Telefónne číslo:</b> 0950 780 730</p>
          <p><b>E-mail:</b> n.truchlikova@gmail.com</p>
      </div>
      <div class="footer_logos">
            <h4 style="text-align:center;">Sociálne siete</h4>
            <div>            
              <a href="https://github.com/NatyTr" 
              class="fa fa-github" target="_blank"></a>
              <a href="https://www.linkedin.com/in/nat%C3%A1lia-truchl%C3%ADkov%C3%A1-aa9307188/"
               class="fa fa-linkedin" target="_blank"></a>
              <a href="https://www.instagram.com/naty.truchlikova/" 
              class="fa fa-instagram" target="_blank" ></a>     
            </div>
        </div>
      </div>
</footer>
    
    
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="scripts.js?v=<?=time()?>"></script>
  </body>
</html>
