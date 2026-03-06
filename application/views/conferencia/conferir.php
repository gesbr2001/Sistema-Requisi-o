<h3>Conferir Requisição #<?= $requisicao->id ?></h3>

<div class="card">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-4">
                <strong>Local:</strong> <?= $requisicao->destino_nome ?>
            </div>
            <div class="col-md-4">
                <strong>Nº Requisição:</strong> <?= $requisicao->numero_requisicao ?>
            </div>
            <div class="col-md-4">
                <strong>Separador:</strong> <?= $requisicao->separador ?>
            </div>
        </div>

        <form method="post" action="<?= base_url('conferencia/processar/'.$requisicao->id) ?>">
            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Conferente</label>
                    <select name="conferente" class="form-select" required>
                        <option value="">Selecione...</option>
                        <option value="DAMIANA">DAMIANA</option>
                        <option value="GILBERTO">GILBERTO</option>
                        <option value="EDUARDO">EDUARDO</option>
                        <option value="KALYNE">KALYNE</option>
                        <option value="PAULO">PAULO</option>
                        <option value="CRESCIANO">CRESCIANO</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Quantidade de Itens</label>
                    <input type="number" name="qtd_itens" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Itens Divergentes</label>
                    <input type="number" name="itens_divergentes" class="form-control" value="0" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label class="form-label">Observações da Conferência</label>
                    <textarea name="observacao_conferencia" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">Concluir Conferência</button>
                <a href="<?= base_url('conferencia') ?>" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>
