<?php
require('../fpdf/fpdf.php');

// Recebe os dados do formulário
$porcao = $_POST['porcao'];
$qndporcoesembalagem = $_POST['qndporcoesembalagem'];
$total100g = unserialize($_POST['total100g']);
$totalporporcao = unserialize($_POST['totalporporcao']);
$vdr = unserialize($_POST['vdr']);
$nomes = unserialize($_POST['nomes']);

class PDF extends FPDF
{
    function Header()
    {
        // Adicione um cabeçalho ao PDF se necessário
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'INFORMACAO NUTRICIONAL', 0, 1, 'C');
    }

    function Footer()
    {
        // Adicione um rodapé ao PDF se necessário
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    function Table($header, $data, $porcao, $qndporcoesembalagem)
    {
        // Arial bold 12
        $this->SetFont('Arial', 'B', 12);
        
        // Table header
        $this->Cell(0, 10, 'INFORMACAO NUTRICIONAL', 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 10, "Porções por embalagem: $qndporcoesembalagem", 0, 1, 'C');
        $this->Cell(0, 10, "Porção: $porcao g (medida caseira)", 0, 1, 'C');

        // Column headers
        foreach ($header as $col)
            $this->Cell(45, 7, $col, 1);
        $this->Ln();

        // Data
        foreach ($data as $row)
        {
            foreach ($row as $col)
                $this->Cell(45, 6, $col, 1);
            $this->Ln();
        }

        $this->Cell(0, 10, '*Percentual de valores diários fornecidos pela porção.', 0, 1, 'C');
    }
}

// Dados de exemplo
$header = array('', '100 g', "$porcao g", '%VD*');
$data = array();
foreach ($total100g as $nome => $valor5) {
    $data[] = array(
        $nomes[$nome],
        round($valor5, 1),
        round($totalporporcao[$nome], 1),
        sprintf("%.0f", $vdr[$nome]) . '%'
    );
}

// Criação do PDF
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->Table($header, $data, $porcao, $qndporcoesembalagem);
$pdf->Output('D', 'tabela_nutricional.pdf');
?>
