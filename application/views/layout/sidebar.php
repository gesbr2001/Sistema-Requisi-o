<div class="col-2 sidebar-blue text-white vh-100">

    <h4 class="p-3 text-white">Protocolo</h4>

    <ul class="nav flex-column flex-grow-1">

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('dashboard') ?>">
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('protocolo') ?>">
                Protocolo
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('triagem') ?>">
                Triagem
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('separacao') ?>">
                Separação
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('conferencia') ?>">
                Conferência
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('expedicao') ?>">
                Expedição
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                href="#collapseHistorico" role="button" aria-expanded="false" aria-controls="collapseHistorico">
                <span>Históricos</span>
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
            <a class="nav-link text-white" href="<?= base_url('configuracao') ?>">
                Configurações
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
        <div class="d-flex align-items-center">
            <i class="fas fa-user-circle fa-lg me-2 text-muted"></i>
            <span class="fw-bold text-dark"><?= $this->session->userdata('nome') ?></span>
            <span class="user-badge">
                <i class="fas fa-tag me-1 small"></i>
                <?= ucfirst(str_replace('_', ' ', $this->session->userdata('perfil'))) ?>
            </span>
        </div>
    </div>