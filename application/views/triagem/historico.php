<div class="table-container">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th>Data Triagem</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th class="text-center">Prioridade</th>
                <th class="text-center">Status Atual</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><small><?= date('d/m/Y H:i', strtotime($r->data_triagem)) ?></small></td>
                    <td><?= $r->destino_nome ?></td>
                    <td><?= $r->numero_requisicao ?></td>
                    <td class="text-center">
                        <span
                            class="status-badge <?= $r->prioridade == 'Urgente' ? 'bg-danger text-white' : ($r->prioridade == 'Normal' ? 'bg-info text-white' : 'bg-secondary text-white') ?>">
                            <?= $r->prioridade ?>
                        </span>
                    </td>
                    <td class="text-center">
                        <span class="status-badge border text-white bg-secondary"><?= strtoupper($r->status) ?></span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="mt-4 text-end">
    <a href="<?= base_url('triagem') ?>" class="btn btn-secondary">Voltar</a>
</div>