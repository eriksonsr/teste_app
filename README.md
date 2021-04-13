# Instruções

- Criar o banco de dados através do scrpit sql localizado na pasta outros na raíz do projeto;
- Criar um arquivo .env dentro da raíz do sistema contendo os dados de acesso para o banco de dados, MySQL neste caso;
- Após o servidor web estar rodando, uma listagem de usuários pode ser obtida no formato json através da URL: http://url_servidor/api/listar;
- Um usuário pode ser cadastrado passando os dados via requisição POST para a URL: http://url_servidor/api/cadastrar;
- Um usuário pode ser excluído passando o id dele via requisição DELETE para a URL: http://url_servidor/api/excluir/IdDoUsuário