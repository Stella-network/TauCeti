# server/Dockerfile
FROM nginx:1.24.0
COPY default.conf /etc/nginx/conf.d/default.dev.conf

# Nginxを起動
CMD ["nginx", "-g", "daemon off;"]
