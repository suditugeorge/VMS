@extends('client.layout')

@section('title', 'Acasă')

@section('content')
    @include('client.components.company-description')

    <div class="section section-about-us">
        <div class="container">
            <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container image-left tetravet-image-left"
                             style="background-image: url({{URL::asset('/core_images/tratamente.jpg')}})">
                        </div>
                        <h3 class="tetravet-header">CONSULTAȚII ȘI TRATAMENTE</h3>
                        <p>O examinare clinică generală a animalelor de companie, prin metode semiologice, este foarte
                            importantă, alături de datele de anamneză, manopere ca inspecţia, palpaţia, percuţia,
                            ascultația, termometrarea, măsurarea tensiunii arteriale etc. sunt foarte importante în
                            stabilirea unui diagnostic cât mai fidel.</p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-tratamente">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <div class="image-container image-right"
                             style="background-image: url({{URL::asset('/core_images/laborator-analize.jpg')}})"></div>
                        <h3 class="tetravet-header-right">ANALIZE DE LABORATOR</h3>
                        <p>In clinica Tetravet puteți beneficia de o serie de examene de laborator executate cu
                            aparatură de ultimă generație; ecograful MyLab Alpha Multicristal este cel mai performant
                            din gama portabilă a brandului Esaote. Efectuăm o gamă variată de examene de laborator,
                            majoritatea cu rezultate rapide, în 10-15 minute</p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-analize">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container image-left tetravet-image-left"
                             style="background-image: url({{URL::asset('/core_images/chirurgie.jpg')}})">
                        </div>
                        <h3 class="tetravet-header">CHIRURGIE</h3>
                        <p>
                            În clinica noastră veți întâlni chirurgi cu peste 20 ani experiență, precum și aparatură de
                            ultimă generație. Toți pacienții noștri sunt atent monitorizați (monitorizarea respirației,
                            monitorizare cardiacă, puls, tensiune) și pot beneficia, de asemenea, de una dintre cele mai
                            inofensive anestezii (anestezie inhalatorie) folosită fără emoții pentru animalele bătrâne
                            sau bolnave, dar care, totuși, au nevoie de o intervenție chirurgicală.</p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-chirurgie">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <div class="image-container image-right"
                             style="background-image: url({{URL::asset('/core_images/stomatologie.jpg')}})"></div>
                        <h3 class="tetravet-header-right">STOMATOLOGIE VETERINARĂ</h3>
                        <p>Igiena orală corespunzătoare este la fel de importantă și pentru prietenii noștri .În cazul
                            cățeilor și pisicuțelor, aceasta se poate face prin administrarea unui tip de hrană adecvat
                            și prin manopere medicale speciale de stomatologie veterinară pe care le puteți solicita și
                            la noi: detartraj cu ultrasunete, periaj profesional, tratamentul parodontozei, extracții și
                            chirurgie buco-maxilo-facială.</p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-stomatologie">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container image-left tetravet-image-left"
                             style="background-image: url({{URL::asset('/core_images/farmacie.jpg')}})">
                        </div>
                        <h3 class="tetravet-header">FARMACIE VETERINARĂ</h3>
                        <p>În farmacia noastră veți găsi o gamă largă de produse</p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-farmacie">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <div class="image-container image-right"
                             style="background-image: url({{URL::asset('/core_images/frizerie.jpg')}})"></div>
                        <h3 class="tetravet-header-right">FRIZERIE ȘI COSMETICĂ</h3>
                        <p>Îngrijirea blănii prietenului vostru, cățel sau pisică, trebuie să fie o prioritate, nu numai
                            pentru că aceasta este răspunzătoare de aspectul general al animalului, ci și pentru că e
                            oglinda stării de sănătate a întregului organism.
                        </p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-frizerie">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Second image on the left side of the article -->
                        <div class="image-container"
                             style="background-image: url({{URL::asset('/core_images/ginecologie.jpg')}})"></div>
                    </div>
                    <div class="col-md-5">
                        <!-- First image on the right side, above the article -->
                        <h3 class="tetravet-header-right">OBSTETRICĂ</h3>
                        <p>În cadrul clinicii veterinare Tetravet, colega noastră dr. Laura Tudor, doctor în științe
                            medicale, se ocupă, în mod special, de departamentul de ginecologie şi obstetrică
                            veterinară.
                        </p>
                        <p class="text-center">
                            <button class="btn btn-primary btn-tetravet" data-toggle="modal"
                                    data-target="#modal-ginecologie">
                                Citește mai mult
                            </button>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!--Modale-->

        <div class="container">
            <div class="modal fade" id="modal-tratamente" tabindex="-1" role="dialog" aria-labelledby="Tratamente"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                            <h4 class="title title-up">CONSULTAȚII ȘI TRATAMENTE</h4>
                        </div>
                        <div class="modal-body">
                            <p>O examinare clinică generală a animalelor de companie, prin metode semiologice, este
                                foarte importantă, alături de datele de anamneză, manopere ca inspecţia, palpaţia,
                                percuţia, ascultația, termometrarea, măsurarea tensiunii arteriale etc. sunt foarte
                                importante în stabilirea unui diagnostic cât mai fidel.</p>
                            <p>În privința manoperelor efectuate în cadrul clinicii noastre, acestea pot fi atât simple
                                ( ex -injecții, microcipări), cât și complexe: sondaje, coloraţii speciale, examene
                                microscopice, puncții (directe sau ecoghidate) etc.</p>
                            <div><span>Pentru tratarea şi prevenirea unor boli infecțioase efectuăm:</span>
                                <ul>
                                    <li>Vaccinări</li>
                                    <li>Serumizări</li>
                                    <li>Imunostimulări specifice/nespecifice</li>
                                </ul>
                            </div>
                            <p>Pentru boli parazitare realizăm deparazitări interne și externe pentru combaterea și
                                prevenirea paraziților comuni, cât și al celor care determină boli foarte grave, dintre
                                care unele se pot transmite și la om . În plus, banalii paraziți pot determina, în
                                special la animalele tinere, tulburări gastrointestinale, nervoase, apatie, inapetență
                                și uneori chiar moarte. De aceea este foarte important, ca examene de rutină, pentru
                                diagnosticul paraziților, să cereți efectuarea testelor necesare (examene
                                coproparazitologice, microscopice sau, după caz, teste serologice rapide de
                                diagnostic).</p>
                            <div class="alert alert-info" role="alert">
                                <div class="container">
                                    <div class="d-flex flex-row justify-content-start align-items-center">
                                        <div class="p-1 pt-2"><i class="fa fa-info-circle fa-3x" aria-hidden="true"></i>
                                        </div>
                                        <div class="ml-auto p-1">Implantăm microcipuri și eliberăm pașapoarte</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-analize" tabindex="-1" role="dialog" aria-labelledby="Analize"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                            <h4 class="title title-up">ANALIZE DE LABORATOR</h4>
                        </div>
                        <div class="modal-body">
                            <p>In clinica Tetravet puteți beneficia de o serie de examene de laborator executate cu
                                aparatură de ultimă generație; ecograful MyLab Alpha Multicristal este cel mai
                                performant din gama portabilă a brandului Esaote. Efectuăm o gamă variată de examene de
                                laborator, majoritatea cu rezultate rapide, în 10-15 minute:</p>
                            <div>
                                <ul>
                                    <li><b>Hemoleucograme</b></li>
                                    <li><b>Examene de biochimie sangvină - </b>măsurarea glicemiei, colesterolului,
                                        transaminazelor, bilirubinemiei, calciului, proteinelor, ureei, creatininei,
                                        hormonilor etc.
                                    </li>
                                    <li><b>Teste serologice rapide</b> pentru depistarea unor boli infecțioase sau
                                        parazitare (parvoviroză, jigodia sau boala Carre, dirofilarioză, babesioză,
                                        giardia, panleucopenie, imunodeficienţa felină,coronaviroză, leucemie etc.)
                                    </li>
                                    <li><b>Colorații uzuale sau speciale din frotiuri de sânge</b></li>
                                    <li><b>Măsurarea tensiunii arteriale</b></li>
                                    <li><b>EKG-uri</b></li>
                                    <li><b>Ecografii abdominale şi/sau cardiace - </b>examinarea cu ajutorul
                                        ultrasunetelor este un examen de rutină, nedureros, necostisitor, inofensiv şi
                                        rapid, folosit zilnic pentru completarea manoperelor comune de diagnostic,
                                        pentru controlul gestației sau pentru preluarea de probe prin puncție
                                        ecoghidată.
                                    </li>
                                    <li><b>Examene de urină - </b>sediment, biochimie, urocultură</li>
                                    <li><b>Examene dermatologice - raclate cutanate (examene din cruste, fire de păr,
                                            secreţii) însoțite de examene bacteriologice cu antibiogramă, micologice,
                                            parazitologice</b></li>
                                </ul>
                            </div>
                            <div><b>EXAMENE HISTOPATOLOGICE ȘI CITOLOGICE (ÎN CAZUL ȚESUTURILOR MODIFICATE SAU TUMORILOR)</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-chirurgie" tabindex="-1" role="dialog" aria-labelledby="Chirurgie"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                            <h4 class="title title-up">CHIRURGIE</h4>
                        </div>
                        <div class="modal-body">
                            <p>ÎÎn clinica noastră veți întâlni chirurgi cu peste 20 ani experiență, precum și aparatură
                                de ultimă generație. Toți pacienții noștri sunt atent monitorizați (monitorizarea
                                respirației, monitorizare cardiacă, puls, tensiune) și pot beneficia, de asemenea, de
                                una dintre cele mai inofensive anestezii (anestezie inhalatorie) folosită fără emoții
                                pentru animalele bătrâne sau bolnave, dar care, totuși, au nevoie de o intervenție
                                chirurgicală.</p>
                            <div>
                                <span>Intervenim prin operații de mică și mare chirurgie veterinară, atât la nivelul țesuturilor moi, cât și la nivelul oaselor, cele mai frecvente intervenții fiind:</span>
                                <ul>
                                    <li>Operații la nivelul stomacului, intestinelor sau organelor parenchimatoase
                                        (rinichi, splină, ficat) în caz de tumori, torsiuni, volvulus, corpi străini,
                                        invaginații, etc.
                                    </li>
                                    <li>Operații pe globul ocular (enucleere glob ocular, entropion, ectropion, encantis, prolaps glob ocular, cherry eye etc)</li>
                                    <li>Intervenții pe piele şi mucoase</li>
                                    <li>Codotomii, cupări urechi, amputări pinteni - de necesitate, în scop medical</li>
                                    <li>
                                        Intervenții pe vezica urinară (cistectomii, cistotomii- în tumori sau calculi vezicali)
                                    </li>
                                    <li>Operații pe oase</li>
                                    <li>Chirurgia aparatului genital mascul/femelă (castrări, extirpări de testicule din
                                        cavitatea abdominală, tumori Sticker, perineotomii, prolaps vaginal şi uterin,
                                        etc.)
                                    </li>
                                    <li>Intervenții pe ureche (othematoame, intervenții în otite cronice )
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-stomatologie" tabindex="-1" role="dialog" aria-labelledby="Stomatologie"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">STOMATOLOGIE VETERINARĂ</h4>
                    </div>
                    <div class="modal-body">
                        <p>Igiena orală corespunzătoare este la fel de importantă și pentru prietenii noștri .În cazul
                            cățeilor și pisicuțelor, aceasta se poate face prin administrarea unui tip de hrană adecvat
                            și prin manopere medicale speciale de stomatologie veterinară pe care le puteți solicita și
                            la noi: detartraj cu ultrasunete, periaj profesional, tratamentul parodontozei, extracții și
                            chirurgie buco-maxilo-facială.</p>
                        <p>În lipsa unei atente supravegheri a problemelor orale, pot apărea o serie de neajunsuri care,
                            cel mai frecvent, se manifestă prin: depunere de tartru, respirație urât mirositoare,
                            sângerări ale gingiilor, salivație abundentă, gingivite, pierderea dinților şi/sau
                            transmiterea infecţiilor în alte zone ( sinusuri, cord etc.)</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-farmacie" tabindex="-1" role="dialog" aria-labelledby="Farmacie"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">FARMACIE VETERINARĂ</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <span>În farmacia noastră veți găsi o gamă largă de produse:</span>
                            <ul>
                                <li><b>ANTIPARAZITARE - </b>externe (pentru combaterea purecilor, căpușelor, țânțarilor etc.) sau interne (împotriva ascarizilor, teniilor etc.)
                                </li>
                                <li><b>ANTIINFECȚIOASE - </b>ex: antibiotice </li>
                                <li><b>ANTIINFLAMATOARE - </b>injectabile, tablete sau siropuri</li>
                                <li><b>OFTALMICE</b></li>
                                <li><b>OTICE - </b>soluții pentru curățarea urechilor sau pentru tratamentul otitelor</li>
                                <li><b>VITAMINE ȘI MINERALE - </b>calciu, suplimente pentru îngrijirea și întreținerea blănii etc.
                                </li>
                                <li><b>PRODUSE COSMETICE - </b>șampoane din game profesionale pentru întreținere sau tratamente ale unor dermatite specifice
                                </li>
                                <li><b>HRANĂ PROFESIONALĂ </b>ale unor branduri de prestigiu – Hill’s, Royal, ProPlan, Yarrah etc.
                                </li>
                                <li><b>ACCESORII - </b>lese, zgărzi, hăinuțe, cuști de transport, recipiente pentru hrană și apă ,jucarii
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-frizerie" tabindex="-1" role="dialog" aria-labelledby="Frizerie"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">FRIZERIE ȘI COSMETICĂ</h4>
                    </div>
                    <div class="modal-body">
                        <p>Îngrijirea blănii prietenului vostru, cățel sau pisică, trebuie să fie o prioritate, nu numai
                            pentru că aceasta este răspunzătoare de aspectul general al animalului, ci și pentru că e
                            oglinda stării de sănătate a întregului organism.</p>
                        <p>Echipa Tetravet vă recomandă să realizați un periaj zilnic al cățelului sau pisicuței
                            dumneavoastră. Astfel, veți îndepărta părul mort, veți intensifica prin masaj circulația
                            periferică la nivelul pielii, îmbunătățind, implicit, oxigenarea țesuturilor astfel pielea
                            și părul fiind mult mai sănătoase și lucioase! În plus, puteți observa paraziții externi sau
                            o serie de afecțiuni cu semne dermatologice.</p>
                        <p>Cățeii și pisicuțele, în afară de o tunsoare mai mult sau mai puțin “fancy”, au nevoie de
                            igienă, întrucât aceștia fac parte din familie, în fiecare zi fiind în preajma noastră și a
                            copiilor noștri, fiind mângâiați și îmbrățișați.</p>
                        <p>În cabinetul veterinar Tetravet vă punem la dispoziție o serie de servicii profesionale
                            pentru întreținerea igienei și aspectului exterior al prietenilor noștri patrupezi: tunsori,
                            îmbăieri etc.</p>
                        <p>
                            Folosim balsamuri și șampoane speciale, fără săpun, de uz profesional, pentru păr degradat,
                            specifice anumitor culori / texturi a firului de păr. Efectuăm îmbăieri în scop de tratament
                            pentru boli bacteriene, micotice, parazitare, folosind șampoane din gama medicală.</p>
                        <p>
                            Este foarte important să cereți sfatul colegilor noștri și veți obține detalii referitoare
                            la: folosirea șamponului adecvat, frecvența spălărilor, felul periajului și ustensilele
                            specifice pentru efectuarea acestuia.</p>
                        <p>Nu în ultimul rând, în cabinetul veterinar Tetravet realizăm, la cerere, o serie de manopere
                            medicale profesionale: tăierea unghiilor, vidarea glandelor perianale și curățarea
                            urechilor.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-ginecologie" tabindex="-1" role="dialog" aria-labelledby="Ginecologie"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">OBSTETRICĂ</h4>
                    </div>
                    <div class="modal-body">
                        <p>În cadrul clinicii veterinare Tetravet, colega noastră dr. Laura Tudor, doctor în științe
                            medicale, se ocupă, în mod special, de departamentul de ginecologie şi obstetrică
                            veterinară.</p>
                        <p>Această specializare este destul de rar abordată corect în clinicile veterinare, fiind foarte
                            complexă și laborioasă atât la nivel teoretic, cât, mai ales, practic.</p>
                        <div>
                            <span>Puteți să îi cereți sfaturi despre:</span>
                            <ul>
                                <li>tratamente hormonale</li>
                                <li>însămânţări artificiale</li>
                                <li>stoparea căldurilor</li>
                                <li>chirurgie în sfera genitală</li>
                                <li>determinarea perioadei de călduri</li>
                                <li>diagnosticul gestaţiei prin metode de laborator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
