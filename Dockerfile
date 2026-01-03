# Simple Dockerfile to serve static files with nginx
FROM nginx:stable-alpine
COPY . /usr/share/nginx/html
# Remove default nginx index if a custom index is present
RUN rm -f /usr/share/nginx/html/default.conf || true
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
