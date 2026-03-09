<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Expedição</h3>
    <a href="<?= base_url('expedicao/historico') ?>" class="btn btn-outline-primary shadow-sm bg-white"
        style="border-radius: 10px;">
        <i class="fas fa-history me-2"></i> Ver Histórico do Dia
    </a>
</div>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Local</th>
                <th>Nº Req.</th>
                <th class="text-center">Prioridade</th>
                <th>Equipe</th>
                <th class="text-center">Status Expedição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><?= $r->destino_nome ?></td>
                    <td><?= $r->numero_requisicao ?></td>
                    <td class="text-center">
                        <?php if ($r->prioridade): ?>
                            <span
                                class="status-badge <?= $r->prioridade == 'Urgente' ? 'bg-danger text-white' : ($r->prioridade == 'Normal' ? 'bg-info text-white' : 'bg-secondary text-white') ?>">
                                <?= $r->prioridade ?>
                            </span>
                        <?php else: ?>
                            <span class="text-muted small">Pendente</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <small>
                            <strong>Sep:</strong> <?= $r->separador ?><br>
                            <strong>Conf:</strong> <?= $r->conferente ?>
                        </small>
                    </td>
                    <td class="text-center">
                        <?php
                        $status_cor = $r->status_expedicao == 'em rota' ? 'bg-success text-white' : 'bg-light text-dark border';
                        ?>
                        <span class="status-badge <?= $status_cor ?>">
                            <?= strtoupper($r->status_expedicao) ?>
                        </span>
                        <?php if ($r->motorista): ?>
                            <br><small class="text-muted"><?= $r->motorista ?></small>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('expedicao/expedir/' . $r->id) ?>" class="btn btn-primary btn-sm">
                            Expedir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>