FROM gitlab.vestiairecollective.com:4567/docker-images/php-7-3-ci

COPY ops/nginx.conf /etc/nginx/conf.d/default.conf
COPY ops/php.ini /usr/local/etc/php/conf.d/custom.ini

WORKDIR /var/www
COPY . .

RUN chmod +x ./ops/deploy.sh
ENTRYPOINT ["sh", "-c", "./ops/deploy.sh"]