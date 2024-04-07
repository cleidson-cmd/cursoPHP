# cursoPHP
entendendo funcionamento básico do PHP, composer e criando APIs 
php artisan serve ->para statartar com xamp  aberto

criar um model:
php artisan make:model
nome do model
enter

criando migrations 
php artisan make:migration

nome deve serguir o padrão:
create_nomedatabela_table
com isso ele vai criar a migration para poder criar a tabela no banco com base nessa migration
só editar os campos certinhos e reodar o comando
php artisan migrate para criar a tabela automaticamente no banco de dados
