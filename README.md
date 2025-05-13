# Repositório de estudos para PHP/Laravel

Como aprendizado está sendo seguido o curso https://www.udemy.com/course/laravel-pro-do-basico-ao-avancado/

## Stacks utilizadas no aprendizado

  - PHP 11/12
  - Herd
  - Composer
  - Node.js
  - MySQL e MySQL WorkBench
  - Git
  - Artisan
  - Eloquent
  - Bootstrap
  - Sass
  - AdminLTE

## DB

- Os dados do banco estarão presentes no arquivo `.env`:
```
    DB_CONNECTION=mysql
    DB_HOST=*localhost*
    DB_PORT=*porta*
    DB_DATABASE=*nome*
    DB_USERNAME=*usuario*
    DB_PASSWORD=*senha*
```

## Vite

- Configurar o `package.json` para adicionar o plugin do Vite:
```
{
    "private": true,
    "type": "module",
    "scripts": {
        "build": "vite build",
        "dev": "vite"
    },
    "devDependencies": {
        "laravel-vite-plugin": "^*versão do plugin*",
        "vite": "^*versão do vite*"
    }
}
```

Em sequência rodar para instalar os pacotes:
```
npm i
```

## Bootstrap e Sass

- Configurar o Bootstrap para o Vite utilizando o Popper, rodando o comando:
```
npm i --save bootstrap @popperjs/core
```

- Instalar o Sass:
```
npm i --save-dev sass
```

- Em \resources modificar o folder '\css' para '\scss'. Agora dentro do folder \scss, modificar o arquivo `app.css` para `app.scss`. Isso permitirá que o Vite reconhecer o arquivo como Sass para realizar a compilação.

- Dentro do arquivo `app.scss`, não há necessidade de importar o Bootstrap pois o AdminLTE suprirá essa situação.

- No folder \resources\js, adicionar a seguinte linha no arquivo `app.js`:
```
import 'bootstrap';
```

- No arquivo `vite.config.js`, modificar o plugins conforme:
```
plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        })
    ],
```

- Finalmente, em \resources\views, no arquivo `welcome.blade.php` modificar conforme:
```
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/scss/app.scss')
    </head>
    <body>
        @vite('resources/js/app.js')
    </body>
</html>
```

## AdminLTE

 - Instalar com o comando:
```
npm install admin-lte
```

- No folder \resources\js, adicionar a seguinte linha no arquivo `app.js`:
```
import 'admin-lte';
```

- Dentro do arquivo `app.scss`, adicionar a linha:
```
@import 'admin-lte';
```


## Ambiente de desenvolvimento

 - Para rodar o ambiente execute:
```
npm run dev
```
