<div class="table-container">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Grupo</th>
                <th>Tipo</th>
                <th class="text-center">Status Entrega</th>
                <th class="text-center">Status Atual</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($requisicoes as $r): ?>
            <tr>
                <td><strong>#<?= $r->id ?></strong></td>
                <td><small><?= date('d/m/Y H:i', strtotime($r->data_protocolo)) ?></small></td>
                <td><?= $r->destino_nome ?></td>
                <td><?= $r->numero_requisicao ?></td>
                <td><?= $r->grupo ?></td>
                <td><?= $r->tipo_requisicao ?></td>
                <td class="text-center">
                    <span class="status-badge bg-light text-dark border"><?= $r->status_protocolo ?></span>
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
    <a href="<?= base_url('protocolo') ?>" class="btn btn-secondary">Voltar</a>
</div>
