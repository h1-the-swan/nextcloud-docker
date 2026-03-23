# nextcloud-docker: persistent Nextcloud instance

## Getting started

`docker-compose up`

Nextcloud will be running at <http://localhost:48916>

Go to this address in a web browser and set up an admin account, e.g., username "admin", password "password"

## Notes

The `docker-compose.yml` file is modified from <https://github.com/nextcloud/docker/blob/f4dbcf523a27ba240b29dcf92b24d0c20544b42d/.examples/docker-compose/insecure/postgres/apache/docker-compose.yml>

Go into the docker container (`app`) and run something like:

```sh
su -p www-data -s /bin/sh -c "php /var/www/html/occ config:system:set trusted_domains 1 --value=192.168.0.111"
```

Nextcloud cannot be accessed from outside the local network. This is (in part) because SSL needs to be set up. In the future, look into allowing this by doing something like this: <https://github.com/nextcloud/docker/tree/master/.examples/docker-compose/with-nginx-proxy/postgres/apache>

### rescan files

```sh
su -p www-data -s /bin/sh -c "php /var/www/html/occ files:scan --all"
```