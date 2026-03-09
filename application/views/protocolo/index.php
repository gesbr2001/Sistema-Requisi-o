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
                <th>Local Solicitante</th>
                <th>Grupo</th>
                <th>Tipo</th>
                <th>Nº Req.</th>
                <th>C. Custo</th>
                <th class="text-center">Entrega/Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicoes as $r): ?>
                <tr>
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
                    </td>
                    <td>
                        <?php if ($r->status == 'protocolo'): ?>
                            <div class="d-flex gap-1">
                                <a href="<?= base_url('protocolo/editar/' . $r->id) ?>" class="btn btn-primary btn-sm"
                                    title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('protocolo/enviarTriagem/' . $r->id) ?>" class="btn btn-success btn-sm"
                                    title="Enviar Triagem">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="<?= base_url('protocolo/excluir/' . $r->id) ?>" class="btn btn-outline-danger btn-sm"
                                    title="Excluir" onclick="return confirm('Tem certeza que deseja excluir esta requisição?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>