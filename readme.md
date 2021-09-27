# Comment pull le projet ?

1. Copier le .env.sample en .env et le modifier pour renseigner la BDD
2. composer install
3. npm i
4. si vous avez cette erreur "The metadata storage is not up to date, please run the sync-metadata-storage command to fix this issue." faites cela "php bin/console doctrine:migration:sync-metadata-storage"
5. php bin/console doctrine:database:create
   php bin/console make:migration
   php bin/console doctrine:migrations:migrate

6. Try changing the DATABASE_URL in .env from

DATABASE_URL=mysql://root:@127.0.0.1:3306/pouss_vert?serverVersion=10.4.11
to

DATABASE_URL=mysql://root:@127.0.0.1:3306/pouss_vert?serverVersion=mariadb-10.4.11