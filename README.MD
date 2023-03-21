# Demonstration for Laravel 9 Mailer

You can easily run this project by using Laradock.

```bash
$ git clone --recurse-submodules https://github.com/ratiugtun/laravel-mail-demo.git

# Or if you forget to use --recurse-submodules on git clone
$ git submodule update --init --recursive --remote
```

Next, copy configuration from `configs/laradock` before run the `docker compose`

```bash
$ cp configs/laradock/.env.example laradock/.env
$ cd laradock
$ docker compose up -d nginx
```

After all containers are running, install app dependencies in `workspace` container

```bash
# To find workspace container name
$ docker ps

# Assume that you have laradock_workspace_1 as a container name
$ docker exec -it laradock_workspace_1 bash

# Create your .env file after login to your workspace container.

$ cp .env.example .env
$ vi .env

# Next step is to install dependencies.
$ composer install

$ npm install

# Then you have to generate key for your application.
$ php artisan key:generate


# Due to TinyMCE distribution, I have to configure Vite to copy from node_modules into public directory by npm run build.
# If you not prefer to create minified of the other assets while run on development(run with npm run dev), you can simply copy and paste
# the node_modules/tinymce as public/build/tinymce .

# Lastly, you may have to run Vite to load TinyMCE and other assets.
$ npm run build

# If you prefer to run on development run this again.
$ npm run dev
```

Cheers! 
