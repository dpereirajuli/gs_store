
  $(document).ready(function() {
    $('#btnAdicionarProduto').on('click', function() {
      var produtosContainer = $('#produtosContainer');
      var novoProdutoDiv = $('<div class="form-group closed"></div>');

      var produtoDiv = $('<div class="form-group"></div>');
      var produtoLabel = $('<label>Produto:</label>');
      var produtoInput = $('<input type="text" class="form-control" name="produto[]" required>');
      produtoDiv.append(produtoLabel);
      produtoDiv.append(produtoInput);

      var quantidadeDiv = $('<div class="form-group"></div>');
      var quantidadeLabel = $('<label>Qtde:</label>');
      var quantidadeInput = $('<input type="text" class="form-control" name="quantidade[]" required>');
      quantidadeDiv.append(quantidadeLabel);
      quantidadeDiv.append(quantidadeInput);

      var valorDiv = $('<div class="form-group"></div>');
      var valorLabel = $('<label>Valor:</label>');
      var valorInput = $('<input type="number" class="form-control" name="valor[]">');
      valorDiv.append(valorLabel);
      valorDiv.append(valorInput);

      var excluirDiv = $('<div class="form-group"></div>');
      var excluirButton = $('<button type="button" class="btn btn-danger btnExcluirProduto">Excluir</button>');

      var hr = $('<hr>');



      novoProdutoDiv.append(hr);
      novoProdutoDiv.append(produtoDiv);
      novoProdutoDiv.append(quantidadeDiv);
      novoProdutoDiv.append(valorDiv);
      novoProdutoDiv.append(excluirDiv);
  
            excluirDiv.append(excluirButton);
      produtosContainer.append(novoProdutoDiv);
    });

    $(document).on('click', '.btnExcluirProduto', function() {
      $(this).closest('.closed').remove();
    });
  });
