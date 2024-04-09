# cursoPHP
entendendo funcionamento básico do PHP, composer e criando APIs 
php artisan serve ->para statartar com xamp  aberto

criar um model:
php artisan make:model
php artisan make:controller NomeController --resource -> cria controller com metodos padrão vazio
php artisan make:controller NomeController --api -> cria com parametros basicos vazio para api
nome do model
enter

criando migrations 
php artisan make:migration

nome deve serguir o padrão:
create_nomedatabela_table
com isso ele vai criar a migration para poder criar a tabela no banco com base nessa migration
só editar os campos certinhos e reodar o comando
php artisan migrate para criar a tabela automaticamente no banco de dados

php artisan migrate:rollback ->ele desfaz a ultima migration
php artisan migrate:refresh -> ele desfaz a migrationa anterioro e refaz a atual com as alterações 
obs: quando desfazr para recriar ele desfaz a tabela e refaz novamente perdendo dados existentes
php artisan migrate:refresh --seed ->ele destroe a base com os dados, recria e alimenta com os dados seader uma vez crado e configurado com os dados aleatórios  

adcionar sem deletar os dados:
php artisan make:migration add_preco_field_to_veiculos_table - ele vai adcionar campo preco na tabela veiculos


criar um factory == fabrica
php artisan make:factory VeiculoFactory

seeder é um alimentador de dados com base em factory com dados aleatorios 
gerar dados aleatórios do factory
php artisan db:seed

criar um arquivo separado seeder
php artisan make:seeder VeiculosTableSeeder
                        NomeTableSeeder


se tentar acessar um diretorio em uma aplicação com servidor apache
por padrão o apache ler arquivos .htm, .hml, .html 
se ele não encontrar isso ele lista os arquivos no diretorio.
para resolver por criar um arquivo .html vazio 
para ele carregar direto ou configurar o apache
