<div class="container">
    <h2>Livro</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
        Novo
    </button>
    <!-- Tabela de Livros -->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>DISPONÍVEL</td>
                <td>STATUS</td>
                <td>ID OBRA</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaLivro as $livro) : ?>
                <tr>
                    <td><?=$livro['id']?></td>
                    <td><?=$livro['disponivel']?></td>
                    <td><?=$livro['status']?></td>
                    <td><?=$livro['id_obra']?></td>
                    <td>
                    <?=anchor("Livro/editar/".$livro['id'],'editar',['class'=>'btn btn-dark ml-5'])?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("Livro/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Livro</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="disponivel">Disponível</label>
                    <input id="disponivel" name="disponivel" type="number" class="form-control" min="0" required>
                </div>  
                <div class="form-group">
                    <label for="status">Status</label>
                    <input class='form-control' type="text" id='status' name='status'>
                </div>  
                <div class="form-group">
                    <label for="telefone">Obra:</label>
                    <select class='form-control' name="id_obra" id="id_obra" required>
                        <option>Selecione uma obra</option>
                        <?php foreach($listaObra as $obra) : ?>
                            <option value="<?=$obra['id']?>"><?=$obra['titulo']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <?=anchor("livro/index/","Cancelar", ["class"=>"btn btn-dark"])?>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>