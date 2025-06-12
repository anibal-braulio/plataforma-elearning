<?php
require_once 'dbconexao.php';
session_start();
$target_dir = "uploads/"; // Pasta de armazenamento

// Verifica se arquivos foram enviados
if (!empty($_FILES['videos']['name'][0])) {
    foreach ($_FILES['videos']['name'] as $key => $video_name) {
        $target_file = $target_dir . basename($video_name);
        
        // Move o arquivo para a pasta de destino
        if (move_uploaded_file($_FILES["videos"]["tmp_name"][$key], $target_file)) {
            
            // Salvar nome do arquivo como título no BD
            $sql = "INSERT INTO cursos (titulo) VALUES ('$video_name')";
            if (mysqli_query($conn, $sql)) {
                echo "Vídeo '$video_name' salvo com sucesso.<br>";
            } else {
                echo "Erro ao salvar: " . mysqli_error($conn) . "<br>";
            }
        } else {
            echo "Erro ao enviar o vídeo '$video_name'.<br>";
        }
    }
} else {
    echo "Nenhum vídeo foi enviado.";
}

mysqli_close($conn);
?>
