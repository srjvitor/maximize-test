# Histórico de mudanças #

### Git ###
1. Estarei adicionando ao repositório o .env e o arquivo de docker-compose somente para facilitar a execução do projeto pela Maximize;
2. Estarei adicionando os dois projetos (frontend e backend) em um único repositório somente para facilitar a execução do projeto pela Maximize;

### Frontend ###
1. Utilizei a lib do AXIOS para fazer as requisições ao backend;
2. Utilizei componentização para criar navbar, resumo da materia, feed, materia, footer.
3. Fiz o feed de visualização das materias como infinito de modo que quando não existem novas materias, um aviso é mostrado;

### Backend ###
1. Optei por utilizar o mysql como banco, criando seeds e factories para criar os dados da aplicação de forma automática;
2. Desabilitei as rotas web já que seria utilizado como API;
3. Desabilitei o CORS para poder receber solicitações do frontend;
4. No método de findAll optei por restringir a quantidade de caracteres recuperados na coluna de descricao para 60, já que no frontend será mostrando apenas parte do texto, páginados em 5 por requisição e adicionei um campo (não presente na documentação do teste) chamado id para poder recuperar a materia completa no método getOne;
