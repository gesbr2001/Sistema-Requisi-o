<h3>Protocolo</h3>

<a href="<?= base_url('protocolo/novo') ?>" class="btn btn-primary mb-3">
    Novo Protocolo
</a>
<a href="<?= base_url('protocolo/historico') ?>" class="btn btn-secondary mb-3">
    Histórico Protocolo
</a>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Tipo</th>
                <th>Grupo</th>
                <th class="text-center">Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($requisicoes as $r): ?>
            <tr>
                <td><strong>#<?= $r->id ?></strong></td>
                <td><?= $r->destino_nome ?></td>
                <td><?= $r->numero_requisicao ?></td>
                <td><?= $r->tipo_requisicao ?></td>
                <td><?= $r->grupo ?></td>
                <td class="text-center">
                    <span class="status-badge border text-dark" style="background-color: #f8f9fa;">
                        <?= strtoupper($r->status) ?>
                    </span>
                </td>
                <td>
                    <?php if ($r->status == 'protocolo'): ?>
                        <a href="<?= base_url('protocolo/editar/'.$r->id) ?>" class="btn btn-primary btn-sm">
                            Editar
                        </a>
                        <a href="<?= base_url('protocolo/enviarTriagem/'.$r->id) ?>" class="btn btn-success btn-sm">
                            Enviar Triagem
                        </a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
