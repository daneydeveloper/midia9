<!-- banner Start -->
<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">Midia9 Imob</h3>
                    <p class="white">Faça a gestão de seus imóveis, anúncios e clientes de maneira fácil, barata e muito eficiente.</p>
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/imob.png" alt="Sistemas Imobiliários">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit and vulputate velit esse molest esse do lore eu feugiat nulla facilisis at vero eros et accumsan et iusto odsim qui blan diten aese eros et acccumsan et iusto velit esse molestie. Duis autem vel eum iriure dolor in hendrerit and vulputate velit esse molest esse do lore eu feugiat nulla facilisis at vero eros et accumsan et iusto odsim qui blan diten aese eros et acccumsan et iusto velit esse molestie.</p>
                            <p> Duis autem vel eum iriure dolor in hendrerit and vulputate velit esse molest esse do lore eu feugiat nulla facilisis at vero eros et accumsan et iusto odsim qui blan diten aese eros et acccumsan et iusto velit esse molestie.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Sistema Completo:</span>   Faça a gestão de clientes e imóveis, além de acompanhar a performance de sua imobiliária de qualquer lugar e de qualquer dispositivo.</li>
                            <li> <span class="bold black">Fácil:</span> Gestão dos clientes automatizada, com envio automático de oportunidades para os interessados e relatórios de atividades para os proprietários.</li>
                            <li> <span class="bold black">Venda Mais:</span>  Transforme o site da sua imobiliária no melhor e mais eficiente canal de divulgação. Nossa parceria é focada em trazer resultados para nossos clientes.</li>
                            <li> <span class="bold black">Layout:</span>  Personalizamos as cores e banners de nossos sites imobiliários conforme o desejo de cada cliente que poderá escolher entre 03 ótimos templates elaborados cuidadosamente para ser amigável e obter alta performance nos principais buscadores.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='809'">
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
                            <li><a href="inbound-marketing">Inbound Marketing</a></li>
                            <li class="active"><a href="midia9-imob">Midia9 Imob</a></li>
                            <li><a href="marketing-para-concessionarias">Marketing para Concessionárias</a></li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>