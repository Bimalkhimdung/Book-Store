FROM ubuntu:22.04
RUN apt-get update && \
    apt-get install -y python3

WORKDIR /home

COPY . /home/
EXPOSE 8000

CMD ["python3","-m","http.server","--directory","/home/src"]