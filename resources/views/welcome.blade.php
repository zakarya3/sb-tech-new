@extends('layouts.navbar')
@section('content')
        <!-- Hero slider + BG parallax -->
        <section class="jarallax dark-mode bg-dark py-xxl-5" style="height: 100vh" data-jarallax data-speed="0.4">
            <span class="position-absolute top-0 start-0 w-100 h-100
                bg-gradient-dark-translucent"></span>
            <div class="jarallax-img" style="background-image: url(assets/img/pictures/landing.jpg)"></div>
            <div class="position-relative text-center zindex-5 overflow-hidden pt-4
                py-md-5" style="height: 100% !important">
              <!-- Slider -->
              <div class="container text-center py-xl-5">
                <div class="row justify-content-center pt-lg-5">
                  <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                    <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{"effect" :"fade" ,"speed" : 500,"autoplay"
                        : {"delay" : 5500,"disableOnInteraction" : false
                        },"pagination" : {"el" :".swiper-pagination" ,"clickable" :
                        true
                        },"navigation" : {"prevEl" :"#hero-prev" ,"nextEl" :"#hero-next"
                        }
                        }'>
                      <div class="swiper-wrapper">
                        <!-- Item -->
                        <div class="swiper-slide">
                          <h2 class="display-2 from-start mb-lg-4">
                            Materiel Et Fourniture Industrielle
                          </h2>
                          <div class="from-end">
                            <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">
                              SB-TECH, la spécialiste dans l'importation et la
                              fourniture de tous matériels industriels conformément
                              aux normes, propose une large gamme de choix de
                              fournitures industrielles.
                            </p>
                          </div>
                          <div class="scale-up delay-1">
                            <a href="#" class="btn btn-primary shadow-primary btn-lg">En
                              savoir plus sur nous</a>
                          </div>
                        </div>
                      </div>
      
                      <!-- Pagination (bullets) -->
                      <div class="swiper-pagination position-relative d-md-none pt-2
                          mt-5"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <!-- About -->
          <section class="container pt-5 mt-2 mt-md-4 mt-lg-5">
            <div class="row pt-xl-3">
              <div class="col-md-5 text-center text-md-start pb-5">
                <h1 class="mb-4">SB-TECH</h1>
                <p class="fs-lg pb-lg-3 mb-4">
                  SB-TECH, la spécialiste dans l'importation et la fourniture de
                  tous matériels industriels conformément aux normes, propose une
                  large gamme de choix de fournitures industrielles. Notre expertise
                  vient de nos connaissances et de notre expérience dans le domaine
                  industriel avec toute sorte de matériel. Nos technico-commerciaux
                  professionnels et qualifiés, s'engagent à vous fournir des devis
                  et des délais de livraison qui défient tous les concurrents et en
                  utilisant toutes leurs expertises pour répondre à vos besoins.
                </p>
                <a href="about-v2.html" class="btn btn-primary shadow-primary btn-lg">En savoir plus sur
                  nous</a>
              </div>
              <div class="col-xl-6 col-md-7 offset-xl-1 pb-4 pb-sm-3 pb-lg-0 mb-4
                  mb-sm-5 mb-lg-0">
                <img src="assets/img/pictures/29020.jpg" class="rounded-3 shadow-sm" alt="Image" />
              </div>
            </div>
          </section>
      
          <!-- Services -->
          <section class="bg-secondary pb-md-2 pb-lg-5">
            <div class="d-none d-lg-block" style="margin-top: -60px; padding-top: 60px"></div>
            <div class="container pb-4 pt-5">
              <h2 class="h1 text-center text-md-start mb-lg-4 pt-1 pt-md-4">
                Nos Services
              </h2>
              <div class="row align-items-center pb-5 mb-lg-2">
                <div class="col-md-8 text-center text-md-start">
                  <p class="fs-lg text-muted mb-md-0">
                    Naturellement présents chez SB-TECH, les services aux clients se
                    sont structurés au fil des années au niveau : support
                    technique,maintenance et rationalisation des achats.
                  </p>
                </div>
                <div class="col-md-4 d-flex justify-content-center
                    justify-content-md-end">
                  <a href="services.html" class="btn btn-outline-primary btn-lg">Contactez-nous</a>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-2">
                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                  <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm
                      text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3
                      pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                      <div class="d-inline-block bg-primary shadow-primary rounded-3
                          position-absolute top-0 translate-middle-y p-3">
                        <img src="assets/img/icons/window.png" class="d-block m-1" width="40" alt="Icon" />
                      </div>
                      <h2 class="h4 d-inline-flex align-items-center">
                        Programmation
                        <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                      </h2>
                      <p class="fs-sm text-body mb-0">
                        Les études de faisabilité. Le développement des applications
                        sur la base de caméras propriétaires ou PC. La réalisation
                        et mise au point sur site. <br />Les études et le
                        développement de programme sur interfaces propriétaires.
                        Mise en place et test sur site. <br />Études de solutions
                        informatiques industrielles en réseaux Réalisation de
                        supervision de fabrications ou de productions. <br />
                        Au travers de différentes applications Vision, supervision,
                        contrôle process, marquage laser, SB-TECH est amenée à
                        réaliser des développements informatiques en vue d'une
                        traçabilité produit.
                      </p>
                    </div>
                  </a>
                </div>
      
                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                  <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm
                      text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3
                      pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                      <div class="d-inline-block bg-primary shadow-primary rounded-3
                          position-absolute top-0 translate-middle-y p-3">
                        <img src="assets/img/icons/management.png" class="d-block m-1" width="40" alt="Icon" />
                      </div>
                      <h2 class="h4 d-inline-flex align-items-center">
                        Organisation
                        <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                      </h2>
                      <p class="fs-sm text-body mb-0">
                        En collaboration avec les responsables des sites
                        industriels, chaque projet est encadré par un ingénieur
                        développement. Les études et développements sont réalisés
                        dans un premier temps dans nos locaux équipés en matériels
                        de vision, écrans et interfaces hommes machines, systèmes
                        d'acquisitions de données, systèmes d'automatisme et motion
                        contrôle. Les mises au point et finalisations sont réalisées
                        sur sites.
                      </p>
                    </div>
                  </a>
                </div>
      
                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                  <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm
                      text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3
                      pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                      <div class="d-inline-block bg-primary shadow-primary rounded-3
                          position-absolute top-0 translate-middle-y p-3">
                        <img src="assets/img/icons/activities.png" class="d-block m-1" width="40" alt="Icon" />
                      </div>
                      <h2 class="h4 d-inline-flex align-items-center">
                        Domaines d'activités
                        <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                      </h2>
                      <p class="fs-sm text-body mb-0">
                        L'ensemble des clients industriels du Maroc dans les
                        domaines d'activités suivants: <br />
                        1- L'automobile. <br />
                        2- L'agro-alimentaire. <br />
                        3- L'emballage. <br />
                        4- La sidérurgie et métallurgie. <br />
                        5- Les laboratoires pharmaceutiques et cosmétiques. <br />
                        6- Les sociétés d'ingénieries et fabrication des machines
                        spéciales.
                      </p>
                    </div>
                  </a>
                </div>
      
                <!-- Item -->
                <div class="col py-4 my-2 my-sm-3">
                  <a href="services-single.html" class="card card-hover h-100 border-0 shadow-sm
                      text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3
                      pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                      <div class="d-inline-block bg-primary shadow-primary rounded-3
                          position-absolute top-0 translate-middle-y p-3">
                        <img src="assets/img/icons/support.png" class="d-block m-1" width="40" alt="Icon" />
                      </div>
                      <h2 class="h4 d-inline-flex align-items-center">
                        Service de vente
                        <i class="bx bx-right-arrow-circle text-primary fs-3 ms-2"></i>
                      </h2>
                      <p class="fs-sm text-body mb-0">
                        Nos experts s'assureront du bon choix et que toutes les
                        exigences ont été correctement satisfaites. <br />- Conseil:
                        notre équipe de conseil vous accompagne dans vos achats.
                        <br />- Solutions: nous proposons des solutions sur mesure
                        pour rationaliser et automatiser vos processus de commande.
                        <br />- Offre sur mesure: adaptation au besoin des clients
                        et de leur activité avec des tarifs préférentiels.
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
      
          <!-- Case studies -->
          <section  class="bg-secondary pt-1">
            <div class="container">
              <h2 class="h1 text-center text-md-start mb-lg-4">Nos produis</h2>
              <div class="row align-items-center pb-5">
                <div class="col-md-8 col-lg-7 col-xl-6 text-center text-md-start">
                  <p class="fs-lg text-muted mb-md-0">
                    SB-TECH vous offre une large gamme de choix de matériels.
                  </p>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 d-flex justify-content-center
                    justify-content-md-end">
                  <a href="#" class="btn btn-outline-primary btn-lg">Les Produits</a>
                </div>
              </div>
            </div>
      
            <div class="position-relative py-lg-4 py-xl-5">
              <!-- Swiper tabs -->
              <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
                <div id="image-1" class="jarallax position-absolute top-0 start-0 w-100 h-100
                    swiper-tab active" data-jarallax data-speed="0.4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark
                      opacity-35"></span>
                  <div class="jarallax-img" style="background-image: url(assets/img/pictures/elect.jpg)"></div>
                </div>
                <div id="image-2" class="jarallax position-absolute top-0 start-0 w-100 h-100
                    swiper-tab" data-jarallax data-speed="0.4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark
                      opacity-35"></span>
                  <div class="jarallax-img" style="background-image:
                      url(assets/img/pictures/industrial-worker-working-production-line-factory.jpg);"></div>
                </div>
                <div id="image-3" class="jarallax position-absolute top-0 start-0 w-100 h-100
                    swiper-tab" data-jarallax data-speed="0.4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark
                      opacity-35"></span>
                  <div class="jarallax-img" style="background-image: url(assets/img/pictures/robotic.jpg);"></div>
                </div>
                <div id="image-4" class="jarallax position-absolute top-0 start-0 w-100 h-100
                    swiper-tab" data-jarallax data-speed="0.4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark
                      opacity-35"></span>
                  <div class="jarallax-img" style="background-image:
                      url(assets/img/pictures/portrait-young-worker-hard-hat-large-metalworking-plant.jpg);"></div>
                </div>
                <div id="image-5" class="jarallax position-absolute top-0 start-0 w-100 h-100
                    swiper-tab" data-jarallax data-speed="0.4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark
                      opacity-35"></span>
                  <div class="jarallax-img" style="background-image:
                      url(assets/img/pictures/process-building-space-rocket-engine.jpg);"></div>
                </div>
              </div>
      
              <!-- Swiper slider -->
              <div class="container position-relative zindex-5 py-5">
                <div class="row py-2 py-md-3">
                  <div class="col-xl-5 col-lg-7 col-md-9">
                    <!-- Slider controls (Prev / next) -->
                    <div class="d-flex justify-content-center justify-content-md-start
                        pb-3 mb-3">
                      <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2">
                        <i class="bx bx-chevron-left"></i>
                      </button>
                      <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2">
                        <i class="bx bx-chevron-right"></i>
                      </button>
                    </div>
      
                    <!-- Card -->
                    <div class="card bg-white shadow-sm p-3">
                      <div class="card-body">
                        <div class="swiper" data-swiper-options='{"spaceBetween" : 30,"loop" : true,"tabs"
                            : true,"pagination" : {"el" :"#case-study-pagination" ,"clickable"
                            : true
                            },"navigation" : {"prevEl" :"#case-study-prev" ,"nextEl" :"#case-study-next"
                            }
                            }'>
                          <div class="swiper-wrapper">
                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#image-1">
                              <img src="assets/img/icons/electricity.png" class="d-block mb-3" width="72" alt="Logo" />
                              <h3 class="mb-2">
                                Matériel électrique industriel modulaire
                              </h3>
                              <p class="fs-sm text-muted border-bottom pb-3 mb-3"></p>
                              <p class="pb-2 pb-lg-3 mb-3">
                                L'appareillage modulaire électrique est prévu pour
                                être intégré dans tous les coffrets possédant des
                                rails DIN. Il peut servir aussi bien pour de la
                                protection que de la commande. Nous proposons parmi
                                notre gamme de produits modulaires l'intégralité des
                                besoins usuels pour la constitution de votre
                                tableau.
                              </p>
                              <a href="#" class="btn btn-primary">View</a>
                            </div>
      
                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#image-2">
                              <img src="assets/img/icons/engineering.png" class="d-block mb-3" width="72" alt="Logo" />
                              <h3 class="mb-2">Instrumentation & Régulation</h3>
                              <p class="fs-sm text-muted border-bottom pb-3 mb-3"></p>
                              <p class="pb-2 pb-lg-3 mb-3">
                                SB-TECH met à votre disposition offre des capacités
                                de connectivité permettant de réagir plus rapidement
                                aux demandes d'informations dans le cadre d'un
                                environnement sur et sécurisé.
                              </p>
                              <a href="#" class="btn btn-primary">View</a>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#image-3">
                              <img src="assets/img/icons/robot.png" class="d-block mb-3" width="72" alt="Logo" />
                              <h3 class="mb-2">Robotique</h3>
                              <p class="fs-sm text-muted border-bottom pb-3 mb-3"></p>
                              <p class="pb-2 pb-lg-3 mb-3">
                                Notre gamme de robots industriels est conçue pour
                                travailler dans les environnements les plus
                                hostiles, mais également pour répondre aux critères
                                des salles blanches ,les robots démontrent leur
                                efficacité en toutes circonstances. Partout où la
                                vitesse, la compacité, la précision et la fiabilité
                                sont demandées, nos robots apportent la réponse
                                adaptée, quelle que soit l'industrie ou le type
                                d'application: agroalimentaire, biotechnologie et
                                pharmaceutique, secteur automobile, plasturgie ou
                                encore pour le photovoltaique et l'énergie solaire.
                              </p>
                              <a href="#" class="btn btn-primary">View</a>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#image-4">
                              <img src="assets/img/icons/hydraulic.png" class="d-block mb-3" width="72" alt="Logo" />
                              <h3 class="mb-2">Hydrailique & Pneumatique</h3>
                              <p class="fs-sm text-muted border-bottom pb-3 mb-3"></p>
                              <p class="pb-2 pb-lg-3 mb-3">
                                Grace à notre gamme de composants pneumatique, nous
                                couvrirons toutes les exigences dans le domaine de
                                l'automatisation industrielle : vérins double effet,
                                vérins cylindriques, vérins carrés, vérins compacts,
                                distributeurs, électrovannes, régulateurs de
                                pression, filtres régulateurs lubrificateurs,
                                capteurs, connecteurs...
                              </p>
                              <a href="#" class="btn btn-primary">View</a>
                            </div>
                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-tab="#image-5">
                              <img src="assets/img/icons/engineering.png" class="d-block mb-3" width="72" alt="Logo" />
                              <h3 class="mb-2">Groupe machine</h3>
                              <p class="fs-sm text-muted border-bottom pb-3 mb-3"></p>
                              <p class="pb-2 pb-lg-3 mb-3">
                                SB-TECH met son expertise ingénierie à la
                                disposition de ses clients et répond à tous les
                                besoins en énergie électrique, même les plus
                                exigeants. Elle conçoit, fabrique et installe des
                                centrales de production d'électricité de puissance
                                sur-mesure, intégrant ses groupes électrogènes
                                industriels les plus adaptés comptenu des
                                contraintes techniques. Ses solutions d'énergie
                                répondent aux attentes de tous les domaines
                                d'activités : data-centres, télécommunications,
                                santé, agriculture, militaire, centres commerciaux,
                                etc...
                              </p>
                              <a href="#" class="btn btn-primary">View</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
      
                    <!-- Pagination (bullets) -->
                    <div class="dark-mode pt-4 mt-3">
                      <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      
          <!-- Features -->
          <section class="container py-5 my-2 my-md-4 my-lg-5">
            <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">POURQUOI NOUS SOMMES LE FOURNISSEUR IDÉAL ?</h2>
            <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">
              SB-TECH met en oeuvre des outils fiables pour optimiser l'offre en vue de répondre aux besoins de chaque client quelle que soit son activité.
            </p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
              <div class="col text-center border-end">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/01.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">
                  Disponibilité de matériels avec des prix concurrentiels.
                </h3>
              </div>
              <div class="col text-center border-end">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/02.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">Accompagnement du projet de la phase d'étude jusqu'à son terme.</h3>
              </div>
              <div class="col text-center border-end">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/03.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">Etude, planification, estimation du budget de telles opérations.</h3>
              </div>
              <div class="col text-center">
                <div class="d-table bg-light rounded-circle shadow-sm p-3 mx-auto mb-4">
                  <img src="assets/img/icons/04.svg" width="32" alt="Icon" />
                </div>
                <h3 class="h5 mb-2 mb-lg-0">Service proactif avec une détection intelligente des défauts et des mises à jour distance.</h3>
              </div>
            </div>
          </section>
      
          <!-- Brands (Carousel) -->
          <section class="container pb-5">
            <h2 class="h1 text-center pt-1 pt-xl-2 mb-4">Nos partenaires</h2>
            <div class="swiper mx-n2" data-swiper-options='{"slidesPerView" : 2,"pagination" : {"el" :".swiper-pagination"
                ,"clickable" : true
                },"breakpoints" : {"500" : {"slidesPerView" : 3,"spaceBetween" : 8
                },"650" : {"slidesPerView" : 4,"spaceBetween" : 8
                },"900" : {"slidesPerView" : 5,"spaceBetween" : 8
                },"1100" : {"slidesPerView" : 6,"spaceBetween" : 8
                }
                }
                }'>
              <div class="swiper-wrapper">
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/swissysteme.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/Siemens.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/vidka.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/ABB.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/Fanuc.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/maxwell.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/Schneider.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/OMRON.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
      
                <!-- Item -->
                <div class="swiper-slide py-3">
                  <a href="#" class="card card-body card-hover px-2 mx-2">
                    <img src="assets/img/brands/Nexans.png" style="height: 8vh; object-fit: contain;" class="d-block mx-auto my-2" width="200" alt="Brand" />
                  </a>
                </div>
              </div>
      
              <!-- Pagination (bullets) -->
              <div class="swiper-pagination position-relative pt-2 mt-4"></div>
            </div>
          </section>
      
          <!-- News slider -->
          <section class="bg-secondary border-bottom border-light py-5">
            <div class="container py-md-3 py-lg-5">
              <h2 class="h1 text-center pb-2">Catalogue</h2>
              <div class="position-relative mx-md-2 px-md-5">
                <!-- Swiper slider -->
                <div class="swiper swiper-nav-onhover mx-n2">
                  <div class="swiper-wrapper">
                    <!-- Item -->
                    <div class="swiper-slide h-auto py-3">
                      <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary
                          h-100 mx-2">
                        <div class="card-body pb-0">
                          <div class="d-flex align-items-center justify-content-between
                              mb-3">
                            <a href="#" class="badge fs-sm text-nav bg-secondary
                                text-decoration-none position-relative zindex-2">Catalogue</a>
                            <span class="fs-sm text-muted"><script> 
                            const date = new Date();
                            document.write("2021-"+date.getFullYear())
                            </script></span>
                          </div>
                          <h3 class="h4">
                            <a href="assets/img/catalogue/Catalogue.pdf" download="" class="stretched-link">Obtenir le catalogue</a>
                          </h3>
                          <p class="mb-0">
                            SB-TECH met en oeuvre des outils fiables pour optimiser l'offre en vue de répondre aux besoins de chaque client quelle que soit son activité.
                          </p>
                        </div>
                      </article>
                    </div>
                  </div>
      
                  <!-- Pagination (bullets) -->
                  <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
                </div>
              </div>
            </div>
          </section>
      
          <!-- CTA -->
          <section class="position-relative bg-dark py-5">
            <span class="position-absolute top-0 start-0 w-100 h-100"
              style="background-color: rgba(255, 255, 255, 0.05)"></span>
            <div class="container position-relative zindex-5 text-center my-xl-3 py-1
                py-md-4 py-lg-5">
              <p class="lead text-light opacity-70 mb-3">Plateforme météo</p>
              <h2 class="h1 text-light pb-3 pb-lg-0 mb-lg-5">
                SB-TECH Cloud Platform <br>
      Accédez à toutes les données de votre moniteur d'environnement ou de votre station météo
              </h2>
              <a href="#" class="btn btn-primary shadow-primary btn-lg">Se connecter</a>
            </div>
          </section>
@endsection
