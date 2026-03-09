<h2>Dashboard</h2>

<!-- Cards de Status -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card card-dashboard card-protocolo">
            <div class="card-body">
                <h6>PROTOCOLO</h6>
                <div class="text-large"><?= $protocolo ?></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-dashboard card-triagem">
            <div class="card-body">
                <h6>TRIAGEM</h6>
                <div class="text-large"><?= $triagem ?></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-dashboard card-separacao">
            <div class="card-body">
                <h6>SEPARAÇÃO</h6>
                <div class="text-large"><?= $separacao ?></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-dashboard card-expedicao">
            <div class="card-body">
                <h6>EXPEDIÇÃO</h6>
                <div class="text-large"><?= $expedicao ?></div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Requisições em Andamento</h4>

        <form method="get" class="d-flex gap-2">
            <input type="text" name="busca" class="form-control form-control-sm" placeholder="Nº Requisição..."
                value="<?= $busca_selecionada ?>" style="width: 180px; border-radius: 10px;">

            <select name="prioridade" class="form-select form-select-sm" style="width: 220px; border-radius: 10px;">
                <option value="">Todas as Prioridades</option>
                <option value="Normal" <?= $prioridade_selecionada == 'Normal' ? 'selected' : '' ?>>Normal</option>
                <option value="Urgente" <?= $prioridade_selecionada == 'Urgente' ? 'selected' : '' ?>>Urgente</option>
                <option value="Não Urgente" <?= $prioridade_selecionada == 'Não Urgente' ? 'selected' : '' ?>>Não Urgente
                </option>
            </select>
            <button type="submit" class="btn btn-primary btn-sm">Filtrar</button>
            <?php if ($prioridade_selecionada || $busca_selecionada): ?>
                <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary btn-sm border-0">Limpar</a>
            <?php endif; ?>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Local Solicitante</th>
                    <th class="text-center">Prioridade</th>
                    <th class="text-center">Entrega/Status</th>
                    <th class="text-center">Status Atual</th>
                    <th>Nº Req.</th>
                    <th>Data de Início</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requisicoes_ativas as $r): ?>
                    <tr>
                        <td><?= $r->destino_nome ?></td>
                        <td class="text-center">
                            <?php if ($r->prioridade): ?>
                                <span
                                    class="status-badge <?= $r->prioridade == 'Urgente' ? 'bg-danger text-white' : ($r->prioridade == 'Normal' ? 'bg-info text-white' : 'bg-secondary text-white') ?>">
                                    <?= $r->prioridade ?>
                                </span>
                            <?php else: ?>
                                <span class="text-muted small">Pendente</span>
                            <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <span
                                class="status-badge border <?= $r->status_protocolo == 'EXTRA' ? 'bg-danger text-white' : 'text-dark' ?>"
                                style="<?= $r->status_protocolo == 'EXTRA' ? '' : 'background-color: #f8f9fa;' ?>">
                                <?= strtoupper($r->status_protocolo) ?>
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="status-badge border text-dark" style="background-color: #f8f9fa;">
                                <?= strtoupper($r->status) ?>
                            </span>
                        </td>
                        <td><?= $r->numero_requisicao ?></td>
                        <td><?= date('d/m/Y H:i', strtotime($r->data_protocolo)) ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($requisicoes_ativas)): ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">Nenhuma requisição ativa encontrada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>