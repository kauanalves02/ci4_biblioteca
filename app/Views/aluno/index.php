<div class="container">
    <h2>Aluno</h2>
        <!-- Button do Modal -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Form">
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
<div class="modal fade" id="Form" tabindex="-1" aria-labelledby="Form" aria-hidden="true">
    <?=form_open("Aluno/cadastrar")?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Aluno</h1>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input id="cpf" name="cpf" type="text" maxlength="14" placeholder="000.000.000-00" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" name="nome" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" name="telefone" maxlength="15" placeholder="(00) 00000-0000" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="turma">Turma</label>
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
            <div class="modal-footer">
                <?=anchor("Aluno/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"])?>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
    <?=form_close()?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.delete-button');
    
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var id = this.getAttribute('data-id');
            var confirmDelete = confirm("Você tem certeza que deseja deletar o aluno com ID " + id + "?");
            
            if (confirmDelete) {
                window.location.href = this.getAttribute('href');
            }
        });
    });
});
</script>