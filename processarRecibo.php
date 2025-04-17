<!DOCTYPE html>
    <html>
    <head>
        <title>PDF</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </head>


   <body class="body">

    <header class="container">
        <div class="img-header">
            <img src="logo.jpeg" alt="logo Gs Store">
        </div>
    </header>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $celular = $_POST["celular"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $endereco = $_POST["endereco"];
            $bairro = $_POST["bairro"];
            $estado = $_POST["estado"];
            $numero = $_POST["numero"];
            $cidade = $_POST["cidade"];

            $produtos = $_POST["produto"];
            $quantidades = $_POST["quantidade"];
            $valores = $_POST["valor"];

            date_default_timezone_set('America/Sao_Paulo');
            $dataAtual = date('d/m/Y H:i:s');
            $datanome = date('d_m_Y_H_i_s');
            $pagamento = $_POST["pagamento"];
            $valor_pago = $_POST["valor_pago"];

            $observacao = $_POST["obs"];
    ?>
            <div class="div-conteudo" id="tabela">
                
                <div class="container-fluid div-topo">
                    <img src="logo.jpeg" class="img-thumbnail" alt="...">
                    <div class="div-texto">
                        <h5>Recibo</h5>
                            <div class="div-texto-info">
                                <b>
                                    <p>GS Store - Vendas e Manutenção de Aparelhos | Rua Isaac Francisco Pimenta 23 B</p>

                                    <p>Whatsapp: (11) 99666-8683 / Email: </p>
                                </b>
                            </div>
                    </div>
                </div>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" id="titulo" colspan="6" style="text-align: center;">DADOS DO CLIENTE</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="silver">Nome:</td>
                                <td ><?php  echo $nome?></td>
                                <td id="silver">CPF:</td>
                                <td><?php  echo $cpf?></td>
                                <td id="silver">Celular: </td>
                                <td><?php  echo $celular?></td>
                            </tr>
                            <tr>
                                <td id="silver">Email: </td>
                                <td><?php  echo $email?></td>
                                <td id="silver">Endereço:</td>
                                <td><?php  echo $endereco?></td>
                                <td id="silver"> Número:</td>
                                <td><?php  echo $numero?></td>
                            </tr>
                                <tr>
                                    <td id="silver">Bairro:</td>
                                    <td><?php  echo $bairro?></td>
                                    <td id="silver">Cidade:</td>
                                    <td><?php  echo $cidade .' - '.$estado?></td>
                                </tr>
                        </tbody>
                    </table>

   
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" id="titulo" colspan="6" style="text-align: center;">PRODUTO</th>    
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                                $total = 0;

                                // Percorra os arrays de produtos, valores e quantidades simultaneamente
                                foreach (array_map(null, $produtos, $valores, $quantidades) as [$produto, $valor, $quantidade]) {

                                    echo "<tr>";
                                    echo "<td id='silver'>Item:</td>";
                                    echo "<td>$produto</td>"; 
                                    echo "<td id='silver'>Qtde:</td>";
                                    echo "<td>$quantidade</td>";
                                    echo "<td id='silver'>Preço Unitário:</td>";
                                    echo "<td> R$$valor</td>";
                                    echo "</tr>";
                                    $total += $valor * $quantidade;
                                }

                                    echo "<tr>";
                                    echo "<td id='silver'>Valor Total:</td>";
                                    echo "<td colspan='3'>R$$total</td>";
                                    echo "</tr>";
                            ?>
                        </tbody>
                    </table>

                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" id="titulo" colspan="6" style="text-align: center;">DADOS DE PAGAMENTO</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="silver">Data:</td>
                                <td><?php  echo $dataAtual?></td>
                                <td id="silver">Forma de Pagamento:</td>
                                <td><?php  echo $pagamento?></td>
                                <td id="silver">Valor Pago: </td>
                                <td><?php  echo 'R$'.$valor_pago?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" id="titulo" colspan="5" style="text-align: center;">OBSERVAÇÕES</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php  echo $observacao?></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col"  colspan="5" style="text-align: center;" id="titulo">GARANTIA</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">*NÃO COBRIMOS NA GARANTIA DANOS EXTERNOS COMO: QUEDA, BOTÃO DE VOLUME, TRINCOS NA TELA OU CARCAÇA.* <br>
                                    *NÃO COBRIMOS APARELHO COM MARCAS DE ÁGUA OU EXPOSTOS A VAPOR.* <br>
                                    *NÃO TIRAR O SELO COLADO ABAIXO NO APARELHO, APARELHOS SEM SELO PERDEM A GARANTIA*</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <div class="assinatura">
                        <div class="assi">
                            <h5>Assinatura Loja</h5>
                            <br>
                            <p><hr></p>
                        </div>
                        <div class="assi">
                        <h5>Assinatura <?php echo  $nome?></h5>
                        <br>
                        <p><hr></p>
                        </div>
                    </div>
                    
            </div>

            <div class="container div-buttons">
        <a href="index.html" class="btn btn-success" id="home">Home</a>
        <input type="button" class="btn btn-danger" value="Baixar PDF" id="btnImprimir" onclick="CriaPDF()" />
    </div>



    <?php
            } else {
                echo "Falha ao fazer o upload da foto.";
            }
        
        ?>


<script>
    function CriaPDF() {
        var minhaTabela = document.getElementById('tabela').innerHTML;

        var style = "<style>";
        style = style + ".div-topo img{height: 13vh;}";
        style = style + ".div-topo{display: flex;}";
        style = style + ".div-texto{width: 100%;text-align: center;}";
        style = style + "table {width: 100%;font: 15px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CRIA UM OBJETO WINDOW
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Empregados</title>');   // <title> CABEÇALHO DO PDF.
        win.document.write(style);                       // INCLUI UM ESTILO NA TAB HEAD
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(minhaTabela);                   // O CONTEUDO DA TABELA DENTRO DA TAG BODY
        win.document.write('</body></html>');

        win.document.close(); 	                            // FECHA A JANELA

        win.print();                                        // IMPRIME O CONTEUDO
    }
</script>   

            


    </body>
    </html>

