angular.module('app', ['ngMask', 'ngDialog', 'multiStepForm'])

.controller('Lead', function($scope, $log, $http, ngDialog){
	$log.info('Load->Lead');
	$scope.dados = {};
	$scope.steps = [
    {
        template: '<div class="row animated bounceIn">\
		                  <div class="col-lg-12">\
		                     <p class="heading-text">Bem vindo à Midia9. Como gostaria de ser chamado?</p>\
		                  </div>\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
		                       <input name="text" ng-model="dados.LE_Nome" class="email input-standard-grey" placeholder="Seu nome" type="text">\
		                   </div>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn-info" disabled>\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-disabled="!dados.LE_Nome" ng-click="$nextStep()">\
		                            <span class="text" >Próximo</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },
    {
        template: '<div class="row animated bounceIn">\
	                  <div class="col-lg-12">\
	                     <p class="heading-text"><b>{{dados.LE_Nome}}</b>, qual Seu Email para Contato?</p>\
	                  </div>\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
		                       <input name="email" ng-model="dados.LE_Email" class="email input-standard-grey" placeholder="Seu Email" type="text">\
		                   </div>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$previousStep()">\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-disabled="!dados.LE_Email" ng-click="$nextStep()">\
		                            <span class="text" >Próximo</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },
    {
        template: '<div class="row animated bounceIn">\
	                  <div class="col-lg-12">\
	                     <p class="heading-text"><b>{{dados.LE_Nome}}</b>, você poderia nós informar seu WhatsApp?</p>\
	                  </div>\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
		                       <input name="text" ng-model="dados.LE_Telefone" mask="(99) 9 9999-9999" class="email input-standard-grey" placeholder="Seu WhatsApp" type="text">\
		                   </div>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$previousStep()">\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-disabled="!dados.LE_Telefone" ng-click="$nextStep()">\
		                            <span class="text" >Próximo</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },

    {
        template: '<div class="row animated bounceIn">\
	                  <div class="col-lg-12">\
	                     <p class="heading-text"><b>{{dados.LE_Nome}}</b>, Você Já Possui um Site? Se sim, qual é o seu domínio?</p>\
	                  </div>\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
		                       <input type="url" ng-model="dados.LE_Site" class="email input-standard-grey" ng-init="dados.LE_Site" placeholder="http://">\
		                   </div>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$previousStep()">\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$nextStep()">\
		                            <span class="text" >Próximo</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },
    {
        template: '<div class="row animated bounceIn">\
	                  <div class="col-lg-12">\
	                     <p class="heading-text"><b>{{dados.LE_Nome}}</b>, Qual forma de contato você prefere?</p>\
	                  </div>\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
		                      <select class="nice-select" ng-model="dados.LE_OpcaoContato">\
                            <option data-display="Selecione uma Opção">Selecione uma Opção</option>\
                            <option value="Por Email">Por Email</option>\
                            <option value="Por Ligação">Por Ligação</option>\
                            <option value="Por WhatsApp">Por WhatsApp</option>\
                            <option value="Visita à Empresa">Visita à Empresa</option>\
                          </select>\
		                   </div>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$previousStep()">\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-disabled="!dados.LE_OpcaoContato" ng-click="$nextStep()">\
		                            <span class="text" >Próximo</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },

    {
        template: '<div class="row animated bounceIn">\
	                  <div class="col-lg-12">\
	                     <p class="heading-text"><b>{{dados.LE_Nome}}</b>, quer nos perguntar algo?</p>\
	                  </div>\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
		                      <textarea rows="4" ng-model="dados.LE_Site" class="email input-standard-grey" ng-init="dados.LE_Site" placeholder="Sua dúvida"></textarea>\
		                   </div>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$previousStep()">\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$nextStep()">\
		                            <span class="text" >Próximo</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },

    {
        template: '<div class="row animated bounceIn">\
		               </div>\
		               <div class="row animated bounceIn">\
		                   <p class="heading-text">Tudo pronto {{dados.LE_Nome}}, agora nós cuidamos do resto. Logo entraremos em contato {{dados.LE_OpcaoContato}} para darmos continuidade a nossa parceria. Obrigado</p>\
		               </div>\
		               <div class="row">\
		                   <div class="col-md-offset-3 col-lg-offset-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$previousStep()">\
		                            <span class="text">Anterior</span>\
		                        </button>\
		                    </div>\
		                    <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-6">\
		                        <button class="btn btn-small btn--primary" ng-click="$nextStep()">\
		                            <span class="text" >Enviar</span>\
		                        </button>\
		                    </div>\
		               </div>'
    },

    ];
	$scope.cotacao = function() {
		$log.info('Cotacao');
		ngDialog.open({
			template: 'v_cotacao',
			scope: $scope,
			width: '90%',
			showClose: false
		});
	}
});