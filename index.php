<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body onload="moveRelogio()">

    <div class="container-fluid">
    <div class="container-fluid">
    	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="navbar-brand">Visualizar Folha de Ponto</div>
    </div>
      <form method="post" class="navbar-form navbar-left" action="folhaPonto.php">

      <div class="input-group">
      <input type="password" name="senha_entrada" class="form-control" placeholder="Digite a matrícula...">
      <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>   
    </div>
        <button type="submit" name="buscar" class="btn btn-default">Buscar</button>
      </form>

    </div><!-- /.navbar-collapse -->
	</div>	
	<div class="container-fluid">
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    	 <div class="areaInputRelogio">
    	 <h3 class="h3">Registro de Ponto</h3><br>
    	 
            <div class="timeDate">
                <?php
                //qui poderia ser usado javascript também para a data mas...
                setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                $semana = array(
                    'en' => array('/Sun/', '/Mon/', '/Tue/', '/Wed/', '/Thu/', '/Fri/', '/Sat/', '/Jan/', '/Feb/', '/Mar/', '/Apr/', '/May/', '/Jun/', '/Jul/', '/Aug/', '/Sep/', '/Oct/', '/Nov/', '/Dec/'),
                    'large' => array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro')
                );
                $str = date("D d M");
                echo preg_replace($semana['en'], $semana['large'], $str);
                ?>
    			<form name="form_relogio"> 
    				<input class="inputClock" type="text" name="relogio"  onfocus="window.ocument.form_relogio.relogio.blur()"/> 
    			</form> 
    		</div>
	<form method="post" action="validacao/validacaoSenha.php">
  		<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    		<input type="password" name="senha" class="form-control" id="exampleInputEmail1" placeholder="Digite a matrícula de funcionários...">
  		</div><br>

  		<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    		<input type="password" name="senha_entrada" class="form-control" id="exampleInputPassword1" placeholder="Digie a senha de entrada...">
  		</div><br>

  		<button type="submit" name="registrar" class="btn btn-default">Registrar</button>
	</form>
 </div>
 </div>
    	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
    	<div class="areaInputCadastro">
    	<center>
    		<h3>Funcionário</h3>
        <p class="text-left"><mark><em>Área de livre acesso para você interagir com o sitema, </em></mark>para o fluxo dos componentes.</p>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Cadastro de Funcionário
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       <form method="post" action="validacao/validacaoFuncionario.php">
       <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="text" name="senha_entrada" required="required" title="Digite a senha de entrada com 6 digitos" class="form-control" id="exampleInputEmail1" placeholder="Cadastrar senha de entrada...">
      </div>

       <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
         <input type="text" name="senha" title="Digite a matrícula com 6 digitos" class="form-control" id="exampleInputPassword1" placeholder="Cadastre a matrícula..." required="required">
      </div>
			 
       <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input type="text" name="nome" pattern="[a-z\s]+$" class="form-control" id="exampleInputPassword1" placeholder="Nome Funcionário" title="Preencha este campo">
      </div>

		  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-warning-sign"></i></span>
         <input type="text" name="cpf"  class="form-control" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
      title="Digite o CPF no formato nnnnnnnnnnn"
      oninvalid="return cpf_incorreto(this);" placeholder="CPF 00000000000" required="required">
      </div>

      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
          <input type="text" name="funcao" class="form-control" id="exampleInputPassword1" placeholder="Profissão/Função" title="Preencha este campo" class="form-control" required="required">
      </div><br>
			  
			  <button type="submit" name="cadastrar" class="btn btn-default">Cadastrar</button>
		</form>   
      </div>
    </div>
  </div>
</div>
</div><!--fim areaInputCadastro-->
	</center>
	</div><!--fim row-->
	</div>
    </div><!--fim row-->
    </div><!-- fim container-fluid-->
  </div><!-- fim container-fluid       -->
</nav>
    </div>


    <!-- Latest compiled and minified JavaScript 
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
<script src="js/javascript.js"></script>
		<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<script src="maxlength/maxLength.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
