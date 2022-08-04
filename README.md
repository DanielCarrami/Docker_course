# Hello Stranger

This repository only exists to store the templates from the online course I took about Docker CI-CD.

Feel free to have a look, the builds are pretty basic.

The course was mounted in an EC2 instance in AWS

Some usefull command:

```
docker ps
docker images
docker system prune
docker exec -it [Container ID] [command]
docker exec -it node-app /bin/bash
docker volume rm $(docker volume ls -f=dangling=true -q)
```

Docker networks:

```
docker network ls
docker network inspect
docker network create --driver bridge [Name]
docker run --network [Name]
docker network connect [Network] [Container]
docker network disconnect [Network] [Container]
```

Docker volumes:

```
docker run -v [/my/data/path/]:/image/path (check docker-hub)
docker voume create [Name]
docker run -v [Name]:/image/path
```

