<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">WhatsApp Auto Sac</h3>
                    <p class="white">Plataforma completa de comunicação com os clientes pelo aplicativo Whatsapp.A sua empresa pode<br> atender seus clientes de uma forma amigável e personalizada</p>
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/wpp.png" alt="Whatsapp Auto Sac">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>É uma plataforma completa para empresas que desejam atender seus clientes de uma forma amigável e personalizada. Utilizando o Whatsapp, sua empresa, conquistará novos adeptos a sua marca e ou produto, e o melhor, é que tudo isso poderá ser feito de uma forma que torne sua empresa exclusiva! </p>
                            <p> Com a plataforma SACDIGITAL em atendimento ao consumidor via Whatsapp, sua empresa, poderá oferecer atendimentos simultâneos com um ou inúmeros operadores com o atendimento operacional por departamento, tudo de forma simples, segura e controlada, contando sempre com o máximo em segurança e controle de atendimento.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Comunicação Personalizada:</span>  Ações focadas que permitem que a sua empresa converse diretamente com os leads, mantendo um maior engajamento e tornando a marca conhecida no mercado.</li>
                            <li> <span class="bold black">Sua Marca:</span> Um dos fatores mais importantes para que uma empresa alcance sucesso é a construção de uma marca forte, e a sua empresa pode alcançar esse objetivo utilizando o WhatsApp.</li>
                            <li> <span class="bold black">Atendimento Simutâneo:</span> Sua empresa poderá oferecer atendimentos simutâneos com um ou inúmeros operadores com o atendimento operacional por departamento, tudo de forma simples, segura e controlada, contando sempre com o máximo em segurança e controle de atendimento.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='806'">
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
                            <li class="active"><a href="whatsapp-sac">Whatsapp SAC</a></li>
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