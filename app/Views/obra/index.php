<div class="container">
    <h2>Obra</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
        Novo
    </button>
    <!-- Tabela de Obras -->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>TÍTULO</td>
                <td>CATEGORIA</td>
                <td>ANO</td>
                <td>ISBN</td>
                <td>Editora</td>
            </tr>
        </thead>
        <tbody>
    <?php foreach($listaObras as $obra) : ?>
        <tr>
            <td><?=$obra['id']?></td>
            <td><?=anchor("Obra/editar/".$obra['id'],$obra['titulo'])?></td>
            <td><?=$obra['categoria']?></td>
            <td><?=$obra['ano_publicacao']?></td>
            <td><?=$obra['isbn']?></td>
            <td>
                <?php
                // Relacionando id_editora da obra com o nome da editora
                $nome_editora = "";
                foreach($listaEditoras as $editora){
                    if ($editora['id'] == $obra['id_editora']) {
                        $nome_editora = $editora['nome'];
                        break;
                    }
                }
                echo $nome_editora;
                ?>
            </td>
        </tr>
    <?php endforeach ?>
</tbody>

    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Obra/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo usuário</h1>
               
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input class='form-control' type="text" id='titulo' name='titulo'>
                </div>  
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input class='form-control' type="text" id='categoria' name='categoria'>
                </div>  
                <div class="form-group">
                    <label for="ano">Ano</label>
                    <input class='form-control' type="text" id='ano_publicacao' name='ano_publicacao'>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input class='form-control' type="text" id='isbn' name='isbn'>
                </div>   
                <div class="form-group">
                    <label for="editora">Editora</label>
                    <select class='form-control' name="id_editora" id="id_editora" required>
                        <option>Selecione uma editora...</option>
                        <?php foreach($listaEditoras as $editora) : ?>
                            <option value="<?=$editora['id']?>"><?=$editora['nome']?></option>
                        <?php endforeach ?>   
                    </select>
                </div>         
            </div>
            <div class="modal-footer">
            <?=anchor("obra/index/","Cancelar", ["class"=>"btn btn-dark"])?>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>