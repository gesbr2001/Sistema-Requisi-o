# 🏥 Sistema de Gestão de Requisições Hospitalares

![PHP](https://img.shields.io/badge/PHP-7.4-blue.svg)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-firebrick.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)

Um sistema robusto e moderno para o gerenciamento de requisições de almoxarifado farmacêutico e hospitalar, focado em rastreabilidade e eficiência operacional.

---

## 🚀 Funcionalidades

O sistema cobre todo o ciclo de vida de uma requisição:

1.  **Dashboard Inteligente**: Visão geral em tempo real com cards de status e filtros de prioridade.
2.  **Protocolo**: Registro inicial de solicitações com campos detalhados e observações.
3.  **Triagem**: Classificação de prioridade (Urgente, Normal, Não Urgente) e encaminhamento.
4.  **Separação**: Atribuição de colaboradores (separadores) para a coleta física dos itens.
5.  **Conferência**: Validação rigorosa dos itens separados com registro de divergências.
6.  **Expedição**: Controle de entrega, incluindo dados do motorista, placa do veículo e volumes.
7.  **Históricos Detalhados**: Logs específicos para cada etapa, facilitando auditorias e relatórios futuros.

---

## 🎨 Design & UX

- **Identidade Visual**: Tema "Deep Blue" com gradientes modernos.
- **Tipografia**: Utiliza a fonte **Montserrat** (Google Fonts) para um visual limpo e profissional.
- **Interface Responsiva**: Layout otimizado para diferentes resoluções.
- **Acessibilidade**: Badges de status coloridos e ícones intuitivos.

---

## 🛠️ Tecnologias Utilizadas

- **Backend**: PHP (CodeIgniter 3)
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework CSS**: Bootstrap 5.3
- **Banco de Dados**: MySQL / MariaDB
- **Ícones**: SVG customizados (Pharmacy Theme)

---

## ⚙️ Instalação e Configuração

### Pré-requisitos
- Servidor Web (Apache/Nginx)
- PHP 7.4 ou superior
- MySQL 5.7+

### Passos
1.  Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/sistema-requisicao.git
    ```
2.  Configure o banco de dados no arquivo:
    `application/config/database.php`
3.  Configure a `base_url` no arquivo:
    `application/config/config.php`
4.  Importe o banco de dados (se houver um arquivo `.sql` disponível) ou configure as tabelas necessárias:
    - `requisicoes`
    - `destinos`
    - `usuarios`
5.  Acesse pelo navegador: `http://localhost/sistema-requisicao`

---

## 📄 Licença

Este projeto é de uso privado e confidencial. Para permissões de uso ou contribuição, entre em contato com o administrador.

---

*Desenvolvido com foco na excelência da gestão logística hospitalar.*
