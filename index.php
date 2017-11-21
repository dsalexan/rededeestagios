<?php include("contador-visitas.php"); ?>
<html lang="pt_BR">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="<dsalexan></dsalexan>">

    <title>Rede de Estágios</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/hint.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">

    <!--LEMBRAR DE SUBIR AS FONTES JUNTO COM O SERVIDOR-->
    <!-- VER COMO REGISTRAR OS ACESSOS -->
  </head>

  <body>

    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #202020 !important;">
      <div class="container">
        <a class="navbar-brand logo_holder" href="/rede/"><img class="img-fluid-height" src="images/logo_rede.png" alt="Rede de Estágios"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link header-link" id="link-body-seletor" href="#ambitos">ÂMBITOS DE ATUAÇÃO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-link" id="link-body-second" href="#agenda">AGENDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-link" id="link-body-map" href="#mapeamento">MAPEAMENTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link header-link" id="link-contact" href="#contato">CONTATO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="welcome-message">
          <div class="top-pusher">
            <div>
              <div class="main-message"><h2 class="text-white">Rede de Estágios</h2></div>
              <div class="body-message">
                <p>A Rede de Estágios é uma iniciativa da Empresa Júnior da UNIFESP SJC (ECTM JR) que visa aumentar as relações empresariais da universidade a fim de conceder mais oportunidades aos alunos da universidade.</p>
                <p>O projeto é estruturado em três vertentes: celebrar novos convênios de modo a facilitar o ingresso dos alunos da universidade no mercado de trabalho, mapear as empresas conveniadas de acordo com os cursos oferecidos no Campus de São José dos Campos e oferecer treinamentos para processos seletivos.</p>
              </div>
            </div>
          </div>
          <div class="container bottom-pusher">
            <div class="row seletores">
                <div class="item-seletor col-md-4" data-color="blue"><h5>Convênios</h5></div>
                <div class="item-seletor col-md-4" data-color="red"><h5>Mapeamento</h5></div>
                <div class="item-seletor col-md-4" data-color="green"><h5>Capacitação</h5></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="body-seletor vertical-centralizer" data-negative-offset=66>
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div id="selector-text-holder" class="col-md-5" data-rule-color="blue">
            <section data-color="blue">
              <div class="title"><h3 id="test-label">Novos Convênios:</h3></div>
              <div class="text">
                <p>Todos sabemos o quão complicada é a época de processos seletivos e estágio. Um aluno que presta inúmeros processos não terá tempo de fazer os convênios dessas inúmeras empresas. É aí que entramos: Nós faremos os convênios para os alunos. </p>
                <p>Como?</p>
                <p>Nos envie o nome da empresa no espaço “contato” que está ao lado do mapeamento abaixo e entraremos em contato para fazer o convênio!</p>
              </div>
            </section>
            <section data-color="red">
              <div class="title"><h3>Mapeamento das Empresas:</h3></div>
              <div class="text">
                <p>Fizemos o mapeamento das empresas que oferecem ou já ofereceram estágios para alunos da UNIFESP, ou seja, empresas que muito possivelmente têm interesse em contratar nossos estudantes.</p>  
                <p>O mapeamento está na parte inferior do site com mais detalhes!</p>
                <p>(É recomendável que o estudante verifique se o convênio ainda está válido, por meio da intranet da universidade ou do site institucional da empresa).</p>
              </div>
            </section>
            <section data-color="green">
              <div class="title"><h3>Treinamentos para Processos Seletivos:</h3></div>
              <div class="text">
                <p>Sabemos que o exigido em processos seletivos é muito diferente das habilidades praticadas dentro de sala de aula na faculdade.</p>
                <p>Para ajudar os alunos a se prepararem melhor para dinâmicas e entrevistas a ideia é trazer palestrantes que possam compartilhar esse know how!</p>
                <p>Novidades em Breve!</p>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="paralelo"></div>
      <div class="overlay paralelo"></div>
    </section>

    <section class="body-second vertical-centralizer">
      <div class="paralelo"></div>
      <div class="calendar"></div>
      <div class="em-construcao">Seção em Construção</div>
    </section>

    <section class="body-map vertical-centralizer">
      <!-- ANALISAR VIABILIDADE DE USAR A API DO GOOGLE MAPS AO INVEZ DO IFRAME -->
      <!-- PERSONALIZAR PONTO DA ECTM NO MAPA -->
      <!-- MOSTRAR TOOLTIP AO ENTRAR NA AREA -->
      <div class="paralelo white" style="left: -2.5%;"></div>
      <div class="paralelo black" style="left: -2%;"></div>
      <div id="map-holder" class="map-holder">
        <div class="map-hint overlay left hint--top hint--large" data-hint="Utilize o botão no canto superior esquerdo para selecionar os marcadores no mapa"></div>
        <iframe id="map-frame" src="https://www.google.com/maps/d/embed?mid=1akAyF1s7SChwfAPWDJzzAhIZNTk"></iframe>
        <div class="map-hint overlay right hint--right hint--medium" data-hint="O mapeamento visa auxiliar o aluno a encontrar empresas que já tenham o convênio com a universidade. As empresas estão divididas em quatro áreas: Engenharia de materiais, Engenharia da computação, Engenharia Biomédica e Biotecnologia."></div>
      </div>
      <div class="paralelo white" style="right: -2.5%;"></div>
      <div class="paralelo black" style="right: -2%;"></div>
    </section>

    <section id="contato" class="contact"  data-mode="none">
      <div class="paralelo"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-centered">
            <div class="title"><span>Contato</span></div>
          </div>
        </div>
        <div class="row text">
          <div class="col-md-8 col-centered">
            <div class="text">
              <p>A empresa que você quer estagiar não está no mapa? Sugira a empresa que entraremos em contato para fazer o convênio!</p><p>
              Tem outras dúvidas ou sugestões para a rede de estágios? Fale conosco!</p>
            </div>
          </div>
        </div>
        <div class="row buttons">
          <div class="col-md-2"></div>
          <div class="col-md-3 solid-button button" data-value="sugestion">Sugerir Empresa</div>
          <div class="col-md-2"></div>
          <div class="col-md-3 empty-button button" data-value="talking">Fale Conosco</div>
          <div class="col-md-2"></div>
        </div>
        <section id="lower-contact">
          <!-- ADICIONAR FORMULARIO E FUNCOES DE EMAIL -->
          <div class="row sugestion">
            <div class="col-md-8 col-centered">
              <div class="container">
                <form name="sugest-form" method="post" action="send-mail-sugest.php">
                  <div class="row input-row">
                    <!-- ADICIONAR NIVEL DE URGENCIA -->
                    <div class="col-md-6">
                      <input name="nome" type="text" placeholder="Nome"></input>
                    </div>
                    <div class="col-md-6">
                      <input name="email" type="text" placeholder="Email"></input>
                    </div>
                  </div>
                  <div class="row input-row">
                    <div class="col-md-6">
                      <input name="empresa" type="text" placeholder="Empresa"></input>
                    </div>
                    <div class="col-md-6">
                      <input name="contato_empresa" type="text" placeholder="Contato da Empresa"></input>
                    </div>
                  </div>
                  <div class="row input-row">
                    <div class="col-md-12">
                      <input name="urgencia" type="text" placeholder="Urgencia"></input>
                    </div>
                  </div>
                  <div class="row input-row">
                    <div class="col-md-12">
                      <textarea name="info" placeholder="Informações adicionais"></textarea>
                    </div>
                  </div>
                  <div class="row input-row">
                    <div class="col-md-6">
                      <input id="sendSugestion" type="submit" value="Enviar"></input>
                    </div>
                    <div class="col-md-6">
                      <input class="cancel" type="button" value="Cancelar"></input>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row talking">
            <form name="contact-form" method="post" action="send-mail-contact.php">
            <div class="container">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6 form">
                  <div class="container">
                    <div class="row input-row">
                      <div class="col-md-6">
                        <input name="nome" type="text" placeholder="Nome"></input>
                      </div>
                    </div>
                    <div class="row input-row">
                      <div class="col-md-6">
                        <input name="email" type="text" placeholder="Email"></input>
                      </div>
                    </div>
                    <div class="row input-row">
                      <div class="col-md-6">
                        <input name="assunto" type="text" placeholder="Assunto"></input>
                      </div>
                    </div>
                    <div class="row input-row">
                      <div class="col-md-12">
                        <textarea name="mensagem" placeholder="Mensagem"></textarea>
                      </div>
                    </div>
                    <div class="row input-row">
                      <div class="col-md-6">
                        <input id="sendSugestion" type="submit" value="Enviar"></input>
                      </div>
                      <div class="col-md-6">
                        <input class="cancel" type="button" value="Cancelar"></input>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="col-md-1">
                  <div class="separator"></div>
                </div>
                <div class="col-md-3 info vertical-centralizer">
                  <div>
                    <div class="text"><span class="glyphicon glyphicon-globe"></span> Unidade Parque Tecnológico - Avenida Cesare Mansueto Giulio Lattes, n° 1201 - Eugênio de Mello, CEP: 12247-014</div>
                    <div class="text"><span class="glyphicon glyphicon-phone"></span> (TELEFONE)</div>
                    <div class="text"><span class="glyphicon glyphicon-envelope"></span> rededeestagios@ectmjr.com.br</div>
                    <div class="text">facebook.com/departamentodeestagiosunifesp</div>
                  </div>
                </div>
                <div class="col-md-1"></div>
              </div>
            </div>
            </form>
          </div>
        </section>
      </div>
      <div class="paralelo"></div>
    </section>

    <!-- footer -->
    <footer class="footer vertical-centralizer" data-visits="<?php pageview_counter(); ?>">
      <div>
        <div style="font-size: 0.9em;">&copy; 2017 ECTM Jr | Graph Versão 0.2 α</div>
        <div style="font-size: 0.8em;">Todos os direitos reservados</div>
      </div>
    </footer>

    <!-- bootstrap jscript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/general.js"></script>

  </body>
</html>
