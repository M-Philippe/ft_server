docker build -t t_docker .
docker run -ti -d --name ft_server -p 80:80 -p 443:443 t_docker
