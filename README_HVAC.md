# Docker Compose: Apache, PHP 7.3, and MySQL 8

Docker Compose file for Containers with Apache, PHP 7.3, and MySQL 8, for Web Development.

More details can be found [here](https://davescripts.com/docker-compose-centos-apache-php-mysql).

<br>

## Build and Start the Containers

Create the Containers.

```sh
docker-compose up -d
```

<br>

## View Logs

Check the Docker Compose Logs.

```sh
docker-compose logs
```

<br>

## Test

Open the http://localhost:4000/test.php  url on your browser.

<br>

You should see the following text:

```sh
Connection successful!
```
<br>

## Stop the Containers

Stop the Containers.

```sh
docker-compose stop
```

<br>

## Remove the Containers

Remove the Containers.

```sh
docker-compose down
```
