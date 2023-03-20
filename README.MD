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

# Assume that you have laravel_workspace_1 as a container name
$ docker exec -it laravel_workspace_1 bash

# After login to your workspace container
$ composer install

$ npm install
```

Cheers! 
