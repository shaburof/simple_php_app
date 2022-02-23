FROM php:8.0-apache
WORKDIR /app
COPY . /var/www/html
#RUN yarn install --production
#CMD ["node", "src/index.js"]