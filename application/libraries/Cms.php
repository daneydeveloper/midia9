<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CMS {
	public function __construct(){
    $this->CI =& get_instance();
  }

  // public function getMedia($name){
  // 	$formatos = array('.jpg','.png','.svg','.jpeg');
  // 	foreach ($formatos as $key) {
  // 		// var_dump(UPLOAD_PATH . $name . $key);
  // 		if(file_exists(UPLOAD_PATH . $name . $key)){
  // 			return MEDIA_PATH . $name . $key;
  // 		}
  // 	}
  // }

  public function getMedia($id){
    $query = $this->CI->db->from('media')
                          ->where('MED_Nome', $id)
                          ->get()
                          ->first_row();
    return MEDIA_PATH . "/" . $query->MED_Imagem;
  }

  public function getPostCategory(){
    $query = $this->CI->db->from('categoria_posts')
                          ->where('CATP_Status', 1)
                          ->get()
                          ->result();
    for ($i=0; count($query) > $i; $i++) {
      $query[$i]->CATP_Contador = $this->CI->db->query('SELECT COUNT(POST_CodigoPost) AS Contador FROM posts INNER JOIN categoria_posts ON CATP_CodigoCategoria = POST_Categoria WHERE POST_Categoria = '. $query[$i]->CATP_CodigoCategoria)->row();
      $query[$i]->CATP_Contador = @$query[$i]->CATP_Contador->Contador;
      if($query[$i]->CATP_Contador == null) {
        $query[$i]->CATP_Contador = 0;
      }
    }
    return $query;
  }

  public function getLastPosts($data = array('limit'=>3)){
    $query = $this->CI->db->from('posts')
                          ->where('POST_Status', 1)
                          ->order_by('POST_DataCriacao', 'DESC')
                          ->limit($data['limit'])
                          ->get()
                          ->result();
    return $query;
  }

  public function getBanner($id = null) {
    if ($id) {
      $query = $this->CI->db->from('banners')
                            ->where('BAN_DataEncerramento <=', Date('Y-m-d H:i:s'))
                            ->or_where('BAN_DataEncerramento IS NULL')
                            ->where('BAN_Status', 1)
                            ->where('BAN_CodigoBanner', $id)
                            ->get()
                            ->first_row();
      return $query;
    }
    else {
      return false;
    }
  }

  public function getPosts($data = array('limit'=>3)){
    $query = $this->CI->db->from('posts')
                          ->join('usuario', 'POST_Autor = USR_CodigoUsuario')
                          ->join('categoria_posts' ,'POST_Categoria = CATP_CodigoCategoria')
                          ->where('POST_Status', 1)
                          ->order_by('POST_DataCriacao', 'DESC')
                          ->limit($data['limit'])
                          ->get()
                          ->result();
    return $query;
  }

  public function getServices($data = array('limit'=>3)){
    $query = $this->CI->db->from('servicos') 
                          ->where('SER_Status', 1)
                          ->limit($data['limit'])
                          ->order_by('SER_Nome', 'ASC')
                          ->get()
                          ->result();
    return $query;
  }

  public function getSubServices($data = array()){
    $query = $this->CI->db->from('subservicos')
                          ->where('SSER_CodigoPai', $data['id'])
                          ->where('SSER_Status', 1)
                          ->get()
                          ->result();
    return $query;
  }

  public function getSimilarServices($data = array()){
    $query = $this->CI->db->from('subservicos')
                          ->where('SSER_CodigoPai', $data['idPai'])
                          ->where('SSER_CodigoServico <>', $data['idServico'])
                          ->where('SSER_Status', 1)
                          ->get()
                          ->result();
    return $query;
  }

  public function getAllServices(){
    $query = $this->CI->db->from('servicos')
                          ->where('SER_Status', 1)
                          ->order_by('SER_Nome', 'ASC')
                          ->get()
                          ->result();
    return $query;
  }

  public function getModelosCompativeisPorPneu($id){
    $query = $this->CI->db->from('pneus_modelo')
                          ->join('modelos', 'MOD_CodigoModelo = PNM_CodigoModelo')
                          ->join('marcas', 'MAR_CodigoMarca = MOD_CodigoMarca')
                          ->where('PNM_CodigoPneu', $id)
                          ->group_by('MOD_CodigoModelo')
                          ->get()
                          ->result();
    return $query;
  }

  public function getMedidasPorPneu($id){
    $query = $this->CI->db->from('pneus_modelo')
                          ->where('PNM_CodigoPneu', $id)
                          ->group_by('PNM_Raio')
                          ->get()
                          ->result();

    for ($i=0; count($query) > $i; $i++) {
      $query[$i]->medidas = $this->CI->db->from('pneus_modelo')
                                       ->where('PNM_CodigoPneu', $query[$i]->PNM_CodigoPneu)
                                       ->where('PNM_Raio', $query[$i]->PNM_Raio)
                                       ->group_by('PNM_Medida')
                                       ->get()
                                       ->result();

    }

    return $query;
  }

  public function getPneusSimilares($data, $pneu){
    $query = $this->CI->db->from('pneus')
                          ->join('pneus_modelo', 'PNE_CodigoPneu = PNM_CodigoPneu')
                          ->join('modelos', 'MOD_CodigoModelo = PNM_CodigoModelo')
                          ->join('marcas', 'MOD_CodigoMarca = MAR_CodigoMarca')
                          ->where('MAR_CodigoMarca', $data)
                          ->where('PNE_CodigoPneu <>', $pneu)
                          ->where('PNE_Descricao IS NOT NULL', NULL, FALSE)
                          ->group_by('PNE_CodigoPneu')
                          ->get()
                          ->result();
    return $query;
  }
}