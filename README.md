# Docker Development Environment

#### Links:
- https://hub.docker.com
- https://docs.docker.com
- https://github.com/docker/toolbox/releases
- https://docs.docker.com/compose/compose-file

- https://smartclaimservices.de:5000/v2/_catalog
- https://smartclaimservices.de:5000/v2/my-service/tags/list

---
 
**Makefile** - command runner, docu

**_dev** - additional files (scripts, docus, sql damps ...)

**_volumes** - production volumes as files (log, storage ...)

**src** - Application source files

**docker** - Dockerfiles configuration

---

#### Development:
- .env
- docker-compose.yml

#### Test:
- .env-test
- docker-compose-test.yml

#### Production:
- example.env-production
- docker-compose-production.yml

---

## A Docker Deployment Workflow

1. **Build the Docker image** 
    ~~~
    make image-build
    ~~~
   
2. **Ship Imaage to the registry**
    ~~~
    make registry-login
   
    make image-push
   
    make registry-logout
    ~~~
   
3. **Trigger deployment**
    ~~~
    make test-deploy
    ~~~
    or
    ~~~
    make production-deploy
    ~~~
