<div class="container p-3">
    <?=form_open('Emprestimo/salvardev')?>
    <input type="hidden" value='<?=$emprestimo['id']?>' name="id">
    <input type="hidden" value='<?=$emprestimo['id_livro']?>' name="id_livro">
    <div class="row p-2">
        <div class="col-2 text-light">
            <label for="data_fim">Data Final</label>
        </div>
        <div class="col-10">
            <input value='' type="date" name="data_fim" id="data_fim" class="form-control" required>
        </div>
    </div>
    <div class="row p-4">
        <div class="btn-group" role="group">
        <a href="http://localhost:8080/index.php/Emprestimo/index" class="btn btn-outline-secondary">X</a>
            <button type="submit" class="btn btn-outline-success">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg>
            </button>
        </div>
    </div>
    <?=form_close()?>

</div><div class="container p-5">
    <?=form_open('Emprestimo/salvardev')?>
    <input value='<?=$emprestimo['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <div class="row p-2">
        <div class="col-2">
            <label for="data_fim">Data do Fim:</label>
        </div>
        <div class="col-10">
            <input required value='<?=$emprestimo['data_fim']?>'class='form-control' type="date" id='data_fim' name='data_fim'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="telefone">Livro:</label>
        </div>
        <div class="col-10">
            <select class='form-select' name="id_livro" id="id_livro" required>
            <?php
                        foreach($listaObra as $obra){
                            $obras[$obra['id']] = $obra['titulo'];
                        }
                        foreach($listaLivro as $livro){
                            $livros[$livro['id']] = $obras[$livro['id_obra']];
                        }
                        ?>
                        <option value="<?=$livro['id']?>"><?=$livros[$emprestimo['id_livro']]?></option>
            </select>
        </div>
    </div>
    <div class="row p-4">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <a href='http://localhost:8080/index.php/Emprestimo/index'class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </div>
    </div>
    <?=form_close()?>
</div>