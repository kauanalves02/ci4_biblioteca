<!-- Cria a parte de editar as informações que estão no banco de dados -->
<div class="container p-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6  p-4" >
            <?= form_open("Obra/salvar") ?>
                <input type="hidden" name="id" id="id" value="<?= $obra['id'] ?>">
                <div class="row p-2">
                    <div class="col-2">
                        <label for="isbn">ISBN</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="isbn" id="isbn" class="form-control" value="<?= $obra['isbn'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="titulo">Título</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="titulo" id="titulo" class="form-control" value="<?= $obra['titulo'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="categoria">Categoria</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="categoria" id="categoria" class="form-control" value="<?= $obra['categoria'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="ano_publicacao">Ano</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="ano_publicacao" id="ano_publicacao" class="form-control" value="<?= $obra['ano_publicacao'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="editora">Editora</label>
                    </div>
                    <div class="col-10">
                        <input disabled type="text" name="editora" id="editora" class="form-control" value="<?= $obra['id_editora'] ?>">
                    </div>
                </div>
                <div class="row p-2">
    <div class="col-2">
        <label for="autores">Autores</label>
    </div>
    <div class="col-10">
    <?php 
$autores = array();
$autores_adicionados = array(); // Conjunto para armazenar IDs de autores já adicionados

// Cria um array associativo de autores
foreach($listaAutores as $autor):
    $autores[$autor['id']] = $autor['nome'];
endforeach;

foreach($listaAutoresObras as $lao) :
    if($lao['id_obra'] == $obra['id']) :
        // Verifica se o autor já foi adicionado antes de exibi-lo
        if(array_key_exists($lao['id_autor'], $autores) && !in_array($lao['id_autor'], $autores_adicionados)) {
            echo '<div>'.$autores[$lao["id_autor"]];
            echo anchor("Obra/deletarAutorObra/".$obra['id']."/".$lao['id_autor'], "deletar", ["class"=>"btn btn-outline-danger btn-sm"]).'</div>';
            // Adiciona o ID do autor ao conjunto de autores adicionados
            $autores_adicionados[] = $lao['id_autor'];
        }
    endif;
endforeach;
?>

        <!-- Button Adicionar Autor da Obra -->
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Form-add">Adicionar... <i class="fas fa-plus"></i></button>
    </div>
</div>

                <div class="row">
                    <div class="col">
                        <div class="btn-group w-100" role="group">
                            <?= anchor("Obra/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"]) ?>
                            <?= anchor("Obra/excluir/".$obra['id'], "excluir", ["class"=>"btn btn-outline-secondary"]) ?>
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
                        </div>
                    </div>
                </div>           
            <?= form_close() ?> 
        </div>  
    </div>
</div>

<div class="modal fade" id="Form-add" tabindex="-1" aria-labelledby="Form-add" aria-hidden="true">
    <?= form_open("Obra/adicionarAutor") ?>
        <input value="<?= $obra['id'] ?>" type="hidden" name="id_obra" id="id_obra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Autores</h1>
                   
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <select class="form-control" id="id_autor" name="id_autor">
                            <option selected hidden>Selecione um autor</option>
                            <?php foreach($listaAutores as $autor) : ?>
                                <option value="<?= $autor['id'] ?>"><?= $autor['nome'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                <?=anchor("autor/index/","Cancelar", ["class"=>"btn btn-dark"])?>
                    <?= anchor("Obra/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"]) ?>
                    <button type="submit" class="btn bs-dark">Cadastrar</button>
                </div>
            </div>
        </div>
    <?= form_close() ?>
</div>