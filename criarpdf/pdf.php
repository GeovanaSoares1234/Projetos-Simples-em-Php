<?php 

define('FDPF_FONTPATH','font/');

require_once("fpdf/fpdf.php");

$_pdf = new FPDF('P','cm','A4');

/*

P - formato porta-retrato ou 
L - formato paisagem

cm - centimetros -> unidade de medida para formatação da página de trabalho

Pode ser também:

in - polegadas
pt - pontos
mm - milimetros

A4 - tamanho da página de trabalho pode ser também: A3, A5, etc

*/

$_pdf->Open();
//Abre um novo arquivo PDF

$_pdf->AddPage();
//Adiciona uma nova página ao arquivo PDF

//Configurar a fonte a utilizada na página PDF adiciona uma fonte ao arquivo PDf
$_pdf->AddFont('times','','times.php');
//Nome da fonte, o estilo, o arquivo de referência da fonte

$_pdf->setLeftMargin(2.5);
//Define a margem esquerda do documento PDF

$_pdf->setTopMargin(2.5);
//Define a margem superior do documento PDF, Por padrão as margens são de 1cm

//Cabeçalho da página (tabela de resultados) PDF
$_pdf->SetFont('times','BI',20);

/*

Configura a fone, o estilo e o tamanho da fonte objeto do tipo pdf -> setFont(Fonte, Estilo,Tamanho);

Estilos:

B -> negrito
I -> itálico
U -> sublinhado
N -> normal

Se não for declarado o padrão -> normal

*/

$_pdf->SetFillColor(255,255,224);
//Define a cor de fundo (RGB) da linha

/*

Image('nome e extensão do arquivo', coordenada X, coordenada Y, largura da imagem, altura da imagem, tipo do arquivo de imagem)

As coordenadas X e Y se baseiam no canto superior esquerdo da página

*/

$_img = $_pdf->Image('img/download.jpg',2.5,1,4,3,'JPG');

/*

Endereço e nome do arquivo da imagem
2.5cm é a margem esquerda da imagem
1cm é a margem superior
4cm é a largura da imagem
3cm é a altura da imagem
Tipo de arquivo da imagem

*/

$_pdf->Cell(4,3,'',1,0,'');
//Cria a celula que irá conter a imagem

$_pdf->Cell(12,3,'TABELA DE USUARIOS',1,1,'C',TRUE);

/*

Estrutura do método Cell()

12cm de largura da célula
3cm de altura da célula
Texto
1 para a borda e 0 sem borda
1 para quebra de linha e 0 sen quebra de linha (imprimir o próximo registro da linha abaixo)
C para o alinhamento centralizado
L alinhamento à esquerda
R alinhamento à direita
TRUE significa que a célula aceita cor de fundo
 
*/

$_pdf->Ln(1);
//Pula uma linha no documento com 1cm de espaço

//Configurações dos identificadores das colunas
$_pdf->SetFont('times','B',14);

$_pdf->SetTextColor(0,0,128);
//Define a cor da fonte (RGB) da linha

$_pdf->SetFillColor(220,220,220);
//Define a cor da borda (RGB) da linha

$_pdf->SetDrawColor(112,128,144);
//Define a cor da borda (RGB) da linha

$_pdf->Cell(1,1,'ID',1,0,'C',TRUE);
$_pdf->Cell(3,1,'LOGIN',1,0,'C',TRUE);
$_pdf->Cell(10,1,'PASSWORD',1,0,'C',TRUE);
$_pdf->Cell(2,1,'TYPE',1,1,'C',TRUE);
// TRUE -> aceitar a cor de fundo

//Conexão e pesquisa no Banco de dados
include_once("db/conexao.php");


$_sql = $_pdo->prepare("SELECT * FROM usuario");
$_sql->execute();
$_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);

/*

$_pdf->SetFontSize(12);

configura somente o tamanho da fonte atual do documento PDF

*/

//Configuração das linhas de resultado na tabela
$_pdf->SetFont('times','',12);
$_pdf->SetTextColor(0,0,0);
$_pdf->SetFillColor(245,245,220);

$_fundo = 1; 
//variável de controle do processo de "zebrar" a cor de fundo da tabela...

foreach($_resultset as $_line)
{
    $_pdf->Cell(1,1,$_line['id'],1,0,'C',TRUE);
    $_pdf->Cell(3,1,$_line['login'],1,0,'C',TRUE);
    $_pdf->Cell(10,1,$_line['password'],1,0,'C',TRUE);
    $_pdf->Cell(2,1,$_line['type'],1,1,'C',TRUE);

/*

1cm de largura
1cm de altura
a informação que está no vetor $_line na posição ['']
1 para a borda e 0 sem borda
1 para quebra de linha e 0 sem quebra de linha (imprimir o próximo registro da linha abaixo)
C para o alinhamento centralizado
L alinhamento à esquerda
R alinhamento à direita
 
*/

/*

"zebrar" a cor de fundo da linha da tabela de resultados do Banco de dados...

*/

$_fundo++;

if (($_fundo % 2) == 0)
{
    $_pdf->SetFillColor(255,255,255);
}
else
{
    $_pdf->SetFillColor(245,245,220);
}

} //fim do ciclo Foreach()

$_pdf->Output();

/*

Exibe o conteúdo de um arquivo PDF... e o fecha em seguida...

*/

$_pdf->Close();

/*

Fecha o documento PDF... não é necessario o uso do método Close(), pois o método Output() já fecha o arquivo depois da sua exibição...

*/

?>
