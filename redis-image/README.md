# To run the container

```
docker build .
docker run [Container ID]
docker exec -it [Container ID] redis-cli
```

With tags:

```
docker build --tag <name>/redis .
docker run -d <name>/redis
```
