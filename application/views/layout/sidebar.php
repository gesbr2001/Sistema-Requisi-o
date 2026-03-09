<div class="col-2 sidebar-blue text-white vh-100">

    <h4 class="p-3 text-white">Protocolo</h4>

    <ul class="nav flex-column flex-grow-1">

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('dashboard') ?>">
                <i class="bi bi-house-fill me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('protocolo') ?>">
                <i class="bi bi-archive-fill me-2"></i> Protocolo
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('triagem') ?>">
                <i class="bi bi-funnel-fill me-2"></i> Triagem
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('separacao') ?>">
                <i class="bi bi-box-seam-fill me-2"></i> Separação
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('conferencia') ?>">
                <i class="bi bi-clipboard-check-fill me-2"></i> Conferência
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('expedicao') ?>">
                <i class="bi bi-truck me-2"></i> Expedição
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#collapseHistorico" role="button" aria-expanded="false" aria-controls="collapseHistorico">
                <span><i class="bi bi-hourglass-split me-2"></i> Históricos</span>
                <i class="fas fa-chevron-right small rotate-icon"></i>
            </a>
            <div class="collapse" id="collapseHistorico">
                <ul class="nav flex-column ps-3">
                    <li class="nav-item">
                        <a class="nav-link text-white opacity-75 small" href="<?= base_url('historico') ?>">
                            Geral
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white opacity-75 small" href="<?= base_url('conferencia/historico') ?>">
                            Conferência
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white opacity-75 small" href="<?= base_url('expedicao/historico') ?>">
                            Expedição
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('relatorio') ?>">
                <i class="bi bi-bar-chart-fill me-2"></i> Relatórios
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('configuracao') ?>">
                <i class="bi bi-gear-fill me-2"></i> Configurações
            </a>
        </li>

        <li class="nav-item mt-auto pt-4">
            <hr class="mx-3 opacity-25">
            <a class="nav-link text-white py-3" href="<?= base_url('auth/logout') ?>"
                style="color: #ffc9c9 !important;">
                <strong>Sair do Sistema</strong>
            </a>
        </li>

    </ul>

</div>

<div class="col-10 p-4" style="overflow-y: auto; height: 100vh;">
    <div class="user-info-bar">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown"
                data-bs-toggle="dropdown" aria-expanded="false" style="color: inherit;">
                <i class="fas fa-user-circle fa-lg me-2 text-muted"></i>
                <span class="fw-bold text-dark me-2"><?= $this->session->userdata('nome') ?></span>
                <span class="user-badge">
                    <i class="fas fa-tag me-1 small"></i>
                    <?= ucfirst(str_replace('_', ' ', $this->session->userdata('perfil'))) ?>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userDropdown"
                style="border-radius: 12px; min-width: 200px;">
                <li class="px-3 py-2 border-bottom mb-1 bg-light" style="border-radius: 12px 12px 0 0;">
                    <div class="small text-muted text-uppercase fw-bold" style="font-size: 0.65rem;">Minha Conta</div>
                    <div class="fw-bold"><?= $this->session->userdata('nome') ?></div>
                </li>
                <li>
                    <a class="dropdown-item py-2 px-3" href="<?= base_url('perfil/trocar_senha') ?>">
                        <i class="fas fa-key me-2 text-muted"></i> Alterar Senha
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider opacity-25">
                </li>
                <li>
                    <a class="dropdown-item py-2 px-3 text-danger" href="<?= base_url('auth/logout') ?>">
                        <i class="fas fa-sign-out-alt me-2"></i> Sair do Sistema
                    </a>
                </li>
            </ul>
        </div>
    </div>