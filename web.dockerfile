FROM nginx:1.21

COPY vhost.conf /etc/nginx/conf.d/default.conf

COPY ./public/ /var/www/public


RUN ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log


