<?php
	function pdo(){
		$db_host = db_host;
		$db_usuario = db_usuario;
		$db_senha = db_senha;
		$db_banco = db_banco;

		try{
			return $pdo = new PDO("mysql:host={$db_host};dbname={$db_banco}", $db_usuario, $db_senha);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			exit("Erro ao conectar-se ao banco de dados");
		}
	}

	function tirarAcentos($string){
    	return strtolower(str_replace(" ","-", preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N C"),$string)));
	}

	function alerta($tipo, $mensagem){
		echo "<div class='alert alert-{$tipo}'>{$mensagem}</div>";
	}

	function admVerificaFirst(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM paginas WHERE first = 1");
		$stmt->execute();

		$total = $stmt->rowCount();

		if($total > 0){
			echo "<input type='checkbox' name='first' value='1' disabled><code>Você já tem uma publicação com a tag first</code>";
		}else{
			echo "<input type='checkbox' name='first' value='1' checked>";
		}
	}

	function admPublicarPagina(){
		if(isset($_POST['env']) && $_POST['env'] == "pagina"){
			$pdo = pdo();

			$titulo = tirarAcentos($_POST['titulo']);
			$first = (isset($_POST['first'])) ? $_POST['first'] : 0;
			$showinmenu = (isset($_POST['showinmenu'])) ? $_POST['showinmenu'] : 0;

			$stmt = $pdo->prepare("INSERT INTO paginas (titulo, conteudo, first, showinmenu) VALUES (:titulo, :conteudo, :first, :showinmenu)");
			$stmt->execute([':titulo' => $titulo, ':conteudo' => $_POST['conteudo'], ':first' => $first, ':showinmenu' => $showinmenu]);

			$total = $stmt->rowCount();

			if($total > 0){
				alerta("success", "Página cadastrada com sucesso!");
			}else{
				alerta("danger", "Houve um erro ao cadastrar a página");
			}
		}
	}

	function menu_pages(){
		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM  paginas WHERE showinmenu = 1 ORDER BY first DESC");
		$stmt->execute();

		$total = $stmt->rowCount();

		if($total > 0){
			while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "<li><a href='".tirarAcentos($dados['titulo'])."'>".ucfirst($dados['titulo'])."</a></li>";
			}
		}
	}

	function paginacao(){
		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
		$explode = explode("/", $url);

		$pdo = pdo();

		$stmt = $pdo->prepare("SELECT * FROM paginas WHERE titulo = :titulo");
		$stmt->execute([':titulo' => $explode[0]]);
		$total = $stmt->rowCount();

		if($total > 0){
			$dados = $stmt->fetch(PDO::FETCH_ASSOC);

			echo $dados['conteudo'];
		}else{
			alerta("danger", "Pagina não encontrada!");
		}
	}

	function get_titulo($titulo){
		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
		$explode = explode("/", $url);

		switch($explode[0]){
			case 'inicio':
				echo $titulo." | Inicio";
			break;

			case 'contato':
				echo $titulo." | Contato";
			break;

			default:
				echo $titulo;
			break;
		}
	}

	function get_metas(){
		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
		$explode = explode("/", $url);

		switch($explode[0]){
			case 'inicio':
				include("meta/meta_inicio.php");
			break;

			case 'contato':
				include("meta/meta_contato.php");
			break;
		}
	}
?>