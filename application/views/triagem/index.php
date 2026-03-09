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
                <th>Grupo</th>
                <th>Tipo</th>
                <th>Nº Req.</th>
                <th>C. Custo</th>
                <th class="text-center">Entrega/Status</th>
                <th>Prioridade / Enviar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
                    <td><strong>#<?= $r->id ?></strong></td>
                    <td><?= $r->destino_nome ?></td>
                    <td><?= $r->grupo ?></td>
                    <td><?= $r->tipo_requisicao ?></td>
                    <td><?= $r->numero_requisicao ?></td>
                    <td><?= $r->centro_custo ?></td>
                    <td class="text-center">
                        <span
                            class="status-badge border <?= $r->status_protocolo == 'EXTRA' ? 'bg-danger text-white' : 'text-dark' ?>"
                            style="<?= $r->status_protocolo == 'EXTRA' ? '' : 'background-color: #f8f9fa;' ?>">
                            <?= strtoupper($r->status_protocolo) ?>
                        </span>
                        <?php if ($r->observacao_protocolo): ?>
                            <br><small class="text-muted">Obs: <?= $r->observacao_protocolo ?></small>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <form method="post" action="<?= base_url('triagem/enviarSeparacao/' . $r->id) ?>"
                                class="d-flex gap-2">
                                <select name="prioridade" class="form-select form-select-sm" required
                                    style="width: 125px; border-radius: 8px;">
                                    <option value="Normal">Normal</option>
                                    <option value="Urgente">Urgente</option>
                                    <option value="Não Urgente">Não Urgente</option>
                                </select>
                                <button type="submit" class="btn btn-success btn-sm">
                                    Enviar
                                </button>
                            </form>
                            <a href="<?= base_url('triagem/excluir/' . $r->id) ?>" class="btn btn-outline-danger btn-sm"
                                title="Excluir" onclick="return confirm('Tem certeza que deseja excluir esta requisição?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>