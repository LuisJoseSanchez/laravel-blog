# Blog

This is a typical Blog made with Laravel framework. It is my first project with Laravel; I hope to learn a lot doing it :smiley:

## Install Laravel

### Install PHP

```console
sudo apt install php
```

### Install ext-zip extension

```console
sudo apt install php-zip
```

### Install Composer

```console
sudo apt install composer
```

### Install Laravel Installer

```console
composer global require laravel/installer
```

### Update path

In my case, I use Zsh.

```console
gedit .zshrc
```

Add the route `.config/composer/vendor/bin/` to the path.

```
# If you come from bash you might have to change your $PATH.
export PATH=.config/composer/vendor/bin/:$HOME/bin:/usr/local/bin:$PATH
```

Reload `.zshrc`.

```console
source .zshrc
```


## Create project

```console
laravel new laravel-blog
```

## Launch server

```console
cd laravel-blog
php artisan serve
```



