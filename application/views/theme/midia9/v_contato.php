   <!-- Breadcrumbs -->
<div class="rs-breadcrumbs sec-spacer">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="breadcrumbs-inner">
               <h3 class="page-title">Entre em Contato</h3>
               <ul>
                  <li>
                     <a class="active" href="<?=base_url()?>">Home</a>
                  </li>
                  <li>Entre em Contato</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- Breadcrumbs -->
   <!-- Contact Form -->
<div id="rs-contactform" class="rs-contactform sec-spacer">
   <!-- <div class="container">
      <div class="sec-title">
         <h3>Preencha o formulário e em breve ligaremos para você.</h3>
      </div>
   </div> -->
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <h3 class="justificado">Por que investir no digital?</h3>
            <br>
            <p class="justificado" id="font500">Investir no digital é poder ter uma visão de um mercado que vem crescendo cada vez mais. E sua empresa, obviamente, não pode ficar de fora.  E para isso, o seu negócio precisa de uma agência especialista no segmento. A <strong class="text-orange">Mídia9</strong> entra como a sua parceira para trazer soluções e resultados, pois este é o nosso principal foco e objetivo. Aumente a sua força na internet e veja os seus resultados convertidos em vendas.</p>
         </div>
         <div class="col-sm-6">
            <h3 class="text-center">Quer potencializar a sua marca? <br>Entre em contato com a gente. </h3>
            <form name="fomrcontato">
               <input type="hidden" ng-init="dados.LE_CodigoProduto='811'">
               <input type="hidden" ng-init="dados.LE_CodigoTipo='9996'">
               <input type="hidden" ng-init="dados.LE_Origem='<?=$origem?>'">
               <div class="col-sm-12 form-group">
                  <input ng-model="dados.LE_Nome" ng-disabled="load" ng-required="true" class="form-control" type="text" name="name" placeholder="Nome :" id="inputcontatos">
               </div>
               <!-- <div class="col-sm-12 form-group">
                  <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" class="form-control" type="text" name="email" placeholder="Email :" id="inputcontatos">
               </div> -->
               <div class="col-sm-6 form-group">
                  <input ng-model="dados.LE_Email" ng-disabled="load" ng-required="true" class="form-control" type="text" name="email" placeholder="Email :" id="inputcontatos">
               </div>
               <div class="col-sm-6 form-group">
                  <input ng-model="dados.LE_Telefone" ng-disabled="load" ng-required="true" class="form-control" type="text" name="number" placeholder="Telefone :" mask="(99) 9-9999-9999" id="inputcontatos">
               </div>
               <div class="col-sm-12 form-group">
                  <textarea ng-model="dados.LE_Descricao" ng-disabled="load" ng-required="false" class="form-control" id="message" name="message" placeholder="Como podemos ajudar ?" rows="6" id="inputcontatos"></textarea>
               </div>
               <div class="col-sm-12 form-group">
                  <!-- <input class="submit" type="submit" value="Enviar" style="width: 100%" /> -->
                  <button ng-click="enviarLead(dados)" ng-disabled="fomrcontato.$invalid || load" class="btn bold white"  id="cotacao">
                     <b ng-if="load ">ENVIANDO INFORMAÇÕES...</b>
                     <b ng-if="!load ">ENVIAR</b>
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
   <!-- Contact Form -->
   <!-- Mapa -->
<div id="contact-info2" class="contact-info2">
   <div class="container-fluid full-width">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 padding-0">
            <div id="map-canvas" class="g-map"></div>
          </div>
      </div>
   </div>
</div>
   <!-- Mapa -->