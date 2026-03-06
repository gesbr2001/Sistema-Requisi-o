<div class="table-container">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local</th>
                <th>Nº Req.</th>
                <th>Grupo</th>
                <th>Tipo</th>
                <th class="text-center">Prioridade</th>
                <th>Separador</th>
                <th>Conferente</th>
                <th>Motorista</th>
                <th>Volumes</th>
                <th>Data Final</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($requisicoes as $r): ?>
            <tr>
                <td><strong>#<?= $r->id ?></strong></td>
                <td><?= $r->destino_nome ?></td>
                <td><?= $r->numero_requisicao ?></td>
                <td><?= $r->grupo ?></td>
                <td><?= $r->tipo_requisicao ?></td>
                <td class="text-center">
                    <span class="status-badge border"><?= $r->prioridade ?></span>
                </td>
                <td><?= $r->separador ?></td>
                <td><?= $r->conferente ?></td>
                <td><?= $r->motorista ?></td>
                <td><?= $r->qtd_volume ?></td>
                <td><small><?= date('d/m/Y H:i', strtotime($r->data_expedicao)) ?></small></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
