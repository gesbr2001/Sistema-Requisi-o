<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Dompdf Library
 *
 * Simple wrapper for Dompdf
 */

// Se não houver composer, podemos carregar manualmente se necessário
// Mas vamos tentar carregar a partir de um CDN ou assumir que o sistema pode baixar
// Para este ambiente, vamos criar uma classe que encapsula a lógica

class Pdf
{
    public function __construct()
    {
        // Tenta incluir o autoloader do Dompdf se existir em third_party
        $dompdf_path = APPPATH . 'third_party/dompdf/autoload.inc.php';
        if (file_exists($dompdf_path)) {
            require_once $dompdf_path;
        } else {
            // Caso esteja em uma pasta aninhada por erro de extração
            $dompdf_path_nested = APPPATH . 'third_party/dompdf/dompdf/autoload.inc.php';
            if (file_exists($dompdf_path_nested)) {
                require_once $dompdf_path_nested;
            }
        }
    }

    public function generate($html, $filename = 'document', $stream = TRUE, $paper = 'A4', $orientation = 'portrait')
    {
        // Usando a classe global do Dompdf
        // Nota: Em ambientes sem composer, isso assume que o dompdf está acessível
        // Caso contrário, precisaremos baixar os arquivos

        if (!class_exists('Dompdf\Dompdf')) {
            // Se não encontrou a classe, vamos tentar carregar via inclusão direta de arquivos essenciais
            // ou disparar um erro amigável se os arquivos não foram baixados ainda
            log_message('error', 'Dompdf class not found. Please ensure it is installed in application/third_party/dompdf');
            echo "Erro: Biblioteca Dompdf não encontrada em application/third_party/dompdf. Por favor, instale a biblioteca para continuar.";
            return;
        }

        $dompdf = new Dompdf\Dompdf(array('enable_remote' => true));
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();

        if ($stream) {
            $dompdf->stream($filename . ".pdf", array("Attachment" => 1));
        } else {
            return $dompdf->output();
        }
    }
}
