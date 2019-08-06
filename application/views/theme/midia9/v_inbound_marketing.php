<!-- banner Start -->
<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">Inbound Marketing</h3>
                    <p class="white">Inbound Marketing é um conjunto de estratégias que atraem voluntariamente clientes potenciais ao site da empresa. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner End -->
<div class="service-details-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="services-left-sidebar">
                    <div class="serives-content-one">
                        <div class="banner-top">
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/inboud.png" alt="Inbound Marketing">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>O Inbound Marketing se baseia na ideia de criação e compartilhamento de conteúdo voltado para um público-alvo específico, para conquistar a permissão de comunicar com seu potencial cliente de forma direta, criando um relacionamento que pode ser duradouro.</p>
                            <p> Em outras palavras, em vez de interromper os clientes em potencial ,  a ideia é atraí-lo por meio de conteúdo relevante.</p>
                            <p>A partir daí, as pessoas impactadas por esse conteúdo tendem a se sentir confiantes a ponto de permitir que a empresa se aproxime mais e, aos poucos, construa um relacionamento saudável que pode resultar na venda.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Atrair – Seja encontrado pelas pessoas certas:</span>   As estratégias de Inbound Marketing (Marketing de Atração) são a melhor resposta para atrair as pessoas certas para seu negócio, aumentando a audiência qualificada dos ambientes digitais de sua empresa. A Mídia9 desenha e implementa estratégias de atração com planejamento e criação de conteúdo relevante focado nas necessidades do mercado.</li>
                            <li> <span class="bold black">Converter – Transforme visitantes em leads:</span> Com uma boa estratégia Inbound Marketing sua empresa potencializará, e muito, esses números, trazendo mais negócios para sua companhia. A Mídia9 ajuda na transformação dos ambientes digitais de sua empresa em máquinas de geração de leads qualificados em grande escala a um custo altamente competitivo.</li>
                            <li> <span class="bold black">Vender – Entrega de leads qualificados para vendas:</span>  Com campanhas de nutrição de leads e técnicas avançadas de Inbound Sales, sua empresa poderá multiplicar leads qualificados gerados dentro da estratégia de Inbound Marketing.</li>
                            <li> <span class="bold black">Fidelizar – Transforme clientes em promotores:</span> O último estágio do funil de Inbound Marketing apoia sua empresa na estratégia de retenção de clientes, fidelização e venda de novos serviços (upselling e cross-selling). A Mídia9 planeja e gerencia estratégias de conteúdo e relacionamento, melhorando o nível de satisfação dos clientes com sua empresa, favorecendo novas vendas e aumentando a receita na carteira atual.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='808'">
                            <input type="hidden" ng-init="dados.LE_CodigoTipo='2'">
                            <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'">
                            <div class="form-group">
                                <input ng-model="dados.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" type="text" name="nome" placeholder="Digite seu nome:">
                            </div>
                            <div class="form-group">
                                <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" class="form-control" type="email" name="email" placeholder="Digite seu email:">
                            </div>
                            <div class="form-group">
                                <input ng-model="dados.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" type="text" name="nome" placeholder="Digite seu Telefone:" mask="(99) 9-9999-9999">
                            </div>
                            <div class="form-group">
                                <textarea ng-model="dados.LE_Descricao" ng-disabled="load" ng-required="false" class="form-control" type="text" name="descricao" placeholder="Como podemos ajudar?"></textarea>
                            </div>
                            <div class="form-group">
                                <button ng-click="enviarLead(dados)" ng-disabled="formservice.$invalid || load" class="btn bold white"  id="cotacao">
                                    <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                                    <b ng-if="!load ">ENVIAR</b>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3>Serviços</h3>
                        <ul id="single-services-cat">
                            <li><a href="google-adwords">Google Adwords</a></li>
                            <li><a href="criacao-de-sites">Criação de Sites</a></li>
                            <li><a href="criacao-de-landing-pages">Criação de Landing Pages</a></li>
                            <li><a href="crm-midia9">CRM Midia9</a></li>
                            <li><a href="e-mail-marketing">E-mail Marketing</a></li>
                            <li><a href="sms-marketing">SMS Marketing</a></li>
                            <li><a href="gestao-de-redes-sociais">Gestão de Redes Sociais</a></li>
                            <li><a href="facebook-ads">Facebook ADS</a></li>
                            <li><a href="instagram-ads">Instagram ADS</a></li>
                            <li><a href="whatsapp-sac">Whatsapp SAC</a></li>
                            <li><a href="dealerforce">Dealerforce</a></li>
                            <li class="active"><a href="inbound-marketing">Inbound Marketing</a></li>
                            <li><a href="midia9-imob">Midia9 Imob</a></li>
                            <li><a href="marketing-para-concessionarias">Marketing para Concessionárias</a></li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>