
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br"> 
<head> 
	<meta http-equiv="Content-Type" content="xhtml+xml; charset=ISO-8859-1" /> 
	<meta http-equiv="Content-Language" content="pt-br" />
	<title>Endereço não encontrado - Erro 404</title>
	<link rel="stylesheet" type="text/css" href="<?= url('/')?>/public/css/404.css" />
</head>
<body>
	<div class="box">
        <img src="<?= url('/')?>/public/images/ico_404.jpg" alt="404" border="0"  />
		<h1>Desculpe, mas esta página não foi encontrada! Pode ter sido removida ou modificada.</h1>
		<h2>
            
	Tente acessar a página principal do site <?= link_to('/', 'Aqui')?>

        </h2>
		<p class="inner-box">Se o problema persistir, contate o desenvolvedor do site.</p>
	</div>
</body>
</html>

