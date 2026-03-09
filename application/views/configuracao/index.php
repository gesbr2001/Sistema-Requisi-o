<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Configurações do Sistema</h2>
        <p class="text-muted mb-0">Gerencie os cadastros e acompanhe os acessos ao sistema.</p>
    </div>
</div>

<div class="row mt-4">
    <!-- Locais Solicitantes -->
    <div class="col-md-4 col-lg-3 mb-4">
        <a href="<?= base_url('configuracao/destinos') ?>" class="text-decoration-none h-100 d-block">
            <div class="card card-dashboard h-100 shadow-sm border-0 bg-primary text-white">
                <div class="card-body text-center py-5">
                    <div class="icon-circle mb-3 mx-auto bg-white bg-opacity-25 ripple">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Locais Solicitantes</h5>
                    <p class="small mb-0 opacity-75">Destinos dos protocolos</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Separadores -->
    <div class="col-md-4 col-lg-3 mb-4">
        <a href="<?= base_url('configuracao/separadores') ?>" class="text-decoration-none h-100 d-block">
            <div class="card card-dashboard h-100 shadow-sm border-0 bg-success text-white">
                <div class="card-body text-center py-5">
                    <div class="icon-circle mb-3 mx-auto bg-white bg-opacity-25 ripple">
                        <i class="fas fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Separadores</h5>
                    <p class="small mb-0 opacity-75">Equipe de separação</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Conferentes -->
    <div class="col-md-4 col-lg-3 mb-4">
        <a href="<?= base_url('configuracao/conferentes') ?>" class="text-decoration-none h-100 d-block">
            <div class="card card-dashboard h-100 shadow-sm border-0 bg-warning text-white">
                <div class="card-body text-center py-5">
                    <div class="icon-circle mb-3 mx-auto bg-white bg-opacity-25 ripple">
                        <i class="fas fa-clipboard-check fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Conferentes</h5>
                    <p class="small mb-0 opacity-75">Equipe de conferência</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Motoristas -->
    <div class="col-md-4 col-lg-3 mb-4">
        <a href="<?= base_url('configuracao/motoristas') ?>" class="text-decoration-none h-100 d-block">
            <div class="card card-dashboard h-100 shadow-sm border-0 bg-info text-white">
                <div class="card-body text-center py-5">
                    <div class="icon-circle mb-3 mx-auto bg-white bg-opacity-25 ripple">
                        <i class="fas fa-truck fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Motoristas</h5>
                    <p class="small mb-0 opacity-75">Equipe de logística</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Logs de Acesso -->
    <div class="col-md-4 col-lg-3 mb-4">
        <a href="<?= base_url('configuracao/logs') ?>" class="text-decoration-none h-100 d-block">
            <div class="card card-dashboard h-100 shadow-sm border-0 bg-secondary text-white">
                <div class="card-body text-center py-5">
                    <div class="icon-circle mb-3 mx-auto bg-white bg-opacity-25 ripple">
                        <i class="fas fa-history fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">Logs de Acesso</h5>
                    <p class="small mb-0 opacity-75">Histórico de login/logout</p>
                </div>
            </div>
        </a>
    </div>
</div>

<style>
    .icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .card-dashboard {
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border-radius: 20px !important;
    }

    .card-dashboard:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
    }

    .card-dashboard:hover .icon-circle {
        transform: scale(1.1);
        background-color: rgba(255, 255, 255, 0.35) !important;
    }

    .bg-primary {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%) !important;
    }

    .bg-success {
        background: linear-gradient(135deg, #065f46 0%, #10b981 100%) !important;
    }

    .bg-warning {
        background: linear-gradient(135deg, #92400e 0%, #f59e0b 100%) !important;
    }

    .bg-info {
        background: linear-gradient(135deg, #1e40af 0%, #6366f1 100%) !important;
    }

    .bg-secondary {
        background: linear-gradient(135deg, #475569 0%, #94a3b8 100%) !important;
    }
</style>