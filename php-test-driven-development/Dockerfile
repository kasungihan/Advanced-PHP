FROM debian:buster-slim

LABEL maintainer="Kasun Gihan <kasungihan.dev@gmail.com>"

ENV WWWGROUP=1000

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=Asia/Colombo

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
    && apt-get install -y gnupg gosu curl wget apt-transport-https ca-certificates software-properties-common zip unzip git sqlite3 libcap2-bin libpng-dev dnsutils librsvg2-bin

RUN wget https://packages.sury.org/php/apt.gpg -O /tmp/php.gpg && apt-key add /tmp/php.gpg

RUN echo "deb https://packages.sury.org/php/ buster main" > /etc/apt/sources.list.d/php.list

RUN apt-get update && apt-get install -y php8.3-cli

RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.3

#RUN groupadd --force -g $WWWGROUP app
#RUN useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 app


#COPY ./php/php.ini /etc/php/8.3/cli/conf.d/app.ini

EXPOSE 80

CMD ["php-fpm7"]

#ENTRYPOINT ["start-container"]
