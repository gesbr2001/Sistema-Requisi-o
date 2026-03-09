<h2>Configurações do Sistema</h2>
<p class="text-muted">Gerencie os cadastros do sistema.</p>

<div class="row mt-4">
    <div class="col-md-3 mb-4">
        <a href="<?= base_url('configuracao/destinos') ?>" class="text-decoration-none">
            <div class="card card-dashboard h-100 shadow-sm border-0"
                style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: white;">
                <div class="card-body text-center py-4">
                    <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                    <h5>Locais Solicitantes</h5>
                    <p class="small mb-0 opacity-75">Destinos dos protocolos</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="<?= base_url('configuracao/separadores') ?>" class="text-decoration-none">
            <div class="card card-dashboard h-100 shadow-sm border-0"
                style="background: linear-gradient(135deg, #065f46 0%, #10b981 100%); color: white;">
                <div class="card-body text-center py-4">
                    <i class="fas fa-box-open fa-3x mb-3"></i>
                    <h5>Separadores</h5>
                    <p class="small mb-0 opacity-75">Equipe de separação</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="<?= base_url('configuracao/conferentes') ?>" class="text-decoration-none">
            <div class="card card-dashboard h-100 shadow-sm border-0"
                style="background: linear-gradient(135deg, #92400e 0%, #f59e0b 100%); color: white;">
                <div class="card-body text-center py-4">
                    <i class="fas fa-clipboard-check fa-3x mb-3"></i>
                    <h5>Conferentes</h5>
                    <p class="small mb-0 opacity-75">Equipe de conferência</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3 mb-4">
        <a href="<?= base_url('configuracao/motoristas') ?>" class="text-decoration-none">
            <div class="card card-dashboard h-100 shadow-sm border-0"
                style="background: linear-gradient(135deg, #1e40af 0%, #6366f1 100%); color: white;">
                <div class="card-body text-center py-4">
                    <i class="fas fa-truck fa-3x mb-3"></i>
                    <h5>Motoristas</h5>
                    <p class="small mb-0 opacity-75">Equipe de logística</p>
                </div>
            </div>
        </a>
    </div>
</div>

<style>
    .card-dashboard {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .card-dashboard:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
    }
</style>