<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">SMS Marketing</h3>
                    <p class="white">Aumente a sua captação de leads em mais de 30% com o nosso sistema de recebimento de sms</p>
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/email.png" alt="SMS Marketing">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>O SMS Marketing é simplesmente uma excelente e eficaz estratégia de relacionamento adotada por empresas, que buscam seguir a tendência inovadora de mercado, e estabelecem uma ponte com os seus clientes, oferecendo e promovendo novos serviços, sustentando conexões com os seus consumidores, ou até mesmo no exercício de difundir uma promoção ou lembrete.</p>
                            <p>Com o SMS Marketing a comunicação é valorizada, já que agora se torna direta e instantânea, sendo ainda mais efetiva do que uma publicidade online ou envio de e-mails marketing. Pesquisas indicam que as pessoas conferem novas notificações em seus celulares até 150 vezes ao dia, e se levarmos em consideração que o celular é a ferramenta que intermedia o envio de SMS Marketing, esse número passa a ser bem favorável para a sua adoção, que ainda é incrementada com os baixos custos de serviço, já que iniciar uma campanha de SMS Marketing é de extremo custo x benefício.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Campanhas Atraentes:</span>  Crie campanhas atraentes de SMS Marketing, avalie os resultados e aumente as suas vendas.</li>
                            <li> <span class="bold black">Comunicação personalizada:</span> Gere proximidade, mostre a seus clientes o quanto são especiais para o seu negócio.</li>
                            <li> <span class="bold black">Divulgações:</span> Divulgue seus eventos ou promoções e tenha mais retorno para os seus negócios.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='802'">
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
                            <li class="active"><a href="sms-marketing">SMS Marketing</a></li>
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