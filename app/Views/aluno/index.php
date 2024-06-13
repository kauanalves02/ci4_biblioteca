<div class="container">
    <h2>Aluno</h2>
        <!-- Button do Modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Novo
        </button>
        <!-- Tabela de Usuario -->
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>CPF</td>
            <td>EMAIL</td>
            <td>TELEFONE</td>
            <td>TURMA</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($listaAlunos as $au) :?>
                <tr>
                    <td>
                        <?=$au['id']?>
                    </td>
                    <td>
                        <?=anchor("Aluno/editar/".$au['id'],$au['nome'])?>
                    </td>
                    <td>
                        <?=$au['cpf']?>
                    </td>
                    <td>
                        <?=$au['email']?>
                    </td>
                    <td>
                        <?=$au['telefone']?>
                    </td>
                    <td>
                        <?=$au['turma']?>
                    </td>
                    
                </tr>
            <?php endforeach ?>  
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1D" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?=form_open("Aluno/cadastrar")?> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Aluno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input class='form-control' type="text" id='cpf' name='cpf'>
                </div>
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
                <div class="form-group">
                    <label for="turma">Turma:</label>
                    <select class='form-control' name="turma" id="turma">
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="6C">6C</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="7C">7C</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="8C">8C</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        <option value="9C">9C</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
        </div>
    </div>
        <?=form_close()?>
    </div>
</div>