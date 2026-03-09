<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Histórico de Expedição</h3>
    <form method="get" class="d-flex gap-2">
        <input type="date" name="data" class="form-control form-control-sm" value="<?= $data_selecionada ?>"
            style="width: 180px; border-radius: 10px;">
        <button type="submit" class="btn btn-primary btn-sm">Filtrar</button>
        <a href="<?= base_url('expedicao/historico') ?>" class="btn btn-outline-secondary btn-sm border-0">Hoje</a>
    </form>
</div>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data/Hora</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Motorista</th>
                <th>Placa</th>
                <th class="text-center">Volumes</th>
                <th class="text-center">Status</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><small>
                            <?= date('d/m/Y H:i', strtotime($r->data_expedicao)) ?>
                        </small></td>
                    <td>
                        <?= $r->destino_nome ?>
                    </td>
                    <td>
                        <?= $r->numero_requisicao ?>
                    </td>
                    <td>
                        <?= $r->motorista ?>
                    </td>
                    <td><small>
                            <?= $r->placa_carro ?>
                        </small></td>
                    <td class="text-center">
                        <?= $r->qtd_volume ?>
                    </td>
                    <td class="text-center">
                        <span
                            class="status-badge <?= $r->status_expedicao == 'entregue' ? 'bg-success text-white' : 'bg-info text-white' ?>">
                            <?= strtoupper($r->status_expedicao) ?>
                        </span>
                    </td>
                    <td><small class="text-muted">
                            <?= $r->observacao_expedicao ?>
                        </small></td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($requisicoes)): ?>
                <tr>
                    <td colspan="9" class="text-center py-4 text-muted">Nenhuma expedição encontrada para esta data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <a href="<?= base_url('expedicao') ?>" class="btn btn-secondary">Voltar</a>
</div>