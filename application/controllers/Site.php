<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public $is_hookable = true;

	public function __construct(){
    	parent::__construct();
	}
	// Paginas
	public function index() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_home',$dados);
	}

	public function sobre_empresa() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_sobre_empresa',$dados);	
	}

	public function servicos() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_servicos',$dados);	
	}

	public function blog() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_blog',$dados);
	}

	public function contato() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_contato',$dados);
	}
	// Servicos
	public function google_adwords() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_google_adwords',$dados);
	}

	public function criacao_de_sites() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_criacao_de_sites',$dados);
	}

	public function criacao_de_landing_pages() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_criacao_de_landing_pages',$dados);
	}

	public function crm_midia9() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_crm_midia9',$dados);
	}

	public function e_mail_marketing() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_e_mail_marketing',$dados);
	}

	public function sms_marketing() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_sms_marketing',$dados);
	}

	public function whatsapp_sac() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_whatsapp_sac',$dados);
	}

	public function gestao_de_redes_sociais() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_gestao_de_redes_sociais',$dados);
	}

	public function facebook_ads() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_facebook_ads',$dados);
	}

	public function instagram_ads() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_instagram_ads',$dados);
	}

	public function midia9_imob() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_midia9_imob',$dados);
	}

	public function marketing_para_concessionarias() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_marketing_para_concessionarias',$dados);
	}

	public function dealerforce() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_dealerforce',$dados);
	}

	public function inbound_marketing() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_inbound_marketing',$dados);
	}
	// Blog Detalhe
	public function mensuracao_de_resultados_no_marketing_digital() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_mensuracao_de_resultados_no_marketing_digital',$dados);
	}

	public function como_construir_uma_audiencia_digital() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_como_construir_uma_audiencia_digital',$dados);
	}

	public function como_usar_o_marketing_de_conteudo_dentro_da_jornada_de_compra() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_como_usar_o_marketing_de_conteudo_dentro_da_jornada_de_compra',$dados);
	}

	public function a_importancia_das_redes_de_afiliados_no_mercado_digital_brasileiro() {
		// Meta tag Titulo do site
		$dados['SEO_Title'] = "Agência Mídia9 | Agência de Marketing Digital no Ceará";

		// Meta tag Titulo do google
		$dados['GOOG_Title'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Site Name do facebook
		$dados['FACE_Site_Name'] = 'Agência Mídia9 | Agência de Marketing Digital no Ceará';

		// Meta tag Titulo do facebook
		$dados['FACE_Title'] = 'Potencialize seu negócio';

		// Meta tag Descricao do facebook
		$dados['FACE_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Descricao do google
		$dados['GOOG_Description'] = 'A Mídia9 é o fruto de um conjunto de estratégias utilizados por uma equipe que busca trazer as melhores soluções em Marketing Digital para os seus clientes.';

		// Meta tag Keywords do google
		$dados['GOOG_Keywords'] = 'agencia midia9, agencia de marketing digital, agencia midia9 ceara, midia9 group, criacao de sites, agencia de marketing digital no ceara, marketing digital';

		$this->template->makeSite('v_a_importancia_das_redes_de_afiliados_no_mercado_digital_brasileiro',$dados);
	}

}

/* Module Site.php */
/* Location: ./application/controllers/Site.php */