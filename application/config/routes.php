<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Custom Routes*/
$route['sobre-a-midia9'] = 'site/sobre_empresa';
$route['nossos-servicos'] = 'site/servicos';
$route['blog'] = 'site/blog';
$route['contato'] = 'site/contato';
// Servicos
$route['google-adwords'] = 'site/google_adwords';
$route['criacao-de-sites'] = 'site/criacao_de_sites';
$route['criacao-de-landing-pages'] = 'site/criacao_de_landing_pages';
$route['crm-midia9'] = 'site/crm_midia9';
$route['e-mail-marketing'] = 'site/e_mail_marketing';
$route['sms-marketing'] = 'site/sms_marketing';
$route['whatsapp-sac'] = 'site/whatsapp_sac';
$route['gestao-de-redes-sociais'] = 'site/gestao_de_redes_sociais';
$route['facebook-ads'] = 'site/facebook_ads';
$route['instagram-ads'] = 'site/instagram_ads';
$route['midia9-imob'] = 'site/midia9_imob';
$route['marketing-para-concessionarias'] = 'site/marketing_para_concessionarias';
$route['dealerforce'] = 'site/dealerforce';
$route['inbound-marketing'] = 'site/inbound_marketing';
// Blog Detalhe
$route['mensuracao-de-resultados-no-marketing-digital'] = 'site/mensuracao_de_resultados_no_marketing_digital';
$route['como-construir-uma-audiencia-digital'] = 'site/como_construir_uma_audiencia_digital';
$route['como-usar-o-marketing-de-conteudo-dentro-da-jornada-de-compra'] = 'site/como_usar_o_marketing_de_conteudo_dentro_da_jornada_de_compra';
$route['a-importancia-das-redes-de-afiliados-no-mercado-digital-brasileiro'] = 'site/a_importancia_das_redes_de_afiliados_no_mercado_digital_brasileiro';