<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Separador</th>
                <th>Conferente</th>
                <th class="text-center">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($requisicoes as $r): ?>
            <tr>
                <td><strong>#<?= $r->id ?></strong></td>
                <td><?= $r->destino_nome ?></td>
                <td><?= $r->numero_requisicao ?></td>
                <td><?= $r->separador ?></td>
                <td><?= $r->conferente ?></td>
                <td class="text-center">
                    <span class="status-badge border text-dark" style="background-color: #f8f9fa;">
                        <?= strtoupper($r->status) ?>
                    </span>
                    <?php 
                    if($r->observacao_expedicao && strpos($r->observacao_expedicao, '[') === 0) {
                        $sub = substr($r->observacao_expedicao, 0, strpos($r->observacao_expedicao, ']') + 1);
                        echo "<br><span class='status-badge bg-info text-white'>$sub</span>";
                    }
                    ?>
                </td>
                <td>
                    <a href="<?= base_url('expedicao/expedir/'.$r->id) ?>" class="btn btn-primary btn-sm">
                        Expedir
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
