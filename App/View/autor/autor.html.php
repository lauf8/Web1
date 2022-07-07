<?php
include '../../App/View/base.php';
require_once '../../App/Controller/AutorController.php';

?>
    <div class="conteudoAutor">
      <div class="adicionarEPesquisar">
        <div class="botaoAdd">
          <a class="adicionarAutor" href="../../App/Controller/AutorCreate.php">Adicionar Autor</a>
        </div>
        <div>
          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Buscar..." /><img src="../../App/View/img/icon seach.png" id="btnBusca" alt="Buscar" />
          </div>
        </div>
      </div>
      <div class="tabelaAutor">
        <hr />
        <table class="tabela" border="1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>Nacionalidade</td>
              <td></td>
            </tr>
          </thead>

          <?php
          foreach ($autor->findAll() as $key => $value) { ?>
          <tr>
            <td> <?php echo $value->idautor;?> </td> 
            <td> <?php echo $value->nome;?> </td> 
            <td> <?php echo $value->nacionalidade;?> </td>
            <td>
              <div class="botoes crud">
                <a href=""><img src="../../App/View/img/view.png" alt="" /></a>
                <a href=""><img src="../../App/View/img/edit.png" alt="" /></a>
                <a href=""><img src="../../App/View/img/delete.png" alt="" /></a>
              </div>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>