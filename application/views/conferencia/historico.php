<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Histórico de Conferência</h3>
    <form method="get" class="d-flex gap-2">
        <input type="date" name="data" class="form-control form-control-sm" value="<?= $data_selecionada ?>"
            style="width: 180px; border-radius: 10px;">
        <button type="submit" class="btn btn-primary btn-sm">Filtrar</button>
        <a href="<?= base_url('conferencia/historico') ?>" class="btn btn-outline-secondary btn-sm border-0">Hoje</a>
    </form>
</div>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Data/Hora</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Separador</th>
                <th>Conferente</th>
                <th class="text-center">Itens</th>
                <th class="text-center">Diverg.</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><small>
                            <?= date('d/m/Y H:i', strtotime($r->data_conferencia)) ?>
                        </small></td>
                    <td>
                        <?= $r->destino_nome ?>
                    </td>
                    <td>
                        <?= $r->numero_requisicao ?>
                    </td>
                    <td>
                        <?= $r->separador ?>
                    </td>
                    <td>
                        <?= $r->conferente ?>
                    </td>
                    <td class="text-center">
                        <?= $r->qtd_itens ?>
                    </td>
                    <td class="text-center">
                        <span class="badge <?= $r->itens_divergentes > 0 ? 'bg-danger' : 'bg-success' ?>">
                            <?= $r->itens_divergentes ?>
                        </span>
                    </td>
                    <td><small class="text-muted">
                            <?= $r->observacao_conferencia ?>
                        </small></td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($requisicoes)): ?>
                <tr>
                    <td colspan="9" class="text-center py-4 text-muted">Nenhuma conferência encontrada para esta data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <a href="<?= base_url('conferencia') ?>" class="btn btn-secondary">Voltar</a>
</div>