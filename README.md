git clone (http link)

cd /herd/app

nvm use 22

composer intall

npm install -g npm-check-updates

ncu -v

ncu

ncu -u

rm -rf node_modules package-lock.json
or
remove the node folder if existing

npm install

npm run build

npm run dev

edit the .env
-- START
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-jetstream-template
DB_USERNAME=root
DB_PASSWORD=admin

APP_URL=http://laravel-jetstream-template.test
-- END

php artisan key:generate

php artisan migrate

then yes if not existed on your db

