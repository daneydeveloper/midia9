<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
  * Json
  * @todo: Retornar json com echo automatico
  * @var  string = Dados para retornar Json
  * @return json_encode
  **/
  function json($data) {
		echo json_encode($data);
	}


  /**
  * Time Ago
  * @todo: Função para calcular o tempo de $dateTime até a data Atual
  * @var string = Data base para Calcular
  * @var $full = Retornar a data completa, com Segundos
  * @return string
  **/

	function time_ago($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'Ano',
        'm' => 'Mês',
        'w' => 'Semana',
        'd' => 'Dia',
        'h' => 'Hora',
        'i' => 'Minuto',
        's' => 'Segundo',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' atrás' : 'agora';
  }

  /**
  * Days Cont
  * @todo: Calcular quantos dias se passaram de @var $startDate até @var $endDate
  * @var string = Data base para Calcular
  * @return intval
  * @todo: 86400 = Dias em Segundos
  **/
  function days_count($endDate) {
  	$startDate = strtotime(Date('Y-m-d'));
		$endDate = strtotime($endDate);	
		$timeDiff = abs($endDate - $startDate);
		$numberDays = $timeDiff/86400;
		return intval($numberDays);
  } 

  /**
  * String Clean
  * @todo: Limpar todos os caracters especiais de uma String
  * @var string = String para Limpeza
  * @return string
  **/
  function string_clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9]/', '', $string); // Removes special chars.
  }

  /**
  * Unformat Money
  * @todo: Limpar uma String que contenha números e transforma-lo em float
  * @example: Entrada: R$ 34000,00 Saida: 34000
  * @var string = String para Limpeza
  * @return string
  **/
  function unformat_money($money) {
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousendSeparator);
  }
