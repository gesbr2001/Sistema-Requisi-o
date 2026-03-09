<h3>Expedir Requisição #<?= $requisicao->id ?></h3>

<div class="card">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-3"><strong>Local:</strong> <?= $requisicao->destino_nome ?></div>
            <div class="col-md-3"><strong>Nº Req:</strong> <?= $requisicao->numero_requisicao ?></div>
            <div class="col-md-3"><strong>Separador:</strong> <?= $requisicao->separador ?></div>
            <div class="col-md-3"><strong>Conferente:</strong> <?= $requisicao->conferente ?></div>
        </div>

        <form method="post" action="<?= base_url('expedicao/processar/' . $requisicao->id) ?>">

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Motorista</label>
                    <select name="motorista" class="form-select" required>
                        <option value="">Selecione...</option>
                        <?php foreach ($motoristas as $m): ?>
                            <option value="<?= $m->nome ?>" <?= $m->nome == $requisicao->motorista ? 'selected' : '' ?>>
                                <?= $m->nome ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Placa do Carro</label>
                    <input type="text" name="placa_carro" class="form-control" value="<?= $requisicao->placa_carro ?>"
                        required>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="form-label">Quantidade de Volumes</label>
                    <input type="number" name="qtd_volume" class="form-control" value="<?= $requisicao->qtd_volume ?>"
                        required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status da Expedição</label>
                    <select name="status_expedicao" class="form-select" required>
                        <option value="CAF" <?= $requisicao->status_expedicao == 'CAF' ? 'selected' : '' ?>>Na CAF</option>
                        <option value="em rota" <?= $requisicao->status_expedicao == 'em rota' ? 'selected' : '' ?>>Em Rota
                        </option>
                        <option value="entregue" <?= $requisicao->status_expedicao == 'entregue' ? 'selected' : '' ?>>
                            Entregue (Finalizar)</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Observações da Expedição</label>
                    <textarea name="observacao_expedicao" class="form-control" rows="1"></textarea>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvar Informações</button>
                <a href="<?= base_url('expedicao') ?>" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>