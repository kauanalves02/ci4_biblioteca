<div class="container">
    <h2>Editora</h2>
        <!-- Button do Modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                Novo
        </button>
        <!-- Tabela de Usuario -->
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>TELEFONE</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($listaEditora as $e) :?>
                <tr>
                    <td>
                        <?=$e['id']?>
                    </td>
                    <td>
                        <?=anchor("Editora/editar/".$e['id'],$e['nome'])?>
                    </td>
                    <td>
                        <?=$e['email']?>
                    </td>
                    <td>
                        <?=$e['telefone']?>
                    </td>
                </tr>
            <?php endforeach ?>  
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?=form_open("Editora/cadastrar")?> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Editora</h1>
               
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class='form-control' type="text" id='nome' name='nome'>
                </div>
                <div class="form-group">
                    <label for="e-mail">Email:</label>
                    <input class='form-control' type="text" id='email' name='email'>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input class='form-control' type="text" id='telefone' name='telefone'>
                </div>
            </div>
            <div class="modal-footer">
            <?=anchor("editora/index/","Cancelar", ["class"=>"btn btn-dark"])?>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
        </div>
    </div>
        <?=form_close()?>
    </div>
</div>