<h3>Triagem</h3>

<a href="<?= base_url('triagem/historico') ?>" class="btn btn-secondary mb-3">
    Histórico Triagem
</a>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local Solicitante</th>
                <th>Nº Req.</th>
                <th>Grupo</th>
                <th>Tipo</th>
                <th>C. Custo</th>
                <th class="text-center">Status</th>
                <th>Prioridade / Enviar</th>
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
                <td><?= $r->centro_custo ?></td>
                <td class="text-center">
                    <span class="status-badge border text-dark" style="background-color: #f8f9fa;">
                        <?= strtoupper($r->status) ?>
                    </span>
                    <?php if($r->observacao_protocolo): ?>
                        <br><small class="text-muted">Obs: <?= $r->observacao_protocolo ?></small>
                    <?php endif; ?>
                </td>
                <td>
                    <form method="post" action="<?= base_url('triagem/enviarSeparacao/'.$r->id) ?>" class="d-flex gap-2">
                        <select name="prioridade" class="form-select form-select-sm" required style="width: 125px; border-radius: 8px;">
                            <option value="Normal">Normal</option>
                            <option value="Urgente">Urgente</option>
                            <option value="Não Urgente">Não Urgente</option>
                        </select>
                        <button type="submit" class="btn btn-success btn-sm">
                            Enviar
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
