FROM node:23-alpine

WORKDIR /var/www
COPY package*.json .

USER node

EXPOSE 5173

CMD ["sh", "-c", "npm install && npm run dev -- --host --hmr"]
