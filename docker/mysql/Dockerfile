FROM mysql:9.1.0

# Установка кодировки и инициализация базы данных
RUN mysql --default-character-set=utf8mb4 --default-collation=utf8mb4_unicode_ci -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE} CHARACTER SET ${MYSQL_CHARSET} COLLATE ${MYSQL_COLLATION};"

# Установка пользователя и прав
RUN mysql -e "GRANT ALL PRIVILEGES ON *.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"

# Запуск MySQL
CMD ["mysqld"]
