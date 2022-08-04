### To run the container:


(Expose HTTP port in AWS)

```
docker build -t <name>/nodeapp .
docker run --name nodeapp -p 80:8000 <name>/nodeapp
```
