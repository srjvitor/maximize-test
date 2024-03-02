# Instruções para rodar o projeto #
1. Após os containers subirem com "docker compose up -d", executar os comandos abaixo;
1. Rodar comando "docker exec feed-backend php artisan migrate" para rodar as migrations do Laravel;
2. Rodar comando "docker exec feed-backend php artisan db:seed" para rodar as factories do Laravel;