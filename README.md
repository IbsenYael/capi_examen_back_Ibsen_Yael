INSTRUCCIONES PARA LA EJECUCIÓN DEL PROYECTO: *npm install comando para instalar dependencias de compilacion como lo es Laravel mix *composer install comando para instalar composer y poder ejecutar el proyecto *Configurar archivo .env del proyecto para la conexion a la base de datos *crear base de datos "prueba" *php artisan migrate:fresh --seed commando para crear las tablas dentro de la base de datos *php artisan serve para ver ejecutar y ver el proyecto *ejecutar comandos en carpeta del proyecto *si el archivo .env no se encuentra crear uno en la raiz del proyecto y copiar el siguiente codigo no olvides modificar los datos de la BD para la conexion:
/////////////////////////////////////////////////
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:p+suJNjDT6jw2mlmG/cY+HRw9sKSW8WeSSWQ10nNecw=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=domicilios
DB_USERNAME=(su usuario)
DB_PASSWORD=(su contraseña)

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
