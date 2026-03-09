<h3>Separação</h3>

<div class="table-container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Local Solicitante</th>
                <th>Grupo</th>
                <th>Tipo</th>
                <th>Requi.</th>
                <th>C.C</th>
                <th class="text-center">Prioridade</th>
                <th class="text-center">Status</th>
                <th>Separador</th>
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
                            class="status-badge <?= $r->prioridade == 'Urgente' ? 'bg-danger text-white' : ($r->prioridade == 'Normal' ? 'bg-info text-white' : 'bg-secondary text-white') ?>">
                            <?= $r->prioridade ?>
                        </span>
                    </td>
                    <td class="text-center">
                        <span
                            class="status-badge border <?= $r->status_protocolo == 'EXTRA' ? 'bg-danger text-white' : 'text-dark' ?>"
                            style="<?= $r->status_protocolo == 'EXTRA' ? '' : 'background-color: #f8f9fa;' ?>">
                            <?= strtoupper($r->status_protocolo) ?>
                        </span>
                    </td>
                    <td>
                        <form method="post" action="<?= base_url('separacao/enviarConferencia/' . $r->id) ?>"
                            class="d-flex gap-2">
                            <select name="separador" class="form-select form-select-sm" required
                                style="width: 150px; border-radius: 8px;">
                                <option value="">Selecione...</option>
                                <?php foreach ($separadores as $s): ?>
                                    <option value="<?= $s->nome ?>"><?= $s->nome ?></option>
                                <?php endforeach; ?>
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