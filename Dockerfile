FROM httpd:2.4
RUN apt-get update
RUN apt-get -y install apache2
RUN apt-get -y install software-properties-common
RUN apt-get update
RUN apt-get -y install php7.0
RUN apt-get -y install git
RUN git clone https://github.com/mallowe/poocalc.git
COPY . /var/www/html/
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]