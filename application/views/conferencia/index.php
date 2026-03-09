<div class="d-flex justify-content-between align-items-center mb-4">
    <h3>Conferência</h3>
    <a href="<?= base_url('conferencia/historico') ?>" class="btn btn-outline-primary shadow-sm bg-white"
        style="border-radius: 10px;">
        <i class="fas fa-history me-2"></i> Ver Histórico do Dia
    </a>
</div>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th class="text-center">Prioridade</th>
                <th>Separador</th>
                <th class="text-center">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><strong>#<?= $r->id ?></strong></td>
                    <td><?= $r->destino_nome ?></td>
                    <td><?= $r->numero_requisicao ?></td>
                    <td class="text-center">
                        <span
                            class="status-badge <?= $r->prioridade == 'Urgente' ? 'bg-danger text-white' : ($r->prioridade == 'Normal' ? 'bg-info text-white' : 'bg-secondary text-white') ?>">
                            <?= $r->prioridade ?>
                        </span>
                    </td>
                    <td><?= $r->separador ?></td>
                    <td class="text-center">
                        <span class="status-badge border text-dark" style="background-color: #f8f9fa;">
                            <?= strtoupper($r->status) ?>
                        </span>
                    </td>
                    <td>
                        <a href="<?= base_url('conferencia/conferir/' . $r->id) ?>" class="btn btn-primary btn-sm">
                            Conferir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>