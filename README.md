# Instruções para rodar o projeto #

1. Após os containers subirem com "docker compose up -d", executar os comandos abaixo;
1. Rodar comando "docker exec feed-backend php artisan migrate" para rodar as migrations do Laravel;
2. O comando acima poderá resultar em erro caso o container do MySQL ainda não tenha iniciado completamente e criado o banco "feed", por favor aguardar até a conclusão do processo para executa-lo;
3. Rodar comando "docker exec feed-backend php artisan db:seed" para rodar as factories do Laravel;