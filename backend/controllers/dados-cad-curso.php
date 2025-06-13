<?php
require_once 'dbconexao.php';
session_start();

if (isset($_POST['salvar'])) {
    if (!empty($_FILES['videos']['tmp_name'][0]) && !empty($_FILES['banner']['name'])) {
        $extImg = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
        $permitidoImg = array("jpg", "jpeg", "png");

        if (in_array(strtolower($extImg), $permitidoImg)) {
            $bannerNome = uniqid('banner_') . '.' . $extImg;
			$url_imagem = "../uploads/banners/" . $bannerNome;
            $url_imagem_bd = "backend/uploads/banners/" . $bannerNome;
            $tempImg = $_FILES['banner']['tmp_name'];

            $tituloOriginal = $_POST['titulo'];
            $titulo = mysqli_real_escape_string($conexao, $tituloOriginal);
            $estado = mysqli_real_escape_string($conexao, $_POST['estado']);
            $acesso = mysqli_real_escape_string($conexao, $_POST['acesso']);
            $tipo   = mysqli_real_escape_string($conexao, $_POST['tipo']);
            $preco  = ($tipo == "gratis") ? 0.00 : floatval($_POST['preco']);
            $desc   = mysqli_real_escape_string($conexao, $_POST['desc']);
            $autor  = $_SESSION['id'];

            $check = mysqli_query($conexao, "SELECT idcurso FROM cursos WHERE titulo = '$titulo'");
            if (mysqli_num_rows($check) > 0) {
                die("Já existe um curso com esse título!");
            }

            // Criação da pasta com nome do curso sanitizado
            $pastaCurso = preg_replace('/[^a-zA-Z0-9-_]/', '_', strtolower($tituloOriginal));
            $caminhoPasta = "../uploads/videos/" . $pastaCurso;

            if (!is_dir($caminhoPasta)) {
                mkdir($caminhoPasta, 0777, true);
            }

            if (move_uploaded_file($tempImg, $url_imagem)) {
                $sql = "INSERT INTO cursos (url_banner, titulo, descricao, autor, estado, nivel_acesso, tipo, preco, dataPublicacao, classificacao)
                        VALUES ('$url_imagem_bd', '$titulo', '$desc', '$autor', '$estado', '$acesso', '$tipo', '$preco', NOW(), 1)";

                if (mysqli_query($conexao, $sql)) {
                    $idCurso = mysqli_insert_id($conexao);

                    $permitidoVid = array("mp4", "ogg", "webm");
                    foreach ($_FILES['videos']['tmp_name'] as $i => $tmpName) {
                        $extVid = pathinfo($_FILES['videos']['name'][$i], PATHINFO_EXTENSION);
                        $nomeOriginal = pathinfo($_FILES['videos']['name'][$i], PATHINFO_FILENAME);

                        if (in_array(strtolower($extVid), $permitidoVid)) {
                            $caminhoFinal = $caminhoPasta . '/' . $nomeOriginal;
                            $urlFinal = "backend/uploads/cursos/".$pastaCurso."/".$nomeOriginal; // Caminho salvo no banco

                            if (move_uploaded_file($tmpName, $caminhoFinal)) {
                                $rs = mysqli_query($conexao,
                                    "INSERT INTO aulas (nome, descricao, url_aula, curso, data_upload)
                                    VALUES ('$nomeOriginal', default, '$urlFinal', '$idCurso', NOW())"
                                );
                            } else {
                                echo "Erro ao mover vídeo: " . $_FILES['videos']['name'][$i] . "<br>";
                            }
                        } else {
                            echo "Tipo de vídeo inválido: " . $_FILES['videos']['name'][$i] . "<br>";
                        }
                    }

                    echo "Curso e vídeos salvos com sucesso!";
                } else {
                    die("Erro ao salvar curso: " . mysqli_error($conexao));
                }
            } else {
                die("Erro ao mover o banner para o servidor.");
            }
        } else {
            die("Formato de imagem inválido. Use: jpg, jpeg ou png.");
        }
    } else {
        $_SESSION['erro'] = "Envie pelo menos um vídeo e um banner.";
        header('Location: ../../pages-plataforma/prof/cadastro-curso?erro=cadastrar_curso');
        exit;
    }
} else {
    header('Location: ../../pages-plataforma/prof/cadastro-curso');
    exit;
}
?>
