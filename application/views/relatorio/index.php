<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-0">Relatórios e Estatísticas</h2>
        <p class="text-muted">Desempenho e quantidades de Protocolos</p>
    </div>

    <div class="d-flex gap-2">
        <div class="dropdown">
            <button class="btn btn-outline-success btn-sm dropdown-toggle shadow-sm" type="button"
                data-bs-toggle="dropdown">
                <i class="fas fa-file-export me-1"></i> Exportar
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item"
                        href="<?= base_url('relatorio/exportar_excel?start_date=' . $start_date . '&end_date=' . $end_date) ?>">
                        <i class="far fa-file-excel me-2 text-success"></i> Excel (.csv)
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="javascript:void(0)" onclick="generatePDF()">
                        <i class="far fa-file-pdf me-2 text-danger"></i> PDF (Visual)
                    </a>
                </li>
            </ul>
        </div>

        <form method="get" class="d-flex gap-2 align-items-end bg-white p-3 rounded shadow-sm border">
            <div>
                <label class="form-label small fw-bold">Data Inicial</label>
                <input type="date" name="start_date" class="form-control form-control-sm" value="<?= $start_date ?>">
            </div>
            <div>
                <label class="form-label small fw-bold">Data Final</label>
                <input type="date" name="end_date" class="form-control form-control-sm" value="<?= $end_date ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">
                <i></i> Filtrar
            </button>
            <a href="<?= base_url('relatorio') ?>" class="btn btn-outline-secondary btn-sm">
                Limpar
            </a>
        </form>
    </div>
</div>

<div id="reportContent">

    <!-- Metrics Overview -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card h-100 border-0 shadow-sm" style="border-left: 5px solid #0d6efd !important;">
                <div class="card-body">
                    <h6 class="text-muted small text-uppercase">Total por Tipo</h6>
                    <div class="d-flex align-items-center">
                        <h3 class="mb-0 me-2">
                            <?= count($by_type) ?>
                        </h3>
                        <span
                            class="badge bg-primary-subtle text-primary border border-primary-subtle">Categorias</span>
                    </div>
                    <div class="mt-3 small">
                        <?php foreach (array_slice($by_type, 0, 3) as $t): ?>
                            <div class="d-flex justify-content-between mb-1">
                                <span>
                                    <?= $t->label ?>
                                </span>
                                <span class="fw-bold">
                                    <?= $t->value ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 border-0 shadow-sm" style="border-left: 5px solid #fd7e14 !important;">
                <div class="card-body">
                    <h6 class="text-muted small text-uppercase">Atividade Separadores</h6>
                    <div class="d-flex align-items-center">
                        <h3 class="mb-0 me-2">
                            <?= count($by_separator) ?>
                        </h3>
                        <span class="badge bg-warning-subtle text-warning border border-warning-subtle">Membros</span>
                    </div>
                    <div class="mt-3 small">
                        <?php if (empty($by_separator)): ?>
                            <p class="text-muted">Sem dados no período</p>
                        <?php else: ?>
                            <?php foreach (array_slice($by_separator, 0, 3) as $s): ?>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>
                                        <?= $s->label ?>
                                    </span>
                                    <span class="fw-bold">
                                        <?= $s->value ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 border-0 shadow-sm" style="border-left: 5px solid #6f42c1 !important;">
                <div class="card-body">
                    <h6 class="text-muted small text-uppercase">Atividade Conferentes</h6>
                    <div class="d-flex align-items-center">
                        <h3 class="mb-0 me-2">
                            <?= count($by_conferente) ?>
                        </h3>
                        <span class="badge bg-purple-subtle text-purple border border-purple-subtle"
                            style="background: #f3e8ff; color: #6b21a8;">Membros</span>
                    </div>
                    <div class="mt-3 small">
                        <?php if (empty($by_conferente)): ?>
                            <p class="text-muted">Sem dados no período</p>
                        <?php else: ?>
                            <?php foreach (array_slice($by_conferente, 0, 3) as $c): ?>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>
                                        <?= $c->label ?>
                                    </span>
                                    <span class="fw-bold">
                                        <?= $c->value ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 border-0 shadow-sm" style="border-left: 5px solid #198754 !important;">
                <div class="card-body">
                    <h6 class="text-muted small text-uppercase">Atividade Motoristas</h6>
                    <div class="d-flex align-items-center">
                        <h3 class="mb-0 me-2">
                            <?= count($by_driver) ?>
                        </h3>
                        <span class="badge bg-success-subtle text-success border border-success-subtle">Equipe</span>
                    </div>
                    <div class="mt-3 small">
                        <?php if (empty($by_driver)): ?>
                            <p class="text-muted">Sem dados no período</p>
                        <?php else: ?>
                            <?php foreach (array_slice($by_driver, 0, 3) as $d): ?>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>
                                        <?= $d->label ?>
                                    </span>
                                    <span class="fw-bold">
                                        <?= $d->value ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row mb-5">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow-sm p-4">
                <h5 class="card-title mb-4">Requisições por Grupo</h5>
                <div style="height: 350px;">
                    <canvas id="groupChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm p-4">
                <h5 class="card-title mb-4">Requisições por Entrega / Status</h5>
                <div style="height: 350px;">
                    <canvas id="deliveryChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- New Charts Row -->
    <div class="row mb-5">
        <div class="col-md-8 mb-4">
            <div class="card border-0 shadow-sm p-4">
                <h5 class="card-title mb-4">Volume Diário de Separação</h5>
                <div style="height: 300px;">
                    <canvas id="dailyChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4">
                <h5 class="card-title mb-4">Participação dos Separadores (%)</h5>
                <div style="height: 300px;">
                    <canvas id="participationChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Productivity Section -->
    <div class="card border-0 shadow-sm p-4 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="card-title mb-0">Produtividade de Separadores (Base 8h43m)</h5>
            <span class="badge bg-info-subtle text-info border border-info-subtle">Meta: Requi p/ Hora</span>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Separador</th>
                        <th class="text-center">Total de Requisições</th>
                        <th class="text-center">Média p/ Hora</th>
                        <th>Status / Progresso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productivity as $p): ?>
                        <tr>
                            <td class="fw-bold"><?= $p->label ?></td>
                            <td class="text-center">
                                <span class="badge bg-light text-dark border"><?= $p->total ?></span>
                            </td>
                            <td class="text-center">
                                <div class="fw-bold text-primary"><?= $p->avg_hour ?></div>
                                <small class="text-muted" style="font-size: 10px;">itens/hora</small>
                            </td>
                            <td style="width: 30%;">
                                <?php
                                $val = (float) str_replace(',', '.', $p->avg_hour);
                                $percent = min(100, ($val / 50) * 100); // Exemplo: meta de 50 itens/hora
                                $color = $val > 40 ? 'bg-success' : ($val > 20 ? 'bg-primary' : 'bg-warning');
                                ?>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar <?= $color ?>" role="progressbar"
                                        style="width: <?= $percent ?>%"></div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- Fim de reportContent -->

<!-- Bibliotecas para Gráficos e PDF -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
    // Configurações Globais do Chart.js
    Chart.defaults.font.family = "'Montserrat', sans-serif";
    Chart.defaults.color = '#64748b';

    // Gráfico de Grupos
    const groupCtx = document.getElementById('groupChart').getContext('2d');
    new Chart(groupCtx, {
        type: 'doughnut',
        data: {
            labels: <?= json_encode(array_column($by_group, 'label')) ?>,
            datasets: [{
                data: <?= json_encode(array_column($by_group, 'value')) ?>,
                backgroundColor: [
                    '#0d6efd', '#fd7e14', '#6610f2', '#198754', '#0dcaf0', '#ffc107', '#adb5bd'
                ],
                borderWidth: 0,
                hoverOffset: 15
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                }
            },
            cutout: '70%'
        }
    });

    // Gráfico de Entrega / Status
    const deliveryCtx = document.getElementById('deliveryChart').getContext('2d');
    new Chart(deliveryCtx, {
        type: 'bar',
        data: {
            labels: <?= json_encode(array_column($by_delivery_status, 'label')) ?>,
            datasets: [{
                label: 'Quantidade',
                data: <?= json_encode(array_column($by_delivery_status, 'value')) ?>,
                backgroundColor: 'rgba(13, 110, 253, 0.8)',
                borderRadius: 8,
                barThickness: 35
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { display: false }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });

    // Gráfico de Volume Diário
    const dailyCtx = document.getElementById('dailyChart').getContext('2d');
    new Chart(dailyCtx, {
        type: 'line',
        data: {
            labels: <?= json_encode(array_map(function ($d) {
                return date('d/m', strtotime($d->label));
            }, $by_daily)) ?>,
            datasets: [{
                label: 'Requisições',
                data: <?= json_encode(array_column($by_daily, 'value')) ?>,
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: '#0d6efd'
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, grid: { borderDash: [5, 5] } },
                x: { grid: { display: false } }
            }
        }
    });

    // Gráfico de Participação (%)
    const participationCtx = document.getElementById('participationChart').getContext('2d');
    new Chart(participationCtx, {
        type: 'pie',
        data: {
            labels: <?= json_encode(array_column($by_separator, 'label')) ?>,
            datasets: [{
                data: <?= json_encode(array_column($by_separator, 'value')) ?>,
                backgroundColor: [
                    '#0d6efd', '#20c997', '#ffc107', '#fd7e14', '#6610f2', '#6f42c1', '#d63384', '#dc3545', '#adb5bd'
                ],
                borderWidth: 2,
                borderColor: '#ffffff'
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: { boxWidth: 12, padding: 15, font: { size: 10 } }
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            let label = context.label || '';
                            let value = context.parsed || 0;
                            let total = context.dataset.data.reduce((a, b) => a + b, 0);
                            let percentage = ((value / total) * 100).toFixed(1) + '%';
                            return label + ': ' + value + ' (' + percentage + ')';
                        }
                    }
                }
            }
        }
    });

    // Função para Gerar PDF (Dompdf via Servidor)
    async function generatePDF() {
        const btn = document.querySelector('[onclick="generatePDF()"]');
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processando...';
        btn.classList.add('disabled');

        try {
            // Captura os gráficos como Base64
            const groupChartImg = document.getElementById('groupChart').toDataURL('image/png');
            const deliveryChartImg = document.getElementById('deliveryChart').toDataURL('image/png');
            const dailyChartImg = document.getElementById('dailyChart').toDataURL('image/png');
            const participationChartImg = document.getElementById('participationChart').toDataURL('image/png');

            // Cria um formulário temporário para enviar os dados via POST
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '<?= base_url('relatorio/exportar_pdf') ?>';
            form.target = '_blank';

            const fields = {
                'start_date': '<?= $start_date ?>',
                'end_date': '<?= $end_date ?>',
                'chart_group': groupChartImg,
                'chart_delivery': deliveryChartImg,
                'chart_daily': dailyChartImg,
                'chart_participation': participationChartImg
            };

            for (const name in fields) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = name;
                input.value = fields[name];
                form.appendChild(input);
            }

            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);

        } catch (error) {
            console.error('Erro ao preparar PDF:', error);
            alert('Erro ao preparar o PDF. Por favor, tente novamente.');
        } finally {
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.remove('disabled');
            }, 2000);
        }
    }
</script>