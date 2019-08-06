<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">Marketing para Concessionárias</h3>
                    <p class="white">O nosso Marketing para Concessionárias consiste principalmente na criação de um
                                conteúdo relevante</p>
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/carros.png" alt="Marketing para Concessionárias">
                        </div>
                        <div class="single-services-details1">
                            <h3>Sobre o nosso Marketing para Concessionárias</h3>
                            <p>O nosso Marketing para Concessionárias consiste principalmente na criação de um
                                conteúdo relevante e serviços que geram resultados para o aumento de vendas dos
                                nossos clientes, contribuindo assim para o crescimento, visibilidade e valorização da
                                marca diante o mercado.
                            </p>
                            <p> Ao longo dos nossos 10 anos de estrada, a nossa história foi e é pautada pela presença
                                de grandes nomes do setor automotivo nacional presentes na nossa vasta lista de
                                clientes. Então, por isso nos tornamos especialistas neste setor. Afinal, o trabalho, a
                                dedicação e as soluções que propomos fazem parte dos preceitos da nossa equipe.
                            </p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Lorem:</span>   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </li>
                            <li> <span class="bold black">Lorem:</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </li>
                            <li> <span class="bold black">Lorem:</span>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </li>
                            <li> <span class="bold black">Lorem:</span>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='810'">
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
                            <li><a href="midia9-imob">Midia9 Imob</a></li>
                            <li class="active"><a href="marketing-para-concessionarias">Marketing para Concessionárias</a></li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>