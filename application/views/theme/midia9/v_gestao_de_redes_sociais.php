<div class="rs-breadcrumbs sec-spacer sec-color">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs-inner">
                    <h3 class="page-title">Gestão de Redes Sociais</h3>
                    <p class="white">A grande maioria dos seus clientes está nas redes sociais. Cabe a nós encontrá-los e manter um<br> relacionamento com eles.</p>
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
                            <img src="<?=base_url('assets/'.THEME)?>/images/servicos/smm.png" alt="Gerenciamento de SMM">
                        </div>
                        <div class="single-services-details1">
                            <h3>O que é?</h3>
                            <p>Social Media Marketing (SMM) é o processo de adquirir tráfego ou captar a atenção dos cibernautas através das Redes Sociais. Geralmente, as estratégias de Social Media Marketing centram-se no esforço de criar conteúdo que atraía a atenção e encoraje os leitores a partilhar esse mesmo conteúdo através dos seus contactos nas redes sociais. Deste modo, as marcas e empresas conseguem difundir a sua mensagem de “boca-a-boca”, o que, presumivelmente, merecerá mais crédito por parte dos utilizadores e potenciais clientes, em oposição à tradicional mensagem corporativa. Assim, esta forma de marketing na internet é desencadeada pelo “passa-a-palavra”, tendo origem nos próprios utilizadores.</p>
                            <p> As Redes Sociais têm-se tornado numa plataforma muito utilizada pelos cibernautas. Daí as empresas apostaram cada vez mais nesta plataforma para divulgarem as suas marcas ou produtos e, muitas vezes, para melhorar o serviço prestado aos seus clientes. As empresas verificam que as redes sociais servem para implementar campanhas de marketing a um preço extremamente baixo, pelo que apresentam um retorno de investimento muito elevado.</p>
                        </div>
                    </div>
                    <div class="sinlge-middle-content">
                        <h3>Vantagens</h3>
                        <ul class="desc-list">
                            <li> <span class="bold black">Foco no Objetivo:</span>   Nosso foco é fazer com que sua empresa venda mais com internet e, para isso, desenvolvemos estratégias que permitem que seu público-alvo se engaje nos canais sociais de sua empresa. Além disso, somos especialistas em criar “armadilhas” a fim de captarmos o interesse de compra dessas pessoas que estão conectadas em sua rede social.</li>
                            <li> <span class="bold black">Conteúdo Atrativo:</span> A Mídia9 busca gerar conteúdo atrativo para que seus prospects e clientes se engajem cada vez mais com os canais sociais da sua empresa, fazendo com que ela esteja sempre presente na cabeça deles.</li>
                            <li> <span class="bold black">Resultado:</span> A Mídia9 não oferece para seus clientes canais que não geram um resultado efetivo em vendas, pois nossa missão é fazer com que a sua empresa fature mais com Internet.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="services-right-sidebar">
                    <div class="service-cats-area">
                        <h3 class="text-center" id="texto-cotacao">Solicitar <strong class="text-orange">Cotação</strong></h3>
                        <form name="formservice">
                            <input type="hidden" ng-init="dados.LE_CodigoProduto='803'">
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
                            <li class="active"><a href="gestao-de-redes-sociais">Gestão de Redes Sociais</a></li>
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