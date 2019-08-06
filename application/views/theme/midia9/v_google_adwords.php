<!-- banner Start -->
<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">Anuncie no Google Adwords</h3>
                    <p class="white">Investir em Links Patrocinados é a certeza de estar impactando o seu cliente justamente <br> quando ele busca informações sobre o seu produto ou serviço.</p>
                    <!-- <button type="button" class="btn btn-warning" id="botao">Solitar Cotação</button> -->
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/adwords1.png" alt="Google Adwords">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>AdWords é o principal serviço de publicidade da Google.  O serviço usa o sistema de publicidade por Custo por Clique (CPC) e (CPM) que consiste em anúncios em forma de links encontrados, principalmente, nos mecanismos de pesquisa relacionados às palavras-chave que o internauta está pesquisando. É um modo de adquirir publicidade altamente segmentada independentemente de qual seja o orçamento do anunciante. </p>
                            <p> Os anúncios do AdWords são exibidos juntamente com os resultados de pesquisa no Google, assim como em sites de pesquisa e de conteúdo, chamado de rede de Display, da crescente rede de anúncios do Google, que inclui AOL, EarthLink, HowStuffWorks e Blogger.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Pesquisa:</span>  O seu cliente acessa um motor de busca (como Google ou Bing) e digita uma palavra-chave relacionada ao seu produto ou serviço. Instantaneamente ele é impactado pelo seu anúncio em formato de texto. </li>
                            <li> <span class="bold black">Display:</span> O seu cliente está lendo algo relacionado ao seu produto ou serviço e é impactado visualmente com seus banners. </li>
                            <li> <span class="bold black">Remarketing:</span> O seu cliente esteve no seu site pesquisando alguma informação e você o impacta novamente com banners enquanto o mesmo navega na internet em outros sites.  </li>
                            <li> <span class="bold black">Vídeo:</span> Adicione vídeos a suas redes sociais e canais do YouTube para aumentar a interatividade com seus clientes. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='797'">
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
                            <li class="active"><a href="google-adwords">Google Adwords</a></li>
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
                            <li><a href="inbound-marketing">Inbound Marketing</a></li>
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