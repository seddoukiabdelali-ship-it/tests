#!/bin/sh
# إفتراضي إلى 8080 لو لم يُعطَ PORT
PORT=${PORT:-8080}

# لو لديك ملف index، افتح الجذر، أو افتح safmmaroc.php مباشرة.
# سنجعل المستند الافتراضي هو index.php إن وُجد، وإلا نوجّه إلى safmmaroc.php
if [ -f /srv/app/index.php ]; then
  DOCROOT="/srv/app"
elif [ -f /srv/app/safmmaroc.php ]; then
  # نعمل ملف index.php صغير يعيد توجيه إلى safmmaroc.php
  cat > /srv/app/index.php <<'EOF'
<?php
include __DIR__ . '/safmmaroc.php';
EOF
  DOCROOT="/srv/app"
else
  DOCROOT="/srv/app"
fi

echo "Starting PHP server on 0.0.0.0:$PORT, docroot=$DOCROOT"
exec php -S 0.0.0.0:"$PORT" -t "$DOCROOT"
