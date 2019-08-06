angular.module('app', ['ngMask', 'ngDialog'])
.controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
   $log.warn($location.host());
   $scope.load = false;
   $scope.load1 = false;
   $scope.dados = {};
   var host = 'http://crm2.marketingmidia9.com.br'
   var registra_acesso = function() {
       $http.get(host + '/api/registraAcesso/bpDpxqnEum-Kq6VWbVh9NZw85e8sDHWftI86rVkmf_E')
       .success(function(result){
           $log.info(result);
           $scope.request = result.data;
       });

       $http.get('http://ipv4.myexternalip.com/json')
       .success(function(result) { 
         $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip='+result.ip+'&format=json')
         .success(function(data){
             /*$log.info(data);*/
             $scope.meta = data;
         })
       });
   }

   $scope.enviarLead = function(dados, tmp = null) {
        $scope.load = true;
        // dados.LE_CodigoTipo = 2;
        // dados.LE_Descricao = 'empresa: '+dados.tmp.empresa ;
        // delete dados.tmp;
        // dados.EMP_Key = $scope.request.EMP_Key;
        dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
        dados.LE_MetaDado = $scope.meta;
        $log.info(dados);

        $http({
              method: 'POST',
              url: host + '/api2/registraLead',
              data: $httpParamSerializerJQLike(dados),
              headers: {
                 'Content-Type': 'application/x-www-form-urlencoded'
              }
           })
           .success(function(retorno) {
              $scope.load = false;
              if (!retorno.error) {
                 swal({
                       title: "Obrigado!",
                       text: "suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve",
                       type: "success",
                       confirmButtonColor: "#DD6B55",
                       confirmButtonText: "Ok",
                       closeOnConfirm: false
                    },
                    function() {
                       window.location.href = "";
                    });
              } else {
                 swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
              }
           })
           .error(function(retorno) {
              $scope.load = false;
              $log.error(retorno);
           });
     }

   $scope.openForm = function(template, tipo) {
     $scope.dados.LE_CodigoTipo = tipo;
     ngDialog.openConfirm({
       template:template,
       scope: $scope,
       /*width: '100%',*/
       showClose: false,
       closeByDocument: true,
       closeByEscape: true
     });
   }
   registra_acesso();
});
