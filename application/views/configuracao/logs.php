<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Logs de Acesso ao Sistema</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('configuracao') ?>">Configurações</a></li>
                <li class="breadcrumb-item active" aria-current="page">Logs de Acesso</li>
            </ol>
        </nav>
    </div>
    <a href="<?= base_url('configuracao') ?>" class="btn btn-secondary shadow-sm" style="border-radius: 10px;">
        <i class="fas fa-arrow-left me-2"></i> Voltar
    </a>
</div>

<div class="card border-0 shadow-sm" style="border-radius: 15px;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3">Data/Hora</th>
                        <th class="py-3">Usuário</th>
                        <th class="px-4 py-3 text-center">Evento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($logs)): ?>
                        <tr>
                            <td colspan="3" class="text-center py-5 text-muted">
                                <i class="fas fa-info-circle fa-2x mb-3 d-block"></i>
                                Nenhum log de acesso encontrado.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($logs as $log): ?>
                            <tr>
                                <td class="px-4 py-3 text-muted">
                                    <?= date('d/m/Y H:i:s', strtotime($log->data_hora)) ?>
                                </td>
                                <td class="py-3">
                                    <strong>
                                        <?= $log->usuario_nome ?>
                                    </strong>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span
                                        class="status-badge <?= $log->evento == 'Login' ? 'bg-success text-white' : 'bg-secondary text-white' ?>">
                                        <?= $log->evento ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>