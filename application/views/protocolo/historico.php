<div class="table-container">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
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
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><small><?= date('d/m/Y H:i', strtotime($r->data_protocolo)) ?></small></td>
                    <td><?= $r->destino_nome ?></td>
                    <td><?= $r->numero_requisicao ?></td>
                    <td><?= $r->grupo ?></td>
                    <td><?= $r->tipo_requisicao ?></td>
                    <td class="text-center">
                        <span class="status-badge bg-light text-dark border"><?= $r->status_protocolo ?></span>
                    </td>
                    <td class="text-center">
                        <?php
                        $status_class = 'bg-secondary';
                        $custom_style = '';
                        switch ($r->status) {
                            case 'protocolo':
                                $status_class = 'bg-primary';
                                break;
                            case 'triagem':
                                $custom_style = 'style="background-color: #0d47a1; color: white;"';
                                break;
                            case 'separacao':
                                $status_class = 'bg-warning text-dark';
                                break;
                            case 'conferencia':
                                $status_class = 'bg-info text-dark';
                                break;
                            case 'expedicao':
                                $status_class = 'bg-white text-dark border';
                                break;
                            case 'entregue':
                                $status_class = 'bg-success';
                                break;
                        }
                        ?>
                        <span class="status-badge border <?= $status_class ?>" <?= $custom_style ?>><?= strtoupper($r->status) ?></span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="mt-4 text-end">
    <a href="<?= base_url('protocolo') ?>" class="btn btn-secondary">Voltar</a>
</div>