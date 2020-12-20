## � �������� ����������
� ������� ����� �� ������� ������� �������� ��������.
������� � ������� ������ ����� �� ����������, �� � ���� �� ����������, ������� � ���� ����� ������� �� ������. 
��������� ��� ������� ��� ������� ���� ��������, ����� �� �������� � ����������� mysql, ���������������� � ��������. ���� ������� � ������ �� �����, � ������� ������� ���� ������ ������.
����������� ��� � Virtual Box ��������� ������, �������� �� Ubuntu ��������� ������.
������� ��� ������ �� ��������, �� ����� ���������, � ������� ����� ������� �����������.
## Requirements
* Docker version 18.06 or later
* Docker compose version 1.22 or later
* An editor or IDE
* MySQL 
* Node.js

Note: OS recommendation - Linux Ubuntu based.

## Components
1. Nginx 1.19
2. PHP 7.4 fpm
3. MySQL 8
4. Laravel 6 LTS
5. Node.js

## Setting up DEV environment
1.Clone this repository from GitHub.

Note: Delete storage/mysql-data folder if it is exist.

2.Add domain to local 'hosts' file:
```bash
127.0.0.1    localhost
```

3.Configure `/docker/dev/xdebug.ini` (optional):

- In case you need debug only requests with IDE KEY: PHPSTORM from frontend in your browser:
```bash
xdebug.remote_autostart = 0
```
Install locally in Firefox extension "Xdebug helper" and set in settings IDE KEY: PHPSTORM

- In case you need debug any request to an api (by default):
```bash
xdebug.remote_autostart = 1
```

4.Build and start the image from your terminal:
```bash
make build
make start
make composer-install
make env-dev
make npm-install
```

5.Set key for application:
```bash
make key-generate
```

6.Make sure that you have installed migrations/seeds:
```bash
make migrate
make seed
```

7.In order to use this application, please open in your browser next url: [http://localhost](http://localhost).


## Building containers
In case you edited Dockerfile or other environment configuration you'll need to build containers again using next commands:
```bash
make stop
make build
make start
```

## Start and stop environment
Please use next make commands in order to start and stop environment:
```bash
make start
make stop
```
