FROM node:alpine

RUN apk add yarn
RUN yarn global add @vue/cli
WORKDIR /app
COPY . .

EXPOSE 8080