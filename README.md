Teste Keep Cloud

Visão Geral
O projeto é uma aplicação web construída utilizando o framework Laravel. Ele inclui funcionalidades de autenticação, gerenciamento de usuários, um dashboard, APIs para interação com usuários e sócios, entre outros recursos.

Funcionalidades Principais

Autenticação

Login: Rota para autenticar usuários existentes.

Registro: Rota para criar novas contas de usuário.

Recuperação de Senha: Rota para redefinir senhas esquecidas.

Verificação de E-mail: Rota para confirmar e verificar endereços de e-mail.

Gerenciamento de Sócios

Listagem de Sócios: Rota para exibir uma lista de sócios.

Criação de Sócios: Rota para criar novos registros de sócios.

Detalhes do Sócio: Rota para visualizar detalhes específicos de um sócio.

Atualização de Sócio: Rota para editar informações de um sócio.

Exclusão de Sócio: Rota para remover um registro de sócio.

Dashboard

Página de Dashboard: Exibe um painel de controle com informações relevantes para os usuários autenticados.

user - usuario@email.com

pass - senha123

routes : 

 GET Requests:
http://127.0.0.1:8000/

http://127.0.0.1:8000/api/user

http://127.0.0.1:8000/confirm-password

http://127.0.0.1:8000/dashboard

http://127.0.0.1:8000/forgot-password

http://127.0.0.1:8000/livewire/livewire.js

http://127.0.0.1:8000/livewire/preview-file/{filename}

http://127.0.0.1:8000/login

http://127.0.0.1:8000/profile

http://127.0.0.1:8000/register

http://127.0.0.1:8000/reset-password/{token}

http://127.0.0.1:8000/sanctum/csrf-cookie

http://127.0.0.1:8000/socios

http://127.0.0.1:8000/socios/create

http://127.0.0.1:8000/socios/{socio}

http://127.0.0.1:8000/socios/{socio}/edit

http://127.0.0.1:8000/verify-email

http://127.0.0.1:8000/verify-email/{id}/{hash}

POST Requests:

http://127.0.0.1:8000/_ignition/execute-solution

http://127.0.0.1:8000/_ignition/update-config

http://127.0.0.1:8000/livewire/update

http://127.0.0.1:8000/livewire/upload-file

http://127.0.0.1:8000/socios

PUT Request:

http://127.0.0.1:8000/socios/{socio}

DELETE Request:

http://127.0.0.1:8000/socios/{socio}

