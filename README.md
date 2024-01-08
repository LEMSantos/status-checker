# Sysvale Status Checker

Pacote para Laravel que registra uma rota para checagem da disponibilidade do servidor. 

Sysvale Status Checker requires
PHP >= 8

## Instalação

Com composer:

```bash
composer require sysvale/status-checker
```

#### Rota

URL:
- `/health/check`

Resposta:
- Status Code: 200
- ContentType: JSON `{status: 'ok'}`
