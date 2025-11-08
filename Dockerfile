# Dockerfile — بسيط ويدير php built-in server
FROM php:8.2-cli

# أنسخ كل الملفات
WORKDIR /srv/app
COPY . /srv/app

# أضف سكربت الإقلاع
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# expose أي منفذ (Render سيحدد PORT)
EXPOSE 8080

# شغّل السكربت الذي يقرأ متغير PORT ويشغّل php -S
CMD ["/entrypoint.sh"]
