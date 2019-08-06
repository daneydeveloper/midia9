<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">E-mail Marketing</h3>
                    <p class="white">Investir em Links Patrocinados é a certeza de estar impactando o seu cliente justamente quando ele busca<br> informações sobre o seu produto ou serviço.</p>
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/marketing.png" alt="E-mail Marketing">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>E-mail marketing é a utilização do e-mail como ferramenta de marketing direto, respeitando normas e procedimentos pré-definidos, analisando o retorno gerado através de relatórios e análises gráficas gerando campanhas cada vez mais otimizadas. É uma das melhores formas de gerar relacionamento e engajamento com o seu público. Além disso o email marketing é o canal que possui o melhor ROI no marketing digital.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Objetivo:</span>  Buscamos reativar clientes que já entraram em contato com você no passado e não concretizaram a compra. Mantemos todos eles informados e interessados sobre seus produtos/serviços.</li>
                            <li> <span class="bold black">Desenvolvimento:</span> Possuímos designers qualificados que criam peças extremamente alinhadas para conversão. Nossos programadores fazem o desenvolvimento das peças em HTML para que fiquem dentro dos padrões corretos de mailing, o que diminui a incidência de mensagens caracterizadas como SPAM.</li>
                            <li> <span class="bold black">Clientes:</span> O e-mail marketing é perfeito para reativar antigos clientes e para propor novos negócios para pessoas que já são seus clientes.</li>
                            <li> <span class="bold black">Dealer Mail:</span> Você pode enviar milhares de e-mails para os contatos cadastrados, além de acompanhar o resultado em tempo real, sabendo quantos clientes receberam, abriram e clicaram na sua campanha.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='801'">
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
                            <li class="active"><a href="e-mail-marketing">E-mail Marketing</a></li>
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