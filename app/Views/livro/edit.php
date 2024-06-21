<div class="container mt-5">

    <?=form_open('livro/salvar')?>
    <input type="hidden" id='id' name='id' value='<?=$livro['id']?>'>
    <div class="row p-2">
        <div class="col-2">
            <label for="disponivel">Disponível</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$livro['disponivel']?>' type="text" id='disponivel' name='disponivel'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="status">Status</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$livro['status']?>' type="text" id='status' name='status'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-2">
            <label for="id_obra">ID da Obra</label>
        </div>
        <div class="col-10">
            <input class='form-control' value='<?=$livro['id_obra']?>' type="text" id='id_obra' name='id_obra'>
        </div>
    </div>
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <a href='http://localhost:8080/index.php/Livro/index'class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
            <button type="button" class="btn btn-outline-danger" data-target="modal" data-target="#exampleModal">
                    Excluir
                </button>
            </div>
        </div>
    </div>
    <?=form_close()?>
    </div>
    <div class="col-3"></div>
    </div>
</div>

    <!-- Modal De Excluir-->
    <?=form_open('Livro/excluir')?>
    <input value='<?=$livro['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
       
        </div>
        <div class="modal-body">
            Você tem certeza que deseja excluir: <br>ID: <?=$livro['id']?><br>Disponivel: <?=$livro['disponivel']?><br>Status: <?=$livro['status']?><br> Obra: <?=$livro['id_obra']?>
        </div>
        <div class="modal-footer">
        <?=anchor("Emprestimo/index/","Cancelar", ["class"=>"btn btn-dark"])?>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
        </div>
        <?=form_close()?>
    </div>
    </div>